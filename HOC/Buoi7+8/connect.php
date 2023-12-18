
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center"> Danh sách sinh vien</h2>
    <table border="1"  cellspacing="0" cellpadding="3px"  align="center">
        <tr><td>STT</td><td>MASV</td><td>HoTen</td><td>QueQuan</td></tr>


    <?php 
        $connect = mysqli_connect('localhost','user_tintuc','123456','qldiem');
        if(!$connect){
            die("Khong ket noi " . mysqli_connect_error());
            exit();
        }
        $result=mysqli_query($connect,"SELECT * FROM sinhvien");
        $i=1;
        while($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>".$row["MASV"]."</td>";
            echo "<td>".$row["HOTEN"]."</td>";
            echo "<td>".$row["QUEQUAN"]."</td>";    
            echo "<tr>";

            $i++;
        }
    ?>
        </table>
</body>
</html>