<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"C:\wwwroot\lvyongjian.xyz/application/admin\view\system\configseo.html";i:1579008637;s:65:"C:\wwwroot\lvyongjian.xyz\application\admin\view\public\head.html";i:1579008637;s:65:"C:\wwwroot\lvyongjian.xyz\application\admin\view\public\foot.html";i:1579008637;}*/ ?>
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

<div class="page-container">
        <form class="layui-form layui-form-pane" action="">
            <div class="layui-tab" lay-filter="tb1">
                <ul class="layui-tab-title">
                    <li class="layui-this" lay-id="configseo_1">视频首页SEO</li>
                    <li lay-id="configseo_2">文章首页SEO</li>
                    <li lay-id="configseo_3">演员首页SEO</li>
                    <li lay-id="configseo_4">角色首页SEO</li>
                    <li lay-id="configseo_5">剧情首页SEO</li>
                    <li lay-id="configseo_6">网址首页SEO</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            提示信息：<br>
                            视频首页 vod/index
                        </blockquote>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        标题：</label>
                    <div class="layui-input-block">
                        <input type="text" name="seo[vod][name]" placeholder="标题title" value="<?php echo $config['seo']['vod']['name']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        关键字：</label>
                    <div class="layui-input-block">
                        <input type="text" name="seo[vod][key]" placeholder="关键字keywords" value="<?php echo $config['seo']['vod']['key']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">
                        描述：</label>
                    <div class="layui-input-block">
                        <input type="text" name="seo[vod][des]" placeholder="描述description" value="<?php echo $config['seo']['vod']['des']; ?>" class="layui-input">
                    </div>
                </div>

            </div>
                    <div class="layui-tab-item">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            提示信息：<br>
                            文章首页 art/index
                        </blockquote>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                标题：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[art][name]" placeholder="标题title" value="<?php echo $config['seo']['art']['name']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                关键字：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[art][key]" placeholder="关键字keywords" value="<?php echo $config['seo']['art']['key']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                描述：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[art][des]" placeholder="描述description" value="<?php echo $config['seo']['art']['des']; ?>" class="layui-input">
                            </div>
                        </div>

                    </div>


                    <div class="layui-tab-item">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            提示信息：<br>
                            演员首页 actor/index
                        </blockquote>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                标题：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[actor][name]" placeholder="标题title" value="<?php echo $config['seo']['actor']['name']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                关键字：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[actor][key]" placeholder="关键字keywords" value="<?php echo $config['seo']['actor']['key']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                描述：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[actor][des]" placeholder="描述description" value="<?php echo $config['seo']['actor']['des']; ?>" class="layui-input">
                            </div>
                        </div>

                    </div>

                    <div class="layui-tab-item">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            提示信息：<br>
                            角色首页 role/index
                        </blockquote>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                标题：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[role][name]" placeholder="标题title" value="<?php echo $config['seo']['role']['name']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                关键字：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[role][key]" placeholder="关键字keywords" value="<?php echo $config['seo']['role']['key']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                描述：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[role][des]" placeholder="描述description" value="<?php echo $config['seo']['role']['des']; ?>" class="layui-input">
                            </div>
                        </div>

                    </div>

                    <div class="layui-tab-item">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            提示信息：<br>
                            剧情首页 plot/index
                        </blockquote>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                标题：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[plot][name]" placeholder="标题title" value="<?php echo $config['seo']['plot']['name']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                关键字：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[plot][key]" placeholder="关键字keywords" value="<?php echo $config['seo']['plot']['key']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                描述：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[plot][des]" placeholder="描述description" value="<?php echo $config['seo']['plot']['des']; ?>" class="layui-input">
                            </div>
                        </div>

                    </div>


                    <div class="layui-tab-item">
                        <blockquote class="layui-elem-quote layui-quote-nm">
                            提示信息：<br>
                            网址首页 website/index
                        </blockquote>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                标题：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[website][name]" placeholder="标题title" value="<?php echo $config['seo']['website']['name']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                关键字：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[website][key]" placeholder="关键字keywords" value="<?php echo $config['seo']['website']['key']; ?>" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                描述：</label>
                            <div class="layui-input-block">
                                <input type="text" name="seo[website][des]" placeholder="描述description" value="<?php echo $config['seo']['website']['des']; ?>" class="layui-input">
                            </div>
                        </div>

                    </div>

                </div>
        </div>
            <div class="layui-form-item center">
                <div class="layui-input-block">
                    <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                    <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
                </div>
            </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript" src="/static/js/jquery.cookie.js"></script>
<script type="text/javascript">
    layui.use(['element', 'form', 'layer'], function() {
        var element = layui.element
            ,form = layui.form
            , layer = layui.layer;


        element.on('tab(tb1)', function(){
            $.cookie('configapi_tab', this.getAttribute('lay-id'));
        });

        if( $.cookie('configapi_tab') !=null ) {
            element.tabChange('tb1', $.cookie('configapi_tab'));
        }

    });
</script>

</body>
</html>