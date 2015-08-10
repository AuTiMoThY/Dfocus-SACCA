<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>四也全書 | 四也出版</title>

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

<body class="books_page cnt_page">

<?php
// -------------------------------
// header
// -------------------------------
  include_once INC_PATH.'header.php';
?>
<section id="bannerAction" class="banner-wall"></section>

<div id="bannerTrigger"></div>

<section class="page_path">
	<div class="wrapper">
		<a href="<?php webPageUrlAu('index');?>" class="ib txt txt-gr1">首頁</a>
		<span class="gt ib txt txt-gr1">&gt;</span>
		<p class="ib txt txt-gr1">四也全書</p>
	</div>
</section>

<main class="">
<div class="wrapper cf">
	<aside class="aside_group col-f">

		<?php
			include_once INC_PATH.'asidebook.php';
		?>

	</aside>

	<article>
		<div class="book-banner">
			<div class="wall-7">
				<div id="bannerSlider" class="flexslider">
					<ul class="slides">
						<li><img src="<?php path_au('temp'); ?>index_banner3_1.jpg" alt=""></li>
						<li><img src="<?php path_au('temp'); ?>index_banner3_2.jpg" alt=""></li>
						<li><img src="<?php path_au('temp'); ?>index_banner3_3.jpg" alt=""></li>
						<li><img src="<?php path_au('temp'); ?>index_banner3_4.jpg" alt=""></li>
						<li><img src="<?php path_au('temp'); ?>index_banner3_5.jpg" alt=""></li>
					</ul>
				</div>
			</div><!-- /.wall-block wall-7  END  !! -->
		</div><!-- /.wall-col5  END  !! -->

		<div class="blockMod blockMod__booklist blockMod__latest">
			<header class="blockMod-header">
				<h2 class="hide_txt">最新出版 / Latest published /</h2>
			</header>
			<div class="blockMod-block">
				<ul class="book-list cf">
					<li class="book-list-item">
						<a href="books_cnt.php" class="block_link"></a>
						<figure>
							<div class="book-pic pic"><img src="<?php path_au('temp'); ?>tem_book1-205_290.jpg" alt=""></div>
							<figcaption>
								<h3 class="book-name">
									<?php
										//  書籍名稱
										//  此處示意 顯示前 18 個字，超果以...取代
										$book_name="砲來了，金門快跑!(三版)";
										$length=18;
										content_show_length($book_name, $length);
									?>
								</h3>
								<div class="book-inf cf">
									<span class="book-auth left">張友漁</span>
									<div class="right">
										<span class="book-price tdlt">定價：290 元</span><br>
										<span class="book-price">特價：280 元</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</li>

					<li class="book-list-item">
						<a href="books_cnt.php" class="block_link"></a>
						<figure>
							<div class="book-pic pic"><img src="<?php path_au('temp'); ?>tem_book1-205_290.jpg" alt=""></div>
							<figcaption>
								<h3 class="book-name">
									<?php
										//  書籍名稱
										//  此處示意 顯示前 18 個字，超果以...取代
										$book_name="砲來了，金門快跑!(三版)";
										$length=18;
										content_show_length($book_name, $length);
									?>
								</h3>
								<div class="book-inf cf">
									<span class="book-auth left">張友漁</span>
									<div class="right">
										<span class="book-price tdlt">定價：290 元</span><br>
										<span class="book-price">特價：280 元</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</li>

					<li class="book-list-item">
						<a href="books_cnt.php" class="block_link"></a>
						<figure>
							<div class="book-pic pic"><img src="<?php path_au('temp'); ?>tem_book1-205_290.jpg" alt=""></div>
							<figcaption>
								<h3 class="book-name">
									<?php
										//  書籍名稱
										//  此處示意 顯示前 18 個字，超果以...取代
										$book_name="砲來了，金門快跑!(三版)";
										$length=18;
										content_show_length($book_name, $length);
									?>
								</h3>
								<div class="book-inf cf">
									<span class="book-auth left">張友漁</span>
									<div class="right">
										<span class="book-price tdlt">定價：290 元</span><br>
										<span class="book-price">特價：280 元</span>
									</div>
								</div>
							</figcaption>
						</figure>
					</li>
				</ul>
			</div><!-- /.blockMod-block  END  !! -->
		</div><!-- /.blockMod__hot  END  !! -->

		<div class="blockMod blockMod__booklist blockMod__awarded">
			<header class="blockMod-header">
				<h2 class="hide_txt">得獎好書 / Awarded books /</h2>
			</header>
			<div class="blockMod-block">
				<ul class="book-list cf">
					<li class="book-list-item cf"><a href="books_cnt.php" class="block_link"></a>
						<figure class="cf">
							<div class="book-pic pic left"><img src="<?php path_au('temp'); ?>tem_book1-205_290.jpg" alt=""></div>
							<figcaption class="right">
								<div class="awarded_cate">金鼎獎</div>
								<h3 class="book-name">
									<?php
										//  書籍名稱
										//  此處示意 顯示前 25 個字，超過以...取代
										$book_name="砲來了，金門快跑!(三版)砲來了，金門快跑!(三版)砲來了，金門快跑!(三版)";
										$length=25;
										content_show_length($book_name, $length);
									?>
								</h3>
								<div class="book-inf cf">
									<span class="book-auth">作者：張友漁</span>
									<span class="book-price tdlt">定價：290 元</span>
									<span class="book-price">特價：280 元</span>
								</div>
								<div class="add_to_cart">
									<button type="button" class="btn btn-sacca btn-addCart">
										<span class="btn_inner"> <i class="icon icon-cart"></i>加入購物車 </span>
									</button>
								</div>
							</figcaption>
						</figure>
					</li>

					<li class="book-list-item cf"><a href="books_cnt.php" class="block_link"></a>
						<figure class="cf">
							<div class="book-pic pic left"><img src="<?php path_au('temp'); ?>tem_book1-205_290.jpg" alt=""></div>
							<figcaption class="right">
								<div class="awarded_cate">金鼎獎</div>
								<h3 class="book-name">
									<?php
										//  書籍名稱
										//  此處示意 顯示前 25 個字，超過以...取代
										$book_name="砲來了，金門快跑!(三版)砲來了，金門快跑!(三版)砲來了，金門快跑!(三版)";
										$length=25;
										content_show_length($book_name, $length);
									?>
								</h3>
								<div class="book-inf cf">
									<span class="book-auth">作者：張友漁</span>
									<span class="book-price tdlt">定價：290 元</span>
									<span class="book-price">特價：280 元</span>
								</div>
								<div class="add_to_cart">
									<button type="button" class="btn btn-sacca btn-addCart">
										<span class="btn_inner"> <i class="icon icon-cart"></i>加入購物車 </span>
									</button>
								</div>
							</figcaption>
						</figure>
					</li>

					<li class="book-list-item cf"><a href="books_cnt.php" class="block_link"></a>
						<figure class="cf">
							<div class="book-pic pic left"><img src="<?php path_au('temp'); ?>tem_book1-205_290.jpg" alt=""></div>
							<figcaption class="right">
								<div class="awarded_cate">金鼎獎</div>
								<h3 class="book-name">
									<?php
										//  書籍名稱
										//  此處示意 顯示前 25 個字，超過以...取代
										$book_name="砲來了，金門快跑!(三版)砲來了，金門快跑!(三版)砲來了，金門快跑!(三版)";
										$length=25;
										content_show_length($book_name, $length);
									?>
								</h3>
								<div class="book-inf cf">
									<span class="book-auth">作者：張友漁</span>
									<span class="book-price tdlt">定價：290 元</span>
									<span class="book-price">特價：280 元</span>
								</div>
								<div class="add_to_cart">
									<button type="button" class="btn btn-sacca btn-addCart">
										<span class="btn_inner"> <i class="icon icon-cart"></i>加入購物車 </span>
									</button>
								</div>
							</figcaption>
						</figure>
					</li>

				</ul>
			</div><!-- /.blockMod-block  END  !! -->
		</div><!-- /.blockMod__hot  END  !! -->

	</article>



</div>
</main>


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

	$(".js-navItem2").addClass('active');
	$(".js-subNavItem1").addClass('active');


})
</script>
<script>

$(window).load(function() {
	$("#bannerSlider").flexslider({
		animation      : "fade",
		controlNav     : true,
		animationLoop  : true,
		slideshow      : true,
		slideshowSpeed : 5000
	})
});
</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
?>

</body>
</html>
