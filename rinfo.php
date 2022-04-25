<?php
$uname=$_POST["uname"];
$uemail=$_POST["uemail"];
$utel=$_POST["utel"];
$ugender=$_POST["ugender"];

$usize=$_POST["usize"];
$ucolor=$_POST["ucolor"];
$unumber=$_POST["unumber"];
$ufood=$_POST["ufood"];
//2種方法 $foods=implode("," ,$ufood);
$foodsize=count($ufood);
$ucomment=$_POST["ucomment"];
$ucomment=nl2br($ucomment);


echo "<b>你的姓名: </b>".$uname."先生/小姐</br>";
echo "<b>你的電子信箱: </b>".$uemail."</br>";
echo "<b>你的電話號碼: </b>".$utel."</br>";
if($ugender=='1'){
    echo "<b>你的性別: </b>男</br>";
}
elseif($ugender=='2'){
    echo "<b>你的性別: </b>女</br>";
}
else {
    echo "<b>你的性別: </b>不明</br>";
}
//2種方法 echo "<b>你的飲食偏好: </b>".$foods."</br>";
echo "<b>你的飲食偏好: </b>";
for ($i=0;$i<$foodsize;$i++){
    if($i==0){
        echo $ufood[$i];
    }
    else{
        echo ",".$ufood[$i];
    }
}
echo "</br>";
echo "<b>你的size: </b>".$usize."</br>";
echo "<b>你的旅遊券張數: </b>".$unumber."</br>";
echo "<b>你的意見: </b>".$ucomment. "</br>";
echo $_FILES["uphoto"]["name"]."</br>";
echo $_FILES["uphoto"]["tmp_name"]."</br>";
echo $_FILES["uphoto"]["size"]."</br>";
echo $_FILES["uphoto"]["type"]."</br>";
if(copy($_FILES["uphoto"]["tmp_name"], $FILES["uphoto"]["name"])){
    echo "sucess";
}else{
    echo "failed";
}    
?>