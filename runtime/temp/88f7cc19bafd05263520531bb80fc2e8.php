<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/user.html";i:1583043030;s:71:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/common/layout.html";i:1583161787;s:69:"/home/www/wwwroot/www.fa.com/addons/cms/view/default/common/item.html";i:1583043030;}*/ ?>
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
                    <?php $__4zyjaBeWG0__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","condition"=>"1=isnav"]); if(is_array($__4zyjaBeWG0__) || $__4zyjaBeWG0__ instanceof \think\Collection || $__4zyjaBeWG0__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__4zyjaBeWG0__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
                    <!--判断是否有子级或高亮当前栏目-->
                    <li class="<?php if($nav['has_child']): ?>dropdown<?php endif; if($nav->is_active): ?> active<?php endif; ?>">
                        <a href="<?php echo $nav['url']; ?>" <?php if($nav['has_child']): ?> data-toggle="dropdown" <?php endif; ?>><?php echo $nav['name']; if($nav['has_child']): ?> <b class="caret"></b><?php endif; ?></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php $__9gI53k1mxY__ = \addons\cms\model\Channel::getChannelList(["id"=>"sub","type"=>"son","typeid"=>$nav['id'],"condition"=>"1=isnav"]); if(is_array($__9gI53k1mxY__) || $__9gI53k1mxY__ instanceof \think\Collection || $__9gI53k1mxY__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__9gI53k1mxY__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?>
                            <li><a href="<?php echo $sub['url']; ?>"><?php echo $sub['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__9gI53k1mxY__; ?>
                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__4zyjaBeWG0__; ?>
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


<style>
    body {
        padding-top: 49px;
    }

    @keyframes wave-animation {
        0% {
            transform: translateX(0) translateZ(0) scaleY(1)
        }
        50% {
            transform: translateX(-25%) translateZ(0) scaleY(0.55)
        }
        100% {
            transform: translateX(-50%) translateZ(0) scaleY(1)
        }
    }

    .wave-wrapper {
        height: 430px;
        position: relative;
    }

    .wave-inner {
        position: absolute;
        width: 100%;
        overflow: hidden;
        height: 430px;
        bottom: -1px;
        background: #374486;
    }

    .wave-bg-top {
        z-index: 15;
        opacity: 0.5;
    }

    .wave-bg-middle {
        z-index: 10;
        opacity: 0.75;
    }

    .wave-bg-bottom {
        z-index: 5;
    }

    .wave-item {
        position: absolute;
        left: 0;
        width: 200%;
        height: 430px;
        background-repeat: repeat no-repeat;
        background-position: 0 bottom;
        transform-origin: center bottom;
    }

    .wave-top {
        background-size: 50% 100px;
    }

    .wave-animation .wave-top {
        animation: wave-animation 3s;
        -webkit-animation: wave-animation 3s;
        -webkit-animation-delay: 1s;
        animation-delay: 1s;
    }

    .wave-middle {
        background-size: 50% 120px;
    }

    .wave-animation .wave-middle {
        animation: wave-animation 10s linear infinite;
    }

    .wave-bottom {
        background-size: 50% 100px;
    }

    .wave-animation .wave-bottom {
        animation: wave-animation 15s linear infinite;
    }

    .userinfo {
        position: absolute;
        z-index: 99;
        text-align: center;
        width: 100%;
        top: 0;
        color: #fff;
    }

    .header-logo {
        margin-top: 60px;
    }

    .userinfo-avatar {
        background: rgba(0, 0, 0, 0.12);
        display: inline-block;
        position: relative;
        padding: 20px;
        border-radius: 50%;
        min-width: 120px;
    }

    .userinfo-avatar img {
        width: 120px;
        height: 120px;
    }

    .nav-noborder > li.active > a, .nav-noborder > li.active > a:focus, .nav-noborder > li.active > a:hover {
        border-color: #fff;
    }

    .nav-noborder {
        border-bottom: none;
    }

    .comment-content {
        border-radius: 3px;
        padding: 12px;
        border: none;
        background: #fafafa;
        margin-bottom: 0;
    }

    .comment-content div {
        line-height: 20px !important;
        margin-bottom: 0px;
        margin-top: 0 !important;
        font-size: 14px !important;
        font-weight: 400;
        color: #777;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .statistics-nums {
        margin-top: 5px;
        color: #999;
    }
</style>
<div class="wave-wrapper wave-animation">
  <div class="userinfo">
      <div class="header-logo">
        <a href="<?php echo addon_url('cms/user/index',[':id'=>$__USER__['id']],false); ?>" class="userinfo-avatar">
            <img class="img-circle" src="<?php echo cdnurl($__USER__['avatar']); ?>" alt="<?php echo $__USER__['nickname']; ?>">
        </a>
    </div>
      <h2 class="">
        <span><strong><?php echo $__USER__['nickname']; ?></strong></span>
    </h2>
    <h5 class="">
        <span><?php echo (isset($__USER__['bio']) && ($__USER__['bio'] !== '')?$__USER__['bio']:"这家伙很懒，什么也没写"); ?></span>
    </h5>
  </div>
  <div class="wave-inner wave-bg-top">
    <div class="wave-item wave-top" style="background-image: url('/assets/addons/cms/img/wave-top.png')"></div>
  </div>
  <div class="wave-inner wave-bg-middle">
    <div class="wave-item wave-middle" style="background-image: url('/assets/addons/cms/img/wave-mid.png')"></div>
  </div>
  <div class="wave-inner wave-bg-bottom">
    <div class="wave-item wave-bottom" style="background-image: url('/assets/addons/cms/img/wave-bot.png')"></div>
  </div>
</div>

<div class="container-fluid" style="padding:0px 0 50px 0;background:#fff;">
    <header class="space-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-4 col-md-offset-4">
                    <div class="row statistics pt-1 text-center" style="border-top:none;">
                        <div class="col-xs-4">

                            <div class="statistics-text">文章</div>
                            <a href="<?php echo addon_url('cms/user/index',[':id'=>$__USER__['id']],false); ?>/archives">
                                <div class="statistics-nums"><?php echo $statistics['archives']; ?></div>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <div class="statistics-text">评论</div>
                            <a href="<?php echo addon_url('cms/user/index',[':id'=>$__USER__['id']],false); ?>/comment">
                                <div class="statistics-nums"><?php echo $statistics['comments']; ?></div>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <div class="statistics-text">加入时间</div>
                            <div class="statistics-nums"><?php echo human_date($__USER__['createtime']); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="container" id="content-container">
    <div class="row mt-4 mb-4">
        <div class="col-md-8 col-sm-12">
            <ul class="nav nav-tabs nav-noborder mb-10 mt-20">
                <li class="active"><a href="javascript:;"><?php echo $title; ?></a></li>
            </ul>
            <div class="tab-inner" style="background:#fff;padding:15px;">
                <?php if($type == 'archives'): ?>
                    <div class="article-list">
                        <?php if(is_array($archivesList) || $archivesList instanceof \think\Collection || $archivesList instanceof \think\Paginator): $i = 0; $__LIST__ = $archivesList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <article class="article-item">
    <div class="media">
        <div class="media-left">
            <a href="<?php echo $item['url']; ?>">
                <div class="embed-responsive embed-responsive-4by3 img-zoom">
                    <img src="<?php echo $item['image']; ?>">
                </div>
            </a>
        </div>
        <div class="media-body">
            <h3 class="article-title">
                <a href="<?php echo $item['url']; ?>" <?php if($item['style']): ?>style="<?php echo $item['style_text']; ?>"<?php endif; ?>><?php echo $item['title']; ?></a>
            </h3>
            <div class="article-intro hidden-xs">
                <?php echo $item['description']; ?>
            </div>
            <div class="article-tag">
                <a href="<?php echo $item['channel']['url']; ?>" class="tag tag-primary"><?php echo $item['channel']['name']; ?></a>
                <span itemprop="date"><?php echo date("Y年m月d日", $item['publishtime']); ?></span>
                <span itemprop="likes" title="点赞次数"><i class="fa fa-thumbs-up"></i> <?php echo $item['likes']; ?> 点赞</span>
                <span itemprop="comments"><a href="<?php echo $item['url']; ?>#comments" target="_blank" title="评论数"><i class="fa fa-comments"></i> <?php echo $item['comments']; ?></a> 评论</span>
                <span itemprop="views" title="浏览次数"><i class="fa fa-eye"></i> <?php echo $item['views']; ?> 浏览</span>
            </div>
        </div>
    </div>

</article>
                        <?php endforeach; endif; else: echo "" ;endif; if($archivesList->isEmpty()): ?>
                            <div class="loadmore loadmore-line loadmore-nodata"><span class="loadmore-tips">暂无更多数据</span></div>
                        <?php else: ?>
                            <div class="text-center">
                                <a href="?page=<?php echo $page+1; ?>" data-page="<?php echo $page; ?>" class="btn btn-default my-4 px-4 btn-loadmore">加载更多</a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="article-list">
                    <?php if(is_array($commentList) || $commentList instanceof \think\Collection || $commentList instanceof \think\Paginator): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                        <article class="article-item">
                            <div class="media">
                                <div class="media-left">
                                    <a href="<?php echo $item['archives']['url']; ?>">
                                        <div class="embed-responsive embed-responsive-4by3 img-zoom">
                                            <img src="<?php echo $item['archives']['image']; ?>">
                                        </div>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="article-title">
                                        <a href="<?php echo $item['archives']['url']; ?>" <?php if($item['archives']['style']): ?>style="<?php echo $item['archives']['style_text']; ?>" <?php endif; ?>><?php echo $item['archives']['title']; ?></a>
                                    </h3>
                                    <div class="comment-content">
                                        <div><?php echo $item['content']; ?></div>
                                    </div>
                                    <div class="article-tag">
                                        <span itemprop="date"><i class="fa fa-calendar"></i> <?php echo date("Y年m月d日", $item['createtime']); ?></span>
                                    </div>
                                </div>
                            </div>

                        </article>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                <!-- S 分页栏 -->
                    <div class="text-center pager">
                        <?php echo $commentList->render(); ?>
                    </div>
                <!-- E 分页栏 -->
                    <?php if($commentList->isEmpty()): ?>
                        <div class="loadmore loadmore-line loadmore-nodata"><span class="loadmore-tips">暂无数据</span></div>
                    <?php endif; endif; ?>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="article-sidebar">
                <!-- S 会员菜单 -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked space-nav">
                            <li class="<?php echo $type=='archives'?'active':''; ?>"><a href="<?php echo addon_url('cms/user/index',[':id'=>$__USER__['id']],false); ?>/archives"><?php echo $user['id']==$__USER__['id']?'我':'TA'; ?>的文章</a></li>
                            <li class="<?php echo $type=='comment'?'active':''; ?>"><a href="<?php echo addon_url('cms/user/index',[':id'=>$__USER__['id']],false); ?>/comment"><?php echo $user['id']==$__USER__['id']?'我':'TA'; ?>的评论</a></li>
                        </ul>
                    </div>
                </div>
                <!-- E 会员菜单 -->

                <div class="panel panel-blockimg">
                    <a href="https://www.fastadmin.net/store/ask.html">
    <img src="https://cdn.fastadmin.net/assets/addons/ask/img/sidebar/howto.png" class="img-responsive">
</a>
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