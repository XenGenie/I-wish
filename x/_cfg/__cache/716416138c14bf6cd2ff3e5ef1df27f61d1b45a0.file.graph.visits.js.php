<?php /* Smarty version Smarty-3.1.19-dev, created on 2016-04-23 09:38:19
         compiled from "x/html/~widgets/analytics/graph.visits.js" */ ?>
<?php /*%%SmartyHeaderCode:1652014176571b266b6f77b8-01681859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '716416138c14bf6cd2ff3e5ef1df27f61d1b45a0' => 
    array (
      0 => 'x/html/~widgets/analytics/graph.visits.js',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652014176571b266b6f77b8-01681859',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_571b266b704161_52687871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b266b704161_52687871')) {function content_571b266b704161_52687871($_smarty_tpl) {?>function pageLoad(){
    nv.addGraph(function() {
        var chart = nv.models.lineChart()
            .margin({ top: 0, bottom: 25, left: 25, right: 0 })
            //.showLegend(false)
            .color([
                $orange, '#cf6d51'
                //'#618fb0', '#61b082'
            ]);

        chart.legend.margin({ top: 3 });

        chart.yAxis
            .showMaxMin(false)
            .tickFormat(d3.format(',.f'));

        chart.xAxis
            .showMaxMin(false)
            .tickFormat(function(d) { return d3.time.format('%b %d')(new Date(d)) });
        
            $.ajax({
                url : './analytics/index/30/.json',
                success:function(data, textStatus, jqXHR){
                    //data: return data from server
                    
                    data.data[0].area = true;
                    if(data.data){
                       d3.select('#visits-chart svg')
                        .datum(data.data)
                        .transition().duration(500)
                        .call(chart);
                    }else{
                         
                    }
                }
            });                

        PjaxApp.onResize(chart.update);

        return chart;
    });
}

pageLoad();

PjaxApp.onPageLoad(pageLoad);<?php }} ?>
