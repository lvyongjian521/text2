<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:70:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/system/template/updatecache.htm";i:1613353803;s:85:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_start.htm";i:1613353801;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_end.htm";i:1613353801;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/commer_header.htm";i:1613353801;s:63:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/template/header_left.htm";i:1613353803;s:0:"";b:0;s:78:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_right.htm";i:1613353801;s:63:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/system/template/left.htm";i:1613353803;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/footer_simple.htm";i:1613353801;}*/?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } ?><?php echo $_G['setting']['sitename'];?> </title>
<meta name="keywords" content="<?php if(!empty($_G['setting']['metakeywords'])) { echo htmlspecialchars($_G['setting']['metakeywords']); } ?>" />
<meta name="description" content="<?php if(!empty($_G['setting']['metadescription'])) { echo htmlspecialchars($_G['setting']['metadescription']); ?> <?php } ?>" />
<meta name="generator" content="DzzOffice" />
<meta name="author" content="DzzOffice" />
<meta name="copyright" content="2012-<?php echo dgmdate(TIMESTAMP,'Y-m-d');?> www.dzzoffice.com" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<meta name="renderer" content="webkit">
<base href="<?php echo $_G['siteurl'];?>" />
<link rel="stylesheet" type="text/css" href="static/bootstrap/css/bootstrap.min.css?<?php echo VERHASH;?>">
<link rel="stylesheet" type="text/css" href="static/css/app_manage.css?<?php echo VERHASH;?>">
<link rel="stylesheet" type="text/css" href="static/dzzicon/icon.css?<?php echo VERHASH;?>"/>
<link rel="stylesheet" href="static/popbox/popbox.css">
<script type="text/javascript" src="static/jquery/jquery.min.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/jquery/jquery.json-2.4.min.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>',MOD_PATH='<?php echo MOD_PATH;?>',APP_URL='<?php echo MOD_URL;?>',MOD_URL='<?php echo MOD_URL;?>';</script>
<script type="text/javascript" src="./data/template/admin_system_updatecache_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/popbox/jquery.popbox.js?<?php echo VERHASH;?>" ></script>
<!--[if lt IE 9]>
  <script src="static/bootstrap/js/html5shiv.min.js" ></script>
  <script src="static/bootstrap/js/respond.min.js" ></script>
<![endif]--><?php Hook::listen('header_tpl') ?> <script type="text/javascript">
 if(!!window.ActiveXObject || "ActiveXObject" in window){
 try{$.ajaxSetup({ cache: false });}catch(e){}
 window.MSIE=1;
 } 
</script>
<link href="static/css/common.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">

<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script><script type="text/javascript" src="./data/template/admin_system_updatecache_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="<?php echo $bodyClass;?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<nav class="navbar navbar-inverse resNav bs-top-container" >
<div class="resNav-item resNav-left">     
    <ul class="nav navbar-nav navbar-nav-left" style="min-width:168px"> 
    <li>
       <a class="leftTopmenu" href="index.php?mod=appmanagement" style="padding:8px"><div class="gb_fc"><span class="dzz dzz-chevron-left" style="display:block"></span></div></a>
    </li>
    <li>
        <a href="<?php echo MOD_URL;?>">系统工具</a>
    </li> 
</ul>    </div>
    <div class="resNav-item resNav-center">    </div>
     <div class="resNav-item resNav-right">
     <ul class="nav navbar-nav">
<li>
<a href="javascript:;">
<span class="navbar-borderleft"></span>
</a>
</li>
<li class="app_popup-parent">

<a href="javascript:;" id="desktop_app" data-href="index.php?mod=system&amp;op=app_ajax&amp;operation=app" class="app_popup_icon js-popbox" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover"><span class="dzz dzz-apps basil"></span></a>
</li>
<li>
<a href="javascript:;" id="dzz_notification" data-href="index.php?mod=system&amp;op=notification&amp;filter=new" class="navbar-notice js-popbox" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover">
<span class="dzz dzz-notifications"></span>
<span class="badge hide">&nbsp;</span>
</a>
</li>
<li>
<a href="javascript:;" class="imgHeight js-popbox" data-href="user.php?mod=space&amp;op=navmenu&amp;modname=<?php echo MOD_NAME;?>" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover"><?php echo avatar_block($_G[uid]);?></a>
</li>
</ul></div>
</nav>


