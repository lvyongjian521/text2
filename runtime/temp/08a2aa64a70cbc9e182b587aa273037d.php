<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:31:"template/b/html/vod\detail.html";i:1581221244;s:61:"D:\phpstudy_pro\WWW\b.com\template\b\html\public\include.html";i:1581322784;s:58:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\mhead.html";i:1567150126;s:57:"D:\phpstudy_pro\WWW\b.com\template\b\html\list\lists.html";i:1581225152;s:59:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\liuyan.html";i:1542198456;s:60:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\history.html";i:1545113916;s:58:"D:\phpstudy_pro\WWW\b.com\template\b\html\public\foot.html";i:1553324368;s:60:"D:\phpstudy_pro\WWW\b.com\template\b\html\jdyzm\footerb.html";i:1581484736;}*/ ?>
<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <title><?php echo $obj['vod_name']; ?>详情介绍-<?php echo $obj['vod_name']; ?>在线观看-<?php echo $obj['vod_name']; ?>迅雷下载 - <?php echo $maccms['site_name']; ?></title>

    <meta name="keywords" content="<?php echo $obj['vod_name']; ?>在线收看,<?php echo $obj['vod_name']; ?>迅雷下载" />

    <meta name="description" content="<?php echo $obj['vod_name']; ?>剧情:<?php echo $obj['vod_blurb']; ?>" />

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


<style>

.drama-box{width: 100%;margin-bottom: 0px;}

#header{position: absolute;width: 100%;}

.b-header-mask-wrp{background-color: hsla(0,0%,100%,0.01);}

