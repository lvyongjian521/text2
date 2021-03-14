<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8">正式考试</div>
			<div class="col-1"><a href="index.php?exam-phone-exam-history" class="ajax"><span class="iconfont icon-menu"></span></a></div>
		</div>
		<div class="page-content header">
			<div class="list-box bg">
				<ol>
					<li>
						<span class="rows"><span class="intro">
						考场开启时间<?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']){ ?>
                        	<?php echo date('Y-m-d H:i',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start']); ?> - <?php echo date('Y-m-d H:i',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']); ?><?php } else { ?>不限<?php } ?>&nbsp;&nbsp;
							限考次数 <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?><?php echo $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']; ?><?php } else { ?>不限<?php } ?>
						</span></span>
					</li>
					<li><span class="rows"><span class="intro">点击考试名称或开始考试按钮进入答题界面，考试开始计时。</span></span></li>
					<li><span class="rows"><span class="intro">在考试过程中，您可以通过左下方的考试时间来掌握自己的做题时间。</span></span></li>
					<li><span class="rows"><span class="intro">系统自动记录考试的考试记录，学员考试结束后可在本页点击右上方进入“答题记录”进行查看。</span></span></li>
				</ol>
			</div>
			<div class="list-box bg top">
				<ol>
                    <?php if($this->tpl_var['intime']){ ?>
                    <?php if($this->tpl_var['sessionvars']){ ?>
					<li class="unstyled">
						<div class="rows info">
							<h5 class="title">意外续考</h5>
							<div class="intro">
								系统检测到您曾经在<?php echo date('Y-m-d H:i:s',$this->tpl_var['sessionvars']['examsessionstarttime']); ?>开启了一场未完成的考试，试卷名称为《<?php echo $this->tpl_var['sessionvars']['examsession']; ?>》，点击继续考试可以进行续考。
							</div>
							<div class="intro">
								<div class="col-3x"> 总分 <?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['score']; ?> 分</div>
								<div class="col-3x"> 及格分 <?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['passscore']; ?> 分</div>
								<div class="col-3x"> 限时 <?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['examtime']; ?> 分钟</div>
							</div>
						</div>
					</li>
					<li class="unstyled">
						<div class="rows">
							<div class="col-5 text-center">
								<a class="btn primary ajax" action-before="clearStorage" href="index.php?exam-phone-recover">继续考试</a>
							</div>
							<div class="col-5 text-center">
								<a href="index.php?exam-phone-recover-clearexamsession" message="放弃考试会删除此次考试会话并不能恢复，确认要放弃吗？" class="btn confirm">放弃考试</a>
							</div>
						</div>
					</li>

					<?php } else { ?>

                    <?php if($this->tpl_var['data']['currentbasic']['basicexam']['selectrule']){ ?>
					<li class="unstyled">
						<div class="rows">
                            <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['all'] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
							<div class="text-center intro"><a class="btn" href="javascript:;">您的考试次数已经用完</a></div>
                            <?php } else { ?>
							<div class="text-center intro"><a class="ajax btn primary" href="index.php?exam-phone-exam-selectquestions" action-before="clearStorage">开始考试</a></div>
                            <?php } ?>
						</div>
					</li>
                    <?php } else { ?>
					<?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
					<li class="unstyled">
						<a action-before="clearStorage" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax">
							<div class="rows info">
								<h5 class="title"><?php echo $exam['exam']; ?></h5>
								<div class="intro">
									<div class="col-3x"> 总分 <?php echo $exam['examsetting']['score']; ?> 分</div>
									<div class="col-3x"> 及格分 <?php echo $exam['examsetting']['passscore']; ?> 分</div>
									<div class="col-3x"> 限时 <?php echo $exam['examsetting']['examtime']; ?> 分钟</div>
								</div>
							</div>
						</a>
					</li>
                    <?php } ?>
                    <?php } ?>
					<?php } ?>
					<?php } else { ?>
					<li class="unstyled">
						<div class="rows text-center">
							<a class="btn danger">未在考试时间内，请等待管理员开启考试！</a>
						</div>
					</li>
					<?php } ?>
				</ol>
			</div>
		</div>
	</div>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>