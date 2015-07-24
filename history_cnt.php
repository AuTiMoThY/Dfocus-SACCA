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

<body class="history_page cnt_page">

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
			<a href="history.php" class="btn btn-material-grey btn-golist">返回列表</a>
	</div>
</section>

<!-- <main class=""> -->


<section class="row history-leader">
<div class="wrapper s">
	<h2 class="history-title">因為閱讀，我們走進阿里山的神祕戰祭</h2>
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
</div>
</section>

<section class="row banner1">
<div class="wrapper s">
	<div class="pic">
		<img src="<?php path_au('temp'); ?>tem_history1-980X370.jpg" alt="">
	</div>
</div>
</section>

<section class="row history-cnt">
	<div class="wrapper s">
		<div class="editorDF">
			<!-- 圖文編輯器範圍 -->
			<img src="<?php path_au('temp'); ?>tem2.png" alt="" class="temporary">
		</div>
	</div>
	<a href="history.php" class="btn btn-material-grey btn-golist">返回列表</a>
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

(function(){
	
	var scrollMagicController = new ScrollMagic.Controller();

	var mapAction = TweenMax.fromTo('#mapAction', 0.5,
	{
		// 'background-position': '0 0',
		'opacity': '0',
		'transform': 'scale(0.5, 0.5)'
	},
	{
		// 'background-position': '0 10px'
		'opacity': '1',
		'transform': 'scale(1, 1)'
	});
	var scene1 = new ScrollMagic.Scene({
		triggerElement: '#mapTrigger',
		offset: 0,
		// duration: 100
	})
	.setClassToggle('body', 'mapAction-active')
	.setTween(mapAction)
	// .triggerHook(0)
	// .addIndicators({name: "1 (duration: 0)"})
	.addTo(scrollMagicController);
});


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
