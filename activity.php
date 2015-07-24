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

<body class="activity_page list_page">

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
	</div>
</section>

<!-- <main class=""> -->


<section class="row">
<div class="wrapper">
	
	<div class="container_12">
		<ul class="activity-list cf">
			<li class="activity-item col-style1-6"><a href="activity_cnt.php">
				<div class="activity-item-block">
					<figure>
						<div class="activity-pic pic">
							<svg class="icon svg_icon_magnifier">
								<use xlink:href="#shape-magnifier"></use>
							</svg>
							<img src="<?php path_au('temp'); ?>tem_act1.jpg" alt="">
						</div>
						<figcaption>
							<h2 class="activity-title">人才培育．福爾摩沙文學地景走讀計畫【第四站】花蓮砂卡礑人才培育．福爾摩沙文學地景走讀計畫【第四站】花蓮砂卡礑</h2>
							<div class="activity-date">2015.04.04</div>
						</figcaption>
					</figure>
				</div>
			</a></li>

			<li class="activity-item col-style1-6"><a href="activity_cnt.php">
				<div class="activity-item-block">
					<figure>
						<div class="activity-pic pic">
							<svg class="icon svg_icon_magnifier">
								<use xlink:href="#shape-magnifier"></use>
							</svg>
							<img src="<?php path_au('temp'); ?>tem_act2.jpg" alt="">
						</div>
						<figcaption>
							<h2 class="activity-title">人才培育．福爾摩沙文學地景走讀計畫【第四站】花蓮砂卡礑人才培育．福爾摩沙文學地景走讀計畫【第四站】花蓮砂卡礑</h2>
							<div class="activity-date">2015.04.04</div>
						</figcaption>
					</figure>
				</div>
			</a></li>

			<li class="activity-item col-style1-6"><a href="activity_cnt.php">
				<div class="activity-item-block">
					<figure>
						<div class="activity-pic pic">
							<svg class="icon svg_icon_magnifier">
								<use xlink:href="#shape-magnifier"></use>
							</svg>
							<img src="<?php path_au('temp'); ?>tem_act1.jpg" alt="">
						</div>
						<figcaption>
							<h2 class="activity-title">人才培育．福爾摩沙文學地景走讀計畫【第四站】花蓮砂卡礑人才培育．福爾摩沙文學地景走讀計畫【第四站】花蓮砂卡礑</h2>
							<div class="activity-date">2015.04.04</div>
						</figcaption>
					</figure>
				</div>
			</a></li>

			<li class="activity-item col-style1-6"><a href="activity_cnt.php">
				<div class="activity-item-block">
					<figure>
						<div class="activity-pic pic">
							<svg class="icon svg_icon_magnifier">
								<use xlink:href="#shape-magnifier"></use>
							</svg>
							<img src="<?php path_au('temp'); ?>tem_act2.jpg" alt="">
						</div>
						<figcaption>
							<h2 class="activity-title">人才培育．福爾摩沙文學地景走讀計畫【第四站】花蓮砂卡礑人才培育．福爾摩沙文學地景走讀計畫【第四站】花蓮砂卡礑</h2>
							<div class="activity-date">2015.04.04</div>
						</figcaption>
					</figure>
				</div>
			</a></li>

		</ul>
	</div>

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
