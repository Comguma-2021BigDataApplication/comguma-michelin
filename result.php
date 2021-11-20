<?php

include "topnav.php";
// include "checklist.php";

$result = 0;
$value = $_POST['input_check'];

$con = mysqli_connect("localhost", "root", "1234", "team13") or die("MySQL 접속 실패");

// SQL문
if ($value == 1) {
    $result = 1;

    $sql = "
    SELECT res_distinction_en, res_distinction_ko, COUNT(res_distinction_en) AS 개수 FROM distinctions
    GROUP BY res_distinction_en
    ORDER BY res_distinction_ko desc;
    ";

} elseif ($value == 2) {
    $result = 2;
    $sql = "
    SELECT res_mealtype_en, res_mealtype_ko, COUNT(res_mealtype_en) AS 개수 FROM distinctions
    GROUP BY res_mealtype_en
    ORDER BY 개수 desc;

";
} elseif ($value == 3) {
    $result = 3;
    $sql = "
    SELECT res_name_ko, avg(min_menu_price), avg(max_menu_price)
    FROM menutbl
    WHERE min_menu_price IS NOT NULL AND max_menu_price IS NOT NULL
    GROUP BY res_name_ko
    ORDER BY avg(max_menu_price) asc;
";
} elseif ($value == 4) {
    $result = 4;
    // 전체 출력
    $sql = "
    SELECT * FROM menutbl;
    ";

    // PRICE
    $sql_1 = "
    SELECT * FROM menutbl
    WHERE max_menu_price <= 10000
    ORDER BY res_name_ko asc, min_menu_price asc;
    ";
    $sql_2 = "
    SELECT * FROM menutbl
    WHERE max_menu_price BETWEEN 10000 AND 20000
    ORDER BY res_name_ko asc, min_menu_price asc;
    ";
    $sql_3 = "
    SELECT * FROM menutbl
    WHERE max_menu_price BETWEEN 20000 AND 25000
    ORDER BY res_name_ko asc, min_menu_price asc;
    ";
    $sql_4 = "
    SELECT * FROM menutbl
    WHERE max_menu_price BETWEEN 25000 AND 50000
    ORDER BY res_name_ko asc, min_menu_price asc;
    ";
    $sql_5 = "
    SELECT * FROM menutbl
    WHERE max_menu_price BETWEEN 50000 AND 100000
    ORDER BY res_name_ko asc, min_menu_price asc;
    ";
    $sql_6 = "
    SELECT * FROM menutbl
    WHERE max_menu_price BETWEEN 100000 AND 150000
    ORDER BY res_name_ko asc, min_menu_price asc;
    ";
    $sql_7 = "
    SELECT * FROM menutbl
    WHERE max_menu_price BETWEEN 150000 AND 200000
    ORDER BY res_name_ko asc, min_menu_price asc;
    ";
    $sql_8 = "
    SELECT * FROM menutbl
    WHERE max_menu_price >= 200000
    ORDER BY res_name_ko asc, min_menu_price asc;
    ";

    // CUISINE TYPE
    $sql_9 = "
    SELECT res_mealtype_en, res_mealtype_ko, COUNT(res_mealtype_en) AS 개수 FROM distinctions
    GROUP BY res_mealtype_en
    ORDER BY 개수 desc;
    ";

    // STARS
    $sql_10 = "
    SELECT res_distinction_en, res_distinction_ko, COUNT(res_distinction_en) AS 개수 FROM distinctions
    GROUP BY res_distinction_en
    ORDER BY res_distinction_ko desc;
    ";

} else {
    $result = 0;

    $sql = "
    SELECT * FROM menutbl;
    ";
}

$ret = mysqli_query($con, $sql);

if ($ret) {
    if ($result != 4) {
        echo mysqli_num_rows($ret), "건이 조회됨.
        <br><br>";
    }
} else {
    echo "데이터 조회 실패" . "<br>";
    echo "실패 원인: " . mysqli_error($con);
    exit();
}

// 화면에 출력
if ($result == 0) {
    // 전체 출력
    echo "<table> <tr> <th>res_id</th><th>res_name_ko</th> <th>menu</th> <th>min_menu_price</th> <th>max_menu_price</th><th>change_price</th> </tr>";

    while ($row = mysqli_fetch_array($ret)) {
        echo "<tr>";
        echo "<td>" . $row['res_id'] . "</td>";
        echo "<td>" . $row['res_name_ko'] . "</td>";
        echo "<td>" . $row['menu'] . "</td>";
        echo "<td>" . $row['min_menu_price'] . "</td>";
        echo "<td>" . $row['max_menu_price'] . "</td>";
        echo "<td>" . $row['change_price'] . "</td>";
        echo "</tr>";
    }
} elseif ($result == 1) {
    // 식당명, 최소가격, 최대가격 출력
    echo "<table> <tr> <th>res_distinction_en</th> <th>res_distinction_ko</th> <th>개수</th> </tr>";

    while ($row = mysqli_fetch_array($ret)) {
        echo "<tr>";
        echo "<td>" . $row['res_distinction_en'] . "</td>";
        echo "<td>" . $row['res_distinction_ko'] . "</td>";
        echo "<td>" . $row['개수'] . "</td>";
        echo "</tr>";
    }
} elseif ($result == 2) {
    // mealtype과 개수 출력
    echo "<table> <tr> <th>res_mealtype_en</th> <th>res_mealtype_ko</th> <th>개수</th> </tr>";

    while ($row = mysqli_fetch_array($ret)) {
        echo "<tr>";
        echo "<td>" . $row['res_mealtype_en'] . "</td>";
        echo "<td>" . $row['res_mealtype_ko'] . "</td>";
        echo "<td>" . $row['개수'] . "</td>";
        echo "</tr>";
    }
} elseif ($result == 3) {
    // 최대가격 평균 출력
    echo "<table> <tr>  <th>res_name_ko</th> <th>max_menu_price</th> </tr>";

    while ($row = mysqli_fetch_array($ret)) {
        echo "<tr>";
        echo "<td>" . $row['res_name_ko'] . "</td>";
        echo "<td>" . $row['avg(max_menu_price)'] . "</td>";
        echo "</tr>";
    }
} elseif ($result == 4) {
    include "stars.php";
    include "chart.php";
}

mysqli_close($con);
