<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 03:59:50
  from "/home/xopher/www/superdomx.com/x/html/~widgets/analytics/graph.visits.js" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f0916543290_81670213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e007b0f1d1d0db66fb21ca3cea6a08eecfa6fbd' => 
    array (
      0 => '/home/xopher/www/superdomx.com/x/html/~widgets/analytics/graph.visits.js',
      1 => 1448769400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577f0916543290_81670213 (Smarty_Internal_Template $_smarty_tpl) {
?>
function pageLoad(){
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

PjaxApp.onPageLoad(pageLoad);<?php }
}
