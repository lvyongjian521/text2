<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
			<div class="col-8"><?php echo $this->tpl_var['course']['cstitle']; ?></div>
			<div class="col-1">
				<span class="iconfont icon-menu"></span>
			</div>
		</div>
		<div class="page-content header">
			<div id="videoPlayer" style="width: 100%;height: 2.4rem"></div>
			<div class="list-box bg" id="videos-list" style="overflow-y: scroll">
				<ol>
					<li class="unstyled">
						<h4 class="title">课程清单</h4>
					</li>
					<?php $cid = 0;
 foreach($this->tpl_var['contents']['data'] as $key => $content){ 
 $cid++; ?>
                    <?php if($content['courseid'] == $this->tpl_var['content']['courseid']){ ?>
					<li class="unstyled smallpadding">
						<a data-target="pagination" href="index.php?course-app-course&csid=<?php echo $this->tpl_var['course']['csid']; ?>&contentid=<?php echo $content['courseid']; ?>">
							<div class="rows">
								<div class="intro">
									<span class="badge primary">播放中</span>
									<?php echo $content['coursetitle']; ?>
								</div>
							</div>
						</a>
					</li>
                    <?php } else { ?>
                    <?php if($this->tpl_var['cdata']['lock'][$content['courseid']]){ ?>
					<li class="unstyled smallpadding">
						<div class="rows">
							<div class="intro">
								<span class="badge danger">待解锁</span>
								<?php echo $content['coursetitle']; ?>
							</div>
						</div>
					</li>
                    <?php } else { ?>
					<li class="unstyled smallpadding">
						<a class="ajax" data-target="pagination" href="index.php?course-app-course&csid=<?php echo $this->tpl_var['course']['csid']; ?>&contentid=<?php echo $content['courseid']; ?>">
							<div class="rows">
								<div class="intro">
									<span class="badge<?php if($this->tpl_var['logs'][$content['courseid']]['logstatus'] == 1){ ?> success<?php } ?>">待播放</span>
                                    <?php echo $content['coursetitle']; ?>
								</div>
							</div>
						</a>
					</li>
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
				</ol>
			</div>
		</div>
	</div>
	<script src="files/public/js/clappr/clappr.min.js"></script>
	<script>
	$(function(){
        clearInterval(pep.recordVideo);
	    var playerElement = document.getElementById("videoPlayer");
        var allowseek = true;
        var player = new Clappr.Player({
            source: '<?php echo $this->tpl_var['content']['course_files']; ?>',
			mute: false,
			width:'100%',
			height:'2.4rem',
            disableVideoTagContextMenu:true
        });
        player.attachTo(playerElement);
        pep.recordVideo = setInterval(function(){
            $.get('index.php?course-phone-course-recordtime&courseid=<?php echo $this->tpl_var['content']['courseid']; ?>&time='+player.getCurrentTime()+'&'+Math.random());
        },10000);
        var listenseek = function () {
            player.once('seek',function(){
                var time = this.getCurrentTime();
                setTimeout(function(){
                    player.seek(time);
                    listenseek();
                },10);
            });
        }
        player.on('play',function(){
            if(allowseek) {
                allowseek = false;
                setTimeout(function () {
                    <?php if($this->tpl_var['logs'][$this->tpl_var['content']['courseid']]['logprogress']){ ?>
                    player.seek(<?php echo $this->tpl_var['logs'][$this->tpl_var['content']['courseid']]['logprogress']; ?>);
                    <?php } ?>
                    listenseek();
                }, 5);
            }
		});
        player.on('ended',function(){
            $.get('index.php?course-phone-course-endstatus&courseid=<?php echo $this->tpl_var['content']['courseid']; ?>&'+Math.random(),function(){
                window.location.reload();
            });
        });
        //player.play();
        $('#videos-list').css('height',$(window).height() - 290);
		pep.allowpre = true;
	});
	</script>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>