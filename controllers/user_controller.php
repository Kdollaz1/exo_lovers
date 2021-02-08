<?php
//Destruction du cookie
setcookie('user_json', false, time() - 4200, '/');
unset($_COOKIE['user_json']);
header ('Location: ../index.php') ;
exit();