<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:63:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/system/template/cron.htm";i:1613353803;s:85:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_start.htm";i:1613353801;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_end.htm";i:1613353801;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/commer_header.htm";i:1613353801;s:63:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/template/header_left.htm";i:1613353803;s:0:"";b:0;s:78:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_right.htm";i:1613353801;s:63:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/system/template/left.htm";i:1613353803;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/footer_simple.htm";i:1613353801;}*/?>
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
<script type="text/javascript" src="./data/template/admin_system_cron_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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

<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<script src="admin/scripts/admin.js?<?php echo VERHASH;?>" ></script>
<style>
input[type="text"] {
margin: 0;
}
</style><script type="text/javascript" src="./data/template/admin_system_cron_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
<div class="main-header clearfix">
<ul class="nav nav-pills nav-pills-bottomguide">
<li <?php if(empty($_GET[ 'edit']) && empty($_GET[ 'run'])) { ?>class="active"<?php } ?>>
<a hidefocus="true" href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&op=cron">计划任务</a>
</li>
<?php if(!empty($_GET['edit'])) { ?>
<li class="active">
<a hidefocus="true" href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&op=cron&edit=<?php echo $_GET['edit'];?>">编辑计划任务</a>
</li>
<?php } if(!empty($_GET['run'])) { ?>
<li class="active">
<a hidefocus="true" href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&op=cron&run=<?php echo $_GET['run'];?>">运行计划任务</a>
</li>
<?php } ?>
</ul>
</div>
<div class="main-content" style="padding:15px;border-top:1px solid #FFF">
<?php if($msg) { ?>
<div class="well">
<p class="<?php echo $msg_type;?>"><?php echo $msg;?></p>
<?php if($redirecturl) { ?>
<p class="text-info">
<a href="<?php echo $redirecturl;?>" class="lightlink">如果您的浏览器没有自动跳转，请点击这里</a>
</p>
<script type="text/JavaScript">setTimeout(function(){location.href='<?php echo $redirecturl;?>';}, 2000);</script>
<?php } ?>
</div>
<?php } else { if($_GET['edit']>0) { ?>
<ul class="help-block">
<h4>提示信息</h4> <li>您正在对系统内置的计划任务进行编辑，除非非常了解 Dzz! 结构，否则强烈建议不要修改默认设置。</li><li>请在修改之前记录原有设置，不当的设置将可能导致站点出现不可预期的错误。</li>
</ul>
<form id="cpform" action="<?php echo BASESCRIPT;?>?mod=system&op=cron&edit=<?php echo $cronid;?>" class="form-horizontal form-horizontal-left" method="post" name="cpform">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
<input type="hidden" value="true" name="editsubmit">
<dl>
<dt>每周:</dt>
<dd class="clearfix">
<select name="weekdaynew" class="form-control">
<option value="-1" selected="selected">*</option>
<?php echo $weekdayselect;?>
</select>
<span class="help-inline">设置星期几执行本任务，“*”为不限制，本设置会覆盖下面的“日”设定</span>
</dd>

</dl>
<dl>
<dt>每日:</dt>
<dd class="clearfix">
<select name="daynew" class="form-control">
<option value="-1" selected="selected">*</option>
<?php echo $dayselect;?>
</select>
<span class="help-inline">设置哪一日执行本任务，“*”为不限制</span>
</dd>

</dl>
<dl>
<dt>小时:</dt>
<dd class="clearfix">
<select name="hournew" class="form-control">
<option value="-1" selected="selected">*</option>
<?php echo $hourselect;?>
</select>
<span class="help-inline">设置哪一小时执行本任务，“*”为不限制</span>
</dd>
</dl>
<dl>
<dt>分钟:</dt>
<dd class="clearfix">
<input name="minutenew" value="<?php echo implode(',',$cron[minute])?>" type="text" class="form-control">
<span class="help-inline">设置哪些分钟执行本任务，至多可以设置 12 个分钟值，多个值之间用半角逗号 "," 隔开，留空为不限制</span>
</dd>
</dl>
<dl>
<dt>任务脚本:</dt>
<dd class="clearfix">
<input name="filenamenew" value="<?php echo $cron['filename'];?>" type="text" class="form-control">
<span class="help-inline">设置本任务的执行程序文件名，请勿包含路径，系统计划任务位于 core/cron/ 目录中</span>
</dd>

</dl>
<dl>
<dd class="clearfix">
<button type="submit" class="btn btn-primary" name="exportsubmit" value="true">提  交</button>
</dd>
</dl>
</form>
<?php } elseif($_GET['run']) { } else { ?>
<ul class="help-block">
<h5>提示信息</h5> <li>计划任务是 Dzz! 提供的一项使系统在规定时间自动执行某些特定任务的功能，在需要的情况下，您也可以方便的将其用于站点功能的扩展。</li><li>计划任务是与系统核心紧密关联的功能特性，不当的设置可能造成站点功能的隐患，严重时可能导致站点无法正常运行，因此请务必仅在您对计划任务特性十分了解，并明确知道正在做什么、有什么样后果的时候才自行添加或修改任务项目。</li><li>此处和其他功能不同，本功能中完全按照站点系统默认时差对时间进行设定和显示，而不会依据某一用户或管理员的时差设定而改变显示或设置的时间值。</li>
</ul>
<form id="cpform" action="<?php echo BASESCRIPT;?>?mod=system&op=cron" class="form-horizontal form-horizontal-left" style="margin:-15px -15px 0" method="post" name="cpform">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
<input type="hidden" value="true" name="cronssubmit">
<table class="table">
<thead>
<th width="45"></th>
<th>名称</th>
<th>可用</th>
<th>类型</th>
<th>时间</th>
<th>上次执行时间</th>
<th>下次执行时间</th>
<th></th>
</thead><?php if(is_array($crons)) foreach($crons as $cron) { ?><tr>
<td align="right"><input type="checkbox" name="delete[]" value="<?php echo $cron['cronid'];?>" <?php if($cron['type']=='system' ) { ?>disabled
<?php } ?>></td>
<td>
<p class="clearfix">
<input type="text" name="namenew[<?php echo $cron['cronid'];?>]" class="form-control" value="<?php echo $cron['name'];?>"></p>
<strong><?php echo $cron['filename'];?></strong>
</td>
<td><label class="checkbox-inline"><input  type="checkbox" name="availablenew[<?php echo $cron['cronid'];?>]" value="1" <?php if($cron['available']>0) { ?>checked="checked"<?php } ?>></label></td>
<td>
<?php if($cron['type'] == 'system') { ?>
内置
<?php } elseif($cron['type'] == 'user') { ?>
自定义
<?php } ?>
</td>
<td><?php echo $cron['time'];?></td>
<td><?php echo $cron['lastrun'];?></td>
<td><?php echo $cron['nextrun'];?></td>

<td>
<a href="<?php echo BASESCRIPT;?>?mod=system&op=cron&edit=<?php echo $cron['cronid'];?>">编辑</a>
<br />
<?php if($cron['run']) { ?>
<a href="<?php echo BASESCRIPT;?>?mod=system&op=cron&run=<?php echo $cron['cronid'];?>">执行</a>
<?php } else { ?>
<a href="javascript:;" class="text-muted">执行</a>
<?php } ?>
</td>
</tr>

<?php } ?>
<tr>
<td>新增</td>
<td colspan="10"><input type="text" name="newname" value="" class="form-control"></td>
</tr>
<tr>
<td colspan="15" style="border-bottom:none"><label class="checkbox-inline ml20"><input type="checkbox" name="chkall" id="chkallspKI"  onclick="checkAll('prefix', this.form, 'delete')">删？</label>&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="exportsubmit" value="true">提  交</button>
</td>
</tr>
</table>
</form>
<?php } } ?>
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