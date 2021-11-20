<?php

$con = mysqli_connect("localhost", "root", "1234", "team13") or die("MySQL 접속 실패");

$sql = "
    SELECT * FROM menutbl
";

$ret = mysqli_query($con, $sql);

if ($ret) {
    echo mysqli_num_rows($ret), "건이 조회됨.<br><br>";
} else {
    echo "menutbl 데이터 조회 실패" . "<br>";
    echo "실패 원인: " . mysqli_error($con);
    exit();
}

echo "<table border='1'> <tr> <th>res_id</th> <th>res_name_ko</th> <th>menu</th> <th>min_menu_price</th> <th>max_menu_price</th> <th>change_price</th></tr>";
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

mysqli_close($con);