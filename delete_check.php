<?php
require_once('topnav.php');

session_start();

echo '<link rel="stylesheet" href="style_gh.css">';
echo '<br><br>';

$id = $_SESSION['id'];
$deletepw = $_POST['pw'];

$conn = mysqli_connect("localhost", "team13", "team13", "team13");
$sql = "
        SELECT * FROM users
        WHERE user_id = '".$id."'
        ;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo '<div class="main">';
if ($deletepw == $row['user_pw']) {
  echo "Are you sure you want to delete your account?<br><br>";
  echo '<div class="btngroup">';
  echo '<a href="delete_process.php"><button type="button">DELETE</button></a>';
  echo '</div>';
} else {
  echo 'Wrong password<br><br>';
  echo '<div class="btngroup">';
  echo '<a href="delete.php"><button type="button">RE-TRY</button></a>';
  echo '</div>';
}
echo '</div>';

echo '</body></html>';
?>
