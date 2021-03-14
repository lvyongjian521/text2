<?php if (!defined('THINK_PATH')) exit(); /*a:18:{s:32:"template/b/html/index/index.html";i:1611287983;s:49:"/home/bae/app/template/b/html/public/include.html";i:1611287983;s:45:"/home/bae/app/template/b/html/jdyzm/head.html";i:1611287983;s:47:"/home/bae/app/template/b/html/jdyzm/banner.html";i:1611287983;s:44:"/home/bae/app/template/b/html/jdyzm/hot.html";i:1611287983;s:45:"/home/bae/app/template/b/html/jdyzm/week.html";i:1611287983;s:46:"/home/bae/app/template/b/html/list/lists2.html";i:1611287983;s:45:"/home/bae/app/template/b/html/jdyzm/more.html";i:1611287983;s:46:"/home/bae/app/template/b/html/jdyzm/show1.html";i:1611287983;s:46:"/home/bae/app/template/b/html/list/lists3.html";i:1611287983;s:46:"/home/bae/app/template/b/html/list/lists1.html";i:1611287983;s:45:"/home/bae/app/template/b/html/list/lists.html";i:1611287983;s:46:"/home/bae/app/template/b/html/jdyzm/show2.html";i:1611287983;s:46:"/home/bae/app/template/b/html/jdyzm/show3.html";i:1611287983;s:46:"/home/bae/app/template/b/html/jdyzm/show4.html";i:1611287983;s:48:"/home/bae/app/template/b/html/jdyzm/tiplist.html";i:1611287983;s:46:"/home/bae/app/template/b/html/public/foot.html";i:1611287983;s:48:"/home/bae/app/template/b/html/jdyzm/footerb.html";i:1611287983;}*/ ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <title><?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
    <meta name="description" content="<?php echo $maccms['site_description']; ?>" />
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

 <div id="container" class="index">

   <div class="container">

<!-- 幻灯片推荐 -->

            <section class="section" id="banner" name="【top】轮播+6个推荐">

			<!-- 幻灯片 -->

<style>

ul{margin: 0;padding: 0;list-style: none;}

.carousel-content{width:440px;height: 220px;position: relative;display: inline-block;float:left;border-radius: 4px;overflow: hidden;position: relative;margin: 15px 0 17px 0;}

.carousel{width: 100%;height: 100%;overflow: hidden;}

.carousel li{top:0;left:0;position: absolute;display: none;}

.carousel li,.carousel li img{width: auto;height: 100%;}

.img-index{position: absolute;text-align: center;bottom: 8px;right: 8px;font-size: 0;}