.playlist ul li a{height: 37px; white-space: nowrap; line-height: 38px; overflow: hidden; display: block; text-align: center; color: #6d757a; float: left; position: relative; margin: 7px 8px 0 0; width: calc((100% - 90px)/8); background-color: #f4f5f7; border: 1px solid #f4f5f7; border-radius: 4px;}

.column-lft{background: #fff;overflow: hidden;width: 859px;-webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,.07);box-shadow: 0 1px 2px 0 rgba(0,0,0,.07);border-radius: 4px;}

.column-rgt{float:right;overflow:hidden;width:250px;background: #fff;-webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,.07);box-shadow: 0 1px 2px 0 rgba(0,0,0,.07);border-radius: 4px;padding: 20px;}

#content{padding: 11px 0;background: #f4f5f7;}

html{margin: 0;padding: 0;border: 0;font: 12px/1.5 "Microsoft YaHei",Arial,Helvetica,sans-serif;background: #f4f5f7;transition: all .3s;}

.sname a{font-size: 12px;display: inline-block;vertical-align: middle;margin-right: 0px;height: 20px;padding: 0 4px;line-height: 20px;color: #fff;border: 1px solid #fff;border-radius: 3px;}

.z_top.b-header-blur.b-header-blur-black .z_top_nav li a.i-link, .z_top.b-header-blur.b-header-blur-black .uns_box li.u-i a.i-link{color: #fff;font-size: 12px;}

</style>

</head>

<body>

<!-- 页头 -->
<div id="header">
    <div class="z_top b-header-blur b-header-blur-black" style=" height: 50px;">
        <div class="container">
            <div class="b-header-mask-wrp">
                <div class="b-header-mask" style="background-color: hsla(0,0%,100%,0.13);"></div>
            </div>
            <div class="z_header">
                <div class="z_top_nav">
                    <ul style=" margin-top: 2px;">
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
				<a href="javascript:void(0)" class="i-link">历史</a>
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
                        <li class="u-i b-post" style=" display: block;text-align: center;font-size: 14px;background-color:#d8527f;border-radius: 0 0 6px 6px;height: 54px;line-height: 48px;"><a class="i-link" href="<?php echo mac_url('gbook/index'); ?>">留 言</a>
                            <ul class="s-menu" style=" top: 53px;">
                                <li><a href="<?php echo mac_url('gbook/index'); ?>"><i class="icon icon-vp"></i><em>求 片</em></a></li>
                                <li><a href="<?php echo mac_url('gbook/index'); ?>"><i class="icon icon-vm"></i><em>建 议</em></a></li>
                                <li><a href="<?php echo mac_url('gbook/index'); ?>"><i class="icon icon-vc"></i><em>漏 洞</em></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
				<div class="search">
                        <form action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();" id="searchform"  method="post">
                            <input id="wd" name="wd" type="text" class="mac_wd search-keyword" id="search-keyword" autocomplete="on" accesskey="s" value=""<?php if($maccms['aid']==13): ?><?php echo $param['wd']; endif; ?>" placeholder="输入关键词..." value="">
                            <button id="button" type="submit" class="search-submit" ></button>
                        </form></div>
            </div>
        </div>
    </div>
    </div>
<style>
#container{width: 100%;}
.container{-width: 1280px;margin: 0 auto;}
.search{position: absolute;top: 4px;right: 230px;z-index: 10000;}
.search #searchform{background-color: rgba(255,255,255,0.88);display: block;height: 32px;border-radius: 21px;transition: .2s background-color;border: 1px solid #e0e0e0;margin-top: 2px;}
.search .search-keyword{float: left;width: 151px;color: #222;font-size: 12px;overflow: hidden;height: 32px;line-height: 32px;padding: 0 12px;border: 0;box-shadow: none;background-color: transparent;}
.search button.search-submit{display: block;position: absolute;right: 0;width: 48px;min-width: 0;cursor: pointer;height: 32px;background: url(/template/b/images/icons.png) -653px -720px;margin: 0;padding: 0;border: 0;}
.column-lft{-overflow: hidden;zoom: 1;width: 900px;}
.playlist ul li a{-width: calc((100% - 80px)/8);}
.column-rgt{-margin-right: 40px;}
.z_top .i-link{padding: 0 10px;}
</style>	                   

    <div id="container">

        <div class="drama-box"style="background: #000;">

            <div id="thumb" style="opacity: 0.5;"><img src="<?php echo mac_url_img($obj['vod_pic']); ?>" alt="<?php echo $obj['vod_name']; ?>"></div>

            <!--当前位置-->

            <!--h3 class="position"><a href='<?php echo $maccms['path']; ?>'>首页</a>  »  <a href="<?php echo mac_url_type($obj['type_1']); ?>"><?php echo $obj['type_1']['type_name']; ?></a>  »  <a href="<?php echo mac_url_type($obj['type']); ?>"><?php echo $obj['type']['type_name']; ?></a>  »  <a href='<?php echo mac_url_vod_detail($obj); ?>'><?php echo $obj['vod_name']; ?></a> 在线观看</h3-->

            <!--影片详细介绍-->

            <div class="infobox clearfix">

                <div class="thumb"><img src="<?php echo mac_url_img($obj['vod_pic']); ?>" alt="<?php echo $obj['vod_name']; ?>" title="<?php echo $obj['vod_name']; ?>"><em><?php if($vo['vod_serial'] > 0): ?>更新至<?php echo $vo['vod_serial']; else: ?><?php echo $vo['vod_remarks']; endif; ?></em></div>

                <div class="drama">

                    <div class="drama-tit">

                        <h3><?php echo $obj['vod_name']; ?></h3>

                        <div class="sname">分类：<?php echo mac_url_create($obj['vod_class'],'class'); ?><a href="<?php echo mac_url_type($obj['type']); ?>"><?php echo $obj['type']['type_name']; ?></a></div>

                        <div class="score"><i>豆瓣</i><span class="text"><?php echo $obj['vod_douban_score']; ?></span></div>

                    </div>

                    <div class="drama-data">

                        <div>

                            <label class="intro">导演：<?php echo $obj['vod_director']; ?></label>

                        </div>

                        <div>

                            <label>地区：<?php echo $obj['vod_area']; ?></label>

                            <label>语言：<?php echo $obj['vod_lang']; ?></label>

                        </div>

                        <div>

                            <label>分类：<a href="<?php echo mac_url_type($obj['type']); ?>"><?php echo $obj['type']['type_name']; ?></a></label>

                            <label>类型：<?php echo mac_url_create($obj['vod_class'],'class'); ?>

                            </label>

                        </div>

                        <div>

                            <label>时间：<?php echo date('Y-m-d',$obj['vod_time']); ?></label>

                            <label>年代：<?php echo mac_url_create($obj['vod_year'],'year'); ?></label>

                        </div>

                        <div style="width: 820px;">

                            <label class="intro">剧情：<?php echo mac_substring($obj['vod_blurb'],180); ?>...
                            </label>
                                                    </div>

                        <div style="display:none"><span class="mac_hits hits" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-type="hits"></span></div>

                    </div>

                    <div class="drama-bottom">

                        <div class="save" ><a href="<?php echo mac_url_vod_play($obj,['sid'=>1,'nid'=>1]); ?>" ;" data-type="2" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>"style="border-radius: 8px;background-color: #00a1d6;border: 1px solid #00a1d6;text-indent: 55px;padding: 0 20px 0 22px;"></i>立即播放</a><div class="pic-wrapper"style=" background: url(<?php echo $maccms['path_tpl']; ?>images/vipbtn-icon.png) no-repeat;display: block;position: absolute;width: 68px;height: 62px;top: -14px;left: 0;cursor: pointer;"></div></div>

                        <div class="save" ><a href="javascript:void(0)"  class="mac_ulog" data-type="2" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" style="border-radius: 8px;background-color: #f36392;border: 1px solid #f36392;"><i class="i-link i-save"></i>收藏</a></div>

 
                    </div>

                </div>

            </div>

        <div class="notice-box"><span class="snvd">【<b>温馨提示</b>】：【<b>DVD</b>-普通清晰版】【<b>BD</b>-高清无水印】【<b>HD</b>-高清版】【<b>TS</b>-抢先非清晰版】 - 其中，<b>BD</b>和<b>HD</b>版本不太适合网速过慢的用户观看。</span></div>

        </div>

		</div>



        <div class="container" id="content">

            <div class="column-rgt">



                    <?php echo $yzm['home']['ad']['ad_2']?>


                    <div class="section_aside_tit sort_nav">

                        <h3>热播榜</h3>

                        <div class="module-tab pull-right" id="mytabs3r"><span class="active">最新</span><span>周榜</span><span>总榜</span></div>

                    </div>

                    <div class="module-box" id="mytab3r">

                        <ul><?php $__TAG__ = '{"num":"9","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key == 1): ?><li class="first"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><i><?php echo $key; ?></i><div class="first-title"><b><?php echo $vo['vod_name']; ?></b></div><img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"></a></li><?php else: ?>

                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><?php echo $vo['vod_name']; ?></a><span><?php echo date('m-d',$vo['vod_time']); ?></span></li><?php endif; endforeach; endif; else: echo "" ;endif; $__TAG__ = '{"ids":"1","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><a href="<?php echo mac_url_type($vo); ?>" target="_blank" class="more-link" style=" display: block; height: 24px; line-height: 24px; background-color: #e5e9ef; text-align: center; border: 1px solid #e0e6ed; color: #222; border-radius: 4px; transition: .2s;">查看更多 ＞</a><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                        <ul class="dn"><?php $__TAG__ = '{"num":"6","type":"current","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key == 1): ?><li class="first"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><i><?php echo $key; ?></i><div class="first-title"><b><?php echo $vo['vod_name']; ?></b></div><img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"></a></li><?php else: ?>

                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><?php echo $vo['vod_name']; ?></a><span><?php echo date('m-d',$vo['vod_time']); ?></span></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                        <ul class="dn"><?php $__TAG__ = '{"num":"6","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;if($key == 1): ?><li class="first"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><i><?php echo $key; ?></i><div class="first-title"><b><?php echo $vo['vod_name']; ?></b></div><img class="item-lazy" src="/<?php echo $yzm['pic']['lazy'];?>" data-echo="<?php echo mac_url_img($vo['vod_pic']); ?>" alt="<?php echo $vo['vod_name']; ?>"></a></li><?php else: ?>

                            <li<?php if($key < 4): ?> class="hot"<?php endif; ?>><i><?php echo $key; ?></i><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?> <?php echo $vo['vod_remarks']; ?>"><?php echo $vo['vod_name']; ?></a><span><?php echo date('m-d',$vo['vod_time']); ?></span></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                    </div>

                </div>  

            <div class="column-lft">
			<?php if($obj['vod_copyright'] == 1 && $GLOBALS['config']['app']['copyright_status'] == 1): ?>
<div class="ui-box marg" id="playlist_0">
    <div class="down-title">
        <?php echo $GLOBALS['config']['app']['copyright_notice']; ?>
    </div>
</div>
<?php else: ?>

                <!--在线播放地址-->
    
                <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>

                <div class="playbox playlist clearfix" id="play_<?php echo $key; ?>" name="<?php echo $vo['player_info']['from']; ?>">

                    <h3><label class="<?php echo $vo['player_info']['from']; ?>"></label><strong>【<?php echo $vo['player_info']['tip']; ?>】</strong><p class="more red"><span id="vlink_<?php echo $key; ?>_s1"><em class="over">倒序↑</em></span><span id="vlink_<?php echo $key; ?>_s2"><em onclick="Order(0,'vlink_<?php echo $key; ?>',<?php echo $key; ?>)">顺序↓</em></span></p></h3>

                    <div id="vlink_<?php echo $key; ?>"style="overflow-y: scroll;overflow-x: hidden;max-height: 152px;-min-height: 152px;">

                        <ul class="rec-list"><?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>

                            <li><a title='<?php echo $vo2['name']; ?>' href='<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>'><?php echo $vo2['name']; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                    </div>

                </div>
                 
                <?php endforeach; endif; else: echo "" ;endif; ?>



                

                <script>Wnew(8);</script>

                <!--迅雷下载地址-->

                <link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/xunlei.css"/>

                <script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/down.js"></script>

                <?php if(is_array($obj['vod_down_list']) || $obj['vod_down_list'] instanceof \think\Collection || $obj['vod_down_list'] instanceof \think\Paginator): if( count($obj['vod_down_list'])==0 ) : echo "" ;else: foreach($obj['vod_down_list'] as $key=>$vo): ?>

                <div class="ui-box marg playbox" id="downlist_<?php echo $key; ?>">

                    <div class="down-title">

                        <h2 style="border-bottom: 1px solid #cccccc59;padding: 10px 10px;"><?php echo $vo['player_info']['show']; ?>下载地址</h2><!--span>资源版本：[BD：超清无水印]  [HD：高清版]  [DVD：普通清晰版]  [TS：抢先非清晰版] - <i>手机观看需安装迅雷手机版即可在线播放！</i></span-->
                        <div class="downtools">

                            <input id="allcheck<?php echo $key; ?>" type="checkbox" name="checkall"><em>全选</em><a href="javascript:void(0);" target="_self" class="thunder_down_all">迅雷批量下载</a><a href="javascript:void(0);" target="_self" class="xf_down_all">旋风批量下载</a><span class="xuanfu">※ 若点击迅雷下载无反应，请手动复制框内下载地址到迅雷软件即可边下边播 ※</span>

                        </div>
                    </div>

                    <div class="down_list" style="overflow-y: scroll;overflow-x: hidden;max-height: 300px;-min-height: 152px;">

                        <ul id="downul">

                            <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>

                            <li>

                                <input type="checkbox" name="down_url_list_<?php echo $key; ?>" class="down_url" value="<?php echo $vo2['url']; ?>" file_name="<?php echo $vo2['name']; ?>" />

                                <p><strong class="down_part_name"><span class="filename"><?php echo $vo2['name']; ?></span><span class="filesize"></span></strong>

                                    <input type="text" class="thunder_url" value="<?php echo $vo2['url']; ?>" title="鼠标左键单击可全选后手动复制该条迅雷地址进行分享或其它操作" onclick="this.select()" />

                                </p><span><label class="thunder_down">迅雷下载</label><label class="qqdl">旋风下载</label><label class="kk">看看播放</label></span></li>

                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>

                        <div class="downtools">

                            <input id="allcheck<?php echo $key; ?>" type="checkbox" name="checkall"><em>全选</em><a href="javascript:void(0);" target="_self" class="thunder_down_all">迅雷批量下载</a><a href="javascript:void(0);" target="_self" class="xf_down_all">旋风批量下载</a><span class="xuanfu">※ 若点击迅雷下载无反应，请手动复制框内下载地址到迅雷软件即可边下边播 ※</span>

                        </div>

                    </div>

                </div>

                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
			</div>
                <div class="column-lft">

                <!--猜你喜欢-->

                <div class="favbox clearfix">

                    <h3><div class="favbox-title">除了"<strong><?php echo $obj['vod_name']; ?></strong>"你可能还喜欢以下<?php echo $obj['type']['type_name']; ?>：</div><div class="module-tab" id="mytabs8r"><span class="active">最新</span><span>随机</span><span>精选</span><span>榜单</span></div></h3>

                    <div class="hobby" id="mytab8r">

                        <ul><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

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

                        <ul class="dn"><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"time","level":"all","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

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

                        <ul class="dn"><?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>

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

                <div class="contenttext clearfix">

                    <div id="detail-desc"><?php echo $obj['vod_content']; ?></div>

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

				    <span style="display:none" class="mac_ulog_set" alt="设置内容页浏览记录" data-type="4" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>
    <span style="display:none" class="mac_history_set" alt="设置History历史记录" data-name="[<?php echo $obj['type']['type_name']; ?>]<?php echo $obj['vod_name']; ?>  <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>" data-pic="<?php echo mac_url_img($obj['vod_pic']); ?>"></span>

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




</body>

</html>