<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<style>

</style>
<body>
    <form action="" method="post">
    <h1>Giải phương trình bậc một AX + B = 0</h1>
    <p>Nhập a: <input type="number" name="inputa"></p>
    <p>Nhập b: <input type="number" name="inputb"></p>
    <input type="submit" value="Giải PT" />
    </form>

    <?php
    function giai($a, $b) {
    if ($a != 0) {
        return -($b / $a);
    } else {
        return "Không phải phương trình bậc nhất";
    }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = isset($_POST["inputa"]) ? $_POST["inputa"] : 0;
    $b = isset($_POST["inputb"]) ? $_POST["inputb"] : 0;


    $result = giai($a, $b);
    } else {
    
    $a = 0;
    $b = 0;
    $result = "";
    }

    if (isset($result)) {
        echo "Kết quả: " . $result;
        echo '<script>document.getElementsByName("inputa")[0].value = "' . $a . '";</script>';
        echo '<script>document.getElementsByName("inputb")[0].value = "' . $b . '";</script>';

    }
?>
</body>
</html>