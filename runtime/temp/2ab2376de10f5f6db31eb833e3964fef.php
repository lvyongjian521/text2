<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:35:"template/b_new/html/label\rank.html";i:1577362050;s:65:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\public\include.html";i:1577612338;s:62:"C:\wwwroot\lvyongjian.xyz\template\b_new\html\public\foot.html";i:1577612560;}*/ ?>
<html>
<head>
    <meta charset="utf-8">
    <title>热播排行榜  - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $obj['type_key']; ?> - <?php echo $maccms['site_keywords']; ?>" />
    <meta name="description" content=<?php echo $obj['type_des']; ?> - <?php echo $maccms['site_description']; ?>" />
    <link rel="shortcut icon" href="<?php echo $maccms['path_tpl']; ?>img/favicon.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/swiper.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/style.css"/>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/swiper.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/static/js/home.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>

</head>
<body>
	<div class="rank-top">
    <a class="backIcon" href="/">
        <img src="<?php echo $maccms['path_tpl']; ?>img/back.png">
    </a>
    <div class="titleWords">
        <p>
            排行榜
        </p>
    </div>
    </div>
		<div class="i-head-nav rank">
		<div class="head-nav" id="header-nav-yzm">
			<div class="nav swiper-wrapper" id="mytab_h1_1">
				<a class="link tab-h swiper-slide active"><p>全部</p></a><?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key1 % 2 );++$key1;if($vo['type_id'] != 5): ?><a class="link tab-h swiper-slide"><p><?php echo $vo['type_name']; ?></p></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
			</div>
		</div>
		<div id="mytab_b1_1">
		<div class="rank-board tab-b">
        <?php $__TAG__ = '{"num":"20","type":"all","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <a class="rank-item" href="<?php echo mac_url_vod_detail($vo); ?>">
            <div class="rank-num">
			<?php if($key < 4): ?>
			<img src="<?php echo $maccms['path_tpl']; ?>img/rank<?php echo $key; ?>.png">
			<?php else: ?>
			<p><?php echo $key; ?></p>
			<?php endif; ?>
			</div>
            <div class="rank-pic lazy-thumb" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>"></div>
            <div class="rank-info">
                <div class="title"><p><?php echo $vo['vod_name']; ?></p></div>
                <div class="author"><img src="<?php echo $maccms['path_tpl']; ?>img/ico_up.png" alt="">
                    <p><?php if($vo['vod_serial'] > 0): ?>更新至 第<?php echo $vo['vod_serial']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>
                </div>
                <div class="data">
                    <div class="play"><img src="<?php echo $maccms['path_tpl']; ?>img/ico_play.png" alt="">
                        <p><?php echo $vo['vod_hits']; ?></p>
                    </div>
                    <div class="time"><img src="<?php echo $maccms['path_tpl']; ?>img/ico_danmu.png" alt="">
                        <p><?php echo date('m-d',$vo['vod_time']); ?></p>
                    </div>
                </div>
            </div>
        </a>
		<?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
		<?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
		
        <div class="rank-board tab-b">
        <?php $__TAG__ = '{"num":"20","type":"'.$vo1['type_id'].'","order":"desc","by":"hits","id":"vo2","key":"key2"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
        <a class="rank-item" href="<?php echo mac_url_vod_detail($vo2); ?>">
            <div class="rank-num">
			<?php if($key2 < 4): ?>
			<img src="<?php echo $maccms['path_tpl']; ?>img/rank<?php echo $key2; ?>.png">
			<?php else: ?>
			<p><?php echo $key2; ?></p>
			<?php endif; ?>
			</div>
            <div class="rank-pic lazy-thumb" data-original="<?php echo mac_url_img($vo2['vod_pic']); ?>"></div>
            <div class="rank-info">
                <div class="title"><p><?php echo $vo2['vod_name']; ?></p></div>
                <div class="author"><img src="<?php echo $maccms['path_tpl']; ?>img/ico_up.png" alt="">
                    <p><?php if($vo2['vod_serial'] > 0): ?>更新至 第<?php echo $vo2['vod_serial']; ?>集<?php else: ?><?php echo $vo2['vod_remarks']; endif; ?></p>
                </div>
                <div class="data">
                    <div class="play"><img src="<?php echo $maccms['path_tpl']; ?>img/ico_play.png" alt="">
                        <p><?php echo $vo2['vod_hits']; ?></p>
                    </div>
                    <div class="time"><img src="<?php echo $maccms['path_tpl']; ?>img/ico_danmu.png" alt="">
                        <p><?php echo date('m-d',$vo2['vod_time']); ?></p>
                    </div>
                </div>
            </div>
        </a>
		<?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
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