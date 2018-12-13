<?php 
session_start();
session_destroy();
setcookie("user","", time()-10);
header("location: /WebAppFindGuide/index.php");
 ?>