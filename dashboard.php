<?php

include "topnav.php";

$con = mysqli_connect("localhost", "team13", "team13", "team13") or die("MySQL 접속 실패");

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

include "chart.php";
include "stars.php";
include "avgandrank.php";