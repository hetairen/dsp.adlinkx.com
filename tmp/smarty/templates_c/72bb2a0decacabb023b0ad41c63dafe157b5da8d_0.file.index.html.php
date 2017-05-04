<?php
/* Smarty version 3.1.30, created on 2017-04-09 14:11:11
  from "/Users/bluelife/www/www.adease.com/application/views/home/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e9d07f427be0_75565726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72bb2a0decacabb023b0ad41c63dafe157b5da8d' => 
    array (
      0 => '/Users/bluelife/www/www.adease.com/application/views/home/index.html',
      1 => 1490432810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e9d07f427be0_75565726 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="传易,YunDSP,传易DSP,大数据平台">
    <meta name="description" content="杭州传易信息技术有限公司 传易DSP（YunDSP）作为一家创新型电商大数据营销企业，几年来依托专业的技术实力及持续不断的产品创新，已成功跻身为数字营销领域的先驱者。其自有的大数据平台每日处理用户曝光量累计可达100亿，全面覆盖4.3亿在线网民，为电商客户提供广告大数据营销、行业买家/卖家人群分析、舆情监测、数据增值等多项服务。">
    <meta name="company" content="杭州传易信息技术有限公司">
    <meta name="author" content="bluelife" />
    <meta name="email" content="thebulelife@outlook.com" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/png">
    <title>YunDSP</title>
    <link href="/resources/css/style.default.css" rel="stylesheet">
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
                        <li><a href="/user/login"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                    </ul>
                </div>
                <h5 class="sidebartitle">导航</h5>
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
                            <li><a href="/account/invite_code"><i class="fa fa-cogs" aria-hidden="true"></i>邀请码</a></li>
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
                                <h4>3, 52, 781</h4>
                            </div>
                            <div id="sidebar-chart2" class="chart"></div>
                        </li>
                        <li>
                            <div class="datainfo">
                                <span class="text-muted">Disk Usage</span>
                                <h4>23.2%</h4>
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
                <h2><i class="fa fa-tachometer"></i> Dashboard <span>首页</span></h2>
                <div class="breadcrumb-wrapper">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li><a href="https://www.adease.com">Bracket</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <div class="contentpanel">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="panel panel-success panel-stat">
                            <div class="panel-heading">
                                <div class="stat">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="/resources/images/is-user.png" alt="" />
                                        </div>
                                        <div class="col-xs-8">
                                            <small class="stat-label">Visits Today</small>
                                            <h1>900k+</h1>
                                        </div>
                                    </div>
                                    <!-- row -->
                                    <div class="mb15"></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Pages / Visit</small>
                                            <h4>7.80</h4>
                                        </div>
                                        <div class="col-xs-6">
                                            <small class="stat-label">% New Visits</small>
                                            <h4>76.43%</h4>
                                        </div>
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- stat -->
                            </div>
                            <!-- panel-heading -->
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="panel panel-danger panel-stat">
                            <div class="panel-heading">
                                <div class="stat">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="/resources/images/is-document.png" alt="" />
                                        </div>
                                        <div class="col-xs-8">
                                            <small class="stat-label">% Unique Visitors</small>
                                            <h1>54.40%</h1>
                                        </div>
                                    </div>
                                    <!-- row -->
                                    <div class="mb15"></div>
                                    <small class="stat-label">Avg. Visit Duration</small>
                                    <h4>01:80:22</h4>
                                </div>
                                <!-- stat -->
                            </div>
                            <!-- panel-heading -->
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="panel panel-primary panel-stat">
                            <div class="panel-heading">
                                <div class="stat">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="/resources/images/is-document.png" alt="" />
                                        </div>
                                        <div class="col-xs-8">
                                            <small class="stat-label">Page Views</small>
                                            <h1>300k+</h1>
                                        </div>
                                    </div>
                                    <!-- row -->
                                    <div class="mb15"></div>
                                    <small class="stat-label">% Bounce Rate</small>
                                    <h4>34.23%</h4>
                                </div>
                                <!-- stat -->
                            </div>
                            <!-- panel-heading -->
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="panel panel-dark panel-stat">
                            <div class="panel-heading">
                                <div class="stat">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <img src="/resources/images/is-money.png" alt="" />
                                        </div>
                                        <div class="col-xs-8">
                                            <small class="stat-label">Today's Earnings</small>
                                            <h1>$655</h1>
                                        </div>
                                    </div>
                                    <!-- row -->
                                    <div class="mb15"></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4>$32,322</h4>
                                        </div>
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Month</small>
                                            <h4>$503,000</h4>
                                        </div>
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- stat -->
                            </div>
                            <!-- panel-heading -->
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- col-sm-6 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-sm-8 col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h5 class="subtitle mb5">Network Performance</h5>
                                        <p class="mb15">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                                        <div id="basicflot" style="width: 100%; height: 300px; margin-bottom: 20px"></div>
                                    </div>
                                    <!-- col-sm-8 -->
                                    <div class="col-sm-4">
                                        <h5 class="subtitle mb5">Server Status</h5>
                                        <p class="mb15">Summary of the status of your server.</p>
                                        <span class="sublabel">CPU Usage (40.05 - 32 cpus)</span>
                                        <div class="progress progress-sm">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-primary"></div>
                                        </div>
                                        <!-- progress -->
                                        <span class="sublabel">Memory Usage (32.2%)</span>
                                        <div class="progress progress-sm">
                                            <div style="width: 32%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                                        </div>
                                        <!-- progress -->
                                        <span class="sublabel">Disk Usage (82.2%)</span>
                                        <div class="progress progress-sm">
                                            <div style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                        <!-- progress -->
                                        <span class="sublabel">Databases (63/100)</span>
                                        <div class="progress progress-sm">
                                            <div style="width: 63%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                        <!-- progress -->
                                        <span class="sublabel">Domains (2/10)</span>
                                        <div class="progress progress-sm">
                                            <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                                        </div>
                                        <!-- progress -->
                                        <span class="sublabel">Email Account (13/50)</span>
                                        <div class="progress progress-sm">
                                            <div style="width: 26%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"></div>
                                        </div>
                                        <!-- progress -->
                                    </div>
                                    <!-- col-sm-4 -->
                                </div>
                                <!-- row -->
                            </div>
                            <!-- panel-body -->
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- col-sm-9 -->
                    <div class="col-sm-4 col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h5 class="subtitle mb5">Most Browser Used</h5>
                                <p class="mb15">Duis autem vel eum iriure dolor in hendrerit in vulputate...</p>
                                <div id="donut-chart2" class="ex-donut-chart"></div>
                            </div>
                            <!-- panel-body -->
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- col-sm-3 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-sm-7">
                        <div class="table-responsive">
                            <table class="table table-bordered mb30">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive -->
                    </div>
                    <!-- col-sm-7 -->
                    <div class="col-sm-5">
                        <div class="panel panel-success">
                            <div class="panel-heading padding5">
                                <div id="line-chart" class="ex-line-chart"></div>
                            </div>
                            <div class="panel-body">
                                <div class="tinystat pull-left">
                                    <div id="sparkline" class="chart mt5"></div>
                                    <div class="datainfo">
                                        <span class="text-muted">Average Sales</span>
                                        <h4>$630,201</h4>
                                    </div>
                                </div>
                                <!-- tinystat -->
                                <div class="tinystat pull-right">
                                    <div id="sparkline2" class="chart mt5"></div>
                                    <div class="datainfo">
                                        <span class="text-muted">Total Sales</span>
                                        <h4>$139,201</h4>
                                    </div>
                                </div>
                                <!-- tinystat -->
                            </div>
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- col-sm-6 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default widget-photoday">
                            <div class="panel-body">
                                <a href="" class="photoday"><img src="/resources/images/photos/photo1.png" alt="" /></a>
                                <div class="photo-details">
                                    <h4 class="photo-title">Strawhat In The Beach</h4>
                                    <small class="text-muted"><i class="fa fa-map-marker"></i> San Franciso, California, USA</small>
                                    <small>By: <a href="">ThemePixels</a></small>
                                </div>
                                <!-- photo-details -->
                                <ul class="photo-meta">
                                    <li><span><i class="fa fa-eye"></i> 32,102</span></li>
                                    <li><a href="#"><i class="fa fa-heart"></i> 1,003</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 52</a></li>
                                </ul>
                            </div>
                            <!-- panel-body -->
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-default panel-alt widget-messaging">
                            <div class="panel-heading">
                                <div class="panel-btns">
                                    <a href="" class="panel-edit"><i class="fa fa-edit"></i></a>
                                </div>
                                <!-- panel-btns -->
                                <h3 class="panel-title">Messaging</h3>
                            </div>
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        <small class="pull-right">Dec 10</small>
                                        <h4 class="sender">Jennier Lawrence</h4>
                                        <small>Lorem ipsum dolor sit amet...</small>
                                    </li>
                                    <li>
                                        <small class="pull-right">Dec 9</small>
                                        <h4 class="sender">Marsha Mellow</h4>
                                        <small>Lorem ipsum dolor sit amet...</small>
                                    </li>
                                    <li>
                                        <small class="pull-right">Dec 9</small>
                                        <h4 class="sender">Holly Golightly</h4>
                                        <small>Lorem ipsum dolor sit amet...</small>
                                    </li>
                                    <li>
                                        <small class="pull-right">Dec 10</small>
                                        <h4 class="sender">Jennier Lawrence</h4>
                                        <small>Lorem ipsum dolor sit amet...</small>
                                    </li>
                                    <li>
                                        <small class="pull-right">Dec 9</small>
                                        <h4 class="sender">Marsha Mellow</h4>
                                        <small>Lorem ipsum dolor sit amet...</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- panel-body -->
                        </div>
                        <!-- panel -->
                    </div>
                    <!-- col-sm-6 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-dark panel-alt widget-quick-status-post">
                            <div class="panel-heading">
                                <div class="panel-btns">
                                    <a href="" class="panel-close">&times;</a>
                                    <a href="" class="minimize">&minus;</a>
                                </div>
                                <!-- panel-btns -->
                                <h3 class="panel-title">Quick Status Post</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#post-status" data-toggle="tab"><i class="fa fa-pencil"></i> <strong>Status</strong></a></li>
                                    <li><a href="#post-photo" data-toggle="tab"><i class="fa fa-picture-o"></i> <strong>Photo</strong></a></li>
                                    <li><a href="#post-checkin" data-toggle="tab"><i class="fa fa-map-marker"></i> <strong>Check-In</strong></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="post-status" class="tab-pane active">
                                        <input type="text" class="form-control" placeholder="What's your status?" />
                                    </div>
                                    <div id="post-photo" class="tab-pane">
                                        <input type="text" class="form-control" placeholder="Choose photo" />
                                    </div>
                                    <div id="post-checkin" class="tab-pane">
                                        <input type="text" class="form-control" placeholder="Search location" />
                                    </div>
                                    <button class="btn btn-primary btn-block mt10">Submit Post</button>
                                </div>
                                <!-- tab-content -->
                            </div>
                            <!-- panel-body -->
                        </div>
                        <!-- panel -->
                        <div class="mb20"></div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="panel panel-warning panel-alt widget-today">
                                    <div class="panel-heading text-center">
                                        <i class="fa fa-calendar-o"></i>
                                    </div>
                                    <div class="panel-body text-center">
                                        <h3 class="today">Fri, Dec 13</h3>
                                    </div>
                                    <!-- panel-body -->
                                </div>
                                <!-- panel -->
                            </div>
                            <div class="col-xs-6">
                                <div class="panel panel-danger panel-alt widget-time">
                                    <div class="panel-heading text-center">
                                        <i class="glyphicon glyphicon-time"></i>
                                    </div>
                                    <div class="panel-body text-center">
                                        <h3 class="today">4:50AM PST</h3>
                                    </div>
                                    <!-- panel-body -->
                                </div>
                                <!-- panel -->
                            </div>
                        </div>
                    </div>
                    <!-- col-sm-6 -->
                </div>
            </div>
            <!-- contentpanel -->
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
 src="/resources/js/libarays/jquery-ui-1.10.3.min.js"><?php echo '</script'; ?>
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
 src="/resources/js/libarays/flot/jquery.flot.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/flot/jquery.flot.resize.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/flot/jquery.flot.spline.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/raphael-2.1.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/dashboard.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
