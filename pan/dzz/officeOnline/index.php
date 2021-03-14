<?php
/*
 * @copyright   Leyun internet Technology(Shanghai)Co.,Ltd
 * @license     http://www.dzzoffice.com/licenses/license.txt
 * @package     DzzOffice
 * @link        http://www.dzzoffice.com
 * @author      zyx(zyx@dzz.cc)
 */
if(!defined('IN_DZZ')) {
	exit('Access Denied');
}

require DZZ_ROOT.'./core/api/wopi/wopi.php';
$app=C::t("app_market")->fetch_by_identifier('officeOnline','dzz');
$app['extra']=unserialize($app['extra']);
$oos= rtrim($app['extra']['DocumentUrl'],'/').'/';
$dzzofficeurl=$app['extra']['FileUrl'];
if(empty($oos)) showmessage('officeOnline_enable_failed');

$path = dzzdecode($_GET['path']);
$meta=IO::getMeta($path);
if($meta['error']) showmessage($meta['error']);
$navtitle=$meta['name'];

$arr=wopi::GenerateFileLink($path,$oos,'',$dzzofficeurl,$_GET['action']);
include template('main');
?>