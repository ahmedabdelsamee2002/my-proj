<?php


session_start();

?>


<?php 

echo $_SESSION['country'] ;  echo '<br>';
 echo $_COOKIE['namecoockie'];

 //session_destroy() to logout لعمل تسجيل خروج من الموقع للحساب 
 //session_unset() بتمسح المعلومات من غير متعمل دستروي للسشن

?>