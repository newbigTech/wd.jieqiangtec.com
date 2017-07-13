<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/_header', TEMPLATE_INCLUDEPATH)) : (include template('web/_header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('tabs', TEMPLATE_INCLUDEPATH)) : (include template('tabs', TEMPLATE_INCLUDEPATH));?>
 <?php  if($operation=='display') { ?>
<form action="" method="get" class='form form-horizontal'>
    <div class="panel panel-info">
        <div class="panel-heading">筛选</div>
        <div class="panel-body">
            <form action="./index.php" method="get" class="form-horizontal" plugins="form">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="ewei_shop" />
                <input type="hidden" name="do" value="plugin" />
                <input type="hidden" name="p"  value="creditshop" />
                <input type="hidden" name="method"  value="log" />
                <input type="hidden" name="op" value="display" />
         
                <div class="form-group">
                  <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">关键词</label>
                    <div class="col-xs-12 col-sm-8 col-lg-9">
                        <input class="form-control" name="keyword" id="" type="text" value="<?php  echo $_GPC['keyword'];?>" placeholder="可搜索活动编号/兑换码/商品标题">
                    </div>
                </div>
                  <div class="form-group">
                   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">会员信息</label>
                    <div class="col-xs-12 col-sm-8 col-lg-9">
                        <input class="form-control" name="realname" id="" type="text" value="<?php  echo $_GPC['realname'];?>" placeholder="可搜索会员昵称/会员手机号/会员姓名/收货人姓名/收货人手机号">
                    </div>
                </div>
                    <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">活动类型</label>
                       <div class="col-xs-12 col-sm-8 col-lg-9">
                       <select name='type' class='form-control'>
                          <option value='' <?php  if($_GPC['type']=='') { ?>selected<?php  } ?>>全部</option>
                          <option value='0' <?php  if($_GPC['type']=='0') { ?>selected<?php  } ?>>兑换</option>
                          <option value='1' <?php  if($_GPC['type']=='1') { ?>selected<?php  } ?> >抽奖</option>
                       </select> 
                     </div>
                </div>
                   <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">状态</label>
                       <div class="col-xs-12 col-sm-8 col-lg-9">
                       <select name='status' class='form-control'>
                          <option value='' <?php  if($_GPC['status']=='') { ?>selected<?php  } ?>></option>
                          <?php  if(empty($type)) { ?>
                          <option value='2' <?php  if($_GPC['status']=='2') { ?>selected<?php  } ?>>未兑换</option>
                          <option value='3' <?php  if($_GPC['status']=='3') { ?>selected<?php  } ?> >已兑换</option>
                          <?php  } else { ?>
                          <option value='1' <?php  if($_GPC['status']=='1') { ?>selected<?php  } ?>>未中奖</option>
                          <option value='2' <?php  if($_GPC['status']=='2') { ?>selected<?php  } ?> >已中奖</option>
                          <option value='3' <?php  if($_GPC['status']=='3') { ?>selected<?php  } ?> >已兑换</option>
                          <?php  } ?>
                       </select> 
                     </div>
                </div>
		 <div class="form-group">
                   <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">兑换门店</label>
                    <div class="col-xs-12 col-sm-8 col-lg-9">
                        <input class="form-control" name="storename" id="" type="text" value="<?php  echo $_GPC['storename'];?>" placeholder="可搜索线下兑换的门店">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">参与时间</label>
                     <div class="col-sm-2">
                       <select name='searchtime' class='form-control'>
                          <option value='' <?php  if(empty($_GPC['searchtime'])) { ?>selected<?php  } ?>>不搜索</option>
                          <option value='1' <?php  if($_GPC['searchtime']==1) { ?>selected<?php  } ?> >搜索</option>
                       </select> 
                     </div>
                    <div class="col-sm-7 col-lg-9 col-xs-12">
                        <?php  echo tpl_form_field_daterange('time', array('starttime'=>date('Y-m-d H:i', $starttime),'endtime'=>date('Y-m-d  H:i', $endtime)),true);?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label"> </label>
                      <div class="col-xs-12 col-sm-2 col-lg-2">
                        <button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
						<?php  if($_GPC['type']=='0') { ?>
						    <?php if(cv('creditshop.log.export0')) { ?>
							 <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                                                                <button type="submit" name="export" value="1" class="btn btn-primary">导出 Excel</button>
                                                          <?php  } ?>
						<?php  } else { ?>
						    <?php if(cv('creditshop.log.export1')) { ?>
							 <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                                                                <button type="submit" name="export" value="1" class="btn btn-primary">导出 Excel</button>
                                                          <?php  } ?>
						<?php  } ?>
                    </div>
                </div>
        </div>
    </div>
    </form>
            
    <form action="" method="post">
    <div class='panel panel-default'>
        <div class='panel-heading' >
            记录管理 (数量: <?php  echo $total;?> 条)
     
        </div>
        <div class='panel-body'>

            <table class="table">
                <thead>
                  <tr>
                        <th style="width:60px;">ID</th>
                        <th style='width:220px;'>活动编号</th>
                        <th style='width:200px;' >商品</th>
                        <th style='width:250px;'>活动信息</th>
                        <th style='width:100px;'>粉丝</th>
		      <th style='width:150px;'>会员</th>
                        <th style='width:100px;'>消耗</th>
                        <th style='width:200px;' >状态</th>
                      
                        <th style="">操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  if(is_array($list)) { foreach($list as $row) { ?>
                         <td><?php  echo $row['id'];?></td>
                         <td><?php  echo $row['logno'];?></td>
                          <td><img src='<?php  echo tomedia($row['thumb'])?>' style='width:30px;height:30px;padding1px;border:1px solid #ccc' /> <?php  echo $row['title'];?></td>
                          <td  style='line-height:22px;'>
							  活动类型: <?php  if($row['goodstype']==1) { ?>
                              <span class='label label-danger'>抽奖</span>
                              <?php  } else { ?>
                              <span class='label label-primary'>兑换</span>
                              <?php  } ?>
							  <br/>兑换方式:
							  <?php  if($row['iscoupon']==0) { ?>
                             <?php  if($row['isverify']==1) { ?>
                              <span class='label label-warning'>线下兑换</span>
                              <?php  } else { ?>
                              <span class='label label-success'>快递配送</span>
                              <?php  } ?>
							  <?php  } else { ?>
							  <span class='label label-danger'>优惠券</span>
							  <?php  } ?>
							  <?php  if(!empty($row['storename'])) { ?>
							  <br/>兑换门店: <?php  echo $row['storename'];?>
							  <?php  } ?>
                         </td>
                         <td>
			 <img src='<?php  echo $row['avatar'];?>' style='width:30px;height:30px;padding1px;border:1px solid #ccc' /> <?php  echo $row['nickname'];?>
						 </td>
						 <td>
							 
							 <?php echo empty($row['realname'])?$row['mrealname']:$row['realname']?><br />
						 <?php echo empty($row['mobile'])?$row['mmobile']:$row['mobile']?>
						 </td>
                         <td><?php  if($row['credit']>0) { ?>-<?php  echo $row['credit'];?>积分<br/><?php  } ?>
                              <?php  if($row['money']>0) { ?>
                              -<?php  echo $row['money'];?>现金
                              <?php  } ?>
                         </td>
                         <td style='line-height:22px;'>参与状态: 
                             <?php  if(empty($type)) { ?>
                                 <?php  if($row['status']==2) { ?>
                              <span class='label label-success'>已兑换</span>
                              <?php  } else if($row['status']==3) { ?>
                              <span class='label label-danger'>已兑奖</span>
                              <?php  } ?>
                             <?php  } else { ?>
                              <?php  if($row['status']==1) { ?>
                               <span class='label label-default'>未中奖</span>
                              <?php  } else if($row['status']==2) { ?>
                              <span class='label label-success'>已中奖</span>
                              <?php  } else if($row['status']==3) { ?>
                              <span class='label label-danger'>已兑奖</span>
                              <?php  } ?>  
                             <?php  } ?><br/>
                             支付状态: 
                              <?php  if($row['paytype']==-1) { ?>
                              <span class='label label-default'>无需支付</span>
                              <?php  } else { ?>
                                    <?php  if($row['paytype']==0) { ?>
                                        <?php  if($row['paystatus']==0) { ?>
                                        <span class='label label-default'>余额未支付</span>
                                        <?php  } else { ?>
                                        <span class='label label-warning'>余额已支付</span>
                                        <?php  } ?>
                                    <?php  } else if($row['paytype']==1) { ?>
                                    <?php  if($row['paystatus']==0) { ?>
                                        <span class='label label-default'>微信未支付</span>
                                        <?php  } else { ?>
                                        <span class='label label-warning'>微信已支付</span>
                                        <?php  } ?>
                                    <?php  } ?>
                               <?php  } ?><br/>
                        快递状态: 
                              <?php  if($row['dispatchstatus']==-1) { ?>
                                   <span class='label label-default'>无需支付</span>
                              <?php  } else if($row['dispatchstatus']==0) { ?>
                                    <span class='label label-default'>未支付</span>
                              <?php  } else if($row['dispatchstatus']==1) { ?>
                                    <span class='label label-success'>已支付</span>
                              <?php  } ?>
                         </td>
                         <td>
                             <a class='btn btn-default' href="<?php  echo $this->createPluginWebUrl('creditshop/log',array('op'=>'detail','id' => $row['id']));?>" title='详情' ><i class='fa fa-edit'></i></a>
                             <?php if(cv('creditshop.log.exchange')) { ?>
                                <?php  if($row['canexchange']) { ?>
                                <a class='btn btn-default' href="javascript:;" onclick='exchange(<?php  echo json_encode($row['address'])?>)' title='确认兑换' ><i class='fa fa-exchange'></i></a>
                                <?php  } ?>
                             <?php  } ?>
                         </td>
                </tr>
                   <?php  } } ?>
                </tbody>
            </table>
            <?php  echo $pager;?>
        </div>
    </div>
</form>
 <?php  } else if($operation=='detail') { ?>
 
<form class='form-horizontal'>
    <div class='panel panel-default'>
        <div class='panel-heading'>
            兑换记录详细信息
        </div>
        <div class='panel-body'>
           
                              
             <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">类型</label>
                <div class="col-sm-9 col-xs-12">
                    <div class='form-control-static'>
                         <?php  if($goods['type']==1) { ?>
                              <span class='label label-danger'>抽奖</span>
                              <?php  } else { ?>
                              <span class='label label-primary'>兑换</span>
                              <?php  } ?>
                    </div>
                </div>
            </div>
                              
               <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">商品</label>
                <div class="col-sm-9 col-xs-12">
                     <img src='<?php  echo tomedia($goods['thumb'])?>' style='width:30px;height:30px;padding:1px;border:1px solid #ccc' />
                         <?php  echo $goods['title'];?>
                </div>
            </div>
                                                   
             <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">粉丝</label>
                <div class="col-sm-9 col-xs-12">
                    <img src='<?php  echo $member['avatar'];?>' style='width:30px;height:30px;padding:1px;border:1px solid #ccc' />
                         <?php  echo $member['nickname'];?>
                </div>
            </div>
             <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">消耗</label>
                <div class="col-sm-9 col-xs-12">
                    <div class='form-control-static'>
                        <?php  if($goods['credit']>0) { ?>-<?php  echo $goods['credit'];?>积分<br/><?php  } ?>
                              <?php  if($goods['money']>0) { ?>
                              -<?php  echo $goods['money'];?>现金
                              <?php  } ?>
                        
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">参与时间</label>
                <div class="col-sm-9 col-xs-12">
                    <div class='form-control-static'><?php  echo date('Y-m-d H:i:s',$log['createtime'])?></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
                <div class="col-sm-9 col-xs-12">
                     <div class='form-control-static'>
                        <?php  if(empty($goods['type'])) { ?>
                                 <?php  if($log['status']==2) { ?>
                              <span class='label label-success'>已兑换</span>
                              <?php  } else if($log['status']==3) { ?>
                              <span class='label label-danger'>已兑奖</span>
                              <?php  } ?>
                             <?php  } else { ?>
                              <?php  if($log['status']==1) { ?>
                               <span class='label label-default'>未中奖</span>
                              <?php  } else if($log['status']==2) { ?>
                              <span class='label label-success'>已中奖</span>
                              <?php  } else if($log['status']==3) { ?>
                              <span class='label label-danger'>已兑奖</span>
                              <?php  } ?>  
                             <?php  } ?>
                     </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付状态</label>
                <div class="col-sm-9 col-xs-12">
                     <div class='form-control-static'>
                      <?php  if($log['paytype']==-1) { ?>
                              <span class='label label-default'>无需支付</span>
                              <?php  } else { ?>
                                    <?php  if($log['paytype']==0) { ?>
                                        <?php  if($log['paystatus']==0) { ?>
                                        <span class='label label-default'>余额未支付</span>
                                        <?php  } else { ?>
                                        <span class='label label-warning'>余额已支付</span>
                                        <?php  } ?>
                                    <?php  } else if($log['paytype']==1) { ?>
                                      <?php  if($log['paystatus']==0) { ?>
                                        <span class='label label-default'>微信未支付</span>
                                        <?php  } else { ?>
                                        <span class='label label-warning'>微信已支付</span>
                                        <?php  } ?>
                                    <?php  } ?>
                               <?php  } ?>
                     </div>
                </div>
            </div>
			
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">运费支付状态</label>
                <div class="col-sm-9 col-xs-12">
                    <div class='form-control-static'>
                       <?php  if($log['dispatchstatus']==-1) { ?>
                                   <span class='label label-default'>无需支付</span>
                              <?php  } else if($log['dispatchstatus']==0) { ?>
                                    <span class='label label-default'>未支付</span>
                              <?php  } else if($log['dispatchstatus']==1) { ?>
                                    <span class='label label-success'>已支付</span>
                              <?php  } ?>
                              </div>
                </div>
            </div>
            
            <?php  if(!empty($address['realname'])) { ?>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">收件人信息</label>
                <div class="col-sm-9 col-xs-12">
                       收  件 人: <?php  echo $address['realname'];?> / <?php  echo $address['mobile'];?><br/>
                       收货地址: <?php  echo $address['province'];?><?php  echo $address['city'];?><?php  echo $address['area'];?> <?php  echo $address['address'];?>
                </div>
            </div>
            <?php  } ?>
            
            
              <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                <div class="col-sm-9 col-xs-12">
                     <?php if(cv('creditshop.log.exchange')) { ?>
                        <?php  if($log['canexchange']) { ?>
                                <a class='btn btn-primary' href="javascript:;" onclick='exchange(<?php  echo json_encode($address)?>)' title='确认兑换' >确认兑换</a>
                        <?php  } ?>
                    <?php  } ?>
                <input type="button" class="btn btn-default" name="submit" onclick="history.go(-1)" value="返回列表"  <?php if(cv('creditshop.log.exchange')) { ?><?php  if($log['canexchange']) { ?>style='margin-left:10px;'<?php  } ?><?php  } ?>  />
                </div>
            </div>
            
            
        </div>
     
        
    </div>   
</form>
 <?php  } ?>
 <script language='javascript'>
     function exchange(address){
		 $('#expressform').hide();
		 $('#expressform1').hide();
		 	if(address.isverify==1){
				if(address.storeid==0){
					if( !confirm('用户未选择门店，是否继续兑换?') ){
						return;
					}
				}
			} else{
				if(address.addressid==0){
					alert('用户未选择邮寄地址，无法兑换!');
					return;
				}
			}
		
			
			
         $('#modal-exchange').find(':input[name=id]').val(address.logid);
         $('#express').val('');
         $('#expresscom').val('');
         $(':input[name=expresssn]').val('');
		 
         if(address.addressid!='0' &&address.addressid!=0){
            $('#expressform').show();
            $('#realname').html(address.realname);
            $('#mobile').html(address.mobile);
            $('#address').html(address.province + address.city + address.area + " " + address.address);
	}
         if(address.storeid!='0' && address.storeid!=0){
	    $('#carrier_realname').html(address.carrier_realname);
             $('#carrier_mobile').html(address.carrier_mobile); 
	    $('#carrier_storename').html(address.carrier_storename);
	 
		$('#carrier_address').html(address.carrier_address);
		
             $('#expressform1').show();
         }
         $('#modal-exchange').modal();
     }
     
    </script>

        <div id="modal-exchange" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="width:600px;margin:0px auto;">
            <form class="form-horizontal form" action="<?php  echo $this->createPluginWebUrl('creditshop/method',array('op'=>'exchange'))?>" method="post" enctype="multipart/form-data">
                <input type='hidden' name='id' value='' />
                <input type='hidden' name='method' value='log' /> 
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h3>确认领奖</h3>
                    </div>
                    <div class="modal-body">
                        <div id='expressform' style='display:none'>
                            <div class="form-group">
                                    <label class="col-xs-10 col-sm-3 col-md-3 control-label">收件人信息</label>
                                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
                                        <div class='form-control-static'>
                                            收  件 人: <span id='realname'></span> / <span id='mobile'></span><br/>
                                            收货地址: <span id='address'></span>
                                        </div>
                                    </div>
                            </div>
                                <div class="form-group">
                                    <label class="col-xs-10 col-sm-3 col-md-3 control-label">快递公司</label>
                                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
                                        <select class="form-control" name="express" id="express">
                                            <option value="" data-name="">其他快递</option>
                                            <option value="shunfeng" data-name="顺丰">顺丰</option>
                                            <option value="shentong" data-name="申通">申通</option>
                                            <option value="yunda" data-name="韵达快运">韵达快运</option>
                                            <option value="tiantian" data-name="天天快递">天天快递</option>
                                            <option value="yuantong" data-name="圆通速递">圆通速递</option>
                                            <option value="zhongtong" data-name="中通速递">中通速递</option>
                                            <option value="ems" data-name="ems快递">ems快递</option>
                                            <option value="huitongkuaidi" data-name="汇通快运">汇通快运</option>
                                            <option value="quanfengkuaidi" data-name="全峰快递">全峰快递</option>
                                            <option value="zhaijisong" data-name="宅急送">宅急送</option>
                                            <option value="aae" data-name="aae全球专递">aae全球专递</option>
                                            <option value="anjie" data-name="安捷快递">安捷快递</option>
                                            <option value="anxindakuaixi" data-name="安信达快递">安信达快递</option>
                                            <option value="biaojikuaidi" data-name="彪记快递">彪记快递</option>
                                            <option value="bht" data-name="bht">bht</option>
                                            <option value="baifudongfang" data-name="百福东方国际物流">百福东方国际物流</option>
                                            <option value="coe" data-name="中国东方（COE）">中国东方（COE）</option>
                                            <option value="changyuwuliu" data-name="长宇物流">长宇物流</option>
                                            <option value="datianwuliu" data-name="大田物流">大田物流</option>
                                            <option value="debangwuliu" data-name="德邦物流">德邦物流</option>
                                            <option value="dhl" data-name="dhl">dhl</option>
                                            <option value="dpex" data-name="dpex">dpex</option>
                                            <option value="dsukuaidi" data-name="d速快递">d速快递</option>
                                            <option value="disifang" data-name="递四方">递四方</option>
                                            <option value="fedex" data-name="fedex（国外）">fedex（国外）</option>
                                            <option value="feikangda" data-name="飞康达物流">飞康达物流</option>
                                            <option value="fenghuangkuaidi" data-name="凤凰快递">凤凰快递</option>
                                            <option value="feikuaida" data-name="飞快达">飞快达</option>
                                            <option value="guotongkuaidi" data-name="国通快递">国通快递</option>
                                            <option value="ganzhongnengda" data-name="港中能达物流">港中能达物流</option>
                                            <option value="guangdongyouzhengwuliu" data-name="广东邮政物流">广东邮政物流</option>
                                            <option value="gongsuda" data-name="共速达">共速达</option>
                                            <option value="hengluwuliu" data-name="恒路物流">恒路物流</option>
                                            <option value="huaxialongwuliu" data-name="华夏龙物流">华夏龙物流</option>
                                            <option value="haihongwangsong" data-name="海红">海红</option>
                                            <option value="haiwaihuanqiu" data-name="海外环球">海外环球</option>
                                            <option value="jiayiwuliu" data-name="佳怡物流">佳怡物流</option>
                                            <option value="jinguangsudikuaijian" data-name="京广速递">京广速递</option>
                                            <option value="jixianda" data-name="急先达">急先达</option>
                                            <option value="jjwl" data-name="佳吉物流">佳吉物流</option>
                                            <option value="jymwl" data-name="加运美物流">加运美物流</option>
                                            <option value="jindawuliu" data-name="金大物流">金大物流</option>
                                            <option value="jialidatong" data-name="嘉里大通">嘉里大通</option>
                                            <option value="jykd" data-name="晋越快递">晋越快递</option>
                                            <option value="kuaijiesudi" data-name="快捷速递">快捷速递</option>
                                            <option value="lianb" data-name="联邦快递（国内）">联邦快递（国内）</option>
                                            <option value="lianhaowuliu" data-name="联昊通物流">联昊通物流</option>
                                            <option value="longbanwuliu" data-name="龙邦物流">龙邦物流</option>
                                            <option value="lijisong" data-name="立即送">立即送</option>
                                            <option value="lejiedi" data-name="乐捷递">乐捷递</option>
                                            <option value="minghangkuaidi" data-name="民航快递">民航快递</option>
                                            <option value="meiguokuaidi" data-name="美国快递">美国快递</option>
                                            <option value="menduimen" data-name="门对门">门对门</option>
                                            <option value="ocs" data-name="OCS">OCS</option>
                                            <option value="peisihuoyunkuaidi" data-name="配思货运">配思货运</option>
                                            <option value="quanchenkuaidi" data-name="全晨快递">全晨快递</option>
                                            <option value="quanjitong" data-name="全际通物流">全际通物流</option>
                                            <option value="quanritongkuaidi" data-name="全日通快递">全日通快递</option>
                                            <option value="quanyikuaidi" data-name="全一快递">全一快递</option>
                                            <option value="rufengda" data-name="如风达">如风达</option>
                                            <option value="santaisudi" data-name="三态速递">三态速递</option>
                                            <option value="shenghuiwuliu" data-name="盛辉物流">盛辉物流</option>
                                            <option value="sue" data-name="速尔物流">速尔物流</option>
                                            <option value="shengfeng" data-name="盛丰物流">盛丰物流</option>
                                            <option value="saiaodi" data-name="赛澳递">赛澳递</option>
                                            <option value="tiandihuayu" data-name="天地华宇">天地华宇</option>
                                            <option value="tnt" data-name="tnt">tnt</option>
                                            <option value="ups" data-name="ups">ups</option>
                                            <option value="wanjiawuliu" data-name="万家物流">万家物流</option>
                                            <option value="wenjiesudi" data-name="文捷航空速递">文捷航空速递</option>
                                            <option value="wuyuan" data-name="伍圆">伍圆</option>
                                            <option value="wxwl" data-name="万象物流">万象物流</option>
                                            <option value="xinbangwuliu" data-name="新邦物流">新邦物流</option>
                                            <option value="xinfengwuliu" data-name="信丰物流">信丰物流</option>
                                            <option value="yafengsudi" data-name="亚风速递">亚风速递</option>
                                            <option value="yibangwuliu" data-name="一邦速递">一邦速递</option>
                                            <option value="youshuwuliu" data-name="优速物流">优速物流</option>
                                            <option value="youzhengguonei" data-name="邮政包裹挂号信">邮政包裹挂号信</option>
                                            <option value="youzhengguoji" data-name="邮政国际包裹挂号信">邮政国际包裹挂号信</option>
                                            <option value="yuanchengwuliu" data-name="远成物流">远成物流</option>
                                            <option value="yuanweifeng" data-name="源伟丰快递">源伟丰快递</option>
                                            <option value="yuanzhijiecheng" data-name="元智捷诚快递">元智捷诚快递</option>
                                            <option value="yuntongkuaidi" data-name="运通快递">运通快递</option>
                                            <option value="yuefengwuliu" data-name="越丰物流">越丰物流</option>
                                            <option value="yad" data-name="源安达">源安达</option>
                                            <option value="yinjiesudi" data-name="银捷速递">银捷速递</option>
                                            <option value="zhongtiekuaiyun" data-name="中铁快运">中铁快运</option>
                                            <option value="zhongyouwuliu" data-name="中邮物流">中邮物流</option>
                                            <option value="zhongxinda" data-name="忠信达">忠信达</option>
                                            <option value="zhimakaimen" data-name="芝麻开门">芝麻开门</option>
                                        </select>
                                        <input type='hidden' name='expresscom' id='expresscom' />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-10 col-sm-3 col-md-3 control-label">快递单号</label>
                                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
                                        <input type="text" name="expresssn" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        <div id='expressform1' style='display:none'>
			  <div class="form-group">
                                    <label class="col-xs-10 col-sm-3 col-md-3 control-label">联系人信息</label>
                                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
                                        <div class='form-control-static'>
                                            <span id='carrier_realname'></span> / <span id='carrier_mobile'></span>
                                        </div>
                                    </div>
                               </div>
			    <div class="form-group">
                                    <label class="col-xs-10 col-sm-3 col-md-3 control-label">兑换门店</label>
                                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
                                        <div class='form-control-static'>
                                            <span id='carrier_storename'></span> <br/> <span id='carrier_address'></span>
                                        </div>
                                    </div>
                               </div>
					 <div class="form-group">
                                    <label class="col-xs-10 col-sm-3 col-md-3 control-label"></label>
                                    <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
                                        <div class='form-control-static'>
                                             确认已经领取?
                                        </div>
                                    </div>
                               </div>		
                         
                        </div>
                        <div id="module-menus"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="close" value="yes">确认兑换</button>
                        <a href="#" class="btn btn-default" data-dismiss="modal" aria-hidden="true">关闭</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
 
<script language='javascript'>
    $(function (){
      
        $("#express").change(function () {
		
            var obj = $(this);
            var sel = obj.find("option:selected").attr("data-name");
            $("#expresscom").val(sel);
        });
    })
</script>
 
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/_footer', TEMPLATE_INCLUDEPATH)) : (include template('web/_footer', TEMPLATE_INCLUDEPATH));?>
 