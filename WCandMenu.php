<?php

$ret = mysqli_query($con, $sql);

$resname_arr = array();
array_push($resname_arr, '0');

// WORDCLOUD
while ($row = mysqli_fetch_array($ret)) {
    array_push($resname_arr, $row['res_name_ko']);
}

// MENU
$sql_1 = "SELECT * FROM menutbl WHERE res_name_ko = " . "'라연'" . ";";

$ret1 = mysqli_query($con, $sql_1);

// OPINION
$sql_2 = "SELECT * FROM opiniontbl WHERE idx = " . "2" . ";";

$ret2 = mysqli_query($con, $sql_2);

// LOCATION and TELEPHONE
$sql_3 = "SELECT * FROM locatnteles WHERE resid = " . "2" . ";";

$ret3 = mysqli_query($con, $sql_3);

?>



<!DOCTYPE HTML>
<html>

<head>

</head>

<body>
    <div class="wrapper">
        <!-- WORDCLOUD -->
        <div class="inner-box">
            <h3 id="restaurant-name">
                Keywords
            </h3>
            <?php
$filename = '';
$filename = $resname_arr[2] . '.png';
echo "<img src='./img/{$filename}', id='wordCloudimg'/>";
?>
        </div>


    </div>
    <!-- RESTAURANT DETAILS -->
    <div class="wrapper">
        <div class="michelin-res">
            <div class="inner-stars">
                <h3 id="restaurant-name">
                    <?php echo $resname_arr[2]; ?>
                </h3>
                <?php
$row = mysqli_fetch_array($ret3);
echo $row['reslocat_en'];
echo "<br><br>";
echo $row['restelenum'];

?>
            </div>
            <div class="inner-stars">
                <h3>
                    Michelin Opinion
                </h3>
                <?php
$row = mysqli_fetch_array($ret2);
echo $row['en'];
?>
            </div>
            <div class="inner-stars">
                <h3>

                    ★ 4.79
                </h3>
            </div>
        </div>
    </div>

    <!-- MENU -->
    <div class="wrapper">
        <div class="inner-box">
            <h3 id="restaurant-name">
                Menu
            </h3>
            <?php
echo "<p id='menu-restaurant', style='margin-left:50px;margin-bottom:50px; font-size:150%;'>";
while ($row = mysqli_fetch_array($ret1)) {
    echo $row['menu'];
    echo "   ";
    echo $row['min_menu_price'] . "~" . $row['max_menu_price'] . "원";
    echo "<br>";
}
echo "</p>";
?>
        </div>
    </div>




</body>

</html>