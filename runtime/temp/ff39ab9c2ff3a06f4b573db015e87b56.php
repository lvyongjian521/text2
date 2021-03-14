<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:36:"template/b_new/html/gbook\index.html";i:1577362600;s:65:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\public\include.html";i:1577612338;s:61:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\jdyzm\head.html";i:1575023310;s:67:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\jdyzm\head-title.html";i:1575023436;s:65:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\jdyzm\head-nav.html";i:1577442556;s:61:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\gbook\ajax.html";i:1577274750;s:64:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\public\paging.html";i:1577683482;s:62:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\public\foot.html";i:1577612560;}*/ ?>

<!DOCTYPE html>
<html>
<title>求片留言- <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<head>
    <link rel="shortcut icon" href="<?php echo $maccms['path_tpl']; ?>img/favicon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/swiper.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/style.css"/>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/swiper.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/home.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>

    <script>
        $(function(){
            MAC.Gbook.Login = <?php echo $gbook['login']; ?>;
            MAC.Gbook.Verify = <?php echo $gbook['verify']; ?>;
            MAC.Gbook.Init();
        });
    </script>
</head>
<body id="graypage">
 <div class="header">
	    	<div class="i-head">
 	   <a class="logo" href="/"><img src="<?php echo $maccms['path_tpl']; ?>img/logo.png"></a>
		<a class="search" href="<?php echo mac_url('label/search'); ?>" id="search"><span class="so-icon"><svg class="soso" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg></span><span class="value">输入关键字。。</span></a>
		<li class="user"><a href="<?php echo mac_url('user/index'); ?>"><img src="<?php echo mac_url_img(mac_default($user['user_portrait'],'template/b/images/touxiang.png')); ?>"></a></li>
		<li class="app"><p><a herf="#">App下载</a></p></li>
	</div>

	    	<div class="i-head-nav">
		<div class="head-nav" id="header-nav-yzm">
			<div class="nav swiper-wrapper">
				<a class="link swiper-slide<?php if($maccms['aid'] == 7): ?> active<?php endif; ?>" href="<?php echo mac_url('label/week'); ?>"><p>最新更新</p><e><?php echo mac_data_count(4,'today','vod'); ?></e></a>
				<a class="link swiper-slide<?php if($maccms['aid'] == 1): ?> active<?php endif; ?>" href="/"><p>推荐</p></a>
				<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
				<a class="link swiper-slide<?php if($obj['type_id'] == $vo['type_id']): ?> active<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><p><?php echo $vo['type_name']; ?></p></a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<a class="link swiper-slide<?php if($maccms['aid'] == 4): ?> active<?php endif; ?>" href="<?php echo mac_url('gbook/index'); ?>"><p>留言</p></a>
			</div>
		</div>
		<div class="more"><svg aria-hidden="true"> <use xlink:href="#icon-xialaxiao"></use></svg></div>
	</div>
	<div class="nav-box">
		<div class="nav-box-zone">
			<a class="link <?php if($maccms['aid'] == 1): ?> active<?php endif; ?>" href="/"><p>首页</p></a>
			<?php $__TAG__ = '{"type":"all","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			<a class="link<?php if($obj['type_id'] == $vo['type_id']): ?> active<?php endif; ?>" href="<?php echo mac_url_type($vo); ?>"><p><?php echo $vo['type_name']; ?></p></a>
			<?php endforeach; endif; else: echo "" ;endif; ?> 
			<a class="link <?php if($maccms['aid'] == 4): ?> active<?php endif; ?>" href="<?php echo mac_url('gbook/index'); ?>"><p>留言</p></a>
		</div>
		<div class="more"><svg aria-hidden="true"><use xlink:href="#icon-shouqixiao"></use></svg></div>
	</div>
	

