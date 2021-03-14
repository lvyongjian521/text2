<?php
namespace app\api\controller;
use think\Controller;
use app\common\controller\All;

// 新导站长采集资源助手，海报操作文件，不用本功能自动海报可删除本文件

class Xndaozhushou extends All
{

    public function api(){

        $path = './addons/xindaozhushou/config/mima.php';
        $param = input(); // api.php/xndaozhushou/api
        
        if (is_file($path)){
            $mima = include_once($path);
            if($mima !== $param['m']){
                exit('权限不足');
            }
        }else{
            exit('插件错误');
        }

        $where = array();

        if(!empty($param['vid'])){

            $where['vod_id'] = intval($param['vid']);
            
        }else{

            $order ='vod_name asc';

            if(!empty($param['type'])){
                $type = intval($param['type']);
                if($type == 3 || $type == 4){
                    $where['type_id'] = ['eq', $type];
                }else{
                    $where['type_id_1'] = ['eq', $type];
                }
            }

            if(!empty($param['wd'])){
                $param['wd'] = htmlspecialchars(urldecode($param['wd']));
                $where['vod_name|vod_actor'] = ['like','%'.$param['wd'].'%'];
            }
        }

        $fanhui = array('code' => 0, 'msg' => '搜索不能为空', 'name' => '');

        if(!empty($param['wd']) || !empty($param['vid'])){

            if(!empty($where['vod_id'])){
                $res =model('Vod')->infoData($where);
            }else{
                $res = model('Vod')->listData($where, $order, 1, 10);
            }
            if(!empty($res['info'])){

                $res = $res['info'];
                $data = array(
                    'vod_id' => $res['vod_id'],
                    'vod_level' => 9,
                    'vod_name' => $res['vod_name'],
                    'type_id' => $res['type_id'],
                    'vod_pic_thumb' => htmlspecialchars(urldecode($param['img'])),
                );
                if(!empty($param['imgs'])){
                    $data['vod_pic_slide'] = htmlspecialchars(urldecode($param['imgs']));
                }
                $fanhui = $this->upData($data);

            }else{

                if(!empty($res['list'])){

                    foreach($res['list'] as $k){
                        $vod_name = str_replace($rep, "", $k['vod_name']); // 替换掉常见符号, 用于对比
        
                        if($this->is_tongming($vod_name, $param['wd'])){
                            $data = array(
                                'vod_id' => $k['vod_id'],
                                'vod_level' => 9,
                                'vod_name' => $k['vod_name'],
                                'type_id' => $k['type_id'],
                                'vod_pic_thumb' => htmlspecialchars(urldecode($param['img'])),
                            );
                            if(!empty($param['imgs'])){
                                $data['vod_pic_slide'] = htmlspecialchars(urldecode($param['imgs']));
                            }

                            $fanhui = $this->upData($data);
                            break;
                        }
                    }
                }else{
                    $fanhui = array('code' => 0, 'msg' => '没有搜索结果', 'name' => $param['wd']);
                }
            }
        }
        echo json_encode($fanhui);
    }

    public function is_tongming($name, $wd){
        $a = array('一', '二', '三', '四', '五', '六', '七', '八', '九', '', '', '', '', '', '', '', '', '', '', '', '');
        $zs = array('1', '2', '3', '4', '5', '6', '7', '8', '9', "[", "]", "【", "】", "/", " ", "(", ")", "（", "）", "：", ":");
        $name = str_replace($zs, $a, $name);
        if($name == $wd){
            return true;
        }
        return false;
    }

    private function upData($data){
        $res = model('Vod')->saveData($data);
        if($res['code'] == 1){
            $res['vod_id'] = $data['vod_id'];
        }
        $res['name'] = $data['vod_name'];
        return $res;
    }
    
}