 
<!DOCTYPE html>
<html lang="en">
<body class="nav-md">
<div class="container body">
  <div class="main_container">
     <?php include("..include/top-nav.php"); ?>
    <?php include("../include/right-nav.php"); ?>
<!--[if lte IE 8]>
	<script type='text/javascript' src=' js/html5shiv.js'></script>
	<script type='text/javascript' src=' js/respond.min.js'></script>
<![endif]-->

<script src="<?php echo SCRIPT_ROOT;?>jquery.canvasjs.min.js"></script>
<script type="text/javascript">
    $(function () {
      //Better to construct options first and then pass it as a parameter
      var options = {
        zoomEnabled: true,
        animationEnabled: true,
        title: {
          text: "Fertility Rate Vs Life Expectancy in different countries - 2009"
        },
        axisX: {
          title: "Life Expectancy",
          maximum: 85
        },
        axisY: {
          title: "Fertility Rate"

        },

        legend: {
          verticalAlign: "bottom",
          horizontalAlign: "left"

        },
        data: [
        {
          type: "bubble",
          legendText: "Size of Bubble Represents Population",
          showInLegend: true,
          legendMarkerType: "circle",
          legendMarkerColor: "grey",
          toolTipContent: "<span style='\"'color: {color};'\"'><strong>{name}</strong></span><br/><strong>Life Exp</strong> {x} yrs<br/> <strong>Fertility Rate</strong> {y}<br/> <strong>Population</strong> {z}mn",

          dataPoints: [
           { x: 78.1, y: 2.00, z: 306.77, name: "US" },
           { x: 68.5, y: 2.15, z: 237.414, name: "Indonesia" },
           { x: 72.5, y: 1.86, z: 193.24, name: "Brazil" },
           { x: 76.5, y: 2.36, z: 112.24, name: "Mexico" },
           { x: 50.9, y: 5.56, z: 154.48, name: "Nigeria" },
           { x: 68.6, y: 1.54, z: 141.91, name: "Russia" },
           { x: 82.9, y: 1.37, z: 127.55, name: "Japan" },
           { x: 79.8, y: 1.36, z: 81.90, name: "Australia" },
           { x: 72.7, y: 2.78, z: 79.71, name: "Egypt" },
           { x: 80.1, y: 1.94, z: 61.81, name: "UK" },
           { x: 55.8, y: 4.76, z: 39.24, name: "Kenya" },
           { x: 81.5, y: 1.93, z: 21.95, name: "Australia" },
           { x: 68.1, y: 4.77, z: 31.09, name: "Iraq" },
           { x: 47.9, y: 6.42, z: 33.42, name: "Afganistan" },
           { x: 50.3, y: 5.58, z: 18.55, name: "Angola" }


          ]
        }
        ]
      };
      $("#chartContainer1").CanvasJSChart(options);
    });

    $(function () {
      //Better to construct options first and then pass it as a parameter
      var options = {
        title: {
          text: "Email Analysis"
        },
        animationEnabled: true,
        axisX: {
          interval: 3
        },
        axisY: {
          title: "Number of Messages"
        },
        legend: {
          verticalAlign: "bottom",
          horizontalAlign: "center"
        },

        data: [{
          name: "received",
          showInLegend: true,
          legendMarkerType: "square",
          type: "area",
          color: "rgba(40,175,101,0.6)",
          markerSize: 0,

          dataPoints: [
          { x: new Date(2013, 0, 1, 00, 00), label: "midnight", y: 7 },
          { x: new Date(2013, 0, 1, 01, 00), y: 8 },
          { x: new Date(2013, 0, 1, 02, 00), y: 5 },
          { x: new Date(2013, 0, 1, 03, 00), y: 7 },
          { x: new Date(2013, 0, 1, 04, 00), y: 6 },
          { x: new Date(2013, 0, 1, 05, 00), y: 8 },
          { x: new Date(2013, 0, 1, 06, 00), y: 12 },
          { x: new Date(2013, 0, 1, 07, 00), y: 24 },
          { x: new Date(2013, 0, 1, 08, 00), y: 36 },
          { x: new Date(2013, 0, 1, 09, 00), y: 35 },
          { x: new Date(2013, 0, 1, 10, 00), y: 37 },
          { x: new Date(2013, 0, 1, 11, 00), y: 29 },
          { x: new Date(2013, 0, 1, 12, 00), y: 34, label: "noon" },
          { x: new Date(2013, 0, 1, 13, 00), y: 38 },
          { x: new Date(2013, 0, 1, 14, 00), y: 23 },
          { x: new Date(2013, 0, 1, 15, 00), y: 31 },
          { x: new Date(2013, 0, 1, 16, 00), y: 34 },
          { x: new Date(2013, 0, 1, 17, 00), y: 29 },
          { x: new Date(2013, 0, 1, 18, 00), y: 14 },
          { x: new Date(2013, 0, 1, 19, 00), y: 12 },
          { x: new Date(2013, 0, 1, 20, 00), y: 10 },
          { x: new Date(2013, 0, 1, 21, 00), y: 8 },
          { x: new Date(2013, 0, 1, 22, 00), y: 13 },
          { x: new Date(2013, 0, 1, 23, 00), y: 11 }
          ]
        },
        {
          name: "sent",
          showInLegend: true,
          legendMarkerType: "square",
          type: "area",
          color: "rgba(0,75,141,0.7)",
          markerSize: 0,
          label: "",
          dataPoints: [

          { x: new Date(2013, 0, 1, 00, 00), label: "midnight", y: 12 },
          { x: new Date(2013, 0, 1, 01, 00), y: 10 },
          { x: new Date(2013, 0, 1, 02, 00), y: 3 },
          { x: new Date(2013, 0, 1, 03, 00), y: 5 },
          { x: new Date(2013, 0, 1, 04, 00), y: 2 },
          { x: new Date(2013, 0, 1, 05, 00), y: 1 },
          { x: new Date(2013, 0, 1, 06, 00), y: 3 },
          { x: new Date(2013, 0, 1, 07, 00), y: 6 },
          { x: new Date(2013, 0, 1, 08, 00), y: 14 },
          { x: new Date(2013, 0, 1, 09, 00), y: 15 },
          { x: new Date(2013, 0, 1, 10, 00), y: 21 },
          { x: new Date(2013, 0, 1, 11, 00), y: 24 },
          { x: new Date(2013, 0, 1, 12, 00), y: 28, label: "noon" },
          { x: new Date(2013, 0, 1, 13, 00), y: 26 },
          { x: new Date(2013, 0, 1, 14, 00), y: 17 },
          { x: new Date(2013, 0, 1, 15, 00), y: 23 },
          { x: new Date(2013, 0, 1, 16, 00), y: 28 },
          { x: new Date(2013, 0, 1, 17, 00), y: 22 },
          { x: new Date(2013, 0, 1, 18, 00), y: 10 },
          { x: new Date(2013, 0, 1, 19, 00), y: 9 },
          { x: new Date(2013, 0, 1, 20, 00), y: 6 },
          { x: new Date(2013, 0, 1, 21, 00), y: 4 },
          { x: new Date(2013, 0, 1, 22, 00), y: 12 },
          { x: new Date(2013, 0, 1, 23, 00), y: 14 }
          ]
        }
        ]
      };
      $("#chartContainer2").CanvasJSChart(options);
    });

    $(function () {
      //Better to construct options first and then pass it as a parameter
      var options = {
        title: {
          text: "Cumulative App downloads on iTunes And Play Store"
        },
        animationEnabled: true,
        axisY: {
          includeZero: false,
          maximum: 110000,
          valueFormatString: "#0,.",
          suffix: " k"
        },
        axisX: {
          title: "Months After Launch"
        },
        toolTip: {
          shared: true,
          content: "<span style='\"'color: {color};'\"'><strong>{name}</strong></span> {y}"
        },

        data: [
        {
          type: "splineArea",
          showInLegend: true,
          name: "iOS",
          dataPoints: [
          { x: 1, y: 3000 },
          { x: 2, y: 7000 },
          { x: 3, y: 10000 },
          { x: 4, y: 14000 },
          { x: 5, y: 23000 },
          { x: 6, y: 31000 },
          { x: 7, y: 42000 },
          { x: 8, y: 56000 },
          { x: 9, y: 64000 },
          { x: 10, y: 81000 },
          { x: 11, y: 105000 }
          ]
        },
        {
          type: "splineArea",
          name: "Android",
          showInLegend: true,
          dataPoints: [
          { x: 4, y: 4000 },
          { x: 5, y: 6000 },
          { x: 6, y: 9000 },
          { x: 7, y: 14000 },
          { x: 8, y: 21000 },
          { x: 9, y: 31000 },
          { x: 10, y: 46000 },
          { x: 11, y: 61000 }

          ]
        }
        ]
      };
      $("#chartContainer3").CanvasJSChart(options);
    });

    $(function () {
      //Better to construct options first and then pass it as a parameter
      var options = {
        title: {
          text: "Gaming Consoles Sold in 2012"
        },
        animationEnabled: true,
        legend: {
          verticalAlign: "bottom",
          horizontalAlign: "center"
        },
        data: [
        {
          type: "pie",
          showInLegend: true,
          toolTipContent: "{y} - <strong>#percent%</strong>",
          dataPoints: [
            { y: 4181563, legendText: "PS 3", indexLabel: "PlayStation 3" },
            { y: 2175498, legendText: "Wii", indexLabel: "Wii" },
            { y: 3125844, legendText: "360", exploded: true, indexLabel: "Xbox 360" },
            { y: 1176121, legendText: "DS", indexLabel: "Nintendo DS" },
            { y: 1727161, legendText: "PSP", indexLabel: "PSP" },
            { y: 4303364, legendText: "3DS", indexLabel: "Nintendo 3DS" },
            { y: 1717786, legendText: "Vita", indexLabel: "PS Vita" }
          ]
        }
        ]
      };
      $("#chartContainer4").CanvasJSChart(options);
    });
  </script>



</head>
<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <?php 
    include("include/right-nav.php"); ?>
    <div class="right_col" role="main">

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20">
          <div class="dashboard_graph padding-bottom-10">
            <h3>Recent Activity</h3>
            <div id="chartContainer1" style="width: 45%; height: 400px;display: inline-block; margin-top:25px;"></div>
  <div id="chartContainer2" style="width: 45%; height: 400px;display: inline-block; margin-top:25px;"></div><br />
  <div id="chartContainer3" style="width: 45%; height: 400px;display: inline-block; margin-top:25px;"></div>
  <div id="chartContainer4" style="width: 45%; height: 400px;display: inline-block; margin-top:25px;"></div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

    </div>
    <?php include("../include/footer.php"); ?>
  </div>
</div>

</body>
</html>