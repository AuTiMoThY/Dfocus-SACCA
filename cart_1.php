<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>購物車 - STEP1 | 四也出版</title>

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

<body class="cart_page">

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
		<p class="ib txt txt-gr1">購物車</p>
	</div>
</section>

<!-- <main class=""> -->


<section class="row">
<div class="wrapper">

	<div class="container cart-container">
		<header>
			<h1 class="txtImg-title-cart hide_txt">購物車</h1>
		</header>
		<div class="cart-steps step1 hide_txt">STEP1 確認商品</div>
		<form action="gotoCartStep2.php" class="cart-form cf">
			<div class="cart-block">
				<ul class="cf">
					<li class="container_12 cart-item">
						<div class="col-style1-6">
							<div class="col-style1-3">
								<div class="book-pic-block">
									<div class="book-pic pic">
										<img src="dist/images/temp/tem_book1-85.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-style1-9 col2">
								<div class="book-name">
									月光三部曲Ⅲ：回家之路1947
								</div>
								<div class="book-price-group">
									<div class="book-price0">定價：<span class="cart-number">290</span></div>
									<div class="book-price">網路優惠價：<span class="txt-r2 cart-number">250</span></div>
								</div>
							</div>
						</div>
						<div class="col-style1-6">
							<div class="col-style1-6 col3">
								數量：<input type="number" name="" id="" class="inp-amount" value="1">
							</div>
							<div class="col-style1-6 col4">
								小計：<span class="cart-number">290</span>
							</div>
						</div>
						<button type="button" class="btn-cartDel" onclick="javascript:confirm('確定刪除?');">
							<span class="line1"></span><span class="line2"></span>
						</button>
					</li>
					<li class="container_12 cart-item">
						<div class="col-style1-6">
							<div class="col-style1-3">
								<div class="book-pic-block">
									<div class="book-pic pic">
										<img src="dist/images/temp/tem_book1-85.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-style1-9 col2">
								<div class="book-name">
									月光三部曲Ⅲ：回家之路1947
								</div>
								<div class="book-price-group">
									<div class="book-price0">定價：<span class="cart-number">290</span></div>
									<div class="book-price">網路優惠價：<span class="txt-r2 cart-number">250</span></div>
								</div>
							</div>
						</div>
						<div class="col-style1-6">
							<div class="col-style1-6 col3">
								數量：<input type="number" name="" id="" class="inp-amount" value="1">
							</div>
							<div class="col-style1-6 col4">
								小計：<span class="cart-number">290</span>
							</div>
						</div>
						<button type="button" class="btn-cartDel" onclick="javascript:confirm('確定刪除?');">
							<span class="line1"></span><span class="line2"></span>
						</button>
					</li>

				</ul>
			</div><!-- /.cart-block  END  !! -->
			<div class="cart-total-block container_12 cf">
				<div class="col-style1-6">
					<span class="txt-r4">
						<i class="fa fa-star"></i>
						購物滿 1000 元 即可享有免運折抵
					</span>
				</div>
				<div class="col-style1-6 col2">
					<span class="col-style1-6 text-left">商品小計</span>
					<span class="col-style1-6 text-right cart-number">640</span>
				</div>
			</div><!-- /.cart-total-block  END  !! -->
			
			<div class="btns cf" style="position: relative; display: table; width: 100%; text-align: center;">
				<a href="books_home.php" class="left txt-gr1" style="color:#646464; font-size: 13px;letter-spacing:1px;position: absolute; left:0; z-index: 10; line-height: 30px;"><i class="icon icon-triL"></i>繼續購物</a>
				<div class="link-cart_note"><a href="cart_note.php" class="txt-gr1 txt-fz13" target="_blank">購物說明與注意事項</a></div>
				<!-- <button type="reset" class="btn btn-reset btn-material-grey first_btn">取消重填</button> -->
				<button type="submit" class="btn btn-submit btn-material-pink right">下一步</button>
			</div>
		</form>

	</div>

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

	// $(".js-subNavItem5").addClass('active');

// (function(){
	
// 	var scrollMagicController = new ScrollMagic.Controller();

// 	var mapAction = TweenMax.fromTo('#mapAction', 0.5,
// 	{
// 		// 'background-position': '0 0',
// 		'opacity': '0',
// 		'transform': 'scale(0.5, 0.5)'
// 	},
// 	{
// 		// 'background-position': '0 10px'
// 		'opacity': '1',
// 		'transform': 'scale(1, 1)'
// 	});
// 	var scene1 = new ScrollMagic.Scene({
// 		triggerElement: '#mapTrigger',
// 		offset: 0,
// 		// duration: 100
// 	})
// 	.setClassToggle('body', 'mapAction-active')
// 	.setTween(mapAction)
// 	// .triggerHook(0)
// 	// .addIndicators({name: "1 (duration: 0)"})
// 	.addTo(scrollMagicController);
// });


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
