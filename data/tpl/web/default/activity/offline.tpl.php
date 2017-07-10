<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<li<?php  if($do == 'introduce') { ?> class="active"<?php  } ?>><a href="<?php  echo url('activity/offline');?>">功能说明</a></li>
	<li<?php  if($do == 'clerk') { ?> class="active"<?php  } ?>><a href="<?php  echo url('activity/offline/clerk');?>">店员管理</a></li>
    <li<?php  if($do == 'edit') { ?> class="active"<?php  } ?>><a href="<?php  echo url('activity/offline/edit');?>">添加店员</a></li>
</ul>
<div class="panel panel-default">
<div class="panel-body">
	<p>1. 管理员添加 <a href="<?php  echo url('activity/offline/clerk');?>">店员及消费密码</a>；</p>
	<p>2. 管理员添加 <a href="<?php  echo url('activity/coupon/post');?>">折扣券</a> 或 <a href="<?php  echo url('activity/token/post');?>">代金券</a>；</p>
	<p>3. 粉丝会员入实体店消费并有意向使用电子折扣券或电子代金券；</p>
	<p>4. 店员审查电子代金券或电子折扣券的使用条件并输入消费密码，使用电子券；</p>
	<p>5. 管理员查询使用明细：<a href="<?php  echo url('activity/coupon/record');?>">电子代金券</a> 和 <a href="<?php  echo url('activity/token/record');?>">电子折扣券</a> </p>
	<p> <b><small>注：与店员对应的消费密码不能重复，此密码作为电子消费券使用的凭证，绑定了店员身份。</small></b></p>
</div>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
