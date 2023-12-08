<?php

$rong = isset($_POST["rong"]) ? $_POST["rong"]:"";
$dai = isset($_POST["dai"]) ? $_POST["dai"]:"";
if (is_numeric($rong)) {
    echo "Bạn đã nhập số: " . $rong;
} else {
    echo "Vui lòng chỉ nhập số.";
}
echo "<br>";
if (is_numeric($dai)) {
    echo "Bạn đã nhập số: " . $dai;
} else {
    echo "Vui lòng chỉ nhập số.";
}
echo "<br>";
 
if (!isset($rong) || !isset($dai)) {
  echo "Vui lòng nhập chiều dài và chiều rộng của hình chữ nhật!";
} else {
  $area = $rong * $dai;
  $perimeter = 2 * ($rong + $dai);

  echo "Diện tích hình chữ nhật là: $area";
  echo "<br>";
  echo "Chu vi hình chữ nhật là: $perimeter";
}

?>
