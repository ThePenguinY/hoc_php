<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="themdl.php" method="post">
        <h2 align="center">Thêm mới Sinh viên khách hàng</h2>
        <p align="center">Mã SV:<input type="text" name="MaSV" ></p>
        <p align="center">Họ Tên:<input type="text" name="HoTen" ></p>
        <p align="center">Ngày sinh: <input type="date" name="NgaySinh"></p>
        <p align="center">Quê Quán:<input type="text" name="QueQuan" ></p>
        <p align="center"><input type="submit" value="Thêm mới"></p>
    </form>


    <?php 
        $connect = mysqli_connect('localhost','user_tintuc','123456','qldiem');
        if(!$connect){
            die("Khong ket noi " . mysqli_connect_error());
            exit();
        }
        if (isset($_POST["MaSV"], $_POST["NgaySinh"], $_POST["HOTEN"], $_POST["QUEQUAN"])) {

            $MaSV = $_POST["MaSV"];
            $HOTEN = $_POST["HOTEN"];
            $NGAYSINH = $_POST["NGAYSINH"];
            $QUEQUAN = $_POST["QUEQUAN"];

            $sql = "INSERT INTO SINHVIEN(MaSV, NGAYSINH ,HOTEN, QUEQUAN) VALUES ('$MaSV','$HOTEN','$NGAYSINH','$QUEQUAN')";
            $result = mysqli_query($connect, "select * from SINHVIEN");

            if ($result) {
                echo "Thêm mới thành công";
            } else {
                echo "Thêm mới thất bại";
            }
        } else {
            echo "Dữ liệu không hợp lệ từ form";
        }
    ?>
</body>
</html>