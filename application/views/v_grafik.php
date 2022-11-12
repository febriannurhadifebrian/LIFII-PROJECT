<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


        <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
	    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
	
        <script type="text/javascript">
            FusionCharts.ready(function(){
                    var revenueChart = new FusionCharts({
                        "type":"column2d",
                        "renderAt":"posisix",
                        "width": "100%",
                        "height":"500",
                        "dataFormat":"json",
                        "dataSource":{
                            "chart":{
                                "caption":"Return Reksadana",
                                "subCaption":"Dalam 1 Tahun",
                                "xaxisName":"Tahun",
                                "yAxisName":"Return",
                                "NumberSuffix": "%",
                                "theme":"fint"
                            },
                            "data":[
                                {"label":"Sucorinvest Flexi Fund","value":"19.64%"},
                                {"label":"Sucorinvest Sharia Equity Fund","value":"8.51%"},
                                {"label":"Sucorinvest Maxi Fund","value":"23.27%"},
                                {"label":"Sucorinvest Equity Fund","value":"28.12%"},
                                {"label":"Danamasas Stabil","value":"5.32%"}

                            ]
                        }
                    });
                    revenueChart.render();
                }
            )
        </script>
    </head>
    <body>
        <div id="posisix"></div>
        <a href="<?php echo site_url('crud') ?>" class="btn btn-warning">back</a>

    </body>
</html>