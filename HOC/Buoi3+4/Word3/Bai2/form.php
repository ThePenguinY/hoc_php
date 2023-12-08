<?php
if(isset ($_GET["name"])){
    echo 'Họ tên: ' . $_GET['name'] . '<br>';
}

if(isset ($_GET["password"])){
    echo 'Password: ' . $_GET['password'] . '<br>';
}

if(isset ($_GET["check_html"])){
    echo 'Đăng kí học: ' . $_GET['check_html'];
}

if(isset ($_GET["check_css"])){
    echo ' ' . $_GET['check_css'] . '<br>';
}

if(isset ($_GET["gender"])){
    echo 'Giới tính: '. $_GET['gender'] . '<br>';
}

if(isset ($_GET["message"])){
    echo 'Tin nhắn: '. $_GET['message'] . '<br>';
}
if(isset ($_GET["city"])){
    echo 'Thành phố: '. $_GET['city'] . '<br>';
}

?>