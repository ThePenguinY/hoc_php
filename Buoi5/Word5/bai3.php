<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>
<body>
    <form action="" method="post">
    <h1>Giải phương trình bậc hai AX2 + BX + C = 0</h1>
    <p>Nhập a: <input type="number" name="inputa"></p>
    <p>Nhập b: <input type="number" name="inputb"></p>
    <p>Nhập c: <input type="number" name="inputc"></p>
    <input type="submit" value="Giải PT" />

    <?php 
    function giai($a, $b, $c) {
        if ($a == 0) {
            return "Không phải phương trình bậc 2";
        } else {
            $delta = $b * $b - 4 * $a * $c;
        
            if ($delta < 0) {
                return "Phương trình vô nghiệm";
            } elseif ($delta == 0) {
                $x = -$b / (2 * $a);
                return "Phương trình có nghiệm kép: x = " . $x;
            } else {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                return "Phương trình có 2 nghiệm phân biệt: x1 = " . $x1 . ", x2 = " . $x2;
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = isset($_POST["inputa"]) ? $_POST["inputa"] : "";
        $b = isset($_POST["inputb"]) ? $_POST["inputb"] : "";
        $c = isset($_POST["inputc"]) ? $_POST["inputc"] : "";
        $result =giai($a, $b, $c);
    } else {
        $a = 0;
        $b = 0;
        $c = 0;
        $result = "";
    }
    if (isset($result)) {
    echo "Kết quả: " . $result;
    echo '<script>document.getElementsByName("inputa")[0].value = "' . $a . '";</script>';
    echo '<script>document.getElementsByName("inputb")[0].value = "' . $b . '";</script>';
    echo '<script>document.getElementsByName("inputc")[0].value = "' . $c . '";</script>';

    }
    ?>
    </form>
</body>
</html>