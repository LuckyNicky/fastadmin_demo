<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:77:"/home/www/wwwroot/www.fa.com/public/../application/index/view/user/login.html";i:1583126255;s:71:"/home/www/wwwroot/www.fa.com/application/index/view/layout/default.html";i:1577702906;s:68:"/home/www/wwwroot/www.fa.com/application/index/view/common/meta.html";i:1583323585;s:70:"/home/www/wwwroot/www.fa.com/application/index/view/common/topnav.html";i:1577714341;s:70:"/home/www/wwwroot/www.fa.com/application/index/view/common/script.html";i:1577698867;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?> – <?php echo __('DLT in jinan'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<?php if(isset($keywords)): ?>
<meta name="keywords" content="<?php echo $keywords; ?>">
<?php endif; if(isset($description)): ?>
<meta name="description" content="<?php echo $description; ?>">
<?php endif; ?>
<meta name="author" content="FastAdmin">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />

<link href="/assets/css/frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config: <?php echo json_encode($config); ?>
    };
</script>
        <link href="/assets/css/user.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
    </head>

    <body>

        <!--<head>-->
<!--    <meta charset="UTF-8">-->

<!--    <style type="text/css">-->
<!--        .container-fluid {-->
<!--            padding: 0;-->
<!--        }-->

<!--        .navbar {-->
<!--            min-height: 30px;-->
<!--            margin-bottom: 0;-->
<!--        }-->

<!--        .navbar-right {-->
<!--            margin-right: 0;-->
<!--        }-->

<!--        .navbar-inverse {-->
<!--            border: none;-->
<!--        }-->

<!--        .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {-->
<!--            background: #CFD3D8;-->
<!--            border: none;-->
<!--        }-->

<!--        .navbar > .container-fluid .navbar-brand {-->
<!--            height: 30px;-->
<!--            background: #CFD3D8;-->
<!--            padding: 0;-->
<!--        }-->

<!--        .navbar > .container-fluid .navbar-brand:hover,-->
<!--        .navbar > .container-fluid .navbar-brand:focus {-->
<!--            background-color: #CFD3D8;-->
<!--        }-->

<!--        .navbar > .container-fluid .navbar-brand {-->
<!--            margin-left: 0;-->
<!--            height: 20px;-->
<!--            width: 40px;-->
<!--            margin: 5px 40px;-->
<!--        }-->

<!--        .navbar-nav > li {-->
<!--            border-left: 1px #969AA1 solid;-->
<!--            /*border-right: 1px #969AA1 solid;*/-->
<!--            margin: 5px 0;-->
<!--        }-->

<!--        .navbar-nav > li:first-child {-->
<!--            border-left: none;-->
<!--        }-->

<!--        .navbar-nav > li:last-child {-->
<!--            border-right: none;-->
<!--        }-->

<!--        .navbar-nav > li > a {-->
<!--            padding-top: 0;-->
<!--            padding-bottom: 0;-->
<!--            color: #505050;-->
<!--            width: 120px;-->
<!--            text-align: center;-->
<!--        }-->

<!--        .navbar-nav > li > a:hover {-->
<!--            color: black;-->
<!--        }-->

<!--        .dropdown {-->
<!--            line-height: 1;-->
<!--        }-->

<!--        .dropdown .btn {-->
<!--            padding-top: 0;-->
<!--            padding-bottom: 0;-->
<!--            border-radius: 0;-->
<!--            border: none;-->
<!--            background: #CFD3D8;-->
<!--            color: #505050;-->
<!--            margin: 0 5px;-->
<!--        }-->

<!--        .dropdown:hover > .dropdown-menu,-->
<!--        .dropdown .dropdown-menu:hover {-->
<!--            display: block;-->
<!--        }-->

<!--        .dropdown .dropdown-menu.invisible {-->
<!--            display: none !important;-->
<!--        }-->

<!--        .dropdown-menu {-->
<!--            border-radius: 0;-->
<!--            border: none;-->
<!--            box-shadow: none;-->
<!--            -webkit-box-shadow: none;-->
<!--            background: #B9BEC5;-->
<!--            min-width: 120px;-->
<!--            margin: 0;-->
<!--            padding: 0;-->
<!--        }-->

