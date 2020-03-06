<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/channel_product.html";i:1583043030;s:71:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/common/layout.html";i:1583161787;s:77:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/common/item_product.html";i:1583043030;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=""> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="renderer" content="webkit">
    <title><?php echo \think\Config::get("cms.title"); ?> - <?php echo \think\Config::get("cms.sitename"); ?></title>
    <meta name="keywords" content="<?php echo \think\Config::get("cms.keywords"); ?>"/>
    <meta name="description" content="<?php echo \think\Config::get("cms.description"); ?>"/>

    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" media="screen" href="/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" media="screen" href="/assets/libs/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" media="screen" href="/assets/libs/fastadmin-layer/dist/theme/default/layer.css"/>
    <link rel="stylesheet" media="screen" href="/assets/addons/cms/css/swiper.min.css">
    <link rel="stylesheet" media="screen" href="/assets/addons/cms/css/common.css?v=<?php echo \think\Config::get("site.version"); ?>"/>

    <link rel="stylesheet" href="//at.alicdn.com/t/font_1104524_z1zcv22ej09.css">

    {__STYLE__}

    <!--[if lt IE 9]>
    <script src="/libs/html5shiv.js"></script>
    <script src="/libs/respond.min.js"></script>
    <![endif]-->

</head>
<body class="group-page">

