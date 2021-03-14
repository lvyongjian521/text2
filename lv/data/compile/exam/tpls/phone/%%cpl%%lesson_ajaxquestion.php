<div class="page-header">
	<div class="col-1" onclick="javascript:history.back();"><span class="iconfont icon-left"></span></div>
	<div class="col-8"><?php echo $this->tpl_var['knows']['knows']; ?></div>
	<div class="col-1"><span class="iconfont icon-menu hide"></span></div>
</div>
<div class="page-content header footer" data-refresh="yes">
	<form class="list-box bg top">
		<ol>
			<li class="unstyled">
				<h4 class="title">
					第 <?php echo $this->tpl_var['number']; ?> 题
				</h4>
			</li>
            <?php if($this->tpl_var['parent']){ ?>
            <li class="unstyled">
				<div class="rows">
					<p><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['parent']['qrquestion'])); ?></p>
				</div>
			</li>
			<?php } ?>
			<li class="unstyled">
				<div class="rows">
					<p><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['question'])); ?></p>
				</div>
			</li>
            <?php if(!$this->tpl_var['questype']['questsort'] && $this->tpl_var['questype']['questchoice'] != 5){ ?>
			<li class="unstyled">
				<div class="rows">
					<p><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['questionselect'])); ?></p>
				</div>
			</li>
			<?php } ?>
            <?php if($this->tpl_var['questype']['questsort']){ ?>
			<li class="unstyled">
				<textarea rows="4" id="editor<?php echo $this->tpl_var['question']['questionid']; ?>" name="question[<?php echo $this->tpl_var['question']['questionid']; ?>]" rel="<?php echo $this->tpl_var['question']['questionid']; ?>"><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['question']['questionid']])); ?></textarea>
			</li>
			<li class="unstyled text-center">
				<button class="primary badge" onclick="javascript:$(this).parents('li').hide().parents('.list-box').find('.rightanswer').removeClass('hide');">查看答案</button>
			</li>
            <?php } else { ?>
			<li class="unstyled">
				<div class="rows">
                    <?php if($this->tpl_var['questype']['questchoice'] == 1 || $this->tpl_var['questype']['questchoice'] == 4){ ?>
                    <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
                    <?php if($key == $this->tpl_var['question']['questionselectnumber']){ ?>
                    <?php break;; ?>
                    <?php } ?>
					<label class="inline"><input type="radio" name="question[<?php echo $this->tpl_var['question']['questionid']; ?>]" rel="<?php echo $this->tpl_var['question']['questionid']; ?>" value="<?php echo $so; ?>" <?php if($so == $this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['question']['questionid']]){ ?>checked<?php } ?>/><span class="selector"><?php echo $so; ?></span> </label>
                    <?php } ?>
                    <?php } elseif($this->tpl_var['questype']['questchoice'] == 5){ ?>
					<input type="text" name="question[<?php echo $this->tpl_var['question']['questionid']; ?>]" placeholder="点击此处填写答案" value="<?php echo $this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['question']['questionid']]; ?>" rel="<?php echo $this->tpl_var['question']['questionid']; ?>"/>
					<label class="inline pull-right"><button class="btn btn-primary badge finish fill" rel="<?php echo $this->tpl_var['question']['questionid']; ?>">答题完毕</button></label>
                    <?php } else { ?>
                    <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
                    <?php if($key >= $this->tpl_var['question']['questionselectnumber']){ ?>
                    <?php break;; ?>
                    <?php } ?>
					<label class="inline"><input type="checkbox" name="question[<?php echo $this->tpl_var['question']['questionid']; ?>][<?php echo $key; ?>]" rel="<?php echo $this->tpl_var['question']['questionid']; ?>" value="<?php echo $so; ?>" <?php if(in_array($so,$this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['question']['questionid']])){ ?>checked<?php } ?>/><span class="selector"><?php echo $so; ?></span> </label>
                    <?php } ?>
                    <?php } ?>
				</div>
			</li>
			<?php if($this->tpl_var['questype']['questchoice'] == 2 || $this->tpl_var['questype']['questchoice'] == 3){ ?>
			<li class="unstyled text-center">
				<button class="primary badge finish" rel="<?php echo $this->tpl_var['question']['questionid']; ?>">答题完毕</button>
			</li>
            <?php } ?>
            <?php } ?>
			<li class="unstyled rightanswer hide">
				<div class="rows">
                    <?php if($this->tpl_var['questype']['questsort']){ ?>
					<div class="intro">
						<span class="badge">正确答案</span>
					</div>
					<div class="intro">
						<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['questionanswer'])); ?>
					</div>
					<?php } else { ?>
					<div class="col-4x intro">
						<span class="badge">正确答案</span>
					</div>
					<div class="col-4l intro">
						<b id="rightanswer_<?php echo $this->tpl_var['question']['questionid']; ?>"><?php echo $this->tpl_var['question']['questionanswer']; ?></b>
					</div>
					<?php } ?>
				</div>
			</li>
			<li class="unstyled rightanswer hide">
				<div class="rows">
					<?php if(strlen($this->tpl_var['question']['questiondescribe']) >= 10){ ?>
					<div class="intro">
						<span class="badge">试题解析</span>
					</div>
					<div class="intro">
						<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['questiondescribe'])); ?>
					</div>
					<?php } else { ?>
					<div class="col-4x">
						<span class="badge">试题解析</span>
					</div>
					<div class="col-4l intro">
                        <?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['questiondescribe'])); ?>
					</div>
					<?php } ?>
				</div>
			</li>
			<li class="unstyled"></li>
		</ol>
	</form>
