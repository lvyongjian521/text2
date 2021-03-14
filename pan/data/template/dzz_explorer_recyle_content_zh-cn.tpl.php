<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:6:{s:73:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/recyle_content.htm";i:1613354169;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/template_file_middleicon.htm";i:1613354169;s:91:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/template_file_detaillist_recycle.htm";i:1613354169;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/template_file_toolButton.htm";i:1613354169;s:83:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/template_file_navtopfile.htm";i:1613354169;s:77:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/noFilePage-recycle.htm";i:1613354169;}*/?>
<div class="middlecenter  scroll-100 scroll-srcollbars" style="z-index: 100;">
<div class="middle-padding-left middle-recycle height-100 " id="selectBoardPosition">
<!--选择项开始-->
    <div class="middletopMenu recyleadmin-top clearfix ">
<div class="recyle-option-all clearfix">	              
                <div class="recyle-option-dropdown input-float">
<div class="dropdown">
  <button class="dropdown-toggle form-control"  type="button"  data-toggle="dropdown"style="min-width: 140px;text-align:left;">
  	<span id="search_data_text">全部</span>
  	<i class="dzz dzz-arrow-dropdown input-icon" style="float: right;font-size:20px;"></i>
  </button>
  <ul class="dropdown-menu" id="position_menulist">
                          <li><a href="javascript:;" data-val="">全部</a></li>
                          <?php if($homearr) { ?>
                          <li><a href="javascript:;" data-val="f_<?php echo $homearr['fid'];?>"><?php echo $homearr['name'];?></a></li>
                          <?php } ?>
                          <?php if(is_array($manageorg)) foreach($manageorg as $v) { ?>                          <li><a href="javascript:;" data-val="g_<?php echo $v['orgid'];?>"><?php echo $v['orgname'];?></a></li>
                          <?php } ?>
  </ul>
</div>
</div>
<div class="recyle-date groupmanage-time">
<div class="group-time-animate">
<input type="text" id="selectTime01" class="selectTime form-control"   placeholder="开始时间"/>
</div>
<label class="group-time-animate-label"><span class="dzz dzz-vline"></span></label>
<div class="group-time-animate">
<input type="text" class="selectTime form-control" id="selectTime02" placeholder="结束时间" />
</div>
</div>
            	
            </div>
                
    </div>
        	
    <!--选择项结束-->
    <!--文件列表开始-->
<div id="filemanage-recycle-list"></div>
    <!--文件列表结束-->
</div>
</div>

<!--右侧菜单结束-->

<!--头部信息框-->
<div class="navtopheader">
</div>
<div id="template_middleicon" style="display:none"><div class="fileMenu middleicon  window">
    <div class="square-fileList js-file-item-tpl clearfix">
      <div id="Icoblock_middleicon_{rid}" class="Icoblock middleicon"  rid="{rid}" flag="{flag}">
          <table class="toggleGlow" cellpadding="0" cellspacing="0" width="100%" height="100%" style="">
            <tbody>
              <tr>
                <td align="center" valign="middle" style="overflow:hidden;" class="" height="142px">
                	<div class="icoimgContainer icoimgContainer_{type}">
                        <table width="100%" height="100%" cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="middle"><img class="Icoblock_icon radius" tsrc="{img}"  title="{name}" onload="_explorer.image_resize(this);" onerror="_explorer.icoimgError(this)" error="dzz/images/default/icodefault.png" data-start="image" data-original="index.php?mod=io&amp;op=thumbnail&amp;original=1&amp;path={dpath}" data-download="index.php?mod=io&amp;op=download&amp;path={dpath}" data-end="image" /></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="icoimgCover_up"></div>
                        <div class="icoimgtips"></div>
                        <div class="icoimgCover_down"></div>
                  	</div>
               	</td>
              </tr>
              <tr class="tr_item_name">
                <td align="center" valign="middle">
                   <div class="IcoText_div">
                        <table cellpadding="0" cellspacing="0" width="100%" height="100%">
                          <tbody>
                            <tr>
                              <td valign="middle" align="center" class="td_ico_item_name"><a id="file_text_{rid}" class="ico_item ico_item_name IcoText_folder">{name}</a></td>
                            </tr>
                          </tbody>
                        </table>
                  </div>
                 </td>
              </tr>
            </tbody>
          </table>
          <div class="icoblank_tip icoblank_rightbottom" ></div>
          <div class="backgound_radius"></div>
        </div>
    </div>
