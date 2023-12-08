<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
</head>
<body>
<h1>Tìm ước số chung lớn nhất và bội số chung nhỏ nhất</h1>
<form action="" method="post">
    <p>Nhập a: <input type="number" name="inputa"></p>
    <p>Nhập b: <input type="number" name="inputb"></p>
    <input type="submit" value="Tính">

<?php
    function UCLN(int $a, int $b): int {
        if ($a <= 0 || $b <= 0) {
            return 0;
        }

        while ($a != $b) {
            if ($a > $b) {
                $a -= $b;
            } else {
                $b -= $a;
            }
        }

        return $a;
    }

function BCNN(int $a, int $b): int {
    return ($a * $b) / UCLN($a, $b);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["inputa"];
    $b = $_POST["inputb"];

    $UCLN = UCLN($a, $b);
    $BCNN = BCNN($a, $b);

    echo "Ước số chung lớn nhất của $a và $b là $UCLN";
    echo "<br>";
    echo "Bội số chung nhỏ nhất của $a và $b là $BCNN";

    echo '<script>document.getElementsByName("inputa")[0].value = "' . $a . '";</script>';
    echo '<script>document.getElementsByName("inputb")[0].value = "' . $b . '";</script>';
}
?>
</form>
</body>
</html>