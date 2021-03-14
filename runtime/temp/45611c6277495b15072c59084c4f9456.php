<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"D:\phpstudy_pro\WWW\b.com/application/admin\view\link\info.html";i:1579008637;s:65:"D:\phpstudy_pro\WWW\b.com\application\admin\view\public\head.html";i:1579008637;s:65:"D:\phpstudy_pro\WWW\b.com\application\admin\view\public\foot.html";i:1579008637;}*/ ?>
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
    <form class="layui-form layui-form-pane" method="post" action="">
        <input id="link_id" name="link_id" type="hidden" value="<?php echo $info['link_id']; ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">链接名称：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['link_name']; ?>" lay-verify="link_name" placeholder="请输入链接名称" id="link_name" name="link_name">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">链接地址：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['link_url']; ?>" lay-verify="link_url" placeholder="请输入链接地址http://开头" id="link_url" name="link_url">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">网站logo：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['link_logo']; ?>" placeholder="请输入logo地址" id="link_logo" name="link_logo">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">排列顺序：</label>
            <div class="layui-input-inline w100">
                <input type="text" class="layui-input" value="<?php echo $info['link_sort']; ?>" placeholder="请输入顺序号" id="link_sort" name="link_sort">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">链接类型：</label>
            <div class="layui-input-inline">
                <select class="w100" name="link_type">
                    <option value="0" <?php if($vo['link_type'] == 0): ?>selected <?php endif; ?>>文字链接</option>
                    <option value="1" <?php if($vo['link_type'] == 1): ?>selected <?php endif; ?>>图片链接</option>
                </select>
            </div>
        </div>

        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>

</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">
    layui.use(['form', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;

        // 验证
        form.verify({
            link_name: function (value) {
                if (value == "") {
                    return "请输入链接名称";
                }
            },
            link_url: function (value) {
                if (value == "") {
                    return "请输入链接地址";
                }
            }
        });


    });
</script>

</body>
</html>