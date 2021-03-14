<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:3:{s:72:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/mobile/recent.htm";i:1613354169;s:81:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/mobile/template_normal.htm";i:1613354169;s:81:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/mobile/template_footer.htm";i:1613354169;}*/?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>最近使用</title>
    <base href="<?php echo $_G['siteurl'];?>" />
    <link href="static/jquery_weui/css/jquery-weui.min.css" rel="stylesheet">
    <link href="static/jquery_weui/css/weui.min.css" rel="stylesheet">
    <link href="static/dzzicon/icon.css" rel="stylesheet">
    <link href="<?php echo MOD_PATH;?>/css/mobile/index.css" rel="stylesheet">
    <link href="<?php echo MOD_PATH;?>/css/mobile/package.css" rel="stylesheet">
    <script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>',MOD_PATH='<?php echo MOD_PATH;?>',APP_URL='<?php echo MOD_URL;?>',MOD_URL='<?php echo MOD_URL;?>';</script>
</head>
<body>
<section class="weui-address">
    <a href="<?php echo MOD_URL;?>" class="weui-index">
        <span class="dzz dzz-home dzz-index"></span>
        <i class="dzz dzz-vline dzz-index-vline"></i>
    </a>
    <div class="weui-address-container" id="weui_address_scroll">
        <div class="scroller">
            <ul class="weui-address-field">
                <li>
                    <a href="<?php echo $_G['siteurl'];?><?php echo MOD_URL;?>&op=mobile&do=recent">最近使用</a><span class="dzz dzz-chevron-right"></span>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--列表开始-->
<section class="weui-cells weui-cells__recent weui-cells__margin_footer" id="fileList-recent">


</section>
<!--无内容提示页-->
<div class="weui-cell-search-normal" style="display: none;"><div class="weui-cell-search-images">
<div class="weui-cell-search-images-con">		
<img src="<?php echo MOD_PATH;?>/img/noFilePage-normal.png" />
<p class="weui-cell-search-images-con">暂无相关内容</p>
</div>
</div>
</div>
<!--底部开始-->
<footer class="weui-footer">
    <!--底部开始-->
    <!--正常状态下的底部开始-->
    <div class="weui-cell-footer weui-cell-default-footer model_menus" id="nomal_menu">
        <div class="dropup weui-footer-item uploadnewfile hide">
            <a href="javascript:;" class="weui-footer-new-folder weui-footer-none">
                <i class="dzz dzz-create-new-folder"></i>
                <p>新建</p>
            </a>
            <div class="weui-dropup hide new-more">
                <li class="newfoldermenu">
                    <a href="javascript:;" class="weui-droup-new new-folder">新建文件夹</a>
                </li>
                <li class="newfilemenu">
                    <a href="javascript:;" class="weui-droup-new">
                        <input type="file" class="weui-iput explorer_upload_files"  data-onlyimg="0" name="files[]" multiple/>
                        上传文件</a>
                </li>
                <li class="newfilemenu">
                    <a href="javascript:;" class="weui-droup-new">
                        <input type="file" class="weui-iput explorer_upload_files" name="files[]" data-onlyimg="1" accept="image/*" multiple/>
                        相册</a>
                </li>
            </div>
            <div class="background-none"></div>
        </div>
        <a href="javascript:;" class="weui-footer-item searchFile">
            <i class="dzz dzz-search"></i>
            <p>搜索</p>
        </a>
        <a href="javascript:;" class="weui-footer-item" onclick="location.reload();">
            <i class="dzz dzz-refresh"></i>
            <p>刷新</p>
        </a>        
        <div class="dropup weui-footer-item">
            <a href="javascript:;" class="weui-footer-sort weui-footer-none">
                <i class="dzz dzz-sort"></i>
                <p>排序</p>
            </a>
            <div class="weui-dropup hide weui-dropup-right">
                <li>
                    <a href="javascript:;" class="weui-droup-new sortfile" data-sort="0">按名称</a>
                </li>
                <li>
                    <a href="javascript:;" class="weui-droup-new sortfile" data-sort="1">按大小</a>
                </li>
                <li>
                    <a href="javascript:;" class="weui-droup-new sortfile" data-sort="3">按时间</a>
                </li>
            </div>
            <div class="background-none"></div>
        </div>
        <a href="javascript:;" class="weui-footer-item weui-footer-attr-item hide singlepropetymenu">
            <i class="dzz dzz-view-list"></i>
            <p>属性</p>
        </a>
      <div class="dropup weui-footer-item weui-footer-more-item hide moremenus">
            <a href="javascript:;" class="weui-footer-sort weui-footer-none">
                <i class="dzz dzz-more"></i>
                <p>更多</p>
            </a>
            <div class="weui-dropup hide weui-dropup-right moredo">
                <li>
                    <a href="javascript:;" class="weui-droup-new dynamiscmenu">动态</a>
                </li>
                <li class="membermenu">
                    <a href="javascript:;" class="weui-droup-new">人员</a>
                </li>
                <li class="propetymenu">
                    <a href="javascript:;" class="weui-droup-new">属性</a>
                </li>
                <li class="commentmenu">
                    <a href="javascript:;" class="weui-droup-new">评论</a>
                </li>
            </div>
            <div class="background-none"></div>
        </div>
    </div>
    <!--正常状态下的底部结束-->
    <!--多选状态下的底部开始-->
    <div class="weui-cell-footer weui-cell-checked-footer hide model_menus" id="select-menu">
        <a href="javascript:;" class="weui-footer-item weui-footer-item-copy copymenu copyorcut" data-copytype="1">
            <i class="dzz dzz-copy"></i>
            <p>复制</p>
        </a>
        <a href="javascript:;" class="weui-footer-item cutmenu copyorcut" data-copytype="2">
            <i class="dzz dzz-copy"></i>
            <p>移动</p>
        </a>
        <a href="javascript:;" class="weui-footer-item weui-footer-cancel-checked">
            <i class="dzz dzz-check-box-outline-blank "></i>
            <p>取消选择</p>
        </a>
        <a href="javascript:;" class="weui-footer-item weui-footer-all-checked">
            <i class="dzz dzz-check-box"></i>
            <p>全选</p>
        </a>
        <div class="dropup weui-footer-item moremenus">
            <a href="javascript:;" class="weui-footer-sort weui-footer-none">
                <i class="dzz dzz-more"></i>
                <p>更多</p>
            </a>
            <div class="weui-dropup hide weui-dropup-right moredo">
                <li>
                    <a href="javascript:;" class="weui-droup-new dynamiscmenu">动态</a>
                </li>
                <li class="membermenu">
                    <a href="javascript:;" class="weui-droup-new">人员</a>
                </li>
                <li class="propetymenu">
                    <a href="javascript:;" class="weui-droup-new">属性</a>
                </li>
                <li class="deletemenu">
                    <a href="javascript:;" class="weui-droup-new">删除</a>
                </li>
                <li class="collectmenu">
                    <a href="javascript:;" class="weui-droup-new">收藏</a>
                </li>
                <li class="cancel-collectmenu hide">
                    <a href="javascript:;" class="weui-droup-new">取消收藏</a>
                </li>
                <li class="sharemenu">
                    <a href="javascript:;" class="weui-droup-new">分享</a>
                </li>
                <li class="commentmenu">
                    <a href="javascript:;" class="weui-droup-new">评论</a>
                </li>
                <li class="downloadmenu">
                    <a href="javascript:;" class="weui-droup-new">下载</a>
                </li>
                <li class="renamemenu">
                    <a href="javascript:;" class="weui-droup-new weui-droup-rename">重命名</a>
                </li>
            </div>
            <div class="background-none"></div>
        </div>
    </div>
    <!--多选状态下的底部结束-->
    <!--复制状态下的底部开始-->
    <div class="weui-cell-footer weui-cell-footer-copy hide model_menus" id="copypaste_menu">
        <div class="dropup weui-footer-item uploadnewfile">
            <a href="javascript:;" class="weui-footer-new-folder weui-footer-none">
                <i class="dzz dzz-create-new-folder"></i>
                <p>新建</p>
            </a>
            <div class="weui-dropup hide">
                <li class="newfoldermenu">
                    <a href="javascript:;" class="weui-droup-new new-folder">新建文件夹</a>
                </li>
                <li class="newfilemenu">
                    <a href="javascript:;" class="weui-droup-new">
                        <input type="file" class="weui-iput explorer_upload_files"  data-onlyimg="0" name="files[]" multiple/>
                        上传文件</a>
                </li>
                <li class="newfilemenu">
                    <a href="javascript:;" class="weui-droup-new">
                        <input type="file" class="weui-iput explorer_upload_files" name="files[]" data-onlyimg="1" accept="image/*" multiple/>
                        相册</a>
                </li>
            </div>
            <div class="background-none"></div>
        </div>
        <a href="javascript:;" class="weui-footer-item pastemenu">
            <i class="dzz dzz-search"></i>
            <p>粘贴</p>
        </a>
        <a href="javascript:;" class="weui-footer-item weui-footer-item-cancel canclepastemenu">
            <i class="dzz dzz-close"></i>
            <p>取消</p>
        </a>
    </div>
    <!--复制状态下的底部结束-->

<!--底部结束-->
</footer>
<!--底部结束-->
</body>
<script type="text/javascript" src="static/jquery/jquery.min.js" ></script>
<script type="text/javascript" src="static/jquery_weui/js/jquery-weui.min.js" ></script>
<script type="text/javascript" src="<?php echo MOD_PATH;?>/js/mobile/appevent.js" ></script>
<script type="text/javascript" src="<?php echo MOD_PATH;?>/js/mobile/permcheck.js" ></script>
<script type="text/javascript" src="./data/template/dzz_explorer_mobile_recent_index_zh-cn.js" ></script><script type="text/javascript" src="<?php echo MOD_PATH;?>/js/mobile/index.js" ></script>
<script type="text/javascript">
    $(function () {
        _filemanage.getConfig(MOD_URL+'&op=mobile&do=json',function(data){
            _filemanage.contains = 'fileList-recent';
            _filemanage.dataurl = MOD_URL+'&op=mobile&do=recent&operation=filelist';
            _filemanage.getData();
        })
        height();
    })
    //获取id高度
    function height(){
        var h = $(document).outerHeight(true);
        var h2 = $('.weui-cell-footer').outerHeight(true);
        $('.weui-cell-search-images').css('height',h-h2);
    }
</script><?php output();?></html>

