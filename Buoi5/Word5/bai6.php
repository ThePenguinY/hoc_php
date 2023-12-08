<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
</head>
<body>
    <h1>Tính tổng các chữ số của một số nguyên n</h1>
    <form action="" method="post">
        <p>Nhập số nguyên:<input type="number" name="inputn"> </p>
        <input type="submit" value="Phân tích">
    </form>

<?php
    function tinhTong(int $n): int {
        if ($n <= 0) {
            echo "Giá trị không hợp lệ";
            return 0;
        }

        $tong = 0;
        $n = abs($n);
        while ($n != 0) {
            $tong += $n % 10;
            $n = floor($n / 10);
        }

        return $tong;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["inputn"];
        if ($n <= 0) {
            echo "Giá trị không hợp lệ";
            return 0;
        }
        $tongchuso = tinhTong($n);
        echo "Tổng các chữ số của $n là $tongchuso";
        echo '<script>document.getElementsByName("inputn")[0].value = "' . $n . '";</script>';

    }
?>
</body>
</html>