<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div class="pages">
    <?php } ?>
	<div class="page-tabs" id="questionpanel"></div>
	<script type="text/javascript">
        $(document).ready(function(){
            submitAjax({url:"index.php?exam-phone-lesson-ajax-questions&knowsid=<?php echo $this->tpl_var['knows']['knowsid']; ?>","target":"questionpanel"});
        });
	</script>
    <?php if(!$this->tpl_var['userhash']){ ?>
</div>
</body>
</html>
<?php } ?>