</div>
<div class="head-top"></div>
 <div class="container">
      <div class="input_row">
       <div class="pannel clearfix">
        <!--留言开始-->
        <div class="mac_msg_r">
              <form class="gbook_form gbook_font">
                <textarea class="gbook_content" name="gbook_content" placeholder="输入留言内容"></textarea>
                <div class="msg_code">
                    <div class="remaining_w"style="margin: 0.375rem 0;">提示：还可输入<span class="gbook_remaining remaining">200</span>字</div>
                    <?php if($gbook['verify'] == 1): ?>
                    <input type="text" name="verify" placeholder="验证码" class="verify" style="width: 45%;"><img class="comm-code" src="<?php echo mac_url('verify/index'); ?>" data-role="<?php echo mac_url('verify/index'); ?>" title="看不清楚? 换一张！" onClick="this.src=this.src+'?v=<?php echo time(); ?>'" / >
                    <?php endif; ?>
                    <input type="button" class="gbook_submit submit_btn" value="提交留言">
                </div>
            </form>
        </div>
        <!--留言结束-->
        <?php $__TAG__ = '{"paging":"yes","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Gbook")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;endforeach; endif; else: echo "" ;endif; ?>     
       </div>
    </div>
    <div class="commlist_row">
        <div class="comm_list pannel clearfix">
            <div class="comment_head clearfix">
     <span class="fr">共&nbsp;<font color="#68caed"><?php echo $__PAGING__['record_total']; ?></font>&nbsp;条留言，当前第&nbsp;<font color="#68caed"><?php echo $__PAGING__['page_current']; ?></font>&nbsp;页</span>
     <h2 class="title fl">留言板</h2>								
</div>
<ul class="part_rows">
<?php $__TAG__ = '{"num":"10","paging":"yes","half":"3","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Gbook")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<li class="comm_each line_top margin">
<img class="comm_avat part_roun" src="<?php echo mac_get_user_portrait($vo['user_id']); ?>" />
<div class="comm_head">
<strong class="text_line"><?php echo $vo['gbook_name']; ?></strong>
<span class="part_tips"><?php echo date('Y-m-d H:i',$vo['gbook_time']); ?><span class="split_line"></span><span style="color:#fb7299">&nbsp;&nbsp;<?php echo $vo['gbook_id']; ?>楼</span></span>
</div>
<div class="comm_cont">
<div class="comm_content"><?php echo $vo['gbook_content']; ?></div>
<?php if($vo['gbook_reply']): ?>
<div class="comm_reply back_ashen comm_tops">
<div class="comm_rp_head">
<span class="text_line"><strong><font style="color:#fb7299">管理员: </font></strong><?php echo $vo['gbook_reply']; ?> ／ <?php echo date('H:i',$vo['gbook_reply_time']); ?></span>
</div>
</div>
<?php endif; ?>
</div>
</li>
<?php endforeach; endif; else: echo "" ;endif; if($__PAGING__['record_total']==0): ?>
<li class="text_center text_black">还没有人留言哎！</li>
<?php endif; ?>
</ul>
<div class="pagebox">
<ul>
<?php if($__PAGING__['record_total'] > 0): ?>
 <script> $(".data p").html("视频总数：<?php echo $__PAGING__['record_total']; ?><sl></sl>今日更新：<?php echo mac_data_count($obj['type_id'],'today','vod'); ?>")</script>
<?php if($__PAGING__['page_total'] == 1): else: ?>
<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页">首页</a>
<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" title="上一页">上页</a> <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
<em><?php echo $num; ?></em> <?php else: ?>
<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" title="第<?php echo $num; ?>页"><?php echo $num; ?></a> <?php endif; endforeach; endif; else: echo "" ;endif; ?>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" title="尾页"style="float: right;">尾页</a>
<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" title="下一页"style="float: right;">下页</a>
<?php endif; else: ?>
<div class="notdata"><img src="<?php echo $maccms['path_tpl']; ?>img/noTFound.png"><p>什么都没有找到啊 T_T</p></div><?php endif; ?>

</ul>
</div> 

        </div>
    </div>
