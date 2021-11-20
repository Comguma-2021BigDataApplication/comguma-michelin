<?php
require_once('topnav.php');
require_once('head.html');

echo '<link rel="stylesheet" href="style_gh.css">';
echo '<br><br>';

echo '<div class="main">';
echo '<form name="join_form" action="join_process.php" method="post">';
echo '<div class="text">';
echo 'Name';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="name" placeholder="ex: Geonhui Jo"><br><br>';

echo 'ID';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="text" name="id" placeholder="ex: team13"><br><br>';

echo 'Password &nbsp;';
echo '<input type="text" name="pw" placeholder="ex: team13"><br><br><br>';

echo 'Preferrence<br><br>';
echo '<input type="radio" name="pref" value="Innovative">Innovative';
echo '&nbsp;';
echo '<input type="radio" name="pref" value="Contemporary">Contemporary';
echo '&nbsp;';
echo '<input type="radio" name="pref" value="Vegetarian">Vegetarian';
echo '&nbsp;';
echo '<input type="radio" name="pref" value="Barbeque">Barbeque';
echo '<br>';
echo '<input type="radio" name="pref" value="Korean">Korean';
echo '&nbsp;';
echo '<input type="radio" name="pref" value="French">French';
echo '&nbsp;';
echo '<input type="radio" name="pref" value="Italian">Italian';
echo '&nbsp;';
echo '<input type="radio" name="pref" value="Spanish">Spanish';
echo '&nbsp;';
echo '<input type="radio" name="pref" value="Thai">Thai';
echo '&nbsp;';
echo '<input type="radio" name="pref" value="Chinese">Chinese';
echo '&nbsp;';
echo '<input type="radio" name="pref" value="Japanese">Japanese';
echo '<br><br><br>';

echo 'Location<br><br>';
echo '<select name="locate">';
echo '<option value="Gangnam-gu">Gangnam</option>';
echo '<option value="Songpa-gu">Songpa</option>';
echo '<option value="Seocho-gu">Seocho</option>';
echo '<option value="Seodaemun-gu">Seodaemun</option>';
echo '<option value="Mapo-gu">Mapo</option>';
echo '<option value="Seongdong-gu">Seongdong</option>';
echo '<option value="Jung-gu">Jung</option>';
echo '<option value="Jongno-gu">Jongno</option>';
echo '<option value="Yeongdeungpo-gu">Yeongdeungpo</option>';
echo '<option value="Yongsan-gu">Yongsan</option>';
echo '</select>';
echo '<br><br><br>';
echo '</div>';
echo '<div class="btngroup">';
echo '<button>JOIN</button>';
echo '</form>';

echo '</div>';
echo '</div>';

echo '</body></html>';

?>
