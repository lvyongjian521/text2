<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:29:"template/b/html/vod\show.html";i:1566886194;s:61:"C:\wwwroot\lvyongjian.xyz\template\b\html\public\include.html";i:1581322784;s:57:"C:\wwwroot\lvyongjian.xyz\template\b\html\jdyzm\head.html";i:1582683947;s:60:"C:\wwwroot\lvyongjian.xyz\template\b\html\public\paging.html";i:1547702280;s:60:"C:\wwwroot\lvyongjian.xyz\template\b\html\jdyzm\tiplist.html";i:1563101628;s:58:"C:\wwwroot\lvyongjian.xyz\template\b\html\public\foot.html";i:1553324368;s:60:"C:\wwwroot\lvyongjian.xyz\template\b\html\jdyzm\footerb.html";i:1613295466;}*/ ?>
<!doctype html>

<html>



<head>

    <meta charset="utf-8">

    <title>最新<?php echo $obj['type_name']; ?>-推荐<?php echo $obj['type_name']; ?> - <?php echo $maccms['site_name']; ?></title>

    <meta name="keywords" content="<?php echo $obj['type_key']; ?>" />

    <meta name="description" content="<?php echo $obj['type_des']; ?>" />

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
        <!-- 条件搜索 -->
    <div id="container">
        <div class="container" id="content">
            <div class="typebox board clearfix" style="margin-top: 0px;">
                <div id="style_div" <?php if(($obj['type_id'] == 3 or $obj['type_id'] == 5)): ?> style="-display: none" <?php endif; ?>><span>分类：</span>
                    <ul>
                        <li><a <?php if($obj['type_id'] == 1): ?> class="active" <?php elseif($obj['type_id'] == 2): ?> class="active" <?php elseif($obj['type_id'] == 3): ?> class="active" <?php elseif($obj['type_id'] == 5): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>'','order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li><?php if(($obj['type_pid'] == 1 or $obj['type_id'] == 1)): $__TAG__ = '{"parent":"1","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                        <li><a <?php if($vo2['type_id'] == $obj['type_id']): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($vo2,[],'show'); ?>"><?php echo $vo2['type_name']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; elseif(($obj['type_pid'] == 2 or $obj['type_id'] == 2)): $__TAG__ = '{"parent":"2","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                        <li><a <?php if($vo2['type_id'] == $obj['type_id']): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($vo2,[],'show'); ?>"><?php echo $vo2['type_name']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; elseif(($obj['type_pid'] == 3 or $obj['type_id'] == 3)): $__TAG__ = '{"parent":"3","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                        <li><a <?php if($vo2['type_id'] == $obj['type_id']): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($vo2,[],'show'); ?>"><?php echo $vo2['type_name']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; elseif(($obj['type_pid'] == 5 or $obj['type_id'] == 5)): $__TAG__ = '{"parent":"5","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                        <li><a <?php if($vo2['type_id'] == $obj['type_id']): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($vo2,[],'show'); ?>"><?php echo $vo2['type_name']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div id="style_div"><span>类型：</span>
                    <ul>
                        <li><a <?php if($param['class'] == ''): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>'','order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                        <?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_602c1f1ae4e05=explode(',',$obj['parent']['type_extend']['class']); if(is_array($_602c1f1ae4e05) || $_602c1f1ae4e05 instanceof \think\Collection || $_602c1f1ae4e05 instanceof \think\Paginator): if( count($_602c1f1ae4e05)==0 ) : echo "" ;else: foreach($_602c1f1ae4e05 as $key2=>$vo2): ?>
                        <li><a <?php if($param['class'] == $vo2): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; else: $_602c1f1ae4dca=explode(',',$obj['type_extend']['class']); if(is_array($_602c1f1ae4dca) || $_602c1f1ae4dca instanceof \think\Collection || $_602c1f1ae4dca instanceof \think\Paginator): if( count($_602c1f1ae4dca)==0 ) : echo "" ;else: foreach($_602c1f1ae4dca as $key2=>$vo2): ?>
                        <li><a <?php if($param['class'] == $vo2): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div id="zone_div"><span>地区：</span>
                    <ul>
                        <li><a <?php if($param['area'] == ''): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>'','lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                        <?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_602c1f1ae4d31=explode(',',$obj['parent']['type_extend']['area']); if(is_array($_602c1f1ae4d31) || $_602c1f1ae4d31 instanceof \think\Collection || $_602c1f1ae4d31 instanceof \think\Paginator): if( count($_602c1f1ae4d31)==0 ) : echo "" ;else: foreach($_602c1f1ae4d31 as $key2=>$vo2): ?>
                        <li><a <?php if($param['area'] == $vo2): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; else: $_602c1f1ae4cfd=explode(',',$obj['type_extend']['area']); if(is_array($_602c1f1ae4cfd) || $_602c1f1ae4cfd instanceof \think\Collection || $_602c1f1ae4cfd instanceof \think\Paginator): if( count($_602c1f1ae4cfd)==0 ) : echo "" ;else: foreach($_602c1f1ae4cfd as $key2=>$vo2): ?>
                        <li><a <?php if($param['area'] == $vo2): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <div id="zone_div"><span>年份：</span>
                    <ul>
                        <li><a <?php if($param['year'] == ''): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>'','level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                        <?php if(empty($obj['type_extend']['year']) || (($obj['type_extend']['year'] instanceof \think\Collection || $obj['type_extend']['year'] instanceof \think\Paginator ) && $obj['type_extend']['year']->isEmpty())): $_602c1f1ae4c4e=explode(',',$obj['parent']['type_extend']['year']); if(is_array($_602c1f1ae4c4e) || $_602c1f1ae4c4e instanceof \think\Collection || $_602c1f1ae4c4e instanceof \think\Paginator): if( count($_602c1f1ae4c4e)==0 ) : echo "" ;else: foreach($_602c1f1ae4c4e as $key2=>$vo2): ?>
                        <li><a <?php if($param['year'] == $vo2): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo2,'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; else: $_602c1f1ae4c1a=explode(',',$obj['type_extend']['year']); if(is_array($_602c1f1ae4c1a) || $_602c1f1ae4c1a instanceof \think\Collection || $_602c1f1ae4c1a instanceof \think\Paginator): if( count($_602c1f1ae4c1a)==0 ) : echo "" ;else: foreach($_602c1f1ae4c1a as $key2=>$vo2): ?>
                        <li><a <?php if($param['year'] == $vo2): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo2,'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
                <!--div id="zone_div"><span>语言：</span>
                    <ul>
                        <li><a <?php if($param['lang'] == ''): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>'','year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li><?php if(empty($obj['type_extend']['lang']) || (($obj['type_extend']['lang'] instanceof \think\Collection || $obj['type_extend']['lang'] instanceof \think\Paginator ) && $obj['type_extend']['lang']->isEmpty())): $_602c1f1ae4b89=explode(',',$obj['parent']['type_extend']['lang']); if(is_array($_602c1f1ae4b89) || $_602c1f1ae4b89 instanceof \think\Collection || $_602c1f1ae4b89 instanceof \think\Paginator): if( count($_602c1f1ae4b89)==0 ) : echo "" ;else: foreach($_602c1f1ae4b89 as $key2=>$vo2): ?>
                        <li><a <?php if($param['lang'] == $vo2): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$vo2,'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; else: $_602c1f1ae4b54=explode(',',$obj['type_extend']['lang']); if(is_array($_602c1f1ae4b54) || $_602c1f1ae4b54 instanceof \think\Collection || $_602c1f1ae4b54 instanceof \think\Paginator): if( count($_602c1f1ae4b54)==0 ) : echo "" ;else: foreach($_602c1f1ae4b54 as $key2=>$vo2): ?>
                        <li><a <?php if($param['lang'] == $vo2): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$vo2,'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?></ul>
                </div-->
                <div id="zone_div"><span>字母：</span>
                    <ul>
                        <li><a <?php if($param['letter'] == ''): ?> class="active" <?php endif; ?> href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>'','state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
                        <?php $_602c1f1ae4ace=explode(',','A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0-9'); if(is_array($_602c1f1ae4ace) || $_602c1f1ae4ace instanceof \think\Collection || $_602c1f1ae4ace instanceof \think\Paginator): if( count($_602c1f1ae4ace)==0 ) : echo "" ;else: foreach($_602c1f1ae4ace as $key2=>$vo2): ?>
                        <li><a <?php if($param['letter'] == $vo2): ?> class="active" <?php endif; ?> {/if} href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$vo2,'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a>
                            <li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div id="sort_div"><span>排序：</span>
                    <a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'time' ],'show'); ?>" class='order <?php if($param['by'] == ' ' || $param['by'] == 'time'): ?>active<?php endif; ?>'>按时间排序</a><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'hits' ],'show'); ?>" class='order <?php if($param['by'] == 'hits'): ?>active<?php endif; ?>'>按热门排序</a><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'score' ],'show'); ?>" class='order <?php if($param['by'] == 'score'): ?>active<?php endif; ?>'>按时间排序</a></div>
            </div>
            <div class="listbox board clearfix">
                <ul>
                <?php $__TAG__ = '{"num":"18","paging":"yes","type":"current","pageurl":"vod\/show","half":"10","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?>"><ul style="height: 110px;border-radius: 4px;width:100%;"><img class="item-lazy" title="<?php echo $vo['vod_name']; ?>" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>" style="margin-top: -50px;"></ul><span class="listbox-remarks" style="border-radius: 4px;"><?php if($vo['vod_serial'] > 0): ?>更新至 第<?php echo $vo['vod_serial']; ?>集<?php else: ?><?php echo $vo['vod_remarks']; endif; ?></span><span class="listbox-mask"><?php echo $vo['vod_blurb']; ?></span></a>
                        <figcaption class="list-title">
                            <h3><a href="<?php echo mac_url_vod_detail($vo); ?>" target="_blank" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a><span class="score"><?php echo date('m-d',$vo['vod_time']); ?></span></h3>
                            <p class="otherinfo">主演：<?php echo $vo['vod_actor']; ?></p>
                            <p class="block-clearfix"><span class="pull-left">类型：<?php echo $vo['type']['type_name']; ?></span><span class="pull-right">地区：<?php echo $vo['vod_area']; ?></span></p>
                        </figcaption>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?> 
                </ul>
            </div>
            <!-- 分页 -->
            <div class="pagebox clearfix"><?php if($__PAGING__['record_total'] > 0): ?>
<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页" style="float: right;">共<?php echo $__PAGING__['record_total']; ?>条数据&nbsp;当前:<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页&nbsp;</a>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页">首页</a>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" title="上一页">上一页</a> <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>

<em><?php echo $num; ?></em> <?php else: ?>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" title="第<?php echo $num; ?>页"><?php echo $num; ?></a> <?php endif; endforeach; endif; else: echo "" ;endif; ?>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" title="下一页">下一页</a>

<a class="pagelink_b" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" title="尾页">尾页</a> <?php else: ?>

<h1>没有找到匹配数据</h1> <?php endif; ?></div></div></div>

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
<script type="text/javascript" src="baidu.js"></script>
<div id="backTop"><a href="javascript:;"></a></div>
</div></div>



</body>
</html>