<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>台灣歷史記憶箱 | 四也出版</title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
  include_once INC_PATH.'head.php';
?>


<?php
//app
//  include_once INC_PATH.'social.php';
?>

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="history_page list_page">

<?php
// -------------------------------
// header
// -------------------------------
  include_once INC_PATH.'header.php';
	include IMG_PATH.'svg-defs.svg';
?>
<section id="bannerAction" class="banner-wall"></section>

<div id="bannerTrigger"></div>

<section class="page_path">
	<div class="wrapper">
		<a href="<?php webPageUrlAu('index');?>" class="ib txt txt-gr1">首頁</a>
		<span class="gt ib txt txt-gr1">&gt;</span>
		<p class="ib txt txt-gr1">臺灣歷史記憶箱</p>
		<div class="filter_history">
			<div class="filter-wrap">
				<label for="filterSelect" class="filter-label ib">
					<svg class="icon svg_icon_tag ib ml">
						<use xlink:href="#shape-tag"></use>
					</svg>
					專欄分類：
				</label>
				<select name="" id="filterSelect" class="filter-select ib">
					<option value="">所有</option>
					<option value=".taiwan">臺灣歷史專欄</option>
					<option value=".world">世界歷史專欄</option>
					<option value=".theme">主題歷史專欄</option>
				</select>
			</div>
		</div>
	</div>
</section>

<!-- <main class=""> -->


<section class="row">
<div class="wrapper">
	<ul class="history-list cf">
		<li class="history-item"><a href="history_cnt.php">
			<div class="col-2">
				<div class="history-pic pic">
					<img src="<?php path_au('temp'); ?>tem_history1-495X205.jpg" alt="">
				</div>
			</div>
			<article class="col-2">
				<h3 class="history-title">因為閱讀，我們走進阿里山的神祕戰祭因為閱讀，我們走進阿里山的神祕戰祭因為閱讀，我們走進阿里山的神祕戰祭</h3>
				<p class="history-partOfString">
					對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。
				</p>
				<div class="info_bar">
					<div class="history-auth col-2">
						<svg class="icon svg_icon_people ib ml">
							<use xlink:href="#shape-people"></use>
						</svg>
						南華大學傳播研究所研究生 陳柏濡
					</div>
					<div class="history-tag col-2">
						<svg class="icon svg_icon_tag ib ml">
							<use xlink:href="#shape-tag"></use>
						</svg>
						臺灣歷史專欄
					</div>
				</div>
			</article>
		</a></li>
		<li class="history-item"><a href="history_cnt.php">
			<div class="col-2">
				<div class="history-pic pic">
					<img src="<?php path_au('temp'); ?>tem_history2-495X205.jpg" alt="">
				</div>
			</div>
			<article class="col-2">
				<h3 class="history-title">因為閱讀，我們走進阿里山的神祕戰祭因為閱讀，我們走進阿里山的神祕戰祭因為閱讀，我們走進阿里山的神祕戰祭</h3>
				<p class="history-partOfString">
					對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。
				</p>
				<div class="info_bar">
					<div class="history-auth col-2">
						<svg class="icon svg_icon_people ib ml">
							<use xlink:href="#shape-people"></use>
						</svg>
						南華大學傳播研究所研究生 陳柏濡
					</div>
					<div class="history-tag col-2">
						<svg class="icon svg_icon_tag ib ml">
							<use xlink:href="#shape-tag"></use>
						</svg>
						臺灣歷史專欄
					</div>
				</div>
			</article>
		</a></li>
		<li class="history-item"><a href="history_cnt.php">
			<div class="col-2">
				<div class="history-pic pic">
					<img src="<?php path_au('temp'); ?>tem_history3-495X205.jpg" alt="">
				</div>
			</div>
			<article class="col-2">
				<h3 class="history-title">因為閱讀，我們走進阿里山的神祕戰祭因為閱讀，我們走進阿里山的神祕戰祭因為閱讀，我們走進阿里山的神祕戰祭</h3>
				<p class="history-partOfString">
					對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。
				</p>
				<div class="info_bar">
					<div class="history-auth col-2">
						<svg class="icon svg_icon_people ib ml">
							<use xlink:href="#shape-people"></use>
						</svg>
						南華大學傳播研究所研究生 陳柏濡
					</div>
					<div class="history-tag col-2">
						<svg class="icon svg_icon_tag ib ml">
							<use xlink:href="#shape-tag"></use>
						</svg>
						臺灣歷史專欄
					</div>
				</div>
			</article>
		</a></li>
		<li class="history-item"><a href="history_cnt.php">
			<div class="col-2">
				<div class="history-pic pic">
					<img src="<?php path_au('temp'); ?>tem_history4-495X205.jpg" alt="">
				</div>
			</div>
			<article class="col-2">
				<h3 class="history-title">因為閱讀，我們走進阿里山的神祕戰祭因為閱讀，我們走進阿里山的神祕戰祭因為閱讀，我們走進阿里山的神祕戰祭</h3>
				<p class="history-partOfString">
					對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。對外人來說，鄒族戰祭(鄒語：mayasvi)是充滿著神祕色彩的，而mayasvi所代表的意義，則有好幾種譯法，如：戰祭、敵首祭、凱旋祭等名稱，但這些譯名都無法完整包含祭典的意涵，所以直接以鄒語﹝mayasvi瑪雅斯比﹞稱呼最恰當。
				</p>
				<div class="info_bar">
					<div class="history-auth col-2">
						<svg class="icon svg_icon_people ib ml">
							<use xlink:href="#shape-people"></use>
						</svg>
						南華大學傳播研究所研究生 陳柏濡
					</div>
					<div class="history-tag col-2">
						<svg class="icon svg_icon_tag ib ml">
							<use xlink:href="#shape-tag"></use>
						</svg>
						臺灣歷史專欄
					</div>
				</div>
			</article>
		</a></li>
	</ul>
	<div class="pages_btn">
		<ul>
			<li class="prev">
				<a href=""><i class="icon ib"></i><span class="txt ib">上一頁</span></a>
			</li><!-- 在第一頁時不顯示 -->
			<li class="number active"><a href="">1</a></li>
			<li class="number"><a href="">2</a></li>
			<li class="number"><a href="">3</a></li>
			<li class="number"><a href="">4</a></li>
			<li class="number"><a href="">5</a></li>
			<li class="next">
				<a href=""><span class="txt ib">下一頁</span><i class="icon ib"></i></a>
			</li><!-- 在最後一頁時不顯示 -->
		</ul>
	</div><!-- /.pages_btn  END  !! -->
</div>
</section>
<section class="fixBg">
	<div class="slogan2-wrap">
		<section class="wall-bar slogan2">
			<div class="wrapper">
				<p>船象徵「冒險與遠航」，是許多經典故事的起源。<br>我們願成為孩子們的舵手，和他們一起乘風破浪，從閱讀之海捕捉成長的養分。<br>同時，也用我們的眼睛，守護孩子們的冒險旅程。</p>
				<div class="footLogo"><?php include IMG_PATH.'logo.svg'; ?></div>
			</div>
		</section>
	</div>
</section>

<!-- </main> -->


<?php
// -------------------------------
// Footer
// -------------------------------
  include_once INC_PATH.'footer.php';
?>


<?php
// -------------------------------
// Script in the FOOT
// -------------------------------
  include_once INC_PATH.'scriptfoot.php';
?>

<script>
$(function(){

	$(".js-subNavItem3").addClass('active');


})
</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
?>

</body>
</html>
