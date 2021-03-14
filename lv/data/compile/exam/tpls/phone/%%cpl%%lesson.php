<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8">课后练习</div>
			<div class="col-1"><span class="iconfont icon-menu hide"></span></div>
		</div>
		<div class="page-content header">
            <?php $sid = 0;
 foreach($this->tpl_var['sections'] as $key => $section){ 
 $sid++; ?>
            <?php if($this->tpl_var['basic']['basicknows'][$section['sectionid']]){ ?>
			<div class="list-box bg top">
				<ol>
					<li class="unstyled">
						<h4 class="bigtitle"><?php echo $section['section']; ?></h4>
					</li>
					<?php $kid = 0;
 foreach($this->tpl_var['basic']['basicknows'][$section['sectionid']] as $key => $know){ 
 $kid++; ?>
					<li class="unstyled">
						<a href="index.php?exam-phone-lesson-paper&knowsid=<?php echo $know; ?>" class="ajax">
							<div class="rows info">
								<h5 class="title"><?php echo $this->tpl_var['knows'][$know]['knows']; ?></h5>
								<p class="intro">共 <?php echo array_sum($this->tpl_var['knows'][$know]['knowsnumber']); ?> 题<?php if($this->tpl_var['record'][$know]){ ?>，上次做到第 <?php echo $this->tpl_var['record'][$know]['exernumber']; ?> 题<?php } ?>，点击继续练习</p>
							</div>
						</a>
					</li>
                    <?php } ?>
				</ol>
			</div>
            <?php } ?>
            <?php } ?>
		</div>
	</div>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>