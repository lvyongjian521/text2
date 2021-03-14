<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:5:{s:72:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/share_content.htm";i:1613354169;s:78:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/template_file_share.htm";i:1613354169;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/template_file_navtopfile.htm";i:1613354169;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/template_file_toolButton.htm";i:1613354169;s:75:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/noFilePage-share.htm";i:1613354169;}*/?>
<div class="middle-padding-left share-content scroll-y scroll-srcollbars" id="selectBoardPosition">

    <!--文件列表开始-->
   <div id="filemanage-share-list"></div>
    <!--文件列表结束-->

</div>
<!--头部信息框-->
<div class="navtopheader">
</div>
<div id="template_detaillist"  style="display:none">
    <div class="fileMenu detaillist filemanage">
    <div class="filemanage-detail-header">
        <table class="table" width="100%" border="0">
            <thead class="detail_header_tr">
            <tr>
                <th disp="0"class="detail_header detail_header_0" width="40%">
                    <div class="detail_header_td_div">
                        <span class="detail_header_title">名称</span>
                        <a class="detail_header_asc detail_header_asc_{asc_0}" style="display:{show_0};">
                            <span class="dzz dzz-expand-less"></span>
                            <span class="dzz dzz-expand-more"></span>
                        </a>
                        <div disp="0" class="detail_header_drag"></div>
                    </div>
                </th>
                <th  disp="1" class="detail_header detail_header_1" width="12%">
                    <div class="detail_header_td_div">
                        <span class="detail_header_title">查看次数</span>
                        <a class="detail_header_asc detail_header_asc_{asc_1}" style="display:{show_1};">
                            <span class="dzz dzz-expand-less"></span>
                            <span class="dzz dzz-expand-more"></span>
                        </a>
                        <div disp="1" class="detail_header_drag"></div>
                    </div>
                </th>
                <th   disp="2" class="detail_header detail_header_2" width="13%">
                    <div class="detail_header_td_div">
                        <span class="detail_header_title">下载次数</span>
                        <a class="detail_header_asc detail_header_asc_{asc_2}" style="display:{show_2};">
                            <span class="dzz dzz-expand-less"></span>
                            <span class="dzz dzz-expand-more"></span>
                        </a>
                        <div disp="2" class="detail_header_drag"></div>
                    </div>
                </th>
                <th  disp="3"  class="detail_header detail_header_3" width="20%">
                    <div class="detail_header_td_div">
                        <span class="detail_header_title">修改日期</span>
                        <a class="detail_header_asc detail_header_asc_{asc_3}" style="display:{show_3};">
                            <span class="dzz dzz-expand-less"></span>
                            <span class="dzz dzz-expand-more"></span>
                        </a>
                        <div disp="3" class="detail_header_drag"></div>
                    </div>
                </th>
                <th class="detail_header detail_header_4" width="15%">
                    <div class="detail_header_td_div">
                        <span class="detail_header_title">失效时间</span>
                    </div>
                </th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="paddingright-con   js-list-body">

        <table class="table " width="100%" border="0" style="table-layout:fixed;margin:0">
            <tbody class="js-file-item-tpl">
            <tr id="Icoblock_detail_{rid}" class="detail_tr Icoblock" rid="{rid}">
                <td class="detail_item_td " valign="middle" width="40%" style="overflow:hidden;position:relative">
                    <div class="detail_item_td_div detail_item_td_name toggleGlow" title="metu.jpg" rid="{rid}">
                        <a href="javascript:;" style="float: left;"><img class="detail_item_name_icon" tsrc="{img}" title="{name}" error="dzz/images/default/icodefault.png" onerror="jQuery(this).attr('src',jQuery(this).attr('error'))"  data-original="index.php?mod=io&amp;op=thumbnail&amp;original=1&amp;path={dpath}" data-download="index.php?mod=io&amp;op=download&amp;path={dpath}"></a>
                        <a id="file_text_{rid}" class="detail_text detail_item_name_text IcoText_folder">{sharestatus}{name}</a>
                    </div>
                </td>
                <td class="detail_item_td detail_item_td_size" valign="middle" width="12%" style="overflow:hidden">
                    <span>{views}次</span>
                </td>
                <!--回收站td开始-->
                <td class="detail_item_td detail_item_td_type" valign="middle" width="13%" style="overflow:hidden">
                    <span>{downs}次</span>
                </td>
                <td class="detail_item_td detail_item_td_type" valign="middle" width="20%" style="overflow:hidden">
                    <span>{fdateline}</span>
                </td>
                <td class="detail_item_td detail_item_td_type" valign="middle" width="15%" style="overflow:hidden">
                    <span>{expireday}</span>
                </td>
                <!--回收站td结束-->

            </tr>
            <tr id="shareinfo_{rid}" class="hide hover deatisinfo">
                <td colspan="1"><a class="sharelink" href="{sharelink}" onclick="window.open('{sharelink}');return false" target="_blank">{sharelink}</a>
                <td colspan="4" class="member_item_member">
                    <div class="share-copyaress share-copybutton">
<span id="js_copy_{rid}" class="input-group-addon js_copy"
  data-clipboard-text="{sharelink}" data-clipboard-action="copy"  style="position:relative;cursor: pointer;">复制地址
<span class="alert copy-success  alert-success hide " >地址复制成功</span>
</span>
                        <span class="input-group-addon input-group-addoncode">
                        	<a href="javascript:;" class="shareform_qrcode shareform_qrcodeqrcode glyphicon glyphicon-qrcode" ></a>
                   		</span>
                       <div class="input-group-addonhover" style="display: none;">
                            <a href="javascript:;" class="shareform_qrcode qrcode"
                               title="扫描二维码，发送到手机" data-html="true">
                                <img class='allowContextMenu' dsrc="{qrcode}">
                            </a>
                        </div>
                    </div>
                     <span class="hide sharepasswordval" data-password="{password}" data-passwordval1="提取密码:{password}" data-passwordval2="分享类型:公开链接"></span>
                     <span class="hide sharetimes" data-times="{times}" data-timesval1="分享次数:{count}/{times}" data-timesval2="不限次数"></span>
                     <span class="sharetextinfo"></span>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</div></div>
<div id="template_file" style="display:none">
    <div class="navtoperate">
<div class="select-toperate">
<div class="select-toperate select-toperate-left selectall-box">
<span class="dzz dzz-close dzz-backing-out"></span>
        <div class="select-info"></div>
    </div>
    <div class="select-toperate select-toperate-center  toolButtons">
<div class="shareMenu">
</div>
<!--回收站开始-->
<div class="recycle-option-icon" id="seldeldo" style="display: none;">
                <button type="button" class="btn" onclick="_filemanage.RecoverFile()">
                	<span class="dzz dzz-rotate" data-toggle="tooltip" data-placement="bottom" data-original-title="恢复文件"></span>
                </button>
                <button type="button" class="btn" onclick="_filemanage.finallyDelete()">
                	<span class="dzz dzz-delete" data-toggle="tooltip" data-placement="bottom" data-original-title="彻底删除"></span>
                </button>
</div>
<!--回收站结束-->
<!--分享开始-->
<div class="share-option-icon" style="display: none;">
            <button type="button" class="btn" onclick="_filemanage.cancleshares()">
            	<span class="dzz dzz-delete" data-toggle="tooltip" data-placement="bottom" data-original-title="取消分享"></span>
            </button>
            <button type="button" class="btn btnedit" onclick="_filemanage.share()">
                <span class="dzz dzz-create" data-toggle="tooltip" data-placement="bottom" data-original-title="编辑分享"></span>
            </button>
</div>		
<!--分享结束-->
<!--群组管理开始-->
<div class="groupmanage-option-icon" style="display: none;">
<div class="groupadmin-toggle managelist">
                <button type="button" class="btn btn-primary judgemanage closegroup hide"
                        onclick="close_group()">关闭群组
                </button>
                <button type="button" class="btn btn-primary judgemanage opengroup hide" onclick="open_group()">
                    开启群组
                </button>
                <button type="button" class="btn btn-primary judgemanage opendiron hide" onclick="open_diron()">
                    开启共享目录
                </button>
                <button type="button" class="btn btn-primary judgemanage closediron hide"
                        onclick="close_diron()">关闭共享目录
                </button>
                <button type="button" class="btn btn-danger" onclick="delete_group()">删除群组</button>
            </div>
</div>
<!--群组管理结束-->
</div>
<div class="select-toperate select-toperate-right">
    	<ul class="sizeMenu">
        <li><a class="icons-thumbnail" href="javascript:;" onclick="_filemanage.Arrange(this,'')" iconview="4"><i class="dzz dzz-view-list" data-toggle="tooltip" data-placement="bottom" title="iconview"></i></a></li>
        <li><a href="javascript:;" class="toggRight"><i class="dzz dzz-info" data-toggle="tooltip" data-placement="bottom"></i></a></li>
       </ul>
</div>
</div>
</div>
<script type="text/javascript" reload="1">
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip();
});
</script>       </div>
<div id="template_toolButton" style="display:none">
    <div class="yunfile-btnMenu">
    <a href="javascript:;" type="button" class="btn open single"  data-placement="bottom" data-auto-adapt="true"  onclick="_filemanage.Open('{rid}')" ><i
            class="dzz dzz-open" data-toggle="tooltip" data-placement="bottom" title="打开" data-original-title="打开"></i> </a>
    <!--<button type="button" class="btn open single" onclick="_filemanage.Open('{rid}')" ><i
    class="dzz dzz-open" data-toggle="tooltip" data-placement="bottom" title="打开"></i> </button>-->

    <a href="javascript:;" type="button" class="btn download single" onclick="_filemanage.downAttach('{rid}')" ><i
            class="dzz dzz-download" data-toggle="tooltip" data-placement="bottom" title="下载"></i></a>
    <a href="javascript:;" type="button" class="btn downpackage multi" onclick="_filemanage.downpackage('{rid}')" ><i
            class="dzz dzz-download" data-toggle="tooltip" data-placement="bottom" title="打包下载"></i>
    </a>
     <a href="javascript:;" type="button" class="btn rename single" onclick="_filemanage.rename('{rid}')" ><i
            class="dzz dzz-create" data-toggle="tooltip" data-placement="bottom" title="重命名"></i></a>
    <a href="javascript:;" type="button" class="btn delete" onclick="_filemanage.delIco('{rid}')" ><i
            class="dzz dzz-delete" data-toggle="tooltip" data-placement="bottom" title="删除"></i></a>
    <a href="javascript:;" type="button" class="btn copy" onclick="_filemanage.copy('{rid}')" ><i
            class="dzz dzz-copy"  data-toggle="tooltip" data-placement="bottom" title="复制"></i></a>
    <a href="javascript:;" type="button" class="btn cut" onclick="_filemanage.cut('{rid}')" ><i
            class="dzz dzz-content-cut" data-toggle="tooltip" data-placement="bottom" title="剪切"></i></a>
    <a href="javascript:;" type="button" class="btn paste" onclick="_filemanage.paste('{fid}')" ><i class="glyphicon glyphicon-paste"    data-toggle="tooltip" data-placement="bottom" title="粘贴"></i></a>
    <a href="javascript:;" type="button" class="btn share" onclick="_filemanage.share('{rid}')" ><i
            class="dzz dzz-share" data-toggle="tooltip" data-placement="bottom"  title="分享"></i> </a>
    
