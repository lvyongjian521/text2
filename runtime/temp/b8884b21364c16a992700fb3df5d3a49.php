<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:33:"template/b_new/html/vod\play.html";i:1577747332;s:65:"D:\phpstudy_pro\WWW\b.com\template\b_new\html\public\include.html";i:1577612338;s:66:"D:\phpstudy_pro\WWW\b.com\template\b_new\html\jdyzm\head-mini.html";i:1574683040;s:67:"D:\phpstudy_pro\WWW\b.com\template\b_new\html\jdyzm\head-title.html";i:1575023436;s:62:"D:\phpstudy_pro\WWW\b.com\template\b_new\html\public\foot.html";i:1577612560;}*/ ?>
<html>

<head>

    <meta charset="utf-8">

    <title><?php echo $obj['vod_name']; ?>-<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>在线播放-<?php echo $maccms['site_name']; ?>_·免VIP在线观看无广告高清视频</title>

    <meta name="keywords" content="<?php echo $obj['vod_name']; ?>-<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>在线观看-<?php echo $maccms['site_name']; ?>_·免VIP在线观看无广告高清视频" />

    <meta name="description" content="《<?php echo $obj['vod_name']; ?>-<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>》在线观看,《<?php echo $obj['vod_name']; ?>-<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>》高清资源迅雷下载,<?php echo $maccms['site_name']; ?>_国内领先的在线视频网站·免VIP在线观看无广告高清视频剧情:<?php echo $obj['art_blurb']; ?>" />

    <link rel="shortcut icon" href="<?php echo $maccms['path_tpl']; ?>img/favicon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/swiper.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/style.css"/>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/swiper.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/home.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>


    <script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/history.js"></script>

	<script type="text/javascript">var vod_pic = '<?php echo mac_url_img($obj['vod_pic']); ?>',vod_name = '【<?php if($obj['vod_serial'] > 0): ?>已更新至&nbsp;第<?php echo $obj['vod_serial']; ?>集<?php else: ?><?php echo $obj['vod_remarks']; endif; ?>】<?php echo mac_substring($obj['vod_name'],10); ?>', vod_url = window.location.href, vod_part='<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>',vod_time='<?php echo date("Y-m-d H:i"); ?>';	</script>

</head>

<body>

    <div class="header">
	    	<div class="i-head">
 	   <a class="logo" href="/"><img src="<?php echo $maccms['path_tpl']; ?>img/logo.png"></a>
		<a class="search" href="<?php echo mac_url('label/search'); ?>" id="search"><span class="so-icon"><svg class="soso" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg></span><span class="value">输入关键字。。</span></a>
		<li class="user"><a href="<?php echo mac_url('user/index'); ?>"><img src="<?php echo mac_url_img(mac_default($user['user_portrait'],'template/b/images/touxiang.png')); ?>"></a></li>
		<li class="app"><p><a herf="#">App下载</a></p></li>
	</div>

</div>
<div class="head-top-mini"></div>

	<div class="player">

	 <div id="playerdata" vodid="<?php echo $obj['vod_id']; ?>" vodsid="<?php echo $param['nid']; ?>" vodpic="<?php echo $obj['vod_pic']; ?>" vodname="<?php echo $obj['vod_name']; ?>" voduser="<?php echo $user['user_name']; ?>" vodgroup="<?php echo $user['group_id']; ?>" vodcolor="fff" style="display:none"></div>

		<div class="bofqi">

		<?php if($obj['vod_copyright'] == 1 && $GLOBALS['config']['app']['copyright_status'] == 1): ?>

			<div class="ui-box marg" id="playlist_0"style=" width: 100%;text-align: center;position: relative;top: 40%;color: #999;">

 			   <div class="down-title"><?php echo $GLOBALS['config']['app']['copyright_notice']; ?></div>

			</div>

		<?php else: ?>

		<?php echo $player_data; ?> <?php echo $player_js; endif; ?>

		</div>

	</div>

	<div class="play-bar">

	<p><a href="<?php echo $obj['player_info']['link_pre']; ?>">上一话</a><a href="<?php echo $obj['player_info']['link_next']; ?>">下一话</a></p>

	</div>

	<div class="play-info">

		<div class="info">

			<a class="left" href="<?php echo mac_url_vod_detail($obj); ?>"><div class="pic lazy-thumb"data-original="<?php echo mac_url_img($obj['vod_pic']); ?>" style="border-radius: .256rem;"></div></a>

			<div class="center">

				<div class="title"><a href="<?php echo mac_url_vod_detail($obj); ?>"><?php echo $obj['vod_name']; ?></a></div>

				<div class="data"><div class="play"><span>播放：<?php echo $obj['vod_hits']; ?></span></div><div class="time"><span>年代：<?php echo $obj['vod_year']; ?></span></div></div>

				<div class="updata">更新：<?php echo date('m-d',$obj['vod_time']); ?>&nbsp;&nbsp;<?php if($obj['vod_serial'] > 0): ?>已更新至&nbsp;第<font color="#fb7299" style="font-weight: bold;"><?php echo $obj['vod_serial']; ?></font>集<?php else: ?><?php echo $obj['vod_remarks']; endif; ?></div>

				<div class="intro"><p><?php echo mac_substring(mac_filter_html($obj['vod_content']),70); ?>...</p></div>

			</div>

			<div class="right"><div class="review"><span class="score"><?php echo $obj['vod_score']; ?></span><span>分</span></div><div class="play_month"><?php echo $obj['vod_hits_month']; ?>人</div></div>

		</div>

		<div class="option-bar"><div class="favorite"><i></i><a href="javascript:void(0)"  class="mac_ulog" data-type="2" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>"><span>追番</span></a></div> <div class="baocuo"><i></i><a href="javascript:;" tapmode onClick="MAC.Gbook.Report('ID:<?php echo $obj['vod_id']; ?> -【名称：<?php echo $obj['vod_name']; ?> - <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>】无法观看请检查修复')"><span>报错</span></a></div> <div class="share"><i></i><a class="btn btn-default copylink" onclick="copyUrl()"><span>分享</span></a><div id="copyUrl">分享一部好看的电影《<?php echo $obj['vod_name']; ?>》大家来围观哦 链接<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?></div><script type="text/javascript">function copyUrl() { var val = document.getElementById('copyUrl'); window.getSelection().selectAllChildren(val); document.execCommand("Copy");alert("地址复制成功，赶快分享给小伙伴吧！");}</script></div></div>

	</div>



