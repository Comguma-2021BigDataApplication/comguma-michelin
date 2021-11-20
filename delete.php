<?php
require_once('topnav.php');

echo '<link rel="stylesheet" href="style_gh.css">';
echo '<br><br>';

echo '<div class="main">';
echo '<form name="delete_form" action="delete_check.php" method="post">';
echo "Type your account password.<br><br>";
echo '<div class="btngroup">';
echo '<input type="text" name="pw">&nbsp;';
echo '<button>CHECK</button>';
echo '</div>';
echo '</div>';

echo '</body></html>';

?>
