<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:33:"template/b_new/html/user\reg.html";i:1565888956;s:63:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\user\include.html";i:1577612352;s:60:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\user\foot.html";i:1577612032;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>用户注册 - <?php echo $maccms['site_name']; ?></title>
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
			<span class="mb-title">用户注册</span>
	    </div>
   <div class="user-bg">
	<div class="reg-w">
		<form method="post" id="fm" action="">
			<h4>用户注册</h4>
			<div class="reg-group">
				<label class="bd-r" style="letter-spacing: normal;">账号</label><input type="text" id="user_name" name="user_name" class="reg-control" placeholder="请输入您的登录账号">
			</div>
			<div class="reg-group">
				<label>密码</label><input type="password" id="user_pwd" name="user_pwd" class="reg-control" placeholder="请输入您的登录密码">
			</div>
			<div class="reg-group">
				<label>确认密码</label><input type="password" id="user_pwd2" name="user_pwd2" class="reg-control" placeholder="请输入您的确认密码">
			</div>
			<?php if($user_config['reg_phone_sms'] != 0): ?>
			<input type="hidden" name="ac" value="phone">
			<div class="reg-group">
				<label>手机号码</label><input type="text" class="reg-control w150" id="to" name="to" placeholder="请输入手机号">
				<input type="button" class="fr m-hi reg-yzm" id="btn_send_sms" value="获取验证码"/>
			</div>
			<div class="reg-group">
				<label>手机验证码</label><input type="text" class="reg-control" id="code" name="code" placeholder="请输入手机验证码">
			</div>
			<?php elseif($user_config['reg_email_sms'] != 0): ?>
			<input type="hidden" name="ac" value="email">
			<div class="reg-group">
				<label>邮箱地址</label><input type="text" class="reg-control w150" id="to" name="to" placeholder="请输入邮箱">
				<input type="button" class="fr m-hi reg-yzm" id="btn_send_sms" value="获取验证码"/>
			</div>
			<div class="reg-group">
				<label>邮箱验证码</label><input type="text" class="reg-control" id="code" name="code" placeholder="请输入邮箱验证码">
			</div>
			<?php endif; if($user_config['reg_verify'] != 0): ?>
			<div class="reg-group">
				<label>验证码</label><input type="text" class="reg-control w150" id="verify" name="verify" placeholder="请输入验证码">
				<img class="fr m-hi" id="verify_img" src="<?php echo url('verify/index'); ?>" onClick="this.src=this.src+'?'"  alt="单击刷新" />
			</div>
			<?php endif; ?>
			<input type="button" id="btn_submit" class="btn-brand btn-sub" value="立即注册">
		</form>
	<div class="reg-ts">
   	    <a class="rega-fl" href="<?php echo url('user/login'); ?>">已有账号？直接登录</a>
    </div>
	</div>
	</div>
</div>

<!-- // sign-box#regbox end -->
<script type="text/javascript">

    var countdown=60;
    function settime(val) {
        if (countdown == 0) {
            val.removeAttribute("disabled");
            val.value="获取验证码";
            countdown = 60;
            return true;
        } else {
            val.setAttribute("disabled", true);
            val.value="重新发送(" + countdown + ")";
            countdown--;
        }
        setTimeout(function() {settime(val) },1000)
    }


		$("body").bind('keyup',function(event) {
			if(event.keyCode==13){ $('#btnLogin').click(); }
		});

        $('#btn_send_sms').click(function(){
            var ac = $('input[name="ac"]').val();
            var to = $('input[name="to"]').val();
            if(ac=='email') {
                var pattern = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                var ex = pattern.test(to);
                if (!ex) {
                    alert('邮箱格式不正确');
                    return;
                }
            }
            else if(ac=='phone') {
                var pattern=/^[1][0-9]{10}$/;
                var ex = pattern.test(to);
                if (!ex) {
                    alert('手机号格式不正确');
                    return;
                }
            }
            else{
                alert('参数错误');
                return;
            }


            settime(this);
            var data = $("#fm").serialize();

            $.ajax({
                url: "<?php echo url('user/reg_msg'); ?>",
                type: "post",
                dataType: "json",
                data: data,
                beforeSend: function () {
                    //开启loading
                },
                success: function (r) {
                    alert(r.msg);
                },
                complete: function () {
                    //结束loading
                }
            });
        });

		$('#btn_submit').click(function() {
			if ($('#user_name').val()  == '') { alert('请输入用户！'); $("#user_name").focus(); return false; }
			if ($('#user_pwd').val()  == '') { alert('请输入密码！'); $("#user_pwd").focus(); return false; }
			if ($('#verify').val()  == '') { alert('请输入验证码！'); $("#verify").focus(); return false; }

			$.ajax({
				url: "<?php echo url('user/reg'); ?>",
				type: "post",
				dataType: "json",
				data: $('#fm').serialize(),
				beforeSend: function () {
					$("#btn_submit").css("background","#fd6a6a").val("loading...");
				},
				success: function (r) {
					alert(r.msg);
					if(r.code==1){
						location.href="<?php echo url('user/login'); ?>";
					}
					else{
						$('#verify_img').click();
					}
				},
				complete: function () {
					$("#btn_submit").css("background","#fa4646").val("立即注册");
				}
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