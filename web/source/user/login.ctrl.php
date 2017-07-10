<?php
/**
 * [WEIXIN System] Copyright (c) 2015 012WZ.COM
 * WeiZan is NOT a free software, it under the license terms, wiexin.
 */
defined('IN_IA') or exit('Access Denied');
define('IN_GW', true);
if(checksubmit()) {
	_login($_GPC['referer']);
}
$setting = $_W['setting'];
template('user/login');

function diffBetweenTwoDays ($day1, $day2)
{
  $second1 = strtotime($day1);
  $second2 = strtotime($day2);
    
  if ($second1 < $second2) {
		return ($second2 - $second1) / 86400;
  }else{
		return ($second1 - $second2) / 86400;
   }
}
function _login($forward = '') {
	global $_GPC, $_W;
	load()->model('user');
	$member = array();
	$username = trim($_GPC['username']);
	if(empty($username)) {
		message('请输入要登录的用户名');
	}
	$member['username'] = $username;
	$member['password'] = $_GPC['password'];
	if(empty($member['password'])) {
		message('请输入密码');
	}
	$record = user_single($member);
	$now = time();
	$now = date("Y-m-d", $now);
		//计算天数
	$day1 = $now;
	$day2 = date("Y-m-d", $record['endtime']);
	$diff = diffBetweenTwoDays($day1, $day2);
    	$oldday = 16-$diff;
	if(0 >= $oldday){
		$oldday = 0;
	}
	if(!empty($record)) {
		if($record['status'] == 1) {
			message('您的账号正在审核或是已经被系统禁止，请联系网站管理员解决！');
		}
		if($record['status'] != 0) {
			if ($day1 >= $day2) {
				if ($oldday == 0) {
					message('您的账号已经过期15天了,不幸的是:您属于体验会员,已经自动了删除账号！');
				}else{
					message('您的账号已经到期,不幸的是:您属于体验会员,'.$oldday.'天后将自动删除账号！');
				}
			}
		}
		$founders = explode(',', $_W['config']['setting']['founder']);
		$_W['isfounder'] = in_array($record['uid'], $founders);
		if ($_W['siteclose'] && !$_W['isfounder']) {
			message('站点已关闭，关闭原因：' . $_W['setting']['copyright']['reason']);
		}
		$cookie = array();
		$cookie['uid'] = $record['uid'];
		$cookie['lastvisit'] = $record['lastvisit'];
		$cookie['lastip'] = $record['lastip'];
		$cookie['hash'] = md5($record['password'] . $record['salt']);
		$session = base64_encode(json_encode($cookie));
		isetcookie('__session', $session, !empty($_GPC['rember']) ? 7 * 86400 : 0);
		$status = array();
		$status['uid'] = $record['uid'];
		$status['lastvisit'] = TIMESTAMP;
		$status['lastip'] = CLIENT_IP;
		user_update($status);
		if(empty($forward)) {
			$forward = $_GPC['forward'];
		}
		if(empty($forward)) {
			$forward = './index.php?c=account&a=display';
		}
		if ($record['uid'] != $_GPC['__uid']) {
			isetcookie('__uniacid', '', -7 * 86400);
			isetcookie('__uid', '', -7 * 86400);
		}
		message("欢迎回来，{$record['username']}", $forward);
	} else {
		message('登录失败，请检查您输入的用户名和密码！');
	}
}
