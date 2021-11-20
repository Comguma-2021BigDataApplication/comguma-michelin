<?php

include "topnav.php";

$con = mysqli_connect("localhost", "root", "1234", "team13") or die("MySQL 접속 실패");

$sql = "
    SELECT * FROM nametbl;
";

include "WCandMenu.php";
include "restaurantDetail.php";
