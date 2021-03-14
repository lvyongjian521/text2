<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:36:"template/b_new/html/public\jump.html";i:1574920118;s:65:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\public\include.html";i:1577612338;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>系统提示......</title>
     <link rel="shortcut icon" href="<?php echo $maccms['path_tpl']; ?>img/favicon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/swiper.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/style.css"/>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/swiper.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/home.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>

    <style>
        body{background:#fff;}
    </style>
</head>
<body>
<div class="msg_jump">
    <div class="notdata"><img src="<?php echo $maccms['path_tpl']; ?>img/noTFound.png"><p>什么都没有找到啊 T_T</p>
        <p>系统提示</p>
        <p>亲爱的：<?php echo $msg; ?></p>
        <p>页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间：<b id="wait"><?php echo($wait);?></b></p>
    </div>
</div>

<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
</body>
</html>