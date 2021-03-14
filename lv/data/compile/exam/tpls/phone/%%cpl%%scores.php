<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8">成绩单</div>
			<div class="col-1"><span class="iconfont icon-menu"></span></div>
		</div>
		<div class="page-content header<?php if($this->tpl_var['scores']['pages']){ ?> footer<?php } ?>">
			<div class="list-box bg">
				<ol>
					<li class="unstyled">
						<div class="col-5">您的最高分：<span class="text-warning"><?php echo $this->tpl_var['s']['score']; ?></span></div>
						<div class="col-5">您的最好名次：<span class="text-warning"><?php echo $this->tpl_var['s']['index']; ?></span></div>
					</li>
				</ol>
			</div>
			<div class="list-box bg top">
				<ol>
                    <?php $sid = 0;
 foreach($this->tpl_var['scores']['data'] as $key => $score){ 
 $sid++; ?>
					<li class="unstyled">
						<div class="col-8x">
							<h2 class="text-center"><?php echo ($this->tpl_var['page'] - 1)*20 + $sid; ?></h2>
							<div class="rows">
								<div class="more text-center">名</div>
							</div>
						</div>
						<div class="col-8l">
							<div class="rows info">
								<h5 class="title"><?php echo $score['username']; ?></h5>
								<div class="intro">
									<div class="col-6"> <?php echo date('Y-m-d H:i:s',$score['ehstarttime']); ?></div>
									<div class="col-4"> <?php echo $score['ehscore']; ?>分</div>
								</div>
							</div>
						</div>
					</li>
                    <?php } ?>
				</ol>
			</div>
		</div>
		<?php if($this->tpl_var['scores']['pages']){ ?>
		<div class="page-footer">
			<ul class="pagination"><?php echo $this->tpl_var['scores']['pages']; ?></ul>
		</div>
        <?php } ?>
	</div>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>