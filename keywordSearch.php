<!DOCTYPE html>
<html>
    <head>
        <title>Keyword Search</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="layout.css">
        <link rel="stylesheet" href="keywordSearch.css">
        <nav class="sticky-nav">
        <div class="flex-left">
        <div class="nav-box">
        <ul><li><a href="index.html">Home</a></li>
        <li><a href="filterSearch.html">Restaurants</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="#">My Page</a></li>
        </ul></div></div>
        <div class="flex-right">
        <div class="login-box">
        <ul><li><a href="#">LOGIN</a></li>
        </ul></div></div></nav>
        <br><br><br><br><br>
    </head>
    <body>
        <a href="filterSearch.html"><button class="filter">Filter</button></a>
        <a href="keywordSearch.html"><button class="keyword">Keyword</button></a>
        <div class="searchArea">
            <form action="keywordSearch.php" method="POST">
                <label><input type="hidden" name="private_room" value="0" />
                <input type="checkbox" name="private_room" value="1" />&nbsp;&nbsp;Private Room&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="hidden" name="non_smoking" value="0" />
                <input type="checkbox" name="non_smoking" value="1" />&nbsp;&nbsp;Non-Smoking&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="hidden" name="vallet_parking" value="0" />
                <input type="checkbox" name="vallet_parking" value="1" />&nbsp;&nbsp;Vallet Parking&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="hidden" name="parking_lot" value="0" />
                <input type="checkbox" name="parking_lot" value="1" />&nbsp;&nbsp;Parking Lot<br></label>
                <label><input type="hidden" name="wheelchair" value="0" />
                <input type="checkbox" name="wheelchair" value="1" />&nbsp;&nbsp;Wheelchair&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="hidden" name="great_view" value="0" />
                <input type="checkbox" name="great_view" value="1" />&nbsp;&nbsp;Great View&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="hidden" name="counter_table" value="0" />
                <input type="checkbox" name="counter_table" value="1" />&nbsp;&nbsp;Counter Table&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="hidden" name="booking_essential" value="0" />
                <input type="checkbox" name="booking_essential" value="1" />&nbsp;&nbsp;Booking Essential</label>
                <input type="submit" value="Search" />
            </form>
        </div>

        <?php

        $private_room = $_POST['private_room'];
        $non_smoking = $_POST['non_smoking'];
        $vallet_parking = $_POST['vallet_parking'];
        $parking_lot = $_POST['parking_lot'];
        $wheelchair = $_POST['wheelchair'];
        $great_view = $_POST['great_view'];
        $counter_table = $_POST['counter_table'];
        $booking_essential = $_POST['booking_essential'];
        
        echo("<div class='searchResults'>Search Results</div>");

        $mysqli = mysqli_connect("localhost", "team13", "team13", "team13") or die("connect failed");

        $sql1 = "SELECT * FROM keywords WHERE private_room = $private_room AND non_smoking = $non_smoking AND vallet_parking = $vallet_parking AND parking_lot = $parking_lot AND wheelchair = $wheelchair AND great_view = $great_view AND counter_table = $counter_table AND booking_essential = $booking_essential";

        $res1 = mysqli_query($mysqli, $sql1);

        if ($res1){
            if (mysqli_num_rows($res1) > 0){
                while ($row1 = mysqli_fetch_assoc($res1)){
                    $resid = $row1['resid'];

                    $sql2 = "SELECT * FROM resinfos WHERE resid = $resid";

                    $res2 = mysqli_query($mysqli, $sql2);

                    if ($res2){
                        while ($row2 = mysqli_fetch_assoc($res2)){
                            echo "<div class='restaurant'>";
                            echo "<img src='resimages/" . $row2['resid'] . ".jpg' alt='My Image' height='150'>";
                            echo "<div class='resname'>" . $row2['resname_en'] . "</div><br>";
                            echo "<div class='restype'>" . $row2['restype_en'] . " / " . $row2['resdist_en'] . "</div><br>";
                            echo "<div class='reslocate'>" . $row2['reslocate_en'] . "</div>";
                            echo "<div class='restelenum'>" . $row2['restelenum'] . "</div>";
                            echo "<div class='resprice'>" . $row2['resmin'] . " ~ " . $row2['resmax'] . " won </div>";
                            echo "<div class='resrating'>" . $row2['resrating'] . " points<br>" . $row2['resratingnum'] . " rewiews </div>";
                            echo "</div>";
                        }
                    }
                }
            }
            else {
                echo "0 results";
            }
        }

        mysqli_close($mysqli);

        ?>
    </body>
</html>