</div>
<div class="page-footer">
	<ol class="pagination">
		<li class="col-8x<?php if($this->tpl_var['number'] > 1){ ?> jump" data-number="<?php echo $this->tpl_var['number'] - 1; ?><?php } ?>">
            <span class="iconfont icon-left-circle"></span>
		</li>
		<li class="col-8x favor" data-questionid="<?php echo $this->tpl_var['question']['questionid']; ?>">
			<span class="iconfont icon-star"></span>
		</li>
		<li class="col-5">
			<form method="post" data-target="questionpanel" action="index.php?exam-app-lesson-ajax-questions&knowsid=<?php echo $this->tpl_var['knows']['knowsid']; ?>">
				共<?php echo $this->tpl_var['allnumber']; ?>题，转到 <input class="text-center" name="number" placeholder="<?php echo $this->tpl_var['number']; ?>" type="search" size="3"> 题
			</form>
		</li>
		<li class="col-8x">
			<a href="index.php?exam-phone-lesson-reporterror&questionid=<?php echo $this->tpl_var['question']['questionid']; ?>" class="ajax">
				<span class="iconfont icon-wrench"></span>
			</a>
		</li>
		<li class="col-8x<?php if($this->tpl_var['number'] < $this->tpl_var['allnumber']){ ?> jump" data-number="<?php echo $this->tpl_var['number'] + 1; ?><?php } ?>">
			<span class="iconfont icon-right-circle"></span>
		</li>
	</ol>
</div>
<script type="text/javascript">
    $(function(){
        var sumquestion = function(value,qid){
            $('.rightanswer').removeClass('hide');
            if(value == $("#rightanswer_"+qid).html())
            {
                $("#rightanswer_"+qid).attr('class','text-success');
            }
            else
            {
                pep.mask.show(null,{message:'回答错误'});
                $("#rightanswer_"+qid).attr('class','text-danger');
            }
            setTimeout(pep.mask.hide,1000);
        }
        $("input:radio").click(function(){
            var _this = $(this);
            var qid = _this.attr('rel');
            sumquestion(_this.val(),qid);
        });
        $('#questionpanel .favor').on('click',function() {
                favorquestion($(this).attr('data-questionid'));
            });
		$('#questionpanel .jump').on('click',function(){
			var number = parseInt($(this).attr('data-number'));
			if(number <= 0)return ;
			submitAjax({url:"index.php?exam-phone-lesson-ajax-questions&knowsid=<?php echo $this->tpl_var['knows']['knowsid']; ?>&number="+number,"target":"questionpanel"});
			});
        $(".finish").click(function(){
            var _this = $(this);
            var qid = _this.attr('rel');
            var parent = _this.parents("form:first");
            var value = '';
            if(_this.hasClass('fill')){
                value = parent.find("input").val();
            }
            else{
                parent.find("input:checked").each(function(){
                    value += $(this).val().toUpperCase();
                });
            }
            if(value == '')
            {
                pep.mask.show(null,{message:'请先答题'});
                return;
            }
            sumquestion(value,qid);
        });
    });
</script>
