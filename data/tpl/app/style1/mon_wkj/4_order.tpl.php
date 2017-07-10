<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <title></title>
    <link rel="stylesheet" type="text/css"
          href="<?php echo MON_WKJ_RES;?>css/admin.css">
    <script type="text/javascript">var _speedMark = new Date(), _loadTime = '';</script>
    <style>
    .mdaijishi {
    padding: 10px 0 10px 12px;
    color: #FFF;
    font-size: 16px;
    vertical-align: middle;
    background-color: #5f6a7c;
    }
    .dingdan{
    padding: 5px;
    }

    h3 a {
    color: #FFF
    }
    </style>
</head>
<body class="order">
<div class="mdaijishi"><?php  echo $wkj['title'];?>砍价活动</div>

<div class="dingdan gyStyle2">

    <h3 style="background-size: 100%;"><a href="<?php  echo $this->createMobileUrl('index',array('openid'=>$user['openid'],'kid'=>$wkj['id']))?>">活动首页</a></h3>
    <h3 style="background-size: 100%;"><a href="<?php  echo $this->createMobileUrl('Ranking',array('uid'=>$user['id'],'kid'=>$wkj['id']))?>">砍价排行榜</a></h3>

    <form id="order_form" action="<?php  echo $this->createMobileUrl('OrderSubmit',array(),true)?>" method="POST">
        <div class="wupinList clearfix">
            <div class="leftk"><img
                    src="<?php  echo $_W['attachurl'];?><?php  echo $wkj['p_preview_pic'];?>"
                    alt="商品图片"/></div>
            <div class="rightk clearfix"><p><?php  echo $wkj['p_name'];?></p>

                <div class="wupininfo">
                    <style>pre {
                        padding: 0;
                        margin: 0;
                        white-space: pre-wrap;
                    }</style>
                    <?php  echo $wkj['p_intro'];?>
                </div>

            </div>
        </div>
        <div class="shouhuoInfo">
            <ul>
                <li class="clearfix"><strong class="leftk">款式选择：</strong>

                    <div class="inputk">
                        <select name="p_model"  >
                            <?php  if(is_array($p_models)) { foreach($p_models as $p_model) { ?>
                                <option value="<?php  echo $p_model;?>"}><?php  echo $p_model;?></option>
                           <?php  } } ?>
                        </select>
                    </div>
                </li>
                <li class="clearfix"><strong class="leftk">收货人：</strong>

                    <div class="inputk"><input id="uname" type="text" name="uname"/></div>
                </li>
                <li class="clearfix"><strong class="leftk">手机号码：</strong>

                    <div class="inputk"><input id="tel" type="text" name="tel"/></div>
                    <input type="hidden" name="province" value="未知"></li>
                <li class="clearfix xiangxidz"><strong class="leftk">详细地址：</strong>

                    <div class="inputk"><input id="address" type="text" name="address"/></div>
                </li>

                <input type="hidden" name="uid" value="<?php  echo $user['id'];?>">
                <input type="hidden" name="kid" value="<?php  echo $wkj['id'];?>">
            </ul>
        </div>
        <div class="fukuank"><input type="hidden" name="action" value="saveorder"> <input type="hidden" name="oid"
                                                                                          value="119201504151139359">
            <input type="hidden" name="gid" value="1">

            <p class="yuanjia"><strong>原价：<span>￥<?php  echo $wkj['p_y_price'];?></span></strong></p> <!-- 如果有定金的话会让用户支付定金 --> <p>
                <strong>支付运费：<span>￥<?php  echo $wkj['yf_price'];?></span></strong></p>

            <p><strong>砍后价格：<span>￥<?php  echo $user['price'];?></span></strong></p>

            <p><strong>实付款：<span>￥<?php  echo $zfPrice;?></span></strong></p>

            <div class="dingdancaozuo clearfix">
                <div><input class="submit" type="button" name="btn_submit" id="btn_submit" value="提交订单"/></div>
                <div>
                    <a href="<?php  echo $this->createMobileUrl('Ranking',array('uid'=>$user['id'],'kid'=>$wkj['id']))?>">取消订单</a>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="yanzhengk" id="yanzhengk"><strong>不能为空</strong></div>

<div class="xinyuemin" id="cprt"><a
        href=<?php  echo $wkj['copyright_url'];?>"
        target="_blank"><?php  echo $wkj['copyright'];?></a></div>
<div id="zhegaik" class="zhegaik"></div>
<!--div class="zantishi">预祝大赛圆满成功</div-->
<div class="jizanimg">
    <div class="jiantou"></div>
    <p>分享到朋友圈就有机会获赠能量<!-- ，朋友中奖，你也中奖 -->。</p></div>
<div class="fenxiangImgk"><img class="img-responsive"
                               src="<?php echo MON_WKJ_RES;?>images/TB20KOcbFXXXXXmXXXXXXXXXXXX-23432926.png"
                               alt="图片"/></div>

<script src="<?php echo MON_WKJ_RES;?>js/jquery-1.11.2.min.js" type="text/javascript"
        charset="utf-8"></script>

</body>
<script>

    $("#btn_submit").click(function(){
        var uname=$("#uname").val();
        var tel=$("#tel").val();
        var addresss=$("#address").val();
        if(uname=="") {
            alert( "请输入收人姓名!");
            return ;
        }

        if (!/^1\d{10}$/.test(tel)) {//
            alert("请输入正确的电话号码");
            return ;
        }

        if (addresss=="") {
            alert("请输入您的详细收货地址");
            return ;
        }

        $.post("<?php  echo $this->createMobileUrl('Ajax',array('kid'=>$wkj['id'],'uid'=>$user['id'],'action'=>'zf'))?>",function(res) {
            if(res.code==200) {
                $("#order_form").submit();
            } else{
                alert(res.msg);
            }
        },'json');



    });

   </script>


<?php  echo register_jssdk(false);?>
<script type="text/javascript">
    initShare();

    function initShare(){
        wx.ready(function () {
            sharedata = {
                title: "<?php  echo $wkj['share_title']?>",
                desc: "<?php  echo $wkj['share_content']?>",
                link: "<?php  echo $shareUrl;?>&uid=<?php  echo $user['id'];?>",
                imgUrl: "<?php  echo $_W['attachurl'];?><?php  echo $wkj['share_icon'];?>",
                success: function(){

                },
                cancel: function(){
                    // alert("分享失败，可能是网络问题，一会儿再试试？");
                }
            };
            wx.onMenuShareAppMessage(sharedata);
            wx.onMenuShareTimeline(sharedata);
        });
    }

</script>
</html><!-- 0.042370080947876 -->