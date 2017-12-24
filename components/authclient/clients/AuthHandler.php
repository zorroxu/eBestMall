<?php

namespace app\components\authclient\clients;

use app\models\UserAuth;
use app\models\User;
use Yii;
use yii\authclient\ClientInterface;
use yii\helpers\ArrayHelper;
use yii\base\DynamicModel;

/**
 * AuthHandler handles successful authentication via Yii auth component
 */
class AuthHandler
{
    /**
     * @var ClientInterface
     */
    private $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function handle()
    {
        $attributes = $this->client->getUserAttributes();
        $openid = ArrayHelper::getValue($attributes, 'openid');
        $username = ArrayHelper::getValue($attributes, 'username');
        $avatar = ArrayHelper::getValue($attributes, 'avatar');

        /* @var UserAuth $auth */
        $auth = UserAuth::find()->where([
            'source' => $this->client->getId(),
            'source_id' => $openid,
        ])->one();

        if (Yii::$app->user->isGuest) {
            if ($auth) { // login 用户存在-未登录,进行登录操作
                /* @var User $user */
                $user = $auth->user;
                //$this->updateUserInfo($user);   // 更新用户信息
                Yii::$app->user->login($user, Yii::$app->params['user.rememberMeDuration']);
            } else { // signup 用户不存在 进行注册

                // TODO: 判断用户名是否符合要求
                $model = new DynamicModel(compact('username'));

                $model->addRule(['username'], 'trim')
                    ->addRule(['username'], 'required')
                    ->addRule(['username'], 'string', ['min' => 4, 'max' => 32])
                    ->addRule(['username'], 'unique', ['targetClass' => '\app\models\User', 'message' => Yii::t('app/error', 'This username has already been taken.')])
                    ->addRule('username', 'match', ['pattern' => '/^[0-9a-zA-Z\x{4e00}-\x{9fa5}\_-]+$/u', 'message' => '格式错误，仅支持中文、字母、数字、“-”“_”的组合，4-32个字符'])
                    ->validate();

                if ($model->hasErrors()) {
                    Yii::$app->getSession()->setFlash('error', [
                        Yii::t('app', $username . " 用户名已被注册，待设计第三方注册页面 Shadow"),
                    ]);
                } else {
                    $password = Yii::$app->security->generateRandomString(6);
                    $user = new User([
                        'username' => $username,
                        'password' => $password,
                        'avatar' => $avatar,
                    ]);
                    $user->generateAuthKey();
                    $user->generatePasswordResetToken();

                    $transaction = User::getDb()->beginTransaction();

                    if ($user->save()) {
                        $auth = new UserAuth([
                            'user_id' => $user->user_id,
                            'source' => $this->client->getId(),
                            'source_id' => (string)$openid,
                        ]);
                        if ($auth->save()) {
                            $transaction->commit();
                            Yii::$app->user->login($user, Yii::$app->params['user.rememberMeDuration']);
                        } else {
                            Yii::$app->getSession()->setFlash('error', [
                                Yii::t('app', 'Unable to save {client} account: {errors}', [
                                    'client' => $this->client->getTitle(),
                                    'errors' => json_encode($auth->getErrors()),
                                ]),
                            ]);
                        }
                    } else {
                        Yii::$app->getSession()->setFlash('error', [
                            Yii::t('app', 'Unable to save user: {errors}', [
                                'client' => $this->client->getTitle(),
                                'errors' => json_encode($user->getErrors()),
                            ]),
                        ]);
                    }
                }
            }
        } else { // user already logged in
            if (!$auth) { // add auth provider
                $auth = new UserAuth([
                    'user_id' => Yii::$app->user->id,
                    'source' => $this->client->getId(),
                    'source_id' => (string)$attributes['id'],
                ]);
                if ($auth->save()) {
                    /** @var User $user */
                    $user = $auth->user;
                    //$this->updateUserInfo($user);   // 更新用户信息
                    Yii::$app->getSession()->setFlash('success', [
                        Yii::t('app', 'Linked {client} account.', [
                            'client' => $this->client->getTitle()
                        ]),
                    ]);
                } else {
                    Yii::$app->getSession()->setFlash('error', [
                        Yii::t('app', 'Unable to link {client} account: {errors}', [
                            'client' => $this->client->getTitle(),
                            'errors' => json_encode($auth->getErrors()),
                        ]),
                    ]);
                }
            } else { // there's existing auth
                Yii::$app->getSession()->setFlash('error', [
                    Yii::t('app',
                        'Unable to link {client} account. There is another user using it.',
                        ['client' => $this->client->getTitle()]),
                ]);
            }
        }
    }

    /**
     * @param User $user
     */
    private function updateUserInfo(User $user)
    {
        $attributes = $this->client->getUserAttributes();
        $nickname = ArrayHelper::getValue($attributes, 'login');
        if ($user->nickname === null && $nickname) {
            $user->nickname = $nickname;
            $user->save();
        }
    }
}