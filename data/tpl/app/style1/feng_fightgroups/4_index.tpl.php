<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php  if(!empty($share_data['sname'])) { ?><?php  echo $share_data['sname'];?><?php  } else { ?>拼团商城<?php  } ?></title>
    <?php  echo register_jssdk();?>
    <meta charset="utf-8">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="eric.wu" name="author">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <link href="../addons/feng_fightgroups/template/css/reset.css?v=135" rel="stylesheet">
    <link href="../addons/feng_fightgroups/template/css/home.css?v=1335" rel="stylesheet">
    <script src="../addons/feng_fightgroups/template/js/jquery.min.js" language="javascript"></script>
	<script language="javascript" src="../addons/feng_fightgroups/template/js/swipe.js"></script>
	<style>
.g_core:before,.cat_item span:before{background-image:url(http://static.paipaiimg.com/fd/qqpai/tuan/img/bg_list_v3.png?t=20141215173530);background-repeat:no-repeat;-webkit-background-size:195px 87px;background-size:195px 87px}
.tuan{padding:10px;min-height:520px}
.tuan_banner{display:block;overflow:hidden;margin-bottom:10px}
.tuan_banner img{display:block;width:100%;overflow:hidden}
.tuan_none{text-align:center;line-height:21px;margin:20px 0}
.g{border:1px solid #E6E6E6;background-color:#fff;margin-bottom:10px;font-size:12px;position:relative}
.g:after{content:'';display:block;clear:both;height:0;visibility:hidden}
.g_img{display:block;position:relative;height:auto;min-height:140px}
.g_img img{display:block;width:100%;height:auto;min-height:140px;margin:0 auto;overflow:hidden;background-color:#e6e6e6;-webkit-background-size:60px 25px;background-size:60px 25px}
.g_num{position:absolute;right:0px;bottom:0px;height:15px;line-height:15px;display:block;text-align:center;font-size:12px;color:#fff;background-color:rgba(0,0,0,0.5);padding:0 10px}
.g_num b{font-weight:normal}
.g_info{padding:10px 10px 12px}
.g_name{color:#191919;margin-bottom:0;height:15px;line-height:15px;overflow:hidden;padding-right:48px}
.g_mark{display:inline-block;width:38px;height:15px;line-height:15px;-webkit-border-radius:15px;border-radius:15px;color:#fff;font-size:12px;text-align:center;margin-right:8px}
.g_mark1{background-color:#F0373D}
.g_mark2{background-color:#8EBD27}
.g_cx{color:#ADADAD;line-height:18px;display:none}
.g_sale{position:absolute;right:-4px;top:10px;display:block;width:50px;height:15px;line-height:15px;text-align:center;background-color:#F2AC3D;font-size:10px;color:#fff}
.g_sale b{font-weight:normal}
.g_sale:after{content:'';position:absolute;bottom:-3px;right:0px;width:0;height:0;overflow:hidden;font-size:0;display:inline-block;border-left:3px solid #9C6F29;border-bottom:3px dashed transparent}
.g_core{position:relative;display:block;height:33px;line-height:33px;color:#fff;margin:0 10px 0 27px;background-color:#F0373D;-webkit-border-top-right-radius:17px;border-top-right-radius:17px;-webkit-border-bottom-right-radius:17px;border-bottom-right-radius:17px;max-width:260px}
.g_core:active,.g_core:visited{color:#fff}
.g_core:before{position:absolute;top:-2px;left:-17px;width:37px;height:37px;content:" ";background-position:-0px -50px}
.g_price{position:relative;overflow:hidden;padding-left:17px}
.g_price b{float:left;margin-left:10px;font-size:18px;font-weight:normal}
.g_price b i{font-size:9px}
.g_price span{float:left;width:60px;text-align:center;position:relative}
.g_price span:after{content:'';position:absolute;top:10px;right:0;display:block;width:1px;height:13px;background-color:#F6888B}
.g_btn{position:absolute;top:0;right:10px;padding-right:16px}
.g_btn:after{content:'';position:absolute;top:11px;right:2px;display:block;width:8px;height:8px;-webkit-transform:rotate(-135deg);border-left:1px solid #fff;border-bottom:1px solid #fff}
.g_extra{height:18px;line-height:18px;padding:3px 0 7px}
.g_extra:after{content:'';display:block;clear:both;height:0;visibility:hidden}
.g_mprice{float:left;color:#999;height:21px;padding-left:45px}
.g_state{float:right;color:#F0373D;padding-right:10px;display:none}
.g_sns{clear:both;padding:10px;border-top:1px solid #EBEBEC;color:#5A5A5A;display:none}
.g_sns_list{padding:7px 0}
.g_sns_list:after{content:'';display:block;clear:both;height:0;visibility:hidden}
.g_avatar{float:left;margin-right:10px}
.g_avatar img{display:block;width:30px;height:30px;-webkit-border-radius:30px;border-radius:30px;overflow:hidden}
.g_shop{display:block;text-align:right;padding-right:14px;position:relative;height:18px;line-height:18px}
.g_shop b{font-weight:normal;margin:0 5px}
.g_shop:after{content:'';position:absolute;top:4px;right:2px;display:block;width:8px;height:8px;-webkit-transform:rotate(-135deg);border-left:1px solid #CCCCCC;border-bottom:1px solid #CCCCCC}
.g_vip .g_core{background-color:#482605}
.g_vip .g_price span:after{background-color:#917D69}
.g_vip .g_core:before{background-position:-42px -50px}
.g_disabled .g_info:before{content:'';display:block;width:73px;height:73px;position:absolute;top:-46px;right:15px;background-position:0 -59px;z-index:2}
.g_disabled .g_core:before{background-position:-42px -50px}
	</style>
    </head>
<body onselectstart="return true;" ondragstart="return false;">
<?php  if(!empty($advs)) { ?>
	<div data-role="container" class="container detail3">
        <header data-role="header">
            <div data-role="widget" data-widget="slider_3" class="slider_3">
                <section data-role="widget" data-widget="img_prev_view" class="widget_wrap" style="margin: 0;">
                    <div id="slider_3_wrap" class="slider_3_wrap" style="visibility: visible;">
                        <ul style="list-style: none; width: 4968px; -webkit-transition: -webkit-transform 0ms; transition: -webkit-transform 0ms; -webkit-transform: translate3d(0px, 0px, 0px);">
                            <?php  if(is_array($advs)) { foreach($advs as $adv) { ?>
                            <li class="swiper-slide" style="width: 414px; display: table-cell; vertical-align: top;">
                                <a href="<?php  if(empty($adv['link'])) { ?>#<?php  } else { ?><?php  echo $adv['link'];?><?php  } ?>" style="padding: 0;">
                                    <img src="<?php  echo tomedia($adv['thumb']);?>" style="width: 100%; max-width: 100%;">
                                </a>
                            </li>
							<?php  } } ?>
                        </ul>
                        <div id="slider_3_indicate" class="slider_3_indicate">
                        <?php  $slideNum = 1;?>
						<?php  if(is_array($advs)) { foreach($advs as $adv) { ?>
							<span<?php  if($slideNum == 1) { ?> class="on"<?php  } ?>></span>&nbsp;
						<?php  $slideNum++;?>
						<?php  } } ?>
                        </div>
                    </div>
                </section>
            </div>
        </header>
        <script>
		    $(function() {
		        new Swipe($('#slider_3_wrap')[0], {
		            speed:500,
		            auto:3000,
		            callback: function(){
		                var lis = $(this.element).next("div").children();
		                lis.removeClass("on").eq(this.index).addClass("on");
		            }
		        });
		    });
		</script>
	</div>
<?php  } ?>
<div data-role="container" class="container home">
<section data-role="body" class="body" >
	<div type="2" id="840197" data-role="widget" data-widget="search_2" class="search_2">
      <div class="widget_wrap">
        <form name="search_2" action="index.php" method="get">
            <input type="hidden" name="i" value="<?php  echo $_W['uniacid'];?>" />
            <input type="hidden" name="c" value="entry" />
            <input type="hidden" name="m" value="feng_fightgroups" />
            <input type="hidden" name="do" value="index" />
            <input type="hidden" name="op" value="search" />
          <div class="divfirst">
            <input type="search" value="<?php  echo $_GPC[''];?>" name="keyword" placeholder="">
          </div>
          <div onclick="onApiSuccess();" class="divlast">
            <img src="../addons/feng_fightgroups/template/image/widget_search_pic.png">
          </div>
          <button style="display:none;" type="submit" id="wBtn"></button>
        </form>
      </div>
    </div>
    <script>
    onApiSuccess = function(){
		document.getElementById('wBtn').click();
	};
    </script>
<?php  if(!empty($category)) { ?>
    <?php  if(is_array($category)) { foreach($category as $itme) { ?>
    <div data-role="widget" data-widget="pic_1" class="pic_1">
		<div class="widget_wrap">
			<ul>
				<li>
                    <a data-fx="Modulefx" class="img_wrap" href="<?php  echo $this->createMobileUrl('index', array('op'=>'search' ,'gid'=>$itme['id']));?>">
						<img src="<?php  echo tomedia($itme['thumb']);?>">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<?php  if($this->module['config']['picmode'] == 1) { ?>
    <div data-role="widget" data-widget="goodsList_1" class="goodsList_1">
        <div class="widget_wrap">
            <ul>
               	<?php  if(is_array($itme['goodses'])) { foreach($itme['goodses'] as $goods) { ?>
                <li>
                    <a href="<?php  echo $this->createMobileUrl('gooddetails', array('id'=>$goods['id']));?>" <?php  if(!empty($itme['color'])) { ?>style="border: 1px solid <?php  echo $itme['color'];?>;"<?php  } ?>>
                        <div>
                            <img src="<?php  echo tomedia($goods['gimg']);?>">
                            <span name="goodsdetailspan" class="tag">
                            <?php  if(floatval($goods['gprice'])-0 > 0.000001 && floatval($goods['mprice'])> 0.000001) { ?>  
								<?php  echo sprintf("%.1f", ($goods['gprice']/$goods['mprice'])*10)."折";?> 
							<?php  } else { ?>  
								<?php  echo "未打折";?>
							<?php  } ?>
							</span>
                        </div>
                        <div>
                            <p class="title"><?php  echo $goods['gname'];?></p>
                            <label class="price">￥<?php  echo $goods['gprice'];?><span style="float: right;"><?php  echo $goods['groupnum'];?>人团</span></label>
                        </div>
                    </a>
                </li>
                <?php  } } ?>
            </ul>
        </div>
    </div>
    <?php  } else { ?>
    <div id="tuan" class="tuan" style="padding-top: 10px; -webkit-backface-visibility: hidden; opacity: 1; display: block;">
    <div id="cat1" data-s-top="500">
    <?php  if(is_array($itme['goodses'])) { foreach($itme['goodses'] as $goods) { ?>
    <div class="g ">
        <a href="<?php  echo $this->createMobileUrl('gooddetails', array('id'=>$goods['id']));?>" class="g_img"><img src="<?php  echo tomedia($goods['gimg']);?>" style="max-height: 14em;"><span class="g_num">已有<b><?php  echo $goods['salenum'];?></b>人参团</span></a>
        <div class="g_info">
            <p class="g_name"><span class="g_mark g_mark1">NEW</span><?php  echo $goods['gname'];?></p><p class="g_cx"></p><span class="g_sale" style="display:none;"><b><?php  if(floatval($goods['gprice'])-0 > 0.000001 && floatval($goods['mprice'])> 0.000001) { ?><?php  echo sprintf("%.1f", ($goods['gprice']/$goods['mprice'])*10);?><?php  } else { ?>0<?php  } ?></b>折成团</span>
        </div>
        <a href="<?php  echo $this->createMobileUrl('gooddetails', array('id'=>$goods['id']));?>" class="g_core"><div class="g_price"><span><?php  echo $goods['groupnum'];?>人团</span><b><i>￥</i><?php  echo $goods['gprice'];?></b></div><div class="g_btn">去开团</div></a>
        <div class="g_extra"><div class="g_mprice">市场价：<del>￥<?php  echo $goods['mprice'];?></del></div></div>
    </div>
    <?php  } } ?>
    </div>
	</div>
	<?php  } ?>
    <?php  } } ?>
<?php  } ?>
<?php  if($this->module['config']['picmode'] == 1) { ?>
<?php  if(!empty($goodses)) { ?>
    <div data-role="widget" data-widget="goodsList_1" class="goodsList_1">
        <div class="widget_wrap">
            <ul>
                <?php  if(is_array($goodses)) { foreach($goodses as $goods) { ?>
                <li>
                    <a href="<?php  echo $this->createMobileUrl('gooddetails', array('id'=>$goods['id']));?>">
                        <div>
                            <img src="<?php  echo tomedia($goods['gimg']);?>">
                            <span name="goodsdetailspan" class="tag">
                            <?php  if(floatval($goods['gprice'])-0 > 0.000001 && floatval($goods['mprice'])> 0.000001) { ?>  
                                <?php  echo sprintf("%.1f", ($goods['gprice']/$goods['mprice'])*10)."折";?> 
                            <?php  } else { ?>  
                                <?php  echo "未打折";?>
                            <?php  } ?>
                            </span>
                        </div>
                        <div>
                            <p class="title"><?php  echo $goods['gname'];?></p>
                            <label class="price">￥<?php  echo $goods['gprice'];?></label>
                        </div>
                    </a>
                </li>
                <?php  } } ?>
            </ul>
        </div>
    </div>
<?php  } ?>
<?php  } else { ?>
<?php  if(!empty($goodses)) { ?>
<div id="tuan" class="tuan" style="padding-top: 10px; -webkit-backface-visibility: hidden; opacity: 1; display: block;">
    <div id="cat1" data-s-top="500">
    <?php  if(is_array($goodses)) { foreach($goodses as $goods) { ?>
    <div class="g ">
        <a href="<?php  echo $this->createMobileUrl('gooddetails', array('id'=>$goods['id']));?>" class="g_img"><img src="<?php  echo tomedia($goods['gimg']);?>" style="max-height: 14em;"><span class="g_num">已有<b><?php  echo $goods['salenum'];?></b>人参团</span></a>
        <div class="g_info">
            <p class="g_name"><span class="g_mark g_mark1">NEW</span><?php  echo $goods['gname'];?></p><p class="g_cx"></p><span class="g_sale" style="display:none;"><b><?php  if(floatval($goods['gprice'])-0 > 0.000001 && floatval($goods['mprice'])> 0.000001) { ?><?php  echo sprintf("%.1f", ($goods['gprice']/$goods['mprice'])*10);?><?php  } else { ?>0<?php  } ?></b>折成团</span>
        </div>
        <a href="<?php  echo $this->createMobileUrl('gooddetails', array('id'=>$goods['id']));?>" class="g_core"><div class="g_price"><span><?php  echo $goods['groupnum'];?>人团</span><b><i>￥</i><?php  echo $goods['gprice'];?></b></div><div class="g_btn">去开团</div></a>
        <div class="g_extra"><div class="g_mprice">市场价：<del>￥<?php  echo $goods['mprice'];?></del></div></div>
    </div>
    <?php  } } ?>
    </div>
</div>
<?php  } ?>
<?php  } ?>
</section>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('footerbar', TEMPLATE_INCLUDEPATH)) : (include template('footerbar', TEMPLATE_INCLUDEPATH));?>
</body>
<script>
	wx.ready(function (){
	var shareData = {
		title: "<?php  echo $share_data['share_title'];?>",
		desc: "<?php  echo $share_data['share_desc'];?>",
		link: "<?php  echo $to_url;?>",
		imgUrl: "<?php  echo $_W['attachurl'];?><?php  echo $share_data['share_image'];?>",
	};
//分享朋友
	wx.onMenuShareAppMessage({
	    title: shareData.title,
	  	desc: shareData.desc,
	  	link: shareData.link,
	  	imgUrl:shareData.imgUrl,
	  	trigger: function (res) {
	  	},
	  	success: function (res) {
	    	window.location.href =adurl;
	  	},
	  	cancel: function (res) {
	  	},
	  	fail: function (res) {
	    	alert(JSON.stringify(res));
	  	}
	});
//朋友圈
	wx.onMenuShareTimeline({
	  	title: shareData.title,
	  	link: shareData.link,
	  	imgUrl:shareData.imgUrl,
	  	trigger: function (res) {
	  	},
	  	success: function (res) {
	    	window.location.href =adurl;
	  	},
	  	cancel: function (res) {
	  	},
	  	fail: function (res) {
	    	alert(JSON.stringify(res));
	  	}
	});
});
</script>
</html>
