<?php
require_once 'topnav.php';
require_once 'head.html';

// session_destroy();
session_start();

echo '<link rel="stylesheet" href="style_gh.css">';
echo '<br><br>';

if ($_SESSION['id'] == null) {
    echo '<div class="main">';
    echo '<form name="login_form" action="login_process.php" method="post">';
    echo '<input type="text" name="id" placeholder="&nbsp;ID">';
    echo '<br><br>';
    echo '<input type="text" name="pw" placeholder="&nbsp;PASSWORD">';
    echo '<br><br><br>';
    echo '<div class="btngroup">';
    echo '<button>LOG IN</button>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;';
    echo '</form>';
    echo '<a href="join.php"><button type="button">JOIN</button></a>';
    echo '</div>';
    echo '</div>';
} else {
    echo '<div class="main">';
    echo $_SESSION['name'] . " is logged in now.";
    echo '<br><br><br>';
    echo '<div class="btngroup">';
    echo '<a href="logout.php"><button type="button">LOG OUT</button></a>';
    echo '&nbsp;&nbsp;';
    echo '<a href="delete.php"><button type="button">DELETE THE ACCOUNT</button></a>';
    echo '</div>';
    echo '</div>';
}

echo '</body></html>';