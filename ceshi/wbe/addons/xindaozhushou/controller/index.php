<?php
include_once './common.php';
if(empty($_POST['tokenss']) || $_POST['tokenss'] !== make_token()){
    exit('(>▽<)');
}
switch ($_POST['fl']){
case 'common':
    
    $config = cof();
    $data = $config->commongetConf();
    $data['banben'] = $edition;
    r_json($data);
    break;

case 'sheizhi':
    if(!empty($_POST['id'])){
        $data = [
            'ty' => intval($_POST['ty']),
        ];
        $config = cof();
        $sheizhi = $config->getConf('list', 'sheizhi', 1);
        if($data['ty'] > 0){
            $data['data'] = [
                'id' => intval($_POST['id']),
                'filter' => intval($_POST['filter']),
                'filter_from' => htmlspecialchars(addslashes($_POST['filter_from'])),
                'opt' => intval($_POST['opt']),
                'playid' => json_encode($_POST['playid']),
            ];
            $sheizhi['sheizhi'][$data['data']['id']] = $data['data'];
            r_json($config->coverConf('list', 'sheizhi', $sheizhi, 1));

        }else if($data['ty'] == 0){
            r_json($sheizhi['sheizhi'][intval($_POST['id'])]);
        }

    }else{
        r_json();
    }
    break;

case 'sousuo':
    if(!empty($_POST['type']) && !empty($_POST['url'])){
        $type = intval($_POST['type']) == 1 ? 'xml' : 'json';
        $data = geturl(htmlspecialchars(addslashes($_POST['url'])), $type);
        if($data){
            print_r($data);
        }
    }else{
        r_json();
    }

    break;

case 'jilu':
    $data = [
        'ty' => intval($_POST['ty']),
    ];
    if(!empty($_POST['c_id']) && !empty($_POST['page']) && !empty($_POST['time'])){
        $data['data'] = [
            'c_id' => intval($_POST['c_id']),
            'page' => intval($_POST['page']),
            'time' => intval($_POST['time']),
            'filter' => intval($_POST['filter']),
            'filter_from' => htmlspecialchars(addslashes($_POST['filter_from'])),
            'mid' => intval($_POST['mid']),
            'opt' => intval($_POST['opt']),
        ];
        common($data, 'common', 'jilu');
    }else{
        r_json();
        break;
    }
    break;

case 'sousuo_list':
    sd_list();
    break;

case 'haibao_shezhi':
    $data = [
        'ty' => intval($_POST['ty']),
    ];

    if($data['ty'] == 0){
        $config = cof();
        $configs = $config->getConf('common', 'haibao_shezhi', 1);
        $datas = array();
        if(!empty($configs['haibao_shezhi'])){
            $datas['haibao_shezhi'] = $configs['haibao_shezhi'];
        }
        if(!empty($configs['haibao_id'])){
            $datas['haibao_id'] = $configs['haibao_id'];
        }
        echo r_json($datas);
        break;
    }

    if($data['ty'] == 9){
        if(file_exists($file)){
            $data['ty'] = 2;
        }else{
            echo r_json(0);
            break;
        }
    }
    
    if($data['ty'] == 1 || $data['ty'] == 2){
        $data['data'] = [
            'mima' => htmlspecialchars(addslashes($_POST['mima'])),
            'zhidong_gengxin' => intval($_POST['zhidong_gengxin']),
            'imgs' => intval($_POST['imgs']),
            'zhidong' => intval($_POST['zhidong']),
        ];

        if(isset($data['data']['mima'])){
            if(!empty($data['data']['mima'])){
                $tokens = "<?php\n return '". md5($data['data']['mima']) ."';";
                $myfile = fopen("../config/mima.php", "w+");
                fwrite($myfile, $tokens);
                fclose($myfile);
            }
        }

        $msg = array();

        if(isset($data['data']['zhidong'])){
            $file = '../../../application/api/controller/Xndaozhushou.php';
            if(!file_exists($file) && $data['data']['zhidong'] == 1){
                if(copy('./Xndaozhushou.php', $file)){
                    $msg = ['zhidong' => 1];
                }else{
                    $data['data']['zhidong'] = 0;
                    $msg = ['zhidong' => 0];
                }
            }else{
                if(file_exists($file)){
                    unlink($file);
                }
            }
        }
    }

    common($data, 'common', 'haibao_shezhi', $msg);

    break;

case 'haibao_tianjia':

    $ty = intval($_POST['ty']);

    if($ty == 1 || $ty == 2){
        $k =  array(
            'imgs' => htmlspecialchars(addslashes($_POST['imgs'])),
            'img' => htmlspecialchars(addslashes($_POST['img'])),
            'type' => intval($_POST['type']),
            'id' => intval($_POST['hid']),
        );
        if(!empty($_POST['name'])){
            $k['name'] =  htmlspecialchars(addslashes($_POST['name']));
        }
        if(!empty($_POST['vid'])){
            $k['vid'] =  intval($_POST['vid']);
        }
        include_once("./poster.php");
        $mima = include_once('../config/mima.php');
        $fanhui = tianjia(1, config(), $k, $mima, $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'], 1);
        r_json($fanhui);
    }
    break;

case 'sousuo_shezhi':
    
    if(isset($_POST['tongshi']) && isset($_POST['lianxiang'])){
        $data = [
            'ty' => intval($_POST['ty']),
            'data' => [
                'lianxiang' => intval($_POST['lianxiang']),
                'tongshi' => intval($_POST['tongshi']),
            ]
        ];
        common($data, 'common', 'sousuo_shezhi');
    }
    break;

case 'tianjia':

    $data = [
        'ty' => intval($_POST['ty']),
    ];
    if($data['ty'] == 1){
        if(!empty($_POST['url']) && !empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['mid'])){
            $data['data'] = [
                'url' => htmlspecialchars(addslashes($_POST['url'])),
                'name' => htmlspecialchars(addslashes($_POST['name'])),
                'mid' => intval($_POST['mid']),
                'type' => intval($_POST['type'])
            ];
        }else{
            r_json();
            break;
        }
    }
    if($data['ty'] == 2){
        if(!empty($_POST['id'])){
            $data['id'] = intval($_POST['id']);
        }else{
            r_json();
            break;
        }
    }
    caiji_tianjia($data);
    break;

case 'shoucang':
    if(isset($_POST['ty']) && !empty($_POST['ids'])){
        $data = [
            'ty' => intval($_POST['ty']),
            'data' => intval($_POST['ids']),
        ];
        id_common($data, 'common', 'shoucang');
    }
    break; 

default:
    exit('请求类型错误');
}

