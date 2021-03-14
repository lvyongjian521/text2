<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>text</title>
    
    <link rel="stylesheet" type="text/css" href="assets/waifu.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/pingbi.js"></script>
    <script src="assets/zhendong.js"></script>
</head>
<body>
    <h2><a href="http://121.4.251.27" style="color: #38A3DB">text</a>text</h2>
    <h2><a href="http://121.4.251.27/pan" style="color:#38A3DB">近期访问</a></h2>
    <h2><a href="http://121.4.251.27/text" style="color:#38A3DB">近期访问</a></h2>
     <div class="shock">
        震动
 </div>
 <?php
error_reporting(0); //抑制所有错误信息
@header("content-Type: text/html; charset=utf-8"); //语言强制
//获取用户IP地址
$ip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$ip = ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
logResult($ip);
function logResult($word='') {
	$fp = fopen("log.txt","a");
	flock($fp, LOCK_EX) ;
	fwrite($fp,"记录时间：".strftime("%Y%m%d%H%M%S",time()).",IP:".$word."\n");
	flock($fp, LOCK_UN);
	fclose($fp);
}
?>
    
    <div class="waifu">
        <div class="waifu-tips"></div>
        <canvas id="live2d" width="280" height="250" class="live2d"></canvas>
        <div class="waifu-tool">
            <span class="fui-home"></span>
            <span class="fui-chat"></span>
            <span class="fui-eye"></span>
            <span class="fui-user"></span>
            <span class="fui-photo"></span>
            <span class="fui-info-circle"></span>
            <span class="fui-cross"></span>
        </div>
    </div>
        
    <script src="assets/waifu-tips.js"></script>
    <script src="assets/live2d.js"></script>
    <script type="text/javascript">initModel("assets/")</script>
</body>
</html>