</div>
<div class="yunfile-moreMenu">
    <div class="dropdown">
        <a href="javascript:;" type="button" class="btn dropdown-toggle more" data-toggle="dropdown"><i
                class="dzz dzz-more" data-toggle="tooltip" data-placement="bottom"  title="更多"></i></a>
        <ul class="dropdown-menu">
            <li class="open single"><a href="javascript:;" onclick="_filemanage.Open('{rid}')"><i
                    class="dzz dzz-open"></i> 打开</a></li>
            <li class="dropdown-submenu openwith single"><a href="javascript:;"><i
                    class="dzz dzz-export"></i> 打开方式</a>
                <ul class="dropdown-menu"></ul>
            </li>
            <li class="rename single"><a href="javascript:;" onclick="_filemanage.rename('{rid}')"><i
                    class="dzz dzz-create"></i> 重命名</a></li>
            <li class="copy"><a href="javascript:;" onclick="_filemanage.copy('{rid}')"><i
                    class="dzz dzz-copy"></i> 复制</a></li>
            <li class="cut"><a href="javascript:;" onclick="_filemanage.cut('{rid}')"><i
                    class="dzz dzz-content-cut"></i> 剪切</a></li>
            <li class="paste"><a href="javascript:;" onclick="_filemanage.paste('{fid}')"><i
                    class="dzz dzz dzz-content-paste"></i> 粘贴</a></li>
            <li class="download single"><a href="javascript:;" onclick="_filemanage.downAttach('{rid}')"><i
                    class="dzz dzz-download"></i> 下载</a></li>
            <li class="downpackage multi"><a href="javascript:;" onclick="_filemanage.downpackage('{rid}')"><i
                    class="dzz dzz-archive"></i> 打包下载</a></li>

            <li class="delete"><a href="javascript:;" onclick="_filemanage.delIco('{rid}')"><i
                    class="dzz dzz-delete"></i> 删除</a></li>