<section class="main">

		<div class="main-head">

			<div class="title"><p>选集</p></div>

			<a class="more-link"><div class="word showbtn"><p class="on"><svg aria-hidden="true"><use xlink:href="#icon-xialaxiao"></use></svg><font>展开</font></p><p class="off"><svg aria-hidden="true"><use xlink:href="#icon-shouqixiao"></use></svg><font>收起</font></p></div><span class="more-line" style="display: inline-block;margin-left: 0.5rem;margin-right: 0.5rem;width: 1px;height: 0.5rem;vertical-align: -0.1rem;background-color: #eee;line-height: 2.5rem;margin-top: .25rem;"></span></a>
			<a class="more-link"><div class="word sort_btn"><p><img src="<?php echo $maccms['path_tpl']; ?>img/sort_btn.png" ><font>排序</font></p></div></a>

		</div>

		<div class="main-body">

			<div class="playlist vod-list" id="mytab_b_1">

			<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): if($vo['sid'] == $param['sid']): ?>

			<div class="v_list" id="ord_vod_<?php echo $key; ?>" <?php if($param['sid'] == $key): ?>style="display:block"<?php else: ?>style="display:none"<?php endif; ?>>

				<ul class="swiper-wrapper">

				<?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>

				<li class="swiper-slide link<?php if($obj['type_1']['type_name']=='电影'||$obj['type']['type_name']=='电影'||$obj['type_1']['type_name']=='综艺'||$obj['type']['type_name']=='综艺'): ?> long<?php endif; if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?> active<?php endif; ?>"><a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>" rel="nofollow"><?php echo $vo2['name']; ?></a></li>

				<?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>

			</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

			</div>

			<div class="form-list"id="ord_list_1">

				<ul class="swiper-wrapper froms"id="mytab_h_1">

				<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>

				<li class="swiper-slide<?php if($param['sid'] == $key): ?> active<?php endif; ?>"><a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$param['nid']]); ?>"><?php echo $vo['player_info']['show']; ?></a></li>

				<?php endforeach; endif; else: echo "" ;endif; ?>

				</ul>

			</div>

		</div>

	</section>

	 <section class="main">

    <div class="main-head">

		<div class="title"><p>猜你喜欢</p></div>

	</div>

    <div class="main-body">

    <div class="recom-list">

		<?php $__TAG__ = '{"num":"6","type":"current","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

		<li class="recom-v1">

			<a href="<?php echo mac_url_vod_detail($vo); ?>">

					<div class="recom-image lazy-thumb" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></div>

					<div class="recom-wrapper"><div class="recom-title"><?php echo $vo['vod_name']; ?></div><p class="stats"><?php if($vo['vod_serial'] > 0): ?>更新至 第<?php echo $vo['vod_serial']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p><p class="stats"><?php echo $vo['vod_hits']; ?>次观看 · <?php echo date('m-d',$vo['vod_time']); ?>更新</p></div>

			</a>

		</li>

		<?php endforeach; endif; else: echo "" ;endif; ?>

		</div>

	</div>

</section>

<section class="main">



<div class="mac_comment" id="mac_comment" data-id="<?php echo $obj['vod_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>" ></div>



<script>



	$(function(){



		MAC.Comment.Login = <?php echo $comment['login']; ?>;



		MAC.Comment.Verify = <?php echo $comment['verify']; ?>;



		MAC.Comment.Init();



		MAC.Comment.Show(1);



	});



</script>



</section>

    <span class="mac_hits hits" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-type="hits" style="display:none" ></span>

    <span style="display:none" class="mac_ulog_set" alt="设置视频播放记录" data-type="4" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"><div id="landing-pic" style="background-image: url(<?php echo $obj['vod_pic']; ?>);"></div></span>

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