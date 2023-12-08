<?php

if(isset ($_POST["TKW"])){
    echo 'Đăng kí học: ' . $_POST['TKW'];
}

if(isset ($_POST["LTW"])){
    echo ' ' . $_POST['LTW'] . '<br>';
}

if(isset ($_POST["LTWD"])){
    echo ' ' . $_POST['LTWD'] . '<br>';
}

if(isset ($_POST["THLTW"])){
    echo ' ' . $_POST['THLTW'] . '<br>';
}

if(isset ($_POST["LTA"])){
    echo ' ' . $_POST['LTA'] . '<br>';
}


if(isset ($_POST["morning"])){
    echo 'Học '. $_POST['morning'] . '<br>';
}
if(isset ($_POST["afternoon"])){
    echo 'Học '. $_POST['afternoon'] . '<br>';
}
if(isset ($_POST["night"])){
    echo 'Học '. $_POST['night'] . '<br>';
}

?>