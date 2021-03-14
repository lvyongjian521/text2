<?php
if(empty($_SERVER['HTTP_REFERER']) || empty($_COOKIE['PHPSESSID']) || empty($_COOKIE['admin_check'])){
    header('location:/');
    exit;
};
if(strpos($_SERVER['SCRIPT_NAME'], '/addons/xindaozhushou/') === false){
    exit;
}
$edition = ['banhao' => '1.6.5', 'shijian' => '2020-11-07'];
function make_token($length = 16){

    $is_token = include_once(dirname(__FILE__) . "/token.php");
    if ($is_token) {
        $tokens = $is_token;
        $token = substr($tokens, 0, 16);
        $tk_time = substr($tokens, 16);
        if (strtotime(date("Y-m-d")) == intval($tk_time)) {
            return $token;
        }
    }
    $str = array(
        'a', 'b', 'C', 'd', '4', 'F', 'g', 'h',
        'i', 'J', 'k', 'L', 'M', 'n', 'O', 'p', 'q', '2', 's',
        't', 'U', 'v', 'w', 'X', 'y', 'z', 'A', 'B', 'c', 'D',
        'E', 'f', 'G', 'H', 'I', 'j', 'K', 'l', 'm', 'N', 'o',
        'P', 'Q', 'R', 'S', 'T', 'u', 'V', 'W', 'x', 'Y', 'Z',
        '0', '1', 'r', '3', 'e', '5', '6', '7', '8', '9'
    );
    $keys = array_rand($str, $length);
    $token = '';
    for ($i = 0; $i < $length; $i++) {
        $token .= $str[$keys[$i]];
    }
    $tokens = "<?php\n return '".$token . strtotime(date("Y-m-d"))."';";
    $myfile = fopen(dirname(__FILE__) . "/token.php", "w+");
    fwrite($myfile, $tokens);
    fclose($myfile);
    return $token;
}