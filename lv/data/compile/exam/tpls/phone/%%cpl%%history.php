<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8">考试记录（<?php if($this->tpl_var['ehtype'] == 0){ ?>强化训练<?php } elseif($this->tpl_var['ehtype'] == 1){ ?>模拟考试<?php } elseif($this->tpl_var['ehtype'] == 2){ ?>正式考试<?php } ?>）</div>
			<div class="col-1" onclick="javascript:pep.mask.show('hismenu');"><span class="iconfont icon-menu"></span></div>
		</div>
		<div class="page-content header<?php if($this->tpl_var['exams']['pages']){ ?> footer<?php } ?>">
			<div class="list-box bg">
				<ol>
                    <?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
					<a href="index.php?exam-phone-history-stats&ehid=<?php echo $exam['ehid']; ?>" class="ajax">
					<li class="unstyled">
						<div class="col-8x">
                            <?php if(!$exam['ehstatus'] && $exam['ehdecide']){ ?>
							<h4>待评</h4>
							<?php } else { ?>
							<h2 class="text-center"><?php echo intval($exam['ehscore']); ?></h2>
							<div class="rows">
								<div class="more text-center">分</div>
							</div>
                            <?php } ?>
						</div>
						<div class="col-8l">
							<div class="rows info">
								<h5 class="title"><?php echo $exam['ehexam']; ?></h5>
								<div class="intro">
									<div class="col-4"> <?php echo date('Y-m-d',$exam['ehstarttime']); ?></div>
									<div class="col-4"> 用时：<?php if($exam['ehtime'] >= 60){ ?><?php if($exam['ehtime']%60){ ?><?php echo intval($exam['ehtime']/60)+1; ?><?php } else { ?><?php echo intval($exam['ehtime']/60); ?><?php } ?>分<?php } else { ?><?php echo $exam['ehtime']; ?>秒<?php } ?></div>
									<?php if(!$exam['ehstatus'] && $exam['ehdecide']){ ?>
									<div class="col-2">待评分</div>
									<?php } else { ?>
									<?php if($exam['ehispass']){ ?>
									<div class="col-2 text-success">及格</div>
									<?php } else { ?>
									<div class="col-2 text-danger">不及格</div>
									<?php } ?>
									<?php } ?>
								</div>
							</div>
						</div>
					</li>
					</a>
                    <?php } ?>
				</ol>
			</div>
		</div>
        <?php if($this->tpl_var['exams']['pages']){ ?>
		<div class="page-footer">
			<ul class="pagination"><?php echo $this->tpl_var['exams']['pages']; ?></ul>
		</div>
        <?php } ?>
	</div>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>