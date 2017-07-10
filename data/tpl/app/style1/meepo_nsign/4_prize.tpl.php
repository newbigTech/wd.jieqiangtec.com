<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>css/main.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>css/dialog.css" media="all" />
		<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>js/jquery_min.js"></script>
		<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>js/main.js"></script>
		<title>获奖记录</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
		<!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->

    </head>
    <body onselectstart="return true;" ondragstart="return false;">

<div class="container integral integral_record">
	<header>
		<label>获奖记录</label>
	</header>
	<div class="body">
		<section class="p_10">
			<table class="table_record">
				<thead>
				<tr>
					<td style="width:25%;">奖项</td>
					<td style="width:25%;">奖品</td>
					<td style="width:30%;">时间</td>
					<td style="width:20%;">状态</td>
				</tr>
				</thead>
				<tbody>
					<?php  if(is_array($prize)) { foreach($prize as $item) { ?>
					<tr>
						<td><?php  echo $item['type'];?></td>
						<td><?php  echo $item['award'];?></td>
						<td><?php  echo date("m月d日 H:i:s",$item['time']); ?></td>
						<td>
						<?php  if($item['status'] == 0) { ?>未发奖<?php  } else { ?>已发奖<?php  } ?>
						</td>
					</tr>
					<?php  } } ?>
				</tbody>
			</table>
		</section>
	</div>
			<footer>
				<nav class="nav_add_addr">
					<ul class="tbox">
						<li>
							<a href="javascript:history.go(-1)" class="icons icons_before">&nbsp;</a>
						</li>
					</ul>
				</nav>
			</footer>

</div>

</body>

<script type="text/javascript">
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});

   document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        
        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', { 
                "img_url": "<?php  echo $Picurl;?>",
                "img_width": "640",
                "img_height": "640",
                "link": "<?php  echo $_W['siteroot'].$this->createMobileUrl('index', array('rid' => $rid));?>",
                "desc":  "<?php  echo $reply['description'];?>",
                "title": "<?php  echo $reply['title'];?>"
            }, function (res) {
                _report('send_msg', res.err_msg);
            })
        });

        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": "<?php  echo $Picurl;?>",
                "img_width": "640",
                "img_height": "640",
                "link": "<?php  echo $_W['siteroot'].$this->createMobileUrl('index', array('rid' => $rid));?>",
                "desc":  "<?php  echo $reply['description'];?>",
                "title": "<?php  echo $reply['title'];?>"
            }, function (res) {
                _report('timeline', res.err_msg);
            });
        });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": "<?php  echo $reply['description'];?>",
                "url": "<?php  echo $_W['siteroot'].$this->createMobileUrl('index', array('rid' => $rid));?>"
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
        }, false)
</script>

</html>