<!--        .dropdown-menu table {-->
<!--            position: static;-->
<!--            margin: 10px 0;-->
<!--            background: #B9BEC4;-->
<!--        }-->

<!--        .dropdown-menu tr td {-->
<!--            border-left: 1px solid black;-->
<!--            border-right: 1px solid black;-->
<!--        }-->

<!--        .dropdown-menu tr td:first-child {-->
<!--            border-left: none;-->
<!--        }-->

<!--        .dropdown-menu tr td:last-child {-->
<!--            border-right: none;-->
<!--        }-->

<!--        .dropdown-menu td .cell {-->
<!--            position: static;-->
<!--            width: 160px;-->
<!--            line-height: 30px;-->
<!--            font-size: 14px;-->
<!--            vertical-align: middle;-->
<!--            text-align: center;-->
<!--        }-->

<!--        .dropdown-menu td .caption {-->
<!--            color: #61503C;-->
<!--        }-->

<!--        .dropdown-menu td a.entry {-->
<!--            color: #424E62;-->
<!--            text-decoration: none;-->
<!--        }-->

<!--        .dropdown-menu td image.tag {-->
<!--            display: inline;-->
<!--        }-->

<!--        .dropdown-menu > li > a {-->
<!--            height: 30px;-->
<!--            line-height: 20px;-->
<!--            padding: 5px 0;-->
<!--            text-align: center;-->
<!--            color: #505050;-->
<!--            background: #CFD3D8;-->
<!--        }-->

<!--        .dropdown-menu > li > a:hover {-->
<!--            color: black;-->
<!--            background: #CFD3D8;-->
<!--        }-->

<!--        .btn:focus,-->
<!--        .btn:active:focus,-->
<!--        .btn.active:focus,-->
<!--        .btn.focus,-->
<!--        .btn:active.focus,-->
<!--        .btn.active.focus {-->
<!--            outline: none;-->
<!--            box-shadow: none;-->
<!--            color: black;-->
<!--        }-->

<!--        .dropdown-user {-->
<!--            width: auto;-->
<!--        }-->

<!--        .navbar-inverse .navbar-nav > li > a:hover,-->
<!--        .navbar-inverse .navbar-nav > li > a:focus {-->
<!--            color: black;-->
<!--            background-color: transparent;-->
<!--        }-->

<!--    </style>-->
<!--</head>-->
<nav style="" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
<!--            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header-navbar">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
            <a class="navbar-brand" href="<?php echo url('/'); ?>" style="padding:6px 15px;"><img src="/assets/img/logo.png" style="height:40px;" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo url('index/index'); ?>"  target="_blank"><?php echo __('Home'); ?></a></li>
                <li class="dropdown">
                    <?php if($user): ?>
                    <a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 10px;height: 50px;">
                        <span class="avatar-img"><img src="<?php echo cdnurl($user['avatar']); ?>" alt=""></span>
                    </a>
                    <?php else: ?>
                    <a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('User center'); ?> <b class="caret"></b></a>
                    <?php endif; ?>
                    <ul class="dropdown-menu">
                        <?php if($user): ?>
                        <li><a href="<?php echo url('user/index'); ?>"><i class="fa fa-user-circle fa-fw"></i><?php echo __('User center'); ?></a></li>
                        <li><a href="<?php echo url('user/profile'); ?>"><i class="fa fa-user-o fa-fw"></i><?php echo __('Profile'); ?></a></li>
                        <li><a href="<?php echo url('user/changepwd'); ?>"><i class="fa fa-key fa-fw"></i><?php echo __('Change password'); ?></a></li>
                        <li><a href="<?php echo url('user/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i><?php echo __('Sign out'); ?></a></li>
                        <?php else: ?>
                        <li><a href="<?php echo url('user/login'); ?>"><i class="fa fa-sign-in fa-fw"></i> <?php echo __('Sign in'); ?></a></li>
                        <li><a href="<?php echo url('user/register'); ?>"><i class="fa fa-user-o fa-fw"></i> <?php echo __('Sign up'); ?></a></li>
                        <?php endif; ?>

                    </ul>
                </li>
            </ul>
        </div>
    </div>

