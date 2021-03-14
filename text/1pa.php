<?php  
set_time_limit(0);//抓取不受时间限制
    if($_POST['Submit']=="开始抓取"){
        $URL=$_POST['link'];
        get_pic($URL);
    }
//取得指定位址的內容，并储存至 $text 
$text=file_get_contents($url);   
 
//取得所有img标签，并储存至二维数组 $match 中  
preg_match_all('/<img[^>]*>/i', $text, $match);  
 
//打印出match  
print_r($match);  
?>
<html>
<head>
    <title>欢迎你呐</title>
</head>
<body>
    <form action="" method="post">
        text：<input type="text" id="link" name="link" value="web" OnClick="this.value=''" size="100" /><br />
        <input type="submit" id="Submit" name="Submit" value="sudo" />
    </form>
</body>
</html>