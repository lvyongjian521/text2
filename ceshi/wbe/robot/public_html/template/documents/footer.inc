<?php 

/**
 * 公共尾部文件
 * @author 冬天的秘密
 * @link http://bbs.itpk.cn
 * @version 1.0
 */

global $_script_file_array;

?>

<div id = "footer">
	<div class = "container">
		<p>©2016 ITPK Powered by <a href = "http://bbs.itpk.cn" target = "_blank">ITPK</a> <?php echo "V" . VERSION;?></p>
	</div>
</div>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type = "text/javascript">
$(function() {
	$("#barshook").click(function() {
		$("#navbar").slideToggle(300);
	});
	$(".bottom_title .usual_button").last().css({ border:'none' });
});
</script>
<?php if (isset($_script_file_array)) { ?>
<?php foreach ($_script_file_array as $script_file) { ?>
<script type = "text/javascript" src = "<?php echo DOMAIN_FOLDER . JS_FOLDER . $script_file; ?>?ver=<?php echo VERSION;?>"></script>
<?php } ?>
<?php } ?>
</body>
</html>