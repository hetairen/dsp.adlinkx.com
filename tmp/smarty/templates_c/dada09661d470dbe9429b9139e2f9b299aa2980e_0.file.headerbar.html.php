<?php
/* Smarty version 3.1.30, created on 2017-08-28 00:48:02
  from "/Users/bluelife/www/www.adlinkx.com/application/views/common/headerbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a2f7c25cd180_00207020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dada09661d470dbe9429b9139e2f9b299aa2980e' => 
    array (
      0 => '/Users/bluelife/www/www.adlinkx.com/application/views/common/headerbar.html',
      1 => 1503852190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a2f7c25cd180_00207020 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="headerbar">
                <a class="menutoggle"><i class="fa fa-bars"></i></a>
                <form class="searchform" action="index.html" method="post">
                    <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
                </form>
                <div class="header-right">
                    <ul class="headermenu">
                        <!-- <li>
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
                        </li> -->
                        <!-- <li>
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
                        </li> -->
                        <!-- <li>
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
                        </li> -->
                        <li>
                        
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-uid="{$user.uid}" data-group="{$user.group}" data-permissions="{$user.permissions}">
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
            </div><?php }
}
