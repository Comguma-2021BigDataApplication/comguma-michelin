<?php
require_once('topnav.php');
require_once('head.html');

echo '<link rel="stylesheet" href="style_gh.css">';
echo '<br><br>';

$name = $_POST['name'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$pref = $_POST['pref'];
$locate = $_POST['locate'];

$conn = mysqli_connect("localhost", "root", "team13", "team13");

$sql = "
        INSERT INTO users
        (user_name, user_id, user_pw, user_pref, user_locate)
        VALUES(
          '{$name}', '{$id}', '{$pw}', '{$pref}', '{$locate}'
        );";
$result = mysqli_query($conn, $sql);

if ($result == true){
  header('Location: login.php');
} else {
  echo '<div class="main">';
  echo 'ERROR: The same ID already exists.<br><br>';
  echo '<div class="btngroup">';
  echo '<a href="join.php"><button type="button">RE-TRY</button></a>';
  echo '</div>';
  echo '</div>';
}

?>
