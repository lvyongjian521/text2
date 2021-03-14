<?php

/*****
 ** 历史缓存清理脚本
 *
*****/

header("Content-Type: application/javascript; charset=utf-8");

// 获取缓存标记
$cache_mark_file = "./cache/cache.cache";
if(!is_file($cache_mark_file)){ file_put_contents($cache_mark_file,""); }
$cache_mark = file_get_contents($cache_mark_file);

// 缓存标记非本日则执行清理
if($cache_mark != date("Ymd")){
	file_put_contents($cache_mark_file,date("Ymd"));

	// 遍历cache目录删除历史缓存文件
	$clear_cache_dir = "./cache";
	$clear_handle = opendir($clear_cache_dir);
	while(($clear_dir = readdir($clear_handle)) !== false){
		if($clear_dir != "." && $clear_dir != ".."){
			$this_clear_dir = $clear_cache_dir."/".$clear_dir;
			if($clear_dir != date("Ymd")){
				if(is_dir($this_clear_dir)){
					cache_clear($this_clear_dir);
				}
			}
		}
	}
	closedir($clear_handle);

	die("console.log('缓存清理成功')");
}else{
	die("console.log('本日缓存已清理')");
}


// 删除指定缓存文件夹及文件夹内所有文件
function cache_clear($cache_dir){

	$handle = opendir($cache_dir);
	while(($file = readdir($handle)) !== false){
		if($file != "." && $file != ".."){
			$this_file = $cache_dir."/" . $file;
			is_dir($this_file) ? cache_clear($this_file) : unlink($this_file);
		}
	}
	closedir($handle);
	rmdir($cache_dir);
}