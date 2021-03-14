<?php if (!defined('THINK_PATH')) exit(); /*a:16:{s:29:"template/b/html/vod\play.html";i:1577854444;s:61:"D:\phpstudy_pro\WWW\b.com\template\b\html\public\include.html";i:1581322784;s:57:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\head.html";i:1582683947;s:57:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\play.html";i:1553322124;s:59:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\player.html";i:1581240764;s:57:"D:\phpstudy_pro\WWW\b.com\template\b\html\list\listt.html";i:1566886192;s:60:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\playnot.html";i:1566967024;s:60:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\vodlist.html";i:1581223576;s:57:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\like.html";i:1555676094;s:57:"D:\phpstudy_pro\WWW\b.com\template\b\html\list\lists.html";i:1581225152;s:59:"D:\phpstudy_pro\WWW\b.com\template\b\html\list\listsno.html";i:1566886192;s:59:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\liuyan.html";i:1542198456;s:60:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\history.html";i:1545113916;s:58:"D:\phpstudy_pro\WWW\b.com\template\b\html\public\foot.html";i:1553324368;s:60:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\footerb.html";i:1581484736;s:57:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\deng.html";i:1548163256;}*/ ?>
<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title>在线播放<?php echo $obj['vod_name']; ?> <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?> - 高清资源 - <?php echo $maccms['site_name']; ?></title>

    <meta name="keywords" content="<?php echo $obj['vod_name']; ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>免费在线观看,<?php echo $obj['vod_name']; ?>剧情介绍" />

    <meta name="description" content="<?php echo $obj['vod_name']; ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>免费在线观看,<?php echo $obj['vod_name']; ?>剧情介绍" />

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
<div id="playerdata" vodid="<?php echo $obj['vod_id']; ?>" vodsid="<?php echo $param['nid']; ?>" vodpic="<?php echo $obj['vod_pic']; ?>" vodname="<?php echo $obj['vod_name']; ?>" voduser="<?php echo $user['user_name']; ?>" vodgroup="<?php echo $user['group_id']; ?>" vodcolor="fff" style="display:none"></div>
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
<div class="players"style="-padding-top: 8px;">
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/player.css"/>
<div  class="video-info"style="padding-bottom: 1px;background-color: #fff;margin-bottom: 15px;box-shadow: 0px 0px 8px #e2e2e2;">
<div class="container-row">
    <span class="tit"><h1 class="u-title"><a href="<?php echo mac_url_vod_detail($obj); ?>"><span style="font-size: 22px;font-weight: 500;"><?php echo $obj['vod_name']; ?> <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?></span></a></h1></span>
    <div class="video-data">
        <span class="a-crumbs"><?php if($obj['type_1']['type_id'] != ''): ?><a href="<?php echo mac_url_type($obj['type_1']); ?>"><i class="u-mark u-mark-zz" style="vertical-align: -1px;border-radius: 18px;border: 0px solid #f06000;"><?php echo $obj['type_1']['type_name']; ?>></i></a><?php endif; ?><a href="<?php echo mac_url_type($obj['type']); ?>"><i class="u-mark u-mark-zz" style="vertical-align: -1px;border-radius: 18px;border: 0px solid #f06000;"><?php echo $obj['type']['type_name']; ?></i></a></span>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;更新时间：20<?php echo date('y-m-d',$obj['vod_time']); ?></span>
    </div>
    <div class="video-data">
        <span title="总播放数<?php echo $obj['vod_hits']; ?>" class="view"><?php echo $obj['vod_hits']; ?>播放&nbsp;·&nbsp;</span>
        <span title="评分：<?php echo $obj['vod_score']; ?>" class="dm"><?php echo $obj['vod_score']; ?>评分</span>
        <span class="copyright">&nbsp;·&nbsp;温馨提示：如果出现加载失败请<a style="color: #03A9F4;" href="javascript:void(0)" onClick="location.reload()">刷新</a>一下哦！</span></div>
<!--播放页app下载地址-->
        <div class="apps" style="position: absolute;top: 20px;right:  0;"><a href="<?php echo $yzm['APP_down']?>" target="_blank" style="border-radius: 8px;background-color: #00a1d6;border: 1px solid #00a1d6;text-indent: 55px;padding: 0 20px 0 22px;width: auto;float: left;text-align: center;line-height: 40px;height: 40px;overflow: hidden;font-size: 16px;color: #fff;margin: 7px 35px 7px 0;">手机APP观看</a><div class="pic-wrapper" style=" background: url(/template/b/images/vipbtn-icon.png) no-repeat;display: block;position: absolute;width: 68px;height: 62px;top: -14px;left: 0;cursor: pointer;"></div></div>
