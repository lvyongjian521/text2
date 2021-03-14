<?php

class Config{
    protected static $config;

    // 加载配置文件
    public function loadConf($path){
        
        $path = "../config/". $path .'.php';
        if (is_file($path)) {
            self::$config = include($path);
            if(is_array(self::$config)){
                self::$config = json_decode(self::$config[0], true);
            }
        }
    }

    // 获取配置
    public function getConf($path, $name, $moshi = 0){

        $this->loadConf($path);
        if($moshi){
            return self::$config;
        }
        if (isset(self::$config[$name])) {
            return self::$config[$name];
        } else {
            return false;
        }
    }

    // 获取公共配置
    public function commongetConf(){

        $this->loadConf('common');
        $data = [];
        if (isset(self::$config['jilu'])) {
            $data['jilu'] = self::$config['jilu'];
        }
        if (isset(self::$config['sousuo_list'])) {
            $data['sousuo_list'] = $this->is_stn_arr(isset(self::$config['sousuo_list']['name']) ? [self::$config['sousuo_list']] : self::$config['sousuo_list']);
        }
        if (isset(self::$config['shoucang'])) {
            $data['shoucang'] = $this->is_stn_arr(self::$config['shoucang']);
        }
        if (isset(self::$config['sousuo_shezhi'])) {
            $data['sousuo_shezhi'] = self::$config['sousuo_shezhi'];
        }
        $this->loadConf('list');
        if (isset(self::$config['tianjia'])) {
            $data['tianjia'] = $this->is_stn_arr(self::$config['tianjia']);
        }
        if (isset(self::$config['sheizhi'])) {
            $data['sheizhi'] = $this->is_stn_arr(self::$config['sheizhi']);
        }
        return $data;
    }

    public function id_Conf($path, $name, $val, $moshi = 0){

        $this->loadConf($path);
        $res = self::$config;

        if($moshi == 0 || $moshi == 2){
            if($moshi == 0){
                return $res[$name];
            }else{
                foreach($res[$name] as $k => $v){
                    if($v == $val){
                        unset($res[$name][$k]);
                    }
                }
            }
        }else{
            if(isset($res[$name])){
                if(!in_array($val, $res[$name])){
                    $res[$name] = $this->arr_pds($res[$name], $val);
                }
            }else{
                $res[$name] = $val;
            }
        }
        return $this->xieru($path, $res);
    }

    public function coverConf($path, $name, $val, $moshi = 0){
        if($moshi){
            $res = $val;
        }else{
            $this->loadConf($path);
            $res = self::$config;
            if(empty($res[$name])){
                $res[$name] = '';
            }
            $res[$name] = $val;
        }
        return $this->xieru($path, $res);
    }

    public function addConf($path, $name, $val, $moshi = 0){

        $this->loadConf($path);
        $res = self::$config;

        if(is_array($name)){
            $pointer = &$res;
            $ct = 0;
            foreach ($name as $key => $v) {
                $ct ++;
                if (isset($pointer[$v])) {
                    $pointer = &$pointer[$v];
                    if($ct == count($name)){
                        $pointer = $this->arr_pd($pointer, $val, $moshi);
                        break;
                    }
                }else{
                    $pointer[$v] = $val;
                    break;
                }
            }
        }else{
            if($name){
                if(isset($res[$name])){
                    $res[$name] = $this->arr_pd($res[$name], $val, $moshi);
                }else{
                    $res[$name] = $val;
                }
            }
        }
        return $this->xieru($path, $res);
    }


    public function removeConf($path, $name){
        $this->loadConf($path);
        $res = self::$config;

        if(is_array($name)){
            $pointer = &$res;
            $ct = 0;
            foreach ($name as $k => $v) {
                $ct ++;
                if(is_array($v)){
                    foreach ($v as $kk => $vv) {
                        unset($pointer[$vv]);
                        $pointer = array_values($pointer);
                    }
                }else{
                    if (isset($pointer[$v])) {
                        $pointer = &$pointer[$v];
                        if($ct == count($name)){
                            unset($pointer[$name]);
                            if(is_numeric($name[count($name) -1])){
                                $pointer = array_values($pointer);
                            }
                            break;
                        }
                    }
                }
            }
            if(!$pointer){
                unset($pointer);
            }
        }else{
            unset($res[$name]);
        }
        return $this->xieru($path, $res);
    }

    // 添加密码
    public function xieru_mima($val){
        if(strlen($val) !== 32){
            return false;
        }
        return $this->xieru('mima', [addslashes($val)]);
    }

    // 写入配置文件
    private function xieru($path, $res){

        $str = "<?php\nreturn ['";
        $str .= json_encode($res);
        $str .= "'];";
        if (file_put_contents("../config/".$path.".php", $str)) {
            return true;
        } else {
            return false;
        }
    }


    // 添加多个改为数组
    public function arr_pd($arr, $val, $moshi = 0){
        if($moshi){
            return $val;
        }else{
            if(is_array($arr)){
                if(count($arr) == count($arr, 1)){
                    $arrs[] = $arr;
                    $arr = $arrs;
                }
                array_push($arr, $val);
                return $arr;
            }else{
                return [$arr, $val];
            } 
        }
    }

    public function arr_pds($arr, $val, $moshi = 0){
        if($moshi){
            return $val;
        }else{
            if(is_array($arr)){
                array_push($arr, $val);
                return $arr;
            }else{
                return [$arr, $val];
            } 
        }
    }

    public function is_stn_arr($data){
        if(is_array($data)){
            return $data;
        }else{
            return [$data];
        }
    }
}
