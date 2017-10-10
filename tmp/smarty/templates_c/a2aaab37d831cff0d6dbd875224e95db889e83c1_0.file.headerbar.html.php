<?php
/* Smarty version 3.1.30, created on 2017-09-26 14:42:47
  from "C:\web\www\dsp.adlinkx.com\application\views\common\headerbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c9f6e76a5103_98638342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2aaab37d831cff0d6dbd875224e95db889e83c1' => 
    array (
      0 => 'C:\\web\\www\\dsp.adlinkx.com\\application\\views\\common\\headerbar.html',
      1 => 1506049933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c9f6e76a5103_98638342 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="headerbar">
                <a class="menutoggle"><i class="fa fa-bars"></i></a>
                <form class="searchform" action="index.html" method="post">
                    <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
                </form>
                <div class="header-right">
                    <ul class="headermenu">
                        <li>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>
" />
                                    <i class="fa fa-user-circle"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>

                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                    <li><a href="/account/info/account/info"><i class="glyphicon glyphicon-cog"></i>帐号设置</a></li>
                                    <!-- <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>帮助</a></li> -->
                                    <li><a href="/user/sign_out"><i class="glyphicon glyphicon-log-out"></i>退出</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- header-right -->
            </div><?php }
}
