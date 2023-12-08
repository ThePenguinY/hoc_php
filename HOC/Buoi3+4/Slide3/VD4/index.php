<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Password: <input type="password" name="fullname">
                <input type="submit" value="Đăng nhập" name="submit">
    </form>
    <?php if(isset($_POST['password'])) { echo $_POST['password ']; } ?>
</body>
</html>