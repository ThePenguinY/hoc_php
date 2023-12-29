<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMainMenu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Giỏ hàng</title>
</head>
<body>
   <section>
      <header>
         <div class="circle"></div>
         <div class="circles"></div>
         <a href="index2.php" class="logo">
            Meo
            <span>Store</span>
         </a>
         <ul>
            <li>
               <a href="damNgan2.php">Đầm ngắn</a>
            </li>
            <li>
               <a href="damDai2.php">Đầm dài</a>
            </li>
            <li>
               <a href="damRen2.php">Đầm ren</a>
            </li>
            <li>
               <a href="aoDai2.php">Áo dài</a>
            </li>
            <li>
              <a href="cart.php" style="color: pink;">Giỏ hàng</a>
            </li>
            <li>
               <a class="btn-login" href = "userLogout.php">Logout</a>
            </li>
            <li>
               <a class="btn-login" href = "adminLogin.php">Admin</a>
            </li>
         </ul>
         </header>

   <!--Middle-->

   
   <div class="container-fluid">
      <div class="row justify-content-around">
         <div class="col-sm-12 col-md-6 col-lg-9">
            <table class="table table-bordered text-center">
               <thead class="">
                  <th>STT</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá sản phẩm</th>
                  <th>Số lượng sản phẩm</th>
                  <th>Tổng giá</th>
                  <th>Cập nhật sản phẩm</th>
                  <th>Xoá sản phẩm</th>
                  <th></th>
               </thead>
               <tbody>
               <?php 
                  
                  session_start();
                  $ptotal = 0;
                  $total = 0;
                  $i = 0;
                  if(isset($_SESSION ['cart'])){
                     foreach($_SESSION['cart'] as $key => $value){
                        $ptotal =  $value['productPrice'] *  $value['productQuantity'];
                        $total  += $value['productPrice'] * $value['productQuantity'];$ptotal = $value['productPrice'] * $value['productQuantity'];
                        $i  = $key +1;
                        echo "
                        <form action='insertCart.php' method='post'>
                        <tr>
                        <td>$i</td>
                        <td><input type ='hidden' name = 'name' value ='$value[productName]'>$value[productName]</td>
                        <td><input type ='hidden' name = 'price' value ='$value[productPrice]'>$value[productPrice]</td>
                        <td><input type ='' name = 'quantity' value ='$value[productQuantity]'></td>
                        <td>$ptotal</td>
                        <td><button name = 'update'class = 'btn1 btn-warning'>Update</button></td>
                        <td><button name ='remove' class = 'btn1 btn-danger'>Delete</button></td>
                        <td><input type = 'hidden' name = 'item' value = '$value[productName]'></td>
                     </tr>
                     </form>
                     ";
                     }
                  }
               ?>
               </tbody>
            </table>
         </div>
         <div class="col-lg-3 text-center">
            <h3>Tổng cộng</h3>
            <h1><?php echo number_format($total) ?></h1>
            <td><button name ="checkOut" class = "btn1 btn-danger">Thanh toán</button></td>
         </div>
         
      </div>
   </div>


   <!--Bottom-->
</body>
</html>