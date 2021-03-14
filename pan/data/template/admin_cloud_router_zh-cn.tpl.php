<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:10:{s:64:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/cloud/template/router.htm";i:1613353803;s:85:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_start.htm";i:1613353801;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_end.htm";i:1613353801;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/commer_header.htm";i:1613353801;s:69:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/cloud/template/header_left.htm";i:1613353803;s:0:"";b:0;s:78:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_right.htm";i:1613353801;s:62:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/cloud/template/left.htm";i:1613353803;s:70:"C:\wwwroot\lvyongjian.xyz\pan\/./admin/cloud/template/right_header.htm";i:1613353803;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/footer_simple.htm";i:1613353801;}*/?>
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
<script type="text/javascript" src="./data/template/admin_cloud_router_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<script src="admin/scripts/admin.js?<?php echo VERHASH;?>" ></script><script type="text/javascript" src="./data/template/admin_cloud_router_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
    <div class="left-drager-op">
      <div class="left-drager-sub"></div>
    </div>
  </div>
  <div class="bs-main-container  clearfix" style="min-width:680px;">
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
    </div>
    <div class="main-content clearfix" style="border-top:1px solid #FFF">
      <form id="appform" name="appform" class="form-horizontal form-horizontal-left" action="<?php echo BASESCRIPT;?>?mod=cloud&op=router" method="post">
        <input type="hidden" name="routersubmit" value="true" />
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <table class="table table-hover">
          <thead>
          <th width="20">&nbsp;</th>
            <th width="80">优先级</th>
            <th width="150">名称</th>
            <th width="100">使用存储</th>
            <th>路由规则</th>
            <th width="60">启用</th>
            <th width="60">编辑</th>
              </thead>
            <?php if(is_array($list)) foreach($list as $value) { ?>          <tr>
            <td width="20"><input type="checkbox" name="delete[]" value="<?php echo $value['routerid'];?>" style="width:20px;" /></td>
            <td width="80"><input type="text" class="form-control" name="priority[<?php echo $value['routerid'];?>]" value="<?php echo $value['priority'];?>" style="width:45px;" /></td>
            <td width="150"><input type="text" class="form-control" name="name[<?php echo $value['routerid'];?>]" value="<?php echo $value['name'];?>" /></td>
            <td width="100"><?php echo $value['position'];?> 
              <?php if($value['bz_available']<1) { ?> 
              <span class="text-danger">由于云"<?php echo $value['bz'];?>"停用，此路由暂时失效</span> 
              <?php } ?></td>
            <td style="word-break:break-all"><?php echo $value['drouter'];?></td>
            <td width="60"><input type="checkbox" name="available[<?php echo $value['routerid'];?>]" value="1" <?php if($value['available']>0) { ?>checked<?php } ?>></td>
            <td width="60"><a href="<?php echo BASESCRIPT;?>?mod=cloud&op=routeredit&routerid=<?php echo $value['routerid'];?>" class="glyphicon glyphicon-edit " title="编辑">&nbsp;</a></td>
          </tr>
          <?php } ?>
          <thead>
          <td valign="middle" colspan="7"><input type="checkbox" name="chkall" id="chkall" onclick="checkAll('prefix', this.form, 'delete')">
              &nbsp;删？&nbsp;&nbsp;&nbsp;
              <input type="submit" class="btn btn-primary" value="保存设置" />
              <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=routeredit" title="添加路由" class="btn btn-success">添加路由</a>
              
              </td>
              </thead>
        </table>
      </form>
      <div class="tip" style="margin: 20px;color: #444;text-shadow: 1px 1px 1px #FFF;line-height: 1.8;">
        <div class="alert alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h5>提示信息</h5>
          <ul>
            <li>云被停用后，相关的路由也会失效。生效前，将忽略此路由</li>
						<li>优先级：值越大越靠前,系统在选择存储时会按优先级从高到低来选择，一旦条件满足，将不再查询低优先级的路由。</li>
						<li>添加路由时要注意把优先起作用的路由优先级提高,路由条件限定范围小的路由优先级提高</li>
						<li>没有添加路由时，系统将直接使用“空间管理”里默认的存储位置</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();

function checkspace(obj, routerid) {
jQuery(obj).html('<img src="admin/images/loadding.gif">');
jQuery.getJSON('<?php echo ADMINSCRIPT;?>?mod=cloud&op=space&do=checkspace&routerid=' + routerid, function(json) {
if(json.error) {
jQuery(this).html('<i class="icon-refresh"></i><span class="text-danger">' + json.error + '</span>');
} else {
jQuery('#spaceinfo_' + routerid + ' .spacecheck a').html('<span class="text-success" >已更新</span>');
jQuery('#spaceinfo_' + routerid + ' .spacesize').html(json.fusesize + '&nbsp;/&nbsp;' + json.ftotalsize).hide().fadeIn('slow');
if(json.usesize < 1) {
jQuery('delete_' + routerid).show();
} else {
jQuery('delete_' + routerid).hide();
}
window.setTimeout(function() {
jQuery('#spaceinfo_' + routerid + ' .spacecheck a').html('<i class="icon-refresh"></i>');
}, 5000);

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