</div>
</div>
<div class="play-primary"> 
<div class="container-row m-player-open" style="box-shadow: 0px 0px 8px #e2e2e2;">
    <div class="player-rgt">
        <div class="play-aside play-panel">
            <div class="slimScrollDiv"style="height:16%;-border-bottom: 1px solid #e2e2e2;">
                 <div class="c-player-aside-wrapper" id="florilegium-box" style="width: 280px; height: 100%;">
                     <div class="player-info c-player-info-tv" style="    border-bottom: 1px solid #e2e2e2;-padding:20px 15px 0px 25px;padding:0px">
                           <div id="xlu" style="display: block;color: #444444;-background: #fafafa;padding: 15px 16px;"><a style="color:#ffac2b;" rel="nofollow">观影须知</a>：如果不能播放，请点击右侧的<a style="color: #f96550;" href="javascript:void(0)" onclick="location.reload()">&nbsp;刷新</a>也可以在下方<a style="color: #f96550;" href="javascript:void(0)">切换</a>其他播放来源<br><a style="color: #4caf50;"></a>本站只做影片更新请勿轻信任何视频水印广告</div>
                      </div>
                 </div>
            </div>
             <h2 style="margin: -3px 0px 7px 13px;font-weight: 500;">随机推荐</h2>
              <div class="rec-list" style="max-height: 520px;overflow: scroll;overflow-x: hidden;"><?php $__TAG__ = '{"num":"20","type":"current","order":"desc","by":"rnd","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><div class="video-page-card">

    <div class="card-box">

        <div class="pic-box" style="padding-top: 0px;width: 100px;height: 62px;background: #c0c0c0;">

            <div class="pic" style=" width: 100px;height: 62px;">

                <a href="<?php echo mac_url_vod_detail($vo); ?>" class="">

                    <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>"

                    style=" width: 100%;height: 115px;margin-top: -30px;border-radius: 3px;">

                </a>

                <span class="mask-video">

                </span>

                <span class="duration">

                    <i class="iconfont">

                        &#xe612;

                    </i>

                    <?php echo date('m-d',$vo['vod_time']); ?>

                    <br>

                    <br>

                    <?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>

                </span>

            </div>

            <div class="watch-later-video van-watchlater">

                <span class="wl-tips" style="display:none;">

                </span>

            </div>

        </div>

        <div class="info" style=" height: 21px;">

            <a href="<?php echo mac_url_vod_detail($vo); ?>" title="【<?php echo $vo['vod_name']; ?>】" class="title"

            style=" height: 21px;    width: 150px;">

                【<?php echo $vo['vod_name']; ?>】

            </a>

            <div class="count up">

                <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank">

                    <?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>

                </a>

            </div>

            <div class="count">

                <i class="iconfont" style="font-size:18px;">

                    &#xe604;

                </i>

                播放&nbsp;<?php echo $vo['vod_hits']; ?>&nbsp;·&nbsp;评分&nbsp;<?php echo $vo['vod_score']; ?>+

            </div>

        </div>

    </div>

</div><?php endforeach; endif; else: echo "" ;endif; ?></div>
        </div>

<!--播放器-->
        <div class="play-box" style="border-right: 1px solid #e2e2e2;">
            <div class="player" id="player">
			<?php if($obj['vod_copyright'] == 1 && $GLOBALS['config']['app']['copyright_status'] == 1): ?>
			<div class="ui-box marg" id="playlist_0"style=" width: 100%;text-align: center;position: relative;top: 40%;color: #999;">
 			   <div class="down-title"><?php echo $GLOBALS['config']['app']['copyright_notice']; ?></div>
			</div>
			<?php else: ?>
			<?php echo $player_data; ?> <?php echo $player_js; endif; ?>
			</div>
