<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:1:{s:69:"C:\wwwroot\lvyongjian.xyz\pan\/./dzz/explorer/template/app_manage.htm";i:1613354169;}*/?>
<script type="text/javascript">
    try {
        var openarr = <?php echo $openarr;?>;
    } catch (e) {
    }
    $.getScript('dzz/system/scripts/selorg.js?<?php echo VERHASH;?>', function () {
        selorg.openarr = openarr;
    });
</script>
<style type="text/css">
.org-sel-box.dropdown-menu {
padding: 0px;
}
</style>
<div class="middlebottomMenu scroll-y padding-left-1">
    <form class="form-horizontal middletopMenu form_app_manage" action="<?php echo MOD_URL;?>&op=app&do=updatesetting"
          onsubmit="return submitsetting(this);">
            <div class="function-con">
                <div class="form-groups clearfix">
                    <label class="col-sm-2 col-xs-2 control-label app-label">开启个人存储</label>
                    <div class="col-sm-9 col-xs-9">
                        <input type="checkbox" class="js-switch" id="usermemory"
                               name="setting[explorer_usermemoryOn]"
                        <?php if($setting['explorer_usermemoryOn']==1 || !isset($setting['explorer_organizationOn'])) { ?>
                        checked
                        <?php } ?> />
                        <div id="memoryinfo"
                        <?php if(isset($setting['explorer_organizationOn']) && $setting['explorer_usermemoryOn'] == 0) { ?>
                        class="hide"<?php } ?> >
                        <div class="function-radio clearfix">
                            <div class="radio-custom radio-default">
                                <input type="radio" value="all" id="allsetting"
                                       name="setting[explorer_mermoryusersetting]"
                                <?php if(!isset($setting['explorer_mermoryusersetting']) || $setting['explorer_mermoryusersetting'] == 'all') { ?>
                                checked<?php } ?> >
                                <label class="ladelTxt lbook-label"
                                       for="allsetting"><span>所有人员</span></label>
                            </div>
                            <p class="lbook">根据机构部门管理中的组织架构，生成所有部门的个人存储空间。</p>
                        </div>
                        <div class="function-radio clearfix">
                            <div class="radio-custom radio-default">
                                <input type="radio" id="inputRadiosUnchecked"
                                       name="setting[explorer_mermoryusersetting]" value="appoint"
                                <?php if($setting['explorer_mermoryusersetting']=='appoint') { ?>checked
                                <?php } ?> >
                                <label class="ladelTxt lbook-label" for="inputRadiosUnchecked"><span>指定人员或部门人员</span></label>
                            </div>

                        </div>
                        <p class="lbook">仅为指定的人员或部门人员生成个人存储空间。</p>
                    </div>

                    <div class="selectorguser"
                    <?php if($setting['explorer_mermoryusersetting']!='appoint') { ?>
                    style="display:none"<?php } ?>>
                    <div class="clearfix">
                        <div id="orgids">
                            <?php if(is_array($sel_org)) foreach($sel_org as $value) { ?>                            <button id="orgids_sl_<?php echo $value['orgid'];?>" type="button"
                                    class="btn btn-simple btn-sorg" data-val="<?php echo $value['orgid'];?>"><?php echo avatar_group($value['orgid'],null,'iconFirstWord');?>                                <?php echo $value['orgname'];?> <a href="javascript:;"
                                                   class="ibtn dzz dzz-close"
                                                   title="删除"
                                                   onclick="selorg.remove('orgids',this);"></a>
                            </button>
                            <?php } ?>
                            <?php if(is_array($sel_user)) foreach($sel_user as $value1) { ?>                            <button id="orgids_sl_uid_<?php echo $value1['uid'];?>" data-val="uid_<?php echo $value1['uid'];?>"
                                    type="button" class="btn btn-simple btn-sorg"><?php echo avatar_block($value1[uid],array($value1[uid]=>$value1[headerColor]),'iconFirstWord');?> <?php echo $value1['username'];?> <a
                                    href="javascript:;" class="ibtn dzz dzz-close"

                                    title="删除" onclick="selorg.remove('orgids',this);"></a>
                            </button>
                            <?php } ?>
                        </div>

                        <input id="sel_orgids" name="setting[explorer_memoryorgusers]" type="hidden"
                               value="<?php echo $setting['explorer_memoryorgusers'];?>"/>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle btn btn-default-outline" id="orgids_Menu"
                           data-toggle="dropdown">选择部门或用户<span
                                class="caret"></span></a>
                        <div id="orgids_dropdown_menu" class="dropdown-menu org-sel-box" role="menu"
                             aria-labelledby="orgids_Menu">
                            <iframe name="orgids_iframe" class="org-sel-box-iframe"
                                    src="<?php echo DZZSCRIPT;?>?mod=system&op=orgtree&ctrlid=orgids&multiple=1"
                                    frameborder="0" marginheight="0" marginwidth="0" width="100%"
                                    height="100%" allowtransparency="true"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<div class="form-groups clearfix">