</div>
<section class="link-youlian">
    <div class="main-head">
		<div class="title"><p>友情链接</p></div>
	</div>
    <div class="main-body" id="ord_list_10">
	<ul class="swiper-wrapper">
        <li class="swiper-slide"><a href="<?php echo mac_url('gbook/index'); ?>">留言板</a></li>
		<?php $__TAG__ = '{"num":"10","type":"all","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<li class="swiper-slide"><a href="<?php echo $vo['link_url']; ?>" target="_blank"><?php echo $vo['link_name']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	</div>
</section>
<div class="footer">
<div class="toTop"><a href="javascript:void(0)" id="toTop" style="-display: none;"><svg aria-hidden="true"> <use  xlink:href="#icon-toTop"></use></svg></a></div>
<p><?php echo $maccms['site_icp']; ?> <?php echo $maccms['site_url']; ?> © 2015-2019 </p><br><p><?php echo $maccms['site_tj']; ?>
</p></div>
 <script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jdyzm_m.js"></script>
<div class="svg-icon">
<svg aria-hidden="true">
<symbol id="icon-danmushu" viewBox="0 0 1024 1024"><path d="M800 128H224C134.4 128 64 198.4 64 288v448c0 89.6 70.4 160 160 160h576c89.6 0 160-70.4 160-160V288c0-89.6-70.4-160-160-160z m96 608c0 54.4-41.6 96-96 96H224c-54.4 0-96-41.6-96-96V288c0-54.4 41.6-96 96-96h576c54.4 0 96 41.6 96 96v448z"></path><path d="M240 384h64v64h-64zM368 384h384v64h-384zM432 576h352v64h-352zM304 576h64v64h-64z"></path></symbol>
<symbol id="icon-bofangshu" viewBox="0 0 1024 1024"><path d="M800 128H224C134.4 128 64 198.4 64 288v448c0 89.6 70.4 160 160 160h576c89.6 0 160-70.4 160-160V288c0-89.6-70.4-160-160-160z m96 608c0 54.4-41.6 96-96 96H224c-54.4 0-96-41.6-96-96V288c0-54.4 41.6-96 96-96h576c54.4 0 96 41.6 96 96v448z"></path><path d="M684.8 483.2l-256-112c-22.4-9.6-44.8 6.4-44.8 28.8v224c0 22.4 22.4 38.4 44.8 28.8l256-112c25.6-9.6 25.6-48 0-57.6z"></path></symbol>
<symbol id="icon-gengduo" viewBox="0 0 1024 1024"><path d="M336 73.6l406.4 412.8c12.8 12.8 12.8 38.4 0 51.2L336 950.4c-12.8 12.8-35.2 12.8-51.2 0l-3.2-3.2c-12.8-12.8-12.8-38.4 0-51.2l377.6-384L281.6 131.2c-12.8-12.8-12.8-38.4 0-51.2l3.2-3.2c16-16 38.4-16 51.2-3.2z"></path></symbol>
<symbol id="icon-paihangbang1" viewBox="0 0 1024 1024"><path d="M907.636364 884.363636H116.363636c-39.563636 0-69.818182-30.254545-69.818181-69.818181V442.181818c0-39.563636 30.254545-69.818182 69.818181-69.818182h209.454546V209.454545c0-39.563636 30.254545-69.818182 69.818182-69.818181h232.727272c39.563636 0 69.818182 30.254545 69.818182 69.818181v256h209.454546c39.563636 0 69.818182 30.254545 69.818181 69.818182v279.272728c0 39.563636-30.254545 69.818182-69.818181 69.818181zM325.818182 418.909091H128c-18.618182 0-34.909091 16.290909-34.909091 34.909091v349.090909c0 18.618182 16.290909 34.909091 34.909091 34.909091H325.818182V418.909091z m325.818182-197.818182c0-18.618182-16.290909-34.909091-34.909091-34.909091h-209.454546c-18.618182 0-34.909091 16.290909-34.909091 34.909091V837.818182h279.272728V221.090909z m279.272727 325.818182c0-18.618182-16.290909-34.909091-34.909091-34.909091H698.181818v325.818182h197.818182c18.618182 0 34.909091-16.290909 34.909091-34.909091v-256z m-411.927273-130.327273l23.272727 46.545455 51.2 6.981818c4.654545 0 6.981818 6.981818 4.654546 11.636364L558.545455 521.309091l9.30909 53.527273c0 4.654545-4.654545 9.309091-9.30909 6.981818l-46.545455-23.272727-44.218182 23.272727c-4.654545 2.327273-11.636364-2.327273-9.309091-6.981818l9.309091-53.527273-37.236363-37.236364c-4.654545-4.654545-2.327273-11.636364 4.654545-11.636363l51.2-6.981819 23.272727-46.545454c-2.327273-6.981818 6.981818-6.981818 9.309091-2.327273z"></path></symbol>
<symbol id="icon-xialaxiao" viewBox="0 0 1024 1024" width="100%" height="100%"><path d="M515.2 649.6L169.6 304c-12.8-12.8-32-12.8-44.8 0s-12.8 35.2 0 48l368 364.8c12.8 12.8 32 12.8 44.8 0l361.6-361.6c12.8-12.8 12.8-35.2 0-48s-32-12.8-44.8 0L515.2 649.6z"></path></symbol>
<symbol id="icon-shouqixiao" viewBox="0 0 1024 1024" width="100%" height="100%"><path d="M854.4 713.6c12.8 12.8 32 12.8 44.8 0s12.8-35.2 0-48L537.6 304c-12.8-12.8-32-12.8-44.8 0L124.8 672c-12.8 12.8-12.8 35.2 0 48s32 12.8 44.8 0l345.6-342.4 339.2 336z"></path></symbol>
<symbol id="icon-sousuo" viewBox="0 0 1024 1024" width="100%" height="100%"><path d="M448 128c176 0 320 144 320 320 0 73.6-25.6 147.2-73.6 204.8l-19.2 22.4-22.4 19.2C595.2 742.4 521.6 768 448 768 272 768 128 624 128 448S272 128 448 128m0-64C236.8 64 64 236.8 64 448s172.8 384 384 384c92.8 0 179.2-35.2 246.4-89.6l211.2 208c6.4 6.4 12.8 9.6 22.4 9.6s16-3.2 22.4-9.6c12.8-16 12.8-35.2 0-48l-208-208c54.4-67.2 89.6-153.6 89.6-246.4 0-211.2-172.8-384-384-384z"></path></symbol>
<symbol id="icon-sousuo-big" viewBox="0 0 1024 1024" width="100%" height="100%"><path d="M448 128c176 0 320 144 320 320 0 73.6-25.6 147.2-73.6 204.8l-19.2 22.4-22.4 19.2C595.2 742.4 521.6 768 448 768 272 768 128 624 128 448S272 128 448 128m0-64C236.8 64 64 236.8 64 448s172.8 384 384 384c92.8 0 179.2-35.2 246.4-89.6l211.2 208c6.4 6.4 12.8 9.6 22.4 9.6s16-3.2 22.4-9.6c12.8-16 12.8-35.2 0-48l-208-208c54.4-67.2 89.6-153.6 89.6-246.4 0-211.2-172.8-384-384-384z" fill="#aaa"></path></symbol>
<symbol id="icon-toTop" data-name="\u56FE\u5C42 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><g data-name="ic top"><circle class="cls-1" cx="26" cy="26" r="18" fill="#fafbfb"></circle><path class="cls-2" d="M26.75 23.56v10.69a.75.75 0 0 1-1.5 0V23.56L19.1 29.7a.75.75 0 0 1-1.1-1.06l7.42-7.42a.75.75 0 0 1 1 0L34 28.64a.75.75 0 1 1-1.06 1.06zm-8-5.56h14.5a.75.75 0 0 1 0 1.5h-14.5a.75.75 0 0 1 0-1.5z" fill="#757575"></path></g></symbol>
</svg>
</div>

</body>
</html>