</div>

</div>
<div id="template_detaillist"  style="display:none"><div class="fileMenu detaillist filemanage">
  <div class="filemanage-detail-header">
        <table class="table " width="100%" border="0" style="table-layout:fixed;margin:0">
          <thead class="detail_header_tr">
            <tr>
              <th disp="0" class=" detail_header detail_header_0" width="40%">
              	<div class="detail_header_td_div">
                    <span class="detail_header_title">文件名</span>
                  <a class="detail_header_asc detail_header_asc_{asc_0}" style="display:{show_0};">
                  	<span class="dzz dzz-expand-less"></span>
                  	<span class="dzz dzz-expand-more"></span>
                  </a>
                  <div disp="0" class="detail_header_drag"></div>
                </div>
              </th>
              <th disp="1" class=" detail_header detail_header_1 " width="10%">
              	<div class="detail_header_td_div"><span class="detail_header_title">大小</span>
                <a class="detail_header_asc detail_header_asc_{asc_1}" style="display:{show_1};">
                	<span class="dzz dzz-expand-less"></span>
                	<span class="dzz dzz-expand-more"></span>
                </a>
                  <div disp="1" class="detail_header_drag"></div>
                </div>
              </th>
              <!--回收站的th开始-->
              <th disp="2" class="detail_header detail_header_2" width="10%">
              <div class="detail_header_td_div"><span class="detail_header_title">来源</span>
              	  <a class="detail_header_asc detail_header_asc_{asc_2}" style="display:{show_2};">
              	  	<span class="dzz dzz-expand-less"></span>
              	  	<span class="dzz dzz-expand-more"></span>
              	  </a>
                  <div disp="2" class="detail_header_drag" style="float:right"></div>
                </div>
              </th>
              <th disp="3" class=" detail_header detail_header_3 " width="10%"><div class="detail_header_td_div"><span class="detail_header_title">删除者</span><a class="detail_header_asc detail_header_asc_{asc_3}" style="display:{show_3};">
              	<span class="dzz dzz-expand-less"></span>
              	<span class="dzz dzz-expand-more"></span>
              </a></div></th>
               <th disp="4" class=" detail_header_4 " width="15%"><div class="detail_header_td_div"><span class="detail_header_title">删除日期</span></div></th>
               <th disp="5" class=" detail_header_4 " width="15%"><div class="detail_header_td_div"><span class="detail_header_title">永久删除时间</span></div></th>
              <!--回收站的th结束-->
            </tr>
          </thead>
        </table>
      </div>
  <div class="paddingright-con   js-list-body">
    
          <table class="table " width="100%" border="0" style="table-layout:fixed;margin:0">
            <tbody class="js-file-item-tpl">
              <tr id="Icoblock_detail_{rid}" class="detail_tr Icoblock" rid="{rid}">
                <!--<td class="detail_item_td " valign="middle" width="30" style="overflow:hidden;padding-right:0"><div class="detail_item_td_div detail_item_td_select" title="多选" rid="{rid}"><a class="selectbox" rid="{rid}" title="选取"></a></div></td>-->
                <td class="detail_item_td " valign="middle" width="40%" style="overflow:hidden;position:relative">
                	<div class="detail_item_td_div detail_item_td_name toggleGlow" title="metu.jpg" rid="{rid}">
                    	<a href="javascript:;" style="float: left;"><img class="detail_item_name_icon" tsrc="{img}" title="{name}" error="dzz/images/default/icodefault.png" onerror="jQuery(this).attr('src',jQuery(this).attr('error'))"  data-original="index.php?mod=io&amp;op=thumbnail&amp;original=1&amp;path={dpath}" data-download="index.php?mod=io&amp;op=download&amp;path={dpath}"></a>
                        <a id="file_text_{rid}" class="detail_text detail_item_name_text IcoText_folder">{name}</a>
                        {collectstatus}
                     </div>
                    <!-- <div class="hoverTools">
                     	<button type="button" class="btn download" onclick="_filemanage.downAttach('{rid}')"><i class="dzz dzz-download" title="下载"></i></button>
                        <button type="button" class="btn share" onclick="_filemanage.share('{rid}','{rids}')"><i
            class="dzz dzz-share" title="分享"></i> </button>
                     </div>-->
                </td>
                <td class="detail_item_td detail_item_td_size" valign="middle" width="10%" style="overflow:hidden">
                	<span title="{fsize}">{fsize}</span>
                </td>
                 <!--回收站td开始-->
                <td class="detail_item_td detail_item_td_type" valign="middle" width="10%" style="overflow:hidden">
                    <span title="{from}">{from}</span>
                </td>
                <td class="detail_item_td detail_item_td_type" valign="middle" width="10%" style="overflow:hidden">
                    <span title="{delusername}">{delusername}</span>
                </td>
                <td class="detail_item_td detail_item_td_type" valign="middle" width="15%" style="overflow:hidden">
                    <span title="{deldateline}">{deldateline}</span>
                </td>
                <td class="detail_item_td detail_item_td_type" valign="middle" width="15%" style="overflow:hidden">
                    <span title="{finallydate}">{finallydate}</span>
                </td>
                <!--回收站td结束-->
               
              </tr>
            </tbody>
          </table>
       
  </div>
