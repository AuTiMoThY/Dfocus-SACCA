<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>活動紀錄報導 | 四也出版</title>

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

<body class="news_page cnt_page">

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
		<p class="ib txt txt-gr1">活動紀錄報導</p>
		<a href="activity.php" class="btn btn-golist btn-material-grey" style="width: 100px; margin: auto;">返回列表</a>
	</div>
</section>

<!-- <main class=""> -->

<section class="row news-cnt" style="margin-bottom: 1.2em;">
	<div class="wrapper s">
		<header>
			<h2 class="news-title">2015 鄒族文化生態體驗營</h2>
			<div class="news-date">2015.04.04</div>
			<div class="fb-like" data-href="" data-layout="button_count" data-share="true"></div>
			<!-- <div class="fb-share-button ib" data-href="" data-layout="button_count"></div> -->
		</header>
		<div class="editorDF">
			<!-- 圖文編輯器範圍 -->
			<img src="<?php path_au('temp'); ?>tem_act3.jpg" alt="" class="temporary">
		</div>
		<a href="activity.php" class="btn btn-material-grey btn-golist" style="width: 100px; margin: auto;">返回列表</a>
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

	$(".js-subNavItem5").addClass('active');

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
