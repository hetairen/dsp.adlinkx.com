<?php
/* Smarty version 3.1.30, created on 2017-08-28 10:36:37
  from "/Users/bluelife/www/www.adlinkx.com/application/views/campaign/list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a381b5cf4028_64456406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c37aea264de10c613ae372ffa5318a713820bfd' => 
    array (
      0 => '/Users/bluelife/www/www.adlinkx.com/application/views/campaign/list.html',
      1 => 1503659690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.html' => 1,
    'file:common/leftpanel.html' => 1,
    'file:common/headerbar.html' => 1,
    'file:common/footerbar.html' => 1,
  ),
),false)) {
function content_59a381b5cf4028_64456406 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<?php $_smarty_tpl->_subTemplateRender("file:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
    </div>
    <section>
        <?php $_smarty_tpl->_subTemplateRender("file:common/leftpanel.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- leftpanel -->
        <div class="mainpanel">
            <?php $_smarty_tpl->_subTemplateRender("file:common/headerbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- headerbar -->
            <div class="pageheader">
                <h2><i class="fa fa-sliders"></i>控制台<span>活动管理</span> <span>活动管理</span></h2>
                <div class="breadcrumb-wrapper">
                    <span class="label">在这里</span>
                    <ol class="breadcrumb">
                        <li><a href="https://www.adlinkx.com">返回</a></li>
                        <li class="active">控制台</li>
                    </ol>
                </div>
            </div>
            <div class="contentpanel">
                <div class="panel panel-default">
                    <div class="panel-heading">活动管理</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table2">
                                <thead>
                                    <tr>
                                        <th>用户ID</th>
                                        <th>记录</th>
                                        <th>描述</th>
                                        <th>IP</th>
                                        <th>时间</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contentpanel -->
            <?php $_smarty_tpl->_subTemplateRender("file:common/footerbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
 src="/resources/js/libarays/jquery.datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/select2.min.js"><?php echo '</script'; ?>
>
    <!--  <?php echo '<script'; ?>
 src="/resources/js/libarays/flot/jquery.flot.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/flot/jquery.flot.resize.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/flot/jquery.flot.spline.min.js"><?php echo '</script'; ?>
> -->
    <!--     <?php echo '<script'; ?>
 src="/resources/js/libarays/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/raphael-2.1.0.min.js"><?php echo '</script'; ?>
> -->
    <?php echo '<script'; ?>
 src="/resources/js/libarays/custom.js"><?php echo '</script'; ?>
>
    <!--  <?php echo '<script'; ?>
 src="/resources/js/libarays/dashboard.js"><?php echo '</script'; ?>
> -->
    <?php echo '<script'; ?>
>
    jQuery(document).ready(function() {

        "use strict";

        jQuery('#table1').dataTable();

        jQuery('#table2').dataTable({
            "sPaginationType": "full_numbers"
        });

        // Select2
        jQuery('select').select2({
            minimumResultsForSearch: -1
        });

        jQuery('select').removeClass('form-control');

        // Delete row in a table
        jQuery('.delete-row').click(function() {
            var c = confirm("Continue delete?");
            if (c)
                jQuery(this).closest('tr').fadeOut(function() {
                    jQuery(this).remove();
                });

            return false;
        });

        // Show aciton upon row hover
        jQuery('.table-hidaction tbody tr').hover(function() {
            jQuery(this).find('.table-action-hide a').animate({
                opacity: 1
            });
        }, function() {
            jQuery(this).find('.table-action-hide a').animate({
                opacity: 0
            });
        });


    });
    <?php echo '</script'; ?>
>
</body>

</html>

<?php }
}
