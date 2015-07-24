<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>會員中心 | 四也出版</title>

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

	<div class="container member-container">
		<header>
			<h1 class="txtImg-title-member hide_txt">會員中心</h1>
		</header>
		<div class="container_12 cf">
			<div class="col-style1-6">
				<h2 class="txtImg-title-join hide_txt">誠摯邀請您 加入四也會員</h2>
				<div id="joinSlider" class="flexslider">
					<ul class="slides">
						<li>
<div class="slide-block">
	<i class="icon icon-join-1 ib"></i>
	<p class="ib">免費收到《四也視野書訊》電子報，免費或優惠參加相關講座、課程等活動。</p>
</div>
						</li>
						<li>
<div class="slide-block">
	<i class="icon icon-join-2 ib"></i>
	<p class="ib">加入四也會員，獨家或優先享有「作家/畫家」簽名書，或特別版珍藏本。</p>
</div>
						</li>
						<li>
<div class="slide-block">
	<i class="icon icon-join-3 ib"></i>
	<p class="ib">再次購物時，省卻填寫資料時間，也可線上查詢購買紀錄及訂單狀況，輕鬆方便。</p>
</div>
						</li>
					</ul>
				</div>
				<div class="phone">
					會員服務專線：<br>(02)2506-6111
				</div>
				<a href="signup.php" class="btn btn-submit btn-material-pink">加入會員</a>
			</div>
			<div class="col-style1-6">
				<h2 class="txtImg-title-login hide_txt">會員登入</h2>
				<form action="gotoMember.php" class="u_login-form2 cf">
				<ul class="cf">
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">會員帳號</label>
							<input type="text" name="" id="" class="frm__field ib" placeholder="請輸入您的 e-mail">
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">登入密碼</label>
							<input type="password" name="" id="" class="frm__field ib" placeholder="請輸入您的登入密碼">
						</span>
					</li>
				</ul>
					<a href="forget.php" class="forget">忘記密碼</a>
					<button type="submit" class="btn btn-submit btn-material-pink">登入</button>
				</form>
			</div>
		</div>
		
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

	$("#joinSlider").flexslider({
		animation      : "slide",
		controlNav     : true,
		animationLoop  : true,
		slideshow      : true,
		directionNav   : false,
		// slideshowSpeed : 99999
	})




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