<!--    <div class="container-fluid">-->
<!--        <div class="navbar-header">-->
<!--            <img class="navbar-brand"-->
<!--                 src="https://cdn.innodealing.com/dashboard/img/index/logo-1-e9efb54b5f71c98622966c6548932235.png">-->
<!--        </div>-->
<!--        <div id="navbar" class="collapse navbar-collapse">-->
<!--            <ul class="nav navbar-nav">-->
<!--                <li>-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn btn-default" type="button" id="dropdownMenu-bond"-->
<!--                                aria-haspopup="true" aria-expanded="true">-->
<!--                            债券行情-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu" aria-labelledby="dropdownMenu-bond">-->
<!--                            <table>-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="caption cell">债券行情</div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.PRICEBROKER"-->
<!--                                               event-label="BOND.PRICEBROKER" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/brokers-market?rnd=1577499358963"-->
<!--                                               data-title="经纪商行情">经纪商行情-->
<!--                                            </a>-->

<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-hot-86dd0bcc410b1a3c71d2d0d3e5827582.svg">-->
<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.PINGANLISHUN"-->
<!--                                               event-label="BOND.PINGANLISHUN" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/pingan-lishun-frontend?rnd=1577499358963"-->
<!--                                               data-title="平安利顺高收益">平安利顺高收益-->
<!--                                            </a>-->
<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-new-150aae934bf4e3dc9bf5954495eea9cb.svg">-->

<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.PRICEEXCHANGE"-->
<!--                                               event-label="BOND.PRICEEXCHANGE" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/exchange-market?rnd=1577499358963"-->
<!--                                               data-title="交易所行情">交易所行情-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.PRIMARYBONDS"-->
<!--                                               event-label="BOND.PRIMARYBONDS" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/primary-issue/newBondIssuance?rnd=1577499358963"-->
<!--                                               data-title="一级发行">一级发行-->
<!--                                            </a>-->

<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-hot-86dd0bcc410b1a3c71d2d0d3e5827582.svg">-->
<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.FLEXIBLESCREEN"-->
<!--                                               event-label="BOND.FLEXIBLESCREEN" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/favorite-widget-preloading?rnd=1577499358963"-->
<!--                                               data-title="灵活屏">灵活屏-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </li>-->
<!--                <li>-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn btn-default" type="button" id="dropdownMenu-bond"-->
<!--                                aria-haspopup="true" aria-expanded="true">-->
<!--                            债券分析-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu" aria-labelledby="dropdownMenu-bond">-->
<!--                            <table>-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="caption cell">债券分析</div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.TRADEHISTORY"-->
<!--                                               event-label="BOND.TRADEHISTORY" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/dealing-history?rnd=1577499358963"-->
<!--                                               data-title="历史成交">历史成交-->
<!--                                            </a>-->
<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-new-150aae934bf4e3dc9bf5954495eea9cb.svg">-->

<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.TODAYDEAL"-->
<!--                                               event-label="BOND.TODAYDEAL" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/newdm-beta/#/main/bond/market/todayDeal/rate?rnd=1577499358963"-->
<!--                                               data-title="当日成交统计">当日成交统计-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.CALCULATOR"-->
<!--                                               event-label="BOND.CALCULATOR" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/price-calculator/0?rnd=1577499358963"-->
<!--                                               data-title="债券计算器">债券计算器-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </li>-->
<!--                <li>-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn btn-default" type="button" id="dropdownMenu-bond"-->
<!--                                aria-haspopup="true" aria-expanded="true">-->
<!--                            信用预警-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu" aria-labelledby="dropdownMenu-bond">-->
<!--                            <table>-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="caption cell">信用预警</div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.ABNOMALPRICE"-->
<!--                                               event-label="BOND.ABNOMALPRICE" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/price-monitor?rnd=1577499358963"-->
<!--                                               data-title="价格预警">价格预警-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.FAVORITEBOND"-->
<!--                                               event-label="BOND.FAVORITEBOND" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/favorite-bond?rnd=1577499358963"-->
<!--                                               data-title="我的关注-雷达">我的关注-雷达-->
<!--                                            </a>-->
<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-new-150aae934bf4e3dc9bf5954495eea9cb.svg">-->

