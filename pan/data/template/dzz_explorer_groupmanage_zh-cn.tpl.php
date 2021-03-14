<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:2:{s:70:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/groupmanage.htm";i:1613354169;s:75:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/noFilePage-group.htm";i:1613354169;}*/?>
        <div class="padding-left-1  scroll-y">
            <div class="middletopMenu groupmanage-paddingbottom clearfix">
            	<div class="groupmanage-header-top clearfix">
                	 <div class="public-allgroup">                	 		
                	 		<div class="dropdown">
                        <button type="text" class="form-control" value="全部群组"
                                data-toggle="dropdown"  readonly="readonly" id="grouptext">
                                <span class="dropdown_text">全部群组</span>
                                <i class="dzz dzz-arrow-dropdown input-icon"></i>
                        </button>
                        <ul class="dropdown-menu group-dropdownbutton" id="searchgrouplist">
                            <li><a href="javascript:;" data-val="0">全部群组</a></li>
                            <li><a href="javascript:;" data-val="1">已关闭</a></li>
                            <li><a href="javascript:;" data-val="2">已开启</a></li>
                         <!--   <li><a href="javascript:;" data-val="dir_1">已关闭共享</a></li>
                            <li><a href="javascript:;" data-val="dir_2">已关闭共享</a></li>-->
                        </ul>	                    		
                	 		</div>
                	 </div>

                    <div class="groupmanage-time">
                    	<div class="group-time-animate ">	                        
                            <input type="text" id="groupDate" class="form-control"
                                    placeholder="开始时间"/>	                        
                        </div>
                        <label class="group-time-animate-label"><span class="dzz dzz-vline"></span></label>                         
                        <div class="group-time-animate">
                            <input type="text" id="groupDate1" class="form-control"
                                    placeholder="结束时间"/>
                        </div>
                    </div>
            	</div>
            	<!--<div class="groupmanage-text clearfix"><span class="dzz dzz-info"></span>"群文件"和"群组"的开启,是"总系统管理员"开启"群管理员"对该项设置的权限,并非直接开启"群文件"或"群组".</div>-->
            </div>
            <!--文件夹列表开始-->
            <div class="group-filemember" id="group-filemember">
                <div class="group-filemember-header">
                    <table class="table" width="100%" border="0">
                        <thead>
                        <tr>
                            <th class="member_header member_header_0" width="40%">
                                <div class="member_header_td_div">
                                    <span class="member_header_title">群组名称</span>
                                    <a class="detail_header_icon" data-val="0" style="display: inline-block;"><span
                                            class="dzz dzz-expand-more"></span></a>
                                </div>
                            </th>
                            <th class="member_header_1" width="10%">
                                <div class="member_header_td_div">
                                    <span class="member_header_type">管理员</span>
                                </div>
                            </th>
                            <th class="member_header_2" width="10%">
                                <div class="member_header_td_div">
                                    <span class="member_header_title">成员数</span>
                                </div>
                            </th>
                            <th class="member_header member_header_3" width="20%">
                                <div class="member_header_td_div">
                                    <span class="member_header_title">创建日期</span>
                                    <a class="detail_header_icon" data-val="1"><span
                                            class="dzz dzz-expand-more"></span></a>
                                </div>
                            </th>
                           <!-- <th class="member_header member_header_4" width="10%">
                                <div class="member_header_td_div">
                                    <span class="member_header_title">群文件</span>
                                </div>
                            </th>-->
                            <th class="member_header member_header_5" width="10%">
                            	<div class="member_header_td_div">
                                    <span class="member_header_title">群组</span>
                                </div>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>

                <div class="recent-con">
                    <table class="table" width="100%" border="0">
                        <tbody id="memberlist">
                        <?php if(is_array($groups)) foreach($groups as $v) { ?>                        <tr id="group_<?php echo $v['orgid'];?>" class="member_tr Icoblock opengroup" data-gid="<?php echo $v['orgid'];?>"
                            data-groupon="<?php echo $v['syatemon'];?>" data-diron="<?php echo $v['available'];?>">
                            <td class="member_item_td" valign="middle" width="40%" style="position: relative;">
                                <div class="member_item_td_div member_item_td_name member_item_td_group">
                                    <a href="javascript:;" style="float: left;">
                                            <?php echo avatar_group($v[orgid]);?>                                    </a>
                                    <a href="javascript:;" class="member_text member_item_name_text IcoText_folder"><?php echo $v['orgname'];?></a>
                                </div>
                            	<div class="member_hoverTools">
                            		<button type="button" class="btn" >
                            		<span class="dzz dzz-delete  delete_group" data-gid="<?php echo $v['orgid'];?>"></span></button>
                            	</div>
                            </td>
                            <td class="member_item_td" valign="middle" width="10%">
                                <span> <?php echo $v['creater'];?></span>
                            </td>
                            <td class="member_item_td" valign="middle" width="10%">
                                <span><?php echo $v['usernum'];?></span>
                            </td>
                            <td class="member_item_td" valign="middle" width="20%">
                                <span><?php echo dgmdate($v['dateline'],'Y-m-d');?></span>
                            </td>
                            <td class="member_item_td" valign="middle" width="10%">
                                <input type="checkbox" class="js-switch sysdiron" value="<?php echo $v['diron'];?>" data-gid="<?php echo $v['orgid'];?>" <?php if($v['diron']) { ?>checked="checked"<?php } ?>
                                       name="available" />
                            </td>
                         <!--   <td class="member_item_td" valign="middle" width="10%">
                                <input type="checkbox" class="js-switch systemon"  data-gid="<?php echo $v['orgid'];?>"
                                       name="syatemon" value="<?php echo $v['manageon'];?>" &lt;!&ndash;<?php if($v['manageon']) { ?>&ndash;&gt;checked="checked"&lt;!&ndash;<?php } ?>&ndash;&gt;/>
                            </td>-->
                        </tr>
                        <?php } ?>
                        <?php if($groupsnumber == 0) { ?>
                        <tr class="emptyshare">
                            <td colspan="6" style="border: none;">
                                <div class="emptyPage">
    <img src="<?php echo MOD_PATH;?>/img/noFilePage-group.png">
    <p class="emptyPage-text">还没有群组</p>
</div>                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--文件夹列表结束-->        
        </div>
<script type="text/javascript" reload="1">
//开关样式
    $.getScript('<?php echo MOD_PATH;?>/js/switchery.min.js', function () {
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html);
        });
    });
    jQuery(document).ready(function (e) {
        $('.input-black').each(function() {			
InputAnimate.init($(this));			
});
    });
    //群组共享开启关闭
    $(document).off('change.sysdiron').on('change.sysdiron','#memberlist .sysdiron',function(){
        var obj = $(this);
        var available = obj.val();
        var diron = (available == 1) ? 0:1;
        var gid = $(this).data('gid');
        $.post(MOD_URL+'&op=groupmanage&do=groupmanage', {'gid': gid, 'diron': diron},function(data){
            if (data.success) {
            	showmessage('操作执行成功,2s后将为您更新数据...', 'success', 3000, 1, 'right-bottom');
//              showDialog('操作执行成功,2s后将为您更新数据...', 'right');
                obj.val(diron);
                /*setTimeout(function () {
                    location.reload();
                }, 2000);*/
            } else {
            	showmessage(data['error'], 'error', 3000, 1, 'right-bottom');
//              showDialog(data['error']);
            }
        },'json')
    })
    //群组开启关闭
    $(document).off('change.systemon').on('change.systemon','#memberlist .systemon',function(){
        var obj = $(this);
        var systemon = obj.val();
        var groupon = (systemon == 1) ? 0:1;
        var gid = obj.data('gid');
        $.post(MOD_URL+'&op=groupmanage&do=groupmanage', {'gid': gid, 'groupon': groupon},function(data){
            if (data.success) {
            	showmessage('操作执行成功,2s后将为您更新数据...', 'success', 3000, 1, 'right-bottom');
//            showDialog('操作执行成功,2s后将为您更新数据...', 'right');
                obj.val(groupon);
                /*setTimeout(function () {
                    location.reload();
                }, 2000);*/
//             showmessage('操作执行成功,2s后将为您更新数据...', 'info', 3000, 1, 'right-bottom');
            } else {
            	showmessage(data['error'], 'error', 3000, 1, 'right-bottom');
//              showDialog(data['error']);
            }
        },'json')
    })
  /*  function openGroup(obj) {
        var gid = $(obj).data('gid');
        var hash = "#group&gid=" + gid;
        location.hash = hash;
    }*/
    $(document).off('click.opengroup').on('click.opengroup','.opengroup',function(){
        var gid = $(this).data('gid');
        var hash = "#group&gid=" + gid;
        location.hash = hash;
    })
    var searchGroupData = {'disp': 0, 'asc': 0, 'groupon': 0, 'after': 0, 'before': 0, 'page': 0, 'diron': 0};
    $("#groupDate,#groupDate1").datepicker({ //添加日期选择功能
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

    });
    $('#groupDate').change(function () {
        searchGroupData.after = $(this).val();
        searchGroup();
    })
    $('#groupDate1').change(function () {
        searchGroupData.before = $(this).val();
        searchGroup();
    })
    //全部群组切换
    $(document).off('click.searchgroup').on('click.searchgroup', '#searchgrouplist li', function () {
        var val = $('a', this).data('val');
        var text = $('a', this).text();
        var valperg = /dir_\d+/;
        var numpreg = /\d+/;
        if (valperg.test(val)) {
            val = parseInt(val.replace(/dir_/, ''));
            searchGroupData.diron = val;
            searchGroupData.groupon = 0;
        } else if (numpreg.test(val)) {
            searchGroupData.groupon = val;
            searchGroupData.diron = 0;
        } else {
            searchGroupData.diron = 0;
            searchGroupData.groupon = 0;
        }
        $('#grouptext span').html(text);
        searchGroup();
    })
    function searchGroup() {
        $.post(MOD_URL+'&op=groupmanage&do=filelist', searchGroupData, function (data) {
            $('#memberlist').html(data);
            $.getScript('<?php echo MOD_PATH;?>/js/switchery.min.js', function () {
                var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
                elems.forEach(function (html) {
                    var switchery = new Switchery(html);
                });
            });
        })
    }
    $(document).off('click.groupmanaclick').on('click.groupmanaclick', '.group-filemember-header .member_header', function () {
        $(this).closest('.group-filemember-header tr').children('.group-filemember-header .member_header').find('.detail_header_icon').hide();
        $(this).find('.detail_header_icon').css('display', 'inline-block');
        if ($(this).find('.dzz ').hasClass('dzz-expand-more')) {
            $(this).find('.dzz ').removeClass('dzz-expand-more').addClass('dzz-expand-less');
            searchGroupData.asc = 1;
        } else {
            $(this).find('.dzz').addClass('dzz-expand-more').removeClass('dzz-expand-less');
            searchGroupData.asc = 0;
        }
        var dispval = $(this).find('.detail_header_icon').data('val');
        searchGroupData.disp = dispval;
        searchGroup();
    })

    //鼠标滑入效果
    $(document).on('mouseenter', '.group-filemember tr', function () {
        $(this).addClass('hover');
        $(this).find('.member_hoverTools').show();
    })
    //鼠标滑出效果
    $(document).on('mouseleave', '.group-filemember tr', function () {
        $(this).removeClass('hover');
        $(this).find('.member_hoverTools').hide();
    })
    $(document).off('click.deletegroup').on('click.deletegroup','.delete_group',function(e){
        var gid = $(this).data('gid');
        var msg ='<span class="delect_text_red">'+'彻底删除后将不可恢复！' +'</span>';
        var title ='<span class="delect-title-normal">'+'确定要删除群组吗？'+'</span>' ;
        showDialog(msg,'confirm',title,function () {
            $.post(MOD_URL+'&op=groupmanage&do=delgroup',{'gid':gid},function(data){
                for(var i in data.msg){
                    if(data.msg[i]=='success'){
                        $('#group_'+i).remove();
                        showDialog(data.name[i]+'群组删除成功，即将为您更新数据...','right');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);

                    }else{
                        showmessage(data.msg[i],'error',3000,1,'right-bottom');
                    }
                }
                return false;
            },'json')
        });
        return false;
    })
</script>