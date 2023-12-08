<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
<form method="post" action="">
	<table>
		<p>Điểm học kì 1: <input type="number" name="HK1"></p>
		<p>Điểm học kì 2: <input type="number" name="HK2"></p>

		<input type="submit" value="Xem kết quả" name="KetQua">
	</table>
</form>
<?php
	$hk1 = isset($_POST["HK1"]) ?floatval( $_POST["HK1"] ): "";
	$hk2 = isset($_POST["HK2"]) ?floatval( $_POST["HK2"] ): "";


	$diemTB = ($hk1 + $hk2) /2;

	if($diemTB>=8)
		$xeploai="Giỏi";
	elseif ($diemTB>=7) 
		$xeploai="Khá";
	elseif ($diemTB>=5) 
		$xeploai="Trung bình";
	else
		$xeploai="Yếu";

	if($xeploai== "Giỏi")
		$ketqua = "Được lên lớp";
	if($xeploai== "Khá")
		$ketqua = "Được lên lớp";
	if($xeploai== "Trung bình")
		$ketqua = "Được lên lớp";
	if($xeploai== "Yếu")
		$ketqua = "Không được lên lớp";
	echo "Điểm trung bình: $diemTB"."<br>";
	echo "Kết quả: $ketqua" . "<br>";
	echo "Xếp loại HL: $xeploai";

?>
</body>
</html>