<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2 leftmenu">
                <?php $this->_compileInclude('menu'); ?>
			</div>
			<div id="datacontent">
                <?php } ?>
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a></li>
                            <?php if($this->tpl_var['catid']){ ?>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-seminars">专题管理</a></li>
							<li class="active"><?php echo $this->tpl_var['categories'][$this->tpl_var['catid']]['catname']; ?></li>
                            <?php } else { ?>
							<li class="active">专题管理</li>
                            <?php } ?>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:20px;margin-bottom:0px;overflow:visible">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="index.php?seminar-master-tpls-style">风格</a>
						</li>
						<li>
							<a href="index.php?seminar-master-tpls-layout">通栏</a>
						</li>
						<li>
							<a href="index.php?seminar-master-tpls-slider">轮播</a>
						</li>
						<li>
							<a href="index.php?seminar-master-tpls-lists">列表</a>
						</li>
						<li>
							<a href="index.php?seminar-master-tpls-block">图文</a>
						</li>
						<li>
							<a href="index.php?seminar-master-tpls-plugin">插件</a>
						</li>
						<span class="pull-right">
							<a class="btn btn-primary" href="index.php?seminar-master-tpls-add&type=style">添加风格</a>
						</span>
					</ul>
					<div class="tab-content" style="margin-top: 10px;">
						<div class="tab-pane active">
							<table class="table table-hover table-bordered">
								<thead>
								<tr class="info">
									<th width="40">ID</th>
									<th width="120">名称</th>
									<th>说明</th>
									<th width="140">操作</th>
								</tr>
								</thead>
								<tbody>
								<?php $tid = 0;
 foreach($this->tpl_var['tpls']['data'] as $key => $tpl){ 
 $tid++; ?>
									<tr>
										<td><?php echo $tpl['stplid']; ?></td>
										<td><?php echo $tpl['stplname']; ?></td>
										<td><?php echo $tpl['stpldescribe']; ?></td>
										<td>
											<div class="btn-group">
												<a class="btn" href="index.php?seminar-master-tpls-modify&stplid=<?php echo $tpl['stplid']; ?>"><em class="glyphicon glyphicon-edit"></em></a>
												<a class="btn confirm" href="index.php?seminar-master-tpls-del&stplid=<?php echo $tpl['stplid']; ?>"><em class="glyphicon glyphicon-remove"></em></a>
											</div>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
							<ul class="pagination pull-right">
                                <?php echo $this->tpl_var['tpls']['pages']; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
            <?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>
<?php } ?>