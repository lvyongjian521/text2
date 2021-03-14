<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8">开通考场</div>
			<div class="col-1"><span class="iconfont icon-menu hide"></span></div>
		</div>
		<div class="page-content header<?php if($this->tpl_var['basics']['pages']){ ?> footer<?php } ?>">
			<div class="list-box bg">
				<ol>
                    <?php $bid = 0;
 foreach($this->tpl_var['basics']['data'] as $key => $basic){ 
 $bid++; ?>
					<li class="unstyled">
						<div class="col-4x">
							<div class="rows illus">
                                <?php if($this->tpl_var['data']['openbasics'][$basic['basicid']]){ ?><span class="badge">已开通</span> <?php } ?>
								<img src="<?php if($basic['basicthumb']){ ?><?php echo $basic['basicthumb']; ?><?php } else { ?>files/public/img/paper.jpg<?php } ?>">
							</div>
						</div>
						<div class="col-4l">
							<a href="index.php?exam-phone-basics-detail&basicid=<?php echo $basic['basicid']; ?>" class="ajax">
								<div class="rows info">
									<h5 class="title"><?php echo $basic['basic']; ?></h5>
									<p class="intro"><?php echo $this->G->make('strings')->subString($basic['basicdescribe'],72); ?></p>
								</div>
							</a>
						</div>
					</li>
                    <?php } ?>
				</ol>
			</div>
		</div>
        <?php if($this->tpl_var['basics']['pages']){ ?>
		<div class="page-footer">
			<ul class="pagination"><?php echo $this->tpl_var['basics']['pages']; ?></ul>
		</div>
        <?php } ?>
	</div>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>