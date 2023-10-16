<?php


session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

setcookie("namecoockie",'value', time() + 120) ;   //time in second 
//setcookie("namecoockie",'value', time() - 1) ;   to terminat coockie اكتب سالب اي رقم

$_SESSION['country']='egypt'; 


?>
<a href="cc.php">go to</a>
</body>
</html>