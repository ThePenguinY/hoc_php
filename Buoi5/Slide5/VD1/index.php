<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = array(4,6,9,7,5);
        for ($i = 0; $i < count($a); $i++)
        {
            echo $a[ $i ] .  '<br>' ;
        }
    ?>
</body>
</html>