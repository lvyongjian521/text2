<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:31:"template/b/html/vod\search.html";i:1581219752;s:61:"C:\wwwroot\lvyongjian.xyz\template\b\html\public\include.html";i:1581322784;s:57:"C:\wwwroot\lvyongjian.xyz\template\b\html\jdyzm\head.html";i:1582683947;s:58:"C:\wwwroot\lvyongjian.xyz\template\b\html\list\solist.html";i:1566886192;s:55:"C:\wwwroot\lvyongjian.xyz\template\b\html\jdyzm\ad.html";i:1581220148;s:60:"C:\wwwroot\lvyongjian.xyz\template\b\html\public\paging.html";i:1547702280;s:58:"C:\wwwroot\lvyongjian.xyz\template\b\html\public\foot.html";i:1553324368;s:60:"C:\wwwroot\lvyongjian.xyz\template\b\html\jdyzm\footerb.html";i:1581484736;s:57:"C:\wwwroot\lvyongjian.xyz\template\b\html\jdyzm\adjs.html";i:1544089672;}*/ ?>
<!doctype html>

<html>



<head>

    <meta charset="utf-8">

    <title><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果 - <?php echo $maccms['site_name']; ?></title>

    <meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果" />

    <meta name="description" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果" /> <?php include ('template/b/admin/yzm.config.php'); ?><link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/home.css"/>
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

    <div id="container">

        <div class="container" id="content">

            <!--搜索结果-->

            <div class="typebox board clearfix" style="-margin-bottom: 0px;"><span class="re-info"><p style="font-size: 16px;">搜索“<b style="color: #00a1d6;"><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?></b>”共找到&nbsp;<b class="total" style="color: #c76574;"></b>&nbsp;部相关影片!</p></span>			<a href="javascript:;" tapmode onClick="MAC.Gbook.Report('请管理员添加《<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>》，谢谢！')"style="-float: right;">未找到？<span style="color: #03a9f4;">点我求片</span></a>
</div>

			

<div class="searchbox board clearfix"><ul><?php $__TAG__ = '{"num":"8","paging":"yes","pageurl":"vod\/search","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><li class="search list">

	<a href="<?php echo mac_url_vod_detail($vo); ?>"

	target="_blank" title="<?php echo $vo['vod_name']; ?>" class="img-anchor">

		<div class="img">

			<div class="lazy-img">

				<img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'"  data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" style="margin-top: -50px;">

			</div>

			<span class="so-imgTag_rb">

				<?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; else: ?><?php echo $vo['vod_remarks']; endif; ?>

			</span>

			<div class="watch-later-trigger watch-later">

			</div>

		</div>

		<!---->

	</a>

	<div class="info">

		<div class="headline clearfix">

			<span class="type avid">

				尔氡氡酱 cms.xiantian.fun

			</span>

			<span class="type hide">

				<?php echo $vo['type']['type_name']; ?>

			</span>

			<a title="<?php echo $vo['vod_name']; ?>" href="<?php echo mac_url_vod_detail($vo); ?>"

			target="_blank" class="title"><?php echo $vo['vod_name']; ?>

			</a>

		</div>

		<div class="type hide">

			<?php echo $vo['vod_blurb']; ?>...

		</div>

		<div class="tags">

			<span title="更新时间" class="so-icon time">

				<i class="icon-date">

				</i>

				更新时间：<?php echo date('m-d',$vo['vod_time']); ?>

			</span>

			<span title="观看" class="so-icon watch-num">

				<i class="icon-playtime">

				</i>

				播放：<?php echo $vo['vod_hits']; ?>

			</span>

			<span title="年代" class="so-icon time">

				<i class="icon-date">

				</i>

				年代：<?php echo mac_url_create($vo['vod_year'],'year'); ?>

			</span>

			<span title="演员" class="so-icon time">

				<i class="icon-pop">

				</i>

				主演：<?php echo mac_url_create($vo['vod_actor'],'actor'); ?>

			</span>

		</div>

	</div> 

</li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div>

              <div class="column-rgt">
                <div>
