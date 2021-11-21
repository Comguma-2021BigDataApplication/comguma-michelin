<?php

$ret = mysqli_query($con, $sql);

$resname_arr = array();
array_push($resname_arr, '0');

// WORDCLOUD
while ($row = mysqli_fetch_array($ret)) {
    array_push($resname_arr, $row['res_name_ko']);
}

$resname = $_POST['resname'];

if ($resname === '꽃, 밥에피다') {
    $resname = str_replace('꽃, 밥에피다', '꽃 밥에피다', $resname);
} elseif ($resname === '안씨막걸리') {
    $resname = str_replace('안씨막걸리', '안씨 막걸리', $resname);
    echo $resname;
}

$resnameIndex = strval(array_search($resname, $resname_arr));

// MENU
$sql_1 = "SELECT * FROM menutbl WHERE resid = " . $resnameIndex . ";";

$ret1 = mysqli_query($con, $sql_1);

// OPINION
$sql_2 = "SELECT * FROM opiniontbl WHERE resid = " . $resnameIndex . ";";

$ret2 = mysqli_query($con, $sql_2);

// LOCATION and TELEPHONE
$sql_3 = "SELECT * FROM locatnteles WHERE resid = " . $resnameIndex . ";";

$ret3 = mysqli_query($con, $sql_3);

// RATING
$sql_4 = "SELECT * FROM ratings WHERE resid = " . $resnameIndex . ";";

$ret4 = mysqli_query($con, $sql_4);
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
$filename = $resname . '.png';
echo "<img src='./img/{$filename}', id='wordCloudimg'/>";
?>
        </div>


    </div>
    <!-- RESTAURANT DETAILS -->
    <div class="wrapper">
        <div class="michelin-res">
            <div class="inner-stars">
                <h3 id="restaurant-name">
                    <?php echo $resname ?>
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
                    ★
                    <?php
$row = mysqli_fetch_array($ret4);
echo $row['resrating'];
?>
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
    if (isset($row['min_menu_price'])) {
        if ($row['min_menu_price'] == $row['max_menu_price']) {
            echo $row['min_menu_price'] . '원';
        } else {
            echo $row['min_menu_price'] . "~" . $row['max_menu_price'] . "원";
        }
    } else {
        echo "변동가격";
    }

    echo "<br>";
}
echo "</p>";
?>
        </div>
    </div>




</body>

</html>