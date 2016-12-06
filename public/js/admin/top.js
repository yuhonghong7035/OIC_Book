$(function(){
    var data = [
        {"月": "１月", "数量": 65},
        {"月": "２月", "数量": 59},
        {"月": "３月", "数量": 80},
        {"月": "４月", "数量": 81},
        {"月": "５月", "数量": 56},
        {"月": "６月", "数量": 55},
        {"月": "７月", "数量": 48}
    ];

    var chart = new tauCharts.Chart({

        data: data,  //表示するデータ
        type: 'bar',  //グラフの種類
        x: '数量',  //X軸の要素
        y: '月',  //Y軸の要素
        color: '月'  //カラーの基準要素

    });
    chart.renderTo('#stage');
});