<!--播放器下方控件-->
            <div class="play-panel">
                <div class="container-row">
                    <div class="play-lft">
                        <ul>
                            <li class="play-author">
                                <div class="u-avt"><a href="<?php echo mac_url_vod_detail($obj); ?>"><img class="u-pic" src="<?php echo $maccms['path_tpl']; ?>images/img.php?url=<?php echo mac_url_img($obj['vod_pic']); ?>" alt="<?php echo $obj['vod_name']; ?>"></a><i class="u-vip"></i></div>
                                <div class="u-author"><a class="u-name" href="<?php echo mac_url_vod_detail($obj); ?>"><?php echo $obj['vod_name']; ?></a><span class="u-count">评分<?php echo $obj['vod_douban_score']; ?></span></div>
                            <li class="play-dividing">|</li>
                            <li class="play-info"><a href="javascript:void(0)"><i class="iconfont">&#xe950;</i>详情介绍</a>
                                <div class="uu-pic">
                                    <div class="extend wp">
                                        <div class="play-extend">
                                            <div class="play-meta"><img class="cover-preview" src="<?php echo mac_url_img($obj['vod_pic']); ?>" alt="<?php echo $obj['vod_name']; ?>">
                                                <p class="u-meta-intro"><h5><?php echo $obj['vod_name']; ?></h5>
                                                    <div class="tags">
                                                    <span title="更新时间" class="so-icon time" style="margin-right: 20px;"><i class="icon-date"></i>更新时间：<?php echo date('m-d',$obj['vod_time']); ?></span>
                                                    <span title="观看" class="so-icon watch-num" style="margin-right: 20px;"><i class="icon-playtime"></i>播放：<?php echo $obj['vod_hits']; ?></span>
                                                    <span title="年代" class="so-icon time" style="margin-right: 20px;"><i class="icon-date"></i>年代：<?php echo $obj['vod_year']; ?></span>
                                                    <span title="演员" class="so-icon time" style="margin-right: 20px;"><i class="icon-pop"></i>主演：<?php echo $obj['vod_actor']; ?></span>
                                                    </div>
                                                    <span class="label"><h5>简介：</h5></span><span class="details"><?php echo $obj['vod_content']; ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="play-share bdsharebuttonbox" data-tag="share" data-tag="pageSharePreview"  id="bdshare"><i class="iconfont">&#xe625;</i><a href="javascript:void(0)" class="bds_more" data-cmd="more">分享</a></li>
                            <li class="play-share"><a class="u-follow" rel="nofollow" href="#mac_comment"><em><i class="iconfont" style="font-size: 18px;">&#xe66f;</i>评论</em></a></li>
							<!--qq群-->
                            <li class="play-share"><a class="u-follow" rel="nofollow" href="<?php echo $yzm['qqqun']?>" target="_blank"><em><i class="iconfont" style="font-size:16px;">&#xe60e;</i>QQ群</em></a></li>
                            <li class="play-dividing">|</li>
                            <li class="play-count" style="float: right;"><a class="u-follow" href="<?php echo $obj['player_info']['link_next']; ?>">下一集&nbsp;＞</em></a></li>
                            <li class="play-count" style="float: right;"><a class="u-follow" href="<?php echo $obj['player_info']['link_pre']; ?>">＜&nbsp;上一集</em></a></li>
                        </ul>
                    </div><div class="mod-main banner" style=" width: 95%;height: 2rem;line-height: 2rem;box-shadow: 0px 0px 5px #cccccc59;border-radius: 20px;margin: 0 auto;margin-top: 5px;"><div class="tip" style=" width: 9%;height: 100%;background: linear-gradient(to left,#f36392 0,#f3639278 100%);float: left;text-align: center;color: #fff;border-radius: 20px 0 0 20px;font-weight: bold;"><span>温馨提示</span></div><div class="tips" style=" width: 88%;height: 100%;float: right;color: #666;padding: 0 10px 0 10px;"><span><marquee scrollamount="3"><?php echo $yzm['pc_tixing']?></marquee></span></div></div>  
                </div>
			</div>
         </div>
    </div>
                            <div class="tishi" style="position: absolute;top: -1%;left: 99.8%;">
                            		<a class="bgray-btn" href="javascript:;" onClick="MAC.Gbook.Report('编号【<?php echo $obj['vod_id']; ?>】名称【<?php echo $obj['vod_name']; ?>】不能观看请检查修复，页面地址' + location.href)">播放<br>问题<br>反馈</a>
                            		<a id="showmore" href="javascript:void(0)" class="bgray-btn"><i>宽屏</i></a>
                            		<a class="bgray-btn" id="refresh" href="javascript:void(0)" onclick="location.reload()">刷新</a>
                            </div>

</div>
</div>
</div>



