<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>忘記密碼 | 四也出版</title>

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

<body class="member_page forget_page">

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
			<h1 class="txtImg-title-forget hide_txt">會員資料管理</h1>
		</header>
		<!-- 此表單送出後，寄送忘記密碼信件至會員信箱中 -->
		<form action="" class="forget-form">
			<div class="forget-block">
				<ul class="cf">
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">會員帳號</label>
							<input type="text" name="" id="" class="frm__field ib" placeholder="請輸入註冊時填寫的帳號 ( E-mail )">
						</span>
					</li>
				</ul>
				<div class="btns">
					<button type="submit" class="btn btn-submit btn-material-pink first_btn">確認送出</button>
					<button type="reset" class="btn btn-reset btn-material-grey">取消重填</button>
				</div>
			</div>
		</form>

		<!-- 從忘記密碼信件內的連結連過來時顯示此表單 -->
		<form action="" class="forget-form">
			<div class="forget-block">
				<ul class="cf">
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">輸入新密碼</label>
							<input type="text" name="" id="" class="frm__field ib" placeholder="請輸入6~20個英數混合字元，分大小寫">
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">確認新密碼</label>
							<input type="text" name="" id="" class="frm__field ib" placeholder="">
						</span>
					</li>
				</ul>
				<div class="btns">
					<button type="submit" class="btn btn-submit btn-material-pink first_btn">確認送出</button>
					<button type="reset" class="btn btn-reset btn-material-grey">取消重填</button>
				</div>
			</div>
		</form>
	</div><!-- /.signup-container  END  !! -->

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
<script src="plugin/jquery-ui/jquery-ui.js"></script>
<script src="plugin/TWzipcode/jquery.twzipcode.js"></script>

<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode != 46 && charCode != 45 && charCode > 31 && (charCode < 48 || charCode > 57)) {
     	alert("只能輸入數字");
		return false;
	}

    return true;
}
$(function(){

	// $(".js-subNavItem5").addClass('active');



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