<label class="col-sm-2 col-xs-2 control-label app-label">允许使用机构</label>
<div class="col-sm-9 col-xs-9">
<input type="checkbox" class="js-switch" name="setting[explorer_organizationOn]"
<?php if((isset($setting['explorer_organizationOn']) && $setting['explorer_organizationOn']) || !isset($setting['explorer_organizationOn'])) { ?>
checked<?php } ?> />
</div>

</div>

<div class="form-groups clearfix">
<label class="col-sm-2 col-xs-2 control-label app-label">允许使用群组</label>
<div class="col-sm-9 col-xs-9"><input type="checkbox" class="js-switch"
                              name="setting[explorer_groupOn]"
<?php if((isset($setting['explorer_groupOn']) && $setting['explorer_groupOn']) || !isset($setting['explorer_groupOn'])) { ?>
checked <?php } ?> />
</div>

</div>

<div class="form-groups clearfix">
    <label class="col-sm-2 col-xs-2 control-label app-label">允许新建群组</label>
    <div class="col-sm-9 col-xs-9">
        <input type="checkbox" class="js-switch" name="setting[explorer_groupcreate]" id="usercreatememory"
        <?php if((isset($setting['explorer_groupcreate']) && $setting['explorer_groupcreate']) || !isset($setting['explorer_groupcreate'])) { ?>checked <?php } ?> />

    <div  id="memorycreateinfo" <?php if(isset($setting['explorer_groupcreate']) && $setting['explorer_groupcreate'] == 0) { ?>class="hide"<?php } ?> >
    <div class="function-radio clearfix">
        <div class="radio-custom radio-default">
            <input type="radio" value="all" name="setting[explorer_mermorygroupsetting]"<?php if(!isset($setting['explorer_mermorygroupsetting']) || $setting['explorer_mermorygroupsetting'] == 'all') { ?>checked<?php } ?> >
            <label class="ladelTxt lbook-label" for="allsetting"><span>所有人员</span></label>
        </div>
        <p class="lbook">允许所有部门成员新建群组。</p>
    </div>
    <div class="function-radio clearfix">
        <div class="radio-custom radio-default">
            <input type="radio" name="setting[explorer_mermorygroupsetting]" value="appoint"<?php if($setting['explorer_mermorygroupsetting']=='appoint') { ?>checked<?php } ?> >
            <label class="ladelTxt lbook-label" for="inputRadiosUnchecked"><span>指定人员或部门人员</span></label>
        </div>
        <p class="lbook">仅允许指定的人员或部门人员新建群组</p>
         </div>
    </div>
<div class="selectgroupuser"<?php if($setting['explorer_mermorygroupsetting']!='appoint') { ?>style="display:none;"<?php } ?>>
    <div class="clearfix">
        <div id="groupcreateids">
            <?php if(is_array($sel_org1)) foreach($sel_org1 as $value) { ?>            <button id="groupcreateids_sl_<?php echo $value['orgid'];?>" type="button" class="btn btn-simple btn-sorg" data-val="<?php echo $value['orgid'];?>"><?php echo avatar_group($value['orgid'],null,'iconFirstWord');?>                <?php echo $value['orgname'];?> <a href="javascript:;" class="ibtn dzz dzz-close" title="删除" onclick="selorg.remove('groupcreateids',this);"></a>
            </button>
            <?php } ?>
            <?php if(is_array($sel_user1)) foreach($sel_user1 as $value1) { ?>            <button id="groupcreateids_sl_uid_<?php echo $value1['uid'];?>" data-val="uid_<?php echo $value1['uid'];?>" type="button" class="btn btn-simple btn-sorg"><?php echo avatar_block($value1[uid],array($value1[uid]=>$value1[headerColor]),'iconFirstWord');?><?php echo $value1['username'];?> <a href="javascript:;" class="ibtn dzz dzz-close"  title="删除" onclick="selorg.remove('groupcreateids',this);"></a>
            </button>
            <?php } ?>
        </div>

        <input id="sel_groupcreateids" name="setting[explorer_memorygroupusers]" type="hidden"
               value="<?php echo $setting['explorer_memorygroupusers'];?>"/>
    </div>
    <div class="dropdown">
        <a href="javascript:;" class="dropdown-toggle btn btn-default-outline" id="groupcreateids_Menu" data-toggle="dropdown">选择部门或用户
            <span class="caret"></span></a>
        <div  class="dropdown-menu org-sel-box" role="menu" aria-labelledby="groupcreateids_Menu">
            <iframe name="groupcreateids_iframe" class="org-sel-box-iframe"
                    src="<?php echo DZZSCRIPT;?>?mod=system&op=orgtree&ctrlid=groupcreateids&multiple=1"
                    frameborder="0" marginheight="0" marginwidth="0" width="100%"
                    height="100%" allowtransparency="true"></iframe>
        </div>
    </div>
