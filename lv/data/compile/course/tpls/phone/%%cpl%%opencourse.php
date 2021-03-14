<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8">开通课程</div>
			<div class="col-1"><span class="iconfont icon-menu"></span></div>
		</div>
		<div class="page-content header">
			<div class="list-box bg">
				<ol>
					<li class="unstyled">
						<div class="col-4x">
							<div class="rows illus">
                                <?php if($this->tpl_var['isopen']){ ?><span class="badge">已开通</span> <?php } ?>
								<img src="<?php if($this->tpl_var['course']['csthumb']){ ?><?php echo $this->tpl_var['course']['csthumb']; ?><?php } else { ?>files/public/img/paper.jpg<?php } ?>">
							</div>
						</div>
						<div class="col-4x">
							<div class="rows">
								<h4 class="title text-center"><?php echo $this->tpl_var['course']['cstitle']; ?></h4>
								<?php if($this->tpl_var['isopen']){ ?><p class="intro text-center">到期时间：<?php echo date('Y-m-d',$this->tpl_var['isopen']['ocendtime']); ?></p><?php } ?>
							</div>
						</div>
					</li>
					<li class="unstyled">
						<div class="rows info">
							<p class="intro"><?php echo $this->tpl_var['course']['csdescribe']; ?></p>
						</div>
					</li>
                    <?php if($this->tpl_var['isopen']){ ?>
					<li class="unstyled">
						<div class="rows text-center">
							<a class="ajax btn primary" href="index.php?course-phone-course&csid=<?php echo $this->tpl_var['course']['csid']; ?>">开始学习</a>
						</div>
					</li>
                    <?php } else { ?>
                    <?php if($this->tpl_var['course']['csdemo']){ ?>
					<li class="unstyled">
						<div class="rows text-center">
							<a class="btn primary confirm" message="确定要开通吗？" href="index.php?course-phone-course-opencourse&opencs=1&csid=<?php echo $this->tpl_var['course']['csid']; ?>">免费开通</a>
						</div>
					</li>
                    <?php } else { ?>
                    <?php if($this->tpl_var['price']){ ?>

                    <?php $pid = 0;
 foreach($this->tpl_var['price'] as $key => $p){ 
 $pid++; ?>
					<li class="unstyled">
						<a class="confirm" message="确定要开通吗？" href="index.php?course-phone-course-opencourse&opencs=1&csid=<?php echo $this->tpl_var['course']['csid']; ?>&opentype=<?php echo $key; ?>">
							<div class="rows info">
                                <?php echo $p['price']; ?>积分兑换<?php echo $p['time']; ?>天
								<span class="pull-right"><em class="iconfont icon-right iconmenu"></em></span>
							</div>
						</a>
					</li>
                    <?php } ?>
					<li class="unstyled"></li>

                    <?php } else { ?>
					<li class="unstyled">
						<div class="rows text-center">
							<a class="btn danger">请管理员设置考场价格</a>
						</div>
					</li>
                    <?php } ?>
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