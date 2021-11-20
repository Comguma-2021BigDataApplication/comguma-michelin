<?php

session_start();

$presid = $_SESSION['id'];

$conn = mysqli_connect("localhost", "team13", "team13", "team13");

$sql = "
        DELETE from users
        WHERE user_id = '".$presid."'
        ;";

$ret = mysqli_query($conn, $sql);

if ($ret == true){
  session_destroy();
  header('Location: index.html');
} else {
  echo '<center>';
  echo 'ERROR<br><br>';
  echo '<a href="delete.php"><input type="button" value="RE-TRY"</a><br>';
  echo '</center>';
}

mysqli_close($conn);

?>
