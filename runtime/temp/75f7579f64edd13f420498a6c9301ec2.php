<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:31:"template/b/html/user\login.html";i:1541403898;s:59:"C:\wwwroot\lvyongjian.xyz\template\b\html\user\include.html";i:1566886824;s:61:"C:\wwwroot\lvyongjian.xyz\template\b\html\public\include.html";i:1581322784;s:56:"C:\wwwroot\lvyongjian.xyz\template\b\html\user\head.html";i:1556281122;s:57:"C:\wwwroot\lvyongjian.xyz\template\b\html\jdyzm\head.html";i:1582683947;s:56:"C:\wwwroot\lvyongjian.xyz\template\b\html\user\foot.html";i:1542285970;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>用户登录 - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>"/>
<meta name="description" content="<?php echo $maccms['site_description']; ?>"/>
	<link href="<?php echo $maccms['path_tpl']; ?>css/member.css" type="text/css" rel="stylesheet" />
 <?php include ('template/b/admin/yzm.config.php'); ?><link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/home.css"/>
<meta name="referrer" content="no-referrer" />

<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/style.css"/>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/system.js"></script>
<script type="text/javascript" src="//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script type="text/javascript" src="//cdn.bootcss.com/layer/3.1.0/layer.js"></script>
<script src="https://cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<style>
.b-header-mask-wrp .b-header-mask-bg,#header .header{background-image: url(<?php echo $yzm['pic']['top']?>);}
.header .logo,.partner-banner {background-image: url(/<?php echo $yzm['pic']['logo']?>)!important;}
.z_top.b-header-blur.b-header-blur-black .z_top_nav ul li.home {background-position: -910px -74px;}
.z_top.b-header-blur.b-header-blur-black .z_top_nav li a.i-link, .z_top.b-header-blur.b-header-blur-black .uns_box li.u-i a.i-link {color: #000;font-size: 12px;}
/*#container{background: #fdfdfd;width: 100%;margin-bottom: 0px;background-image: url(../images/bg.jpg);background-repeat: no-repeat;background-position: center 130px;background-attachment: fixed;background-image: url(https://ws3.sinaimg.cn/large/005BYqpgly1fyvunulhgmj31hc0u075z.jpg);}*/
.block-clearfix{-background-color: #fdfdfd;background-color: #f6f9fa;}
.index{background-color: transparent !important;}
div::-webkit-scrollbar{width: 2px;/*height: 4px;*/}
div::-webkit-scrollbar-thumb{border-radius: 10px;-webkit-box-shadow: inset 0 0 5px #e2e2e2;background: #e2e2e2;}
div::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 5px #fafafa;border-radius: 0;background: #fafafa;}
html::-webkit-scrollbar{width: 4px;height: 4px;}
html::-webkit-scrollbar-thumb{border-radius: 10px;-webkit-box-shadow: inset 0 0 5px #00a4db;background: #00a4db;}
html::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 5px #ddd;border-radius: 10px;background: #ddd;}
body {cursor: url(https://i.loli.net/2019/04/23/5cbedb2dae545.png), default;} a:hover{cursor:url(https://i.loli.net/2019/04/23/5cbedb246fd81.png), pointer;}
#backTop{opacity: 1;filter: alpha(opacity=100);position: fixed;_position: absolute;z-index: 9999;bottom: 0;right: 0;display: none;height: 278px;width: 130px;background: url(<?php echo $maccms['path_tpl']; ?>
images/backtop.png) no-repeat;cursor: pointer;}
</style>
<script>
            (function ($) {
                var max_width = 1420;
                var min_top = 300;
                var layer_hidden = true;
                var update_layer = function () {
                    if (($(window).width() >= max_width) && ($(window).scrollTop() > min_top)) {
//                        layer_hidden && $('#backTop').fadeIn(1000);
                        layer_hidden && $('#backTop').show();
                        layer_hidden = false;
                    }
                    else {
//                        layer_hidden || $('#backTop').fadeOut(1000);
                        layer_hidden || $('#backTop').hide();
                        layer_hidden = true;
                    }
                };

                $(window).resize(function () {
                    update_layer();
                });

                $(window).scroll(function () {
                    update_layer();
                });

                $(document).ready(function () {
                    update_layer();

                    $("#backTop,.back-top").click(function () {
                        $("body,html").animate({scrollTop: 0}, 1000);
                        return false;
                    });
                });
            })(jQuery)

</script>  

<script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>




</head>
<body>
<div id="header">
<!-- 顶部菜单 -->
    <div class="z_top b-header-blur b-header-blur-black">
        <div class="container">
            <div class="b-header-mask-wrp">
                <div class="b-header-mask-bg"></div>
                <div class="b-header-mask" style="background-color: hsla(0,0%,100%,0.13);"></div>
            </div>
            <div class="z_header">
                <div class="z_top_nav">
                    <ul>
                        <li class="home" style=" background-position: -910px -74px;"><a class="i-link" href="/"><span>主站</span></a></li>
                        <li class="b-gc"><a class="i-link" href="<?php echo mac_url('user/login'); ?>"  target="_blank" title="会员中心">会员中心</a></li>
                        <?php if($yzm['home']['guide1']['state']==1): ?><li class="b-zb"><a class="i-link" rel="nofollow"  href="<?php echo $yzm['home']['guide1']['link']?>"  target="_blank"><?php echo $yzm['home']['guide1']['title']?></a></li><?php endif; if($yzm['home']['guide2']['state']==1): ?><li class="b-zb"><a class="i-link" rel="nofollow"  href="<?php echo $yzm['home']['guide2']['link']?>"  target="_blank"><?php echo $yzm['home']['guide2']['title']?></a></li><?php endif; if($yzm['home']['guide3']['state']==1): ?><li class="b-zb"><a class="i-link" rel="nofollow"  href="<?php echo $yzm['home']['guide3']['link']?>"  target="_blank"><?php echo $yzm['home']['guide3']['title']?></a></li><?php endif; if($yzm['home']['guide4']['state']==1): ?><li class="b-zb"><a class="i-link" rel="nofollow"  href="<?php echo $yzm['home']['guide4']['link']?>"  target="_blank"><?php echo $yzm['home']['guide4']['title']?></a></li><?php endif; if($yzm['home']['guide5']['state']==1): ?><li class="b-zb"><a class="i-link" rel="nofollow"  href="<?php echo $yzm['home']['guide5']['link']?>"  target="_blank"><?php echo $yzm['home']['guide5']['title']?></a></li><?php endif; ?>
                        <li class="b-zb"><a class="i-link" rel="nofollow"  href="<?php echo $yzm['APP_down']?>" title="app追剧更方便"><font color="#19c3ff"><i class="iconfont">&#xe711;</i>&nbsp;APP下载</font></a></li>
                    </ul>
                </div>
                <div class="uns_box">
                    <ul>
                        <div class="logon_menu"><?php if($user['user_id']!=''): ?>
                            <div id="logon_info">
                                <div class="logon_avatar">
                                    <a href="<?php echo mac_url('user/index'); ?>">
                                        <img class="avatar" title="个人中心" src="<?php echo mac_url_img(mac_default($obj['user_portrait'],'template/b/images/touxiang.png')); ?>"><i style="font-size: 13px;color:#fff;-display: unset;" class="icon fm-iconfont fm-icon-down0"></i>
                                    </a>
                                </div>
                                <div class="logon_dropdown basic_container_item" style="box-shadow: none;border: 1px solid #ccc;background-color: #fff;width: 240px;">
                                    <div class="uhead" style="text-align:center;margin:0px 20px 0px 20px;border-bottom: 1px solid #ccc;">
                                        <span class="utitle"><?php echo $user['user_name']; ?></span>
                                    </div>
                                    <div class="ubody" style="margin: 20px;">
                                        <a href="<?php echo mac_url('user/info'); ?>" class="icon fm-iconfont fm-icon-friend small"> 我的资料</a>
                                        <a href="<?php echo mac_url('user/favs'); ?>" class="icon fm-iconfont fm-icon-items small"> 我的收藏</a>
                                        <a href="<?php echo mac_url('user/plays'); ?>" class="icon fm-iconfont fm-icon-list small"> 我的足迹</a>
                                        <div style="clear:both"></div>
                                </div>
                                <div class="ufoot" style="text-align:center;border-radius: 4px;height: 34px;line-height: 34px;background-color: #fafafa;border-top: 1px solid #e0e0e0;">
                                        <a style="font-size: 14px" href="<?php echo mac_url('user/logout'); ?>">退出账号</a>
                                </div>
                            </div>
                        </div>
						<script>var leo_avatar = MAC.Cookie.Get("leo-avatar");if(leo_avatar == "" || leo_avatar == null){$("#leo-head-avatar").attr("src", "/template/new/img/icon64_maimeng.png?v=<?php echo time(); ?>");}else{$("#leo-head-avatar").attr("src", leo_avatar+"?v=<?php echo time(); ?>");}</script>
						<?php else: ?>
                        <ul class="menu_nav">
                            <li style="line-height: 42px;">
                                <a href="javascript:void(0);" class="do_login icon_list mac_user" id="logon_info">
                                    <img class="avatar" title="个人中心" src="<?php echo $maccms['path_tpl']; ?>/images/akari.jpg">
                                </a>
                            </li>
                        </ul><?php endif; ?></div>
                <li class="u-i" id="history"><?php if($user['user_id']!=''): ?>
				<a href="<?php echo mac_url('user/plays'); ?>" class="i-link">历史</a>
                    <div class="mini-wnd history-wnd" style="margin-top: 1px;border-radius: 5px;">
                        <div class="top-login" style="padding-top: 10px;">
                            <img class="avatar" title="个人中心" src="<?php echo mac_url_img(mac_default($obj['user_portrait'],'template/b/images/touxiang.png')); ?>"style="WIDTH: 40PX;MARGIN-LEFT: 5px;"><a class="loginbtn" href="<?php echo mac_url('user/index'); ?>" style="margin: 10px 14px 20px;">ID:<?php echo $user['user_name']; ?></a>
                        </div>
                        <ul class="listh history mac_history">
                            <li class="timeline" style="width: 95%;"><span class="date">最近播放记录</span>
                            </li>
                            <div class="ilist"></div>
                        </ul>
                    </div><?php else: ?>
				<a href="<?php echo mac_url('user/plays'); ?>" class="i-link">历史</a>
                    <div class="mini-wnd history-wnd" style="margin-top: 1px;border-radius: 5px;">
                        <div class="top-login"style="padding-top: 10px;">
                            <p class="txt">登录后有更多功能哦~</p><a class="loginbtn" href="<?php echo mac_url('user/login'); ?>">登录</a>
                        </div>
                        <ul class="listh history mac_history">
                            <li class="timeline" style="width: 95%;"><span class="date">最近播放记录</span>
                            </li>
                            <div class="ilist"></div>
                        </ul>
                    </div><?php endif; ?>
                </li>
                <li class="u-i b-post"><a class="i-link" href="<?php echo mac_url('gbook/index'); ?>">留 言</a>
                    <ul class="s-menu">
                        <li><a href="<?php echo mac_url('gbook/index'); ?>"><i class="icon icon-vp"></i><em>求 片</em></a></li>
                        <li><a href="<?php echo mac_url('gbook/index'); ?>"><i class="icon icon-vm"></i><em>建 议</em></a></li>
                        <li><a href="<?php echo mac_url('gbook/index'); ?>"><i class="icon icon-vc"></i><em>漏 洞</em></a></li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</div>
<!-- 导航菜单 -->
<div class="header">
    <div class="container">
        <div class="header-layer" style="height: 170px;"></div>
            <a class="header-link" href="/" style="height: 170px;"></a>
        <div class="h-center"><a href="<?php echo $maccms['path']; ?>" title="<?php echo $maccms['site_name']; ?>" class="logo"></a></div>
        <div class="num">
            <div class="menu-wrapper">
                <ul class="nav-menu" <?php if($maccms['aid'] == 1): ?>style="border-bottom: 0px solid #e5e9ef;"<?php endif; ?>>
                    <li class="m-i home"><a class="i-link" href="<?php echo $maccms['path']; ?>"><em>首页</em></a></li>
					<?php if($yzm['home']['top_guide']['state']==0): ?>
                    <li class="m-i"><?php $__TAG__ = '{"ids":"1","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?><a class="i-link" href="<?php echo mac_url_type($vo1); ?>"><em><?php echo $vo1['type_name']; ?></em><div class="v-num"><span class="addnew_1"><?php echo mac_data_count(1,'today'); ?></span></div></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        <ul class="i_num"><?php $__TAG__ = '{"ids":"6,7,8,9,10,11,12","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li><a href="<?php echo mac_url_type($vo); ?>"><b><?php echo $vo['type_name']; ?><em></em></b></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?></ul>
                    </li>
                    <li class="m-i <?php if(($vo['type_id'] == $GLOBALS[ 'type_id'] || $vo['type_id'] == $GLOBALS[ 'type_pid'])): ?> on<?php endif; ?>"><?php $__TAG__ = '{"ids":"2","order":"asc","by":"sort","id":"vo2","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key1 % 2 );++$key1;?><a class="i-link" href="<?php echo mac_url_type($vo2); ?>"><em><?php echo $vo2['type_name']; ?></em><div class="v-num"><span class="addnew_5"><?php echo mac_data_count(2,'today'); ?></span></div></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        <ul class="i_num"><?php $__TAG__ = '{"ids":"13,14,15,16","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li><a href="<?php echo mac_url_type($vo); ?>"><b><?php echo $vo['type_name']; ?><em></em></b></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?></ul>
                    </li>
					<?php $__TAG__ = '{"ids":"3,4,5","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="m-i <?php if($obj['type_id'] == $vo['type_id']): ?> on<?php endif; ?>"><a class="i-link" href="<?php echo mac_url_type($vo); ?>"><em><?php echo $vo['type_name']; ?></em><div class="v-num"><span class="addnew_<?php echo $vo['type_id']; ?>"><?php if($vo['type_id'] == 3): ?><?php echo mac_data_count(3,'today'); elseif($vo['type_id'] == 4): ?><?php echo mac_data_count(4,'today'); elseif($vo['type_id'] == 5): ?><?php echo mac_data_count(5,'today'); elseif($vo['type_id'] == 6): ?><?php echo mac_data_count(6,'today'); elseif($vo['type_id'] == 7): ?><?php echo mac_data_count(7,'today'); elseif($vo['type_id'] == 8): ?><?php echo mac_data_count(8,'today'); elseif($vo['type_id'] == 9): ?><?php echo mac_data_count(9,'today'); elseif($vo['type_id'] == 10): ?><?php echo mac_data_count(10,'today'); elseif($vo['type_id'] == 11): ?><?php echo mac_data_count(11,'today'); elseif($vo['type_id'] == 12): ?><?php echo mac_data_count(12,'today'); elseif($vo['type_id'] == 13): ?><?php echo mac_data_count(13,'today'); elseif($vo['type_id'] == 14): ?><?php echo mac_data_count(14,'today'); elseif($vo['type_id'] == 15): ?><?php echo mac_data_count(15,'today'); elseif($vo['type_id'] == 16): ?><?php echo mac_data_count(16,'today'); elseif($vo['type_id'] == 17): ?><?php echo mac_data_count(17,'today'); elseif($vo['type_id'] == 18): ?><?php echo mac_data_count(18,'today'); elseif($vo['type_id'] == 22): ?><?php echo mac_data_count(22,'today'); elseif($vo['type_id'] == 23): ?><?php echo mac_data_count(23,'today'); elseif($vo['type_id'] == 24): ?><?php echo mac_data_count(24,'today'); endif; ?></span></div></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; elseif($yzm['home']['top_guide']['state']==1): $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="m-i <?php if($obj['type_id'] == $vo['type_id']): ?> on<?php endif; ?>"><a class="i-link" href="<?php echo mac_url_type($vo); ?>"><em><?php echo $vo['type_name']; ?></em><div class="v-num"><span class="addnew_<?php echo $vo['type_id']; ?>"><?php if($vo['type_id'] == 1): ?><?php echo mac_data_count(1,'today'); elseif($vo['type_id'] == 2): ?><?php echo mac_data_count(2,'today'); elseif($vo['type_id'] == 3): ?><?php echo mac_data_count(3,'today'); elseif($vo['type_id'] == 4): ?><?php echo mac_data_count(4,'today'); elseif($vo['type_id'] == 5): ?><?php echo mac_data_count(5,'today'); elseif($vo['type_id'] == 6): ?><?php echo mac_data_count(6,'today'); else: ?>0<?php endif; ?></span></div></a>
                    </li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                     </li>  
                       </li>  
                      </li> 
                     <li class="m-i m-i-zt m-i-ex"><a class="i-link" href="<?php echo mac_url('gbook/index'); ?>"><em>留言</em></a></li>
                    <li class="m-i m-i-square m-i-ex"><a class="i-link" href="javascript:void(0)"><em>专栏</em></a>
                        <div class="i_num">
                            <ul><?php $__TAG__ = '{"ids":"5","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                                <li><a href="<?php echo mac_url_type($vo); ?>"><i class="icon icon-n-activity"></i><b>电影资讯</b></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                <li><a href="<?php echo mac_url_topic_index(); ?>"><i class="icon icon-n-gc"></i><b>影视专题</b></a></li><li><a href="<?php echo mac_url('label/live'); ?>"><i class="icon icon-n-new"></i><b>在线电视</b></a></li>
                                <li><a href="<?php echo mac_url('rss/baidu'); ?>"><i class="icon icon-n-h"></i><b>网站地图</b></a></li>
                                <li><a href="javascript:;"><i class="icon icon-n-mango"></i><b>等待添加</b></a></li>
                            </ul>
                            <div class="square-pmt-field">
                                <div class="square-pmt-item" title="活动">
                                    <a href="<?php echo mac_url_topic_index(); ?>">
                                        <img src="https://ae01.alicdn.com/kf/HTB1CLdsVzDpK1RjSZFrq6y78VXa0.jpg">
                                    </a>
                                </div>
                                <div class="square-pmt-item" title="话题">
                                    <a href="<?php echo mac_url_topic_index(); ?>">
                                        <img src="https://ae01.alicdn.com/kf/HTB1ZRNwVrPpK1RjSZFFq6y5PpXag.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="m-i m-i-live m-i-last animate-bounce-up"><a class="i-link i-live" href="<?php echo mac_url('label/live'); ?>"><em>直播</em></a></li>
                    
                </ul>
				<span class="sitenav-on"><i class="icon-list"></i></span>

                <div class="menu-r">
                    <a id="mobile_p" class="mobile-p" href="#" target="_blank">
                        <div class="mobile-p-box">
                            <div class="mobile-p-qrcode"></div>
                        </div>
                    </a>
                    <a href="/vod/search/wd/魔法禁书.html" title="美琴" class="random-p">
                        <img src="//i2.hdslb.com/bfs/active/0105560c89d1453d3f9653e92450e0d7a9738415.gif" alt="">
                    </a>
                </div>
                <div class="search">
                    <form action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();" id="searchform" method="post">
                        <input id="wd" type="text" class="search-keyword wd mac_wd" id="search-keyword" autocomplete="off" name="wd" accesskey="s" onclick="chkblk(this)" value="" <?php if($maccms['aid']==13): ?><?php echo $param['wd']; endif; ?> " placeholder="输入关键词,请少字也别错字... " value=" ">
                        <button id="button " type="submit " class="search-submit "  target="_blank " ></button>
                    </form>
					<a class="link-ranking " href="<?php echo mac_url( 'label/rank'); ?> "><span>排行榜</span></a>
				</div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="layout clearfix">
	<div class="reg-w">
		<form method="post" id="fm" action="">
			<h4>账户信息</h4>没有账号？<a id="i_menu_register_btn" class="i-link reg" href="<?php echo mac_url('user/reg'); ?>"><span>注册</span></a>一个<br><br>
			<div class="reg-group">
				<label class="bd-r" style="letter-spacing: normal;">账号</label>
				<input type="text" id="user_name" name="user_name" class="reg-control" placeholder="请输入您的登录账号">
			</div>
			<div class="reg-group">
				<label>密码</label>
				<input type="password" id="user_pwd" name="user_pwd" class="reg-control" placeholder="请输入您的登录密码">
			</div>
			<div class="reg-group">
				<label>验证码</label>
				<input type="text" class="reg-control w150" id="verify" name="verify" placeholder="请输入验证码">
				<img class="fr mr10 mt10" id="verify_img" src="<?php echo url('verify/index'); ?>" onClick="this.src=this.src+'?'"  alt="单击刷新" />
			</div>
			<input type="button" id="btn_submit" class="btn-brand btn-sub" value="立即登录">
		</form>
	</div>
	<div class="reg-another">
		<h5>注册通行证可享会员服务</h5>
		<h5>收费影片</h5>
		<h5>会员影片</h5>
		<h5>特殊影片</h5>
		<h5>你还可以用以下方式直接登录：</h5>
		<?php if($GLOBALS['config']['connect']['qq']['status'] == 1): endif; if($GLOBALS['config']['connect']['weixin']['status'] == 1): endif; ?>
		<a href="<?php echo url('user/oauth'); ?>?type=qq"><img src="<?php echo $maccms['path_tpl']; ?>images/user/qq_login.gif" alt=""/></a>
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
			if ($('#verify').val()  == '') { alert('请输入验证码！'); $("#verify").focus(); return false; }

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

</body>
</html>