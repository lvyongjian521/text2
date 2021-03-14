<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8">模拟考试</div>
			<div class="col-1"><span class="iconfont icon-menu hide"></span></div>
		</div>
		<div class="page-content header">
			<div class="list-box bg">
				<ol>
                    <?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
					<li class="unstyled">
						<a action-before="clearStorage" href="index.php?exam-phone-exampaper-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax">
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
				</ol>
			</div>
		</div>
	</div>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>