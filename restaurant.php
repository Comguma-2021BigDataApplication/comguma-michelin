<?php

include "topnav.php";

$con = mysqli_connect("localhost", "team13", "team13", "team13") or die("MySQL 접속 실패");

$sql = "
    SELECT * FROM nametbl;
";

include "WCandMenu.php";