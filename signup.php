<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>加入會員 - STEP1 | 四也出版</title>

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

<body class="member_page signup_page">

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
		<p class="ib txt txt-gr1">會員中心</p>
	</div>
</section>

<!-- <main class=""> -->


<section class="row">
<div class="wrapper">

	<div class="container signup-container">
		<header>
			<h1 class="txtImg-title-signup hide_txt">加入會員</h1>
		</header>
		<div class="signup-steps step1 hide_txt">STEP1 設定登入帳號</div>
		<form action="gotoStep2.php" class="signup-form cf">
			<div class="signup-block">
				<hgroup>
					<h2 class="txtImg-title-set1 hide_txt">帳號設定</h2>
					<p>標示＊為必填欄位</p>
				</hgroup>
				<ul class="cf">
					<li>
						<span class="frm--dfocus required">
							<label for="" class="frm__label ib">會員帳號</label>
							<input type="text" name="" id="" class="frm__field ib" placeholder="請輸入您的帳號">
						</span>
					</li>
					<li>
						<span class="frm--dfocus required">
							<label for="" class="frm__label ib">輸入密碼</label>
							<input type="password" name="" id="" class="frm__field ib" placeholder="請輸入6~20個英數混合字元，分大小寫">
						</span>
					</li>
					<li>
						<span class="frm--dfocus required">
							<label for="" class="frm__label ib">確認密碼</label>
							<input type="password" name="" id="" class="frm__field ib" placeholder="請再輸入一次密碼">
						</span>
					</li>
				</ul>
				<div class="other_link">
					<h3 class="txt-gr2">有購物或其他問題嗎?</h3>
					<p class="txt-gr2">前往</p>
					<ul class="cf">
						<li><a href="business.php" class="txt-gr1">連絡四也</a></li>
					</ul>
				</div>
			</div>
			<div class="btns">
				<button type="reset" class="btn btn-reset btn-material-grey first_btn">取消重填</button>
				<button type="submit" class="btn btn-submit btn-material-pink">下一步</button>
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
