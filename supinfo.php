<html>
    <head>
    <link rel='icon' href='https://m.media-amazon.com/images/I/61+iFsiGA+L.jpg' type='image/x-icon' />
    </head>
    <body>
        <body bgcolor='6BD4EB'>
            <?php
            require("dbconnect.php");
            echo "<b>註冊資訊</b></br>";
            $sname=$_POST["sname"];
            $spassword=$_POST["spassword"];
            $srole=$_POST["srole"];
            $SQL="INSERT INTO user (uName, uPwd, uRole) VALUES ('$sname', '$spassword', '$srole')";
            if(mysqli_query($link,$SQL)){
                echo "<script type='text/javascript'>";
                echo "alert('註冊成功')";
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url=list.php'>";
            }else{
                echo "<script type='text/javascript'>";
                echo "alert('註冊失敗')";
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url=signup.php'>";
            }
            echo "<b>你的帳號: </b>".$saccount."</br>";
            echo "<b>你的密碼: </b>".$spassword."</br>";
            echo "<b>你的電子信箱: </b>".$semail."</br>";
            ?>
    </body>
</html>