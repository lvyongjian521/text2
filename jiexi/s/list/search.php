<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<meta name="referrer" content="no-referrer">
<title>搜索结果</title>
<link rel="stylesheet" type="text/css" href="../static/css/jquery.mobile.min.css">
<link rel="stylesheet" type="text/css" href="../static/css/common.css">
</head>

<body class="body">

<div class="header">
	<div class="search">
		<input type="text" placeholder="" id="search" />
		<a id="searchDo">搜索</a>
	</div>
	<div class="navigate">
		<a href="../index.php">精选</a>
		<a href="./dianshi.php">电视剧</a>
		<a href="./dianying.php">电影</a>
		<a href="./zongyi.php">综艺</a>
		<a href="./dongman.php">动漫</a>
	</div>
</div>

<div class="clear" style="height:0.5rem"></div>

<div class="loading" id="loadBox">
	<span class="s-loading"><i class="first"></i><i class="second"></i><i class="third"></i></span>
</div>

<div id="dataBox" style="display:none">

	<div class="keywords" id="keywordItem"><b>“{{keyword}}”</b> 的搜索结果：</div>

	<div class="list">

		<div class="no-data" id="noDataBox" style="display:none;margin-top:1rem;background:none">QAQ，抱歉呐~没有找到相关影片，试试搜索其他关键词吧~</div>

		<div class="items" id="listList">
			<div class="template">
				<a href="{{href}}" data-id="{{id}}">
					<i style="background-image:url({{pic}})"><b>{{hint}}</b></i>
					<span>{{title}}</span>
				</a>
			</div>
			<span class="clear"></span>
		</div>

		<div class="more one" style="display:none">
			<a id="loadMore"><img src="../static/images/more.png" />加载更多</a>
			<span class="s-loading" id="loading"><i class="first"></i><i class="second"></i><i class="third"></i></span>
		</div>
	</div>


	<div class="clear" style="height:3rem"></div>

	<div class="copyright">
		<p>lvyongjian-影视站</p>
	</div>
</div>

<a class="scroll-to-top" id="scrollToTop"></a>

<script src="../static/js/jquery.min.js"></script>
<script src="../static/js/common.js"></script>
<script src="../static/js/search.js"></script>
</body>
</html>