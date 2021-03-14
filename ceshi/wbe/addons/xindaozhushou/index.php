<?php include_once './controller/common.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>后台管理中心 - 请勿泄露后台地址 - Copyright by 苹果CMS内容管理系统</title>
    <link rel="stylesheet" href="/addons/xindaozhushou/static/layui/css/layui.css">
    <!-- <link rel="stylesheet" href="/static/css/admin_style.css?v=1024"> -->
    <script type="text/javascript" src="/static/js/jquery.js?v=1024"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <style>body.xindaozhushou{padding:10px;}em{font-style:normal;}.xindaozhushou .layui-nav-tree{width:100%;}.xindaozhushou .layui-nav,.xindaozhushou .layui-nav:hover{background-color:inherit;}.xindaozhushou .layui-nav .layui-nav-item a.click_zk{background-color:#f2f2f2;}.xindaozhushou .layui-nav .layui-nav-item a:hover{background-color:#e3e3e3;}.xindaozhushou .layui-nav .layui-nav-item a{border-color:#333;color:#333;}.xindaozhushou .layui-nav-tree .layui-nav-item{border-bottom:1px solid #e9e9e9;border-left-width:0;border-right-width:0;border-top-width:1px;}.xindaozhushou .layui-nav .layui-nav-more{border-color:#000 transparent transparent;}.xindaozhushou .layui-nav .layui-nav-itemed .layui-nav-more{border-color:transparent transparent #000;}.mlr-10{margin:0 10px;}.p10{padding:10px;}.plr10{padding:0 10px;}.mb0{margin-bottom:0!important;}.sousuo,.sousuo-input{display:inline-block;}.sousuo-input{width:200px;height:38px;font-size:14px;line-height:38px;}.sousuo-input,.sousuo-xiala{margin-bottom:10px;}.layui-nav .layui-nav-item a{padding-left:15px;}.click_zk h3,.click_zk span{display:inline-block;}.click_zk h3{font-weight:600;}.click_zk em,.click_zk span{margin-left:20px;font-size:12px;}.click_zk em{color:#828282;}.xindaozhushou .layui-nav .layui-nav-item .click_zk{color:#333!important;}.click_zk h3,.click_zk span{color:#ff5722;}.click_zk .layui-nav-more{display:none;}.click_zk .click_xia{float:left;margin:0 10px 0 0;}.layui-nav-itemed .click_zk .click_xia{-webkit-transform:rotate(90deg);transform:rotate(90deg);}.layui-form-pane .play_list .layui-form-checkbox{margin:0 0 0 10px;padding-right:37px;height:37px;line-height:37px;}.play_list .layui-form-checkbox i{width:37px;height:35px;}.play-tishi{margin-left:110px;}.gaoliang{color:#ff5722!important;}.cuowutishi{margin-bottom:10px;width:100%;height:40px;border:1px solid #f2f2f2;color:#ff5722;text-align:center;line-height:40px;}.cuowutishi i{margin-left:40px;color:#009688;cursor:pointer;}.layui-btn-container{font-size:14px;}.sheizhi_item{margin-bottom:10px;}.layui-form-checkbox[lay-skin=primary] span{height:18px;}.sousuo_list td.name span{margin-left:20px;color:#03c43e;}.sousuo.sousuo_jg{display:block;margin:auto;width:500px;}.sousuo.sousuo_jg .sousuo-input,.sousuo.sousuo_jg .sousuo-xiala{margin-bottom:0;}.sousuo_page .layui-laypage{margin-top:8px;}.sousuo_page{text-align:center;}.if_caiji{overflow:hidden;padding:10px;}.if_caiji ul{overflow:auto;margin:10px;width:100%;height:100%;}.if_caiji ul li{display:inline-block;width:50%;}td.caji_xiugai a{display:inline-block!important;}.piliang.layui-btn-container .layui-btn{margin-right:0;margin-left:10px;}.piliang .piliang_annaiu{display:inline-block;}.piliang .piliang_tianjia{float:right;}.piliang.layui-btn-container .piliang_tianjia .layui-btn{margin-left:0;}.xuanzhe_li{float:right;height:100%;line-height:45px;}.tuijian_list5 td{padding:0;text-align:center;font-weight:600;}.layui-nav-tree .tuijian_list5{position:relative;top:0;z-index:0;display:none;border:none;box-shadow:none;}.layui-nav-itemed>.tuijian_list5{display:block;padding:0;background-color:rgba(0,0,0,.3)!important;}.sousuo_lianxiang{position:absolute;z-index:99;padding:10px;width:246px;border:1px solid #f2f2f2;background:#fff;}.sousuo_lianxiang li{height:30px;line-height:30px;}.sousuo_lianxiang li:hover{background:#f2f2f2;cursor:pointer;}.xinbanben span{color:#ff5722;}a.quxiaosc{color:#999!important;}.bottms{margin-top:10px;height:40px;background:#8e8e8e;color:#fff;text-align:center;line-height:40px;}.bottms a{margin-left:20px;}.haibao-itme .haibao-itme-img img{width:100%;height:100%}.haibao-itme-img{overflow:hidden;border-radius:5px}.haibao-itme{margin-bottom:10px}.haibao-itme-name p{overflow:hidden;margin:10px 0;padding:5px 10px;height:21px;border:1px solid #e9e9e9;cursor:pointer}.haibao-itme-img span{position:absolute;padding:5px 10px;background:hsla(0,0%,100%,.35)}.haibao_zhehzi{margin-bottom:15px}.haibao_zhehzi_btn{float:right}.haibao_shuliang span{color:#ed3900}.haibao-right{right:0}.haibao-jieguo{height:200px;color:#b7b7b7;text-align:center;font-size:16px;line-height:200px}.itme-imgs{margin:0 auto;width:100%;height:270px}div#haibao_page{display:inline-block;width:100%;text-align:center}
</style>
</head>
<body class="xindaozhushou">
    <div class="layui-row">
        <div class="layui-col-md10">
            <div class="layui-btn-container">
                <button type="button" class="layui-btn btn-tianjia">
                    <i class="layui-icon">&#xe608;</i> 添加资源站
                </button>
                <button type="button" class="layui-btn layui-btn-disabled btn-jixucaiji"><i class="layui-icon">&#xe60e;</i> 接着上次采集</button>
                <div class="sousuo">
                    <form class="layui-form" action="" lay-filter="sousuo_btns">
                        <div class="layui-inline sousuo-xiala"></div>
                        <div class="layui-inline">
                            <input type="text" name="wd" required lay-verify="required" placeholder="这里搜索" autocomplete="off" class="layui-input sousuo-input">
                        </div>
                        <div class="layui-inline">
                            <button type="button" lay-submit class="layui-btn sousuo_btns" lay-filter="sousuo_btns1">搜索</button>
                        </div>
                    </form>
                </div>
                <button type="button" class="layui-btn layui-btn-primary sousuo_sz">搜索设置</button>
            </div>
        </div>
        <div class="layui-col-md2 layui-col-md-offset">
            <div class="layui-btn-container piliang" style="float: right;">
                <button type="button" class="layui-btn layui-btn-primary haibao">海报</button>
                <div class="piliang_annaiu piliang_annaiu_1">
                    <button type="button" class="layui-btn layui-btn-primary sousuo_list_btn">搜索合集</button>
                    <div class="piliang_tianjia">
                        <button type="button" class="layui-btn sousuo_list_jia">
                            <i class="layui-icon">&#xe654;</i>
                        </button>
                    </div>
                </div>
                <!-- <div class="piliang_annaiu piliang_annaiu_2">
                    <button type="button" class="layui-btn layui-btn-primary dingshi_list">定时任务</button>
                    <div class="piliang_tianjia">
                        <button type="button" class="layui-btn dingshi_list_jia">
                            <i class="layui-icon">&#xe654;</i>
                        </button>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="list_jiazai">
        <ul class="layui-nav layui-nav-tree" id="jiazai" lay-filter="test">
            <div style="position: absolute;top: 40%;left: 45%;color: #333;">加载中.....</div>
        </ul>
    </div>
<script type="text/javascript">
<?php $tokens = make_token();
if ($tokens) echo 'var c_tokens = "' . $tokens . '";' . "\n"; ?>
</script>
<script src="/addons/xindaozhushou/static/md5.js"></script>
<script src="/addons/xindaozhushou/static/xdzs.js?v=<?php echo $edition['banhao'];?>&c=pg"></script>
</body>
</html>