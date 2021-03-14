<?php  
//取得指定位址的內容，并储存至 $text 
$text=file_get_contents('https://zh.erocool3.com/detail/1846356o347551.html');   
 
//取得所有img标签，并储存至二维数组 $match 中  
preg_match_all('/<img[^>]*>/i', $text, $match);  
 
//打印出match  
print_r($match);  
?>