<?php
require_once('topnav.php');

session_start();

echo '<link rel="stylesheet" href="style_gh.css">';
echo '<br><br>';

$newlocate = $_POST['newlocate'];
$presid = $_SESSION['id'];

$conn = mysqli_connect("localhost", "team13", "team13", "team13");
$sql = "
        UPDATE users
        SET user_locate = '".$newlocate."'
        WHERE user_id = '".$presid."'
        ;";
$ret = mysqli_query($conn, $sql);

echo '<div class="main">';
echo '<div class="btngroup">';
if ($ret == true){
  echo 'COMPLETED<br><br>';
  echo '<a href="mypage.php"><button type="button">Go to My Page</button></a><br>';
} else {
  echo 'ERROR<br><br>';
  echo '<a href="edit.php"><button type="button">RE-TRY</button></a><br>';
}
echo '</div>';

mysqli_close($conn);

echo '</body></html>';

?>
