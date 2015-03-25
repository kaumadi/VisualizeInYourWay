
<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>

<!--
<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/themes/none.js"></script>
<div id="chartdiv"></div>
<textarea id="csv" style="width: 90%; height: 150px;">USA 2025
China 1882
Japan 1809
Germany 1322
UK 1122
France 1114</textarea>
<input type="button" value="parse CSV" onclick="parseData();" />
<style>
    #chartdiv {
    width : 100%;
    height : 250px;
    font-size : 11px;
}
</style>
<script>var chartData = parseCsv();
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
        "theme": "none",
        "dataProvider": chartData,
        "valueAxes": [{
        "gridColor": "#FFFFFF",
            "gridAlpha": 0.2,
            "dashLength": 0
    }],
        "gridAboveGraphs": true,
        "startDuration": 1,
        "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
            "fillAlphas": 0.8,
            "lineAlpha": 0.2,
            "type": "column",
            "valueField": "visits"
    }],
        "chartCursor": {
        "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
    },
        "categoryField": "country",
        "categoryAxis": {
        "gridPosition": "start",
            "gridAlpha": 0
    },
        "exportConfig": {
        "menuTop": 0,
            "menuItems": [{
            "icon": '/lib/3/images/export.png',
                "format": 'png'
        }]
    }
});

function parseCsv() {
    // get data
    var data = document.getElementById('csv').value;
    
    //replace UNIX new lines
    data = data.replace(/\r\n/g, "\n");
    //replace MAC new lines
    data = data.replace(/\r/g, "\n");
    //split into rows
    var rows = data.split("\n");

    var chartData = [];
    
    // loop through all rows
    for (var i = 0; i < rows.length; i++) {
        // this line helps to skip empty rows
        if (rows[i]) {
            // our columns are separated by comma
            var column = rows[i].split(/\s+/g);

            // column is array now 
            // first item is category
            var date = column[0];
            // second item is value of the second column
            var value = column[1];

            // create object which contains all these items:
            var dataObject = {
                country: date,
                visits: value
            };
            // add object to chartData array
            chartData.push(dataObject);
        }
    }
    return chartData;
}

function parseData() {
    chart.dataProvider = parseCsv();
    chart.validateData();
}</script>-->

<div class="col-md-12">
    <div class="grid simple ">
        <div class="grid-title no-border">
            <h4>Table <span class="semi-bold">Styles</span></h4>
           
        </div>
        <div class="grid-body no-border">
            
            <br>
            <table class="table table-bordered no-more-tables">
                <thead>
                    <tr>
                  
               
                <th class="text-center" style="width:70%">Select Graph</th>
                <th class="text-center" style="width:30%"></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td class="text-right">
                            <button type="Button" id ="bubble_id"><img src="<?php echo base_url(); ?>application_resources/img/graph_images/Bubble Chart.png" style="width: 40%; hight:50%" /></button>
                                                    

                        </td>
                        <td class="text-center">
                            
                            <div class="customer-sparkline" data-sparkline-color="#0aa699" data-sparkline-type="bar"><canvas width="34" height="15" style="display: inline-block; width: 34px; height: 15px; vertical-align: top;"></canvas></div>															
                        </td>
                    </tr>
                    <tr>
                        
                        <td class="text-right">$ 10,000.00</td>
                        <td class="text-center">
                            <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#f35958"><canvas width="34" height="15" style="display: inline-block; width: 34px; height: 15px; vertical-align: top;"></canvas></div>														
                        </td>
                    </tr>
                    <tr>
                       
                        <td class="text-right">$ 85,000.00</td>
                        <td class="text-center">
                            <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#0090d9"><canvas width="34" height="15" style="display: inline-block; width: 34px; height: 15px; vertical-align: top;"></canvas></div>															
                        </td>
                    </tr>
                    <tr>
                        
                        <td class="text-right">$ 56,000.00</td>
                        <td class="text-center">
                            <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#fdd01c"><canvas width="34" height="15" style="display: inline-block; width: 34px; height: 15px; vertical-align: top;"></canvas></div>																	
                        </td>
                    </tr>
                    <tr>
                        
                        <td class="text-right">$ 98,000.00</td>
                        <td class="text-center">
                            <div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#0aa699"><canvas width="34" height="15" style="display: inline-block; width: 34px; height: 15px; vertical-align: top;"></canvas></div>															
                        </td>
                    </tr>	
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#generate_graphs_parent_menu').addClass('active open');
</script>