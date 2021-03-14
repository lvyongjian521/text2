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
		<div class="page-content header">
			<div class="list-box bg">
				<ol>
					<li class="unstyled">
						<h4 class="title text-center"><?php echo $this->tpl_var['content']['contenttitle']; ?></h4>
					</li>
					<li class="unstyled">
						<div class="rows">
							发布人：<?php echo $this->tpl_var['content']['contentusername']; ?> &nbsp; 阅读量：<?php echo $this->tpl_var['content']['contentview']; ?>
						</div>
					</li>
                    <li class="unstyled">
						<div class="rows">
                            <?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['content']['contenttext'])); ?>
						</div>
					</li>
                </ol>
			</div>
		</div>
	</div>
	<script>
		$(function(){
			$.get("index.php?content-phone-content-setview&contentid=<?php echo $this->tpl_var['content']['contentid']; ?>&"+Math.random());
		});
	</script>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>