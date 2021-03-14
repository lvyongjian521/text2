<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8"><?php echo $this->tpl_var['cat']['catname']; ?></div>
			<div class="col-1"><span class="iconfont icon-menu"></span></div>
		</div>
		<div class="page-content header<?php if($this->tpl_var['contents']['pages']){ ?> footer<?php } ?>">
			<div class="list-box bg top">
				<ol>
                    <?php $cid = 0;
 foreach($this->tpl_var['contents']['data'] as $key => $content){ 
 $cid++; ?>
					<li class="unstyled">
						<div class="rows">
							<a class="ajax" href="index.php?content-phone-content&contentid=<?php echo $content['contentid']; ?>">
								<div class="intro">
                                    <?php echo $content['contenttitle']; ?>
								</div>
							</a>
						</div>
					</li>
                    <?php } ?>
				</ol>
			</div>
		</div>
        <?php if($this->tpl_var['contents']['pages']){ ?>
		<div class="page-footer">
			<ul class="pagination"><?php echo $this->tpl_var['contents']['pages']; ?></ul>
		</div>
        <?php } ?>
	</div>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>