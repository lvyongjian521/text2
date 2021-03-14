<?php
// Create DOM from URL or file
$html = file_get_contents('https://zh.erocool3.com/detail/1846503o347578.html');

// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>'; 
?>