<script type="text/javascript">
jQuery(document).ready(function(e) {
    _header.init('<?php echo FORMHASH;?>');//初始化头部效果
    //_header.Topcolor();
//_notice.init();
jQuery(".resNav .js-popbox").each(function(){
jQuery(this).popbox();
});
_notice.getNotificationCount();
});
_notice={};
_notice.flashStep=1;
_notice.checkurl='index.php?mod=system&op=notification&filter=checknew';
_notice.normalTitle= document.title;
_notice.getNotificationCount=function(){
jQuery.getJSON(_notice.checkurl,function(json){
var sum=parseInt(json.sum);
_notice.showTips(sum);
if(json.timeout>0) window.setTimeout(_notice.getNotificationCount,json.timeout);
});
}
_notice.showTips=function(sum){
if(sum>0){
jQuery('#dzz_notification>span.badge').html(sum).removeClass('hide');
jQuery('#dzz_notification>span.dzz').hide();
//_notice.flashTitle();
}else{
jQuery('#dzz_notification>span.badge').addClass('hide');
jQuery('#dzz_notification>span.dzz').show();
//_notice.flashTitle(1);
}
}
_notice.flashTitle=function(flag){
//仅窗口不在焦点时闪烁title，回到焦点时停止闪烁并将title恢复正常
if(flag ||　CurrentActive){//当前处于焦点
document.title=_notice.normalTitle;
_notice.flashTitleRun = false;
return;//退出循环
}
_notice.flashTitleRun = true;
_notice.flashStep++;
if (_notice.flashStep==3) {_notice.flashStep=1;}
if (_notice.flashStep==1) {document.title="【您有新的通知】";}
if (_notice.flashStep==2) {document.title="【　　　　　　】";}
setTimeout(function(){_notice.flashTitle();},500);  //循环
}
</script><div class="bs-container clearfix">
<div class="bs-left-container  clearfix"><?php $oparr=array('updatecache','database','cron','systemupgrade' );?><?php $leftmenu=array();?><?php foreach($oparr as $key => $value){?><?php $leftmenu[$value]=array('title'=>lang($value),'active'=>'');?><?php if($value==$op) $leftmenu[$value]['active']='class="active"';?><?php }?><ul class="nav-stacked">
   <?php if(is_array($leftmenu)) foreach($leftmenu as $key => $value) { ?>        <li <?php echo $value['active'];?>><a hidefocus="true" href="<?php echo MOD_URL;?>&op=<?php echo $key;?>"><?php echo $value['title'];?></a></li>
    <?php } ?> 
</ul></div>
<div class="left-drager">
</div>

<div class="bs-main-container  clearfix">