</div></div>
<div id="template_toolButton" style="display:none"><div class="yunfile-btnMenu">
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
<div id="template_file" style="display:none"><div class="navtoperate">
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
<div id="template_nofile_notice" style="display:none"><div class="emptyPage">
    	<img src="<?php echo MOD_PATH;?>/img/noFilePage-recycle.png">
    	<p class="emptyPage-text">没有删除的文件或文件夹</p>
    </div></div>
<script type="text/javascript">
    $(document).ready(function(e) {
        var hash=location.hash;
        _filemanage.getData(_explorer.appUrl+'&op=recycle&do=filelist&sid=recycle-list');
        $('.input-black').each(function() {
            InputAnimate.init($(this));
        });
    });
   /* jQuery('.middlecenter').on('resize',function(e){
    });*/

 /*   //自动加载内容
    jQuery('#group-filemember .scroll-y').scroll(function (e) {
        var clientHeight = jQuery('#group-filemember .scroll-y').height();
        var scrollHeight = jQuery(this).find('.table').outerHeight(true);
        var scrollTop = jQuery('#group-filemember .scroll-y').scrollTop();
        if (scrollTop + clientHeight > scrollHeight - 60) {
            $('.btn_button_more').trigger('click');
        }
    })*/
   // var recycleids = [];//定义全局变量
   var searchrecyclejson = {'after':0,'before':0,'gid':0,'fid':0,'asc':0,'disp':0,'page':0};
/*    function loading(obj, next) {
        searchrecyclejson.page = next;
        $.post(MOD_URL+'&op=recycle&do=filelist', searchrecyclejson, function (data) {
            $(obj).closest('tr').replaceWith(data);
            for(var o in recycleids){
                if(!$(' tr.Icoblock[data-recycleid="'+recycleids[o]+'"]').hasClass('Icoselected')){
                    $(' tr.Icoblock[data-recycleid="'+recycleids[o]+'"]').addClass('Icoselected');
                }

            }

        })

    }*/
    //筛选条件   