<style type="text/css">
*{padding:0;margin:0;}
li{list-style:none;}
img{border:none;}
/* play */
.play{width:255px;height:110px;overflow:hidden;position:relative;margin:0px auto 0;}
.play ol{position:absolute;right:5px;bottom:5px;z-index:99999;}
.play ol li{float:left;margin-right:3px;display:inline;cursor:pointer;background:#03a9f42e;border:1px solid #2196F3;padding:0px 3px;color:#2196F3;font-family:arial;font-size:12px;}
.play ol li.active{padding:0px 4px;font-weight:bold;color:#ffffff;background:#2196F3;position:relative;bottom:0px;}
.play ul{position:absolute;top:0;left:0;z-index:1;}
.play ul li{width:255px;height:110px;float:left;}
.play ul img{float:left;width:255px;height:110px;}
</style>


</head>

<body>

<div class="play" id="play">
    <ol>
    	<li class="active">1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ol>
	<ul>
		<li><a href="http://tvgo.bio/"  target="_blank" ><img src="https://tva2.sinaimg.cn/large/0072Vf1pgy1foxk3kpg2aj31kw0w01hq.jpg" alt="美图" /></a></li>
		<li><a href="http://tvgo.bio/"  target="_blank" ><img src="https://tva2.sinaimg.cn/large/0072Vf1pgy1foxkix1n7kj31kw0w0tzl.jpg" alt="美图" /></a></li>
		<li><a href="http://tvgo.bio/"  target="_blank" ><img src="https://tva2.sinaimg.cn/large/0072Vf1pgy1foxlhe0a6tj31hc0u0qhh.jpg" alt="美图" /></a></li>
		<li><a href="http://tvgo.bio/"  target="_blank" ><img src="https://tva2.sinaimg.cn/large/0076R7yAgy1fq8ds3ulsmj31hc0u04i0.jpg" alt="美图" /></a></li>
	</ul>
</div>
            </div>
                    <div class="section_aside_tit sort_nav">
                        <h3>最新更新</h3>
                        <div class="module-tab" id="mytabs3r"><span class="active">更多</span></div>
                    </div>
                    <div class="module-box" id="mytab3r">
                        <ul><?php $__TAG__ = '{"num":"15","type":"all","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key == 1): ?><li class="first"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><i><?php echo $key; ?></i><div class="first-title"><b><?php echo $vo['vod_name']; ?></b></div><img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"></a></li><?php else: ?>
                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><?php echo $vo['vod_name']; ?></a><span><?php echo date('m-d',$vo['vod_time']); ?></span></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div><?php $__TAG__ = '{"ids":"1","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" target="_blank" class="more-link" style=" display: block; height: 24px; line-height: 24px; background-color: #e5e9ef; text-align: center; border: 1px solid #e0e6ed; color: #222; border-radius: 4px; transition: .2s;margin-bottom: 23px;">查看更多&nbsp;＞</a><?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>
         

            <div class="pagebox clearfix"><?php if($__PAGING__['record_total'] > 0): ?>
<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页" style="float: right;">共<?php echo $__PAGING__['record_total']; ?>条数据&nbsp;当前:<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页&nbsp;</a>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页">首页</a>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" title="上一页">上一页</a> <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>

<em><?php echo $num; ?></em> <?php else: ?>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" title="第<?php echo $num; ?>页"><?php echo $num; ?></a> <?php endif; endforeach; endif; else: echo "" ;endif; ?>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" title="下一页">下一页</a>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" title="尾页">尾页</a> <?php else: ?>

<h1>没有找到匹配数据</h1> <?php endif; ?></div>

            <script>

        $('.total').html('<?php echo $__PAGING__['record_total']; ?>');

        </script>

        </div>

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




	<script type="text/javascript">
function getStyle(obj,name)
      {
		  if(obj.currentStyle)
		    {
				return obj.currentStyle[name]; //IE
			}
			else 
			{
				return getComputedStyle(obj,false)[name]; //火狐和Chrome
			}
	  }
	 
function startMove(obj,json,fnEnd)
{
	 
	 clearInterval(obj.timer);
	 
	 obj.timer=setInterval(function() {
	   var bstop=true;
	   for(var attr in json)
	   {
		 //var cur=parseInt(getStyle(obj,attr)); //取整数，取非数字（例如字母）前的整数
		 var cur=0
		 if (attr=='opacity') //判断是不是透明度？ 如果是则特殊处理一下。
		 {
			 cur=Math.round(parseFloat(getStyle(obj,attr))*100);
		 }
		 else
		 {
			 cur=parseInt(getStyle(obj,attr)); //取整数，取非数字（例如字母）前 
		 }
		 var speed=(json[attr]-cur)/10;
		 speed=speed>0?Math.ceil(speed):Math.floor(speed);
		 
		 if(cur!=json[attr])
		
		   bstop=false;
		 
		   
			if (attr=='opacity')
			{
			    obj.style.filter='alpha(opacity:'+(cur+speed)+')'; //cur+speed本身就是数字，不能加在''之间。
				obj.style.opacity=(cur+speed)/100;
			}
			else
			{
				obj.style[attr]=cur+speed+'px'; 
			}	 
	   }
	   
	  if(bstop)
	     {
		     clearInterval(obj.timer);
			 if(fnEnd) fnEnd();
	     }
	 },30)

}
window.onload=function (){
	var oDiv=document.getElementById('play');
	var aLi=oDiv.getElementsByTagName('ol')[0].getElementsByTagName('li');
	
	var aUl=oDiv.getElementsByTagName('ul')[0];
	
	var now=0;
	
	for(var i=0;i<aLi.length;i++){
		aLi[i].index=i;
		aLi[i].onclick=function()
		{
			now=this.index;
			tab();
		};
	}
	
	function tab(){
		for(var i=0;i<aLi.length;i++)
			  {
				 aLi[i].className=''; 
			  }
		aLi[now].className='active';
			
		startMove(aUl,{top:-110*now});
		
	}
	function next(){
		
		now++;
		if(now==aLi.length)
		{
		  now=0;
		}
	
		tab();
	}
	timer=setInterval(next,5000);
	oDiv.onmousemove=function(){
		clearInterval(timer);
	}
	oDiv.onmouseout=function(){
		timer=setInterval(next,5000);
	}
	
};
</script>

</body>



</html>

