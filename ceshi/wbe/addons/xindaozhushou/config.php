<?php

$path = 'application/data/config/quickmenu.txt';
$mycj = @require('application/extra/maccms.php');
$info = '新导站长采集助手,' . $mycj['site']['install_dir'] . 'addons/xindaozhushou/index.php';

if (stristr(file_get_contents($path), $info)) {

  exit('快捷菜单已生成，后台首页-左侧菜单（新导站长采集助手）');

} elseif (file_put_contents($path, chr(13) . chr(10) . $info, FILE_APPEND)) {

  exit('快捷菜单已生成，后台首页-左侧菜单（新导站长采集助手）');

} else {

  exit('快捷菜单添加失败，请检查文件权限或者查看是否被防火墙拦截');
  
}