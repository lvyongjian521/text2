<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:67:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/system/template/database.htm";i:1613353803;s:85:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_start.htm";i:1613353801;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_end.htm";i:1613353801;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/commer_header.htm";i:1613353801;s:63:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/template/header_left.htm";i:1613353803;s:0:"";b:0;s:78:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_right.htm";i:1613353801;s:63:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/system/template/left.htm";i:1613353803;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/footer_simple.htm";i:1613353801;}*/?>
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
<script type="text/javascript" src="./data/template/admin_system_database_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<script src="admin/scripts/admin.js?<?php echo VERHASH;?>" ></script><script type="text/javascript" src="./data/template/admin_system_database_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
<li <?php if($operation=='export' ) { ?>class="active"<?php } ?>>
<a hidefocus="true" href="<?php echo MOD_URL;?>&op=database&operation=export">导出</a>
</li>
<li <?php if($operation=='import' ) { ?>class="active"<?php } ?>>
<a hidefocus="true" href="<?php echo MOD_URL;?>&op=database&operation=import">恢复</a>
</li>
<li <?php if($operation=='runquery' ) { ?>class="active"<?php } ?>>
<a hidefocus="true" href="<?php echo MOD_URL;?>&op=database&operation=runquery">升级</a>
</li>
</ul>
</div>
<?php if($operation=='export') { ?>
<ul class="help-block mt20">
<h5>提示信息</h5> <li>数据备份功能根据您的选择备份全部Dzz!数据，导出的数据文件可用“数据恢复”功能或 phpMyAdmin 导入。</li><li>全部备份均不包含模板文件和附件文件。模板、附件的备份只需通过 FTP 等下载 template/、data/attachment/ 目录即可，Dzz! 不提供单独备份。</li><li>MySQL Dump 的速度比 Dzz! 分卷备份快很多，但需要服务器支持相关的 Shell 权限，同时由于 MySQL 本身的兼容性问题，通常进行备份和恢复的服务器应当具有相同或相近的版本号才能顺利进行。因此 MySQL Dump 是有风险的：一旦进行备份或恢复操作的服务器其中之一禁止了 Shell，或由于版本兼容性问题导致导入失败，您将无法使用 MySQL Dump 备份或由备份数据恢复；Dzz! 分卷备份没有此限制。</li><li>数据备份选项中的设置，仅供高级用户的特殊用途使用，当您尚未对数据库做全面细致的了解之前，请使用默认参数备份，否则将导致备份数据错误等严重问题。</li><li>十六进制方式可以保证备份数据的完整性，但是备份文件会占用更多的空间。</li><li>压缩备份文件可以让您的备份文件占用更小的空间。</li>
</ul>
<div class="main-content">
<?php if(!$submit) { ?>

<form id="cpform" action="<?php echo MOD_URL;?>&op=database&operation=export&setup=1" class="form-horizontal form-horizontal-left" method="post" name="cpform">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
<input type="hidden" value="true" name="exportsubmit">
<dl>
<dt>数据备份类型:</dt>
<dd class="clearfix"><label class="radio radio-inline"><input type="radio" name="type" value="dzz" checked="" onclick="document.getElementById('showtables').style.display = 'none';">所有数据表</label></dd>
<dd class="clearfix"><label class="radio radio-inline"><input type="radio" name="type" value="custom"  onclick="document.getElementById('showtables').style.display = '';">自定义备份</label></dd>
<dd id="showtables" class="clearfix" style="display:none;border:1px solid #D2D2D2">
<h4 class="clearfix ml20"> <label class="checkbox-inline" for ="chkalltables"><input  name="chkall" onclick="checkAll('prefix', this.form, 'customtables', 'chkall', true)" checked="checked" type="checkbox" id="chkalltables">全选 - 所有数据表</label></h4>
<ul class="list-unstyled"><?php if(is_array($dztables)) foreach($dztables as $value) { ?><li class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="customtables[]" value="<?php echo $value;?>"  checked="checked"><?php echo $value;?></label></li>
<?php } ?>
</ul>
</dd>
</dl>
<div id="advanceoption" style="display:none">

<dl>
<dt>数据备份方式:</dt>
<dd class="clearfix"><label class="radio radio-inline"><input type="radio" name="method" value="shell" onclick="if('0') {if(this.form.sqlcompat[2].checked==true) this.form.sqlcompat[0].checked=true; this.form.sqlcompat[2].disabled=true; this.form.sizelimit.disabled=true;} else {this.form.sqlcharset[0].checked=true; for(var i=1; i&lt;=5; i++) {if(this.form.sqlcharset[i]) this.form.sqlcharset[i].disabled=true;}}" id="method_shell">系统 MySQL Dump (Shell) 备份</label></dd>
<dd class="clearfix"><label class="radio radio-inline"><input  type="radio" name="method" value="multivol" checked="checked" onclick="this.form.sqlcompat[2].disabled=false; this.form.sizelimit.disabled=false; for(var i=1; i<=5; i++) {if(this.form.sqlcharset[i]) this.form.sqlcharset[i].disabled=false;}" id="method_multivol">Dzz! 分卷备份 - 文件长度限制(单位：KB)</label>
<input type="text" class="input-sm form-control" style="width:50px;" name="sizelimit" value="2048">
</dd>
</dl>
<dl>
<dt>使用扩展插入(Extended Insert)方式:</dt>
<dd class="clearfix"><label class="radio radio-inline"><input  type="radio" name="extendins" value="1">是</label><label class="radio radio-inline"><input  type="radio" name="extendins" value="0" checked="checked">否</label></dd>
</dl>
<dl>
<dt>建表语句格式:</dt>
<dd class="clearfix"><label class="radio radio-inline"><input  type="radio" name="sqlcompat" value="" checked="">默认</label></dd>
<dd class="clearfix"><label class="radio radio-inline"><input  type="radio" name="sqlcompat" value="MYSQL40"> MySQL 3.23/4.0.x</label></dd>
<dd class="clearfix"><label class="radio radio-inline"><input  type="radio" name="sqlcompat" value="MYSQL41" disabled="">  MySQL 4.1.x/5.x</label></dd>
</dl>
<dl>
<dt>强制字符集:</dt>
<dd class="clearfix"><label class="radio radio-inline"><input  type="radio" name="sqlcharset" value="">强制字符集</label>
<label class="radio radio-inline"><input  type="radio" name="sqlcharset" value="utf8">  UTF8</label></dd>
</dl>
<dl>
<dt>十六进制方式:</dt>
<dd class="clearfix"><label class="radio radio-inline"><input type="radio" name="usehex" value="1" checked="checked">是</label>
<label class="radio radio-inline"><input type="radio" name="usehex" value="0" >否</label></dd>
</dl>
<dl>
<dt>压缩备份文件:</dt>
<dd class="clearfix"><label class="radio radio-inline"><input type="radio" name="usezip" value="1">多分卷压缩成一个文件</label></dd>
<dd class="clearfix"><label class="radio radio-inline"><input type="radio" name="usezip" value="2">每个分卷压缩成单独文件</label></dd>
<dd class="clearfix"><label class="radio radio-inline"><input type="radio" name="usezip" value="0" checked>不压缩</label></dd>
</dl>
<dl>
<dt>备份文件名:</dt>
<dd class="clearfix"><input type="text" class="form-control" name="filename" value="<?php echo $defaultfilename;?>"></dd>
</dl>
</div>
<dl>
<dd class="clearfix"><button type="submit" class="btn btn-primary" name="exportsubmit" value="true" >提  交</button>
&nbsp; &nbsp;<label class="checkbox inline"><input  type="checkbox" value="1" onclick="document.getElementById('advanceoption').style.display = document.getElementById('advanceoption').style.display == 'none' ? '' : 'none'; this.value = this.value == 1 ? 0 : 1; this.checked = this.value == 1 ? false : true" id="btn_more">更多选项</label></dd>
</dl>
</form>
<?php } else { ?>
<div class="well">
<?php if($msg) { ?>
<p class="<?php echo $msg_type;?>"><?php echo $msg;?></p>
<?php } if($redirecturl) { ?>
<p class="text-info">
<a href="<?php echo $redirecturl;?>" class="lightlink">如果您的浏览器没有自动跳转，请点击这里</a>
</p>
<script type="text/JavaScript">setTimeout(function(){location.href='<?php echo $redirecturl;?>';}, 2000);</script>
<?php } ?>
</div>
<?php } ?>
</div>
<?php } elseif($operation=='import') { ?>
<div class="main-content" style="border:1px solid #FFF">
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
<?php } else { ?>

<ul class="help-block">
<h5>提示信息</h5> <li>本功能在恢复备份数据的同时，将全部覆盖原有数据，请确定恢复前已将程序关闭，恢复全部完成后可以将程序重新开放。</li><li>恢复数据前请在 Dzz!  安装文件目录下tool文件夹内找到 restore.php 文件，然后将 restore.php 文件上传到程序文件夹data目录下。<b>为了您站点的安全，成功恢复数据后请务必及时删除 restore.php 文件。</b></li><li>您可以在数据备份记录处查看站点的备份文件的详细信息，删除过期的备份,并导入需要的备份。</li>
</ul>
<?php echo $do_import_option;?>
<form id="cpform" action="<?php echo MOD_URL;?>&op=database&operation=import" class="form-horizontal form-horizontal-left " method="post" name="cpform">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
<input type="hidden" value="true" name="deletesubmit">
<table class="table table-hover" style="border-top:1px solid #DDD">
<thead>
<th></th>
<th>文件名</th>
<th>版本</th>
<th>时间</th>
<th>类型</th>
<th>大小</th>
<th>方式</th>
<th>卷数</th>
<th></th>
</thead><?php if(is_array($list)) foreach($list as $key => $val) { ?><tr>
<td><input type="checkbox" name="delete[]" value="<?php echo $key;?>"></td>
<td>
<?php if($val['list']) { ?>
<a href="javascript:;" onclick="jQuery('#exportlog_<?php echo $key;?>').toggle()"><?php echo $key;?></a>
<?php } else { ?>
<a href="<?php echo $val['filename'];?>"><?php echo $key;?></a>
<?php } ?>
</td>
<td><?php echo $val['version'];?></td>
<td><?php echo $val['dateline'];?></td>
<td><?php echo $val['ftype'];?></td>
<td><?php echo $val['size'];?></td>
<td><?php echo $val['method'];?></td>
<td><?php echo $val['volume'];?></td>
<td>
<?php if($val['list']) { ?>
<a href="<?php echo $datasiteurl;?>restore.php?operation=import&from=server&datafile_server=<?php echo $val['datafile_server'];?>&importsubmit=yes" <?php if($info[ 'version'] !=$_G[ 'setting'][ 'version']) { ?> onclick="return confirm('导入和当前 Dzz! 版本不一致的数据极有可能产生无法解决的故障，您确定继续吗？');"<?php } else { ?>onclick="return confirm('您确定导入该备份吗？');"<?php } ?>target="_blank">导入</a>
<?php } else { ?>
<a href="<?php echo $datasiteurl;?>restore.php?operation=importzip&datafile_server=<?php echo $info['datafile_server'];?>&importsubmit=yes" onclick="return confirm('您确定解压该备份吗？');" target="_blank">解压缩</a>
<?php } ?>
</td>
</tr>
<thead id="exportlog_<?php echo $key;?>" style="display:none;"><?php if(is_array($val['list'])) foreach($val['list'] as $key1 => $val1) { ?><tr>
<td></td>
<td>
<a href="<?php echo $val1['filename'];?>"><?php echo $val1['filename'];?></a>
</td>
<td><?php echo $val1['version'];?></td>
<td><?php echo $val1['dateline'];?></td>
<td></td>
<td><?php echo $val1['size'];?></td>
<td></td>
<td><?php echo $val1['volume'];?></td>
<td></td>
</tr>
<?php } ?>
</thead>
<?php } ?>
<thead>
<tr>
<td colspan="15"><input type="checkbox" name="chkall" id="chkallspKI" onclick="checkAll('prefix', this.form, 'delete')">删？&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="exportsubmit" value="true" >提  交</button>
</td>
</tr>
</thead>
</table>
</form>
<?php } ?>
</div>
<?php } elseif($operation=='runquery') { ?>
<div class="main-content">

<ul class="help-block">
<h4>提示信息</h4>
<li>出于安全考虑，Dzz! 后台默认情况下禁止 SQL 语句直接执行，只能使用常用 SQL 当中的内容，<br />如果您想自己随意书写 SQL 升级语句，需要将 config/config_global.php 当中的 <?php echo $_config['admincp']['runquery'];?> 设置修改为 1。</li>
</ul>
<?php if($msg) { ?>
<div class="well">
<p class="<?php echo $msg_type;?>"><?php echo $msg;?></p>
<?php if($redirecturl) { ?>
<p class="text-info">
<a href="<?php echo $redirecturl;?>" class="lightlink">如果您的浏览器没有自动跳转，请点击这里</a>
</p>
<script type="text/JavaScript">setTimeout(function(){location.href='<?php echo $redirecturl;?>';}, 5000);</script>
<?php } ?>
</div>
<?php } else { ?>

<form id="cpform" action="<?php echo MOD_URL;?>&op=database&operation=runquery" method="post" name="cpform">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
<input type="hidden" value="true" name="sqlsubmit">
<dl>
<dt>Dzz! 数据库升级 - 请将数据库升级语句粘贴在下面</dt>
<dd class="clearfix"><textarea cols="85" rows="10" name="queries" style="width:500px;"></textarea></dd>
<dd class="clearfix mt10"><label class="checkbox-inline"><input name="createcompatible" type="checkbox" value="1" checked="checked" />转换建表语句格式和字符集</label></dd>
</dl>
<dl>
<dd class="clearfix"><button type="submit" class="btn btn-primary">提  交</button></dd>
</dl>
</form>
<?php } ?>
</div>
<?php } ?>
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