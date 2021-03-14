<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:1:{s:78:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/mobile/mobile_index.htm";i:1613354169;}*/?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>网盘</title>
    <base href="<?php echo $_G['siteurl'];?>" />
    <link href="static/jquery_weui/css/jquery-weui.min.css" rel="stylesheet">
    <link href="static/jquery_weui/css/weui.min.css" rel="stylesheet">
    <link href="static/dzzicon/icon.css" rel="stylesheet">
    <link href="<?php echo MOD_PATH;?>/css/mobile/index.css" rel="stylesheet">
    <link href="<?php echo MOD_PATH;?>/css/mobile/package.css" rel="stylesheet">
    <script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>',MOD_PATH='<?php echo MOD_PATH;?>',APP_URL='<?php echo MOD_URL;?>',MOD_URL='<?php echo MOD_URL;?>';</script>
</head>
<body>
<!--搜索框开始-->
<header class="weui-search-bar" id="searchBar">
    <form class="weui-search-bar__form">
        <label class="weui-search-index__label" id="Text">
            <span>全部或部分文件名</span>
            <i class="weui-icon-search"></i>
        </label>
    </form>
    <!--<a href="javascript:;" class="weui-search-bar__member all_search"><i class="dzz dzz-member"></i></a>-->
</header>
<!--搜索框结束-->
<!--列表开始-->
<section class="weui-cells">
    <a class="weui-cell weui-cell_access" href="<?php echo MOD_URL;?>&op=mobile&do=recent">
        <div class="weui-cell__hd"><span class="dzz dzz-clock weui-cell__img weui-cell__recent"></span></div>
        <div class="weui-cell__bd">
            <h4>最近使用</h4>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
</section>
<section class="weui-cells">
    <?php if($myexplorer) { ?>
    <a class="weui-cell weui-cell_access" href="<?php echo MOD_URL;?>&op=mobile&do=file&fid=<?php echo $myexplorer['fid'];?>">
        <div class="weui-cell__hd"><span class="dzz dzz-member weui-cell__img weui-cell__explorer"></span></div>
        <div class="weui-cell__bd">
            <h4><?php echo $myexplorer['name'];?></h4>
            <p>
                <span class="file">文件:</span><i class="file-number"><?php echo $myexplorer['filenum'];?>,</i>
                <span class="folder">文件夹:</span><i class="folder-number"><?php echo $myexplorer['foldernum'];?></i>
            </p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
    <?php } ?>
    <?php if(count($myorgs)) { ?>
    <?php if(is_array($myorgs)) foreach($myorgs as $v) { ?>    <a class="weui-cell weui-cell_access" href="<?php echo MOD_URL;?>&op=mobile&do=file&gid=<?php echo $v['orgid'];?>&fid=<?php echo $v['fid'];?>">
        <div class="weui-cell__hd">
            <?php if(isset($v['icon'])) { ?>
            <img src=" <?php echo $v['icon'];?>" class="weui-cell__recentimg"/>
            <?php } else { ?>
            <?php echo avatar_group($v['orgid'],array($v['orgid']=>array('aid'=>$v['aid'],'orgname'=>$v['orgname'])));?>            <?php } ?>
        </div>
        <div class="weui-cell__bd">
            <h4><?php echo $v['orgname'];?></h4>
            <p>
                <span class="file">文件:</span><i class="file-number"><?php echo $v['filenum'];?>,</i>
                <span class="folder">文件夹:</span><i class="folder-number"><?php echo $v['foldernum'];?></i>
            </p>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
    <?php } ?>
    <?php } ?>
</section>
<section class="weui-cells">
    <?php if($mygroup) { ?>
    <a class="weui-cell weui-cell_access" href="<?php echo MOD_URL;?>&op=mobile&do=group">
        <div class="weui-cell__hd"><span class="dzz dzz-group weui-cell__img weui-cell__group"></span></div>
        <div class="weui-cell__bd">
            <h4>群组</h4>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
    <?php } ?>
    <a class="weui-cell weui-cell_access" href="<?php echo MOD_URL;?>&op=mobile&do=cat">
        <div class="weui-cell__hd"><span class="dzz dzz-file-type weui-cell__img weui-cell__type"></span></div>
        <div class="weui-cell__bd">
            <h4>类型</h4>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
</section>
<section class="weui-cells">
    <a class="weui-cell weui-cell_access" href="<?php echo MOD_URL;?>&op=mobile&do=share">
        <div class="weui-cell__hd"><span class="dzz dzz-share weui-cell__img weui-cell__share"></span></div>
        <div class="weui-cell__bd">
            <h4>分享</h4>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
    <a class="weui-cell weui-cell_access" href="<?php echo MOD_URL;?>&op=mobile&do=collect">
        <div class="weui-cell__hd"><span class="dzz dzz-grade weui-cell__img weui-cell__collection"></span></div>
        <div class="weui-cell__bd">
            <h4>收藏</h4>
        </div>
        <div class="weui-cell__ft"></div>
    </a>
</section>
<?php if($clipboarddata['status']) { ?>
<footer class="weui-footer">
    <a href="javascript:;" class="weui-footer-item weui-footer-item-cancel canclepastemenu">
        <i class="dzz dzz-close"></i>
        <p>取消</p>
    </a>
</footer>
<?php } ?>
</body>
<script type="text/javascript" src="static/jquery/jquery.min.js" ></script>
<script type="text/javascript" src="static/jquery_weui/js/jquery-weui.min.js" ></script>
<script type="text/javascript" src="<?php echo MOD_PATH;?>/js/mobile/appevent.js" ></script>
<script type="text/javascript">
    //搜索跳转
    $(document).off('tap.all_search').on('tap.all_search', '#searchBar', function () {
        var href ='<?php echo MOD_URL;?>&op=mobile&do=search';
        window.location.href = href;

    })
    $(document).off('tap.canclepastemenu').on('tap.canclepastemenu', '.canclepastemenu', function () {
        var obj = $(this), url = MOD_URL+'&op=dzzcp&do=deletecopy&t=' + new Date().getTime();
        jQuery.post(url, {k: Math.random()}, function (json) {
            if (json['success']) {
                obj.remove();
                $.toast('取消成功');
            } else {
                $.toast('取消失败');
            }
        }, 'json')

    })

</script><?php output();?></html>

