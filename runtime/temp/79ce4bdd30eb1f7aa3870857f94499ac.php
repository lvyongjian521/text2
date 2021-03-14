<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:35:"template/b_new/html/user\login.html";i:1565888872;s:63:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\user\include.html";i:1577612352;s:60:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\user\foot.html";i:1577612032;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>用户登录 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>"/>
<meta name="description" content="<?php echo $maccms['site_description']; ?>"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="<?php echo $maccms['path_tpl']; ?>img/favicon.png" type="image/x-icon" />
<link href="<?php echo $maccms['path_tpl']; ?>css/user.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/swiper.min.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery-1.9.1.min.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/member/jquery.superslide.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/member/formValidator-4.0.1.js" type="text/javascript"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>
<style> html{font-size: 36px!important;}</style>

</head>
<body>
<div class="header">
	<div class="layout fn-clear">
		<div class="logo">
			<a href="<?php echo $maccms['path']; ?>"><img width="120" height="34" src="<?php echo $maccms['path_tpl']; ?>img/member/logo_m.png" alt=""/></a>
		</div>
		<ul class="nav">
		    <li class="nav-item"><a class="nav-link" href="javascript:MAC.GoBack()">返回</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo $maccms['path']; ?>">返回首页</a></li>
		</ul>
	</div>
</div>

<div id="member">
        <div class="m-nav">
			<a href="javascript:MAC.GoBack()" class="btn-left"><i class="iconfont ico-right">&#xe635;</i></a>
			<a href="<?php echo $maccms['path']; ?>" class="btn-right">首页</a>
			<span class="mb-title">会员登录</span>
	    </div>
   <div class="user-bg">
	<div class="reg-w">
		<form method="post" id="fm" action="">
			<h4>会员登录</h4>
			<div class="reg-group">
				<label class="bd-r" style="letter-spacing: normal;">账号</label><input type="text" id="user_name" name="user_name" class="reg-control" placeholder="请输入您的登录账号">
			</div>
			<div class="reg-group">
				<label>密码</label><input type="password" id="user_pwd" name="user_pwd" class="reg-control" placeholder="请输入您的登录密码">
			</div>
			<?php if($GLOBALS['config']['user']['login_verify'] == 1): ?>
			<div class="reg-group">
				<label>验证码</label><input type="text" class="reg-control w150" id="verify" name="verify" placeholder="请输入验证码">
				<img class="fr m-hi" id="verify_img" src="<?php echo url('verify/index'); ?>" onClick="this.src=this.src+'?'"  alt="单击刷新" />
			</div>
			<?php endif; ?>
			<input type="button" id="btn_submit" class="btn-brand btn-sub" value="立即登录">
		</form>
		<div class="reg-ts">
   	    <a class="rega-fl" href="<?php echo url('user/findpass'); ?>">忘记密码</a>
    	<a class="rega-fr" href="<?php echo url('user/reg'); ?>">注册账号</a>
        </div>
		<div class="reg-dl">
		<?php if($GLOBALS['config']['connect']['qq']['status'] == 1): ?>
        <h5>您还可以用以下方式登录</h5>
        <?php elseif($GLOBALS['config']['connect']['weixin']['status'] == 1): ?>
        <h5>您还可以用以下方式登录</h5>       
		<?php endif; ?>
		<ul>
		<?php if($GLOBALS['config']['connect']['weixin']['status'] == 1): ?>
        <li><a class="reg-wx" href="<?php echo url('user/oauth'); ?>?type=weixin"><i class="iconfont lishi">&#xe63f;</i></a></li>
		<?php endif; if($GLOBALS['config']['connect']['qq']['status'] == 1): ?>
        <li><a class="reg-qq" href="<?php echo url('user/oauth'); ?>?type=qq"><i class="iconfont yonghu">&#xe63e;</i></a></li>
		<?php endif; ?>
        </ul>
        </div>
	</div>
	</div>
</div>


<!-- // sign-box#regbox end -->
<script type="text/javascript">

	$(function(){
		$("body").bind('keyup',function(event) {
			if(event.keyCode==13){ $('#btnLogin').click(); }
		});
		$('#btn_submit').click(function() {
			if ($('#user_name').val()  == '') { alert('请输入用户！'); $("#user_name").focus(); return false; }
			if ($('#user_pwd').val()  == '') { alert('请输入密码！'); $("#user_pwd").focus(); return false; }
			if ($('#verify').length> 0 && $('#verify').val()  == '') { alert('请输入验证码！'); $("#verify").focus(); return false; }

			$.ajax({
				url: "<?php echo url('user/login'); ?>",
				type: "post",
				dataType: "json",
				data: $('#fm').serialize(),
				beforeSend: function () {
					$("#btn_submit").css("background","#fd6a6a").val("loading...");
				},
				success: function (r) {
					if(r.code==1){
						location.href="<?php echo url('user/index'); ?>";
					}
					else{
						alert(r.msg);
						$('#verify_img').click();
					}
				},
				complete: function () {
					$("#btn_submit").css("background","#fa4646").val("立即登录");
				}
			});

		});
	});

</script>

<div id="show" style="display: none;">
    <div class="co-cg">
       <p>耶～～复制成功</p>
    </div>
</div>
<script>
	$(".face").imageUpload({
		formAction: "<?php echo url('user/portrait'); ?>",
		inputFileName:'file',
		browseButtonValue: '<i class="iconfont xiazai">&#xe63b;</i>',
		browseButtonClass:'btn btn-default btn-xs face-upload',
		automaticUpload: true,
		hideDeleteButton: true,
		hover:true
	})
	$(".face").on("imageUpload.uploadFailed", function (ev, err) {
		alert(err);
	});
</script>
<!-- // sign-content end -->
<div class="footer">
	<div class="layout">
		<div class="copyright">
			<p>
				Copyright &copy; 2016-2019 <a class="color" href="http://<?php echo $maccms['site_url']; ?>"><?php echo $maccms['site_url']; ?></a>
			</p>
		</div>
		<!-- // maxBox End -->
	</div>
</div>
<!-- // footer end -->
<script src="<?php echo $maccms['path_tpl']; ?>js/jdyzm_m.js"></script>
<script type="text/javascript">
    $(".flip").click(function(){
		$(".panel").slideToggle("slow");
		$(".xs1").toggle();
		$(".xs2").toggle();
    });
</script>

<script type="text/javascript">
	$(".lazyload").lazyload({
	effect: "fadeIn",
	threshold: 200,
	failurelimit: 15,
	skip_invisible: !1
	})

</script>
</body>
</html>