<?php $this->_compileInclude('header'); ?>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="pages">
            <?php $this->_compileInclude('examnav'); ?>
			<div class="content">
				<div class="col-xs-12">
					<div class="content-box padding">
						<h2 class="title">
							正式考试
							<a href="index.php?exam-app-exam-history" class="badge pull-right">考试记录</a>
						</h2>
						<ul class="list-unstyled list-img">
							<li class="border padding">
								<div class="intro">
									<p>本考场开启时间 <?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']){ ?><?php echo date('Y-m-d H:i:s',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start']); ?> - <?php echo date('Y-m-d H:i:s',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']); ?><?php } else { ?>不限<?php } ?> ； 考试次数 <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?><?php echo $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']; ?><?php } else { ?>不限<?php } ?> ； 抽卷规则 <?php if($this->tpl_var['data']['currentbasic']['basicexam']['selectrule']){ ?>系统随机抽卷<?php } else { ?>用户手选试卷<?php } ?>。</p>

									<ul class="list-unstyled">
										<li><b>1、</b>点击考试名称按钮进入答题界面，考试开始计时。</li>
										<li><b>2、</b>在随机考试过程中，您可以通过顶部的考试时间来掌握自己的做题时间。</li>
										<li><b>3、</b>提交试卷后，可以通过“查看答案和解析”功能进行总结学习。</li>
										<li><b>4、</b>系统自动记录模拟考试的考试记录，学员考试结束后可以进入“答题记录”功能进行查看。</li>
									</ul>
								</div>
							</li>
							<?php if($this->tpl_var['intime']){ ?>
                            <?php if($this->tpl_var['sessionvars']){ ?>
							<li class="border padding">
								<h4 class="shorttitle">意外续考</h4>
								<div class="intro">
									<div class="desc">
										<p>系统检测到您曾经在<?php echo date('Y-m-d H:i:s',$this->tpl_var['sessionvars']['examsessionstarttime']); ?>开启了一场未完成的考试，试卷名称为《<?php echo $this->tpl_var['sessionvars']['examsession']; ?>》，点击继续考试可以进行续考。</p>
										<p class="toolbar">
											<a class="badge">总分：<?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['score']; ?> 分</a>
											<a class="badge">及格分：<?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['passscore']; ?> 分</a>
											<a class="badge">时间：<?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['examtime']; ?> 分钟</a>
										</p>
										<div class="toolbar">
											<div class="pull-right more">
												<a href="index.php?exam-app-recover" class="btn btn-primary ajax">继续考试</a>&nbsp;&nbsp;
												<a href="index.php?exam-app-recover-clearexamsession" class="btn btn-danger confirm" msg="放弃考试会删除此次考试会话并不能恢复，确认要放弃吗？">放弃考试</a>
											</div>
										</div>
									</div>
								</div>
							</li>
                            <?php } else { ?>
                            <?php if($this->tpl_var['data']['currentbasic']['basicexam']['selectrule']){ ?>
							<li class="border padding">
								<div class="intro">
                                    <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['all'] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
									<div class="text-center"><a class="btn" href="javascript:;">您的考试次数已经用完</a></div>
                                    <?php } else { ?>
									<div class="text-center"><a class="ajax btn btn-primary" href="index.php?exam-app-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" action-before="clearStorage">开始考试</a></div>
                                    <?php } ?>
								</div>
							</li>
							<?php } else { ?>
							<?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
							<li class="border padding">
								<h4 class="shorttitle"><?php echo $exam['exam']; ?></h4>
								<div class="intro">
									<div class="desc">
										<p class="toolbar">
											<a class="badge">总分：<?php echo $exam['examsetting']['score']; ?> 分</a>
											<a class="badge">及格分：<?php echo $exam['examsetting']['passscore']; ?> 分</a>
											<a class="badge">时间：<?php echo $exam['examsetting']['examtime']; ?> 分钟</a>
										</p>
										<p class="toolbar">
                                            <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['all'] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
											<a class="btn btn-info pull-right more" href="javascript:;">您的考试次数已经用完</a>
											<?php } else { ?>
											<a action-before="clearStorage" href="index.php?exam-app-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax btn btn-info pull-right more">开始考试</a>
                                        	<?php } ?>
										</p>
									</div>
								</div>
							</li>
                            <?php } ?>
							<?php } ?>
                            <?php } ?>
							<?php } else { ?>
							<li class="border padding">
								<div class="intro text-center">
									目前不在考试时间范围内，请等待考试开启！
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
            <?php $this->_compileInclude('footer'); ?>
		</div>
	</div>
</div>
</body>
</html>