<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.RATINGCHANGE"-->
<!--                                               event-label="BOND.RATINGCHANGE" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/newdm-beta/#/main/bond/market/attentiontoday/grade?rnd=1577499358963"-->
<!--                                               data-title="评级调整">评级调整-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </li>-->
<!--                <li>-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn btn-default" type="button" id="dropdownMenu-bond"-->
<!--                                aria-haspopup="true" aria-expanded="true">-->
<!--                            舆情资讯-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu" aria-labelledby="dropdownMenu-bond">-->
<!--                            <table>-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="caption cell">舆情资讯</div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.PUBLICOPINION"-->
<!--                                               event-label="BOND.PUBLICOPINION" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/newdm-beta/#/main/bond/market/attentiontoday/state?rnd=1577499358963"-->
<!--                                               data-title="舆情">舆情-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.FAMOUSBOND"-->
<!--                                               event-label="BOND.FAMOUSBOND" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/risk-bond?rnd=1577499358963"-->
<!--                                               data-title="网红债小道消息">网红债小道消息-->
<!--                                            </a>-->

<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-hot-86dd0bcc410b1a3c71d2d0d3e5827582.svg">-->
<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.RATINGWALL"-->
<!--                                               event-label="BOND.RATINGWALL" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/rating-wall?rnd=1577499358963"-->
<!--                                               data-title="评级墙">评级墙-->
<!--                                            </a>-->

<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-hot-86dd0bcc410b1a3c71d2d0d3e5827582.svg">-->
<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </li>-->
<!--                <li>-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn btn-default" type="button" id="dropdownMenu-bond"-->
<!--                                aria-haspopup="true" aria-expanded="true">-->
<!--                            热门板块-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu" aria-labelledby="dropdownMenu-bond">-->
<!--                            <table>-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="caption cell">热门板块</div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.CTZOPERATION"-->
<!--                                               event-label="BOND.CTZOPERATION" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/bond/city-investment-bond?rnd=1577499358963"-->
<!--                                               data-title="城投地图">城投地图-->
<!--                                            </a>-->

<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-hot-86dd0bcc410b1a3c71d2d0d3e5827582.svg">-->
<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </li>-->
<!--                <li>-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn btn-default" type="button" id="dropdownMenu-bond"-->
<!--                                aria-haspopup="true" aria-expanded="true">-->
<!--                            中资美元债-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu" aria-labelledby="dropdownMenu-bond">-->
<!--                            <table>-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="caption cell">中资美元债</div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.INTL_SPREAD"-->
<!--                                               event-label="BOND.INTL_SPREAD" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/dm-intl/offshore-bond/spread?rnd=1577499358963"-->
<!--                                               data-title="美元债一览">美元债一览-->
<!--                                            </a>-->
<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-new-150aae934bf4e3dc9bf5954495eea9cb.svg">-->

<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.INTL_BONDISSUSES"-->
<!--                                               event-label="BOND.INTL_BONDISSUSES" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/dm-intl/offshore-bond/bond-issues?rnd=1577499358963"-->
<!--                                               data-title="美元债一级">美元债一级-->
<!--                                            </a>-->
<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-new-150aae934bf4e3dc9bf5954495eea9cb.svg">-->

<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.INTL_SENTIMENT"-->
<!--                                               event-label="BOND.INTL_SENTIMENT" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/quote-web/#/dm-intl/offshore-bond/sentiment?rnd=1577499358963"-->
<!--                                               data-title="美元债舆情">美元债舆情-->
<!--                                            </a>-->
<!--                                            <img class="tag" src="https://cdn.innodealing.com/dashboard/img/index/tag-new-150aae934bf4e3dc9bf5954495eea9cb.svg">-->

