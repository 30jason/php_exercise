<?php
session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']=='Yes'){
        echo "<a href='logout.php'>登出系統</a></br>";
    }else{
        echo "非法進入系統";
        exit();
    }
}else{
    echo "非法進入系統";
    exit();
}
echo "<h1><div align='center'>Welcome to admin</div></h1>";
?>