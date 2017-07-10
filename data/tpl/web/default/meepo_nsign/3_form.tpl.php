<?php defined('IN_IA') or exit('Access Denied');?><input type="hidden" name="reply_id" value="<?php  echo $reply['id'];?>" />
<div class="panel panel-default">
	 <div class="panel-heading">
     	添加签到活动
     </div>
	<div class="panel-body">
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动名称</label>
				<div class="col-sm-9"><input type="text" name="title"  class="form-control" value="<?php  echo $reply['title'];?>"> </div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">图文消息图片</label>
				<div class="col-sm-9">
					<?php  echo tpl_form_field_image('picture',$reply['picture'])?>
					
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动简介</label>
				<div class="col-sm-9">
					<textarea style="height:100px;" name="description" class="form-control " cols="60"><?php  echo $reply['description'];?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">活动详情</label>
				<div class="col-sm-9">
					<textarea style="height:100px;" id="content" name="content" class="form-control richtext-clone" cols="60"><?php  echo $reply['content'];?></textarea>
				</div>
			</div>
	</table>	
</div>

<script type="text/javascript">

kindeditor($('#content'));
kindeditorUploadBtn($('#bless-picture'));
kindeditorUploadBtn($('#user-bgimage'));

</script>