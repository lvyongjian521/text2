<?php
if(isset($_GET['per'])){
$per=$_GET['per'];
if($per>0&&$per<7){
$per=$per;
}
}else{
$per=4;
}
if(isset($_GET['txt'])){
$txt=$_GET['txt'];
header("Content-Type: audio/mpeg");
$voice = file_get_contents('https://api.vvhan.com/api/song?txt='.$txt.'&per='.$per);
exit($voice);
}else{
header('Content-type:application/json;charset=UTF-8');
exit('{"code":-1,"msg":"参数不完整"}');
}
?>