<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </li>-->
<!--                <li>-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn btn-default" type="button" id="dropdownMenu-bond"-->
<!--                                aria-haspopup="true" aria-expanded="true">-->
<!--                            同业报价-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu" aria-labelledby="dropdownMenu-bond">-->
<!--                            <table>-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="caption cell">同业报价</div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="ONLINE"-->
<!--                                               event-label="ONLINE" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/online/#/main/hall?rnd=1577499358963"-->
<!--                                               data-title="线上资金">线上资金-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="OFFLINE"-->
<!--                                               event-label="OFFLINE" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/offline/#/main/hall?rnd=1577499358963"-->
<!--                                               data-title="线下资金">线下资金-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="FINANCING"-->
<!--                                               event-label="FINANCING" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/finance?rnd=1577499358963"-->
<!--                                               data-title="理财">理财-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="DEPOSIT"-->
<!--                                               event-label="DEPOSIT" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/deposit?rnd=1577499358963"-->
<!--                                               data-title="存单">存单-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </li>-->
<!--                <li>-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn btn-default" type="button" id="dropdownMenu-bond"-->
<!--                                aria-haspopup="true" aria-expanded="true">-->
<!--                            我的-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu" aria-labelledby="dropdownMenu-bond">-->
<!--                            <table>-->
<!--                                <thead>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="caption cell">我的</div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.SETTINGS"-->
<!--                                               event-label="BOND.SETTINGS" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/newdm-beta/#/main/bond/setting/creditrating?rnd=1577499358963"-->
<!--                                               data-title="基础设置">基础设置-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>-->
<!--                                        <div class="cell">-->
<!--                                            <a class="entry" href="javascript:void(0);" data-id="BOND.FINANCIALREPORTRATING"-->
<!--                                               event-label="BOND.FINANCIALREPORTRATING" event-category="nav"-->
<!--                                               data-href="https://web.innodealing.com/newdm-beta/#/main/bond/report?rnd=1577499358963"-->
<!--                                               data-title="上传财报">上传财报-->
<!--                                            </a>-->


