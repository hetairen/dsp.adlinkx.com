<?php
/* Smarty version 3.1.30, created on 2017-09-26 14:42:47
  from "C:\web\www\dsp.adlinkx.com\application\views\report\report.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c9f6e7454152_86084602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd94b4aa2a4b40c3523872e181f84cd5a841eed21' => 
    array (
      0 => 'C:\\web\\www\\dsp.adlinkx.com\\application\\views\\report\\report.html',
      1 => 1506406697,
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
function content_59c9f6e7454152_86084602 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" type="text/css" href="/resources/css/home.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="/resources/js/libarays/laydate/laydate.js" charset="utf-8"><?php echo '</script'; ?>
>
</head>

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
                        <h2><i class="fa fa-line-chart"></i>首页<span>数据报表</span> <span>投放报表</span></h2>
                        <div class="breadcrumb-wrapper">
                            <span class="label">在这里</span>
                            <ol class="breadcrumb">
                                <li><a href="https://www.adlinkx.com">返回</a></li>
                                <li class="">首页</li>
                            </ol>
                        </div>
                    </div>
                    <div class="contentpanel">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="page-title" style="width:70%;">投放报表</div>
                                <div class="report-select-shop-box" data-is-click="false">
                                    <div class="select-brands-title">网站选择：</div>
                                    <div class="select-brands-but" data-is-click="false"><?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {?><span id="store-title-box" data-shop-id="<?php echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_title'];?>
</span><i class="fa fa-caret-right" style="position:absolute;left:240px;top:8px;border:none;margin:0 0 0 10px;"></i><?php } else { ?><span id="store-title-box" data-shop-id="">全部</span><i class="fa fa-caret-right" style="position:absolute;left:2400px;top:8px;border:none;margin:0 0 0 10px;"></i><?php }?></div>
                                    <div class="brands-lists-block" style="display:none;">
                                    <?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {?>
                                        <div class="brands-lists" data-shop-id="">全部</div>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['store']->value, 'list', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['list']->value) {
?>
                                            <div class="brands-lists" data-shop-id="<?php echo $_smarty_tpl->tpl_vars['list']->value['shop_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['shop_title'];?>
</div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    <?php } else { ?>
                                        <div class="brands-lists" data-shop-id="">全部</div>
                                    <?php }?>
                                    </div>
                                </div>
                                <div class="add-but-block"></div>
                                <div class="space-box"></div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="home-block-box" data-is-hidden="false" style="height:556px;">
                                        <div class="home-header-box"><span><i class="fa fa-pie-chart"></i>&nbsp;数据趋势</span><span class="show-hidden-but" data-click="false" data-type=""><i class="fa fa-chevron-down"></i></span></div>
                                        <div class="home-body-box" style="height:500px;">
                                            <div class="home-body-fn-box">
                                                <div class="report-select-target-but-box" data-is-click="false">
                                                    <i class="fa fa-line-chart" style="margin:0 10px;"></i>
                                                    <a class="target-values" data-target-values="ds_pv#ds_click">展现量、点击数</a>
                                                    <i class="fa fa-caret-right" style="position:absolute;left:230px;top:13px;"></i>
                                                    <div class="traget-values-box" style="display:none;">
                                                        <div class="traget-values-box-header">投放相关</div>
                                                        <div class="traget-values-box-body">
                                                            <a class="target-value-option" data-option-value="ds_pv" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>" data-checked="false"><i class="fa fa-square-o"></i>&nbsp;<span>展现量</span></a>
                                                            <a class="target-value-option" data-option-value="ds_click" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>" data-checked="false"><i class="fa fa-square-o"></i>&nbsp;<span>点击数</span></a>
                                                            <a class="target-value-option" data-option-value="ds_ctr" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>" data-checked="false"><i class="fa fa-square-o"></i>&nbsp;<span>点击率</span></a>
                                                            <a class="target-value-option" data-option-value="ds_charge" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>" data-checked="false"><i class="fa fa-square-o"></i>&nbsp;<span>总消耗</span></a>
                                                        </div>
                                                        <div class="traget-values-box-footer">（可同时选择<d style="color:#c80000;font-weight: bold;">2</d>项）</div>
                                                    </div>
                                                </div>
                                                <div class="home-body-fn-time-box">
                                                    <i class="fa fa-calendar time-icon"></i>
                                                    <a href="javascript:void(0);" id="home-body-hook-time-but" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>"></a>
                                                </div>
                                                <div class="home-body-fn-buts-box">
                                                    <!-- <a href="javascript:void(0);" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>" data-fn="month" class="home-function-but month-but">按月</a>
                                                    <a href="javascript:void(0);" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>" data-fn="week" class="home-function-but week-but">按周</a>
                                                    <a href="javascript:void(0);" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>" data-fn="day" class="home-function-but day-but">按天</a> -->
                                                </div>
                                            </div>
                                            <div id="main" style="width: 100%;height:400px;"></div>
                                        </div>
                                    </div>
                                    <div class="home-block-box" data-is-hidden="false" style="height:590px;">
                                        <div class="home-header-box"><span><i class="fa fa-table"></i>&nbsp;数据表格</span><span class="show-hidden-but" data-click="false" data-type="data-table"><i class="fa fa-chevron-down"></i></span></div>
                                        <div class="home-body-box" style="height:500px;">
                                            <div class="report-data-table-buts-box">
                                                <a href="javascript:void(0);" class="report-query-buttons" data-type="day" data-checked="true" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>"><i class="fa fa-dot-circle-o"></i>&nbsp;按天查看</a>
                                                <a href="javascript:void(0);" class="report-query-buttons" data-type="plan" data-checked="false" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>"><i class="fa fa-circle-o"></i>&nbsp;按推广计划查看</a>
                                                <a href="javascript:void(0);" class="report-query-buttons" data-type="unit" data-checked="false" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>"><i class="fa fa-circle-o"></i>&nbsp;按推广组查看</a>
                                                <a href="javascript:void(0);" class="report-query-buttons" data-type="creative" data-checked="false" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>"><i class="fa fa-circle-o"></i>&nbsp;按推广创意查看</a>
                                                <a href="javascript:void(0);" class="report-query-buttons" data-type="device" data-checked="false" data-shop-id="<?php if (count($_smarty_tpl->tpl_vars['store']->value) != 0) {
echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];
} else {
}?>"><i class="fa fa-circle-o"></i>&nbsp;按设备查看</a>
                                                <a class="export-buts but-0781ec" href="javascript:void(0);" data-shop-id='<?php echo $_smarty_tpl->tpl_vars['store']->value[0]['shop_id'];?>
'><i class="fa fa-download ml10 mr4"></i>导出数据</a>
                                            </div>
                                            <div class="report-data-table-body">
                                                <table class="table table-striped" id="table2">
                                                    <thead>
                                                        <tr>
                                                            <th>header</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>data</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div id="pages-box" data-count="" data-current=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contentpanel -->
                    <?php $_smarty_tpl->_subTemplateRender("file:common/footerbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <!-- mainpanel -->
    </section>
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
 src="/resources/js/libarays/jquery.cookies.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resources/js/libarays/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        var myDate = new Date();
        var newDate = myDate.getDate();
        myDate.setDate(myDate.getDate() - 7);
        var  weekDay= myDate.getDate();
        var week_time = myDate.getFullYear()+'-'+((myDate.getMonth()+1) > 9 ? (myDate.getMonth()+1) : '0'+(myDate.getMonth()+1))+'-'+(weekDay > 9 ? weekDay: '0'+weekDay);
        var new_time= myDate.getFullYear()+'-'+((myDate.getMonth()+1) > 9 ? (myDate.getMonth()+1) : '0'+(myDate.getMonth()+1))+'-'+(newDate > 9 ? newDate: '0'+newDate);
        var date_value = week_time+' ~ '+new_time;
        var insl = laydate.render({
            elem: '#home-body-hook-time-but',
            max:0,
            range: '~',
            value:date_value,
            done:function(data){
                var start_date = data.split(' ~ ')[0];
                var end_date = data.split(' ~ ')[1];
                get_dsp_satef('day',{
                    'shop_id':$(this).attr('data-shop-id'),
                    'start_date':start_date,
                    'end_start':end_date,
                    'metric':'pv_click',
                    'format':'chart'
                });
            }
        });

        get_dsp_satef('day',{
            'shop_id':$('#store-title-box').attr('data-shop-id'),
            'start_date':week_time,
            'end_start':new_time,
            'metric':'pv_click',
            'format':'chart'
        });

        get_table_data('day',$('#store-title-box').attr('data-shop-id'),'0','0',0);

        $(document).on('click','.report-select-shop-box',function(e){
            e.stopPropagation();
            if($(this).attr('data-is-click') == 'false'){
                $(this).attr('data-is-click',true);
                $('.brands-lists-block').css('display','block');
                $(this).find('.select-brands-but i').removeClass('fa-caret-right').addClass('fa-caret-down');
            }else{
                $(this).attr('data-is-click',false);
                $('.brands-lists-block').css('display','none');
                $(this).find('.select-brands-but i').removeClass('fa-caret-down').addClass('fa-caret-right');
            }
            
        });

        $(document).on('mouseover','.brands-lists',function(e){
            $('.brands-lists').css('background','#FFF');
            $(this).css('background','#c1c1c1');
        });

        $(document).on('click','.brands-lists',function(e){
            var shop_id = $(this).attr('data-shop-id');
            $('#store-title-box').html($(this).html()).attr('data-shop-id', shop_id);
            $('.home-function-but').attr('data-shop-id',shop_id);
            $('.target-value-option').attr('data-shop-id',shop_id);
            $('.export-buts').attr('data-shop-id',$(this).attr('data-shop-id'));
            $('.brands-lists-block').css('display','none');
        });

        $(document).on('click',function(){
            $('.brands-lists-block').css('display','none');
            $('.traget-values-box').css('display','none');
            $('.report-select-shop-box').attr('data-is-click',false).find('.select-brands-but i').removeClass('fa-chevron-down').addClass('fa-chevron-right')
            $('.report-select-target-but-box').attr('data-is-click',false).find('i').eq(1).removeClass('fa-chevron-down').addClass('fa-chevron-right');
        });

        $(document).on('click','.show-hidden-but',function(){
            if($(this).attr('data-click') == 'false'){
                    $(this).attr('data-click',true);
                    $(this).find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
                    $(this).parent().parent().css({'height':50,'overflow':'hidden'});
            }else{
                $(this).attr('data-click',false);
                $(this).find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
                if($(this).attr('data-type') == 'data-table'){
                    $(this).parent().parent().css('height',590);
                }else{
                    $(this).parent().parent().css('height',556);
                }
                    
            }
        });

        $(document).on('click','.report-select-target-but-box',function(e){
            e.stopPropagation();
            if($(this).attr('data-is-click') == 'false'){
                $(this).attr('data-is-click',true);
                $(this).find('i').eq(1).removeClass('fa-caret-right').addClass('fa-caret-down');
                $('.traget-values-box').css('display','block');
            }else{
                $(this).attr('data-is-click',false);
                $(this).find('i').eq(1).removeClass('fa-caret-down').addClass('fa-caret-right');
                $('.traget-values-box').css('display','none');
            }
        });

        $(document).on('click','.target-value-option',function(e){
            e.stopPropagation();
            var text = '';
            if($(this).attr('data-checked') == 'false'){
                $(this).find('i').removeClass('fa-square-o').addClass('fa-check-square-o');
                $(this).attr('data-checked',true);
            }else{
                $(this).find('i').removeClass('fa-check-square-o').addClass('fa-square-o');
                $(this).attr('data-checked',false);
            }
            $('.target-value-option').each(function(index, el) {
                if($(this).attr('data-checked') == 'true'){
                    text += $(this).find('span').html()+'、';
                }
            });
            $('.target-values').html(text.substr(0,parseInt(text.length-1)));
        });

        var but_type = 'day';
        $(document).on('click','.report-query-buttons',function(){
            var but_type = $(this).attr('data-type');
            var shop_id = $(this).attr('data-shop-id');
            var start_date = $('#home-body-hook-time-but').html().split(' ~ ')[0];
            var end_date = $('#home-body-hook-time-but').html().split(' ~ ')[1];
            $('.report-query-buttons').attr('data-checked',false).css({'color':'#636e7b','background':'#FFF','border-color':'#c1c1c1'}).find('i').removeClass('fa-dot-circle-o').addClass('fa-circle-o');
            $(this).attr('data-checked',true).css({'color':'#FFF','background':'#0781ec','border-color':'#066eca'}).find('i').removeClass('fa-circle-o').addClass('fa-dot-circle-o');
            // console.log(but_type);
            get_table_data(but_type,shop_id,start_date,end_date,0);
        });

        $(document).on('click','.export-buts',function(){
            var type = null;
            var shop_id = null;
            var start_date = $('#home-body-hook-time-but').html().split(' ~ ')[0];
            var end_date = $('#home-body-hook-time-but').html().split(' ~ ')[1];
            $('.report-query-buttons').each(function(index, el) {
                if($(this).attr('data-checked') == 'true'){
                    type = $(this).attr('data-type');
                    shop_id = $(this).attr('data-shop-id');
                }
            });
            get_table_data(type,shop_id,start_date,end_date,1);
        });

        function get_dsp_satef(type,json){
            $.ajax({
                url:'/ajax_api/dsp_satef/'+type+'/'+json.shop_id+'/'+json.start_date+'/'+json.end_start+'/'+json.format+'/'+json.metric,
                type:'GET',
                success:function(res){
                    if(res.code == 1 && res.msg == 'success'){
                        drag_line(res.data.legend,res.data.field,res.data.data);
                    }
                },
                error:function(err){
                    console.error(err);
                }
            });
        }


        function get_table_data(type,shop_id,start_date,end_date,action){
            if(action){
                window.open('/ajax_api/get_table_data/'+type+'/'+shop_id+'/'+start_date+'/'+end_date+'/'+action);
            }else{
                $.ajax({
                    url:'/ajax_api/get_table_data/'+type+'/'+shop_id+'/'+start_date+'/'+end_date+'/'+action,
                    type:'GET',
                    success:function(res){
                        console.log(res);
                        if(res.code == 1 && res.msg == 'success'){
                            var th_html = '';
                            var tb_html = '';
                            // if(res.data.length > 0){
                                var th_html = '';
                                var tb_html = '';
                                var item = res.data.item;
                                var list = res.data.list;
                                var td_num = item.length;
                                $('#table2').find('thead').html(output_thead_html(item));
                                $('#table2').find('tbody').html(output_tbody_html(type,td_num,list));
                                $('#pages-box').attr('data-count',res.data.count);
                                $('#pages-box').attr('data-current',res.data.current);
                            // }else{
                            //     var th_html = '<tr><td>日期</td><td>展现量</td><td>点击数</td><td>点击率</td><td>总消耗</td></tr>';
                            //     var tb_html = '<tr><td colspan="5" style="text-align:center;">暂无数据</td></tr>';
                            //     $('#table2').find('thead').html(th_html);
                            //     $('#table2').find('tbody').html(tb_html);
                            // }
                            // $('#pages-box').attr('data-count',res.data.count);
                            // $('#pages-box').attr('data-current',res.data.current);
                            // get_pages('pages-box','/ajax_api/get_table_data/'+type+'/'+shop_id+'/');
                        }
                    },
                    error:function(err){
                        console.error(err);
                    }
                });
            }
        }

        function output_thead_html(item){
            var tmp = '';
            for(var i=0;i<item.length;i++){
                tmp += '<td>'+item[i]+'</td>';
            }
            return '<tr>'+tmp+'</tr>';
        }

        function output_tbody_html(type,td_num,list){
            var tmp = '';
            if(list.length > 0){
                switch(type){
                    case 'plan':
                        for(var i=0;i<list.length;i++){
                            tmp += '<tr><td>'+list[i]['plan_name']+'</td><td>'+list[i]['ds_pv']+'</td><td>'+list[i]['ds_click']+'</td><td>'+list[i]['ds_ctr']+'%</td><td>'+list[i]['ds_charge']+'</td></tr>';
                        }
                    break;
                    case 'unit':
                        for(var i=0;i<list.length;i++){
                            tmp += '<tr><td>'+list[i]['unit_name']+'</td><td>'+list[i]['plan_name']+'</td><td>'+list[i]['ds_pv']+'</td><td>'+list[i]['ds_click']+'</td><td>'+list[i]['ds_ctr']+'%</td><td>'+list[i]['ds_charge']+'</td></tr>';
                        }
                    break;
                    case 'creative':
                        for(var i=0;i<list.length;i++){
                            tmp += '<tr><td>'+list[i]['borad_name']+'</td><td>'+list[i]['unit_name']+'</td><td>'+list[i]['plan_name']+'</td><td>'+list[i]['ds_pv']+'</td><td>'+list[i]['ds_click']+'</td><td>'+list[i]['ds_ctr']+'%</td><td>'+list[i]['ds_charge']+'</td></tr>';
                        }
                    break;
                    case 'device':
                        for(var i=0;i<list.length;i++){

                            tmp += '<tr><td>'+out_put_device(list[i]['device'])+'</td><td>'+list[i]['ds_pv']+'</td><td>'+list[i]['ds_click']+'</td><td>'+list[i]['ds_ctr']+'%</td><td>'+list[i]['ds_charge']+'</td></tr>';
                        }
                    break;
                    default:
                        for(var i=0;i<list.length;i++){
                            tmp += '<tr><td>'+list[i]['date']+'</td><td>'+list[i]['ds_pv']+'</td><td>'+list[i]['ds_click']+'</td><td>'+list[i]['ds_ctr']+'%</td><td>'+list[i]['ds_charge']+'</td></tr>';
                        }
                    break;
                }
                
            }else{
                tmp += '<tr><td colspan="'+td_num+'" rowspan="" headers="" style="text-align: center;">暂无数据</td></tr>';
            }
            
            return tmp;
        }

        function out_put_device(device){
            var tmp = '';
            switch(parseInt(device)){
                case 1:
                    tmp = 'PC端';
                break;
                case 2:
                    tmp = '无线端';
                break;
                case 3:
                    tmp = 'APP';
                break;
                case 4:
                    tmp = 'Native'
                break;
                default:
                    tmp = '不限设备';
                break;
            }
            return tmp;
        }


        function get_pages(el,url){
            ADLINKX.pages({
                id: 'pages-box',
                first: {
                    text: '首页',
                    callback: null,
                    enable: true
                },
                last: {
                    text: '尾页',
                    callback: null,
                    enable: true
                },
                next: {
                    text: '下一页',
                    callback: null,
                    enable: true
                },
                previ: {
                    text: '上一页',
                    callback: null,
                    enable: true
                },
                search: {
                    text: '搜索',
                    callback: null,
                    enable: true
                },
                count: $('#'+el).attr('data-count'),
                current: $('#'+el).attr('data-current'),
                num: 20,
                color: '#0781ec',
                is_ajax: true,
                url: url,
                callback: function(res) {
                    console.log(res);
                }
            });
        }

        // drag_line();
            function drag_line(legend,fields,data){
                console.log(legend);
                console.log(fields);
                console.log(data);
                var myChart = echarts.init(document.getElementById('main'));
                option = {
                    title: {
                        text: '折线图'
                    },
                    tooltip: {
                        trigger: 'axis'
                    },
                    legend: {
                        data:legend
                    },
                    grid: {
                        left: '3%',
                        right: '4%',
                        bottom: '3%',
                        containLabel: true
                    },
                    toolbox: {
                        feature: {
                            saveAsImage: {}
                        }
                    },
                    xAxis: {
                        type: 'category',
                        boundaryGap: false,
                        data: fields
                    },
                    yAxis: {
                        type: 'value'
                    },
                    series: data
                };

                myChart.setOption(option);
            }



    });
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
