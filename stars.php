<?php
$ret10 = mysqli_query($con, $sql_10);

$star_arr = array();

while ($row = mysqli_fetch_array($ret10)) {
    array_push($star_arr, $row['개수']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script>

    </script>
</head>

<body>
    <div class="michelin-stars">
        <div class="inner-stars">
            <h2 id="total">Total</h2>
            <br>
            including Bib Gourmand<br>
            <div class="star-counts">
                <?php echo $star_arr[0] + $star_arr[1] + $star_arr[2] + $star_arr[3]; ?>
            </div>
        </div>
        <div class="inner-stars">
            <h2>★★★</h2><br>
            <div class="star-counts">
                <?php echo $star_arr[1]; ?>
            </div>
        </div>
        <div class="inner-stars">
            <h2>★★</h2>
            <div class="star-counts">
                <?php echo $star_arr[2]; ?>
            </div>
        </div>
        <div class="inner-stars">
            <h2>★</h2>
            <div class="star-counts">
                <?php echo $star_arr[3]; ?>
            </div>
        </div>
    </div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>