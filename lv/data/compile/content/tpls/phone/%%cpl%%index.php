<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8">新闻资讯</div>
			<div class="col-1"><span class="iconfont icon-menu"></span></div>
		</div>
		<div class="page-content header">
            <?php $cid = 0;
 foreach($this->tpl_var['contents'] as $key => $contents){ 
 $cid++; ?>
			<div class="list-box bg top">
				<ol>
					<li class="unstyled">
						<?php $cat = $this->tpl_var['catids'][$key]; ?>
						<h4 class="bigtitle"><?php echo $cat['catname']; ?></h4>
					</li>
                    <?php $cid = 0;
 foreach($contents['data'] as $key => $content){ 
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
					<li class="unstyled">
						<div class="rows">
							<a class="ajax" href="index.php?content-phone-category&catid=<?php echo $cat['catid']; ?>">
								<div class="intro text-right">
									更多消息 &gt;&gt;
								</div>
							</a>
						</div>
					</li>
				</ol>
			</div>
            <?php } ?>
		</div>
	</div>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>