<div class="playlistall" style="margin-top: 15px;">

       <div class="container">

                <div class="playbox playlist clearfix" name="<?php echo $vo['player_info']['from']; ?>">

                                <div class="uu-pic" style="visibility: unset;opacity: 1;position: unset;">

                                    <div class="extend wp">

                                        <div class="play-extend">

                                            <div class="play-meta"><img class="cover-preview" src="<?php echo mac_url_img($obj['vod_pic']); ?>" alt="<?php echo $obj['vod_name']; ?>" style="float: left;width: 120px;height: 156px;margin-right: 20px;border-radius: 4px;">

                                                <h5 style="font-weight: 400;font-size: 18px;"><?php echo $obj['vod_name']; ?></h5>

                    <p style="position: absolute;top:10%;right:12%;"><t><a href="javascript:void(0)"  class="mac_ulog" data-type="2" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" style="color: #fff;"><i class="i-link i-save"></i><i class="iconfont">&#xe60d;</i>收藏</a></t><t style="border: 1px solid #e5e9ef;padding: 5px 15px;background-color: #fff0;"><a href="javascript:void(0)" id="addQrcode">手机观看</a><div id="qbox" style="margin-left: 75%;z-index: 888;top: 28%;"><img src="http://qr.liantu.com/api.php?text=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>" alt="<?php echo $obj['vod_name']; ?>" style="width:  120px;height: 120px;"></div></t></z>

                   <h3 style="border-bottom: 0px solid #cccccc59;">

			<div class="module-tab pull-right" id="tabDate"><?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?><span class="<?php if($param['sid'] == $key): ?>active<?php endif; ?>"><?php echo $vo['player_info']['show']; ?></span><?php endforeach; endif; else: echo "" ;endif; ?></div> </h3>

                    <div id="tabDatelist"><?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>

                        <ul class="list_<?php echo $key; ?>" <?php if($param['sid'] == $vo['sid']): ?> style="display: block;"<?php else: ?> style="display: none;"<?php endif; ?>>

				<div id="vlink_<?php echo $key; ?>" style="overflow-y: scroll;overflow-x: hidden;max-height: 125px;max-width: 990px;">

                            <p><li> <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?><a class="<?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?>active<?php endif; ?>" href='<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>'><?php echo $vo2['name']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?> </li></p>

                    </div> </ul><?php endforeach; endif; else: echo "" ;endif; ?> 

                    </div>
