<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <section>
        <header>
        <div class="circle"></div>
        <div class="circles"></div>
        <a href="index.php" class="logo">
            Ribit
            <span>Store</span>
        </a>
    </section>
    <div class="center">
        <h1>Đăng nhập</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup_link" >
                Not a member? <a href="#">Signup</a>
            </div>
        </form>
    </div>
</body>
</html>
