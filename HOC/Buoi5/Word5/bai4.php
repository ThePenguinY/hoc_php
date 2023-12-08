<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>
<body>
<h1>Kiểm tra 1 số nguyên tố</h1>
<form action="" method="post">
    <p>Nhập n: <input type="number" name="inputn"></p>
    <input type="submit" value="Kiểm tra">
    <p>Kết quả kiểm tra: </p>

    <?php
    function checkNguyenTo(int $n): bool {
        if ($n <= 1) {
            return false;
        }
    
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
    
        return true;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["inputn"];
        $nguyenTo = checknguyenTo($n);

        if ($nguyenTo) {
            echo "<p>Số $n là số nguyên tố</p>";
        } else {
            echo "<p>Số $n không phải là số nguyên tố</p>";
        }
        echo '<script>document.getElementsByName("inputn")[0].value = "' . $n . '";</script>';

    }
    ?>
</form>
</body>
</html>