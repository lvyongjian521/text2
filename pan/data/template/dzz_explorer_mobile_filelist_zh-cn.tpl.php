<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:1:{s:74:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/mobile/filelist.htm";i:1613354169;}*/?>
<?php if($groups) { if(is_array($groups)) foreach($groups as $v) { ?><div class="weui-cell weui-cell_access weui-cell_longpress" data-open="href"
     href="<?php echo MOD_URL;?>&op=mobile&do=file&gid=<?php echo $v['orgid'];?>&fid=<?php echo $v['fid'];?>">
    <div class="weui-cell__hd">
        <?php if($v['imgs']) { ?>
        <img src="<?php echo $v['img'];?>" class="weui-cell__recentimg">
        <?php } else { ?>
        <?php echo avatar_group($v['orgid'],array($v['orgid']=>array('aid'=>$v['aid'],'orgname'=>$v['orgname'])));?>        <?php } ?>
    </div>
    <div class="weui-cell__bd">
        <h4><?php echo $v['orgname'];?></h4>
        <p>
            <span class="file">文件:</span><i class="file-number"><?php echo $v['filenum'];?>,</i>
            <span class="folder">文件夹:</span><i class="folder-number"><?php echo $v['foldernum'];?></i>
        </p>
    </div>
    <div class="weui-cell__ft nochecked"></div>
</div>
<?php } } if(is_array($data)) foreach($data as $v) { if($v['type'] == 'folder') { ?>
<div class="weui-cell weui-cell_access weui-cell_longpress select-files" data-collect="<?php echo $v['collect'];?>" rid="<?php echo $v['rid'];?>"
     data-open="href" href="<?php echo MOD_URL;?>&op=mobile&do=file&fid=<?php echo $v['oid'];?>" data-rid="<?php echo $v['rid'];?>" data-dpath="<?php echo $v['dpath'];?>"
     data-url="<?php echo $v['url'];?>">
    <div class="weui-cell__hd"><img src="<?php echo $v['img'];?>" class="weui-cell__recentimg">
    </div>
    <div class="weui-cell__bd">
        <h4 rid="<?php echo $v['rid'];?>"><?php echo str_replace('\\','',$v['name']);?></h4>
        <p>
            <span class="file">文件:</span><i class="file-number"><?php echo $v['filenum'];?>,</i>
            <span class="folder">文件夹:</span><i class="folder-number"><?php echo $v['foldernum'];?></i>
        </p>
    </div>
    <div class="weui-cell__ft"></div>
    <div class="weui-cells_checkbox hide">
        <input type="checkbox" class="weui-check" name="checkbox1">
        <i class="weui-icon-checked"></i>
    </div>
    <div class="weui-uploader__file-content">0%</div>
</div>
<?php } else { ?>
<div class="weui-cell weui-cell_access weui-cell_longpress select-files" rid="<?php echo $v['rid'];?>" data-collect="<?php echo $v['collect'];?>"
     data-original="index.php?mod=io&amp;op=thumbnail&amp;original=1&amp;path={dpath}" data-rid="<?php echo $v['rid'];?>" data-dpath="<?php echo $v['dpath'];?>"
     data-url="<?php echo $v['url'];?>">
    <div class="weui-cell__hd"><img src="<?php echo $v['img'];?>" class="weui-cell__recentimg"></div>
    <div class="weui-cell__bd">
        <h4 rid="<?php echo $v['rid'];?>"><?php echo str_replace('\\','',$v['name']);?></h4>
        <p>
            <span class="date"><?php echo $v['monthdate'];?></span><i class="date-time"><?php echo $v['hourdate'];?>,</i>
            <span class="size"><?php echo $v['fsize'];?></span>
        </p>
    </div>
    <div class="weui-cells_checkbox hide">
        <input type="checkbox" class="weui-check" name="checkbox1">
        <i class="weui-icon-checked"></i>
    </div>
    <div class="weui-uploader__file-content">0%</div>
</div>
<?php } } ?>
<script type="text/javascript"></script>
<script type="text/javascript">
    if ('<?php echo $folderjson;?>') {
        var folderjson = '<?php echo $folderjson;?>';
        if (_filemanage.datajson.param.page > 1) {
            _filemanage.folderdata = $.extend(_filemanage.folderdata, eval('(' + folderjson + ')'));
        } else {
            _filemanage.folderdata = eval('(' + folderjson + ')');
        }
    }
    if ('<?php echo $return;?>') {
        //获取数据
        var datas = eval('(' + '<?php echo $return;?>' + ')');
        //如果已有数据，执行合并
        if (_filemanage.datajson.param.page > 1 && _filemanage.datajson.data) {
            var tempjson = {};
            for (var o in _filemanage.datajson) {
                tempjson[o] = $.extend(_filemanage.datajson[o], datas[o]);
            }
            _filemanage.datajson = tempjson;
        } else {
            _filemanage.datajson = datas;//文件数据

        }
    }

</script>