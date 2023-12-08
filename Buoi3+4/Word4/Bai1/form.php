<?php
	$malop= $_POST["Lop"];
	$diemtoan=$_POST["Toan"];
	$diemly=$_POST["Ly"];
	$diemhoa=$_POST["Hoa"];
	if($malop=="A")
		$diemTB=($diemtoan*2+$diemly+$diemhoa)/4;
	else if ($malop=="B") 
		$diemTB=($diemtoan+$diemly*2+$diemhoa)/4;
	else
		$diemTB=($diemtoan+$diemly+$diemhoa*2)/4;

	if($diemTB>=8)
		$xeploai="Giỏi";
	elseif ($diemTB>=7) 
		$xeploai="Khá";
	elseif ($diemTB>=5) 
		$xeploai="Trung bình";
	else
		$xeploai="Yếu";	
	
	echo "ĐTB: $diemTB"."<br>";
		
?>
