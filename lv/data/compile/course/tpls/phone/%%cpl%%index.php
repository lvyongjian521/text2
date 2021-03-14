<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8">我的课程</div>
			<div class="col-1">
				<a href="index.php?course-phone-index-lists" class="ajax">
					<span class="iconfont icon-plus-circle"></span>
				</a>
			</div>
		</div>
		<div class="page-content header<?php if($this->tpl_var['contents']['pages']){ ?> footer<?php } ?>">
			<div class="list-box bg">
				<ol>
                    <?php $cid = 0;
 foreach($this->tpl_var['contents']['data'] as $key => $content){ 
 $cid++; ?>
					<li class="unstyled">
						<div class="col-4x">
							<div class="rows illus">
								<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-course&csid=<?php echo $content['csid']; ?>" class="ajax">
									<img src="<?php if($content['csthumb']){ ?><?php echo $content['csthumb']; ?><?php } else { ?>files/public/img/paper.jpg<?php } ?>">
								</a>
							</div>
						</div>
						<div class="col-4l">
							<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-course&csid=<?php echo $content['csid']; ?>" class="ajax">
								<div class="rows info">
									<h5 class="title"><?php echo $content['cstitle']; ?></h5>
									<p class="intro"><?php echo $this->G->make('strings')->subString($content['csdescribe'],42); ?></p>
								</div>
							</a>
						</div>
					</li>
                    <?php } ?>
				</ol>
			</div>
		</div>
	</div>
    <?php if($this->tpl_var['contents']['pages']){ ?>
	<div class="page-footer">
		<ul class="pagination"><?php echo $this->tpl_var['contents']['pages']; ?></ul>
	</div>
    <?php } ?>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>