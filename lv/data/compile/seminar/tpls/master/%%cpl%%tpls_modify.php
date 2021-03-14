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
                            <?php if($this->tpl_var['catid']){ ?>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-seminars">专题管理</a></li>
							<li class="active"><?php echo $this->tpl_var['categories'][$this->tpl_var['catid']]['catname']; ?></li>
                            <?php } else { ?>
							<li class="active">专题管理</li>
                            <?php } ?>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;overflow:visible">
					<h4 class="title" style="padding:10px;">
						修改<?php echo $this->tpl_var['types'][$this->tpl_var['tpl']['stpltype']]; ?>
						<a class="btn btn-primary pull-right" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-seminar-<?php echo $this->tpl_var['tpl']['stpltype']; ?>">模板管理</a>
					</h4>
					<form action="index.php?seminar-master-tpls-modify" method="post" class="form-horizontal">
						<div class="form-group">
							<label for="contenttitle" class="control-label col-sm-2">名称：</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="contenttitle" name="args[stplname]" value="<?php echo $this->tpl_var['tpl']['stplname']; ?>" needle="needle" msg="您必须输入名称">
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
														<input type="hidden" class="qq-edit-filename-selector" name="args[stplthumb]" tabindex="0">
													</div>
												</li>
											</ul>
											<ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
												<li class="text-center">
													<div class="thumbnail">
														<img class="qq-thumbnail-selector" src="<?php if($this->tpl_var['tpl']['stplthumb']){ ?><?php echo $this->tpl_var['tpl']['stplthumb']; ?><?php } else { ?>files/public/img/noimage.gif<?php } ?>" alt="点击上传新图片">
														<input type="hidden" class="qq-edit-filename-selector" name="args[stplthumb]" tabindex="0" value="<?php if($this->tpl_var['tpl']['stplthumb']){ ?><?php echo $this->tpl_var['tpl']['stplthumb']; ?><?php } else { ?>files/public/img/noimage.gif<?php } ?>">
													</div>
												</li>
											</ul>
										</div>
									</div>
								</script>
								<div class="fineuploader" attr-type="thumb" attr-template="pe-template-contentthumb"></div>
							</div>
						</div>
                        <?php if($this->tpl_var['tpl']['stpltype'] == 'layout'){ ?>
						<div class="form-group">
							<label class="control-label col-sm-2">栅格：</label>
							<div class="col-sm-9">
								<label class="radio-inline">
									<input type="radio" name="args[stplgrid]" value="1"<?php if($this->tpl_var['tpl']['stplgrid'] == 1){ ?> checked<?php } ?>/> 通栏
								</label>
								<label class="radio-inline">
									<input type="radio" name="args[stplgrid]" value="2"<?php if($this->tpl_var['tpl']['stplgrid'] == 2){ ?> checked<?php } ?>/> 左右两栏
								</label>
								<label class="radio-inline">
									<input type="radio" name="args[stplgrid]" value="3"<?php if($this->tpl_var['tpl']['stplgrid'] == 3){ ?> checked<?php } ?>/> 左中右三栏
								</label>
							</div>
						</div>
                        <?php } ?>
						<div class="form-group">
							<label for="contentdescribe" class="control-label col-sm-2">简介：</label>
							<div class="col-sm-9">
								<textarea id="contentdescribe" class="form-control" name="args[stpldescribe]" rows="7" cols="4"><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['tpl']['stpldescribe'])); ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="contenttext" class="control-label col-sm-2">代码</label>
							<div class="col-sm-10">
								<div class="Codemirror"></div>
								<textarea class="form-control hide blockcontent_content" rows="7" cols="4" name="args[stplcode]"><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['tpl']['stplcode'])); ?></textarea>
								<span class="help-block">通栏多栅格使用&lt;!--{{leftchildrentpls}--&gt;,&lt;!--{{middlechildrentpls}--&gt;,&lt;!--{{rightchildrentpls}--&gt;标识子模板位置；其他使用&lt;!--{{childrentpls}--&gt;标识子模板位置。</span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2"></label>
							<div class="col-sm-9">
								<button class="btn btn-primary tplbutton" type="button">提交</button>
								<input type="hidden" name="submit" value="1">
								<input type="hidden" name="stplid" value="<?php echo $this->tpl_var['tpl']['stplid']; ?>">
							</div>
						</div>
					</form>
				</div>
			</div>
		<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<?php $this->_compileInclude('code'); ?>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>
<?php } ?>