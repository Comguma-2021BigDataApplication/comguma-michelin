<?php

$con = mysqli_connect("localhost", "team13", "team13", "team13") or die("MySQL 접속 실패");

$sql = "
    SELECT res_name_ko, avg(max_menu_price)
    FROM menutbl
    WHERE min_menu_price IS NOT NULL AND max_menu_price IS NOT NULL
    GROUP BY res_name_ko
    ORDER BY avg(max_menu_price) desc LIMIT 10;
";

$ret = mysqli_query($con, $sql);

// average
echo '<div class="wrapper-bottom">';
echo '<h2>Average Price</h2><br><br>';
echo "<table> <tr>  <th>Restaurant</th> <th>Avg price</th> </tr>";

while ($row = mysqli_fetch_array($ret)) {
    echo "<tr>";
    echo "<td>" . $row['res_name_ko'] . "</td>";
    echo "<td>" . $row['avg(max_menu_price)'] . "</td>";
    echo "</tr>";
}

$sql_1 = "
    SELECT *,
    RANK() OVER(ORDER BY resrating DESC) AS RANKING
    FROM ratings a, nametbl b
    WHERE a.resid = b.resid
    LIMIT 10;
";

$ret1 = mysqli_query($con, $sql_1);

// ranking
echo "<table> <tr>  <th>Restaurant</th> <th>Rate</th> </tr>";

while ($row = mysqli_fetch_array($ret1)) {
    echo "<tr>";
    echo "<td>" . $row['res_name_en'] . "</td>";
    echo "<td>" . $row['resrating'] . "</td>";
    echo "</tr>";
}

$sql_2 = "
    SELECT *,
    RANK() OVER(PARTITION BY resdist_en ORDER BY resrating DESC) AS RANKING
    FROM resinfos
    WHERE resrating >= 4.0;
";

$ret2 = mysqli_query($con, $sql_2);

// michelin stars ranking
echo '<h2>Rate top 10</h2><br><br>';
echo "<table> <tr>  <th>Restaurant</th> <th>Stars</th> <th>Rate</th> </tr>";

while ($row = mysqli_fetch_array($ret2)) {
    echo "<tr>";
    echo "<td>" . $row['resname_en'] . "</td>";
    echo "<td>" . $row['resdist_en'] . "</td>";
    echo "<td>" . $row['resrating'] . "</td>";
    echo "</tr>";
}
echo '<h2>Over 4.00 restaurants</h2><br><br>';

echo "</div>";