<div class="main-header">
<div class="clearfix" style="line-height:40px;padding:0 10px">
<!--				<strong style="font-size:14px;">更新缓存</strong>-->
<span class="text-muted" id="step1" <?php if($step==1) { ?>style="color:green"<?php } ?>>1.确认开始</span>
<span class="text-muted" id="step2" <?php if($step==2) { ?>style="color:green"<?php } ?>>2.开始更新</span>
<span class="text-muted" id="step3" <?php if($step==3) { ?>style="color:green"<?php } ?>>3.更新结果</span>
</div>
</div>
<div class="main-content" style="padding:20px;border-top:1px solid #FFF">
<div class="well well-sm">
<?php if($step==1) { ?>
<form method="post" class="form-horizontal form-horizontal-left" action="<?php echo MOD_URL;?>&op=updatecache&step=2">
<input name="formhash" value="<?php echo VERHASH;?>" type="hidden">
<p class="clearfix ml20">
<label class="checkbox-inline">
              	<input name="type[]" value="data"   checked="" type="checkbox">
              	数据缓存
</label>
<label class="checkbox-inline">
<input name="type[]" value="tpl" id="tplcache"  checked="" type="checkbox">
              				模板缓存
</label>	
</p>
<p class="clearfix ml20">
<input class="btn btn-primary" name="confirmed" value="确定" type="submit"> &nbsp;
<script type="text/javascript">
if(history.length > (BROWSER.ie ? 0 : 1)) document.write('<input type="button" class="btn btn-default" value="取消" onClick="history.go(-1);">');
</script>
</p>
</form>
<?php } elseif($step==2) { ?>
<p class="ml20">正在更新缓存，请稍候......</p>
<p class="text-success ml20">
<a href="<?php echo MOD_URL;?>&op=updatecache&step=3&type=data_tpl" class="lightlink">如果您的浏览器没有自动跳转，请点击这里</a>
</p>
<script type="text/JavaScript">setTimeout(function(){location.href='<?php echo MOD_URL;?>&op=updatecache&step=3&type=data_tpl';}, 2000);</script>
<?php } elseif($step==3) { ?>
<p class="text-success ml20" style="margin:10px;">全部缓存更新完毕</p>
<script type="text/javascript">
window.setTimeout(function() { location.href = '<?php echo MOD_URL;?>&op=updatecache'; }, 5000);
</script>
<?php } ?>
</div>
<ul class="help-block">
<h5>提示信息</h5> <li>当站点进行了数据恢复、升级或者工作出现异常的时候，您可以使用本功能重新生成缓存。更新缓存的时候，可能让服务器负载升高，请尽量避开会员访问的高峰时间</li>
				<li>数据缓存：更新站点的全部数据缓存</li>
				<li>模板缓存：更新论坛模板、风格等缓存文件，当您修改了模板或者风格，但是没有立即生效的时候使用</li>
				
</ul>
</div>
</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
</script>
<script src="static/bootstrap/js/bootstrap.min.js?<?php echo VERHASH;?>" ></script><?php output();?><?php updatesession();?><?php if(debuginfo()) { ?>
<script type="text/javascript">
try{
if(console && console.log){
console.log('Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries <?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if(C::memory()->type) { ?>, <?php echo ucwords(C::memory()->type); ?> On<?php } ?>.');
}
}catch(e){}
</script>
<?php } ?>	
<?php if(!$_G['setting']['bbclosed']) { if(!isset($_G['cookie']['sendmail'])) { ?>
<script type="text/javascript" src="misc.php?mod=sendmail&rand=<?php echo $_G['timestamp'];?>" ></script>
<?php } ?>
     <script type="text/javascript" src="misc.php?mod=sendwx&rand=<?php echo $_G['timestamp'];?>" ></script>
<?php } if($_G['uid'] && $_G['adminid'] == 1) { if(!isset($_G['cookie']['checkupgrade'])) { ?>
<script type="text/javascript">jQuery.getScript('misc.php?mod=upgrade&action=checkupgrade&rand=<?php echo $_G['timestamp'];?>');</script>
<?php } if(!isset($_G['cookie']['checkappupgrade'])) { ?>
<script type="text/javascript">jQuery.getScript('misc.php?mod=upgrade&action=checkappupgrade&rand=<?php echo $_G['timestamp'];?>');</script>
<?php } if(!isset($_G['cookie']['upgradenotice'])) { ?>
<script type="text/javascript">
jQuery(document).ready(function(){
try{jQuery('#systemNotice').load('misc.php?mod=upgrade&action=upgradenotice');}catch(e){};	
});
</script>
<div id="systemNotice" class="systemNotice" style="position: fixed;right:10px;bottom:10px;max-width:50%;box-shadow:0px 5px 10px RGBA(0,0,0,0.3);z-index:999999"></div>
<?php } } if($_G['setting']['statcode']) { ?>
<?php echo $_G['setting']['statcode'];?>
<?php } ?> 
</body>
</html>