/*$(document).off('click.recycleclick').on('click.recycleclick','.group-filemember-header .member_header',function(){
    	$(this).closest('.group-filemember-header tr').children('.group-filemember-header .member_header').find('.detail_header_icon').hide();
$(this).find('.detail_header_icon').css('display','inline-block');
if($(this).find('.dzz').hasClass('dzz-expand-more')){
$(this).find('.dzz').removeClass('dzz-expand-more').addClass('dzz-expand-less');
        searchrecyclejson.asc = 1;
}else{
$(this).find('.dzz').addClass('dzz-expand-more').removeClass('dzz-expand-less');
        searchrecyclejson.asc = 0;
}
        var dispval =$(this).find('.detail_header_icon').data('val');
        searchrecyclejson.disp = dispval;
        searchRecycledata();
    })*/
   /* //鼠标滑入效果
    $(document).on('mouseenter', '.group-filemember tr', function () {
        $(this).addClass('hover');
    })
    //鼠标滑出效果
    $(document).on('mouseleave', '.group-filemember tr', function () {
        $(this).removeClass('hover');
    })*/


$("#selectTime01").datepicker({ //添加日期选择功能
numberOfMonths: 1, //显示几个月
showButtonPanel: false, //是否显示按钮面板
dateFormat: 'yy-mm-dd', //日期格式
clearText: "清除", //清除日期的按钮名称
closeText: "关闭", //关闭选择框的按钮名称
yearSuffix: '年', //年的后缀
showMonthAfterYear: true, //是否把月放在年的后面
constrainInput: true,
maxDate: new Date(),
setDate: 'date',
zIndex:'50'
});
$("#selectTime02").datepicker({ //添加日期选择功能
numberOfMonths: 1, //显示几个月
showButtonPanel: false, //是否显示按钮面板
dateFormat: 'yy-mm-dd', //日期格式
clearText: "清除", //清除日期的按钮名称
closeText: "关闭", //关闭选择框的按钮名称
yearSuffix: '年', //年的后缀
showMonthAfterYear: true, //是否把月放在年的后面
constrainInput: true,
maxDate: new Date(),
setDate: 'date',
zIndex:'50'
});

//时间筛选项值发生变化时
$('#selectTime01').change(function(){
searchrecyclejson.after = $(this).val();
searchRecycledata();
})
    $('#selectTime02').change(function(){
        searchrecyclejson.before = $(this).val();
        searchRecycledata();
    })
//位置筛选项发生改变时
$(document).off('click.recycleposition').on('click.recycleposition','#position_menulist li',function(){
var val = $('a',this).data('val');
        var text = $(this).text();
        $('#search_data_text').text(text);
var pregf = /^f_\d+/;
var pregg = /^g_\d+/;
if(pregf.test(val)){
searchrecyclejson.fid = val.replace(/f_/,'');
searchrecyclejson.gid = 0;
}else if(pregg.test(val)){
searchrecyclejson.gid = val.replace(/g_/,'');
searchrecyclejson.fid = 0;
}else{
searchrecyclejson.gid = 0;
searchrecyclejson.fid = 0;
}
searchRecycledata();
})
//执行筛选
function searchRecycledata(){
        var filemanage=_filemanage.cons['recycle-list'];
        filemanage.gid=(searchrecyclejson.gid > 0) ? searchrecyclejson.gid:'';

        filemanage.fids=(searchrecyclejson.fid > 0) ?searchrecyclejson.fid:'';
        filemanage.after=(searchrecyclejson.after > 0) ? searchrecyclejson.after:'';
        filemanage.before=(searchrecyclejson.before > 0) ? searchrecyclejson.before:'';
        _filemanage.cons['recycle-list'].pageClick();
}
    function finally_delete(obj,id){
        $.post(MOD_URL+'&op=operation_file&do=deletefinally',{'id':id},function(data){
            if(data['success']){
                $(obj).closest('.liste').remove();
            }else if(data['error']){

            }
        },'json')
    }
</script>