<header class="header">
    <!-- S 导航 -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo \think\Config::get("cms.indexurl"); ?>"><img src="/assets/addons/cms/img/logo.png" height="40" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <!--如果你需要自定义NAV,可使用channellist标签来完成,这里只设置了2级,如果显示无限级,请使用cms:nav标签-->
                    <?php $__8c7Zvf2i9r__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","condition"=>"1=isnav"]); if(is_array($__8c7Zvf2i9r__) || $__8c7Zvf2i9r__ instanceof \think\Collection || $__8c7Zvf2i9r__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__8c7Zvf2i9r__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                    <!--判断是否有子级或高亮当前栏目-->
                    <li class="<?php if($nav['has_child']): ?>dropdown<?php endif; if($nav->is_active): ?> active<?php endif; ?>">
                        <a href="<?php echo $nav['url']; ?>" <?php if($nav['has_child']): ?> data-toggle="dropdown" <?php endif; ?>><?php echo $nav['name']; if($nav['has_child']): ?> <b class="caret"></b><?php endif; ?></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php $__nbKTZ0cjUA__ = \addons\cms\model\Channel::getChannelList(["id"=>"sub","type"=>"son","typeid"=>$nav['id'],"condition"=>"1=isnav"]); if(is_array($__nbKTZ0cjUA__) || $__nbKTZ0cjUA__ instanceof \think\Collection || $__nbKTZ0cjUA__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__nbKTZ0cjUA__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?>
                            <li><a href="<?php echo $sub['url']; ?>"><?php echo $sub['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__nbKTZ0cjUA__; ?>
                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__8c7Zvf2i9r__; ?>
                </ul>
                <ul class="nav navbar-right hidden">
                    <ul class="nav navbar-nav">
                        <li><a href="javascript:;" class="addbookbark"><i class="fa fa-star"></i> 加入收藏</a></li>
                        <li><a href="javascript:;" class=""><i class="fa fa-phone"></i> 联系我们</a></li>
                    </ul>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="form-inline navbar-form" action="<?php echo addon_url('cms/search/index'); ?>" method="get">
                            <div class="form-search hidden-sm hidden-md">
                                <input class="form-control" name="q" data-suggestion-url="<?php echo addon_url('cms/search/suggestion'); ?>" type="text" id="searchinput" value="<?php echo htmlentities((\think\Request::instance()->get('q') ?: '')); ?>" placeholder="搜索">
                            </div>
                        </form>
                    </li>
                    <li class="dropdown">
                        <?php if($user): ?>
                        <a href="<?php echo url('index/user/index', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>" class="dropdown-toggle" data-toggle="dropdown" style="padding-top: 10px;height: 50px;">
                            <span class="avatar-img"><img src="<?php echo cdnurl($user['avatar']); ?>" style="width:30px;height:30px;border-radius:50%;" alt=""></span>
                        </a>
                        <?php else: ?>
                        <a href="<?php echo url('index/user/index', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>" class="dropdown-toggle" data-toggle="dropdown">会员<span class="hidden-sm">中心</span> <b class="caret"></b></a>
                        <?php endif; ?>
                        <ul class="dropdown-menu">
                            <?php if($user): ?>
                            <li><a href="<?php echo url('index/user/index', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>"><i class="fa fa-user fa-fw"></i>会员中心</a></li>
                            <li><a href="<?php echo addon_url('cms/user/index', [':id'=>$user['id']]); ?>"><i class="fa fa-user fa-fw"></i>我的个人主页</a></li>
                            <li><a href="<?php echo url('index/cms.archives/my', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>"><i class="fa fa-list fa-fw"></i>我发布的文章</a></li>
                            <li><a href="<?php echo url('index/cms.archives/post', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>"><i class="fa fa-pencil fa-fw"></i>发布文章</a></li>
                            <li><a href="<?php echo url('index/user/logout', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>"><i class="fa fa-sign-out fa-fw"></i>注销</a></li>
                            <?php else: ?>
                            <li><a href="<?php echo url('index/user/login', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>"><i class="fa fa-sign-in fa-fw"></i>登录</a></li>
                            <li><a href="<?php echo url('index/user/register', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>"><i class="fa fa-user-o fa-fw"></i>注册</a></li>
                            <?php endif; ?>

                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- E 导航 -->

</header>



<div class="container" id="content-container">
    <h1 class="category-title">
        <?php echo $__CHANNEL__['name']; ?>
        <div class="more pull-right">
            <ol class="breadcrumb">
                <!-- S 面包屑导航 -->
                <?php $__gB0IDK3XcA__ = \addons\cms\model\Channel::getBreadcrumb(isset($__CHANNEL__)?$__CHANNEL__:[], isset($__ARCHIVES__)?$__ARCHIVES__:[], isset($__TAGS__)?$__TAGS__:[], isset($__PAGE__)?$__PAGE__:[]); if(is_array($__gB0IDK3XcA__) || $__gB0IDK3XcA__ instanceof \think\Collection || $__gB0IDK3XcA__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__gB0IDK3XcA__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__gB0IDK3XcA__; ?>
                <!-- E 面包屑导航 -->
            </ol>
        </div>
    </h1>

    <div class="row">
        <div class="col-xs-12 col-md-7">
            <div id="product-focus" class="carousel slide carousel-focus" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $__2B1heL5WYA__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"productfocus","row"=>"2"]); if(is_array($__2B1heL5WYA__) || $__2B1heL5WYA__ instanceof \think\Collection || $__2B1heL5WYA__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2B1heL5WYA__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
                    <li data-target="#product-focus" data-slide-to="<?php echo $i-1; ?>" class="<?php if($i==1): ?>active<?php endif; ?>"></li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2B1heL5WYA__; ?>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php $__813G6CStfX__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"productfocus","row"=>"2"]); if(is_array($__813G6CStfX__) || $__813G6CStfX__ instanceof \think\Collection || $__813G6CStfX__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__813G6CStfX__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
                    <div class="item <?php if($i==1): ?>active<?php endif; ?>">
                        <a href="<?php echo $block['url']; ?>">
                            <div class="carousel-img" style="background-image:url('<?php echo $block['image']; ?>');"></div>
                            <div class="carousel-caption hidden-xs">
                                <h3><?php echo $block['title']; ?></h3>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__813G6CStfX__; ?>
                </div>
                <a class="left carousel-control" href="#product-focus" role="button" data-slide="prev">
                    <span class="icon-prev fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#product-focus" role="button" data-slide="next">
                    <span class="icon-next fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-md-5 focus-img">
            <div class="row">
                <?php $__Ojy5PBUd8R__ = \addons\cms\model\Block::getBlockList(["id"=>"item","name"=>"productfocus","limit"=>"2,4"]); if(is_array($__Ojy5PBUd8R__) || $__Ojy5PBUd8R__ instanceof \think\Collection || $__Ojy5PBUd8R__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__Ojy5PBUd8R__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <div class="col-xs-6">
                    <a href="<?php echo $item['url']; ?>">
                        <span class="embed-responsive embed-responsive-16by9 img-zoom">
                            <img src="<?php echo $item['image']; ?>" class="embed-responsive-item" alt="">
                            <div class="intro"><?php echo $item['title']; ?></div>
                        </span>
                    </a>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__Ojy5PBUd8R__; ?>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <main class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body pt-0">
                    <div class="channel-list">
                        <div class="row">
                            <!-- S 栏目列表 -->
                            <?php $__u6ZsFVSERM__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>$__CHANNEL__['id']]); if(is_array($__u6ZsFVSERM__) || $__u6ZsFVSERM__ instanceof \think\Collection || $__u6ZsFVSERM__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__u6ZsFVSERM__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
                            <div class="col-xs-12">
                                <h3><?php echo $channel['textlink']; ?> <em><a href="<?php echo $channel['url']; ?>"><?php echo __('More'); ?></a></em></h3>
                                <div class="row">
                                    <?php $__U1mdFCMp45__ = \addons\cms\model\Archives::getArchivesList(["id"=>"item","channel"=>$channel['id'],"length"=>"8"]); if(is_array($__U1mdFCMp45__) || $__U1mdFCMp45__ instanceof \think\Collection || $__U1mdFCMp45__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__U1mdFCMp45__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                    <div class="col-sm-4 col-md-3 product-item">
    <div class="card">
        <div class="thumb">
            <a href="<?php echo $item['url']; ?>" class="preview-link">
                <div class="embed-responsive embed-responsive-4by3">
                    <img src="<?php echo cdnurl($item['image']); ?>" alt="">
                </div>
            </a>
            <a href="<?php echo $item['url']; ?>" class="quickview-link"><i class="fa fa-search"></i></a>
        </div>
        <div class="title">
            <h2><a href="<?php echo $item['url']; ?>" <?php if($item['style']): ?>style="<?php echo $item['style_text']; ?>"<?php endif; ?>><?php echo $item['title']; ?></a></h2>
        </div>
        <div class="operate">
            <div class="pull-left text-gray">
                <div class="mt-1">
                    <span class="">
                        <i class="fa fa-eye"></i> <?php echo $item['views']; ?>
                    </span>
                    <span class="ml-2">
                        <i class="fa fa-comments"></i> <?php echo $item['comments']; ?>
                    </span>
                </div>
            </div>
            <div class="pull-right">
                <a href="<?php echo $item['url']; ?>" class="btn btn-primary detail"><?php echo __('View detail'); ?></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
                                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__U1mdFCMp45__; ?>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__u6ZsFVSERM__; ?>
                            <!-- E 栏目列表 -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<footer>
    <div class="container-fluid" id="footer">
        <div class="container">
            <div class="row footer-inner">
                <div class="col-md-3 col-sm-3">
                            <div class="footer-logo">
                                <a href="#"><i class="fa fa-bookmark"></i></a>
                            </div>
                            <p class="copyright"><small>© 2017. All Rights Reserved. <br>
                                    DLT
                                </small>
                            </p>
                        </div>
                        <div class="col-md-5 col-md-push-1 col-sm-5 col-sm-push-1">
                            <div class="row">
                                <div class="col-xs-4">
                                    <ul class="links">
                                        <li><a href="#">关于我们</a></li>
                                        <li><a href="#">发展历程</a></li>
                                        <li><a href="#">服务项目</a></li>
                                        <li><a href="#">团队成员</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-4">
                                    <ul class="links">
                                        <li><a href="#">新闻</a></li>
                                        <li><a href="#">资讯</a></li>
                                        <li><a href="#">推荐</a></li>
                                        <li><a href="#">博客</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-4">
                                    <ul class="links">
                                        <li><a href="#">服务</a></li>
                                        <li><a href="#">圈子</a></li>
                                        <li><a href="#">论坛</a></li>
                                        <li><a href="#">广告</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-md-push-1 col-sm-push-1">
                            <div class="footer-social">
                                <a href="#"><i class="fa fa-weibo"></i></a>
                                <a href="#"><i class="fa fa-qq"></i></a>
                                <a href="#"><i class="fa fa-wechat"></i></a>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</footer>

<div id="floatbtn">
    <!-- S 浮动按钮 -->

    <?php if(isset($config['wxapp'])&&$config['wxapp']): ?>
    <a href="javascript:;">
        <i class="iconfont icon-wxapp"></i>
        <div class="floatbtn-wrapper">
            <div class="qrcode"><img src="<?php echo cdnurl($config['wxapp']); ?>"></div>
            <p>微信小程序</p>
            <p>微信扫一扫体验</p>
        </div>
    </a>
    <?php endif; ?>

    <a class="hover" href="<?php echo url('index/cms.archives/post', '', false, \think\Config::get('url_domain_deploy')?'www':''); ?>" target="_blank">
        <i class="iconfont icon-pencil"></i>
        <em>立即<br>投稿</em>
    </a>

    <?php if($config['qrcode']): ?>
    <a href="javascript:;">
        <i class="iconfont icon-qrcode"></i>
        <div class="floatbtn-wrapper">
            <div class="qrcode"><img src="<?php echo cdnurl($config['qrcode']); ?>"></div>
            <p>微信公众账号</p>
            <p>微信扫一扫加关注</p>
        </div>
    </a>
    <?php endif; if(isset($__ARCHIVES__)): ?>
    <a id="feedback" class="hover" href="#comments">
        <i class="iconfont icon-feedback"></i>
        <em>发表<br>评论</em>
    </a>
    <?php endif; ?>

    <a id="back-to-top" class="hover" href="javascript:;">
        <i class="iconfont icon-backtotop"></i>
        <em>返回<br>顶部</em>
    </a>
    <!-- E 浮动按钮 -->
</div>


<script type="text/javascript" src="/assets/libs/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/libs/fastadmin-layer/dist/layer.js"></script>
<script type="text/javascript" src="/assets/libs/art-template/dist/template-native.js"></script>
<script type="text/javascript" src="/assets/addons/cms/js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="/assets/addons/cms/js/swiper.min.js"></script>
<script type="text/javascript" src="/assets/addons/cms/js/cms.js?r=<?php echo $site['version']; ?>"></script>
<script type="text/javascript" src="/assets/addons/cms/js/common.js?r=<?php echo $site['version']; ?>"></script>

{__SCRIPT__}

</body>
</html>