<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"template/b/html/label\..\..\..\..\application\index\view\index\index.html";i:1579008637;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> - 苹果CMS</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css">
    <script>
        var ROOT_PATH = "", ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>";
        var maccms ="<?php echo json_encode($maccms); ?>";
    </script>
</head>
<body>
link标签：<br>
<?php $__TAG__ = '{"num":"3","start":"0","type":"all","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['link_id']; ?>-><?php echo $vo['link_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

area标签：<br>
<?php $__TAG__ = '{"num":"4","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Extend")->areaData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['area_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

lang标签：<br>
<?php $__TAG__ = '{"num":"4","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Extend")->langData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['lang_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

area标签：<br>
<?php $__TAG__ = '{"num":"4","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Extend")->YearData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['area_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

class标签：<br>
<?php $__TAG__ = '{"num":"4","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Extend")->classData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['class_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

version标签：<br>
<?php $__TAG__ = '{"num":"4","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Extend")->versionData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['version_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

state标签：<br>
<?php $__TAG__ = '{"num":"4","order":"desc","id":"vo","key":"key"}';$__LIST__ = model("Extend")->stateData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['state_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

letter标签：<br>
<?php $__TAG__ = '{"num":"4","order":"desc","by":"","id":"vo","key":"key"}';$__LIST__ = model("Extend")->letterData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['letter_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

gbook标签：<br>
<?php $__TAG__ = '{"num":"4","paging":"no","order":"desc","by":"","id":"vo","key":"key"}';$__LIST__ = model("Gbook")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['gbook_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

comment标签：<br>
<?php $__TAG__ = '{"num":"4","paging":"yes","order":"desc","by":"","id":"vo","key":"key"}';$__LIST__ = model("Comment")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['comment_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

page分页：<br>
<div class="mac_pages">
    <div class="page_tip">共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</div>
    <div class="page_info">
        <a class="page_link" href="<?php echo str_replace('PAGELINK',1,$__PAGING__['page_url']); ?>" title="首页">首页</a>
        <a class="page_link" href="<?php echo str_replace('PAGELINK',$__PAGING__['page_prev'],$__PAGING__['page_url']); ?>" title="上一页">上一页</a>
        <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
        <a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
        <?php else: ?>
        <a class="page_link" href="<?php echo str_replace('PAGELINK',$num,$__PAGING__['page_url']); ?>" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <a class="page_link" href="<?php echo str_replace('PAGELINK',$__PAGING__['page_next'],$__PAGING__['page_url']); ?>" title="下一页">下一页</a>
        <a class="page_link" href="<?php echo str_replace('PAGELINK',$__PAGING__['page_total'],$__PAGING__['page_url']); ?>" title="尾页">尾页</a>

        <input class="page_input" type="text" placeholder="页码"  id="page" autocomplete="off" style="width:40px">
        <button class="page_btn mac_page_go" type="button" data-url="<?php echo $__PAGING__['page_url']; ?>" data-total="<?php echo $__PAGING__['page_total']; ?>" data-sp="<?php echo $__PAGING__['page_sp']; ?>">GO</button>
    </div>
</div>

<br>

type标签：<br>
<?php $__TAG__ = '{"num":"4","mid":"vod","ids":"","order":"asc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['type_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>


topic标签：<br>
<?php $__TAG__ = '{"num":"4","paging":"no","ids":"","level":"","order":"asc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Topic")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['topic_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>

art标签：<br>
<?php $__TAG__ = '{"num":"4","paging":"no","ids":"","type":"","topic":"","level":"","order":"asc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['art_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>


vod标签：<br>
<?php $__TAG__ = '{"num":"4","paging":"no","ids":"","type":"","topic":"","level":"","order":"asc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<?php echo $key; ?>-><?php echo $vo['vod_name']; ?><br>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br>



for标签：<br>
<?php $__FOR_START_6266__=1;$__FOR_END_6266__=5;for($key=$__FOR_START_6266__;$key <= $__FOR_END_6266__;$key+=1){ ?>
<?php echo $key; ?><br>
<?php } ?>
<br>



