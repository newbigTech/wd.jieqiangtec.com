<?php defined('IN_IA') or exit('Access Denied');?><div ng-controller="componentCtrl">
<?php  if($_GPC['iseditor']) { ?> 
	<!--自定义模块-->
	<div class="app-component-edit">
		<div class="arrow-left"></div>
		<div class="inner">
			<div class="panel panel-default">
				<div class="panel-body form-horizontal">
					<div class="form-group">
						<label class="control-label col-xs-4">自定义页面模块</label>
						<div class="col-xs-8 form-control-static">
							<a href="javascript:;" class="componentAdd" data-toggle="modal" data-target="#component-modal"><i class="fa fa-plus-circle"></i>添加</a>
						</div>
						<!--添加模块以后显示以下内容-->
						<div class="col-xs-8 form-control-static hidden">
							<a href="#"><span class="label label-success">自定义页面模块 |  促销活动</span></a>&nbsp;&nbsp;<a href="#">修改</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end自定义模块-->
<?php  } else { ?>
	<!--app自定义模块-->
	<div class="app-component">
		<div class="inner">
			<div class="component-con">
				点击编辑『自定义页面模块』
			</div>
		</div>
	</div>
	<!--end自定义模块-->
<?php  } ?>
</div>