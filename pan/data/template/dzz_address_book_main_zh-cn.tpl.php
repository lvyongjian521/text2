<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:10:{s:67:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/address_book/template/main.htm";i:1613354169;s:85:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_start.htm";i:1613353801;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_simple_end.htm";i:1613353801;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/commer_header.htm";i:1613353801;s:74:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/address_book/template/header_left.htm";i:1613354169;s:76:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/address_book/template/header_search.htm";i:1613354169;s:78:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/header_right.htm";i:1613353801;s:67:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/address_book/template/left.htm";i:1613354169;s:0:"";b:0;s:79:"C:\wwwroot\lvyongjian.xyz\pan\/./core/template/default/common/footer_simple.htm";i:1613353801;}*/?>
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
<script type="text/javascript" src="./data/template/dzz_address_book_main_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<link href="static/jstree/themes/default/style.min.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link href="<?php echo MOD_PATH;?>/images/address_book.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<!--模板的header区域，需要在头部的js或css可以写在这里--><script type="text/javascript" src="./data/template/dzz_address_book_main_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="<?php echo $bodyClass;?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<nav class="navbar navbar-inverse resNav bs-top-container" >
<div class="resNav-item resNav-left">     
    <ul class="nav navbar-nav navbar-nav-left" style="min-width:168px">
    <li>
        <a href="javascript:;" class="leftTopmenu" onclick="_header.leftTopmenu(this)" style="padding:8px;">
            <div class="gb_fc"><span class="dzz dzz-menu" style="width:24px;height:24px;display:block;"></span></div>
        </a>
    </li>
    <li>
        <a href="<?php echo MOD_URL;?>">通讯录</a>
    </li>
</ul>    </div>
    <div class="resNav-item resNav-center"><div class="input-search">
 <form name="search" action="<?php echo DZZSCRIPT;?>" method="get" class="search_top" onsubmit="return search_submit(this);">
    <input type="hidden" name="mod" value="<?php echo MOD_NAME;?>" />
    <i class="input-search-icon glyphicon glyphicon-search" aria-hidden="true" onclick="this.parentNode.submit()"></i>
    
    <input id="searchval" class="form-control search form-search" type="text" placeholder="可按姓名、邮箱、手机查询，按回车确认" value="<?php echo $keyword;?>" name="" />
    <span aria-hidden="true" id="emptysearchcondition" class="header-closebutton">×</span>

 </form>
</div>
<script type="text/javascript">

jQuery('#searchval').focus(function (e) {//头部搜索框变颜色
    jQuery(this).closest('.input-search').addClass('focus');
if(this.value!='') jQuery('#emptysearchcondition').show();
});
jQuery('#searchval').blur(function (e) {//失去焦点时
 jQuery(this).closest('.input-search').removeClass('focus');
 if(this.value=='') jQuery('#emptysearchcondition').hide();
});
jQuery('#searchval').keyup(function (e) {//失去焦点时
if(this.value!='') jQuery('#emptysearchcondition').show();
});
jQuery('#emptysearchcondition').on('click',function(){
jQuery('#searchval').val('');
jQuery('#searchval').closest('form').submit();
jQuery('#emptysearchcondition').hide();
return false;
});
function search_submit(form){
console.log(form);
var keyword=jQuery('#searchval').val();
if(keyword){
location.hash='#search-'+encodeURI(jQuery('#searchval').val());
}else{
location.hash='#frequent';
}

return false;
}
</script>    </div>
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
</script><div class="bs-container clearfix" style="padding:0px;position:relative">
<!--左边开始-->
<div class="bs-left-container  clearfix">
<div class="leconMenu" style="margin-top:20px;">
  <div class="latelMenu">
    <p class="recent-use actives document-data"  data-href="<?php echo MOD_URL;?>&op=list&do=frequent" data-hash="frequent"><span class="dzz dzz-recent"></span>常用联系人</p>
  </div>
   
  <div class="positionMenu">
    <div class="mechsnismMenu" id="position" class="usertree-container list-unstyled" style="padding:5px 0">
  </div>
   <div class="latelMenu">
    <p class="recent-use actives document-data"  data-href="<?php echo MOD_URL;?>&op=listdo=all" data-hash="all"><span class="dzz dzz-assignment"></span>全部人员</p>
  </div>