function sd_list(){
    $data = [
        'ty' => intval($_POST['ty']),
    ];
    if($data['ty'] == 1 || $data['ty'] == 2){
        $data['data'] = [
            'name' => htmlspecialchars(addslashes($_POST['name'])),
            'ids' => htmlspecialchars(addslashes($_POST['ids'])),
        ];

        // if($_POST['fl'] == 'dingshi_list'){
        //     $data['data']['zhouqi'] = arr_post($_POST['zhouqi']);
        //     $data['data']['shijian'] = arr_post($_POST['shijian']);
        // }

        if($data['ty'] == 2){
            $data['id'] = intval($_POST['id']);
        }
    }
    if($data['ty'] == 5){
        $data['ids'] = htmlspecialchars(addslashes($_POST['ids']));
    }
    sousuo_list($data, $_POST['fl']);
}

function caiji_tianjia($data){
    if($data['ty'] == 2){
        $data['id'] = $data['id'] - 9999;
    }
    common($data, 'list', 'tianjia');
}

function sousuo_list($data, $name){
    common($data, 'common', $name);
}

function dingshi_list($data){
    common($data, 'common', 'dingshi_list');
}

function common($data, $path, $name, $msg = ''){
    $config = cof();
    if($data['ty'] == 1){
        f_json($config->addConf($path, $name, $data['data']), $msg);
    }else if($data['ty'] == 2){
        if(isset($data['id'])){
            $name = [$name, (string)$data['id']];
        }
        f_json($config->addConf($path, $name, $data['data'], 1), $msg);
    }else if($data['ty'] == 5){
        if(isset($data['ids'])){
            $ids = explode(",", $data['ids']);
            if(count($ids) < 1){
                $ids = $data['ids'];
            }
            $name = [$name, $ids];
        }
        f_json($config->removeConf($path, $name), $msg);
    }else{
        $arr = $config->getConf($path, $name);
        if($arr){
            $arrs['code'] = 1;
            $arrs['data'] = $arr;
            r_json($arrs);
            return;
        }
        r_json();
    }
}


function id_common($data, $path, $name){
    $config = cof();
    $fanhui = $config->id_Conf($path, $name, $data['data'], $data['ty']);
    $arrs = ['code' => 0];
    if($fanhui){
        $arrs['code'] = 1;
        if(is_array($fanhui)){
            $arrs['data'] = $fanhui;
        }
    }
    r_json($arrs);
}

function f_json($data, $msg = array()){
    if($data){
        $code = 1;
    }else{
        $code = 1;
    }
    if($msg){
        $rt = array(
            'code' => $code,
            'data' => $msg
        );
    }else{
        $rt = $code;
    }
    r_json($rt);
}


function r_json($data = array()){
    if($data){
        if(is_array($data)){
            $datas = array();
            if(empty($data['code'])){
                $datas['code'] = 1;
                $datas['data'] = $data;
            }else{
                $datas = $data;
            }
            $ret = json_encode($datas);
        }else if($data === 1){
            $ret = '{"code": 1}'; 
        }else{
            $ret = '{"code": 1, "data": "'.$data.'"}'; 
        }
    }else{
        $ret = '{"code": 0}';
    }
    print_r($ret);
}

function arr_post($data){
    $arr = array();
    if($data){
        foreach($data as $k => $v){
            array_push($arr, intval($v));
        }
        return $arr;
    }
    return $data;
}

function cof(){
    include_once '../config/Config.php';
    return new Config();
}

function geturl($url, $type = 'json'){
    $types = 'application/json';
    if($type == 'xml'){
        $types = 'text/xml';
    }
    $headerArray =array("Content-type:".$types.";","Accept:".$types);
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
    if($type == 'xml'){
        $xml_parser = xml_parser_create(); 
        if(!xml_parse($xml_parser, $output, true)){ 
            r_json();
            return false;
        }else { 
            $outputs = simplexml_load_string($output, 'SimpleXMLElement', LIBXML_NOCDATA);
        } 
        $output = array(
            'code' => 1,
            'list' => array(),
        );
        foreach($outputs as $v){
            foreach($v as $k => $vs){
                if($k == 'video'){
                    $vv = json_decode(json_encode($vs), true);
                    $data = array(
                        'type_id' => $vv['tid'],
                        'type_name' => $vv['type'],
                        'vod_id' => $vv['id'],
                        'vod_name' => $vv['name'],
                        'vod_play_from' => $vv['dt'],
                        'vod_remarks' => $vv['note'],
                        'vod_time' => $vv['last'],
                    );
                    array_push($output['list'], $data);
                }
            }
        }
        $output = json_encode($output, true);
    }
    return $output;
}