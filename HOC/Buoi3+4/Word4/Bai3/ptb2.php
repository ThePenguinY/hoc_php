<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<h3>Giải và biện luận phương trình bậc 2: ax2+bx+c=0</h3>
		<p>Nhập a: <input type="number" name="SoA"></p>
		<p>Nhập b: <input type="number" name="SoB"></p>
		<p>Nhập c: <input type="number" name="SoC"></p>

		<input type="submit" value="Kết quả" name="Tinh">
	</form>
<?php
	$a = $_POST['SoA'];
	$b = $_POST['SoB'];
	$c = $_POST['SoC'];

	// Tính delta
	$delta = $b * $b - 4 * $a * $c;

	// Kiểm tra delta để giải phương trình
	if ($delta > 0) {
		$x1 = (-$b + sqrt($delta)) / (2 * $a);
		$x2 = (-$b - sqrt($delta)) / (2 * $a);
		echo "Phương trình có 2 nghiệm phân biệt:<br>";
		echo "x1 = " . $x1 . "<br>";
		echo "x2 = " . $x2 . "<br>";
	} elseif ($delta == 0) {
		$x = -$b / (2 * $a);
		echo "Phương trình có nghiệm kép:<br>";
		echo "x = " . $x . "<br>";
	} else {
		echo "Phương trình vô nghiệm<br>";
	}
  ?>
</body>
</html>