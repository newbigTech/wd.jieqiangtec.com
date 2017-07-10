<?php defined('IN_IA') or exit('Access Denied');?><link href="../addons/feng_fightgroups/template/css/common.css?v=135" rel="stylesheet">
<link href="../addons/feng_fightgroups/template/css/widget_menu.css?v=135" rel="stylesheet">
<footer data-role="footer">
    <div data-role="copyright">
    <div data-role="copyright" data-copyright="copyright1" class="copyright1">
        <div class="widget_wrap">
            <ul class="tbox">
                <li>
                    <p class="box">
                        <a href="<?php  echo $this->createMobileUrl('index');?>">拼团首页</a>
                        <a href="<?php  echo $this->createMobileUrl('person');?>">用户中心</a>
                        <a href="<?php  echo $this->createMobileUrl('rules');?>">玩法介绍</a>
                    </p>
                    <p>
                        <a href="javascript:;">
                        	©<?php  if(!empty($share_data['copyright'])) { ?>
                        	<?php  echo $share_data['copyright'];?>
                        	<?php  } else { ?>
                        	拼团商城技术支持
                        	<?php  } ?>
                        </a>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    </div>
    <div data-role="widget" data-widget="menu_4" class="menu_4">
        <div class="widget_wrap">
            <ul id="menu_4_ul" style="z-index:9999;">
                <li>
                    <a href="<?php  echo $this->createMobileUrl('index');?>" data-fx="Modulefx">
                        <span class="icon iconfont">&#xe603;</span>
                        <p>首页</p>
                    </a>
                </li>
                
                <li>
                    <a href="<?php  echo $this->createMobileUrl('mygroup');?>" data-fx="Modulefx">
                        <span class="icon iconfont">&#xe602;</span>
                        <p>我的团</p>
                    </a>
                </li>
                
                <li class="li3">
                    <a href="<?php  echo $this->createMobileUrl('person');?>" data-fx="Modulefx">
                        <span class="icon iconfont">&#xe601;</span>
                        <p>用户中心</p>
                    </a>
                </li>
                
                <li>
                    <a href="<?php  echo $this->createMobileUrl('myorder');?>" data-fx="Modulefx">
                        <span class="icon iconfont">&#xe604;</span>
                        <p>我的订单</p>
                    </a>
                </li>
                
                <li>
                    <a href="<?php  echo $this->createMobileUrl('rules');?>" data-fx="Modulefx">
                        <span class="icon iconfont">&#xe600;</span>
                        <p>玩法</p>
                    </a>
                </li>
                
            </ul>
            <script>
                var menu_4 = (function () {
                    var isTouch = "ontouchstart" in window;
                    var menu = {
                        handleEvent: function (evt) {
                            console.log(evt);
                        }
                    };
                    menu.init = function (id) {
                        var ul = document.getElementById(id);
                        lis = ul.querySelectorAll("li");
                        lis[Math.floor(lis.length / 2)].classList.add("li3");
                        if (isTouch) {
                            menu.ul = document.getElementById(id);
                            menu.ul.addEventListener("touchstart", menu, false);
                            return menu;
                        }
                    }
                    return menu;
                })().init("menu_4_ul");
            </script>
        </div>
    </div>
</footer>