</div>
</div>
<?php if($app_version) { } ?>
<script type="text/javascript">
i=0;
jQuery(document).ready(function(e) {
jQuery('#position').jstree({
        "core": {
            "multiple": true,
            "check_callback": true,
            "themes": {
                "responsive": false
            },
            'data': function (node, cb) {
                var self = this;
                jQuery.getJSON('<?php echo MOD_URL;?>&op=grouptree&do=get_children', {'id': node.id}, function (json) {
                    cb.call(this, json);
                });
            }
        },
        "types": {
            "#": {
                "max_children": -1,
                "max_depth": -1,
                "valid_children": -1
            },
            "organization": {//部门
                "icon": "dzz dzz-account-box",
                "valid_children": ['depart','folder']
            },
 "department": {
                "icon": "dzz/system/images/department.png",
                "valid_children": ['depart','folder']
            },
 "group": {//群组
                 "li_attr":'aaa',
                "icon": "dzz dzz-group",
                "valid_children": ['folder']
            },
"home": {//我的网盘
                "icon": "dzz dzz-mydisk",
                "valid_children": ['folder']
            },
            "folder": {//群组
                "icon": "dzz dzz-folder",
                "valid_children": ['folder']
            },
        },
     
        "plugins": ['types', 'search','wholerow']
    });
});
  $('#position').off('select_node.jstree').on('select_node.jstree', function (e, data) {
        var inst = $('#position').jstree(true);
        var node = data.node;
        var hash = node.li_attr.hashs;
var ohash=window.location.hash.replace('#','');
if(ohash== hash){
$('.document-data').removeClass('actives');
$('[data-hash="'+hash+'"]').addClass('actives');
location.hash=hash;
}else{
location.hash=hash;
}
        inst.open_node(node);
        return false;
    });

  
    $("#position").off('ready.jstree').on('ready.jstree', function(e) {
         var inst = $("#position").jstree(true);
         var hash = location.hash;
         if(hash) {
            hash = (hash.replace(/^#/,''));
hashHandler(hash);
        }else{
location.hash='#frequent';
}
     });
$(window).on('hashchange',function(){
        hashHandler();
     });
 //左侧列表页事件
 $(document).off('click.document-data').on('click.document-data','.document-data',function(){
//var el=$(this);
location.hash = jQuery(this).data('hash');
});
var oldhash=null;
function hashHandler(){
 var hash = location.hash;
 hash = hash.replace(/^#/i,'');
if(!hash) {
hash = 'frequent';
}
var flag=hash.replace(/-.+?$/i,'');
switch (flag){
case 'gid':
var gid=hash.replace('gid-','');
    $('#searchval').val('');
open_node_by_id(gid);
break;
case 'frequent':
$('#searchval').val('');
$('#position').jstree(true).deselect_all();
break;
case 'search':
$('#searchval').val(hash.replace(/search-/,''));
break;
case 'group':
var inst=$('#position').jstree(true);
    inst.select_node('#group');
$('#searchval').val('');
break;
default:
if($('#position').length > 0){
$('#position').jstree(true).deselect_all();
}
$('#searchval').val('');
}

 if(hash === oldhash){
 return false;
 }else{
 getRightContent(hash,$('#feed_container'));
 oldhash=hash;
 }
 return false; 
}

function open_node_by_id(gid){
var inst=$('#position').jstree(true);
var node=null;
 if(gid){
node=inst.get_node('#gid_'+gid);
}else{
inst.deselect_all();
return;
}
if(node){
inst.deselect_all();
var selects=inst.get_selected();
for(var i=0;i<selects.length;i++){
if(selects[i]===node.id){
continue;
}
inst.deselect_node('#'+selects[i]);
}
inst.select_node(node);
}else{
$.post('<?php echo MOD_URL;?>&op=grouptree&do=getParentsArr',{'gid':gid},function(data){
var node=inst.get_node('#'+data[0]);
open_node_bg(inst,node,data);
},'json');
}
}
function open_node_bg(inst,node,arr){

inst.open_node(node,function(node){
var i=jQuery.inArray(node.id,arr);
if(i<arr.length && i>-1 && document.getElementById(arr[i+1])){
 open_node_bg(inst,document.getElementById(arr[i+1]),arr);
}else{
inst.deselect_all();
inst.select_node(node);
}
});
}
var rightLoading=0;
function getRightContent(hash,container){//处理右侧页面加载
    var gid=hash.replace('gid-','');
loading(container); 
rightLoading=1;
 $('.document-data').removeClass('actives');
 $('[data-hash="'+hash+'"]').addClass('actives');
var url='<?php echo MOD_URL;?>&op=list&gid='+gid;
jQuery('#feed_container').load(url);

};
function loading(container,flag){//右侧加载效果
if(flag==='hide'){
container.find('.loadding').remove();
}else{
container.find('.loadding').remove();
container.append('<div class="loadding" style="min-height:200px"></div>');
}
};
</script></div>
<div class="left-drager"></div>

<!--信息显示开始-->
<div class="bs-main-container  clearfix">
<div class="main-content" style="height:100%;min-width:350px;position: relative;">
<div id="feed_container" class="feed-container" style="overflow:auto;border-top:1px solid #FFF;">

</div>
</div>
</div>
<div id="da" class="da">
<div class="da-body">
<div class="da-avatar text-center"></div>
<div class="da-username"></div>
<div class="da-setFrequent text-center">

</div>
<div class="news">
<div class="loadding"></div>
</div>
</div>
<div id="jt" class="jt">
<a href="javascript:;" class="glyphicon glyphicon-chevron-right jt1"></a>
</div>
</div>
<!--信息显示结束-->
</div>

<script type="text/javascript">
$('.left-drager').leftDrager_layout();

function da_toggle(flag,callback){
var el=$('.da');
if(flag=='hide'){
$(".da").animate({
width: '0'
},callback);
}else if(flag=='show'){
$(".da").animate({
width: '380px'
},callback);
}else{
if(el.width()>0){
$(".da").animate({
width: '0'
},callback);
}else{
$(".da").animate({
width: '380px'
},callback);
}
}
}
//点箭头隐藏表格开始
$('#jt').on('click', function() {
da_toggle('hide');
return false;
});
jQuery('#da').on('click', function() {
return false;
});

$(document).on('click', function(e) {
da_toggle('hide');
});
//点箭头隐藏表格结束
</script>
<script type="text/javascript" src="static/js/jstree.min.js?<?php echo VERHASH;?>" ></script>
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