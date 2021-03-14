<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs">
		<div class="page-header">
			<div class="col-1"><span class="iconfont icon-left"></span></div>
			<div class="col-8"><?php echo $this->tpl_var['sessionvars']['examsession']; ?></div>
			<div class="col-1"><span class="iconfont icon-menu hide"></span></div>
		</div>
		<div class="page-content header footer" style="height: 100%;overflow: hidden" data-callback="outexam">
			<form method="post" action="index.php?exam-phone-exercise-score" class="list-box bg" style="height: 100%;" id="exampaper">
				<input type="hidden" name="insertscore" value="1"/>
				<input type="hidden" name="token" value="<?php echo $this->tpl_var['sessionvars']['examsessiontoken']; ?>"/>
				<div class="swiper-container">
					<div class="swiper-wrapper">
                        <?php $oid = 0; ?>
                        <?php $qcid = 0; ?>
                        <?php $qid = 0;
 foreach($this->tpl_var['questype'] as $key => $quest){ 
 $qid++; ?>
                        <?php if($quest){ ?>
                        <?php $quest = $quest['questid']; ?>
                        <?php if($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] || $this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest]){ ?>
                        <?php $oid++; ?>
                        <?php $tid = 0; ?>
                        <?php $qnid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] as $key => $question){ 
 $qnid++; ?>
                        <?php $tid++; ?>
                        <?php $qcid++; ?>
						<div class="swiper-slide" style="overflow-y: scroll">
							<ol>
								<li class="unstyled">
									<h4 class="title">
										第 <?php echo $qcid; ?> 题 【 <?php echo $this->tpl_var['questype'][$quest]['questype']; ?> 】
									</h4>
								</li>
								<li class="unstyled">
									<div class="rows">
										<p><?php echo html_entity_decode($this->ev->stripSlashes($question['question'])); ?></p>
									</div>
								</li>
								<li class="unstyled">
									<div class="rows">
										<p><?php echo html_entity_decode($this->ev->stripSlashes($question['questionselect'])); ?></p>
									</div>
								</li>
                                <?php if($this->tpl_var['questype']['questsort']){ ?>
								<li class="unstyled">
									<textarea rows="4" id="editor<?php echo $question['questionid']; ?>" name="question[<?php echo $question['questionid']; ?>]" rel="<?php echo $question['questionid']; ?>"><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']])); ?></textarea>
								</li>
                                <?php } else { ?>
								<li class="unstyled">
									<div class="rows">
                                        <?php if($this->tpl_var['questype'][$quest]['questchoice'] == 1 || $this->tpl_var['questype'][$quest]['questchoice'] == 4){ ?>
                                        <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
                                        <?php if($key == $question['questionselectnumber']){ ?>
                                        <?php break;; ?>
                                        <?php } ?>
										<label class="inline"><input type="radio" name="question[<?php echo $question['questionid']; ?>]" rel="<?php echo $question['questionid']; ?>" value="<?php echo $so; ?>" <?php if($so == $this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']]){ ?>checked<?php } ?>/><span class="selector"><?php echo $so; ?></span> </label>
                                        <?php } ?>
                                        <?php } elseif($this->tpl_var['questype'][$quest]['questchoice'] == 5){ ?>
										<input type="text" name="question[<?php echo $question['questionid']; ?>]" placeholder="点击此处填写答案" value="<?php echo $this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']]; ?>" rel="<?php echo $question['questionid']; ?>"/>
										<label class="inline pull-right"><button class="btn btn-primary badge finish fill" rel="<?php echo $question['questionid']; ?>">答题完毕</button></label>
                                        <?php } else { ?>
                                        <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
                                        <?php if($key >= $question['questionselectnumber']){ ?>
                                        <?php break;; ?>
                                        <?php } ?>
										<label class="inline"><input type="checkbox" name="question[<?php echo $question['questionid']; ?>][<?php echo $key; ?>]" rel="<?php echo $question['questionid']; ?>" value="<?php echo $so; ?>" <?php if(in_array($so,$this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']])){ ?>checked<?php } ?>/><span class="selector"><?php echo $so; ?></span> </label>
                                        <?php } ?>
                                        <?php } ?>
									</div>
								</li>
                                <?php } ?>
							</ol>
						</div>
                        <?php } ?>
                        <?php $qrid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest] as $key => $questionrow){ 
 $qrid++; ?>
                        <?php $tid++; ?>
                        <?php $qid = 0;
 foreach($questionrow['data'] as $key => $question){ 
 $qid++; ?>
                        <?php $qcid++; ?>
						<div class="swiper-slide" style="overflow-y: scroll">
							<ol>
								<li class="unstyled">
									<h4 class="title">
										第 <?php echo $qcid; ?> 题
									</h4>
								</li>
								<li class="unstyled">
									<div class="rows">
										<p><?php echo html_entity_decode($this->ev->stripSlashes($questionrow['qrquestion'])); ?></p>
									</div>
								</li>
								<li class="unstyled">
									<div class="rows">
										<p><?php echo html_entity_decode($this->ev->stripSlashes($question['question'])); ?></p>
									</div>
								</li>
								<li class="unstyled">
									<div class="rows">
										<p><?php echo html_entity_decode($this->ev->stripSlashes($question['questionselect'])); ?></p>
									</div>
								</li>
                                <?php if($this->tpl_var['questype'][$question['questiontype']]['questsort']){ ?>
								<li class="unstyled">
									<textarea rows="4" id="editor<?php echo $question['questionid']; ?>" name="question[<?php echo $question['questionid']; ?>]" rel="<?php echo $question['questionid']; ?>"><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']])); ?></textarea>
								</li>
                                <?php } else { ?>
								<li class="unstyled">
									<div class="rows">
                                        <?php if($this->tpl_var['questype'][$question['questiontype']][$quest]['questchoice'] == 1 || $this->tpl_var['questype'][$question['questiontype']][$quest]['questchoice'] == 4){ ?>
                                        <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
                                        <?php if($key == $question['questionselectnumber']){ ?>
                                        <?php break;; ?>
                                        <?php } ?>
										<label class="inline"><input type="radio" name="question[<?php echo $question['questionid']; ?>]" rel="<?php echo $question['questionid']; ?>" value="<?php echo $so; ?>" <?php if($so == $this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']]){ ?>checked<?php } ?>/><span class="selector"><?php echo $so; ?></span> </label>
                                        <?php } ?>
                                        <?php } elseif($this->tpl_var['questype'][$question['questiontype']][$quest]['questchoice'] == 5){ ?>
										<input type="text" name="question[<?php echo $question['questionid']; ?>]" placeholder="点击此处填写答案" value="<?php echo $this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']]; ?>" rel="<?php echo $question['questionid']; ?>"/>
										<label class="inline pull-right"><button class="btn btn-primary badge finish fill" rel="<?php echo $question['questionid']; ?>">答题完毕</button></label>
                                        <?php } else { ?>
                                        <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
                                        <?php if($key >= $question['questionselectnumber']){ ?>
                                        <?php break;; ?>
                                        <?php } ?>
										<label class="inline"><input type="checkbox" name="question[<?php echo $question['questionid']; ?>][<?php echo $key; ?>]" rel="<?php echo $question['questionid']; ?>" value="<?php echo $so; ?>" <?php if(in_array($so,$this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']])){ ?>checked<?php } ?>/><span class="selector"><?php echo $so; ?></span> </label>
                                        <?php } ?>
                                        <?php } ?>
									</div>
								</li>
                                <?php } ?>
							</ol>
						</div>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
					</div>
				</div>
			</form>
		</div>
		<div class="page-content header footer hide">
			<div class="list-box bg">
				<ol>
                    <?php $oid = 0; ?>
                    <?php $qmid = 0; ?>
                    <?php $qid = 0;
 foreach($this->tpl_var['questype'] as $key => $quest){ 
 $qid++; ?>
                    <?php if($quest){ ?>
                    <?php $quest = $quest['questid']; ?>
                    <?php if($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] || $this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest]){ ?>
                    <?php if($this->tpl_var['data']['currentbasic']['basicexam']['changesequence']){ ?>
                    <?php shuffle($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest]);; ?>
                    <?php shuffle($this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest]);; ?>
                    <?php } ?>
                    <?php $oid++; ?>
					<li class="unstyled">
						<div class="rows">
							<h4 class="title text-center"><?php echo $this->tpl_var['questype'][$quest]['questype']; ?></h4>
                            <?php $tid = 0; ?>
                            <?php $qnid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] as $key => $question){ 
 $qnid++; ?>
                            <?php $tid++; ?>
                            <?php $qmid++; ?>
							<div class="col-2">
								<a data-index="<?php echo $qmid; ?>" data-questionid="<?php echo $question['questionid']; ?>" id="sign_<?php echo $question['questionid']; ?>" class="btn order<?php if($this->tpl_var['sessionvars']['examsessionsign'][$question['questionid']]){ ?> danger<?php } ?>"><?php echo $tid; ?></a>
							</div>
                            <?php } ?>
                            <?php $qrid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest] as $key => $questionrow){ 
 $qrid++; ?>
                            <?php $tid++; ?>
                            <?php $did = 0;
 foreach($questionrow['data'] as $key => $question){ 
 $did++; ?>
                            <?php $qmid++; ?>
							<div class="col-2">
								<a data-index="<?php echo $qmid; ?>" data-questionid="<?php echo $question['questionid']; ?>" id="sign_<?php echo $question['questionid']; ?>" class="btn order<?php if($this->tpl_var['sessionvars']['examsessionsign'][$question['questionid']]){ ?> danger<?php } ?>"><?php echo $tid; ?>-<?php echo $did; ?></a>
							</div>
                            <?php } ?>
                            <?php } ?>
						</div>
					</li>
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
				</ol>
			</div>
		</div>
		<div class="page-footer">
			<div class="col-3l">
				<ol class="pagination">
					<li class="col-3x">
						<h2 class="text-center timer">
							<span id="exampaper-timer_h">00</span>:<span id="exampaper-timer_m">00</span>:<span id="exampaper-timer_s">00</span>
						</h2>
					</li>
					<li class="col-3x text-center">
						<button class="subpaperbtn block">交卷</button>
					</li>
				</ol>
			</div>
			<div class="col-2s iconmenu" id="card">
				<span class="iconfont icon-detail"></span><br />题卡
			</div>
			<div class="col-2s iconmenu" id="sign">
				<span class="iconfont icon-pointmap"></span><br />标记
			</div>
		</div>
	</div>
	<script>
        function outexam(){
            saveanswer();
            pep.mask.show(null,{message:'请先交卷'});
            history.pushState({id:'index.php?exam-phone-exercise-paper'},'<?php echo $this->tpl_var['sessionvars']['examsession']; ?>','index.php?exam-phone-exercise-paper');
        }
        $(function(){
            $.get('index.php?exam-phone-index-ajax-lefttime&rand'+Math.random(),function(data){
                var setting = {
                    time:<?php echo $this->tpl_var['sessionvars']['examsessiontime']; ?>,
                    hbox:$("#exampaper-timer_h"),
                    mbox:$("#exampaper-timer_m"),
                    sbox:$("#exampaper-timer_s"),
                    finish:function(){
                        $('#exampaper').submit();
                    }
                }
                setting.lefttime = parseInt(data);
                countdown(setting);
            });
            pep.saveAnswer = setInterval(saveanswer,120000);
            $('.subpaperbtn').on('click',function(){
                pep.mask.show('confirm',{message:'确定要交卷吗？'},function(){
                    $('#exampaper').submit();
                });
            });
            $('#card').on('click',function(){
                $('.page-content').toggleClass('hide');
                $(this).toggleClass('active');
            });
            var mySwiper = new Swiper ('.swiper-container',{
                on:{
                    init:function(){
                        if($('.order:first').hasClass('danger'))
                        {
                            $('#sign').addClass('active');
                        }
                        else
                        {
                            $('#sign').removeClass('active');
                        }
                    },
                    slideChange: function(){
                        if($('.order').eq(this.activeIndex).hasClass('danger'))
                        {
                            $('#sign').addClass('active');
                        }
                        else
                        {
                            $('#sign').removeClass('active');
                        }
                    }
                }
            });
            $('.order').on('click',function(){
                $('.page-content').toggleClass('hide');
                $('#card').toggleClass('active');
                mySwiper.slideTo($(this).attr('data-index')-1);
            });
            $('#sign').on('click',function(){
                var that = this;
                var id = $('.order').eq(mySwiper.activeIndex).attr('data-questionid');
                $.get("index.php?exam-phone-index-ajax-sign&questionid="+id+'&'+Math.random(),function(data){
                    if(parseInt(data) == 1){
                        $(that).addClass('active');
                        $('#sign_'+id).addClass('danger');
                    }else{
                        $(that).removeClass('active');
                        $('#sign_'+id).removeClass('danger');
                    }
                });
            });
            try{
                initData = $.parseJSON(storage.getItem('questions'));
                if(!initData)initData = new Object();
                for(k in initData){
                    var v = initData[k];
                    $('#time_'+k).val(v['time']);
                    $(":radio[rel="+k+"]").each(function(){
                        var that = $(this);
                        if(v['value'] == that.val()){
                            that.attr("checked",true);
                        }
                    });
                    $("#exampaper :text[rel="+k+"],#exampaper textarea[rel="+k+"]").each(function(){
                        var that = $(this);
                        that.val(v['value']);
                        if(that.hasClass('jckeditor')){
                            CKEDITOR.instances[that.attr('id')].setData(v['value']);
                        }
                    });
                    $("#exampaper :checkbox[rel="+k+"]").each(function(){
                        var that = $(this);
                        if(v['value'].indexOf(that.val()) >= 0){
                            that.attr("checked",true);
                        }
                    });
                }
            }catch(e){
                //
            }finally {
                markQuestions();
            }
            $('#exampaper :radio').on('click',function(){
                var that = $(this);
                setTimeout(function(){
                    var now = Date.parse(new Date())/1000;
                    $('#time_'+that.attr('rel')).val(now);
                    initData[that.attr('rel')] = {value:that.val(),time:now};
                    markQuestions();
                },100);
            });

            $('#exampaper :checkbox').on('click',function(){
                var that = $(this);
                setTimeout(function(){
                    var now = Date.parse(new Date())/1000;
                    var answer = '';
                    $('#time_'+that.attr('rel')).val(now);
                    that.parents('li').find(':checked').each(function(){
                        answer += $(this).val().toUpperCase();
                    });
                    initData[that.attr('rel')] = {value:answer,time:now};
                    markQuestions();
                },100);
            });

            $('#exampaper :text,#exampaper textarea').on('blur',function(){
                var that = $(this);
                setTimeout(function(){
                    var now = Date.parse(new Date())/1000;
                    $('#time_'+that.attr('rel')).val(now);
                    initData[that.attr('rel')] = {value:that.val(),time:now};
                    markQuestions();
                },100);
            });
        });
	</script>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>