<?php

namespace frontend\models;

use Yii;
use common\models\UserModel;
use yii\db\ActiveRecord;

class RegisterForm extends ActiveRecord
{
    public $username;
    public $password;
    public $re_password;
    public $email;
    public $mobile;
    public $rememberMe = true;
    public $verify_code;
    public $phone_code;
    public $smsCode;
    public $smsCodeTime = 900;


    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'min' => 4, 'max' => 32],
            ['username', 'unique', 'targetClass' => '\common\models\UserModel', 'message' => Yii::t('app/error', 'This username has already been taken.')],
            ['username', 'match', 'pattern' => '/^[0-9a-zA-Z\x{4e00}-\x{9fa5}\_-]+$/u', 'message' => '格式错误，仅支持中文、字母、数字、“-”“_”的组合，4-32个字符'],

            ['email', 'trim'],
            ['email', 'email'],
            ['email', 'string', 'max' => 100],
            ['email', 'filter', 'filter' => function ($value) {
                if (UserModel::findByEmail($value) && $value !== '') {
                    $this->addError('email', Yii::t('app/error', 'This email address has already been taken.'));
                }
                return strtolower($value);   // 字符串转换为小写
            }],

            ['password', 'trim'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6, 'max' => 32],

            ['re_password', 'trim'],
            ['re_password', 'required'],
            ['re_password', 'compare', 'compareAttribute' => 'password', 'message' => '两次密码不一致'],

            ['mobile', 'trim'],
            ['mobile', 'required'],
            ['mobile', 'match', 'pattern' => '/^1[0-9]{10}$/', 'message' => '{attribute}格式不正确'],
            ['mobile', 'unique', 'targetClass' => '\common\models\UserModel', 'message' => '{attribute}已经被占用了'],

            ['rememberMe', 'boolean'],
            ['rememberMe', 'compare', 'compareValue' => true, 'message' => '请阅读《{attribute}》后，勾选阅读并同意'],

            ['verify_code', 'trim'],
            ['verify_code', 'required'],
            ['verify_code', 'captcha', 'captchaAction' => 'auth/captcha'],

            ['smsCode', 'trim'],
            ['smsCode', 'required'],
            ['smsCode', 'integer'],
            ['smsCode', 'string', 'min' => 6, 'max' => 6],
            ['smsCode', 'getSmsCode'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => Yii::t('app', 'username'),
            'password' => Yii::t('app', 'password'),
            're_password' => Yii::t('app', 're_password'),
            'email' => Yii::t('app', 'email'),
            'mobile' => Yii::t('app', 'mobile'),
            'verify_code' => Yii::t('app', 'verify_code'),
            'smsCode' => Yii::t('app', 'phone_code'),
            'rememberMe' => Yii::t('app', 'register_agreement'),
        ];
    }

    public function register()
    {
        if (!$this->validate()) {
            return null;
        }

        // 验证通过，删除验证码session缓存
        Yii::$app->session->remove('smsVerify');

        $user = new UserModel();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->mobile = $this->mobile;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }

    public function getSmsCode($attribute)
    {
        $smsVerify = json_decode(Yii::$app->session->get('smsVerify'), true);

        $mobilePhone = $this->mobile;
        $smsCode = $this->smsCode;
        $smsCodeTime = $this->smsCodeTime;

        if ((time() - $smsVerify['smsTime']) < $smsCodeTime && $smsVerify['smsCode'] == $smsCode && $smsVerify['mobilePhone'] == $mobilePhone) {
            return true;
        } else {
            return $this->addError($attribute, '手机验证码不正确');
        }
    }

}