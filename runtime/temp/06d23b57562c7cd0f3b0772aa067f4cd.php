<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/list_product.html";i:1583043030;s:71:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/common/layout.html";i:1583161787;s:77:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/common/item_product.html";i:1583043030;}*/ ?>
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
                    <?php $__e2yFoVZ6Hx__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","condition"=>"1=isnav"]); if(is_array($__e2yFoVZ6Hx__) || $__e2yFoVZ6Hx__ instanceof \think\Collection || $__e2yFoVZ6Hx__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__e2yFoVZ6Hx__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                    <!--判断是否有子级或高亮当前栏目-->
                    <li class="<?php if($nav['has_child']): ?>dropdown<?php endif; if($nav->is_active): ?> active<?php endif; ?>">
                        <a href="<?php echo $nav['url']; ?>" <?php if($nav['has_child']): ?> data-toggle="dropdown" <?php endif; ?>><?php echo $nav['name']; if($nav['has_child']): ?> <b class="caret"></b><?php endif; ?></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php $__AeDvkBJzMw__ = \addons\cms\model\Channel::getChannelList(["id"=>"sub","type"=>"son","typeid"=>$nav['id'],"condition"=>"1=isnav"]); if(is_array($__AeDvkBJzMw__) || $__AeDvkBJzMw__ instanceof \think\Collection || $__AeDvkBJzMw__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__AeDvkBJzMw__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?>
                            <li><a href="<?php echo $sub['url']; ?>"><?php echo $sub['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__AeDvkBJzMw__; ?>
                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__e2yFoVZ6Hx__; ?>
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
                <?php $__0W5PRLajeB__ = \addons\cms\model\Channel::getBreadcrumb(isset($__CHANNEL__)?$__CHANNEL__:[], isset($__ARCHIVES__)?$__ARCHIVES__:[], isset($__TAGS__)?$__TAGS__:[], isset($__PAGE__)?$__PAGE__:[]); if(is_array($__0W5PRLajeB__) || $__0W5PRLajeB__ instanceof \think\Collection || $__0W5PRLajeB__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__0W5PRLajeB__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <li><a href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__0W5PRLajeB__; ?>
                <!-- E 面包屑导航 -->
            </ol>
        </div>
    </h1>
    <?php if($__FILTERLIST__): ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                筛选
            </h3>
        </div>
        <div class="panel-body">
            <div class="tabs-wrapper">
                <?php $__3z6rtGPfWC__ = \addons\cms\model\Archives::getPageFilter($__FILTERLIST__, ["id"=>"filter","exclude"=>""]); if(is_array($__3z6rtGPfWC__) || $__3z6rtGPfWC__ instanceof \think\Collection || $__3z6rtGPfWC__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__3z6rtGPfWC__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$filter): $mod = ($i % 2 );++$i;?>
                <div class="tabs-group">
                    <div class="title"><?php echo $filter['title']; ?>:</div>
                    <ul class="content clearfix">
                        <?php if(is_array($filter['content']) || $filter['content'] instanceof \think\Collection || $filter['content'] instanceof \think\Paginator): $i = 0; $__LIST__ = $filter['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <li class="<?php echo !empty($item['active'])?'active':''; ?>"><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__3z6rtGPfWC__; ?>
                <!-- E 分类列表 -->
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>列表</span>

                        <div class="more">
                            <ul class="list-unstyled list-inline category-order clearfix">
                                <!-- S 排序 -->
                                <?php $__2H0mxA1Bg7__ = \addons\cms\model\Archives::getPageOrder($__ORDERLIST__, ["id"=>"order"]); if(is_array($__2H0mxA1Bg7__) || $__2H0mxA1Bg7__ instanceof \think\Collection || $__2H0mxA1Bg7__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2H0mxA1Bg7__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?>
                                <li><a href="<?php echo $order['url']; ?>" class="<?php echo !empty($order['active'])?'active':''; ?>"><?php echo $order['title']; ?></a></li>
                                <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2H0mxA1Bg7__; ?>
                                <!-- E 排序 -->
                            </ul>
                        </div>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="product-list">
                        <div class="row">
                            <!-- S 列表 -->
                            <?php $__mg9P7CQAFy__ = \addons\cms\model\Archives::getPageList($__PAGELIST__, ["id"=>"item"]); if(is_array($__mg9P7CQAFy__) || $__mg9P7CQAFy__ instanceof \think\Collection || $__mg9P7CQAFy__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__mg9P7CQAFy__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
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
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__mg9P7CQAFy__; ?>
                            <!-- S 列表 -->
                        </div>
                        <!-- S 分页栏 -->
                        <div class="text-center pager">
                            <?php echo $__PAGELIST__->render(["type"=>"full"]); ?>
                        </div>
                        <!-- E 分页栏 -->

                        <?php if($__PAGELIST__->isEmpty()): ?>
                        <div class="loadmore loadmore-line loadmore-nodata"><span class="loadmore-tips">暂无数据</span></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
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