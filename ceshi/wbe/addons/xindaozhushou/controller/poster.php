<?php

if(!empty($_GET['m'])){
    $urls = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
    dingshi($urls);
}

function dingshi($urls){
    $data = geturls('https://ziyuanapi.xingdaoo.com/j_hbapi?page=1&limit=20');
    if(empty($data['data']['data'])){
        return false;
    }
    $data = $data['data']['data'];
    $config = config();
    $mima = md5($_GET['m']);

    if(!empty($config['zhidong'])){

        $configs = include_once("../config/Config.php");
        $configs = new Config();

        foreach($data as $k){
            $is_vid = haibao_id($k['id']);
            if($is_hid){
                if($config['zhidong_gengxin'] == 1 && $is_vid > 0){
                    $k['vid'] = $is_vid;
                    $k['name'] = '';
                }else{
                    continue;
                }
            }
            $fanhui = tianjia($configs, $config, $k, $mima, $urls);
            $configs->addConf('common', 'haibao_id',  $fanhui);
        }
    }
}


// 单个添加
function tianjia($configs, $config, $k, $mima, $urls, $id = 0){
    $datas = array(
        'img' => urlencode($k['img']),
        'm' => $mima,
        'type' => $k['type'],
    );
    if(!empty($k['name'])){
        $datas['wd'] = $k['name'];
    }
    if(!empty($k['vid'])){
        $datas['vid'] = $k['vid'];
    }
    if(!empty($config['imgs'])){
        $datas['imgs'] = urlencode($k['imgs']);
    }
    $url = '';
    foreach($datas as $ks => $v){
        if($ks == 'img'){
            $url .= $ks.'='.$v;
        }else{
            $url .= '&'.$ks.'='.$v;
        }
    }
    $url =  $urls . '/api.php/xndaozhushou/api?'. $url;
    if($id && haibao_id($k['id']) && !empty($k['name'])){
        return;
    }
    $fanhui = geturls($url);
    if(!empty($fanhui['vod_id']) && empty($datas['vid'])){
        if($id){
            $configs = include_once("../config/Config.php");
            $configs = new Config();
            $configs->addConf('common', 'haibao_id', array('hid' => $k['id'], 'vid' => $fanhui['vod_id']));
        }else{
            return array('hid' => $k['id'], 'vid' => $fanhui['vod_id']);
        }
    }
    return $fanhui;
}


// 加载配置文件
function config(){
    $path = "../config/common.php";
    if (is_file($path)) {
        $config = include_once($path);
        if(is_array($config)){
            $configs = json_decode($config[0], true);
            if(!empty($configs['haibao_shezhi'])){
                return $configs['haibao_shezhi'];
            }
        }
    }
    return false;
}

function haibao_id($hid){
    $path = "../config/common.php";
    if (is_file($path)) {
        $config = include($path);
        if(is_array($config)){
            $configs = json_decode($config[0], true);
            if(!empty($configs['haibao_id'])){
                foreach($configs['haibao_id'] as $k){
                    if($k['hid'] == $hid){
                        return $k['vid'];
                    }
                }
                return false;
            }
        }
    }
    return false;
}


function geturls($url){
    $headerArray =array("Content-type:application/json;","Accept:application/json");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output, true);
}