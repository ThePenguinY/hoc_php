<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Họ Tên: <input type="text" name="fullname">
                <input type="submit" value="Gửi" name="submit">
    </form>
    <?php
        if(isset($_POST['fullname'])){
            echo $_POST['fullname'];
        }
    ?>
</body>
</html>