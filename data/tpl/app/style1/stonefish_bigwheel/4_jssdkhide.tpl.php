<?php defined('IN_IA') or exit('Access Denied');?>﻿<script>var require = { urlArgs: 'v=<?php  echo date('YmdH');?>' };</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="<?php  echo $_W['siteroot'];?>app/resource/js/require.js"></script>
<script src="<?php  echo $_W['siteroot'];?>app/resource/js/app/config.js"></script>
<script type="text/javascript">
	// jssdk config 对象
	jssdkconfig = <?php  echo json_encode($_W['account']['jssdkconfig']);?> || {};
	// 是否启用调试
	jssdkconfig.debug = false;
	
	jssdkconfig.jsApiList = [
		'checkJsApi',
		'hideOptionMenu'
	];

	wx.config(jssdkconfig);
	require(['jquery', 'util'], function($, util){		
		wx.ready(function () {
			wx.hideOptionMenu();
		});
	});
</script>