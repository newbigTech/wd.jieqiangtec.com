<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<style>
	ul,li {padding:0; margin:0; border:0;}
	body{background:#d2e6e9; padding-bottom:63px;}
	.btn-group-top-box{padding:10px 0; border-bottom:1px solid #a5d7de; font-family:Helvetica, Arial, sans-serif; text-align:center; width:100%;}
	.btn-group-top{overflow:hidden;}
	.btn-group-top .btn{ -webkit-box-shadow:none; box-shadow:none; border-color:#5ac5d4; color:#5ac5d4; background:#d1e5e9; padding:6px;}
	.btn-group-top .btn:hover{color:#FFF; background:#addbe1;}
	.btn-group-top .btn.active{color:#FFF; background:#5ac5d4;}
	.btn.use{background:#56c6d6; color:#FFF; border:0; border-radius:4px;}
	
	.voucher-main{overflow:hidden;}
	.voucher-main .list-cash-coupon{padding:10px 0 0 0; list-style:none; margin:10px auto;}
	.voucher-main .list-cash-coupon li{margin:10px 0;}
	.voucher-main .list-cash-coupon a{display:block;width:281px;height:109px;margin:auto;background:url('resource/images/voucher.png') no-repeat 0 -9px;-webkit-background-size:575px auto;position:relative;}
	.voucher-main .list-cash-coupon a>p{position: absolute;max-width:200px;height:20px;color:#FFF;-webkit-box-sizing:border-box;}
	.voucher-main .list-cash-coupon a>p:nth-of-type(1){left:25px;top:20px;font-size:14px;}
	.voucher-main .list-cash-coupon a>p:nth-of-type(1)>span{font-size:30px;}
	.voucher-main .list-cash-coupon a>p:nth-of-type(2){left: 26px;top: 62px;font-size: 14px;}
	.voucher-main .list-cash-coupon a>p:nth-of-type(2):first-letter{font-size:14px;margin-right:3px;}
	.voucher-main .list-cash-coupon a>p:nth-of-type(3){left: 26px;top: 83px;font-size: 12px;}
	.voucher-main .list-cash-coupon a>p:nth-of-type(4){left: 160px;top: 42px;font-size: 11px;}
	.voucher-main .list-cash-coupon a>p:nth-of-type(5){right: 12px;top:18px;font-size:14px;width:25px; line-height:18px;}
	.voucher-main .list-cash-coupon li:nth-of-type(4n+2) a, .list-cash-coupon li .a2{background-position: 0 -133px;}
	.voucher-main .list-cash-coupon li:nth-of-type(4n+3) a, .list-cash-coupon li .a3{background-position: 0 -256px;}
	.voucher-main .list-cash-coupon li:nth-of-type(4n) a, .list-cash-coupon li .a4{background-position: 0 -378px;}
	.voucher-main .list-cash-coupon li[disabled] a{background-position: 0 -502px;}
	.voucher-main .list-cash-coupon li[disabled] a:after{content: "";-webkit-background-size: 110px auto;position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: 100;pointer-events: none;}
	.voucher-main .list-cash-coupon li[disabled="expire"] a:after{background-image: url('resource/images/voucher02.png'); background-repeat: no-repeat; background-position:50px 15px;}
	.voucher-main .list-cash-coupon li[disabled] a>p{color:rgba(255,255,255,0.3)!important;}
	.voucher-main .list-cash-coupon li.used a{background-position-x:right!important;}
	.voucher-main .list-cash-coupon li.used:nth-of-type(4n+1) a>p:nth-of-type(5){color:#ee5375;}
	.voucher-main .list-cash-coupon li.used:nth-of-type(4n+2) a>p:nth-of-type(5){color:#ffa619;}
	.voucher-main .list-cash-coupon li.used:nth-of-type(4n+3) a>p:nth-of-type(5){color:#92c427;}
	.voucher-main .list-cash-coupon li.used:nth-of-type(4n) a>p:nth-of-type(5){color:#2f9abd;}
	.voucher-main .read-coupon .list-cash-coupon a>p:nth-of-type(3){left:210px; top:65px; font-size:10px;}
	
	.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus{background-color:#5ac5d4; border-color:#5ac5d4;}
	.pagination>li>a, .pagination>li>span{color:#5ac5d4; border:1px solid #a5d7de;}
</style>
<?php  if($do == 'display') { ?>
<style media="all" type="text/css">
	.scroll-container .list-group {list-style:none; padding:0; margin:0; width:100%; text-align:left;}
	.scroll-container .list-group .list-group-item{border:none; background:#d2e6e9;}
	.scroll-container .list-group .list-group-item .con{background:#ffffff; width:280px; margin:0 auto;}
	.scroll-container .list-group .list-group-item .list-hd{padding:5px 20px;}
	.scroll-container .list-group .list-group-item .list-hd h5{font-weight:bold; margin-bottom:2px; font-size:16px; color:#444444;}
	.scroll-container .list-group .list-group-item .list-hd p{color:#b8b8b9;}
	.scroll-container .list-group .list-group-item .list-con img{display:block; width:90%; margin:0 auto;}
	.scroll-container .list-group .list-group-item .list-con .derpn{padding:10px 10px 0 10px; border-top:1px dotted rgb(204, 204, 204); margin-top:10px;display:none;}
	.scroll-container .list-group .list-group-item .list-ft{width:290px; background: transparent url('resource/images/ft-bg.png') no-repeat 0 0; background-size: 100% auto; height: 44px; line-height: 48px; overflow: hidden; position:relative; left:-5px; top:5px; padding:0 0 0 15px;}
	.scroll-container .list-group .list-group-item .list-ft b{color: #56c6d6; font-size: 30px; margin-right:5px;}
	.scroll-container .list-group .list-group-item .list-ft .btns{width:105px; text-align:center; font-size:18px; color:#ffffff; line-height:44px;}
	.scroll-container .list-group .list-group-item .list-ft .btns a{color:#ffffff;}
	.scroll-container .load-more{padding:10px;text-align:center;font-size:1em;}
</style>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('activity/nav', TEMPLATE_INCLUDEPATH)) : (include template('activity/nav', TEMPLATE_INCLUDEPATH));?>
<div class="scroll-container">
	<div class="wrapper">
		<ul class="list-group" >
			<?php  if(is_array($lists)) { foreach($lists as $list) { ?>
				<li class="list-group-item">
					<div class="con">
						<div class="list-hd">
							<h5><?php  echo $list['title'];?>(代金券)</h5>
							<p>有效期至<?php  echo date('Y年m月d日', $list['endtime']);?></p>
						</div>
						<div class="list-con">
							<img src="<?php  echo tomedia($list['thumb'])?>">
							<div class="derpn">
								<?php  echo htmlspecialchars_decode($list['description'])?>
							</div>
						</div>
						<div class="list-ft">
							<div class="pull-left"><?php  echo $creditnames[$list['credittype']];?>:<b><?php  echo $list['credit'];?></b></div>
							<div class="pull-right btns"><a href="javascript:;" data-id="<?php  echo $list['couponid'];?>" class="use-token">立即兑换</a></div>
						</div>
					</div>
				</li>
			<?php  } } ?>
		</ul>
		<div class="btn-group-top-box">
			<div class="btn-group btn-group-top">
				<?php  echo $pager;?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	require(['util'], function(u){
		$('.con').click(function(){
			var description = $(this).find('.derpn').text();
			if (description.indexOf('<') >= 0) {
				$(this).find('.derpn').html(description);
			}
			$(this).find('.derpn').slideToggle(500);
		});

		$('.use-token').click(function(){
			var id = parseInt($(this).data('id'));
			if(!id) {
				return false;
			}
			$.post("<?php  echo url('activity/token/post');?>", {'id':id}, function(data) {
				var data = $.parseJSON(data);
				if(data.message.errno < 0) {
					u.message(data.message.message, '', 'error');
				} else {
					u.message(data.message.message, "<?php  echo url('activity/token/mine');?>", 'success');
				}
				return false;
			});
		});
	});
</script>
<?php  } else if($do == 'mine') { ?> 
<div class="voucher-main">
	<div class="btn-group-top-box">
		<div class="btn-group btn-group-top">
			<a href="<?php  echo url('activity/token/mine/', array('type' => ''))?>" class="btn btn-default <?php  if(($_GPC['type'] != 'used')) { ?>active<?php  } ?>">未使用</a>
			<a href="<?php  echo url('activity/token/mine/', array('type' => 'used'))?>" class="btn btn-default <?php  if(($_GPC['type'] == 'used')) { ?>active<?php  } ?>">已使用</a>
		</div>
	</div>
	<ul class="list-cash-coupon">
		<?php  if(is_array($data)) { foreach($data as $row) { ?>
			<?php  if($row['status'] == 1) { ?>
				<?php  if($row['endtime'] < TIMESTAMP) { ?>
					<li disabled="expire">
				<?php  } else { ?>
					<li>
				<?php  } ?>
			<?php  } else { ?>
				<li disabled>
			<?php  } ?>
				<?php  if($_GPC['type'] == 'used') { ?>
					<a href="javascript:;">
						<p><span><?php  echo $row['discount'];?></span>元</p>
						<p>★订单满<?php  echo $row['condition'];?>元可使用</p>
						<p>有效期至<?php  echo date('Y年m月d日', $row['endtime'])?></p>
						<p>已使用<?php  echo $row['cototal'];?>张</p>
						<p>已经使用</p>
					</a>
				<?php  } else { ?>
					<?php  if($row['endtime'] > TIMESTAMP) { ?>
						<a href="<?php  echo url('activity/token/use', array('id' => $row['couponid'], 'type' => $_GPC['type']))?>">
					<?php  } else { ?>
						<a href="javascript:;" onclick="alert('该代金券已过期');">
					<?php  } ?>
						<p><span><?php  echo $row['discount'];?></span>元</p>
						<p>★订单满<?php  echo $row['condition'];?>元可使用</p>
						<p>有效期至<?php  echo date('Y年m月d日', $row['endtime'])?></p>
						<p>剩余<?php  echo $row['cototal'];?>张</p>
						<p>立即使用</p>
					</a>
				<?php  } ?>

			</li>
		<?php  } } ?>
	</ul>
	<div class="btn-group-top-box">
		<div class="btn-group btn-group-top">
			<?php  echo $pager;?>
		</div>
	</div>
</div>
<?php  } else if($do == 'use') { ?>
<style media="all" type="text/css">
	.read-coupon{padding:10px;}
	.read-coupon .coupon-title{font-size:14px; color:#444; padding:20px 15px 10px; margin:0;}
	.read-coupon .coupon-content{background:url('resource/images/coupon02.png') no-repeat center bottom; -webkit-background-size:100% auto; padding-bottom:2%; min-height:100px;}
	.read-coupon .coupon-content > img{width:85%; max-width:595px; max-height:320px; display:block; margin:0 auto; border:8px solid transparent; border-width:10px 0 0 0; border-image:url('http://stc.weimob.com/img/member/imgs/15.png') 31;}
	.read-coupon .coupon-sn{height:55px; padding:8px 15px; -webkit-box-sizing:border-box; background:#5ac5d4; color:#d0f2f7; line-height:20px; font-size:14px; vertical-align:middle;}
	.read-coupon .coupon-sn p:first-of-type{font-size:14px;}
	.read-coupon .coupon-sn p:first-of-type span{color:#FFF; font-size:18px;}
	.coupon-form{padding:30px 5px 0 5px;}
	.coupon-form .form-group{margin:10px 0;}
	.coupon-form .form-group .btn{border-radius:2px;}
	.coupon-form .form-group:first-child .btn{background:#5ac5d4; border-color:#5ac5d4; color:#FFF;}
</style>
	<div class="voucher-main">
		<div class="read-coupon">
			<h4 class="coupon-title"><?php  echo $data['title'];?></h4>
			<div class="coupon-content">
				<ul class="list-cash-coupon">
					<li>
						<a href="javascript:;" class="a2">
							<p><span><?php  echo $data['discount'];?></span>元</p>
							<p>★订单满 <?php  echo $data['condition'];?>元可使用 </p>
							<p>有效期至<?php  echo date('Y/m/d', $data['endtime'])?></p>
						</a>
					</li>
				</ul>
			</div>
			<div class="coupon-sn">
				<p>序列号：<span><?php  echo $data['couponsn'];?></span><br>请提供序列号给工作人员或在当前页面消费</p>
			</div>
			<div class="coupon-form">
				<form role="form" action="" method="post" class="form-horizontal" >
				<input type="hidden" name="id" value="<?php  echo $id;?>">
					<?php  if(($data['endtime'] > TIMESTAMP) && ($data['status'] == 1)) { ?>
						<div class="form-group">
							<input class="form-control" type="password" name="password" placeholder="请输入您的消费密码"/>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-default btn-block use" value="确定使用" />
							<input name="token" value="<?php  echo $_W['token'];?>" type="hidden" />
						</div>
						<div class="form-group">
							<a href="javascript:;" data-toggle="modal" data-target="#qrcode-modal" class="btn btn-warning btn-block">生成核销二维码</a>
						</div>
					<?php  } else if($data['status'] == 2) { ?>
						<a class="btn btn-default btn-block use">该代金券已使用</a>
					<?php  } else { ?>
						<a class="btn btn-default btn-block use">该代金券已过期</a>
					<?php  } ?>
				</form>
				<div class="form-group">
					<?php  if(($_GPC['type'] == 'used')) { ?>
					<a href="<?php  echo url('activity/token/mine', array('type' => 'used'));?>" class="btn btn-default btn-block">返回</a>
					<?php  } else { ?>
					<a href="<?php  echo url('activity/token/mine');?>" class="btn btn-default btn-block">返回</a>
					<?php  } ?>
				</div>
			</div>
		</div>
	</div>
<?php  } ?>

<div class="modal fade modal-code" id="qrcode-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="code-img text-center" data-dismiss="modal">
		<div class="qr">
			<img style="-webkit-user-select: none" src="<?php  echo url('activity/token/token_qrcode', array('id' => $id));?>">
		</div>
		<div class="text-center tip">核销时请交给店员扫一扫。该功能只能在微信中使用</div>
	</div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/toolbar', TEMPLATE_INCLUDEPATH)) : (include template('common/toolbar', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
