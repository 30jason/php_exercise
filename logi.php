<?php
session_start();
//如果出現header already sent
//ob start();
?>

<?php
if(isset($_COOKIE["UID"])){
    $cookieID=$_COOKIE["UID"];
    echo "歡迎".$cookieID."再度光臨";
}else{
    echo "恭喜您發現本網站";
}
?>



<html>


<head>
<link rel='icon' href='https://m.media-amazon.com/images/I/61+iFsiGA+L.jpg' type='image/x-icon' />

</head>


<body>
<body bgcolor='6BD4EB'>
<h1><div align='center'>登入</div></h1>
<form action='' method='post'>
帳號:<input type='text' name='uaccount' required></br>
密碼:<input type='password' name='upassword' required></br>
<input type='submit'>
<input type='button' value='註冊' onclick="location.href='signup.php'">
</form>
<?php
/*$aid="admin";
$apwd="abcd";
$usid="user";
$uspwd="1234";
*/

$link= @mysqli_connect(
    'localhost',  //MySQL主機名稱
    'root',       //使用者名稱
    '',   //密碼
    'php');        //預設資料庫名稱

date_default_timezone_set('Asia/Taipei');
echo date("m-d-Y H:i:s", time())."</br>";
//header('Refresh:1');

if(isset($_POST["uaccount"])){
    if($_POST["uaccount"]!=NULL){
        $uid=$_POST["uaccount"];
        $upwd=$_POST["upassword"];

        $SQL="SELECT * FROM user   WHERE uName='$uid' AND uPWD='$upwd'";
        $result=mysqli_query($link,$SQL);
        if(mysqli_num_rows($result)==1){
            $_SESSION["login"]='Yes';
            setcookie("UID",$uid,time()+17280);
            header('Location: /index.php');
        }else{
            echo "帳號或密碼輸入錯誤";
        }
        //echo $uid."</br>";
        //echo $upwd;
        /*if($aid==$uid && $apwd==$upwd){
            $_SESSION["login"]='Yes';
            //echo "登入成功";
            setcookie("UID",$uid,time()+17280);
            header('Location: /admin.php');
        }else if($usid==$uid && $uspwd==$upwd){
            $_SESSION["login"]='Yes';
            setcookie("UID",$uid,time()+17280);
            header('Location: /index.php');
        }else{
            echo "帳號或密碼輸入錯誤";
        } 
        */
    }else{
        echo "您尚未輸入帳號密碼!";
    }
}else{
    echo "歡迎登入，請輸入帳號和密碼";
}
//如果出現header already sent
//ob_flush();
?>



</body>

</html>    