<?php

$ret1 = mysqli_query($con, $sql_1);
$ret2 = mysqli_query($con, $sql_2);
$ret3 = mysqli_query($con, $sql_3);
$ret4 = mysqli_query($con, $sql_4);
$ret5 = mysqli_query($con, $sql_5);
$ret6 = mysqli_query($con, $sql_6);
$ret7 = mysqli_query($con, $sql_7);
$ret8 = mysqli_query($con, $sql_8);

$ret9 = mysqli_query($con, $sql_9);

$cnt_arr = array();
$mealtype_arr = array();

while ($row1 = mysqli_fetch_array($ret9)) {
    array_push($cnt_arr, $row1['개수']);
    array_push($mealtype_arr, $row1['res_mealtype_en']);
}

// Data for Bar Chart {
$dataPoints1 = array(
    array("y" => mysqli_num_rows($ret1), "label" => "~10,000"),
    array("y" => mysqli_num_rows($ret2), "label" => "10,000~20,000"),
    array("y" => mysqli_num_rows($ret3), "label" => "20,000~25,000"),
    array("y" => mysqli_num_rows($ret4), "label" => "25,000~50,000"),
    array("y" => mysqli_num_rows($ret5), "label" => "50,000~100,000"),
    array("y" => mysqli_num_rows($ret6), "label" => "100,000~150,000"),
    array("y" => mysqli_num_rows($ret7), "label" => "150,000~200,000"),
    array("y" => mysqli_num_rows($ret8), "label" => "200,000~"),
);

// Data for Pie Chart
$dataPoints2 = array(
    array("y" => $cnt_arr[0], "name" => $mealtype_arr[0], "label" => $mealtype_arr[0], "exploded" => true),
    array("y" => $cnt_arr[1], "name" => $mealtype_arr[1], "label" => $mealtype_arr[1], "exploded" => true),
    array("y" => $cnt_arr[2], "name" => $mealtype_arr[2], "label" => $mealtype_arr[2], "exploded" => true),
    array("y" => $cnt_arr[3], "name" => $mealtype_arr[3], "label" => $mealtype_arr[3]),
    array("y" => $cnt_arr[4], "name" => $mealtype_arr[4], "label" => $mealtype_arr[4]),
    array("y" => $cnt_arr[5], "name" => $mealtype_arr[5], "label" => $mealtype_arr[5]),
    array("y" => $cnt_arr[6], "name" => $mealtype_arr[6], "label" => $mealtype_arr[6]),
    array("y" => $cnt_arr[7], "name" => $mealtype_arr[7], "label" => $mealtype_arr[7]),
    array("y" => $cnt_arr[8], "name" => $mealtype_arr[8], "label" => $mealtype_arr[8]),
    array("y" => $cnt_arr[9], "name" => $mealtype_arr[9], "label" => $mealtype_arr[9]),
    array("y" => $cnt_arr[10], "name" => $mealtype_arr[10], "label" => $mealtype_arr[10]),
    array("y" => $cnt_arr[11], "name" => $mealtype_arr[11], "label" => $mealtype_arr[11]),
    array("y" => $cnt_arr[12], "name" => $mealtype_arr[12], "label" => $mealtype_arr[12]),
    array("y" => $cnt_arr[13], "name" => $mealtype_arr[13], "label" => $mealtype_arr[13]),
    array("y" => $cnt_arr[14], "name" => $mealtype_arr[14], "label" => $mealtype_arr[14]),
    array("y" => $cnt_arr[15], "name" => $mealtype_arr[15], "label" => $mealtype_arr[15]),
    array("y" => $cnt_arr[16], "name" => $mealtype_arr[16], "label" => $mealtype_arr[16]),
    array("y" => $cnt_arr[17], "name" => $mealtype_arr[17], "label" => $mealtype_arr[17]),
    array("y" => $cnt_arr[18], "name" => $mealtype_arr[18], "label" => $mealtype_arr[18]),
    array("y" => $cnt_arr[19], "name" => $mealtype_arr[19], "label" => $mealtype_arr[19]),
    array("y" => $cnt_arr[20], "name" => $mealtype_arr[20], "label" => $mealtype_arr[20]),
    array("y" => $cnt_arr[21], "name" => $mealtype_arr[21], "label" => $mealtype_arr[21]),
    array("y" => $cnt_arr[22], "name" => $mealtype_arr[22], "label" => $mealtype_arr[22]),
    array("y" => $cnt_arr[23], "name" => $mealtype_arr[23], "label" => $mealtype_arr[23]),
    array("y" => $cnt_arr[24], "name" => $mealtype_arr[24], "label" => $mealtype_arr[24]),
    array("y" => $cnt_arr[25], "name" => $mealtype_arr[25], "label" => $mealtype_arr[25]),
    array("y" => $cnt_arr[26], "name" => $mealtype_arr[26], "label" => $mealtype_arr[26]),
    array("y" => $cnt_arr[27], "name" => $mealtype_arr[27], "label" => $mealtype_arr[27]),
    array("y" => $cnt_arr[28], "name" => $mealtype_arr[28], "label" => $mealtype_arr[28]),
    array("y" => $cnt_arr[29], "name" => $mealtype_arr[29], "label" => $mealtype_arr[29]),
    array("y" => $cnt_arr[30], "name" => $mealtype_arr[30], "label" => $mealtype_arr[30]),
);

?>
<!DOCTYPE HTML>
<html>

<head>
    <script>
    window.onload = function() {

        // #### BAR CHART #####
        var chart1 = new CanvasJS.Chart("barChart", {
            animationEnabled: true,
            theme: "light2",
            title: {
                text: "Price"
            },
            axisY: {
                title: "Restaurants"
            },
            data: [{
                type: "column",
                yValueFormatString: "",
                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
            }],
            toolTip: {
                fontFamily: 'Maven Pro',
            },
        });
        chart1.render();

        // ##### PIE CHART #####
        var chart2 = new CanvasJS.Chart("pieChart", {
            animationEnabled: true,
            theme: "light2",
            title: {
                text: "Cuisine Type"
            },
            legend: {
                cursor: "pointer",
                itemclick: explodePie,
                horizontalAlign: "left", // "center" , "right"
                verticalAlign: "center", // "top" , "bottom"
                fontSize: 15
            },
            data: [{
                type: "pie",
                showInLegend: true,
                startAngle: 240,
                yValueFormatString: "",
                indexLabel: "{label} {y}",
                dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
            }],
            toolTip: {
                fontFamily: 'Maven Pro',
            },
        });
        chart2.render();

    }

    function explodePie(e) {
        if (typeof(e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e
                .dataPointIndex].exploded) {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
        } else {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
        }
        e.chart.render();

    }
    </script>
</head>

<body>
    <div class="wrapper">
        <div id="barChart"></div>
        <div id="pieChart"></div>
    </div>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>