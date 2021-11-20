<?php

echo '<form action="result.php" method="post">';
echo '<input type="hidden" name="input_check" value="0" id="input_check_hidden" />';
echo '<label><input type="radio" name="input_check" value="1" id="input_check">미슐랭 스타 개수별 보기   </label><br>';
echo '<label><input type="radio" name="input_check" value="2" id="input_check">mealtype별 개수 조회   </label><br>';
echo '<label><input type="radio" name="input_check" value="3" id="input_check">최대가격 평균 출력   </label><br>';
echo '<label><input type="radio" name="input_check" value="4" id="input_check">막대 그래프, 파이 차트 출력   </label><br>';

echo '<label><input type="radio" name="input_check" value="10" id="input_check" checked>전체 테이블 출력   </label><br>';
echo '<br><input type="submit" class="form-submit-button"  value="Search"></form>';

echo '<script>if (document.getElementById("input_check").checked) { document.getElementById("input_check_hidden").disabled = true;}</script>';