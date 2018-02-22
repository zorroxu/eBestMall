@extends('layouts.app')

@section('title', 'eBestMall（鸿宇V8） - B2B2C商城系统')

@push('styles')
    <link href="{{ asset('statics/css/goods.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('statics/js/goods.js') }}"></script>
@endpush

@section('content')
    <ul class="breadcrumb">
        <li><a href="/">首页</a></li>
        <li><a href="javascript:;">手机 / 运营商 / 数码</a></li>
        <li><a href="javascript:;">手机通讯</a></li>
        <li><a href="javascript:;">手机</a></li>
        <li class="active">苹果(Apple） iPhoneX Plus - 测试商品 - 平台自营</li>
    </ul>

    <div class="goods-index">
        <div class="product-intro">
            <div class="product-preview-wrap">
                <div class="product-preview">
                    <div class="product-preview-main-img">
                        <div class="product-preview-main-img-box">
                            <div class="product-preview-main-img-box-magnifier" style="display: none; left: 0px; top: 200px;"></div>
                            <img src="/statics/img/temp/temp-goods_img_002.jpg" alt="">
                            <div class="product-preview-main-video-wrap">
                                <a class="product-video-btn" href="javascript:;" data-video-url="">
                                    <i class="product-video-btn-ico far fa-play-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-preview-main-img-big-box" style="display: none;">
                            <img src="/statics/img/temp/temp-goods_img_002_big.jpg" alt="" style="left: 0px; top: -388px;">
                        </div>
                    </div>
                    <div class="product-preview-thumbnail-wrap">
                        <div class="product-preview-thumbnail-list">
                            <ul style="width: 600px;">
                                <li class="">
                                    <a href="javascript:;">
                                        <img src="/statics/img/temp/temp-goods_img_002_small.jpg" alt="" data-img="/statics/img/temp/temp-goods_img_002.jpg" data-img-big="/statics/img/temp/temp-goods_img_002_big.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="/statics/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="/statics/img/temp/temp-goods_img_001.jpg" data-img-big="/statics/img/temp/temp-goods_img_001_big.jpg">
                                    </a>
                                </li>
                                <li class="">
                                    <a href="javascript:;">
                                        <img src="/statics/img/temp/temp-goods_img_002_small.jpg" alt="" data-img="/statics/img/temp/temp-goods_img_002.jpg" data-img-big="/statics/img/temp/temp-goods_img_002_big.jpg">
                                    </a>
                                </li>
                                <li class="">
                                    <a href="javascript:;">
                                        <img src="/statics/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="/statics/img/temp/temp-goods_img_001.jpg" data-img-big="/statics/img/temp/temp-goods_img_001_big.jpg">
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="javascript:;">
                                        <img src="/statics/img/temp/temp-goods_img_002_small.jpg" alt="" data-img="/statics/img/temp/temp-goods_img_002.jpg" data-img-big="/statics/img/temp/temp-goods_img_002_big.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="/statics/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="/statics/img/temp/temp-goods_img_001.jpg" data-img-big="/statics/img/temp/temp-goods_img_001_big.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="/statics/img/temp/temp-goods_img_002_small.jpg" alt="" data-img="/statics/img/temp/temp-goods_img_002.jpg" data-img-big="/statics/img/temp/temp-goods_img_002_big.jpg">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="/statics/img/temp/temp-goods_img_001_small.jpg" alt="" data-img="/statics/img/temp/temp-goods_img_001.jpg" data-img-big="/statics/img/temp/temp-goods_img_001_big.jpg">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a class="prev" href="javascript:;"><i class="icon-navigate_before"></i></a>
                        <a class="next" href="javascript:;"><i class="icon-navigate_next"></i></a>
                    </div>

                    <div class="product-video-wrap">
                        <a class="product-video-close" href="javascript:;">
                            <i class="product-video-close-ico far fa-times-circle fa-3x pull-right"></i>
                        </a>
                        <video class="product-video-main" src="/uploads/temps/video-001.mp4" controls="controls" preload="auto" loop="loop" muted="muted" width="412" height="412">
                            对不起！您的浏览器不支持视频播放 video 标签。
                        </video>
                    </div>

                    <div class="product-preview-info">
                        <div class="product-preview-info-left">
                            <a href="javascript:;"><i class="icon-share-alt"></i>分享</a>
                            <a href="javascript:;"><i class="icon-goods-heart"></i>收藏商品</a>
                        </div>
                        <div class="product-preview-info-right"><a href="javascript:;">举报</a></div>
                    </div>
                </div>
            </div>
            <div class="product-info-wrap">
                <div class="product-info-name">苹果(Apple） iPhoneX Plus - 测试商品 - 平台自营</div>
                <div class="product-info-describe">
                    暖春开学季，就要“焕”新装！领券可享12期白条免息！<a href="#" title="量免息券，领券戳这里！ ">量免息券，领券戳这里！</a><br>推荐选择下方的移动、联通、电信优惠购，套餐有优惠，还有话费返还。            </div>
                <div class="product-info-price-wrap">
                    <div class="product-info-price-wrap-statistics">
                        <div class="product-info-price-wrap-comment-count">
                            <p>浏览</p>
                            <a class="notice" href="javascript:;">999999</a>
                        </div>
                        <div class="product-info-price-wrap-comment-count">
                            <p>评价</p>
                            <a class="notice" href="javascript:;">999999</a>
                        </div>
                        <div class="product-info-price-wrap-comment-count">
                            <p>销量</p>
                            <a class="notice" href="javascript:;">999999</a>
                        </div>
                    </div>
                    <div class="product-info-price">
                        <div class="dt">价　　格</div>
                        <div class="dd">
                        <span class="p-price">
                            <span>￥</span>
                            <span class="price">7999.99</span>
                        </span>
                            <a class="notice" href="javascript:;">降价通知</a>
                        </div>
                    </div>
                    <div class="product-info-market-price">
                        <div class="dt">市 场 价</div>
                        <div class="dd">
                        <span class="p-price">
                            <span>￥</span>
                            <span class="price">8999.99</span>
                        </span>
                        </div>
                    </div>
                    <div class="product-info-sales-promotion">
                        <div class="dt">促　　销</div>
                        <div class="dd">
                            <p class=""><span class="sales-promotion-reg-bg">满送</span>满39元即赠热销商品，赠完即止</p>
                            <p class=""><span class="sales-promotion-reg-bg">限购</span>购买1-2件时享受单件价￥6888，超出数量以结算价为准</p>
                        </div>
                    </div>
                </div>
                <div class="product-info-strip product-summary">
                    <ul>
                        <li>
                            <div class="dt">配 送 至</div>
                            <div class="dd">北京 有货</div>
                        </li>
                        <li>
                            <div class="dt">重　　量</div>
                            <div class="dd">0.435kg</div>
                        </li>
                    </ul>
                </div>

                <!-- TODO: 暂时隐藏属性 -->
                <div class="product-info-strip">
                    <div class="product-info-choose-attr">
                        <!-- @a class active disabled -->
                        <ul>
                            <li>
                                <div class="dt">选择颜色</div>
                                <div class="dd">
                                    <a href="javascript:;">红色</a>
                                    <a class="active" href="javascript:;">金色</a>
                                    <a href="javascript:;">白色</a>
                                </div>
                            </li>
                            <li>
                                <div class="dt">选择版本</div>
                                <div class="dd">
                                    <a class="active" href="javascript:;">公开版</a>
                                    <a href="javascript:;">双网通</a>
                                </div>
                            </li>
                            <li>
                                <div class="dt">套　　装</div>
                                <div class="dd">
                                    <a class="active" href="javascript:;">优惠套装1</a>
                                    <a href="javascript:;">优惠套装2</a>
                                    <a class="disabled" href="javascript:;">优惠套装3</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="product-info-choose-amount-wrap">
                    <div class="product-info-choose-amount">
                        <input class="goods-number" type="text" value="1" data-stock="999999">
                        <div class="product-info-choose-amount-btn">
                            <a href="javascript:;" class="btn-add item"><i class="icon-increase"></i></a>
                            <a href="javascript:;" class="btn-reduce"><i class="icon-decrease"></i></a>
                        </div>
                    </div>
                    <div class="product-info-choose-btn-buy product-info-choose-btn"><a href="javascript:;">立即购买</a>
                    </div>
                    <div class="product-info-choose-btn-add product-info-choose-btn"><a href="javascript:;">加入购物车</a>
                    </div>
                </div>
            </div>
            <div class="guess-you-like-wrap">
                <div class="guess-you-like">
                    <div class="guess-you-like-header">
                        <i></i>
                        <span>看了又看</span>
                    </div>
                    <div class="guess-you-like-content">
                        <ul>
                            <li>
                                <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                    <div class="guess-you-like-content-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                        <p>¥198.00</p>
                                    </div>
                                    <div class="guess-you-like-content-dn">
                                        <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                    <div class="guess-you-like-content-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                        <p>¥198.00</p>
                                    </div>
                                    <div class="guess-you-like-content-dn">
                                        <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                    <div class="guess-you-like-content-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                        <p>¥198.00</p>
                                    </div>
                                    <div class="guess-you-like-content-dn">
                                        <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                    <div class="guess-you-like-content-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                        <p>¥198.00</p>
                                    </div>
                                    <div class="guess-you-like-content-dn">
                                        <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                    <div class="guess-you-like-content-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                        <p>¥198.00</p>
                                    </div>
                                    <div class="guess-you-like-content-dn">
                                        <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                    <div class="guess-you-like-content-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                        <p>¥198.00</p>
                                    </div>
                                    <div class="guess-you-like-content-dn">
                                        <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                    <div class="guess-you-like-content-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                        <p>¥198.00</p>
                                    </div>
                                    <div class="guess-you-like-content-dn">
                                        <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色">
                                    <div class="guess-you-like-content-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0001.jpg" alt="">
                                        <p>¥198.00</p>
                                    </div>
                                    <div class="guess-you-like-content-dn">
                                        <p>苹果iPhone7钢化膜 4.7英寸 3D碳纤维全屏全覆盖钢化玻璃膜 手机高清屏幕保护贴膜 黑色</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="guess-you-like-content-footer">
                        <a class="prev" href="javascript:;"><i class="icon-chevron-up"></i></a>
                        <a class="next" href="javascript:;"><i class="icon-chevron-down2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-recommend-wrap">
            <div class="w">
                <div class="product-recommend">
                    <div class="product-recommend-header">
                        <ul>
                            <li class="active">店长推荐</li>
                            <li>店铺热卖</li>
                        </ul>
                    </div>
                    <div class="product-recommend-content">
                        <div class="product-recommend-content-list">
                            <ul>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                            <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                            <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                            <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                            <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                            <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                            <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-recommend-content-list">
                            <ul>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                            <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥999.99</strong></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                            <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥888.88</strong></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                            <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥999.99</strong></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                            <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥888.88</strong></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                            <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥999.99</strong></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                        <div class="product-recommend-content-list-up">
                                            <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                            <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                        </div>
                                        <div class="product-recommend-content-list-dn"><strong>￥888.88</strong></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-detail-wrap">
            <div class="product-detail-aside">
                <div class="shop-info-wrap">
                    <div class="shop-info-name"><h3><a href="javascript:;">店铺名称</a></h3></div>
                    <div class="shop-info">
                        <div class="item">
                            <dl>
                                <dt>信　誉：</dt>
                                <dd>
                                    <a href="javascript:;" title="信誉等级：10分">
                                        <i class="icon-diamond"></i>
                                        <i class="icon-diamond"></i>
                                        <i class="icon-diamond"></i>
                                        <i class="icon-diamond"></i>
                                        <i class="icon-diamond"></i>
                                    </a>
                                </dd>
                            </dl>
                        </div>
                        <div class="item">
                            <dl>
                                <dt>联　系：</dt>
                                <dd>
                                    <a href="javascript:;" title="QQ">
                                        <i class="icon-qq"></i>
                                    </a>
                                </dd>
                            </dl>
                        </div>
                        <div class="item">
                            <dl>
                                <dt>资　质：</dt>
                                <dd>
                                    <a href="javascript:;" title="个人实名认证">
                                        <i class="icon-drivers-license-o"></i>
                                    </a>
                                    <a href="javascript:;" title="企业认证">
                                        <i class="icon-user-tie"></i>
                                    </a>
                                    <a href="javascript:;" title="已缴纳保证金：10000">
                                        <i class="icon-shield"></i>
                                    </a>
                                </dd>
                            </dl>
                        </div>
                        <div class="item">
                            <dl>
                                <dt>地　址：</dt>
                                <dd><a href="javascript:;" title="中国北京朝阳区建设路1288号">中国北京朝阳区建设路1288号</a></dd>
                            </dl>
                        </div>
                        <div class="item shop-rate-wrap">
                            <div class="shop-rate">
                                <!-- @icon icon-arrow-up icon-arrow-down -->
                                <dl>
                                    <dt>描述</dt>
                                    <dd><a href="javascript:;">5.0<i class="icon-arrow-up"></i></a></dd>
                                </dl>
                                <dl>
                                    <dt>服务</dt>
                                    <dd><a href="javascript:;">5.0<i class="icon-arrow-up"></i></a></dd>
                                </dl>
                                <dl>
                                    <dt>物流</dt>
                                    <dd><a href="javascript:;">5.0<i class="icon-arrow-up"></i></a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="shop-info-footer">
                        <div class="shop-info-footer-btn">
                            <a href="javascript:;"><i class="icon-home"></i>进店逛逛</a>
                            <a href="javascript:;"><i class="icon-star"></i>关注店铺</a>
                        </div>
                    </div>
                </div>
                <div class="shop-info-search product-detail-aside-item-wrap">
                    <div class="shop-info-search-header product-detail-aside-item-header"><h3>店内搜索</h3></div>
                    <div class="shop-info-search-content product-detail-aside-item-content">
                        <form action="javascript:;">
                            <p class="sp-form-item1"><label for="sp-keyword">关键字：</label><span><input type="text" id="sp-keyword"></span>
                            </p>
                            <p class="sp-form-item2"><label for="sp-price">价　格：</label><span><input type="text" id="sp-price"> 到 <input type="text" id="sp-price1"></span></p>
                            <p class="sp-form-item3"><label for="btnShopSearch"></label><span><input type="submit" value="搜索" id="btnShopSearch" data-url="javascripit:;"></span>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="product-detail-aside-item-wrap-nav">
                    <div class="product-detail-aside-tab-header">
                        <ul>
                            <li class="active">店铺热销</li>
                            <li>热门关注</li>
                        </ul>
                    </div>
                    <div class="product-detail-aside-item-content product-recommend-content-list product-detail-aside-host-content">
                        <ul>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>1</i>热销<em>888888</em>件</span><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>2</i>热销<em>888888</em>件</span><strong>￥39.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>3</i>热销<em>888888</em>件</span><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>4</i>热销<em>888888</em>件</span><strong>￥39.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>5</i>热销<em>888888</em>件</span><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>6</i>热销<em>888888</em>件</span><strong>￥39.88</strong></div>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>1</i>热销<em>999999</em>件</span><strong>￥999.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>2</i>热销<em>999999</em>件</span><strong>￥39.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>3</i>热销<em>999999</em>件</span><strong>￥999.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>4</i>热销<em>999999</em>件</span><strong>￥39.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>5</i>热销<em>999999</em>件</span><strong>￥999.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn">
                                        <span><i>6</i>热销<em>999999</em>件</span><strong>￥39.88</strong></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="product-detail-aside-item-wrap shop-new-product-wrap">
                    <div class="product-detail-aside-item-header"><h3>店铺新品</h3></div>
                    <div class="shop-new-product product-detail-aside-item-content product-recommend-content-list">
                        <ul>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0003.jpg" alt="">
                                        <p>摩梵欧 苹果7手机壳指环支架 适用于iPhone7/7plus卡通浮雕保护软套 5.5英寸-巴黎塔</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.99</strong></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画">
                                    <div class="product-recommend-content-list-up">
                                        <img src="/statics/img/temp/temp-goods_img_small_0005.jpg" alt="">
                                        <p>摩梵欧 iPhone6S手机壳+钢化膜组合防摔硅胶浮雕保护套 适用于苹果6/6S/Plus 4.7英寸-水墨画</p>
                                    </div>
                                    <div class="product-recommend-content-list-dn"><strong>￥39.88</strong></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="product-detail">
                <div class="product-detail-header">
                    <ul>
                        <li class="active">商品介绍</li>
                        <li>规格与包装</li>
                        <li>售后保障</li>
                        <li>商品评价（0）</li>
                    </ul>
                    <div class="product-recommend-header-btn"><a href="javascript:;">加入购物车</a></div>
                </div>
                <div class="product-detail-content-wrap">
                    <div class="product-detail-content">
                        <div class="product-detail-content-parameter">
                            <div class="product-detail-content-parameter-title">
                                <span>品牌：</span>
                                <a class="parameter-brand-name" href="javascript:;" title="苹果（Apple）">苹果（Apple）</a>
                                <a class="parameter-btn-follow" href="javascript:;"><i class="icon-heart3"></i>关注</a>
                            </div>
                            <div class="product-detail-content-parameter-list">
                                <ul>
                                    <li>商品名称：AppleiPhone7 Plus</li>
                                    <li>店铺：<a href="javascript:;" title="平台自营">平台自营</a></li>
                                    <li>商品毛重：470.00g</li>
                                    <li>商品产地：中国大陆</li>
                                    <li>系统：苹果（IOS）</li>
                                    <li>后置摄像头像素：后置双摄像头</li>
                                    <li>机身内存：128GB</li>
                                    <li>热点：后置双摄像头</li>
                                </ul>
                            </div>
                            <p class="more-parameter"><a href="#">更多参数 &gt;&gt;</a></p>
                        </div>
                        <div class="product-detail-content-main">
                            <!-- Product detail content Start-->
                            <p style="text-align:center;"><img src="//img30.360buyimg.com/popWaterMark/jfs/t3292/30/4768230111/183978/11cad8a1/585c8d4eN8ea09fd1.jpg"></p>                        <!-- Product detail content End-->
                        </div>
                    </div>
                    <div class="product-detail-content">
                        <div class="product-detail-content-title">
                            <h3>规格与包装</h3>
                        </div>
                        <div class="product-detail-specifications">
                            <div class="specifications-item">
                                <h3>主体</h3>
                                <dl>
                                    <dt>适用型号</dt>
                                    <dd>华为荣耀 V8</dd>
                                </dl>
                            </div>
                            <div class="specifications-item">
                                <h3>规格尺寸</h3>
                                <dl>
                                    <dt>贴膜尺寸</dt>
                                    <dd>4以上</dd>
                                    <dt>类型</dt>
                                    <dd>高透</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="product-detail-packing">
                            <h3>包装清单</h3>
                            <p>钢化膜*1 贴膜工具*1</p>
                        </div>
                    </div>
                    <div class="product-detail-content">
                        <div class="product-detail-content-title">
                            <h3>售后保障</h3>
                        </div>
                        <div class="product-detail-guarantee">
                            <div class="product-detail-guarantee-content">
                                <div class="product-detail-guarantee-serve-agree-bd">
                                    <dl>
                                        <dt>
                                            <i class="icon-shield"></i>
                                            <strong>卖家服务</strong>
                                        </dt>
                                        <dd>
                                            本产品全国联保，享受三包服务，质保期为：一年质保 <br>
                                            如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7日内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！<br>
                                            (注:如厂家在商品介绍中有售后保障的说明,则此商品按照厂家说明执行售后保障服务。)
                                        </dd>

                                        <dt>
                                            <i class="icon-shield"></i>
                                            <strong>eBestMall承诺</strong>
                                        </dt>
                                        <dd>
                                            eBestMall平台卖家展示销售并由eBestMall发货的商品，由平台卖家提供相应的售后服务。请您放心购买！<br>
                                            注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
                                        </dd>

                                        <dt>
                                            <i class="icon-shield"></i><strong>正品行货</strong>
                                        </dt>
                                        <dd>eBestMall商城向您保证所售商品均为正品行货，eBestMall自营商品开具机打发票或电子发票。</dd>
                                        <dt><i class="icon-wrench2"></i><strong>全国联保</strong></dt>
                                        <dd>
                                            凭质保证书及eBestMall商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由eBestMall联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。eBestMall商城还为您提供具有竞争力的商品价格和<a href="//help.jd.com/help/question-892.html" target="_blank">运费政策</a>，请您放心购买！
                                            <br><br>注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
                                        </dd>
                                        <dt><i class="icon-heart-o"></i><strong>无忧退换货</strong></dt>
                                        <dd class="no-worries-text">
                                            客户购买eBestMall自营商品7日内（含7日，自客户收到商品之日起计算），在保证商品完好的前提下，可无理由退货。（部分商品除外，详情请见各商品细则）
                                        </dd>
                                    </dl>
                                </div>
                                <div class="product-detail-guarantee-explain">
                                    <strong>权利声明：</strong><br>eBestMall上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是eBestMall重要的经营资源，未经许可，禁止非法转载使用。
                                    <p><b>注：</b>本站商品信息均来自于合作方，其真实性、准确性和合法性由信息拥有者（合作方）负责。本站不提供任何保证，并不承担任何法律责任。</p>
                                    <br>
                                    <strong>价格说明：</strong><br>
                                    <p><b>eBestMall价：</b>eBestMall价为商品的销售价，是您最终决定是否购买商品的依据。</p>
                                    <p><b>划线价：</b>商品展示的划横线价格为参考价，该价格可能是品牌专柜标价、商品吊牌价或由品牌供应商提供的正品零售价（如厂商指导价、建议零售价等）或该商品在eBestMall平台上曾经展示过的销售价；由于地区、时间的差异性和市场行情波动，品牌专柜标价、商品吊牌价等可能会与您购物时展示的不一致，该价格仅供您参考。
                                    </p>
                                    <p><b>折扣：</b>如无特殊说明，折扣指销售商在原价、或划线价（如品牌专柜标价、商品吊牌价、厂商指导价、厂商建议零售价）等某一价格基础上计算出的优惠比例或优惠金额；如有疑问，您可在购买前联系销售商进行咨询。
                                    </p>
                                    <p><b>异常问题：</b>商品促销信息以商品详情页“促销”栏中的信息为准；商品的具体售价以订单结算页价格为准；如您发现活动商品售价或促销信息有异常，建议购买前先联系销售商咨询。
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail-content">
                        <div class="product-detail-content-title">
                            <h3>商品评价</h3>
                        </div>
                        <div class="product-detail-comment-info">
                            <div class="comment-percent"><strong class="percent-tit">好评度</strong>
                                <div class="percent-con">98<span>%</span></div>
                            </div>
                            <div class="percent-info">
                                <div class="tag-list">
                                    <span>防刮耐磨(173)</span><span>完美贴合(116)</span><span>全屏覆盖(107)</span><span>送货快(67)</span><span>抗蓝光(66)</span><span>包装精美(58)</span><span>孔位精准(54)</span><span>显示效果好(45)</span><span>操作灵敏(38)</span><span>工具全(12)</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail-comment-list">
                            <div class="product-detail-comment-list-tab-main">
                                <ul class="filter-list">
                                    <li class="active" data-tab="trigger" data-num="1600">
                                        <a href="javascript:;">全部评价<em>(1600+)</em></a>
                                    </li>
                                    <li data-num="224"><a href="javascript:;">晒图<em>(224)</em></a></li>
                                    <li data-num="10"><a href="javascript:;">追评<em>(10+)</em></a></li>
                                    <li data-num="1500"><a href="javascript:;">好评<em>(1500+)</em></a></li>
                                    <li data-num="80"><a href="javascript:;">中评<em>(80+)</em></a></li>
                                    <li data-num="60"><a href="javascript:;">差评<em>(60+)</em></a></li>
                                    <li style="display: none;"><a href="javascript:;">试用报告<em>()</em></a></li>
                                    <li class="comm-curr-sku hide">
                                        <span><input type="checkbox" id="comm-curr-sku"></span>
                                        <label for="comm-curr-sku">只看当前商品评价</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-detail-comment-list-tab-con">
                                <div class="comment-0">
                                    <div class="comment-item">
                                        <div class="user-column">
                                            <div class="user-info"><img src="/statics/img/public/user/user_default_avatar.jpg" width="25" height="25" alt="S***w" class="avatar">&nbsp;S***w
                                            </div>
                                            <div class="user-level"><span>钻石会员</span>上海</div>
                                        </div>
                                        <div class="comment-column">
                                            <div class="comment-star">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <!--<i class="icon-star"></i>-->
                                                <i class="icon-star-o item"></i>
                                                <!--<i class="icon-star-half-empty"></i>-->
                                            </div>
                                            <p class="comment-con">很漂亮，很棒的钢化膜！</p>
                                            <div class="pic-list">
                                                <a href="javascript:;"><img src="/statics/img/temp/temp-goods_img_001_small.jpg" width="48" height="48" alt="S***w的晒单图片"></a>
                                                <a href="javascript:;"><img src="/statics/img/temp/temp-goods_img_small_0001.jpg" width="48" height="48" alt="S***w的晒单图片"></a>
                                                <a href="javascript:;"><img src="/statics/img/temp/temp-goods_img_small_0005.jpg" width="48" height="48" alt="S***w的晒单图片"></a>
                                                <a href="javascript:;"><img src="/statics/img/temp/temp-goods_img_small_0003.jpg" width="48" height="48" alt="S***w的晒单图片"></a>
                                            </div>

                                            <div class="tag-list">
                                                <span>防刮耐磨</span>
                                                <span>抗蓝光</span>
                                                <span>全屏覆盖</span>
                                                <span>完美贴合</span>
                                                <span>操作灵敏</span>
                                            </div>
                                            <div class="comment-message">
                                                <div class="order-info">
                                                    <span>珠光白</span>
                                                    <span>2016-09-12 16:20</span>
                                                </div>
                                                <div class="comment-op">
                                                    <a href="javascript:;"><i class="icon-thumbs-o-up"></i>0</a>
                                                    <a href="javascript:;" target="_blank"><i class="icon-commenting-o"></i>0</a>
                                                </div>
                                            </div>
                                            <div class="append-comment">
                                                <div class="append-time">[购买72天后追评]</div>
                                                <p class="comment-con">挺好，已经使用推荐</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="user-column">
                                            <div class="user-info"><img src="/statics/img/public/user/user_default_avatar.jpg" width="25" height="25" alt="S***w" class="avatar">&nbsp;S***w
                                            </div>
                                            <div class="user-level"><span>钻石会员</span>上海</div>
                                        </div>
                                        <div class="comment-column">
                                            <div class="comment-star">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <p class="comment-con">很漂亮，很棒的钢化膜！</p>
                                            <div class="pic-list"></div>
                                            <div class="tag-list">
                                                <span>防刮耐磨</span>
                                                <span>抗蓝光</span>
                                                <span>全屏覆盖</span>
                                                <span>完美贴合</span>
                                                <span>操作灵敏</span>
                                            </div>
                                            <div class="comment-message">
                                                <div class="order-info">
                                                    <span>珠光白</span>
                                                    <span>2016-09-12 16:20</span>
                                                </div>
                                                <div class="comment-op">
                                                    <a href="javascript:;"><i class="icon-thumbs-o-up"></i>0</a>
                                                    <a href="javascript:;" target="_blank"><i class="icon-commenting-o"></i>0</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="com-table-footer">
                                        <ul class="pagination">
                                            <li class="active"><a href="javascript:;">1</a></li>
                                            <li><a href="javascript:;">2</a></li>
                                            <li><a href="javascript:;">3</a></li>
                                            <li><a href="javascript:;">下一页</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection