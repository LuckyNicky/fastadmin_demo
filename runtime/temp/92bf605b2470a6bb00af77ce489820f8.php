<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"/home/www/wwwroot/www.fa.com/public/../application/index/view/index/index.html";i:1583162994;}*/ ?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="refresh" content="0;url=/cms">

        <title><?php echo __('Company name'); ?> - <?php echo __('Company title'); ?></title>

        <link rel="shortcut icon" href="/assets/img/favicon.ico" />

        <!-- Bootstrap Core CSS -->
        <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/css/index.css" rel="stylesheet">

        <!-- Plugin CSS -->
        <link href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn.staticfile.org/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="page-top">
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-menu">
                        <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="/assets/img/logo.png" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <?php if($user): ?>
                            <a href="<?php echo url('user/index'); ?>" class="dropdown-toggle" data-toggle="dropdown" style="height: 50px;">
                                <span class="avatar-img"><img src="<?php echo cdnurl($user['avatar']); ?>" alt=""></span>
                                <span class="avatar-name"><?php echo $user['nickname']; ?></span>
                                <span class="caret"></span>
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
                <!-- /.navbar-col lapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div class="sdke-wrap">
            <!--轮播start-->
            <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class=""></li>
                    <li data-target="#carousel" data-slide-to="1" class="active"></li>
                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item">
                        <img src="/assets/img/index_banner_1.jpg" alt="First slide">
                    </div>
                    <div class="item active">
                        <img src="/assets/img/index_banner_2.jpg" alt="Second slide">
                    </div>
                </div>
                <!-- 轮播（Carousel）导航 -->
<!--                <a class="left carousel-control" href="#carousel" data-slide="prev">-->
<!--                    <span class="glyphicon glyphicon-chevron-left"></span>-->
<!--                </a>-->
<!--                <a class="right carousel-control" href="#carousel" data-slide="next">-->
<!--                    <span class="glyphicon glyphicon-chevron-right"></span>-->
<!--                </a>-->
            </div>
            <!--轮播end-->
        </div>
        <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-heading">
                            <h2><?php echo __('Features'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-user text-primary"></i>
                                        <h3><?php echo __('Auth'); ?></h3>
                                        <p class="text-muted"><?php echo __('Auth tips'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-screen-smartphone text-primary"></i>
                                        <h3><?php echo __('Responsive'); ?></h3>
                                        <p class="text-muted"><?php echo __('Responsive tips'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-present text-primary"></i>
                                        <h3><?php echo __('Languages'); ?></h3>
                                        <p class="text-muted"><?php echo __('Languages tips'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-layers text-primary"></i>
                                        <h3><?php echo __('Module'); ?></h3>
                                        <p class="text-muted"><?php echo __('Module tips'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-docs text-primary"></i>
                                        <h3><?php echo __('CRUD'); ?></h3>
                                        <p class="text-muted"><?php echo __('CRUD tips'); ?></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="feature-item">
                                        <i class="icon-puzzle text-primary"></i>
                                        <h3><?php echo __('Extension'); ?></h3>
                                        <p class="text-muted"><?php echo __('Extension tips'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="cta-content">
                <div class="container">
                    <h2><?php echo __('Do not hesitate'); ?><br><?php echo __('Start to act'); ?></h2>
                </div>
            </div>
            <div class="overlay"></div>
        </section>

        <footer>
            <div class="container">
                <!-- FastAdmin是开源程序，建议在您的网站底部保留一个FastAdmin的链接 -->
                <p>&copy; 2017-2019 <a href="https://www.fastadmin.net" target="_blank"><?php echo __('Company name'); ?></a>, All Rights Reserved.</p>
            </div>
        </footer>

        <!-- jQuery -->
        <script src=https://cdn.staticfile.org/jquery/2.1.4/jquery.min.js></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdn.staticfile.org/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <script>
            $(function () {
                $(window).on("scroll", function () {
                    $("#mainNav").toggleClass("affix", $(window).height() - $(window).scrollTop() <= 50);
                });
            });
        </script>
    </body>

</html>