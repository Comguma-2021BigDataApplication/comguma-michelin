<?php
require_once('topnav.php');
require_once('head.html');

echo '<link rel="stylesheet" href="style_gh.css">';
echo '<br><br>';

echo '<div class="text_mypage">';
echo '<h3>Your taste profile</h3>';
echo '<h5>Location</h5>';
echo '<form name="edit_form" action="edit_process.php" method="post">';
echo '<div class="btngroup">';
echo '<select style="display:inline" name="newlocate">';
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
echo '&nbsp;';
echo '<button>EDIT</button>';
echo '</form>';
echo '</div>';
echo '</div>';

echo '</body></html>';

?>
