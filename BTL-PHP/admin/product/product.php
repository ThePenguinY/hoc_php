<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
   <link rel="stylesheet" href="./styleMainMenu.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <!--Header-->
    <section>
        <header>
            <div class="circle"></div>
            <div class="circles"></div>
            <a href="index.php" class="logo">
                Meo <span>Store</span>
            </a>
            <ul>
                <li>
                   <a href="">Sản phẩm</a>
                </li>
                <li>
                   <a href="">Người dùng</a>
                </li>
                <li>
                   <a class="btn-login" href = "Login.php">Logout</a>
                </li>
                <li>
                   <a class="btn-login" href = "Login.php">Userpanel</a>
                </li>
            </ul>
        </header>  
    </section>
    <form action="post">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
    </form>
</body>
</html>