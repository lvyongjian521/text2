<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:1:{s:70:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/address_book/template/content.htm";i:1613354169;}*/?>
<!--信息显示开始-->
<?php if($orgids) { ?>

<table class="table table-hover"><?php if(is_array($orgids)) foreach($orgids as $key => $val) { if($val['users']) { ?>
<thead>
<tr>
<th colspan="10" class="title"><?php echo $val['path'];?> <small class="text-muted" title="总人数">(共<span class="num"><?php echo count($val[users]);?></span>人)</small></th>
</tr>
</thead>

<tbody><?php if(is_array($val['users'])) foreach($val['users'] as $k => $v) { ?><tr class="tr_focus">
<td uid="<?php echo $v['uid'];?>" class="biao avatar avatar-sm" width="64" ><?php echo avatar_block($v['uid']);?></td>
<?php if(!empty($v['username'])) { ?>
<td uid="<?php echo $v['uid'];?>" title="姓名" class=" biao" style="padding-left:10px;"><?php echo $v['username'];?></td>
<?php } else { ?>
<td uid="<?php echo $v['uid'];?>" title="姓名" class=" biao" style="padding-left:10px;">暂无</td>
<?php } if(!empty($v['email'])) { ?>
<td uid="<?php echo $v['uid'];?>" title="邮箱" class=" biao"><?php echo $v['email'];?></td>
<?php } else { ?>
<td uid="<?php echo $v['uid'];?>" title="邮箱" class=" biao">暂无</td>
<?php } if(!empty($v['weixinid'])) { ?>
<td uid="<?php echo $v['uid'];?>" title="微信号" class="biao"><?php echo $v['weixinid'];?></td>
<?php } else { ?>
<td uid="<?php echo $v['uid'];?>" title="微信号" class="biao">暂无</td>
<?php } if(!empty($v['phone'])) { ?>
<td uid="<?php echo $v['uid'];?>" title="电话" class=" biao"><?php echo $v['phone'];?></td>
<?php } else { ?>
<td uid="<?php echo $v['uid'];?>" title="电话" class=" biao">暂无</td>
<?php } ?>
</tr>
<?php } ?>
</tbody>
<?php } } ?>
</table>

<script type="application/javascript">
$(function() {
$('.biao').click(function() {
var txt = $(this).attr('uid');
var uid=$('#da').data('uid');
if(uid==txt) {
da_toggle();
return false;
}
$('#da').data('uid',txt);
$('#da .news').html('<div class="loadding"></div>');
$.post("<?php echo MOD_URL;?>&op=ajax&do=user", { suggest: txt }, function(json) {
var result=json.profile;
$('#da .da-username').html(json.username);
$('#da .da-avatar').html(json.avatar);
var html='';
$('#da .da-setFrequent').html('');
if(jQuery.inArray(json.uid,json.frequent_uids)>-1){
html='<a href="<?php echo MOD_URL;?>&op=ajax&do=setFrequent&uid='+json.uid+'" class="setFrequent" >'+'取消常用联系人'+'</a>'

}else{
html='<a href="<?php echo MOD_URL;?>&op=ajax&do=setFrequent&uid='+json.uid+'" class="setFrequent" >'+'设为常用联系人'+'</a>'
}
jQuery(html).off('click').on('click', function() {
var self=jQuery(this);
jQuery.post(this.href,function(json){
if(json.add==1){
self.html('取消常用联系人');
}else{
self.html('设为常用联系人');
}
var hash=location.hash;
if(hash.indexOf('frequent')!==-1) window.location.reload();
},'json');
return false;
}).appendTo('#da .da-setFrequent');
var tb = '';
for(var i in result) {
tb += '<div class="news1">';
tb += '<span class="p_name">' + result[i]['title'] + '</span>';
tb += '<span class="p_x">' + result[i]['value'] + '</span>';
tb += '</div>';
};
$('#da .news').html(tb);
}, 'json');
//点表格出现资料开始
da_toggle('show');
return false;
});
});
</script>
<?php } elseif($_GET['gid']=='frequent') { ?>
<h2 style="color:#999;font-size:20px;font-weight:normal;padding-top:30px;text-align:center">没有常联系用户，点击用户可在右侧面板设置为常用</h2>
<?php } else { ?>
<h2 style="color:#999;font-size:20px;font-weight:normal;padding-top:30px;text-align:center">没有相关联系人</h2>
<?php } ?>
<!--信息显示结束-->