</div>
</div>
</div>

<div class="form-groups clearfix" >
    <label class="col-sm-2 col-xs-2 control-label app-label">允许新建类型</label>
    <div class="col-sm-9 col-xs-9">
        <input type="checkbox" class="js-switch" name="setting[explorer_catcreate]" id="catcreatememory"
        <?php if((isset($setting['explorer_catcreate']) && $setting['explorer_catcreate']) || !isset($setting['explorer_catcreate'])) { ?>checked <?php } ?> />
    </div>
</div>
<div class="form-groups clearfix" style="padding-bottom: 0rem;">
    <label class="col-sm-2 col-xs-2 control-label app-label">彻底删除设置</label>
    <div class="col-sm-9 col-xs-9" >
        <input type="text" class="form-control" name="setting[explorer_finallydelete]" style="max-width: 14.28rem;"  onblur="checks()" id="textnumber"
   <?php if(isset($setting['explorer_finallydelete'])) { ?>
value="<?php echo $setting['explorer_finallydelete'];?>"
<?php } else { ?>
value="-1"
<?php } ?>/>
<p class="number" style="display: none;color: red;">请输入整数</p>
<ul style="margin-top: 10px;">
<li>此处设置回收站内文件自动删除时间；单位：天；</li>
<li>-1：表示不自动删除回收站内文件；</li>
<li>>=0：表示回收站内文件超过设置的天数时自动删除。</li>
</ul>
        <!--<p class="lbook" style="margin-top: 10px;">此处设置回收站内文件自动删除时间；单位：天；</p>-->
    </div>
</div>

           </div>

<div class="function-button">
    <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-offset-2 col-sm-10 col-md-10 col-lg-10 col-xs-10">
        <input type="submit" value="确认" class="btn btn-primary"/>
        <button class="btn btn-default-outline">取消</button>
        <!--确认</input>-->
    </div>
</div>
</form>
</form>
</div>

<script type="text/javascript" reload="1">
var recylenum = true;
    //开关样式
    $.getScript('<?php echo MOD_PATH;?>/js/switchery.min.js', function () {
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        elems.forEach(function (html) {
            var switchery = new Switchery(html);
        });
    });
//input框只能输入数字
function checks(){
var value=jQuery('#textnumber').val();
reg=/^-?\d+$/;
if(reg.test(value)==true){
$('.number').hide();
        recylenum = true;
}else{
$('.number').show();
        recylenum = false;
}
return false;
}

    //个人创建群组开关
    $('#usercreatememory').change(function () {
        if ($(this).prop('checked')) {
            $('#memorycreateinfo').removeClass('hide');
            //$('#usermemory_value').val(1);
        } else {
            $('#memorycreateinfo').addClass('hide');
            //$('#usermemory_value').val(0);
        }
    })

    //个人存储开关
    $('#usermemory').change(function () {
        if ($(this).prop('checked')) {
            $('#memoryinfo').removeClass('hide');
            //$('#usermemory_value').val(1);
        } else {
            $('#memoryinfo').addClass('hide');
            //$('#usermemory_value').val(0);
        }
    })

    //机构人员选择框切换
    $('.function-radio').find('input[name="setting[explorer_mermorygroupsetting]"]').change(function () {
        var val = $(this).val();
        if (val == 'appoint') {
            $('div.selectgroupuser').show();
        } else {
            $('div.selectgroupuser').hide();
        }
    })
    $('.function-radio').find('input[name="setting[explorer_mermoryusersetting]"]').change(function () {
        var val = $(this).val();
        if (val == 'appoint') {
            $('div.selectorguser').show();
        } else {
            $('div.selectorguser').hide();
        }
    })
    //版本数量设置框切换
    $('#fileversion').change(function () {
        if ($(this).prop('checked')) {
            $('#fileversionnum').removeClass('hide');
            //$(this).val(1);
        } else {
            $('#fileversionnum').addClass('hide');
            $('#fileVersionNumber').val(0);
            //$(this).val(0);
        }
    })
    function submitsetting(form) {
    	if(!recylenum) return false;
        $.post(form.action, jQuery(form).serialize(), function (data) {
            if (data['success']) {
                showDialog(data['msg'] + '!3秒钟后将自动更新页面......', 'right');
                setTimeout(function () {
                    location.reload();
                }, 3000)
            } else {
                showDialog(data['msg']);
            }
        }, 'json')
        return false;
    }


</script>