<li class="paste"><a href="javascript:;" onclick="_filemanage.paste('{rid}')"><i class="glyphicon glyphicon-paste" ></i>粘贴</a></li>
            <li class="share"><a href="javascript:;" onclick="_filemanage.share('{rid}')"><i
                    class="dzz dzz-share"></i> 分享</a></li>
            <li class="collect"><a href="javascript:;" onclick="_filemanage.collect('{rid}')"><i
                    class="dzz dzz-star"></i> 收藏</a></li>
            <li class="property"><a href="javascript:;" onclick="_filemanage.property('{rid}')"><i
                    class=""></i> 属性</a></li>
            
        </ul>
    </div>
</div>
<script type="text/javascript" reload="1">
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip();
});
</script></div>
<table id="template_nofile_notice" style="display:none">
    <tbody id="emptyshareHtml">
    <tr class="emptyshare">
        <td colspan="6" style="border: none;">
            <div class="emptyPage">
<img src="<?php echo MOD_PATH;?>/img/noFilePage-share.png">
<p class="emptyPage-text">没有分享的文件或文件夹</p>
</div>
        </td>
    </tr>
    </tbody>
</table>
<script type="text/javascript">
jQuery.getScript('static/clipboard/clipboard.min.js?<?php echo VERHASH;?>');
    $(document).ready(function(e) {
        var hash=location.hash;
        _filemanage.getData(_explorer.appUrl+'&op=share&do=filelist&sid=share-list');
        $('.input-black').each(function() {
            InputAnimate.init($(this));
        });
    });
jQuery(document).on('showIcos_done',function(){
jQuery('.js_copy').each(function(){
var clipboard = new Clipboard(this);
clipboard.on('success', function(e) {
jQuery(e.trigger).find('.copy-success').removeClass('hide');
window.setTimeout(function(){jQuery(e.trigger).find('.copy-success').addClass('hide');},1000);
});
clipboard.on('error', function(e) {
});
});
 //鼠标滑过弹出二维码
$('.deatisinfo .share-copyaress .input-group-addoncode').off('mouseenter.hoverqurcode').on('mouseenter.hoverqurcode', function () {
$(this).parent().find('.input-group-addonhover').show();
})
$(document).off('mouseleave.leavequrcode').on('mouseleave.leavequrcode', '.deatisinfo .share-copyaress .input-group-addoncode', function () {
$(this).parent().find('.input-group-addonhover').hide();
})

});
</script>