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
							<li><a href="index.php?exam-master-exams">试卷管理</a></li>
							<li class="active">即时组卷修改</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						即时组卷修改
						<a class="btn btn-primary pull-right" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-exams&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>">试卷管理</a>
					</h4>
			        <form action="index.php?exam-master-exams-modify" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-2">试卷名称：</label>
							<div class="col-sm-4">
					  			<input class="form-control" type="text" name="args[exam]" value="<?php echo $this->tpl_var['exam']['exam']; ?>" needle="needle" msg="您必须为该试卷输入一个名称"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">评卷方式</label>
							<div class="col-sm-9">
								<label class="radio-inline">
									<input name="args[examdecide]" type="radio" value="1"<?php if($this->tpl_var['exam']['examdecide']){ ?> checked<?php } ?>/>教师评卷
								</label>
								<label class="radio-inline">
									<input name="args[examdecide]" type="radio" value="0"<?php if(!$this->tpl_var['exam']['examdecide']){ ?> checked<?php } ?>/>学生自评
								</label>
								<span class="help-block">教师评卷时有主观题则需要教师在后台评分后才能显示分数，无主观题自动显示分数。</span>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">考试科目：</label>
						  	<div class="col-sm-9">
							  	<label class="radio-inline">
								  	<input type="hidden" name="args[examsubject]" value="<?php echo $this->tpl_var['exam']['examsubject']; ?>" />
								  	<?php echo $this->tpl_var['subjects'][$this->tpl_var['exam']['examsubject']]['subject']; ?>
							  	</label>
					  		</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">考试时间：</label>
					  		<div class="col-sm-9 form-inline">
					  			<input class="form-control" type="text" name="args[examsetting][examtime]" size="4" needle="needle" value="<?php echo $this->tpl_var['exam']['examsetting']['examtime']; ?>"/> 分钟
					  		</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">来源：</label>
					  		<div class="col-sm-4">
					  			<input class="form-control" type="text" name="args[examsetting][comfrom]" value="<?php echo $this->tpl_var['exam']['examsetting']['comfrom']; ?>" size="4"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">试卷总分：</label>
					  		<div class="col-sm-4">
					  			<input class="form-control" type="text" name="args[examsetting][score]" value="<?php echo $this->tpl_var['exam']['examsetting']['score']; ?>" size="4" needle="needle" msg="你要为本考卷设置总分" datatype="number"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">及格线：</label>
					  		<div class="col-sm-4">
					  			<input class="form-control" type="text" name="args[examsetting][passscore]" value="<?php echo $this->tpl_var['exam']['examsetting']['passscore']; ?>" size="4" needle="needle" msg="你要为本考卷设置一个及格分数线" datatype="number"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">题型排序</label>
							<div class="col-sm-9">
								<div class="sortable btn-group">
									<?php if($this->tpl_var['exam']['examsetting']['questypelite']){ ?>
									<?php $eqid = 0;
 foreach($this->tpl_var['exam']['examsetting']['questypelite'] as $key => $qlid){ 
 $eqid++; ?>
									<a class="btn btn-primary questpanel panel_<?php echo $key; ?>"><?php echo $this->tpl_var['questypes'][$key]['questype']; ?><input type="hidden" name="args[examsetting][questypelite][<?php echo $key; ?>]" value="1" class="questypepanelinput" id="panel_<?php echo $key; ?>"/></a>
									<?php } ?>
									<?php } else { ?>
									<?php $qid = 0;
 foreach($this->tpl_var['questypes'] as $key => $questype){ 
 $qid++; ?>
									<a class="btn btn-primary questpanel panel_<?php echo $questype['questid']; ?>"><?php echo $questype['questype']; ?><input type="hidden" name="args[examsetting][questypelite][<?php echo $questype['questid']; ?>]" value="1" class="questypepanelinput" id="panel_<?php echo $questype['questid']; ?>"/></a>
									<?php } ?>
									<?php } ?>
								</div>
								<span class="help-block">拖拽进行题型排序</span>
							</div>
						</div>
						<?php $qid = 0;
 foreach($this->tpl_var['questypes'] as $key => $questype){ 
 $qid++; ?>
						<div class="form-group questpanel panel_<?php echo $questype['questid']; ?>">
							<label class="control-label col-sm-2"><?php echo $questype['questype']; ?>：</label>
							<div class="col-sm-9 form-inline">
								<span class="info">共&nbsp;</span>
								<input id="iselectallnumber_<?php echo $questype['questid']; ?>" type="text" class="form-control" needle="needle" name="args[examsetting][questype][<?php echo $questype['questid']; ?>][number]" value="<?php echo intval($this->tpl_var['exam']['examsetting']['questype'][$questype['questid']]['number']); ?>" size="2" msg="您必须填写总题数"/>
								<span class="info">&nbsp;题，每题&nbsp;</span><input class="form-control" needle="needle" type="text" name="args[examsetting][questype][<?php echo $questype['questid']; ?>][score]" value="<?php echo floatval($this->tpl_var['exam']['examsetting']['questype'][$questype['questid']]['score']); ?>" size="2" msg="您必须填写每题的分值"/>
								<span class="info">&nbsp;分，描述&nbsp;</span><input class="form-control" type="text" name="args[examsetting][questype][<?php echo $questype['questid']; ?>][describe]" value="<?php echo $this->tpl_var['exam']['examsetting']['questype'][$questype['questid']]['describe']; ?>" size="12"/>
							</div>
						</div>
						<?php } ?>
						<div class="form-group">
							<label class="control-label col-sm-2">示范格式</label>
							<div class="col-sm-9">
								<img src="app/exam/styles/image/demo2.png" />
							</div>
						</div>
						<div class="form-group">
							<label for="lesson_video" class="control-label col-sm-2">待导入文件</label>
							<div class="col-sm-9 form-inline">
								<script type="text/template" id="pe-template-uploadfile">
						    		<div class="qq-uploader-selector" qq-drop-area-text="可将图片拖拽至此处上传" style="clear:both;">
						            	<ul class="qq-upload-list-selector list-unstyled pull-left" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
							                <li class="text-center">
												<input size="45" class="form-control qq-edit-filename-selector" type="text" name="uploadfile" tabindex="0" value="">
							                </li>
							            </ul>
							            <ul class="qq-upload-list-selector list-unstyled pull-left" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
							                <li class="text-center">
							                    <input size="45" class="form-control qq-edit-filename-selector" type="text" name="uploadfile" tabindex="0" value="">
							                </li>
							            </ul>
						            	<div class="qq-upload-button-selector col-xs-3">
											<button class="btn btn-primary">上传文件</button>
						                </div>

						            </div>
						        </script>
						        <div class="fineuploader" attr-type="files" attr-template="pe-template-uploadfile" attr-ftype="csv"></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2"></label>
							<div class="col-sm-9">
							  	<button class="btn btn-primary" type="submit">提交</button>
								<input type="hidden" name="submitsetting" value="1"/>
								<input name="examid" type="hidden" value="<?php echo $this->tpl_var['exam']['examid']; ?>">
							</div>
						</div>
					</form>
				</div>
			</div>
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<script>
$.getJSON('index.php?exam-master-basic-getsubjectquestype&subjectid=<?php echo $this->tpl_var['exam']['examsubject']; ?>&'+Math.random(),function(data){$('.questpanel').hide();$('.questypepanelinput').val('0');for(x in data){$('.panel_'+data[x]).show();$('#panel_'+data[x]).val('1');}});
</script>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>
<?php } ?>