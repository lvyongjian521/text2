<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:66:"C:\wwwroot\lvyongjian.xyz/application/admin\view\images\index.html";i:1579008637;s:65:"C:\wwwroot\lvyongjian.xyz\application\admin\view\public\head.html";i:1579008637;s:65:"C:\wwwroot\lvyongjian.xyz\application\admin\view\public\foot.html";i:1579008637;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS内容管理系统</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css?v=1020">
    <link rel="stylesheet" href="/static/css/admin_style.css?v=1020">
    <script type="text/javascript" src="/static/js/jquery.js?v=1020"></script>
    <script type="text/javascript" src="/static/layui/layui.js?v=1020"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>
<div class="page-container p10">

    <div class="my-btn-box lh30" >
        <div class="layui-btn-group fl">
            <a data-href="<?php echo url('del'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i>删除</a>
        </div>
        <div class="page-filter fr" >

        </div>
    </div>

    <form class="layui-form " method="post" id="pageListForm">
    <table class="layui-table mt10">
        <thead>
        <tr>
            <th><input type="checkbox" lay-skin="primary" lay-filter="allChoose">文件名</th>
            <th width="200">文件大小</th>
            <th width="200">修改时间</th>
        </tr>
        </thead>

        <?php if($ischild == 1): ?>
        <tr><td colspan="3"><a href="<?php echo url('images/index',['path'=>$uppath]); ?>">...返回上级目录</a></td></tr>
        <?php endif; if(is_array($files) || $files instanceof \think\Collection || $files instanceof \think\Paginator): $i = 0; $__LIST__ = $files;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <?php if($vo['isfile'] == 1): ?>
                <th><input type="checkbox" name="ids[]" value=".<?php echo $vo['path']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"> <a href="<?php echo $vo['path']; ?>" target="_blank"><?php echo $vo['name']; ?></a></th>
                <td><?php echo $vo['size']; ?></td>
                <td><?php echo mac_day($vo['time'],color); ?></td>
                <?php else: ?>
                <th><a href="<?php echo url('images/index',['path'=>$vo['path']]); ?>"><?php echo $vo['name']; ?></a></th>
                <td></td>
                <td></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
        <tfoot>
            <tr><td colspan="3">本目录下共有<b class="red"><?php echo $num_path; ?></b>个目录,<b class="red"><?php echo $num_file; ?></b>个文件,占用<b class="red"><?php echo $sum_size; ?></b>空间</td></tr>
        </tfoot>
    </table>
    </form>
</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">

    layui.use(['element', 'layer'], function() {


    });
</script>
</body>
</html>