<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
    <h1>TÍNH GIAI THỪA</h1>
    <form action="" method="post">
        <p>Nhập n <input type="number" name="inputn" placeholder=></p>
        <input type="submit" value="Tính giai thừa">
        <p>Kết quả</p>

    <?php
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function factorial($n) {
            if ($n === 0 || $n === 1) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }
        $n = $_POST["inputn"];
       
        $giaithua = factorial($n);  
        echo "<p>Giai thừa của $n là $giaithua</p>";
        echo '<script>document.getElementsByName("inputn")[0].value = "' . $n . '";</script>';
        }
    ?>
    </form>
</body>
</html>