.img-index li{float: left;width: 10px;height: 10px;line-height: 18px;text-align: center;border-radius: 10px;background-color: #fff;-font-size: 12px;cursor: pointer;margin: 0 5px;color: #fff0;}

.img-index li.index{background-position: -855px -727px;width: 18px;height: 18px;background-color: transparent;transition: none;background-image: url(/template/b/images/icons.png);margin-top: -4px;}

.img-index li:hover{background-color: rgb(0, 161, 214);}

.carousel-prev,.carousel-next{position: absolute;display: inline-block;top: 40%;cursor: pointer;}

.carousel-prev{left: 0;}

.carousel-next{right: 0;}

.caption{position: absolute;z-index: 2;font-size: 14px;color: #fff;bottom: 6px;padding: 0px 20px;}

.pic{width: 440px;height: 220px;position: relative;}

</style>

               

	<div class="carousel-content"style="background-color: #f5f5f5;">

		<ul class="carousel"><?php $__TAG__ = '{"num":"'.$yzm['home']['banner']['value'].'","level":"'.$yzm['home']['banner']['level'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

      	   	<li><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank"  title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><div class="pic" style="background: url(<?php echo $vo['vod_pic_slide']; ?>) no-repeat center rgba(0,0,0,0);background-size: cover;"></div></a><p class="caption">〓<?php echo $vo['vod_name']; ?>〓 <?php echo $vo['vod_remarks']; ?></p></li><?php endforeach; endif; else: echo "" ;endif; ?>

		</ul>

		<ul class="img-index"></ul>

		<!--div class="carousel-prev"><img src="<?php echo $maccms['path_tpl']; ?>images/1.png"></div>

		<div class="carousel-next"><img src="<?php echo $maccms['path_tpl']; ?>images/2.png"></div-->

	</div>

                 

            <!-- 6个推荐 -->

                <div class="slader-r" style=" width: 720px;">

                    <ul><?php $__TAG__ = '{"num":"8","level":"'.$yzm['home']['banner']['right'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                       <div class="groom-module home-card">

                       	<a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>">

                       			<!--div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div-->
<div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div>                           	

		            		<div class="card-mark">

                            	<p class="title"><?php echo $vo['vod_name']; ?></p>

                            	<p class="author">UP：<?php if($vo['vod_serial'] > 0): ?>更新至 第<?php echo $vo['vod_serial']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>

                            	<p class="play"><span class="pull-left"><i class="iconfont">&#xe732;</i><?php echo $vo['vod_hits']; ?></span><span class="pull-right"><i class="iconfont">&#xe612;</i><?php echo date('m-d',$vo['vod_time']); ?></span></span></p>

		                	</div>

                       	</a>

					   </div><?php endforeach; endif; else: echo "" ;endif; ?>

					</ul>

                </div>

            </section>

<!-- 热门推荐 -->
<?php if($yzm['home']['hot']['state']==1): ?>
            <section class="section" name="【hot】最热榜+1个活动位"> 

               <div class="column-rgt">
		          <div class="r-con"><div class="online"><a href="#" target="_blank" title="视频总数">视频总数：<?php echo mac_data_count('all'); ?></a><em></em><a href="#"target="_blank">今日更新：<?php echo mac_data_count(all,'today','vod'); ?></a></div></div>
                     <div name="活动位" class="pic-box"><?php echo $yzm['home']['ad']['ad_1']?></div>
                </div>
                  <div class="column-lft"><h3 class="sort_nav_tit"><i class="icon ico_hot"></i><span><?php echo $yzm['home']['hot']['title']?></span><b><?php echo $yzm['pc_gonggao']?></b></h3>

                    <div class="sort_lst_bx" id="movie_content_div">

                      <ul class="sort_lst" style=""><!--{maccms:vod num="10" type="all" order="desc" by="day"}-->
					  <?php if($yzm['home']['hot']['rnd']==1): $__TAG__ = '{"num":"5","type":"all","order":"desc","by":"rnd","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                           <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div><div class="play_hv"><?php echo date('m-d',$vo['vod_time']); ?></div><div class="play_hv2"><i class="iconfont">&#xe62d;</i></div><div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?><div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?> <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?> <div class="play_hv3 xhot"></div><?php endif; ?><div class="space-danmaku"></div></a><figcaption class="block-title"><b><?php echo $vo['vod_name']; ?></b><p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; else: ?><?php echo $vo['vod_remarks']; endif; ?></p><p class="block-clearfix"><?php echo $vo['vod_actor']; ?></p></figcaption></li><?php endforeach; endif; else: echo "" ;endif; else: $__TAG__ = '{"num":"5","level":"'.$yzm['home']['hot']['level'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                           <li><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div><div class="play_hv"><?php echo date('m-d',$vo['vod_time']); ?></div><div class="play_hv2"><i class="iconfont">&#xe62d;</i></div><div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?><div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?> <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?> <div class="play_hv3 xhot"></div><?php endif; ?><div class="space-danmaku"></div></a><figcaption class="block-title"><b><?php echo $vo['vod_name']; ?></b><p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; else: ?><?php echo $vo['vod_remarks']; endif; ?></p><p class="block-clearfix"><?php echo $vo['vod_actor']; ?></p></figcaption></li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                      </ul>

                    </div>
                  </div>
            </section>
<?php endif; ?>
<!-- 新番更新 -->
<?php if($yzm['home']['week']['state']==1): ?>
<section class="section" name="【0】新番更新+榜单">
                <div class="column-lft" id="week" >
         			<div class="sort_nav ">
       						        <h3 class="sort_nav_tit"><i class="icon icon_t icon-dvbox"></i><span>新番节目表</span></h3>
               						<div class="tab-title" id="mytabsweek">
									<li class="item"><a href="javascript:void(0);">最新</a></li>
									<li class="item "><a href="javascript:void(0);">一</a></li>
									<li class="item "><a href="javascript:void(0);">二</a></li>
									<li class="item "><a href="javascript:void(0);">三</a></li>
									<li class="item "><a href="javascript:void(0);">四</a></li>
									<li class="item"><a href="javascript:void(0);">今天</a></li>
									<li class="item "><a href="javascript:void(0);">六</a></li>
									<li class="item "><a href="javascript:void(0);">日</a></li>
									</div>				    
									<div class="tab-cont" id="mytabweek"><li class="item cur"><ul class="tab-content">
									<div id="loader" style="width: 387;margin: 0 auto;">
									<img src="/template/b/images/bgm-loading.png">
									</div></ul></li>
									
									
						    </div>
                    </div>

                </div>
                <div class="column-rgt">
                    <div class="section_aside_tit sort_nav">
                        <h3>热播榜</h3>
                        <div class="module-tab"><a class="aMore" href="<?php echo mac_url( 'label/rank'); ?> target="_blank""><span class="more">更多<i class="icon"></i></span></a></div>                    </div>
                    <div class="module-box" id="mytab6r">
                        <ul><?php $__TAG__ = '{"num":"7","type":"all","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key == 1): ?><li class="first"><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><i><?php echo $key; ?></i><div class="first-title"><b><?php echo $vo['vod_name']; ?></b></div><img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"></a></li><?php else: ?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>"><?php echo $vo['vod_name']; ?> &nbsp;&nbsp;<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></a><!--span><?php echo date('m-d',$vo['vod_time']); ?></span--></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>                        </ul>
                        <?php $__TAG__ = '{"ids":"4","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" target="_blank" class="more-link" style=" display: block; height: 24px; line-height: 24px; background-color: #e5e9ef; text-align: center; border: 1px solid #e0e6ed; color: #222; border-radius: 4px; transition: .2s;">查看更多&nbsp;＞</a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
</section>



<?php endif; ?>
<!-- 视频列表 -->
<?php if($yzm['home']['show1']['state']==1): ?>
            <!-- 热播电影 -->
            <section class="section" name="【1】<?php echo $yzm['home']['show1']['title']?>+榜单" id="1">
                <div class="column-rgt">
                    <div class="section_aside_tit sort_nav">
                        <h3><?php echo $yzm['home']['show1']['title']?>播榜</h3>
                        <div class="module-tab pull-right" id="mytabs2r"><span class="active">日榜</span><span>周榜</span><span>总榜</span></div>
                    </div>
                    <div class="module-box" id="mytab2r">
                        <ul><?php $__TAG__ = '{"num":"7","type":"'.$yzm['home']['show1']['type'].'","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key == 1): ?><li class="first"><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><i><?php echo $key; ?></i><div class="first-title"><b><?php echo $vo['vod_name']; ?></b></div><img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"></a></li><?php else: ?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>"><?php echo $vo['vod_name']; ?> &nbsp;&nbsp;<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></a><!--span><?php echo date('m-d',$vo['vod_time']); ?></span--></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>                        </ul>
                        <ul class="dn"><?php $__TAG__ = '{"num":"8","type":"'.$yzm['home']['show1']['type'].'","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>"><?php echo $vo['vod_name']; ?>&nbsp;&nbsp;<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>                        </ul>
                        <ul class="dn"><?php $__TAG__ = '{"num":"8","type":"'.$yzm['home']['show1']['type'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>"><?php echo $vo['vod_name']; ?>&nbsp;&nbsp;<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>                       </ul>
                        <?php $__TAG__ = '{"ids":"'.$yzm['home']['show1']['type'].'","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" target="_blank" class="more-link" style=" display: block; height: 24px; line-height: 24px; background-color: #e5e9ef; text-align: center; border: 1px solid #e0e6ed; color: #222; border-radius: 4px; transition: .2s;">查看更多&nbsp;＞</a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="column-lft">
                    <div class="sort_nav">
                        <h3 class="sort_nav_tit"><i class="icon icon_t icon-mvbox"></i><span><?php echo $yzm['home']['show1']['title']?></span></h3>
                        <div class="sort_nav_bx">
                            <div class="module-tab pull-left" id="mytabs3"><span class="active">最新更新</span><span id="tuijian">小编推荐</span></div>
                            <div class="module-tab"><?php $__TAG__ = '{"ids":"'.$yzm['home']['show1']['type'].'","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a class="aMore" href="<?php echo mac_url_type($vo); ?>"><?php endforeach; endif; else: echo "" ;endif; ?><span class="update">今日更新<b><?php echo mac_data_count(''.$yzm['home']['show1']['type'].'','today','vod'); ?></b>部</span><span class="more">更多<i class="icon"></i></span></a></div>
                        </div>
                    </div>
                    <div class="sort_lst_bx" id="mytab3">
                        <ul class="sort_lst"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show1']['type'].'","order":"desc","by":"'.$yzm['home']['show1']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li>

    <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>">

        <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'"  data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
       <div class="play_hv"><?php echo $vo['vod_year']; ?></div>

        <div class="play_hv2"><i class="iconfont"></i>

        </div>

        <div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?>

        <div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?>

        <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?>

        <div class="play_hv3 xhot"></div><?php endif; ?>

        <div class="space-danmaku"></div>

    </a>

    <figcaption class="block-title"><b>【<?php echo date('m-d',$vo['vod_time']); ?>】<?php echo $vo['vod_name']; ?></b>

        <p class="otherinfo"><i class="iconfont"></i><?php echo $vo['vod_blurb']; ?></p>

        <p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>

    </figcaption>

</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <ul class="sort_lst dn"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show1']['type'].'","order":"desc","by":"sort","level":"all","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li>

    <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>">

        <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'"  data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
       <div class="play_hv"><?php echo $vo['vod_year']; ?></div>

        <div class="play_hv2"><i class="iconfont"></i>

        </div>

        <div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?>

        <div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?>

        <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?>

        <div class="play_hv3 xhot"></div><?php endif; ?>

        <div class="space-danmaku"></div>

    </a>

    <figcaption class="block-title"><b>【<?php echo date('m-d',$vo['vod_time']); ?>】<?php echo $vo['vod_name']; ?></b>

        <p class="otherinfo"><i class="iconfont"></i><?php echo $vo['vod_blurb']; ?></p>

        <p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>

    </figcaption>

</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </section>
<?php endif; if($yzm['home']['show2']['state']==1): ?>
            <!-- 热播电视剧 -->
            <section class="section" name="【2】<?php echo $yzm['home']['show2']['title']?>+榜单" id="2">
                <div class="column-rgt">
                    <div class="section_aside_tit sort_nav">
                        <h3><?php echo $yzm['home']['show2']['title']?>热播榜</h3>
                        <div class="module-tab pull-right" id="mytabs3r"><span class="active">日榜</span><span>周榜</span><span>总榜</span></div>
                    </div>
                    <div class="module-box" id="mytab3r">
                        <ul><?php $__TAG__ = '{"num":"8","type":"'.$yzm['home']['show2']['type'].'","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key == 1): ?><li class="first"><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><i><?php echo $key; ?></i><div class="first-title"><b><?php echo $vo['vod_name']; ?></b></div><img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"></a></li><?php else: ?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>"><?php echo $vo['vod_name']; ?> &nbsp;&nbsp;<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></a><!--span><?php echo date('m-d',$vo['vod_time']); ?></span--></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>                        </ul>
                        <ul class="dn"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show2']['type'].'","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>"><?php echo $vo['vod_name']; ?>&nbsp;&nbsp;<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>                        </ul>
                        <ul class="dn"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show2']['type'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>"><?php echo $vo['vod_name']; ?>&nbsp;&nbsp;<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>                       </ul>
                        <?php $__TAG__ = '{"ids":"'.$yzm['home']['show2']['type'].'","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" target="_blank" class="more-link" style=" display: block; height: 24px; line-height: 24px; background-color: #e5e9ef; text-align: center; border: 1px solid #e0e6ed; color: #222; border-radius: 4px; transition: .2s;">查看更多&nbsp;＞</a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="column-lft">
                    <div class="sort_nav">
                        <h3 class="sort_nav_tit"><i class="icon icon_t icon-teleplay"></i><span><?php echo $yzm['home']['show2']['title']?></span></h3>
                        <div class="sort_nav_bx">
                            <div class="module-tab pull-left" id="mytabs2"><span class="active">最新更新</span><?php $__TAG__ = '{"ids":"'.$yzm['home']['show2']['type1'].','.$yzm['home']['show2']['type2'].','.$yzm['home']['show2']['type3'].','.$yzm['home']['show2']['type4'].'","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><span><?php echo $vo['type_name']; ?></span><?php endforeach; endif; else: echo "" ;endif; ?></div>
                            <div class="module-tab"><?php $__TAG__ = '{"ids":"'.$yzm['home']['show2']['type'].'","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a class="aMore" href="<?php echo mac_url_type($vo); ?>"><?php endforeach; endif; else: echo "" ;endif; ?><span class="update">今日更新<b><?php echo mac_data_count(''.$yzm['home']['show2']['type'].'','today','vod'); ?></b>部</span><span class="more">更多<i class="icon"></i></span></a></div>
                        </div>
                    </div>
                    <div class="sort_lst_bx" id="mytab2">
                        <ul class="sort_lst"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show2']['type'].'","order":"desc","by":"'.$yzm['home']['show2']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li>

    <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>">

        <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'"  data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
       <div class="play_hv"><?php echo $vo['vod_year']; ?></div>

        <div class="play_hv2"><i class="iconfont"></i>

        </div>

        <div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?>

        <div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?>

        <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?>

        <div class="play_hv3 xhot"></div><?php endif; ?>

        <div class="space-danmaku"></div>

    </a>

    <figcaption class="block-title"><b>【<?php echo date('m-d',$vo['vod_time']); ?>】<?php echo $vo['vod_name']; ?></b>

        <p class="otherinfo"><i class="iconfont"></i><?php echo $vo['vod_blurb']; ?></p>

        <p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>

    </figcaption>

</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <ul class="sort_lst dn"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show2']['type1'].'","order":"desc","by":"'.$yzm['home']['show2']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li>

    <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>">

        <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'"  data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
       <div class="play_hv"><?php echo $vo['vod_year']; ?></div>

        <div class="play_hv2"><i class="iconfont"></i>

        </div>

        <div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?>

        <div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?>

        <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?>

        <div class="play_hv3 xhot"></div><?php endif; ?>

        <div class="space-danmaku"></div>

    </a>

    <figcaption class="block-title"><b>【<?php echo date('m-d',$vo['vod_time']); ?>】<?php echo $vo['vod_name']; ?></b>

        <p class="otherinfo"><i class="iconfont"></i><?php echo $vo['vod_blurb']; ?></p>

        <p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>

    </figcaption>

</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <ul class="sort_lst dn"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show2']['type2'].'","order":"desc","by":"'.$yzm['home']['show2']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li>

    <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>">

        <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'"  data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
       <div class="play_hv"><?php echo $vo['vod_year']; ?></div>

        <div class="play_hv2"><i class="iconfont"></i>

        </div>

        <div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?>

        <div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?>

        <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?>

        <div class="play_hv3 xhot"></div><?php endif; ?>

        <div class="space-danmaku"></div>

    </a>

    <figcaption class="block-title"><b>【<?php echo date('m-d',$vo['vod_time']); ?>】<?php echo $vo['vod_name']; ?></b>

        <p class="otherinfo"><i class="iconfont"></i><?php echo $vo['vod_blurb']; ?></p>

        <p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>

    </figcaption>

</li><?php endforeach; endif; else: echo "" ;endif; ?>
                       </ul>
                        <ul class="sort_lst dn"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show2']['type3'].'","order":"desc","by":"'.$yzm['home']['show2']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li>

    <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>">

        <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'"  data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
       <div class="play_hv"><?php echo $vo['vod_year']; ?></div>

        <div class="play_hv2"><i class="iconfont"></i>

        </div>

        <div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?>

        <div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?>

        <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?>

        <div class="play_hv3 xhot"></div><?php endif; ?>

        <div class="space-danmaku"></div>

    </a>

    <figcaption class="block-title"><b>【<?php echo date('m-d',$vo['vod_time']); ?>】<?php echo $vo['vod_name']; ?></b>

        <p class="otherinfo"><i class="iconfont"></i><?php echo $vo['vod_blurb']; ?></p>

        <p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>

    </figcaption>

</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <ul class="sort_lst dn"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show2']['type4'].'","order":"desc","by":"'.$yzm['home']['show2']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                           <li>

    <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>">

        <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'"  data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
       <div class="play_hv"><?php echo $vo['vod_year']; ?></div>

        <div class="play_hv2"><i class="iconfont"></i>

        </div>

        <div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?>

        <div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?>

        <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?>

        <div class="play_hv3 xhot"></div><?php endif; ?>

        <div class="space-danmaku"></div>

    </a>

    <figcaption class="block-title"><b>【<?php echo date('m-d',$vo['vod_time']); ?>】<?php echo $vo['vod_name']; ?></b>

        <p class="otherinfo"><i class="iconfont"></i><?php echo $vo['vod_blurb']; ?></p>

        <p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>

    </figcaption>

</li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                     </div>
                </div>
            </section>
<?php endif; if($yzm['home']['show3']['state']==1): ?>
            <!-- 热播综艺 -->
            <section class="section" name="【3】<?php echo $yzm['home']['show3']['title']?>+榜单" id="3">
                <div class="column-rgt">
                    <div class="section_aside_tit sort_nav">
                        <h3><?php echo $yzm['home']['show3']['title']?>热播榜</h3>
                        <div class="module-tab pull-right" id="mytabs4r"><span class="active">日榜</span><span>周榜</span><span>总榜</span></div>
                    </div>
                    <div class="module-box" id="mytab4r">
                        <ul><?php $__TAG__ = '{"num":"6","type":"'.$yzm['home']['show3']['type'].'","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key == 1): ?><li class="first"><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><i><?php echo $key; ?></i><div class="first-title"><b><?php echo $vo['vod_name']; ?></b></div><img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"></a></li><?php else: ?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>"><?php echo $vo['vod_name']; ?> &nbsp;&nbsp;<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></a><!--span><?php echo date('m-d',$vo['vod_time']); ?></span--></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <ul class="dn"><?php $__TAG__ = '{"num":"8","type":"'.$yzm['home']['show3']['type'].'","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>"><?php echo $vo['vod_name']; ?>&nbsp;&nbsp;<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <ul class="dn"><?php $__TAG__ = '{"num":"8","type":"'.$yzm['home']['show3']['type'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>"><?php echo $vo['vod_name']; ?>&nbsp;&nbsp;<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                         <?php $__TAG__ = '{"ids":"'.$yzm['home']['show3']['type'].'","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" target="_blank" class="more-link" style=" display: block; height: 24px; line-height: 24px; background-color: #e5e9ef; text-align: center; border: 1px solid #e0e6ed; color: #222; border-radius: 4px; transition: .2s;">查看更多&nbsp;＞</a></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="module-bottom clearfix"><?php echo $yzm['home']['ad']['ad_2']?></div>
                </div>
                <div class="column-lft">
                    <div class="sort_nav">
                        <h3 class="sort_nav_tit"><i class="icon icon_t icon-evbox"></i><span><?php echo $yzm['home']['show3']['title']?></span></h3>
                        <div class="sort_nav_bx">
                            <div class="module-tab pull-left" id="mytabs"><span class="active">最新更新</span><?php $__TAG__ = '{"num":"3","type":"'.$yzm['home']['show3']['type'].'","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><em><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><?php echo $vo['vod_name']; ?></a></em><?php endforeach; endif; else: echo "" ;endif; ?></div>
                            <div class="module-tab"><?php $__TAG__ = '{"ids":"'.$yzm['home']['show3']['type'].'","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a class="aMore" href="<?php echo mac_url_type($vo); ?>"><?php endforeach; endif; else: echo "" ;endif; ?><span class="update">今日更新<b><?php echo mac_data_count(''.$yzm['home']['show3']['type'].'','today','vod'); ?></b>部</span><span class="more">更多<i class="icon"></i></span></a></div>
                        </div>
                    </div>
                    <div class="sort_lst_bx" id="mytab">
                        <ul class="sort_lst"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show3']['type'].'","order":"desc","by":"'.$yzm['home']['show3']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                             <li>

    <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>">

        <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'"  data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
       <div class="play_hv"><?php echo $vo['vod_year']; ?></div>

        <div class="play_hv2"><i class="iconfont"></i>

        </div>

        <div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?>

        <div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?>

        <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?>

        <div class="play_hv3 xhot"></div><?php endif; ?>

        <div class="space-danmaku"></div>

    </a>

    <figcaption class="block-title"><b>【<?php echo date('m-d',$vo['vod_time']); ?>】<?php echo $vo['vod_name']; ?></b>

        <p class="otherinfo"><i class="iconfont"></i><?php echo $vo['vod_blurb']; ?></p>

        <p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>

    </figcaption>

</li><?php endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                    </div>
                </div>
            </section>
<?php endif; if($yzm['home']['show4']['state']==1): ?>
            <!-- 热播动漫 -->

            <section class="section" name="【4】<?php echo $yzm['home']['show4']['title']?>+榜单" id="4">

                <div class="column-rgt">

                    <div class="section_aside_tit sort_nav">

                        <h3><?php echo $yzm['home']['show4']['title']?>热播榜</h3>

                        <div class="module-tab pull-right" id="mytabs5r"><span class="active">日榜</span><span>周榜</span><span>总榜</span></div>

                    </div>

                    <div class="module-box" id="mytab5r">

                        <ul><?php $__TAG__ = '{"num":"6","type":"'.$yzm['home']['show4']['type'].'","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><?php echo $vo['vod_name']; ?></a><span><?php echo date('m-d',$vo['vod_time']); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                        <ul class="dn"><?php $__TAG__ = '{"num":"6","type":"'.$yzm['home']['show4']['type'].'","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><?php echo $vo['vod_name']; ?></a><span><?php echo date('m-d',$vo['vod_time']); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                        <ul class="dn"><?php $__TAG__ = '{"num":"6","type":"'.$yzm['home']['show4']['type'].'","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><?php echo $vo['vod_name']; ?></a><span><?php echo date('m-d',$vo['vod_time']); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                    </div>

                    <div class="module-bottom clearfix"><?php $__TAG__ = '{"ids":"'.$yzm['home']['show4']['type'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>

                        <ul><?php $_601e19280e98d=explode(',',$vo1['type_extend']['class']); if(is_array($_601e19280e98d) || $_601e19280e98d instanceof \think\Collection || $_601e19280e98d instanceof \think\Paginator): if( count($_601e19280e98d)==0 ) : echo "" ;else: foreach($_601e19280e98d as $key2=>$vo2): ?>

                            <li><a href="<?php echo mac_url_type($vo1,['class'=>$vo2],'show'); ?>"><?php echo $vo2; ?></a></li>

                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul><?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>

                </div>

                <div class="column-lft">

                    <div class="sort_nav">

                        <h3 class="sort_nav_tit"><i class="icon icon_t icon-dvbox"></i><span><?php echo $yzm['home']['show4']['title']?></span></h3>

                        <div class="sort_nav_bx">

                            <div class="module-tab pull-left" id="mytabs"><span class="active">最新<?php echo $yzm['home']['show4']['title']?></span><?php $__TAG__ = '{"num":"3","type":"'.$yzm['home']['show4']['type'].'","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><em><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><?php echo $vo['vod_name']; ?></a></em><?php endforeach; endif; else: echo "" ;endif; ?></div>

                            <div class="module-tab"><?php $__TAG__ = '{"ids":"'.$yzm['home']['show4']['type'].'","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a class="aMore" href="<?php echo mac_url_type($vo); ?>"><?php endforeach; endif; else: echo "" ;endif; ?><span class="update">今日更新<b><?php echo mac_data_count(''.$yzm['home']['show4']['type'].'','today','vod'); ?></b>部</span><span class="more">更多<i class="icon"></i></span></a></div>

                        </div>

                    </div>

                    <div class="sort_lst_bx" id="mytab">

                        <ul class="sort_lst"><?php $__TAG__ = '{"num":"10","type":"'.$yzm['home']['show4']['type'].'","order":"desc","by":"'.$yzm['home']['show4']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                            <li>

    <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>">

        <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'"  data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>">
       <div class="play_hv"><?php echo $vo['vod_year']; ?></div>

        <div class="play_hv2"><i class="iconfont"></i>

        </div>

        <div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?>

        <div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?>

        <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?>

        <div class="play_hv3 xhot"></div><?php endif; ?>

        <div class="space-danmaku"></div>

    </a>

    <figcaption class="block-title"><b>【<?php echo date('m-d',$vo['vod_time']); ?>】<?php echo $vo['vod_name']; ?></b>

        <p class="otherinfo"><i class="iconfont"></i><?php echo $vo['vod_blurb']; ?></p>

        <p class="otherinfo"><?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>话<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></p>

    </figcaption>

</li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                    </div>

                </div>

            </section>
<?php endif; ?>
 <!-- 悬浮列表 -->
<?php if($yzm['home']['xuanfu']['state']==1): ?>
<div class="elevator-module" id="sideBar">
<style>
.elevator-module{position:fixed;z-index:10;left:50%;top:248px;margin-left:610px;transition:top .3s}
@media screen and (max-width:1400px){.elevator-module{margin-left:590px}}
.elevator-module.edit-state{z-index:10001}
.elevator-module .nav-bg{opacity:0;top:-15px;right:0;height:100%;padding-bottom:20px;width:60px;position:absolute;background:hsla(0,0%,100%,.8);border-radius:4px;overflow:hidden;transition:all .3s cubic-bezier(.68,-.55,.27,1.55)}
.elevator-module .nav-list{position:relative;background-color:#f6f9fa;border:1px solid #e5e9ef;overflow:hidden;border-radius:4px}
.elevator-module .nav-list .item{width:48px;height:32px;line-height:32px;text-align:center;transition:background-color .3s,color .3s;cursor:pointer;-ms-user-select:none;user-select:none}
.elevator-module .nav-list .item p{width: 24px;white-space: nowrap;overflow: hidden;margin-left:12px;}
.elevator-module .nav-list .item.select{position:absolute;z-index:1;background-color:#00a1d6;color:#fff}
.elevator-module .nav-list .item.on,.elevator-module .nav-list .item:hover{background-color:#00a1d6;color:#fff}
.elevator-module .nav-list .customize{height:38px;line-height:20px;padding:8px 0;border-top:1px solid #e5e9ef}
.elevator-module .nav-list .customize:hover{color:#fff}
.elevator-module .nav-list .customize:hover .icon{background-position:-727px -151px}
.elevator-module .nav-list .customize .icon{display:block;margin:0 auto 4px;background-position:-663px -151px;height:18px;width:18px}
.elevator-module .s-line{position:relative;border-left:1px solid #ddd;border-right:1px solid #ddd;height:9px;width:30px;margin:0 auto}
.elevator-module .back-top{width: 48px;position:relative;display:block;cursor:pointer;height:48px;background-position:-648px -72px;background-color:#f6f9fa;border:1px solid #e5e9ef;overflow:hidden;border-radius:4px}
.elevator-module .back-top:hover{background-color:#00a1d6;background-position:-714px -72px;border-color:#00a1d6}
.elevator-module .app-download{position:relative;width:50px;height:70px}
.elevator-module .app-download .app-icon{position:absolute;left:-15px;width:80px;height:80px;background-image:url(//s1.hdslb.com/bfs/static/jinkela/home/asserts/app-download.png)}
.elevator-module .app-download .app-tips-icon{display:none;position:absolute;left:-110px;top:-20px;width:106px;height:44px;background-image:url(//s1.hdslb.com/bfs/static/jinkela/home/asserts/app-download-tips.png)}
</style>
	<div class="nav-bg">
		<div class="tips-img"></div>
	</div>
	<div class="nav-list">
		<a rel="nofollow" href="#1"><p class="item sortable">番剧</p></a>
		<a rel="nofollow" href="#2"><p class="item sortable">动漫</p></a>
		<a rel="nofollow" href="#3"><p class="item sortable">剧场</p></a>
		<a rel="nofollow" href="#4"><p class="item sortable">TV剧</p></a>
		<?php $__TAG__ = '{"ids":"6,7,8,9,10,11,12,13,14,15,16,17,18,23,24","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a href="<?php echo mac_url_type($vo); ?>"><div class="item" href="<?php echo mac_url_type($vo); ?>"><p><?php echo $vo['type_name']; ?></p></div></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
		<a href="<?php echo mac_url('label/live'); ?>"><div class="item"><p>直播</p></div></a>
		<div class="item customize"><i class="icon"></i>列表</div>		
	</div>
	<div class="s-line"></div>
    <div class="back-top icon"></div>
	<div class="app-download">
		<a href="https://www.lanzous.com/b522505/" target="_blank">
			<div id="elevator-mobile-app" class="app-icon">
			</div>
			<div class="app-tips-icon"></div>
		</a>
	</div>
</div>
    <div class="back-top icon" id="backTop" onclick="pageScroll()"></div>



<?php endif; ?>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/appdown.js"></script>   

 </div>

<!-- 页脚 -->
<div class="footer bili-footer report-wrap-module">
<div id="footer"></div>
	<div class="footer-wrp">
		<div class="footer-cnt clearfix report-wrap-module">
			<ul class="boston-postcards">
				<li class="link">
					<div class="tips">
						<?php echo $maccms['site_name']; ?>
					</div>
					<div class="cards">
						<a target="_blank" href="#">
							关于我们
						</a>
					</div>
					<div class="cards">
						<a target="_blank" href="<?php echo mac_url('gbook/index'); ?>">
							联系我们
						</a>
					</div>
					<div class="cards">
						<a target="_blank" href="<?php echo mac_url('gbook/index'); ?>">
							加入我们
						</a>
					</div>
					<div class="cards">
						<a target="_blank" href="<?php echo mac_url('gbook/index'); ?>">
							求片留言
						</a>
					</div>
					<div class="cards">
						<a target="_blank" href="<?php echo mac_url('rss/index'); ?>">
							RSS订阅
						</a>
					</div>
					<div class="cards">
						<a target="_blank" href="#">
							Investor Relations
						</a>
					</div>
				</li>
				<li class="links">
					<div class="tips">
						友情链接
					</div><?php $__TAG__ = '{"num":"10","type":"all","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<div class="cards">
						<a target="_blank" href="<?php echo $vo['link_url']; ?>">
							<?php echo $vo['link_name']; ?>
						</a>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
					<div class="cards">
						<a target="_blank" href="#">
							帮助中心
						</a>
					</div>
					<div class="cards">
						<a target="_blank" href="<?php echo mac_url('gbook/index'); ?>">
							侵权申诉
						</a>
					</div>
				
				</li>
				<li class="over">
					<div class="block right">
						<a href="/">
							<div class="phone">
								<div class="pic" id="footer-mobile-app">
								</div>
								<em style="bottom: -12px;">
									客户端下载<br>(Android)
								</em>
								<div class="qrcode-box-wrp">
									<div class="qrcode-box qrcode-app">
										<div class="qrcode-box-arrow">
										</div>
									</div>
								</div>
							</div>
						</a>
						<a target="_blank" href="#">
							<div class="weibo">
								<div class="pic" id="footer-mobile-app">
								</div>
								<em>
									新浪微博
								</em>
								<div class="qrcode-box-wrp">
									<div class="qrcode-box qrcode-app">
										<div class="qrcode-box-arrow">
										</div>
									</div>
								</div>
							</div>
						</a>
						<a id="weixin">
							<div class="weixin">
								<div class="pic">
								</div>
								<em>
									官方微信
								</em>
								<div class="qrcode-box-wrp bigvip-qrcode">
									<div class="qrcode-box qrcode-weixin">
										<div class="qrcode-box-arrow">
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</li>
			</ul>
			<div class="partner">
				<div class="block left" style="padding-top:14px;">
					<div class="partner-banner">
					</div>
					<a id="jvs-cert" href="https://webcert.cnmstl.net/cert/grade?sn=d3ec53ae63a84350945198bab0251d59"
					target="_blank" style="display: block; max-width: 132px;">
						<div id="jvs-certifyOuter" class="jvs-certifyOuter" style="width: 100%; position: relative;">
							<img id="certify-img1" class="                                                                                                                                                                                  "
							crossorigin="anonymous" src="//backup.hdslb.com/bfs/mainfront/websafe.png"
							style="position: absolute; left: 0px; top: 0px; display: block; width: 100%; height: auto; opacity: 1; max-height: none; border: none;">
							<img id="certify-img2" class="                                                                                                                                                                                  act"
							crossorigin="anonymous" src="//backup.hdslb.com/bfs/mainfront/confirm.png"
							style="position: absolute; left: 0px; top: 0px; display: block; max-height: none; width: 100%; height: auto; opacity: 0; border: none;">
						</div>
					</a>
				</div>
				<div class="block left" style="margin: 0px 68px 0 115px;line-height:24px;float: none;">
					<p>
						互联网ICP备案：
						<a href="#" target="_blank">
							<?php echo $maccms['site_icp']; ?>
						</a>
						| 侵权处理邮箱：<a class="yumi" href="mailto:<?php echo $maccms['site_email']; ?>"><?php echo $maccms['site_email']; ?></a> | 违法不良信息举报电话：110 |<?php echo $maccms['site_tj']; ?>

            <p><?php echo $yzm['foottitle']?></p>
            <p>若本站收录的节目无意侵犯了贵司权利，请给我们来信，我们会及时处理和删除，谢谢！Copyright &#169; 2018-2020 <a class="yumi" href="<?php echo $maccms['site_url']; ?>" target="_blank"><?php echo $maccms['site_name']; ?></a> </p>
					<p>
						<a href="http://report.12377.cn:13225/toreportinputNormal_anis.do" target="_blank">
							网上有害信息举报专区：
							<img src="//static.hdslb.com/images/12377.png" width="16" height="16"
							style="vertical-align: sub;">
							中国互联网违法和不良信息举报中心
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/appdown.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jdyzm_pc.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/pace.min.js"></script>
<div id="backTop"><a href="javascript:;"></a></div>
</div></div>





 </div>





</body>

</html>



 