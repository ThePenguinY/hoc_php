<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Meo Store - Bridal Wedding Dress</title>
   <link rel="stylesheet" href="./styleMainMenu.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <?php ?>



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
               <a href="damNgan.php">Đầm ngắn</a>
            </li>
            <li>
               <a href="damDai.php">Đầm dài</a>
            </li>
            <li>
               <a href="damRen.php">Đầm ren</a>
            </li>
            <li>
              <a href="aoDai.php">Áo dài</a>
            </li>
            <li>
              <h6 class = "hello-user">Hello,</h6>
            </li>
            <?php 
                session_start();
                echo $_SESSION['user'];
            ?>
            <li>
               <a class="btn-login" href = "userLogin.php">Login</a>
            </li>
            <li>
               <a class="btn-login" href = "adminLogin.php">Admin</a>
            </li>
         </ul>
      </header>
      <div class="texts">
         <h1>Meo
            <span>Store</span></h1>
         <p></p>
      </div>
      <div class="background_img">
         <img src=".//IMG/DressEX.png" alt="Image not found">
      </div>
   </section>
</body>
</html>