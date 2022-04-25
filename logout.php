<?php
session_start();
session_destroy();
//setcookie("UID",$uid,time()-17280);
header('Locaton: /logi.php');
echo "<h1>您已登出</h1>";
?>