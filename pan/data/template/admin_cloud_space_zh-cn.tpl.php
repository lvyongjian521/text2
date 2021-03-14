<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:10:{s:63:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/cloud/template/space.htm";i:1613353803;s:85:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_start.htm";i:1613353801;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_end.htm";i:1613353801;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/commer_header.htm";i:1613353801;s:69:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/cloud/template/header_left.htm";i:1613353803;s:0:"";b:0;s:78:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_right.htm";i:1613353801;s:62:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/cloud/template/left.htm";i:1613353803;s:70:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/cloud/template/right_header.htm";i:1613353803;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/footer_simple.htm";i:1613353801;}*/?>
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
<script type="text/javascript" src="./data/template/admin_cloud_space_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script><script type="text/javascript" src="./data/template/admin_cloud_space_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
        <a href="<?php echo MOD_URL;?>">云设置和管理</a>
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
</script><style type="text/css">
/*修改*/
/*.bs-main-container{
    padding: 15px 30px;
}*/

/*结束*/
</style>
<div class="bs-container clearfix">
  <div class="bs-left-container  clearfix"> 
    <?php $bz=$bz?$bz:'dzz';?><?php $clouds=DB::fetch_all("select * from ".DB::table('connect')." where 1 order by disp");?><ul class="nav-stacked">
  <li <?php if($operation=='setting') { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=cloud&operation=setting">云设置</a>
  </li>
  <?php if(is_array($clouds)) foreach($clouds as $value) { ?> 
  <li <?php if($operation!='setting' && $bz==$value['bz']) { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $value['bz'];?>"><?php echo $value['name'];?></a>
  </li>
  <?php } ?>
</ul>
 
  </div>
  <div class="left-drager">
  </div>
  <div class="bs-main-container  clearfix" style="min-width:660px;">
    <div class="main-header clearfix"> 
      <ul class="nav navbar-nav nav-pills-bottomguide">
  <li <?php if($_GET['op']=='edit') { ?>class="active"<?php } ?>><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $bz;?>"> 设置</a>
  </li>
  <li <?php if($_GET['op']=='space' || $_GET['op']=='spaceadd') { ?>class="active"<?php } ?>><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=space">空间管理</a>
  </li>
  <li <?php if($_GET['op']=='router' || $_GET['op']=='routeredit') { ?>class="active"<?php } ?>><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=router">路由管理</a>
  </li>
  <li <?php if($_GET['op']=='movetool') { ?>class="active"<?php } ?>><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=movetool">迁移工具</a>
  </li>
</ul> 
  	<!--<div  class="button_add_content">
<a href="<?php echo BASESCRIPT;?>?mod=cloud&op=spaceadd" title="添加存储位置" id="button_add">+</a>				
</div>	-->
    </div>
    <div class="main-content clearfix" >
      <form id="appform" name="appform" class="form-horizontal form-horizontal-left" action="<?php echo BASESCRIPT;?>?mod=cloud&op=space" method="post" >
        <input type="hidden" name="cloudsubmit" value="true" />
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <table class="table table-hover">
          <thead>
            <tr>
              <th width="30">排序</th>
              <th width="150">存储位置</th>
              <th width="50">默认</th>
              <th>已用 / 剩余</th>
              <th width="50">&nbsp;</th>
            </tr>
          </thead>
          <?php if(is_array($list)) foreach($list as $value) { ?>          <tr>
            <td width="40"><input type="text" class="form-control" name="disp[<?php echo $value['remoteid'];?>]" value="<?php echo $value['disp'];?>" style="width:45px;" /></td>
            <td width="150"><input type="text" class="form-control"   name="name[<?php echo $value['remoteid'];?>]" value="<?php echo $value['name'];?>"  /></td>
            <td><label class="checkbox-inline"><input type="radio" name="isdefault" value="<?php echo $value['remoteid'];?>" <?php if($value['isdefault']>0) { ?>checked<?php } ?> ></label></td>
            <td><div id="spaceinfo_<?php echo $value['remoteid'];?>"> <span class="spacesize" style="padding:0 5px"><?php echo $value['fusesize'];?>&nbsp;/&nbsp;<?php echo $value['ftotalsize'];?></span> <span class="spacecheck" style="padding:0 5px"><a href="javascript:;" title="重新获取" onclick="checkspace(this,'<?php echo $value['remoteid'];?>')"><i class="glyphicon glyphicon-refresh"></i></a></span> 
                <?php if($value['available']<1) { ?> 
                <span class="text-danger">云"<?php echo $value['bz'];?>"被停用，此存储位置暂时失效</span> 
                <?php } ?> 
              </div></td>
            <td><a id="delete_<?php echo $value['remoteid'];?>" <?php if($value['bz']=='dzz' || $value['usesize']>0) { ?>style="display:none"<?php } ?>class="text-danger" href="<?php echo BASESCRIPT;?>?mod=cloud&op=space&do=delete&remoteid=<?php echo $value['remoteid'];?>" onclick="if(confirm('真的要删除此存储吗？')){return true;}else{return false}" >删除</a></td>
          </tr>
          <?php } ?>
          <thead>
          
            <th valign="middle" colspan="7"><input type="submit" class="btn btn-primary" value="保存设置" /> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=spaceadd" title="添加存储位置" class="btn btn-success">添加存储位置</a>
              </thead>
        </table>
      </form>
      <div class="tip" style="margin: 20px;color: #444;text-shadow: 1px 1px 1px #FFF;line-height: 1.8;">
        <div class="alert alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h5>提示信息</h5>
          <ul>
            <li>云被停用后，相关的存储位置也会失效，新的文件不会使用此存储位置，已有文件可以正常访问</li>
						<li>排序：值越大越靠后,未设置默认情况下会优先使用排序靠前的存储。</li>
						<li>已用：仅表示本系统当前使用的存储空间的大小（并不能表示存储位置的全部使用情况）；剩余：表示可以使用的剩余空间大小。</li>
						<li>系统先通过路由规则来选择存储位置,没有匹配的路由时，才使用此处的默认位置</li>
						<li>系统在上传到选择的目标存储位置失败时，将默认使用服务器磁盘。</li>
						<li>服务器磁盘为默认基础存储，不能删除。其他只有已用数据为0时，才可以删除。</li>
						<li>数据可以使用迁移工具在不同的存储位置间迁移</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();

 function checkspace(obj,remoteid){
 jQuery(obj).html('<img src="admin/images/loadding.gif">');
 jQuery.getJSON('<?php echo ADMINSCRIPT;?>?mod=cloud&op=space&do=checkspace&remoteid='+remoteid,function(json){
 if(json.error){
 jQuery(this).html('<i class="glyphicon glyphicon-refresh"></i><span class="text-danger">'+json.error+'</span>');
 }else{
jQuery('#spaceinfo_' + remoteid + ' .spacecheck a').html('<span class="text-success" >已更新</span>');
 	jQuery('#spaceinfo_'+remoteid+' .spacesize').html(json.fusesize+'&nbsp;/&nbsp;'+json.ftotalsize).hide().fadeIn('slow');
if(json.usesize<1){
jQuery('delete_'+remoteid).show();
}else{
jQuery('delete_'+remoteid).hide();
}

window.setTimeout(function(){
jQuery('#spaceinfo_'+remoteid+' .spacecheck a').html('<i class="glyphicon glyphicon-refresh"></i>');
},5000);
 }
 });
 }
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
