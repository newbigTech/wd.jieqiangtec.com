<?php defined('IN_IA') or exit('Access Denied');?><div ng-controller="audioCtrl">
	<?php  if($_GPC['iseditor']) { ?>
	<!--语音-->
	<div class="app-audio-edit">
		<div class="arrow-left"></div>
		<div class="inner">
			<div class="panel panel-default">
				<div class="panel-body form-horizontal">
					<div class="form-group">
						<label class="col-xs-2 control-label">音频</label>
						<div class="col-xs-10">
							<span class="input-group-btn">
								<button type="button" class="btn btn-default audio-player-play" style="display:none;"><i class="fa fa-play"></i></button>
								<button ng-click="addAudioItem()" type="button" class="btn btn-default">选择媒体文件</button>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">样式</label>
						<div class="col-xs-10 ">
							<div class="">
								<label class="radio-inline">
									<input type="radio" name="wx-music" value="1" ng-model="activeItem.params.style" />模仿微信对话样式
								</label>
								<div class="form-group" ng-show="activeItem.params.style == '1'">
									<label class="control-label col-xs-3">头像:</label>
									<div class="col-xs-3" style="padding-top:10px;"><img ng-init="activeItem.params.headimg = activeItem.params.headimg ? activeItem.params.headimg : './resource/images/app/shop.png!80x80.jpg'" ng-src="{{activeItem.params.headimg}}" alt="语音头像" width="62" height="62"></div>
									<div class="help-block col-xs-6" style="padding-left:0;padding-top:10px;">
										<a href="#" ng-click="addImgItem()">上传头像</a><br>
										建议尺寸80*80像素<br>
										如果不设置,默认将使用店铺logo
									</div>
								</div>
								<div class="form-group" ng-show="activeItem.params.style == '1'">
									<label class="control-label col-xs-3">气泡:</label>
									<div class="col-xs-9">
										<label class="radio-inline">
											<input type="radio" name="bubble" value="left" ng-model="activeItem.params.align" />居左
										</label>
										<label class="radio-inline">
											<input type="radio" name="bubble" value="right" ng-model="activeItem.params.align" />居右
										</label>
									</div>
								</div>
							</div>
							<div class="">
								<label class="radio-inline">
									<input type="radio" name="wx-music" value="2" ng-model="activeItem.params.style"/>简易音乐播放器
								</label>
								<div>
									<div class="form-group" ng-show="activeItem.params.style == '2'">
										<label class="control-label col-xs-3">标题:</label>
										<div class="col-xs-9"><input class="form-control" type="text" ng-model="activeItem.params.title" /></div>
									</div>
									<div class="form-group" ng-show="activeItem.params.style == '2'">
										<label class="control-label col-xs-3">循环:</label>
										<div class="col-xs-9"><label class="checkbox-inline"><input type="checkbox" ng-model="activeItem.params.isloop" />开启循环播放</label></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">播放</label>
						<div class="col-xs-10">
							<div>
							<label class="radio-inline">
								<input type="radio" name="play" ng-model="activeItem.params.reload" value="true" />暂停后再回复播放时,从头开始
							</label>
								</div>
							<div>
							<label class="radio-inline">
								<input type="radio" name="play" ng-model="activeItem.params.reload" value="false" />暂停后再回复播放时,从暂停位置开始
							</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end语音-->
	<?php  } else { ?>
	<!--app语音-->
	<div class="app-audio">
		<div class="inner">
			<!--仿微信对话样式    居左:audioLeft   居右:audioRight-->
			<div ng-if="module.params.style == '1'" id="audio-music-{{$index+0}}" data-reload="{{module.params.reload}}" class="wx audioLeft clearfix" data-src="{{module.params.audio.url}}" ng-class="{'audioLeft': module.params.align == 'left', 'audioRight': module.params.align == 'right'}">
				<img ng-init="module.params.headimg = module.params.headimg ? module.params.headimg : './resource/images/app/shop.png!80x80.jpg'"  ng-src="{{module.params.headimg}}" alt="语音头像" class="audioLogo" width="40" height="40">
				<span class="audioBar js-play">
					<img style="display:none;" ng-if="module.params.align == 'left'" src="./resource/images/app/player.gif" class="audioAnimation">
					<img style="display:none;" ng-if="module.params.align == 'right'" src="./resource/images/app/green_player.gif" class="audioAnimation">
					<i class="audioStatic"></i>
					<span style="display:none;" class="audioLoading"><i class="fa fa-spinner fa-pulse"></i></span>
				</span>
				<span class="audioBar js-pause" style="display:none;">
					<img ng-if="module.params.align == 'left'" src="./resource/images/app/player.gif" class="audioAnimation">
					<img ng-if="module.params.align == 'right'" src="./resource/images/app/green_player.gif" class="audioAnimation">
					<i class="audioStatic"></i>
				</span>
				<span class="audio-time"></span>
				<div class="js-audio-wx" data-id="audio-music-{{$index+0}}"></div>
			</div>
			<div class="music music-play" id="audio-music-{{$index+0}}" data-src="{{module.params.audio.url}}" data-reload="{{module.params.reload}}" data-loop="{{module.params.isloop}}" ng-if="module.params.style == '2'">
				<span class="audioStatic js-play"><a href="javascript:;"><i class="fa fa-play-circle-o"></i></a></span>
				<span class="audioAnimation js-pause" style="display:none;"><a href="javascript:;"><i class="fa fa-pause"></i></a></span>
				<span class="musicTitle" ng-if="module.params.title == ''">歌名儿</span>
				<span class="musicTitle" ng-if="module.params.title != ''">{{module.params.title}}</span>
				<span class="audioLoading" style="display:none;"><i class="fa fa-spinner fa-pulse"></i></span>
				<span class="audio-time" style="display:none;"><span class="audio-current-time">00:00</span>/<span class="audio-duration">00:00</span></span>
				<div class="slider-bar">
					<div class="slider-fill"></div>
				</div>
				<div class="js-audio-music" data-id="audio-music-{{$index+0}}"></div>
			</div>
		</div>
	</div>
	<!--end语音-->
	<?php  } ?>
</div>