<style>
.module-tab.pull-right {border-bottom: 1px solid #cccccc59; height: 33px;width: 100%;float: left;}
.module-tab.pull-right span {line-height: 15px;}
.module-tab.pull-right span a {min-width:44px;max-width: 55px; height: 25px;line-height: 15px;margin: 0 5px 5px 0;-background: #99999936; -color: #000;
</style>

                                            </div>

                                        </div>

                                    </div>

                                </div>

							</div>

                <script>Wnew(8);</script>

           <div class="column-rgt">

                        <h3 style=" font-weight: 700;font-size: 18px;line-height: 30px;height: 16px;margin: 14px 0;margin-left: 15px;">每日热播</h3>

                 <div class="module-box" id="mytab3r" style="overflow-y: scroll;overflow-x: hidden;max-height: 550px;margin-top: -15px;    width: 121%;">

                        <ul><?php $__TAG__ = '{"num":"8","type":"current","order":"desc","by":"hits_day","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                            <div class="video-page-card">

    <div class="card-box">

        <div class="pic-box" style="padding-top: 0px;width: 100px;height: 62px;background: #c0c0c0;">

            <div class="pic" style=" width: 100px;height: 62px;">

                <a href="<?php echo mac_url_vod_detail($vo); ?>" class="">

                    <img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>"

                    style=" width: 100%;height: 115px;margin-top: -30px;border-radius: 3px;">

                </a>

                <span class="mask-video">

                </span>

                <span class="duration">

                    <i class="iconfont">

                        &#xe612;

                    </i>

                    <?php echo date('m-d',$vo['vod_time']); ?>

                    <br>

                    <br>

                    <?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>

                </span>

            </div>

            <div class="watch-later-video van-watchlater">

                <span class="wl-tips" style="display:none;">

                </span>

            </div>

        </div>

        <div class="info" style=" height: 21px;">

            <a href="<?php echo mac_url_vod_detail($vo); ?>" title="【<?php echo $vo['vod_name']; ?>】" class="title"

            style=" height: 21px;    width: 150px;">

                【<?php echo $vo['vod_name']; ?>】

            </a>

            <div class="count up">

                <a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank">

                    <?php if($vo['vod_serial'] > 0): ?>更新至&nbsp;第<?php echo $vo['vod_serial']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?>

                </a>

            </div>

            <div class="count">

                <i class="iconfont" style="font-size:18px;">

                    &#xe604;

                </i>

                播放&nbsp;<?php echo $vo['vod_hits']; ?>&nbsp;·&nbsp;评分&nbsp;<?php echo $vo['vod_score']; ?>+

            </div>

        </div>

    </div>

</div><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                 </div>

            </div>

            <div class="column-lft">

                <!--猜你喜欢-->

                <div class="favbox clearfix">

                    <h3><div class="favbox-title">除了"<strong><?php echo $obj['vod_name']; ?></strong>"你可能还喜欢以下<?php echo $obj['type']['type_name']; ?>：</div><div class="module-tab" id="mytabs8r"><span class="active">最新</span><span>随机</span><span>精选</span><span>榜单</span></div></h3>

                    <div class="hobby" id="mytab8r">

                        <ul class="sort_lst"><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

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

                        <ul class="dn"><?php $__TAG__ = '{"num":"10","ids":"'.$obj['vod_rel_vod'].'","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div><div class="play_hv"><?php echo $vo['vod_year']; ?></div><div class="play_hv2"><i class="iconfont">&#xe62d;</i></div><div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?><div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?> <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?> <div class="play_hv3 xhot"></div><?php endif; ?><div class="space-danmaku"></div></a><figcaption class="block-title"><b><?php echo $vo['vod_name']; ?></b><p class="otherinfo"><i class="iconfont">&#xe618;</i><?php echo $vo['vod_blurb']; ?></p><p class="block-clearfix"><?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; else: ?><?php echo $vo['vod_remarks']; endif; ?></p></figcaption></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                        <ul class="dn"><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"time","level":"all","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div><div class="play_hv"><?php echo $vo['vod_year']; ?></div><div class="play_hv2"><i class="iconfont">&#xe62d;</i></div><div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?><div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?> <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?> <div class="play_hv3 xhot"></div><?php endif; ?><div class="space-danmaku"></div></a><figcaption class="block-title"><b><?php echo $vo['vod_name']; ?></b><p class="otherinfo"><i class="iconfont">&#xe618;</i><?php echo $vo['vod_blurb']; ?></p><p class="block-clearfix"><?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; else: ?><?php echo $vo['vod_remarks']; endif; ?></p></figcaption></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                        <ul class="dn"><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

                            <li><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><div class="lazy-img"><img src="<?php echo mac_url_img($vo['vod_pic']); ?>" onerror="this.src='/<?php echo $yzm['pic']['lazy'];?>'" alt="<?php echo $vo['vod_name']; ?>"></div><div class="play_hv"><?php echo $vo['vod_year']; ?></div><div class="play_hv2"><i class="iconfont">&#xe62d;</i></div><div class="play_hv3"></div><?php if($vo['vod_level'] > 0): ?><div class="play_hv3 xtui"></div><?php elseif($vo['vod_state'] == 预告片): ?> <div class="play_hv3 xnew"></div><?php elseif($vo['vod_hits'] > 1000): ?> <div class="play_hv3 xhot"></div><?php endif; ?><div class="space-danmaku"></div></a><figcaption class="block-title"><b><?php echo $vo['vod_name']; ?></b><p class="otherinfo"><i class="iconfont">&#xe618;</i><?php echo $vo['vod_blurb']; ?></p><p class="block-clearfix"><?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; else: ?><?php echo $vo['vod_remarks']; endif; ?></p></figcaption></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                    </div>

                </div>

                                <div class="commentbox clearfix">
                    <h3 class="main_tit_area main_tit_v1"><div class="main_tit_bg">用户评论</div></h3>  
                      <div class="liuyan">
                            <div class="mac_comment" id="mac_comment" data-id="<?php echo $obj['vod_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>" >
                          <script>
                            $(function(){
                                      MAC.Comment.Login = <?php echo $comment['login']; ?>;
                                      MAC.Comment.Verify = <?php echo $comment['verify']; ?>;
                                      MAC.Comment.Init();
                                      MAC.Comment.Show(1);
                                  });
                          </script>
                      </div>
                   </div>
                </div>


            </div>

        </div>


</div>    

    <span style="display:none" class="mac_ulog_set" alt="设置内容页浏览记录" data-type="4" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>
    <span style="display:none" class="mac_history_set" alt="设置History历史记录" data-name="[<?php echo $obj['type']['type_name']; ?>]<?php echo $obj['vod_name']; ?>  <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>" data-pic="<?php echo mac_url_img($obj['vod_pic']); ?>"></span>

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




<div clsss="deng"><div id="switch"></div>

<script src="<?php echo $maccms['path_tpl']; ?>js/yzm.js"></script>
<script>

$(document).ready(function() {

	$("#player").allofthelights();  

});

</script>

<style>

#switch{-position: absolute;display: inline-block;width: 80px;height: 80px;background: url(<?php echo $maccms['path_tpl']; ?>images/switch.png) no-repeat 0 0;cursor: pointer;z-index: 100000;margin: 0;right:150px;top:2px;position: fixed;}

#switch_off{display: inline-block;width: 80px;height: 80px;background: url(<?php echo $maccms['path_tpl']; ?>images/switch.png) no-repeat 0 -80px;cursor: pointer;z-index: 100002;margin: 0;right:150px;}

</style></div>

</body>

</html>