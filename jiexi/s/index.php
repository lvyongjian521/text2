<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<meta name="referrer" content="no-referrer">
<title>lvyongjian-影视站</title>
<link rel="stylesheet" type="text/css" href="./static/css/jquery.mobile.min.css">
<link rel="stylesheet" type="text/css" href="./static/css/common.css">
</head>

<body class="body">

<div class="header">
	<div class="search">
		<input type="text" placeholder="" id="search" />
		<a id="searchDo">搜索</a>
	</div>
	<div class="navigate">
		<a href="./index.php" class="current">精选</a>
		<a href="./list/dianshi.php">电视剧</a>
		<a href="./list/dianying.php">电影</a>
		<a href="./list/zongyi.php">综艺</a>
		<a href="./list/dongman.php">动漫</a>
	</div>
</div>

<div class="s-slider">
	<ul id="bannerList">
		<div class="template">
			<li><a href="{{href}}"><i style="background-image:url({{pic}})"></i><span>{{title}}</span></a></li>
		</div>
	</ul>
	<ol></ol>
</div>

<div class="loading" id="loadBox">
	<span class="s-loading"><i class="first"></i><i class="second"></i><i class="third"></i></span>
</div>

<div id="dataBox" style="display:none">

	<div class="list">

		<h3 class="title">电视剧</h3>

		<div class="items" id="dianshiList">
			<div class="template">
				<a href="{{href}}">
					<i style="background-image:url({{pic}})"><b>{{hint}}</b></i>
					<span>{{title}}</span>
				</a>
			</div>
			<span class="clear"></span>
		</div>

		<div class="more">
			<a href="./list/dianshi.php"><img src="./static/images/more_1.png" />更多电视剧</a>
			<a class="switch-button" data-list-type="dianshi"><img src="./static/images/more_2.png" />换一批</a>
		</div>
	</div>

	<div class="clear" style="height:0.8rem"></div>

	<div class="list">

		<h3 class="title">电影</h3>

		<div class="items" id="dianyingList">
			<div class="template">
				<a href="{{href}}">
					<i style="background-image:url({{pic}})"><b>{{hint}}</b></i>
					<span>{{title}}</span>
				</a>
			</div>
			<span class="clear"></span>
		</div>

		<div class="more">
			<a href="./list/dianying.php"><img src="./static/images/more_1.png" />更多电影</a>
			<a class="switch-button" data-list-type="dianying"><img src="./static/images/more_2.png" />换一批</a>
		</div>
	</div>

	<div class="clear" style="height:0.8rem"></div>

	<div class="list">

		<h3 class="title">综艺</h3>

		<div class="items" id="zongyiList">
			<div class="template">
				<a href="{{href}}">
					<i style="background-image:url({{pic}})"><b>{{hint}}</b></i>
					<span>{{title}}</span>
				</a>
			</div>
			<span class="clear"></span>
		</div>

		<div class="more">
			<a href="./list/zongyi.php"><img src="./static/images/more_1.png" />更多综艺</a>
			<a class="switch-button" data-list-type="zongyi"><img src="./static/images/more_2.png" />换一批</a>
		</div>
	</div>

	<div class="clear" style="height:0.8rem"></div>

	<div class="list">

		<h3 class="title">动漫</h3>

		<div class="items" id="dongmanList">
			<div class="template">
				<a href="{{href}}">
					<i style="background-image:url({{pic}})"><b>{{hint}}</b></i>
					<span>{{title}}</span>
				</a>
			</div>
			<span class="clear"></span>
		</div>

		<div class="more">
			<a href="./list/dongman.php"><img src="./static/images/more_1.png" />更多动漫</a>
			<a class="switch-button" data-list-type="dongman"><img src="./static/images/more_2.png" />换一批</a>
		</div>
	</div>

	<div class="clear" style="height:3rem"></div>

	<div class="copyright">
		<p>lvyongjian-影视站</p>
	</div>

</div>

<a class="scroll-to-top" id="scrollToTop"></a>

<script src="./static/js/jquery.min.js"></script>
<script src="./static/js/common.js"></script>
<script src="./static/js/index.js"></script>
</body>
</html>