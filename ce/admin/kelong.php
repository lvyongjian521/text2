<?php
$mod='blank';
include("../includes/common.php");
$title='后台管理';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php 
$url = $_POST["url"];
$localhost = $_SERVER['HTTP_HOST'];
if($url==$localhost)
{
exit(showmsg('不能克隆自己<br/><br/><a href="./list.php">>>返回接口列表</a>', 4));
}
$syskey = $_POST["syskey"];
if($url and $syskey){
$url = 'http://'.$url.'/api.php?act=api&syskey='.$syskey;
$data = json_decode(get_curl($url),true);
foreach($data["data"] as $k=>$v)
{
$url = $v["url"];
$post = $v["post"];
$status = $v["status"];
$DB->query("insert into `msg_api` (`url`,`post`,`status`) values ('$url','$post','$status')");
}
exit(showmsg(''.$data["msg"].'<br/><a href="./list.php">>>返回接口列表</a>', 2));
}
echo '   <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">克隆接口</h3></div>
        <div class="panel-body">
          <form action="./kelong.php" method="post" class="form-horizontal" role="form">
            <div class="input-group">
              <span class="input-group-addon">网站地址</span>
              <input type="text" name="url" class="form-control" value="'.$_POST['url'].'"  placeholder="blog.szmy.xyz:280" autocomplete="off" required/>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon">syskey</span>
              <input type="text" name="syskey" class="form-control" value="'.$_POST['syskey'].'" placeholder="12345678" autocomplete="off" required/>
            </div><br/>
            <div class="form-group">
              <div class="col-sm-12"><input type="submit" value="开始克隆" class="btn btn-primary form-control"/></div>
            </div>
          </form> <div class="alert alert-warning">免费接口请联系博主http://blog.szmy.xyz:280/</div>
      </div>
    </div>
  </div>
';
?>
  