<!--                                        </div>-->
<!--                                    </td>-->
<!--                                </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </li>-->
<!--            </ul>-->
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                <li id="aboutus_tel" class="nav-im">-->
<!--                    <span style="vertical-align: middle;color: #F78A09;"-->
<!--                          class="icon-tel" data-toggle="tooltip" data-placement="bottom"></span>-->
<!--                </li>-->
<!--                <li style="border:none;">-->
<!--                    <div class="dropdown">-->
<!--                        <button class="btn btn-default dropdown-user" type="button" id="dropdownMenu-settings"-->
<!--                                aria-haspopup="true" aria-expanded="true">-->
<!--                            王康-->
<!--                            <span class="caret"></span>-->
<!--                        </button>-->
<!--                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu-settings">-->
<!--                            &lt;!&ndash;<li><a id="switch-industry" href="javascript:void(0);" event-label="change" event-category="nav">切换行业(申万)</a></li>&ndash;&gt;-->
<!--                            &lt;!&ndash;<li><a id="feedback" href="javascript:void(0);" event-label="feedback" event-category="nav">产品反馈</a></li>&ndash;&gt;-->
<!--                            <li><a id="aboutus" href="javascript:void(0);" event-label="about"-->
<!--                                   event-category="nav">关于DM</a></li>-->
<!--                            <li><a id="update-password" href="javascript:void(0);" event-label="password"-->
<!--                                   event-category="nav">修改密码</a></li>-->
<!--                            <li><a id="logout" href="javascript:void(0);" event-label="quit"-->
<!--                                   event-category="nav">退出当前帐号</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>&lt;!&ndash;/.nav-collapse &ndash;&gt;-->
<!--    </div>-->
</nav>

        <main class="content">
            <div id="content-container" class="container">
    <div class="user-section login-section">
        <div class="logon-tab clearfix"> <a class="active"><?php echo __('Sign in'); ?></a> <a href="<?php echo url('user/register'); ?>?url=<?php echo urlencode($url); ?>"><?php echo __('Sign up'); ?></a> </div>
        <div class="login-main"> 
            <form name="form" id="login-form" class="form-vertical" method="POST" action="">
                <input type="hidden" name="url" value="<?php echo $url; ?>" />
                <?php echo token(); ?>
                <div class="form-group">
                    <label class="control-label" for="account"><?php echo __('Account'); ?></label>
                    <div class="controls">
                        <input class="form-control input-lg" id="account" type="text" name="account" value="" data-rule="required" placeholder="<?php echo __('Mobile'); ?>" autocomplete="off">
                        <div class="help-block"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password"><?php echo __('Password'); ?></label>
                    <div class="controls">
                        <input class="form-control input-lg" id="password" type="password" name="password" data-rule="required;password" placeholder="<?php echo __('Password'); ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="checkbox" name="keeplogin" checked="checked" value="1"> <?php echo __('Keep login'); ?> 
                        <div class="pull-right"><a href="javascript:;" class="btn-forgot"><?php echo __('Forgot password'); ?></a></div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block"><?php echo __('Sign in'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/html" id="resetpwdtpl">
    <form id="resetpwd-form" class="form-horizontal form-layer" method="POST" action="<?php echo url('api/user/resetpwd'); ?>">
        <div class="form-body">
            <input type="hidden" name="action" value="resetpwd" />
            <div class="form-group">
                <label class="control-label col-xs-12 col-sm-3"><?php echo __('Type'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <div class="radio">
                        <label for="type-email"><input id="type-email" checked="checked" name="type" data-send-url="<?php echo url('api/ems/send'); ?>" data-check-url="<?php echo url('api/validate/check_ems_correct'); ?>" type="radio" value="email"> <?php echo __('Reset password by email'); ?></label>
<!--                        <label for="type-mobile"><input id="type-mobile" name="type" type="radio" data-send-url="<?php echo url('api/sms/send'); ?>" data-check-url="<?php echo url('api/validate/check_sms_correct'); ?>" value="mobile"> <?php echo __('Reset password by mobile'); ?></label>-->
                    </div>
                </div>
            </div>
            <div class="form-group" data-type="email">
                <label for="email" class="control-label col-xs-12 col-sm-3"><?php echo __('Email'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="text" class="form-control" id="email" name="email" value="" data-rule="required(#type-email:checked);email;remote(<?php echo url('api/validate/check_email_exist'); ?>, event=resetpwd, id=<?php echo $user['id']; ?>)" placeholder="">
                    <span class="msg-box"></span>
                </div>
            </div>
<!--            <div class="form-group hide" data-type="mobile">-->
<!--                <label for="mobile" class="control-label col-xs-12 col-sm-3"><?php echo __('Mobile'); ?>:</label>-->
<!--                <div class="col-xs-12 col-sm-8">-->
<!--                    <input type="text" class="form-control" id="mobile" name="mobile" value="" data-rule="required(#type-mobile:checked);mobile;remote(<?php echo url('api/validate/check_mobile_exist'); ?>, event=resetpwd, id=<?php echo $user['id']; ?>)" placeholder="">-->
<!--                    <span class="msg-box"></span>-->
<!--                </div>-->
<!--            </div>-->
            <div class="form-group">
                <label for="captcha" class="control-label col-xs-12 col-sm-3"><?php echo __('Captcha'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <div class="input-group">
                        <input type="text" name="captcha" class="form-control" data-rule="required;length(4);integer[+];remote(<?php echo url('api/validate/check_ems_correct'); ?>, event=resetpwd, email:#email)" />
                        <span class="input-group-btn" style="padding:0;border:none;">
                            <a href="javascript:;" class="btn btn-info btn-captcha" data-url="<?php echo url('api/ems/send'); ?>" data-type="email" data-event="resetpwd"><?php echo __('Send verification code'); ?></a>
                        </span>
                    </div>
                    <span class="msg-box"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="newpassword" class="control-label col-xs-12 col-sm-3"><?php echo __('New password'); ?>:</label>
                <div class="col-xs-12 col-sm-8">
                    <input type="password" class="form-control" id="newpassword" name="newpassword" value="" data-rule="required;password" placeholder="">
                    <span class="msg-box"></span>
                </div>
            </div>
        </div>
        <div class="form-group form-footer">
            <label class="control-label col-xs-12 col-sm-3"></label>
            <div class="col-xs-12 col-sm-8">
                <button type="submit" class="btn btn-md btn-info"><?php echo __('Ok'); ?></button>
            </div>
        </div>
    </form>
</script>
        </main>

<!--        <footer class="footer" style="clear:both">-->
<!--            &lt;!&ndash; FastAdmin是开源程序，建议在您的网站底部保留一个FastAdmin的链接 &ndash;&gt;-->
<!--            <p class="copyright">Copyright&nbsp;©&nbsp;2017-2019 Powered by <a href="https://www.fastadmin.net" target="_blank">FastAdmin</a> All Rights Reserved <a href="http://www.beian.miit.gov.cn" target="_blank"><?php echo htmlentities($site['beian']); ?></a></p>-->
<!--        </footer>-->

        <script
        src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js"
        data-main="/assets/js/require-frontend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>">
</script>

    </body>

</html>