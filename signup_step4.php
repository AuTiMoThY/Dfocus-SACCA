<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>加入會員 - STEP4 | 四也出版</title>

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
		<div class="signup-steps step4 hide_txt">STEP4 確認入會資料</div>
		<form action="gotoLogin.php" class="signup-form cf">
			<div class="signup-block">
				<hgroup>
					<h2 class="txtImg-title-confirm hide_txt">確認入會資料</h2>
				</hgroup>
				<div class="confirm-block">
				<ul class="cf">
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">會員帳號</label>
							<span class="txt-gr1 txt-fz13 ib">yoman</span>
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">姓　　名</label>
							<span class="txt-gr1 txt-fz13 ib">王小鳴&emsp;&emsp;&emsp;先生</span>
						</span>
					</li>
					<li style="margin-bottom:3.5em;">
						<span class="frm--dfocus">
							<label for="birthday" class="frm__label ib">生　　日</label>
							<span class="txt-gr1 txt-fz13 ib">1950-07-02</span>
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">電子信箱</label>
							<span class="txt-gr1 txt-fz13 ib">yoman@gmail.com</span>
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">白天聯繫電話</label>
							<span class="ib txt-gr1 txt-fz13">02-2506-6111</span>
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">晚上聯繫電話</label>
							<span class="ib txt-gr1 txt-fz13">02-2506-6111</span>
						</span>
					</li>
					<li style="margin-bottom:3.5em;">
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">手機號碼</label>
							<span class="ib txt-gr1 txt-fz13">0911-222-333</span>
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">職　　別</label>
							<span class="txt-gr1 txt-fz13 ib">學生</span>
						</span>
					</li>
					<li style="margin-bottom:3.5em;">
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">任職單位</label>
							<span class="txt-gr1 txt-fz13 ib">任職單位</span>
							<label for="" class="frm__label ib" style="width:auto;">職稱</label>
							<span class="txt-gr1 txt-fz13 ib">職稱</span>
						</span>
					</li>
					<li style="margin-bottom:3.5em;">
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">連絡地址</label>
							<span class="txt-gr1 txt-fz13 ib">104 台北市中山區 復興北路290號15樓</span>
						</span><br>
					</li>
				</ul>
				</div>
				<div class="yoman">
					
				</div>


				<div class="other_link">
					<h3 class="txt-gr2">有購物或其他問題嗎?</h3>
					<p class="txt-gr2">前往</p>
					<ul class="cf">
						<li><a href="business.php" class="txt-gr1">連絡四也</a></li>
						<li><a href="cart_note.php" class="txt-gr1" target="_blank">購物說明與注意事項</a></li>
					</ul>
				</div>
			</div>
			<div class="btns">
				<button type="button" class="btn btn-reset btn-material-grey first_btn" onclick="javascript: history.go(-1)">回上一步</button>
				<button type="submit" class="btn btn-submit btn-material-pink">確認送出</button>
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


	function yoman() {
		setInterval(function () {
			$('.yoman').toggleClass('animated').toggleClass('bounce');
		}, 3000);
	}
	yoman();


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
