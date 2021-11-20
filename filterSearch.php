<!DOCTYPE html>
<html>
    <head>
        <title>Filter Search</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="layout.css">
        <link rel="stylesheet" href="filterSearch.css">
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
            <form action="filterSearch.php" method="POST">
                <div class="textbox">Food Type</div>
                <select name="food_type">
                    <option value="Korean">Korean</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Italian">Italian</option>
                    <option value="Thai">Thai</option>
                    <option value="French">French</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Innovative">Innovative</option>
                    <option value="Contemporary">Contemporary</option>
                    <option value="Vegeterian">Vegeterian</option>
                    <option value="Barbecue">Barbecue</option>
                </select><br>
                <div class="textbox">Restaurant Type</div>
                <select name="res_type">
                    <option value="3 MICHELIN Stars">3 MICHELIN Stars</option>
                    <option value="2 MICHELIN Stars">2 MICHELIN Stars</option>
                    <option value="1 MICHELIN Star">1 MICHELIN Star</option>
                    <option value="Bib Gourmand">Bib Gourmand</option>
                </select><br>
                <div class="textbox">Price Range</div>
                <label><input type="radio" name="price_range" value="10000" /> ~ 10,000&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="radio" name="price_range" value="50000" /> ~ 50,000&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="radio" name="price_range" value="100000" /> ~ 100,000&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="radio" name="price_range" value="1000000" checked /> All<br></label>
                <div class="textbox">Rating</div>
                <label><input type="radio" name="rating_range" value="2.5" /> over 2.5&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="radio" name="rating_range" value="3.0" /> over 3.0&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="radio" name="rating_range" value="3.5" /> over 3.5&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="radio" name="rating_range" value="4.0" /> over 4.0&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="radio" name="rating_range" value="4.5" /> over 4.5&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label><input type="radio" name="rating_range" value="0" checked /> All</label>
                <input type="submit" value="Search">
            </form>
        </div>

        <?php
        
        $food_type = $_POST["food_type"];
        $res_type = $_POST["res_type"];
        $price_range = $_POST["price_range"];
        $rating_range = $_POST["rating_range"];

        $mysqli = mysqli_connect("localhost", "root", "1234", "team13") or die("connect failed");

        $sql = "SELECT * FROM resinfos WHERE restype_en = '$food_type' AND resdist_en = '$res_type' AND resmax <= $price_range AND resrating >= $rating_range";

        $res = mysqli_query($mysqli, $sql);

        if ($res){
            if (mysqli_num_rows($res) > 0){
                while ($row = mysqli_fetch_assoc($res)){
                    echo "<div class='restaurant'>";
                    echo "<img src='resimages/" . $row['resid'] . ".jpg' alt='My Image' height='150'>";
                    echo "<div class='resname'>" . $row['resname_en'] . "</div><br>";
                    echo "<div class='restype'>" . $row['restype_en'] . " / " . $row['resdist_en'] . "</div><br>";
                    echo "<div class='reslocate'>" . $row['reslocate_en'] . "</div>";
                    echo "<div class='restelenum'>" . $row['restelenum'] . "</div>";
                    echo "<div class='resprice'>" . $row['resmin'] . " ~ " . $row['resmax'] . " won </div>";
                    echo "<div class='resrating'>" . $row['resrating'] . " points<br>" . $row['resratingnum'] . " rewiews </div>";
                    echo "</div>";
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