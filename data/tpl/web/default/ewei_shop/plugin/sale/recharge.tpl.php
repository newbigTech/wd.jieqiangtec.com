<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/_header', TEMPLATE_INCLUDEPATH)) : (include template('web/_header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('tabs', TEMPLATE_INCLUDEPATH)) : (include template('tabs', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <form id="dataform"    <?php if(cv('sale.recharge.save')) { ?>action="" method="post"<?php  } ?> class="form-horizontal form">
        <div class="panel panel-default">
            <div class="panel-heading">
                充值优惠设置
            </div>
            <div class="panel-body">
                 
                  <div class="form-group">
                       <label class="col-xs-12 col-sm-3 col-md-2 control-label">充值满就送</label>
                    <div class="col-sm-4">
						<div class='recharge-items'>
							
							 <?php  if(is_array($recharges)) { foreach($recharges as $item) { ?>
						 
						<div class="input-group recharge-item" style="margin-top:5px"> 
							<span class="input-group-addon">满</span>
							<input type="text" class="form-control" name='enough[]' value='<?php  echo $item['enough'];?>' />
							<span class="input-group-addon">赠送</span>
							<input type="text" class="form-control"  name='give[]' value='<?php  echo $item['give'];?>' />
							<span class="input-group-addon">元</span>
							<div class='input-group-btn'>
							<button class='btn btn-danger' type='button' onclick="removeRechargeItem(this)"><i class='fa fa-remove'></i></button>
							</div>
							
						</div>
						 <?php  } } ?>
						 </div>  
						 
					   <div style="margin-top:5px"> 
					   <button type='button' class="btn btn-default" onclick='addRechargeItem()' style="margin-bottom:5px"><i class='fa fa-plus'></i> 增加优惠项</button>
					   </div>
						<span class="help-block">两项都填写才能生效，赠送的余额可以固定数或比例(带%)号</span>
						<span class="help-block">例如：充值满100，赠送10</span>
						<span class="help-block">例如：充值满200，赠送15%，实际赠送30(200*15%)</span>
						
						
						 
					 
                       </div>
                   </div>  
                   
              
                   <?php if(cv('sale.recharge.save')) { ?>
                <div class="form-group"></div>
                   <div class="form-group">
                           <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                           <div class="col-sm-9 col-xs-12">
							
                                 <input type="submit" name="submit"  value="保存设置" class="btn btn-primary"/>
                                 <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                           </div>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </form>
</div>
<script language='javascript'>
	
	function addRechargeItem(){
		var html= '<div class="input-group recharge-item"  style="margin-top:5px">';
           html+='<span class="input-group-addon">满</span>';
		 html+='<input type="text" class="form-control" name="enough[]"  />';
							html+='<span class="input-group-addon">赠送</span>';
							html+='<input type="text" class="form-control"  name="give[]"  />';
							html+='<span class="input-group-addon">元</span>';
							html+='<div class="input-group-btn"><button type="button" class="btn btn-danger" onclick="removeRechargeItem(this)"><i class="fa fa-remove"></i></button></div>';
						html+='</div>';
						$('.recharge-items').append(html);
	}
	function removeRechargeItem(obj){
		$(obj).closest('.recharge-item').remove();
	}
	
   
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/_footer', TEMPLATE_INCLUDEPATH)) : (include template('web/_footer', TEMPLATE_INCLUDEPATH));?>
