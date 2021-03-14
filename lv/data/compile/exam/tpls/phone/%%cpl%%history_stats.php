<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs" id="pagination">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8">考试成绩</div>
			<div class="col-1"><span class="iconfont icon-menu hide"></span></div>
		</div>
		<div class="page-content header" data-refresh="yes">
			<div class="list-box bg">
				<ol>
                    <?php if($this->tpl_var['data']['currentbasic']['basicexam']['notviewscore']){ ?>
					<li class="unstyled">
						<div class="rows">
							<h3 class="title text-center">等待公布分数</h3>
							<p class="text-center text-danger more">您已经成功交卷，请等待教师统计并公布分数。</p>
						</div>
					</li>
                    <?php } elseif(!$this->tpl_var['eh']['ehstatus']){ ?>
					<li class="unstyled">
						<div class="rows">
							<h3 class="title text-center">等待教师评卷</h3>
							<p class="text-center text-danger">本试卷需要教师评卷，请等待教师评卷完成。</p>
						</div>
					</li>
                    <?php } else { ?>
					<li class="unstyled">
						<div class="rows">
                            <?php if($this->tpl_var['eh']['ehispass']){ ?>
							<h1 class="text-center text-success score">
                                <?php echo intval($this->tpl_var['sessionvars']['examsessionscore']); ?><span class="more">分</span>
							</h1>
							<div class="more text-center text-success">恭喜您通过考试</div>
							<?php } else { ?>
							<h1 class="text-center text-danger score">
                                <?php echo intval($this->tpl_var['sessionvars']['examsessionscore']); ?><span class="more">分</span>
							</h1>
							<div class="more text-center text-danger">很遗憾您未通过本次考试</div>
							<?php } ?>
							<div class="more">
								<p class="text-center"><?php if($this->tpl_var['eh']['ehtype']){ ?>总分：<b class="text-warning"><?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['score']; ?></b>分 合格分数线：<b class="text-warning"><?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['passscore']; ?></b>分<?php } else { ?>正确率：<b><?php echo intval(100 * $this->tpl_var['eh']['ehscore']/$this->tpl_var['allnumber']); ?>%</b><?php } ?> 答卷耗时：<b class="text-warning"><?php if($this->tpl_var['sessionvars']['examsessiontime'] >= 60){ ?><?php if($this->tpl_var['sessionvars']['examsessiontime']%60){ ?><?php echo intval($this->tpl_var['sessionvars']['examsessiontime']/60)+1; ?><?php } else { ?><?php echo intval($this->tpl_var['sessionvars']['examsessiontime']/60); ?><?php } ?>分钟<?php } else { ?><?php echo $this->tpl_var['sessionvars']['examsessiontime']; ?>秒<?php } ?></b></p>
							</div>
						</div>
					</li>
					<li class="unstyled">
						<h5 class="bigtitle">得分详情</h5>
					</li>
					<li class="unstyled">
						<div class="rows">
							<table class="table table-hover table-bordered">
								<tr class="info">
									<th>题型</th>
									<th>总题数</th>
									<th>答对</th>
									<th>总分</th>
									<th>得分</th>
								</tr>
								<?php $nid = 0;
 foreach($this->tpl_var['number'] as $key => $num){ 
 $nid++; ?>
								<?php if($num){ ?>
								<tr>
									<td><?php echo $this->tpl_var['questype'][$key]['questype']; ?></td>
									<td><?php echo $num; ?></td>
									<td><?php echo $this->tpl_var['right'][$key]; ?></td>
									<td><?php echo number_format($num*$this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questype'][$key]['score'],1); ?></td>
									<td><?php echo number_format($this->tpl_var['score'][$key],1); ?></td>
								</tr>
								<?php } ?>
								<?php } ?>
								<tr>
									<td colspan="5" align="center">
										共<b class="text-warning"><?php echo $this->tpl_var['allnumber']; ?></b>题 ，做对<b class="text-warning"><?php echo $this->tpl_var['allright']; ?></b>题，得<b class="text-warning"><?php echo intval($this->tpl_var['sessionvars']['examsessionscore']); ?>分</b>
									</td>
								</tr>
							</table>
						</div>
					</li>
					<li class="unstyled">
						<h5 class="bigtitle">知识点分析</h5>
					</li>
					<li class="unstyled">
						<div class="rows">
							<table class="table table-hover table-bordered">
								<tr class="info">
									<th>知识点</th>
									<th>总题数</th>
									<th>答对</th>
									<th>正确率</th>
								</tr>
								<?php $sid = 0;
 foreach($this->tpl_var['stats'] as $key => $stat){ 
 $sid++; ?>
								<?php if($stat){ ?>
								<tr>
									<td><?php echo $stat['knows']; ?></td>
									<td><?php echo intval($stat['number']); ?></td>
									<td><?php echo intval($stat['right']); ?></td>
									<td><?php echo number_format(100 * $stat['right']/$stat['number'],2); ?>%</td>
								</tr>
								<?php } ?>
								<?php } ?>
							</table>
						</div>
					</li>
					<?php if($this->tpl_var['data']['currentbasic']['basicexam']['model'] != 2){ ?>
					<li class="unstyled">
						<div class="rows">
							<div class="col-3x text-center">
								<a class="btn danger ajax" href="index.php?exam-phone-history-wrongs&ehid=<?php echo $this->tpl_var['eh']['ehid']; ?>">错题重做</a>
							</div>
							<div class="col-3x text-center">
								<a class="btn primary ajax" href="index.php?exam-phone-history-view&ehid=<?php echo $this->tpl_var['eh']['ehid']; ?>">查看详细</a>
							</div>
							<div class="col-3x text-center">
								<a class="btn ajax" href="index.php?exam-phone-history&ehtype=<?php echo $this->tpl_var['eh']['ehtype']; ?>">考试记录</a>
							</div>
						</div>
					</li>
					<?php } ?>
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
