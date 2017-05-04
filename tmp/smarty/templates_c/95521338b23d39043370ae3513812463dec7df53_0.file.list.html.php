<?php
/* Smarty version 3.1.30, created on 2017-02-11 00:31:37
  from "C:\web\www\www.adease.com\application\views\mail\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589deae9df8d18_61112095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95521338b23d39043370ae3513812463dec7df53' => 
    array (
      0 => 'C:\\web\\www\\www.adease.com\\application\\views\\mail\\list.html',
      1 => 1486743981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589deae9df8d18_61112095 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="传易,YunDSP,传易DSP,大数据平台">
    <meta name="description" content="杭州传易信息技术有限公司 传易DSP（YunDSP）作为一家创新型电商大数据营销企业，几年来依托专业的技术实力及持续不断的产品创新，已成功跻身为数字营销领域的先驱者。其自有的大数据平台每日处理用户曝光量累计可达100亿，全面覆盖4.3亿在线网民，为电商客户提供广告大数据营销、行业买家/卖家人群分析、舆情监测、数据增值等多项服务。">
    <meta name="company" content="杭州传易信息技术有限公司">
    <meta name="author" content="bluelife" />
    <meta name="email" content="thebulelife@outlook.com" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/png">
    <title>YunDSP|邮件管理</title>
    <link href="/resources/css/style.default.css" rel="stylesheet">
    <link href="/resources/css/jquery.datatables.css" rel="stylesheet">
    <?php echo '<script'; ?>
 type="text/javascript" src="/resources/js/libarays/jquery-1.8.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/resources/js/libarays/jquery-ui-1.8.23.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/resources/js/libarays/jquery-ui-touch-plugin.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/resources/js/libarays/qapTcha.jquery_taobao.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/resources/js/libarays/zepto.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/resources/js/libarays/md5.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/resources/js/public.js"><?php echo '</script'; ?>
>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="/resources/js/libarays/html5shiv.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="/resources/js/libarays/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
    </div>
    <section>
        <div class="leftpanel">
            <div class="logopanel">
                <h1><img src="/resources/images/logo.png"></h1>
            </div>
            <!-- logopanel -->
            <div class="leftpanelinner">
                <!-- This is only visible to small devices -->
                <div class="visible-xs hidden-sm hidden-md hidden-lg">
                    <div class="media userlogged">
                        <img alt="" src="/resources/images/photos/loggeduser.png" class="media-object">
                        <div class="media-body">
                            <h4>John Doe</h4>
                            <span>"Life is so..."</span>
                        </div>
                    </div>
                    <h5 class="sidebartitle actitle">Account</h5>
                    <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                        <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                        <li><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
                        <li><a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
                        <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                    </ul>
                </div>
                <h5 class="sidebartitle">导航索引</h5>
                <ul class="nav nav-pills nav-stacked nav-bracket">
                    <li class="active"><a href="https://www.adease.com/"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
                    <li class="nav-parent"><a href=""><i class="fa fa-rocket"></i> <span>活动管理</span></a>
                        <ul class="children">
                            <li><a href="/campaignMange/lists"><i class="fa fa-sliders"></i>活动管理</a></li>
                            <li><a href="/launchMange/lists"><i class="fa fa-paper-plane" aria-hidden="true"></i>投放管理</a></li>
                            <li><a href="/strategyMange/lists"><i class="fa fa-cogs" aria-hidden="true"></i>策略管理</a></li>
                            <li><a href="/creativeMange/lists"><i class="fa fa-picture-o" aria-hidden="true"></i>创意管理</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>资源管理</span></a>
                        <ul class="children">
                            <li><a href="/adsenseMange/lists"><i class="fa fa-map-marker" aria-hidden="true"></i>广告位管理</a></li>
                            <li><a href="/pmpMange/lists"><i class="fa fa-pie-chart" aria-hidden="true"></i>PMP管理</a></li>
                            <li><a href="/creativeTemplate/lists"><i class="fa fa-cubes" aria-hidden="true"></i>创意模板</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent"><a href=""><i class="fa fa-th-list"></i> <span>数据报表</span></a>
                        <ul class="children">
                            <li><a href="/report/lists"><i class="fa fa-line-chart" aria-hidden="true"></i>投放报表</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent"><a href=""><i class="fa fa-file-text"></i> <span>运营管理</span></a>
                        <ul class="children">
                            <li><a href="/operationLoger/index"><i class="fa fa-file-text-o" aria-hidden="true"></i>操作日志</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent"><a href=""><i class="fa fa-user-circle"></i> <span>帐号管理</span></a>
                        <ul class="children">
                            <li><a href="/account/mange"><i class="fa fa-cogs" aria-hidden="true"></i>帐号设置</a></li>
                        </ul>
                    </li>
                    <li><a href="/mail/lists"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Email</span></a></li>
                </ul>
                <div class="infosummary">
                    <h5 class="sidebartitle">综合概览</h5>
                    <ul>
                        <li>
                            <div class="datainfo">
                                <span class="text-muted">Daily Traffic</span>
                                <h4>630, 201</h4>
                            </div>
                            <div id="sidebar-chart" class="chart"></div>
                        </li>
                        <li>
                            <div class="datainfo">
                                <span class="text-muted">Average Users</span>
                                <h4>1, 332, 801</h4>
                            </div>
                            <div id="sidebar-chart2" class="chart"></div>
                        </li>
                        <li>
                            <div class="datainfo">
                                <span class="text-muted">Disk Usage</span>
                                <h4>82.2%</h4>
                            </div>
                            <div id="sidebar-chart3" class="chart"></div>
                        </li>
                        <li>
                            <div class="datainfo">
                                <span class="text-muted">CPU Usage</span>
                                <h4>140.05 - 32</h4>
                            </div>
                            <div id="sidebar-chart4" class="chart"></div>
                        </li>
                        <li>
                            <div class="datainfo">
                                <span class="text-muted">Memory Usage</span>
                                <h4>32.2%</h4>
                            </div>
                            <div id="sidebar-chart5" class="chart"></div>
                        </li>
                    </ul>
                </div>
                <!-- infosummary -->
            </div>
            <!-- leftpanelinner -->
        </div>
        <!-- leftpanel -->
        <div class="mainpanel">
            <div class="headerbar">
                <a class="menutoggle"><i class="fa fa-bars"></i></a>
                <form class="searchform" action="index.html" method="post">
                    <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
                </form>
                <div class="header-right">
                    <ul class="headermenu">
                        <li>
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span class="badge">2</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-head pull-right">
                                    <h5 class="title">2 Newly Registered Users</h5>
                                    <ul class="dropdown-list user-list">
                                        <li class="new">
                                            <div class="thumb">
                                                <a href=""><img src="/resources/images/photos/user1.png" alt="" /></a>
                                            </div>
                                            <div class="desc">
                                                <h5><a href="">Draniem Daamul (@draniem)</a> <span class="badge badge-success">new</span></h5>
                                            </div>
                                        </li>
                                        <li class="new">
                                            <div class="thumb">
                                                <a href=""><img src="/resources/images/photos/user2.png" alt="" /></a>
                                            </div>
                                            <div class="desc">
                                                <h5><a href="">Zaham Sindilmaca (@zaham)</a> <span class="badge badge-success">new</span></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href=""><img src="/resources/images/photos/user3.png" alt="" /></a>
                                            </div>
                                            <div class="desc">
                                                <h5><a href="">Weno Carasbong (@wenocar)</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href=""><img src="/resources/images/photos/user4.png" alt="" /></a>
                                            </div>
                                            <div class="desc">
                                                <h5><a href="">Nusja Nawancali (@nusja)</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href=""><img src="/resources/images/photos/user5.png" alt="" /></a>
                                            </div>
                                            <div class="desc">
                                                <h5><a href="">Lane Kitmari (@lane_kitmare)</a></h5>
                                            </div>
                                        </li>
                                        <li class="new"><a href="">See All Users</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-envelope"></i>
                                    <span class="badge">1</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-head pull-right">
                                    <h5 class="title">You Have 1 New Message</h5>
                                    <ul class="dropdown-list gen-list">
                                        <li class="new">
                                            <a href="">
                                                <span class="thumb"><img src="/resources/images/photos/user1.png" alt="" /></span>
                                                <span class="desc">
                      <span class="name">Draniem Daamul <span class="badge badge-success">new</span></span>
                                                <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="thumb"><img src="/resources/images/photos/user2.png" alt="" /></span>
                                                <span class="desc">
                      <span class="name">Nusja Nawancali</span>
                                                <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="thumb"><img src="/resources/images/photos/user3.png" alt="" /></span>
                                                <span class="desc">
                      <span class="name">Weno Carasbong</span>
                                                <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="thumb"><img src="/resources/images/photos/user4.png" alt="" /></span>
                                                <span class="desc">
                      <span class="name">Zaham Sindilmaca</span>
                                                <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="thumb"><img src="/resources/images/photos/user5.png" alt="" /></span>
                                                <span class="desc">
                      <span class="name">Veno Leongal</span>
                                                <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="new"><a href="">Read All Messages</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-globe"></i>
                                    <span class="badge">5</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-head pull-right">
                                    <h5 class="title">You Have 5 New Notifications</h5>
                                    <ul class="dropdown-list gen-list">
                                        <li class="new">
                                            <a href="">
                                                <span class="thumb"><img src="/resources/images/photos/user4.png" alt="" /></span>
                                                <span class="desc">
                      <span class="name">Zaham Sindilmaca <span class="badge badge-success">new</span></span>
                                                <span class="msg">is now following you</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="new">
                                            <a href="">
                                                <span class="thumb"><img src="/resources/images/photos/user5.png" alt="" /></span>
                                                <span class="desc">
                      <span class="name">Weno Carasbong <span class="badge badge-success">new</span></span>
                                                <span class="msg">is now following you</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="new">
                                            <a href="">
                                                <span class="thumb"><img src="/resources/images/photos/user3.png" alt="" /></span>
                                                <span class="desc">
                      <span class="name">Veno Leongal <span class="badge badge-success">new</span></span>
                                                <span class="msg">likes your recent status</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="new">
                                            <a href="">
                                                <span class="thumb"><img src="/resources/images/photos/user3.png" alt="" /></span>
                                                <span class="desc">
                      <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                                                <span class="msg">downloaded your work</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="new">
                                            <a href="">
                                                <span class="thumb"><img src="/resources/images/photos/user3.png" alt="" /></span>
                                                <span class="desc">
                      <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                                                <span class="msg">send you 2 messages</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="new"><a href="">See All Notifications</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>
" data-group="<?php echo $_smarty_tpl->tpl_vars['user']->value['group'];?>
" data-permissions="<?php echo $_smarty_tpl->tpl_vars['user']->value['permissions'];?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" alt="" /><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>

                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                    <!-- <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li> -->
                                    <li><a href="#"><i class="glyphicon glyphicon-cog"></i>帐号设置</a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>帮助</a></li>
                                    <li><a href="/user/sign_out"><i class="glyphicon glyphicon-log-out"></i>退出</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="chatview" class="btn btn-default tp-icon chat-icon">
                                <i class="glyphicon glyphicon-comment"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <!-- header-right -->
            </div>
            <!-- headerbar -->
            <div class="pageheader">
                <h2><i class="fa fa-envelope"></i> Dashboard <span>邮件</span><span>邮件列表</span></h2>
                <div class="breadcrumb-wrapper">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Bracket</a></li>
                        <li class="active">Email</li>
                    </ol>
                </div>
            </div>
            <div class="contentpanel panel-email">
                <div class="row">
                    <div class="col-sm-3 col-lg-2">
                        <a href="/mail/compose" class="btn btn-danger btn-block btn-compose-email">写邮件</a>
                        <ul class="nav nav-pills nav-stacked nav-email">
                            <li class="active">
                                <a href="email.html">
                                    <span class="badge pull-right">2</span>
                                    <i class="glyphicon glyphicon-inbox"></i>收件箱
                                </a>
                            </li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"></i>置顶邮件</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-send"></i>已发送的</a></li>
                            <li>
                                <a href="#">
                                    <span class="badge pull-right">3</span>
                                    <i class="glyphicon glyphicon-pencil"></i>草稿箱
                                </a>
                            </li>
                            <li><a href="#"><i class="glyphicon glyphicon-trash"></i>回收站</a></li>
                        </ul>
                        <div class="mb30"></div>
                        <h5 class="subtitle">文件夹</h5>
                        <ul class="nav nav-pills nav-stacked nav-email mb20">
                            <li>
                                <a href="email.html">
                                    <span class="badge pull-right">2</span>
                                    <i class="glyphicon glyphicon-folder-open"></i>会议邮箱
                                </a>
                            </li>
                            <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i>通讯录</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i>邀请函</a></li>
                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-folder-open"></i>促销邮件
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- col-sm-3 -->
                    <div class="col-sm-9 col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="pull-right">
                                    <div class="btn-group mr10">
                                        <button class="btn btn-sm btn-white tooltips" type="button" data-toggle="tooltip" title="Archive"><i class="glyphicon glyphicon-hdd"></i></button>
                                        <button class="btn btn-sm btn-white tooltips" type="button" data-toggle="tooltip" title="Report Spam"><i class="glyphicon glyphicon-exclamation-sign"></i></button>
                                        <button class="btn btn-sm btn-white tooltips" type="button" data-toggle="tooltip" title="Delete"><i class="glyphicon glyphicon-trash"></i></button>
                                    </div>
                                    <div class="btn-group mr10">
                                        <div class="btn-group nomargin">
                                            <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle tooltips" type="button" title="Move to Folder">
                                                <i class="glyphicon glyphicon-folder-close mr5"></i>
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"><i class="glyphicon glyphicon-folder-open mr5"></i> Conference</a></li>
                                                <li><a href="#"><i class="glyphicon glyphicon-folder-open mr5"></i> Newsletter</a></li>
                                                <li><a href="#"><i class="glyphicon glyphicon-folder-open mr5"></i> Invitations</a></li>
                                                <li><a href="#"><i class="glyphicon glyphicon-folder-open mr5"></i> Promotions</a></li>
                                            </ul>
                                        </div>
                                        <div class="btn-group nomargin">
                                            <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle tooltips" type="button" title="Label">
                                                <i class="glyphicon glyphicon-tag mr5"></i>
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"><i class="glyphicon glyphicon-tag mr5"></i> Web</a></li>
                                                <li><a href="#"><i class="glyphicon glyphicon-tag mr5"></i> Photo</a></li>
                                                <li><a href="#"><i class="glyphicon glyphicon-tag mr5"></i> Video</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-white" type="button"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                        <button class="btn btn-sm btn-white" type="button"><i class="glyphicon glyphicon-chevron-right"></i></button>
                                    </div>
                                </div>
                                <!-- pull-right -->
                                <h5 class="subtitle mb5">Inbox</h5>
                                <p class="text-muted">Showing 1 - 15 of 230 messages</p>
                                <div class="table-responsive">
                                    <table class="table table-email">
                                        <tbody>
                                            <tr class="unread">
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user3.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Today at 7:30am</span>
                                                            <h4 class="text-primary">Zaham Sindilmaca</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>UI Status</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox2">
                                                        <label for="checkbox2"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user2.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Yesterday at 1:30am</span>
                                                            <h4 class="text-primary">Nusja Nawancali</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>Meeting Reminder</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox3">
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user1.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 13 at 7:30am</span>
                                                            <h4 class="text-primary">Weno Carasbong</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>User Interface Conference</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox4">
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user5.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 12 at 5:30am</span>
                                                            <h4 class="text-primary">Venro Leonga</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>Mobile Banking Transaction</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox5">
                                                        <label for="checkbox5"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user4.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 12 at 5:30am</span>
                                                            <h4 class="text-primary">Yanda Cerona</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>Last Chance For Insurance</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox6">
                                                        <label for="checkbox6"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user3.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 13 at 7:30am</span>
                                                            <h4 class="text-primary">Zaham Sindilmaca</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>UI Status</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox7">
                                                        <label for="checkbox7"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user2.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 13 at 7:30am</span>
                                                            <h4 class="text-primary">Nusja Nawancali</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>Meeting Reminder</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox8">
                                                        <label for="checkbox8"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user1.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 13 at 7:30am</span>
                                                            <h4 class="text-primary">Weno Carasbong</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>User Interface Conference</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox9">
                                                        <label for="checkbox9"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user5.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 12 at 5:30am</span>
                                                            <h4 class="text-primary">Venro Leonga</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>Mobile Banking Transaction</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox10">
                                                        <label for="checkbox10"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user4.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 12 at 5:30am</span>
                                                            <h4 class="text-primary">Yanda Cerona</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>Last Chance For Insurance</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox11">
                                                        <label for="checkbox11"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user3.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 13 at 7:30am</span>
                                                            <h4 class="text-primary">Zaham Sindilmaca</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>UI Status</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox12">
                                                        <label for="checkbox12"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user2.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 13 at 7:30am</span>
                                                            <h4 class="text-primary">Nusja Nawancali</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>Meeting Reminder</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox13">
                                                        <label for="checkbox13"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user1.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 13 at 7:30am</span>
                                                            <h4 class="text-primary">Weno Carasbong</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>User Interface Conference</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox14">
                                                        <label for="checkbox14"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user5.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 12 at 5:30am</span>
                                                            <h4 class="text-primary">Venro Leonga</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>Mobile Banking Transaction</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="ckbox ckbox-success">
                                                        <input type="checkbox" id="checkbox15">
                                                        <label for="checkbox15"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="star"><i class="glyphicon glyphicon-star"></i></a>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <a href="#" class="pull-left">
                                                            <img alt="" src="/resources/images/photos/user4.png" class="media-object">
                                                        </a>
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Jan 12 at 5:30am</span>
                                                            <h4 class="text-primary">Yanda Cerona</h4>
                                                            <small class="text-muted"></small>
                                                            <p class="email-summary"><strong>Last Chance For Insurance</strong> Ut enim ad minim veniam, quis nostrud exercitation... </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- table-responsive -->
                            </div>
                            <!-- panel-body -->
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- col-sm-9 -->
                </div>
                <!-- row -->
            </div>
        </div>
        <!-- mainpanel -->
        <div class="rightpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
                <li><a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
                <li><a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
                <li><a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="rp-alluser">
                    <h5 class="sidebartitle">Online Users</h5>
                    <ul class="chatuserlist">
                        <li class="online">
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/userprofile.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Eileen Sideways</strong>
                                    <small>Los Angeles, CA</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user1.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <span class="pull-right badge badge-danger">2</span>
                                    <strong>Zaham Sindilmaca</strong>
                                    <small>San Francisco, CA</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user2.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong>
                                    <small>Bangkok, Thailand</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user3.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Renov Leongal</strong>
                                    <small>Cebu City, Philippines</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user4.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Weno Carasbong</strong>
                                    <small>Tokyo, Japan</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                    </ul>
                    <div class="mb30"></div>
                    <h5 class="sidebartitle">Offline Users</h5>
                    <ul class="chatuserlist">
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user5.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Eileen Sideways</strong>
                                    <small>Los Angeles, CA</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user2.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Zaham Sindilmaca</strong>
                                    <small>San Francisco, CA</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user3.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong>
                                    <small>Bangkok, Thailand</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user4.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Renov Leongal</strong>
                                    <small>Cebu City, Philippines</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user5.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Weno Carasbong</strong>
                                    <small>Tokyo, Japan</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user4.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Renov Leongal</strong>
                                    <small>Cebu City, Philippines</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user5.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Weno Carasbong</strong>
                                    <small>Tokyo, Japan</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="rp-favorites">
                    <h5 class="sidebartitle">Favorites</h5>
                    <ul class="chatuserlist">
                        <li class="online">
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user2.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Eileen Sideways</strong>
                                    <small>Los Angeles, CA</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user1.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Zaham Sindilmaca</strong>
                                    <small>San Francisco, CA</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user3.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong>
                                    <small>Bangkok, Thailand</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user4.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Renov Leongal</strong>
                                    <small>Cebu City, Philippines</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li class="online">
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user5.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Weno Carasbong</strong>
                                    <small>Tokyo, Japan</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="rp-history">
                    <h5 class="sidebartitle">History</h5>
                    <ul class="chatuserlist">
                        <li class="online">
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user4.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Eileen Sideways</strong>
                                    <small>Hi hello, ctc?... would you mind if I go to your...</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user2.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Zaham Sindilmaca</strong>
                                    <small>This is to inform you that your product that we...</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                        <li>
                            <div class="media">
                                <a href="#" class="pull-left media-thumb">
                                    <img alt="" src="/resources/images/photos/user3.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong>
                                    <small>Are you willing to have a long term relat...</small>
                                </div>
                            </div>
                            <!-- media -->
                        </li>
                    </ul>
                </div>
                <div class="tab-pane pane-settings" id="rp-settings">
                    <h5 class="sidebartitle mb20">Settings</h5>
                    <div class="form-group">
                        <label class="col-xs-8 control-label">Show Offline Users</label>
                        <div class="col-xs-4 control-label">
                            <div class="toggle toggle-success"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-8 control-label">Enable History</label>
                        <div class="col-xs-4 control-label">
                            <div class="toggle toggle-success"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-8 control-label">Show Full Name</label>
                        <div class="col-xs-4 control-label">
                            <div class="toggle-chat1 toggle-success"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-8 control-label">Show Location</label>
                        <div class="col-xs-4 control-label">
                            <div class="toggle toggle-success"></div>
                        </div>
                    </div>
                </div>
                <!-- tab-pane -->
            </div>
            <!-- tab-content -->
        </div>
        <!-- rightpanel -->
    </section>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/modernizr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/toggles.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/retina.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/jquery.cookies.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    jQuery(document).ready(function() {

        "use strict"

        //Check
        jQuery('.ckbox input').click(function() {
            var t = jQuery(this);
            if (t.is(':checked')) {
                t.closest('tr').addClass('selected');
            } else {
                t.closest('tr').removeClass('selected');
            }
        });

        // Star
        jQuery('.star').click(function() {
            if (!jQuery(this).hasClass('star-checked')) {
                jQuery(this).addClass('star-checked');
            } else
                jQuery(this).removeClass('star-checked');
            return false;
        });

        // Read mail
        jQuery('.table-email .media').click(function() {
            location.href = ADEASE.domain + '/mail/read';
        });

    });
    <?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
