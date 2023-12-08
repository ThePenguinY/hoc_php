<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = array("Châm" => 8, "Thái" => 9,"Cường" => 7,"Hoàng" => 7,"Hậu" => 8,"Đạt" => 7);
        foreach($a as $key => $value){
            echo $key ."".$value ."<br>";
        }
    ?>
</body>
</html>