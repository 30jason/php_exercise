<?php
$link= @mysqli_connect(
    'localhost',  //MySQL主機名稱
    'root',       //使用者名稱
    '',   //密碼
    'php');        //預設資料庫名稱
    
$SQL="SELECT * FROM user";

if($result=mysqli_query($link,$SQL)){
    echo "<table border='1'>";
    while($row=mysqli_fetch_assoc($result)){
        echo"<tr>";
        echo "<td>".$row["uNo"]."</td><td>".$row["uName"]."</td><td>".$row["uPWD"]."</td><td>".$row["uRole"]."</td><br>";
        echo "</tr>";
    }
     echo "</table>";
}
?>