<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<meta name="referrer" content="no-referrer">
<title>正在加载..</title>
<link rel="stylesheet" type="text/css" href="./static/css/jquery.mobile.min.css">
<link rel="stylesheet" type="text/css" href="./static/css/common.css">
<link rel="stylesheet" type="text/css" href="./static/css/play.css">
</head>

<body class="body">

<div class="header one">
	<div class="search">
		<input type="text" placeholder="" id="search" />
		<a id="searchDo">搜索</a>
	</div>
</div>

<div class="loading" id="loadBox">
	<span class="s-loading"><i class="first"></i><i class="second"></i><i class="third"></i></span>
</div>

<div id="dataBox" style="display:none">

	<div id="playBox">

		<div class="play-box" id="playBoxIframe">
			<div class="tip">如无法播放请尝试切换线路，或<a>点击前往<span></span>播放</a><i class="close"></i></div>
		</div>

		<div class="clear" style="height:0.3rem"></div>

		<h3 class="from-title" id="titleItem"></h3>
		<div class="from" id="fromList" style="display:none">
			<div class="template"><a data-api="{{api}}" data-href="{{href}}" data-hasmore="{{hasmore}}" data-site="{{site}}">线路{{number}}</a></div>
			<span class="clear"></span>
		</div>

		<div class="loading" id="loadBox2">
			<span class="s-loading"><i class="first"></i><i class="second"></i><i class="third"></i></span>
		</div>

		<div class="episodes" id="episodesBox" style="display:none;">
			<div class="clear" style="height:0.3rem"></div>
			<h3 class="episodes-title">选集<span class="episodes-control" id="episodesControl"><a class="prev">上一集</a><a class="next">下一集</a></span></h3>
			<div id="episodesList">
				<div class="template"><a data-api="{{api}}" data-href="{{href}}" value="{{number}}">{{number}}</a></div>
				<span class="clear"></span>
			</div>
		</div>
	</div>

	<div class="no-data" id="noDataBox" style="display:none">未找到可用播放线路</div>

	<div class="clear" style="height:2rem"></div>

	<div id="itemList" style="display:none">
		<div class="template">
			<div class="more">
				<i style="background-image:url({{pic}})"></i>
				<h5>{{title}}</h5>
				{{item}}
			</div>
			<div class="more desc">
				<div>简介：{{desc}}</div>
			</div>
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
<script src="./static/js/play.js"></script>
</body>
</html>