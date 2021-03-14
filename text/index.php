<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>图片鉴黄</title>
    <meta name="keywords" content="图片鉴黄,图片检测,免费检测图片">
    <meta name="description" content="免费在线检测图片！">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </head>

  <style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
</style>
  <body style="background-image: url(https://random.52ecy.cn/randbg.php);background-attachment: fixed;background-repeat: no-repeat;background-size: cover;-moz-background-size: cover;">
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active">
            <a href="http://121.4.251.27">首页</a></li>
          <li role="presentation">
            <a href="https://121.4.251.27">121.4.251.27</a></li>
        </ul>
        <h3 class="text-muted" align="left">图片鉴黄</h3></div>
      <hr>
      <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-heading bk-bg-primary">
          <h6>
            <span class="panel-title">图片鉴黄</span></h6>
        </div>
        <div class="panel-body">
          <form action="index.php" method="POST">
            <input type="text" style="background: rgba(255, 251, 251, 0.7)" class="form-control" name="url" placeholder="这里输入需要鉴定的图片外链呐~" value="<?=@$_POST['url']?>">
            <br>
            <input type="submit" class="btn btn-primary btn-block" value="开始鉴定"></form>
<?php
$url=$_POST['url'];
$html = file_get_contents('http://api.ournice.cn/image/index.php?imgurl='.$url.'');
$dat = json_decode($html, true);
$errcode=$dat['errcode'];
$result=$dat['result'];
$suggestion=$result['suggestion'];
$a3=$result['category_suggestions'];
$porn=$a3['porn'];
$politics=$a3['politics'];
$terrorism=$a3['terrorism'];
if($porn=="pass"){
  $porn="<br>色情：通过";
}elseif($porn=="block"){
  $porn="<br>色情：QAQ,不通过。什么好图让我看看///w///";
}else{
  $porn="";
}
if($politics=="pass"){
  $politics="<br>政治：通过";
}elseif($politics=="block"){
  $politics="<br>政治：不通过";
}else{
  $politics="";
}
if($terrorism=="pass"){
  $terrorism="<br>暴恐：通过";
}elseif($terrorism=="block"){
  $terrorism="<br>暴恐：不通过";
}else{
  $terrorism="";
}
if($suggestion=="pass"){
  $suggestion="总体建议：检测通过";
}elseif($suggestion=="block"){
  $suggestion="总体建议：检测不通过".$porn."".$terrorism."".$politics."";
}else{
  $suggestion="出问题惹~";
}
?>

<?php
$preg = "/^http(s)?:\\/\\/.+/";
if(preg_match($preg,$url))
{
    echo "<div class='progress progress-striped active'><div class='progress-bar progress-bar-success' style='width: 100%'>正在鉴定中…嘿咻...嘿咻...</div></div><div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'><b> $suggestion </b></div></div>";
}else
{
  echo"请输入正确的外链";
}
?>

          <div class="tip"></div>
        </div>
      </div>
      <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-body">
          <div class="alert alert-info" role="alert">1.部分海外服务器无法查询(可能)
            <br>2.过慢的服务器也会响应失败
            <br>3.接口被攻击
            <br>以上三种情况查询结果都会失败
            <br>
            <br>本站仅供学习研究，不提供任何形式的图片储存、传播(也许吧/滑稽)
            <br>如有任何侵犯您权益的地方，请及时联系站长删除！
            <br>我们将努力保证识别准确率，因本站识别错误/bug等造成的损失概不负责
            </div></div>
        <div class="container-fluid">
          <a href="#" class="btn btn-default btn-sm">
            <span class="fa fa-users"></span> 加群</a>
          <a href="#" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-exclamation-sign"></span> 帮助</a>
          <a href="#" class="btn btn-info btn-sm">
            <span class="glyphicon glyphicon-user"></span> 留言</a>
          <a href="#" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-pencil"></span> 反馈</a>
        </div>
        <p style="text-align:center">
          <br>&copy; Powered by
          <a href="http://121.4.251.27">lvyongjian</a>!</p></div>
  </body>



</html>