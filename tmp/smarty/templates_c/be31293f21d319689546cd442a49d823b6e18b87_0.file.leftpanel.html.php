<?php
/* Smarty version 3.1.30, created on 2017-09-26 14:42:47
  from "C:\web\www\dsp.adlinkx.com\application\views\common\leftpanel.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c9f6e75f9b33_61247891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be31293f21d319689546cd442a49d823b6e18b87' => 
    array (
      0 => 'C:\\web\\www\\dsp.adlinkx.com\\application\\views\\common\\leftpanel.html',
      1 => 1506049933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c9f6e75f9b33_61247891 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="leftpanel" style="background:#1d2939;">
    <div class="logopanel">
        <h1><img src="/resources/images/logo.png"></h1>
    </div>
    <!-- logopanel -->
    <div class="leftpanelinner">
        <h5 class="sidebartitle">导航</h5>
        <ul class="nav nav-pills nav-stacked nav-bracket">
            <?php if ($_smarty_tpl->tpl_vars['model']->value == 'campaign') {?>
                <li class=""><a href="http://dsp.adlinkx.com/"><i class="fa fa-tachometer"></i> <span>首页</span></a></li>
                <li class="nav-parent nav-active active"><a href=""><i class="fa fa-rocket"></i> <span>活动管理</span></a>
                    <ul class="children" style="display: block;">
                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'launch') {?>
                            <!-- <li><a href="/campaignMange/lists/campaign/campaign"><i class="fa fa-sliders"></i>活动管理</a></li> -->
                            <li class="active"><a href="/launchMange/lists/campaign/launch"><i class="fa fa-paper-plane" aria-hidden="true"></i>投放管理</a></li>
                            <li><a href="/strategyMange/lists/campaign/strategy"><i class="fa fa-cogs" aria-hidden="true"></i>策略管理</a></li>
                            <li><a href="/creativeMange/lists/campaign/creative"><i class="fa fa-picture-o" aria-hidden="true"></i>创意管理</a></li>
                            <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'strategy') {?>
                                <!-- <li><a href="/campaignMange/lists/campaign/campaign"><i class="fa fa-sliders"></i>活动管理</a></li> -->
                                <li><a href="/launchMange/lists/campaign/launch"><i class="fa fa-paper-plane" aria-hidden="true"></i>投放管理</a></li>
                                <li class="active"><a href="/strategyMange/lists/campaign/strategy"><i class="fa fa-cogs" aria-hidden="true"></i>策略管理</a></li>
                                <li><a href="/creativeMange/lists/campaign/creative"><i class="fa fa-picture-o" aria-hidden="true"></i>创意管理</a></li>
                                <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'creative') {?>
                                    <!-- <li><a href="/campaignMange/lists/campaign/campaign"><i class="fa fa-sliders"></i>活动管理</a></li> -->
                                    <li><a href="/launchMange/lists/campaign/launch"><i class="fa fa-paper-plane" aria-hidden="true"></i>投放管理</a></li>
                                    <li><a href="/strategyMange/lists/campaign/strategy"><i class="fa fa-cogs" aria-hidden="true"></i>策略管理</a></li>
                                    <li class="active"><a href="/creativeMange/lists/campaign/creative"><i class="fa fa-picture-o" aria-hidden="true"></i>创意管理</a></li>
                                    <?php } else { ?>
                                        <!-- <li class="active"><a href="/campaignMange/lists/campaign/campaign"><i class="fa fa-sliders"></i>活动管理</a></li>
                                    <li><a href="/launchMange/lists/campaign/launch"><i class="fa fa-paper-plane" aria-hidden="true"></i>投放管理</a></li>
                                    <li><a href="/strategyMange/lists/campaign/strategy"><i class="fa fa-cogs" aria-hidden="true"></i>策略管理</a></li>
                                    <li><a href="/creativeMange/lists/campaign/creative"><i class="fa fa-picture-o" aria-hidden="true"></i>创意管理</a></li> -->
                                        <?php }?>
                    </ul>
                </li>
                <!-- <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>资源管理</span></a>
                            <ul class="children">
                                <li><a href="/adsenseMange/lists"><i class="fa fa-map-marker" aria-hidden="true"></i>广告位管理</a></li>
                                <li><a href="/pmpMange/lists"><i class="fa fa-pie-chart" aria-hidden="true"></i>PMP管理</a></li>
                                <li><a href="/creativeTemplate/lists"><i class="fa fa-cubes" aria-hidden="true"></i>创意模板</a></li>
                            </ul>
                        </li> -->
                <li class="nav-parent"><a href=""><i class="fa fa-th-list"></i> <span>数据报表</span></a>
                    <ul class="children">
                        <li><a href="/report/lists/report/lists"><i class="fa fa-line-chart" aria-hidden="true"></i>投放报表</a></li>
                    </ul>
                </li>
                <li class="nav-parent"><a href=""><i class="fa fa-file-text"></i> <span>运营管理</span></a>
                    <ul class="children">
                        <li><a href="/operationLoger/index/loger/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>操作日志</a></li>
                    </ul>
                </li>
                <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>帐户管理</span></a>
                    <ul class="children">
                        <li><a href="/account/info/account/info"><i class="fa fa-file-text-o" aria-hidden="true"></i>帐户信息</a></li>
                    </ul>
                    <ul class="children">
                        <li><a href="/store/lists/store/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>网站列表</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-parent"><a href=""><i class="fa fa-user-circle"></i> <span>帐号管理</span></a>
                            <ul class="children">
                                <li><a href="/account/mange"><i class="fa fa-cogs" aria-hidden="true"></i>帐号设置</a></li>
                                <li><a href="/account/invite_code"><i class="fa fa-cogs" aria-hidden="true"></i>邀请码</a></li>
                            </ul>
                        </li>
                        <li><a href="/mail/lists"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Email</span></a></li> -->
                <?php } elseif ($_smarty_tpl->tpl_vars['model']->value == 'report') {?>
                    <li class=""><a href="http://dsp.adlinkx.com"><i class="fa fa-tachometer"></i> <span>首页</span></a></li>
                    <li class="nav-parent"><a href=""><i class="fa fa-rocket"></i> <span>活动管理</span></a>
                        <ul class="children">
                            <!-- <li><a href="/campaignMange/lists/campaign/campaign"><i class="fa fa-sliders"></i>活动管理</a></li> -->
                            <li><a href="/launchMange/lists/campaign/launch"><i class="fa fa-paper-plane" aria-hidden="true"></i>投放管理</a></li>
                            <li><a href="/strategyMange/lists/campaign/strategy"><i class="fa fa-cogs" aria-hidden="true"></i>策略管理</a></li>
                            <li><a href="/creativeMange/lists/campaign/creative"><i class="fa fa-picture-o" aria-hidden="true"></i>创意管理</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>资源管理</span></a>
                            <ul class="children">
                                <li><a href="/adsenseMange/lists"><i class="fa fa-map-marker" aria-hidden="true"></i>广告位管理</a></li>
                                <li><a href="/pmpMange/lists"><i class="fa fa-pie-chart" aria-hidden="true"></i>PMP管理</a></li>
                                <li><a href="/creativeTemplate/lists"><i class="fa fa-cubes" aria-hidden="true"></i>创意模板</a></li>
                            </ul>
                        </li> -->
                    <li class="nav-parent nav-active active"><a href=""><i class="fa fa-th-list"></i> <span>数据报表</span></a>
                        <ul class="children" style="display: block;">
                            <li class="active"><a href="/report/lists/report/lists"><i class="fa fa-line-chart" aria-hidden="true"></i>投放报表</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent"><a href=""><i class="fa fa-file-text"></i> <span>运营管理</span></a>
                        <ul class="children">
                            <li><a href="/operationLoger/index/loger/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>操作日志</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>帐户管理</span></a>
                    <ul class="children">
                        <li><a href="/account/info/account/info"><i class="fa fa-file-text-o" aria-hidden="true"></i>帐户信息</a></li>
                    </ul>
                    <ul class="children">
                        <li><a href="/store/lists/store/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>网站列表</a></li>
                    </ul>
                </li>
                    <!-- <li class="nav-parent"><a href=""><i class="fa fa-user-circle"></i> <span>帐号管理</span></a>
                            <ul class="children">
                                <li><a href="/account/mange"><i class="fa fa-cogs" aria-hidden="true"></i>帐号设置</a></li>
                                <li><a href="/account/invite_code"><i class="fa fa-cogs" aria-hidden="true"></i>邀请码</a></li>
                            </ul>
                        </li>
                        <li><a href="/mail/lists"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Email</span></a></li> -->
                    <?php } elseif ($_smarty_tpl->tpl_vars['model']->value == 'loger') {?>
                        <li class=""><a href="http://dsp.adlinkx.com"><i class="fa fa-tachometer"></i> <span>首页</span></a></li>
                        <li class="nav-parent"><a href=""><i class="fa fa-rocket"></i> <span>活动管理</span></a>
                            <ul class="children">
                                <!-- <li><a href="/campaignMange/lists/campaign/campaign"><i class="fa fa-sliders"></i>活动管理</a></li> -->
                                <li><a href="/launchMange/lists/campaign/launch"><i class="fa fa-paper-plane" aria-hidden="true"></i>投放管理</a></li>
                                <li><a href="/strategyMange/lists/campaign/strategy"><i class="fa fa-cogs" aria-hidden="true"></i>策略管理</a></li>
                                <li><a href="/creativeMange/lists/campaign/creative"><i class="fa fa-picture-o" aria-hidden="true"></i>创意管理</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>资源管理</span></a>
                            <ul class="children">
                                <li><a href="/adsenseMange/lists"><i class="fa fa-map-marker" aria-hidden="true"></i>广告位管理</a></li>
                                <li><a href="/pmpMange/lists"><i class="fa fa-pie-chart" aria-hidden="true"></i>PMP管理</a></li>
                                <li><a href="/creativeTemplate/lists"><i class="fa fa-cubes" aria-hidden="true"></i>创意模板</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-parent"><a href=""><i class="fa fa-th-list"></i> <span>数据报表</span></a>
                            <ul class="children">
                                <li><a href="/report/lists/report/lists"><i class="fa fa-line-chart" aria-hidden="true"></i>投放报表</a></li>
                            </ul>
                        </li>
                        <li class="nav-parent nav-active active"><a href=""><i class="fa fa-file-text"></i> <span>运营管理</span></a>
                            <ul class="children" style="display: block;">
                                <li class="active"><a href="/operationLoger/index/loger/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>操作日志</a></li>
                            </ul>
                        </li>
                        <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>帐户管理</span></a>
                    <ul class="children">
                        <li><a href="/account/info/account/info"><i class="fa fa-file-text-o" aria-hidden="true"></i>帐户信息</a></li>
                    </ul>
                    <ul class="children">
                        <li><a href="/store/lists/store/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>网站列表</a></li>
                    </ul>
                </li>
                        <!-- <li class="nav-parent"><a href=""><i class="fa fa-user-circle"></i> <span>帐号管理</span></a>
                            <ul class="children">
                                <li><a href="/account/mange"><i class="fa fa-cogs" aria-hidden="true"></i>帐号设置</a></li>
                                <li><a href="/account/invite_code"><i class="fa fa-cogs" aria-hidden="true"></i>邀请码</a></li>
                            </ul>
                        </li>
                        <li><a href="/mail/lists"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Email</span></a></li> -->
                        <?php } elseif ($_smarty_tpl->tpl_vars['model']->value == 'store') {?>
                            <li class=""><a href="http://dsp.adlinkx.com/"><i class="fa fa-tachometer"></i> <span>首页</span></a></li>
                            <li class="nav-parent"><a href=""><i class="fa fa-rocket"></i> <span>活动管理</span></a>
                                <ul class="children">
                                    <!-- <li><a href="/campaignMange/lists/campaign/campaign"><i class="fa fa-sliders"></i>活动管理</a></li> -->
                                    <li><a href="/launchMange/lists/campaign/launch"><i class="fa fa-paper-plane" aria-hidden="true"></i>投放管理</a></li>
                                    <li><a href="/strategyMange/lists/campaign/strategy"><i class="fa fa-cogs" aria-hidden="true"></i>策略管理</a></li>
                                    <li><a href="/creativeMange/lists/campaign/creative"><i class="fa fa-picture-o" aria-hidden="true"></i>创意管理</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>资源管理</span></a>
                            <ul class="children">
                                <li><a href="/adsenseMange/lists"><i class="fa fa-map-marker" aria-hidden="true"></i>广告位管理</a></li>
                                <li><a href="/pmpMange/lists"><i class="fa fa-pie-chart" aria-hidden="true"></i>PMP管理</a></li>
                                <li><a href="/creativeTemplate/lists"><i class="fa fa-cubes" aria-hidden="true"></i>创意模板</a></li>
                            </ul>
                        </li> -->
                            <li class="nav-parent"><a href=""><i class="fa fa-th-list"></i> <span>数据报表</span></a>
                                <ul class="children">
                                    <li><a href="/report/lists/report/lists"><i class="fa fa-line-chart" aria-hidden="true"></i>投放报表</a></li>
                                </ul>
                            </li>
                            <li class="nav-parent"><a href=""><i class="fa fa-file-text"></i> <span>运营管理</span></a>
                                <ul class="children">
                                    <li><a href="/operationLoger/index/loger/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>操作日志</a></li>
                                </ul>
                            </li>
                            <li class="nav-parent nav-active active"><a href=""><i class="fa fa-tasks"></i> <span>帐户管理</span></a>
                                <ul class="children" style="display: block;">
                                    <li><a href="/account/info/account/info"><i class="fa fa-file-text-o" aria-hidden="true"></i>帐户信息</a></li>
                                    <li class="active"><a href="/store/lists/store/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>网站列表</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-parent"><a href=""><i class="fa fa-user-circle"></i> <span>帐号管理</span></a>
                            <ul class="children">
                                <li><a href="/account/mange"><i class="fa fa-cogs" aria-hidden="true"></i>帐号设置</a></li>
                                <li><a href="/account/invite_code"><i class="fa fa-cogs" aria-hidden="true"></i>邀请码</a></li>
                            </ul>
                        </li>
                        <li><a href="/mail/lists"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Email</span></a></li> -->
                        <?php } elseif ($_smarty_tpl->tpl_vars['model']->value == 'account') {?>
                            <li class=""><a href="http://dsp.adlinkx.com"><i class="fa fa-tachometer"></i> <span>首页</span></a></li>
                            <li class="nav-parent"><a href=""><i class="fa fa-rocket"></i> <span>活动管理</span></a>
                                <ul class="children">
                                    <!-- <li><a href="/campaignMange/lists/campaign/campaign"><i class="fa fa-sliders"></i>活动管理</a></li> -->
                                    <li><a href="/launchMange/lists/campaign/launch"><i class="fa fa-paper-plane" aria-hidden="true"></i>投放管理</a></li>
                                    <li><a href="/strategyMange/lists/campaign/strategy"><i class="fa fa-cogs" aria-hidden="true"></i>策略管理</a></li>
                                    <li><a href="/creativeMange/lists/campaign/creative"><i class="fa fa-picture-o" aria-hidden="true"></i>创意管理</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>资源管理</span></a>
                            <ul class="children">
                                <li><a href="/adsenseMange/lists"><i class="fa fa-map-marker" aria-hidden="true"></i>广告位管理</a></li>
                                <li><a href="/pmpMange/lists"><i class="fa fa-pie-chart" aria-hidden="true"></i>PMP管理</a></li>
                                <li><a href="/creativeTemplate/lists"><i class="fa fa-cubes" aria-hidden="true"></i>创意模板</a></li>
                            </ul>
                        </li> -->
                            <li class="nav-parent"><a href=""><i class="fa fa-th-list"></i> <span>数据报表</span></a>
                                <ul class="children">
                                    <li><a href="/report/lists/report/lists"><i class="fa fa-line-chart" aria-hidden="true"></i>投放报表</a></li>
                                </ul>
                            </li>
                            <li class="nav-parent"><a href=""><i class="fa fa-file-text"></i> <span>运营管理</span></a>
                                <ul class="children">
                                    <li><a href="/operationLoger/index/loger/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>操作日志</a></li>
                                </ul>
                            </li>
                            <li class="nav-parent nav-active active"><a href=""><i class="fa fa-tasks"></i> <span>帐户管理</span></a>
                                <ul class="children" style="display:block;">
                                    <li class="active"><a href="/account/info/account/info"><i class="fa fa-file-text-o" aria-hidden="true"></i>帐户信息</a></li>
                                    <li><a href="/store/lists/store/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>网站列表</a></li>
                                </ul>
                            </li>
                            <!-- <li class="nav-parent"><a href=""><i class="fa fa-user-circle"></i> <span>帐号管理</span></a>
                            <ul class="children">
                                <li><a href="/account/mange"><i class="fa fa-cogs" aria-hidden="true"></i>帐号设置</a></li>
                                <li><a href="/account/invite_code"><i class="fa fa-cogs" aria-hidden="true"></i>邀请码</a></li>
                            </ul>
                        </li>
                        <li><a href="/mail/lists"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Email</span></a></li> -->
                            <?php } else { ?>
                                <li class="active"><a href="http://dsp.adlinkx.com"><i class="fa fa-tachometer"></i> <span>首页</span></a></li>
                                <li class="nav-parent"><a href=""><i class="fa fa-rocket"></i> <span>活动管理</span></a>
                                    <ul class="children">
                                        <!-- <li><a href="/campaignMange/lists/campaign/campaign"><i class="fa fa-sliders"></i>活动管理</a></li> -->
                                        <li><a href="/launchMange/lists/campaign/launch"><i class="fa fa-paper-plane" aria-hidden="true"></i>投放管理</a></li>
                                        <li><a href="/strategyMange/lists/campaign/strategy"><i class="fa fa-cogs" aria-hidden="true"></i>策略管理</a></li>
                                        <li><a href="/creativeMange/lists/campaign/creative"><i class="fa fa-picture-o" aria-hidden="true"></i>创意管理</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>资源管理</span></a>
                            <ul class="children">
                                <li><a href="/adsenseMange/lists"><i class="fa fa-map-marker" aria-hidden="true"></i>广告位管理</a></li>
                                <li><a href="/pmpMange/lists"><i class="fa fa-pie-chart" aria-hidden="true"></i>PMP管理</a></li>
                                <li><a href="/creativeTemplate/lists"><i class="fa fa-cubes" aria-hidden="true"></i>创意模板</a></li>
                            </ul>
                        </li> -->
                                <li class="nav-parent"><a href=""><i class="fa fa-th-list"></i> <span>数据报表</span></a>
                                    <ul class="children">
                                        <li><a href="/report/lists/report/lists"><i class="fa fa-line-chart" aria-hidden="true"></i>投放报表</a></li>
                                    </ul>
                                </li>
                                <li class="nav-parent"><a href=""><i class="fa fa-file-text"></i> <span>运营管理</span></a>
                                    <ul class="children">
                                        <li><a href="/operationLoger/index/loger/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>操作日志</a></li>
                                    </ul>
                                </li>
                                <li class="nav-parent"><a href=""><i class="fa fa-tasks"></i> <span>帐户管理</span></a>
                                    <ul class="children">
                                        <li><a href="/account/info/account/info"><i class="fa fa-file-text-o" aria-hidden="true"></i>帐户信息</a></li>
                                    </ul>
                                    <ul class="children">
                                        <li><a href="/store/lists/store/lists"><i class="fa fa-file-text-o" aria-hidden="true"></i>网站列表</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="nav-parent"><a href=""><i class="fa fa-user-circle"></i> <span>帐号管理</span></a>
                            <ul class="children">
                                <li><a href="/account/mange"><i class="fa fa-cogs" aria-hidden="true"></i>帐号设置</a></li>
                                <li><a href="/account/invite_code"><i class="fa fa-cogs" aria-hidden="true"></i>邀请码</a></li>
                            </ul>
                        </li>
                        <li><a href="/mail/lists"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Email</span></a></li> -->
                                <?php }?>
        </ul>
        <!-- <div class="infosummary">
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
        </div> -->
        <!-- infosummary -->
    </div>
    <!-- leftpanelinner -->
</div><?php }
}
