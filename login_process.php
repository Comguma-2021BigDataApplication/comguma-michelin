<?php

session_start();

$id = $_POST['id'];
$pw = $_POST['pw'];

$conn = mysqli_connect("localhost", "root", "team13", "team13");
$sql = "SELECT * FROM users
        WHERE user_id='$id' and user_pw='$pw';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if($id==$row['user_id'] && $pw==$row['user_pw']){
   $_SESSION['id']=$row['user_id'];
   $_SESSION['name']=$row['user_name'];
   header('Location: index.html');

}else{
   require_once('login.php');
   echo '<center>Invalid user ID or password</center>';
}

?>
