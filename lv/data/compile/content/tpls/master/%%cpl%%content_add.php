<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2 leftmenu">
				<?php $this->_compileInclude('menu'); ?>
			</div>
			<div id="datacontent">
<?php } ?>
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a></li>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-contents&page=<?php echo $this->tpl_var['page']; ?>">内容管理</a></li>
							<li class="active">添加内容</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;overflow:visible">
					<h4 class="title" style="padding:10px;">
						添加内容
						<a class="btn btn-primary pull-right" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-contents&catid=<?php echo $this->tpl_var['catid']; ?>&page=<?php echo $this->tpl_var['page']; ?>">内容管理</a>
					</h4>
					<form action="index.php?content-master-contents-add" method="post" class="form-horizontal">
						<div class="form-group">
				            <label for="contenttitle" class="control-label col-sm-2">标题：</label>
				            <div class="col-sm-9">
							    <input class="form-control" type="text" id="contenttitle" name="args[contenttitle]" needle="needle" msg="您必须输入标题">
					        </div>
				        </div>
				        <div class="form-group">
				            <label for="contenttitle" class="control-label col-sm-2">发布时间：</label>
				            <div class="col-sm-4">
							    <input class="form-control datetimepicker" data-minview="0" data-date="<?php echo date('Y-m-d H:i:s',TIME); ?>" data-date-format="yyyy-mm-dd hh:ii:ss" type="text" id="contenttitle" name="args[contentinputtime]" needle="needle" msg="您必须输入发布时间">
					        </div>
				        </div>
						<div class="form-group">
							<label for="block" class="control-label col-sm-2">tags：</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="args[contenttags]" needle="needle" msg="您必须输入tags">
								<span class="help-block">英文逗号隔开，不超过40个字</span>
							</div>
						</div>
						<div class="form-group">
							<label for="block" class="control-label col-sm-2">关键字：</label>
							<div class="col-sm-9">
								<textarea class="form-control" rows="4" name="args[contentkeywords]" needle="needle" msg="您必须输入关键字"></textarea>
								<span class="help-block">空格逗号隔开，每个关键字最少2个汉字或字母</span>
							</div>
						</div>
				        <div class="form-group">
				            <label for="block" class="control-label col-sm-2">缩略图：</label>
				            <div class="col-sm-9">
					            <script type="text/template" id="pe-template-contentthumb">
						    		<div class="qq-uploader-selector" style="width:30%" qq-drop-area-text="可将图片拖拽至此处上传" style="clear:both;">
						            	<div class="qq-upload-button-selector" style="clear:both;">
						                	<ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
								                <li class="text-center">
								                    <div class="thumbnail">
														<img class="qq-thumbnail-selector" alt="点击上传新图片">
														<input type="hidden" class="qq-edit-filename-selector" name="args[contentthumb]" tabindex="0">
													</div>
								                </li>
								            </ul>
								            <ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
									            <li class="text-center">
									                <div class="thumbnail">
														<img class="qq-thumbnail-selector" src="files/public/img/noimage.gif" alt="点击上传新图片">
														<input type="hidden" class="qq-edit-filename-selector" name="args[contentthumb]" tabindex="0" value="files/public/img/noimage.gif">
						                			</div>
									            </li>
									        </ul>
						                </div>
						            </div>
						        </script>
						        <div class="fineuploader" attr-type="thumb" attr-template="pe-template-contentthumb"></div>
							</div>
				        </div>
				        <div class="form-group">
				            <label for="contentcatid" class="control-label col-sm-2">分类：</label>
				        	<div class="col-sm-9 form-inline">
							    <select id="contentcatid" msg="您必须选择一个分类" needle="needle" class="autocombox form-control" name="args[contentcatid]" refUrl="index.php?content-master-category-ajax-getchildcategory&catid={value}">
					            	<option value="">选择一级分类</option>
					            	<?php $cid = 0;
 foreach($this->tpl_var['parentcat'] as $key => $cat){ 
 $cid++; ?>
					            	<option value="<?php echo $cat['catid']; ?>"><?php echo $cat['catname']; ?></option>
					            	<?php } ?>
					            </select>
					        </div>
				        </div>
				        <div class="form-group">
				            <label for="contentlink" class="control-label col-sm-2">站外链接：</label>
				            <div class="col-sm-9">
							    <input class="form-control" type="text" id="contentlink" name="args[contentlink]">
					        </div>
				        </div>
                        <?php $fid = 0;
 foreach($this->tpl_var['forms'] as $key => $form){ 
 $fid++; ?>
						<div class="form-group">
							<label for="<?php echo $form['id']; ?>" class="control-label col-sm-2"><?php echo $form['title']; ?></label>
							<div class="col-sm-9">
                                <?php echo $form['html']; ?>
							</div>
						</div>
                        <?php } ?>
						<div class="form-group">
							<label for="contentdescribe" class="control-label col-sm-2">摘要：</label>
							<div class="col-sm-9">
								<textarea id="contentdescribe" class="form-control" name="args[contentdescribe]" rows="7" cols="4"></textarea>
							</div>
						</div>
				    	<div class="form-group">
				            <label for="contenttext" class="control-label col-sm-2">内容</label>
				            <div class="col-sm-10">
							    <textarea id="contenttext" rows="7" cols="4" class="ckeditor" name="args[contenttext]"></textarea>
					        </div>
				        </div>
				        <div class="form-group">
				            <label for="contenttemplate" class="control-label col-sm-2">模版：</label>
				            <div class="col-sm-3">
							    <select class="form-control" name="args[contenttemplate]" id="contenttemplate">
					            	<?php $tid = 0;
 foreach($this->tpl_var['tpls'] as $key => $tpl){ 
 $tid++; ?>
					            	<option value="<?php echo $tpl; ?>"><?php echo $tpl; ?></option>
					            	<?php } ?>
					            </select>
					        </div>
				        </div>
				        <?php if($this->tpl_var['poses']){ ?>
				        <div class="form-group">
				            <label class="control-label col-sm-2">推荐到：</label>
			            	<div class="col-sm-9">
							    <?php $pid = 0;
 foreach($this->tpl_var['poses'] as $key => $pos){ 
 $pid++; ?>
				            	<label class="checkbox-inline">
				            		<input type="checkbox" value="<?php echo $pos['posid']; ?>" name="position[]"><?php echo $pos['posname']; ?>
				            	</label>
				            	<?php } ?>
					        </div>
				        </div>
				        <?php } ?>
				        <div class="form-group">
				            <label class="control-label col-sm-2"></label>
				            <div class="col-sm-9">
					            <button class="btn btn-primary" type="submit">提交</button>
					            <input type="hidden" name="submit" value="1">
								<input type="hidden" name="args[contentmoduleid]" value="<?php echo $this->tpl_var['moduleid']; ?>">
					        </div>
				        </div>
					</form>
				</div>
			</div>
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>
<?php } ?>