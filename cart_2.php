<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>購物車 - STEP2 | 四也出版</title>

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
		<div class="cart-steps step2 hide_txt">STEP2 填寫資訊</div>
		<form action="gotoCartStep3.php" class="cart-form cf">
			<div class="cart-block">
<div class="row member_inf">
	<hgroup>
		<h2 class="txtImg-title-member_inf hide_txt">會員資訊</h2>
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
		<li style="">
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">手機號碼</label>
				<span class="ib txt-gr1 txt-fz13">0911-222-333</span>
			</span>
		</li>
		<li style="">
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">連絡地址</label>
				<span class="txt-gr1 txt-fz13 ib">104 台北市中山區 復興北路290號15樓</span>
			</span><br>
		</li>
	</ul>
	</div>
</div>
<div class="row recipient_inf">
	<hgroup>
		<h2 class="txtImg-title-recipient_inf hide_txt ib">收件人資訊</h2>
		<input type="checkbox" name="" id="memberInf" class="ib" style="margin-left: 1.8em;">
		<label for="memberInf" class="txt-gr1 txt-fz13 ib">同會員資訊</label>
	</hgroup>
	<ul class="cf">
		<li>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">姓　　名</label>
				<input type="text" name="" id="" class="frm__field s1 ib" placeholder="">
				<input type="radio" name="sex" id="sexM" class="frm__radio">
				<label for="sexM" class="frm__label">男</label>
				<input type="radio" name="sex" id="sexF" class="frm__radio">
				<label for="sexF" class="frm__label">女</label>
			</span>
		</li>
		<li>
			<span class="frm--dfocus required">
				<label for="" class="frm__label ib">白天聯繫電話</label>
				<input type="text" name="" id="" class="frm__field s1 ib" placeholder="" onkeypress="return isNumberKey(event)">
				<input type="text" name="" id="" class="frm__field s3 ib" placeholder="分機" onkeypress="return isNumberKey(event)">
				<span class="example txt-gr1 txt-fz13">填寫範例：02-2506-6111</span>
			</span>
		</li>
		<li>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">晚上聯繫電話</label>
				<input type="text" name="" id="" class="frm__field s1 ib" placeholder="" onkeypress="return isNumberKey(event)">
				<input type="text" name="" id="" class="frm__field s3 ib" placeholder="分機" onkeypress="return isNumberKey(event)">
				<span class="example txt-gr1 txt-fz13">填寫範例：02-2506-6111</span>
			</span>
		</li>
		<li style="">
			<span class="frm--dfocus required">
				<label for="" class="frm__label ib">手機號碼</label>
				<input type="text" name="" id="" class="frm__field ib" placeholder="" onkeypress="return isNumberKey(event)">
				<span class="example txt-gr1 txt-fz13">填寫範例：0911-222-333</span>
			</span>
		</li>
		<li style="">
			<span class="frm--dfocus required">
				<label for="" class="frm__label ib">連絡地址</label>
				<span class="txt-gr1 txt-fz13">臺灣地區</span>
				<div id="twzipcode" class="ib">
				    <div data-role="zipcode"
				         data-name="zipcode"
				         data-value=""
				         data-style="zipcode-style" class="ib "></div>
				    <div data-role="county"
				         data-name="county[]"
				         data-value="台北市"
				         data-style="county-style" class="ib "></div>
				    <div data-role="district"
				         data-name="district[]"
				         data-value="大安區"
				         data-style="district-style" class="ib "></div>
				</div>
				<input type="text" name="" id="" class="frm__field ib" placeholder="請填入地址">
			</span><br>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib"></label>
				<span class="txt-gr1 txt-fz13">國外地區</span>
				<input type="text" name="" id="" class="frm__field ib" placeholder="請填入您的國別" style="width:264px; margin-right:1px;">
				<input type="text" name="" id="" class="frm__field ib" placeholder="請填入地址">
			</span>
		</li>
	</ul>
</div>
<div class="row invoice_inf">
	<hgroup>
		<h2 class="txtImg-title-invoice_inf hide_txt">發票資訊</h2>
	</hgroup>
	<ul class="cf">
		<li>
			<input type="radio" name="invoice" id="invoice1" class="frm__radio" checked>
			<label for="invoice1" class="frm__label" style="font-weight:bold;margin-right:140px;">二聯式電子發票</label>
			<input type="radio" name="invoice" id="invoice2" class="frm__radio">
			<label for="invoice2" class="frm__label" style="font-weight:bold;">三聯式發票(公司行號報帳用)</label>
			<div class="inp-group ib">
				<ul class="cf">
					<li>
						<label for="" class="frm__label">統一編號</label>
						<input type="text" name="" id="" class="frm__field s1 ib" placeholder="">
					</li>
					<li>
						<label for="" class="frm__label">發票抬頭</label>
						<input type="text" name="" id="" class="frm__field s1 ib" placeholder="">
					</li>
				</ul>
			</div>
		</li>
		<li style="margin-top: 70px;">
			<label for="invoice2" class="frm__label ib" style="font-weight:bold;">發票寄送地址</label>
			<input type="checkbox" name="" id="SameWithTheRecipient" class="ib" style="margin-left: 1.8em;">
			<label for="SameWithTheRecipient" class="txt-gr1 txt-fz13 ib">地址同收件人請打勾</label>
			<!-- 同收件人資訊時顯示  ↓↓↓ -->
			<!-- <span class="txt-gr1 txt-fz13 ib">104 台北市中山區 復興北路290號15樓</span> -->
			<!-- 同收件人資訊時顯示  ↑↑↑ -->
			<div id="twzipcode2" class="" style="margin-top: 10px;">
			    <div data-role="zipcode"
			         data-name="zipcode"
			         data-value=""
			         data-style="zipcode-style" class="ib "></div>
			    <div data-role="county"
			         data-name="county[]"
			         data-value="台北市"
			         data-style="county-style" class="ib "></div>
			    <div data-role="district"
			         data-name="district[]"
			         data-value="大安區"
			         data-style="district-style" class="ib "></div>
				<input type="text" name="" id="" class="frm__field ib" placeholder="請填入地址">
			</div>
		</li>
	</ul>
</div>
<div class="row payment_method">
	<hgroup class="text-right">
		<h2 class="txtImg-title-payment hide_txt left">付款方式</h2>
		<input type="radio" name="payment" id="payment1" class="frm__radio ib" checked>
		<label for="payment1" class="frm__label ib">
			<i class="icon icon-payment1 ib"></i>
			郵政劃撥 / 銀行匯款 / ATM轉帳 (恕不內扣手續費)
		</label>
		<input type="radio" name="payment" id="payment2" class="frm__radio ib">
		<label for="payment2" class="frm__label ib">
			<i class="icon icon-payment2 ib"></i>
			線上刷卡
		</label>
	</hgroup>
	<div class="payment1-block">
		<h3>郵政劃撥</h3>
		<p>
			劃撥戶名：英屬維京群島商四也資本有限公司台灣分公司<br>
			劃撥帳號：50199101
		</p>
		<h3>銀行匯款 / ATM轉帳<span class="txt-r1">（恕不內扣手續費）</span></h3>
		<p>
			銀行：第一銀行（世貿分行）<br>
			銀行代碼：007<br>
			戶名：英屬維京群島商四也資本有限公司台灣分公司<br>
			銀行帳號：166-100-298-09
		</p>
		<img src="dist/images/payment.jpg" alt="" class="temp">
		<p>
			<strong>請完成付款後，將「劃撥or匯款收據」，註明付款人與聯絡電話。</strong><br>
			傳真至(02)2507-3111，或掃描（或拍照）後，e-mail至writer@4yabooks.com<br>
			並來電(02)2506-6111轉866藍小姐確認！
		</p>
	</div>
</div>
			</div><!-- /.cart-block  END  !! -->

			<div class="btns cf" style="position: relative;">
				<a href="javascript:history.go(-1);" class="left txt-gr1" style="color:#646464; font-size: 13px;letter-spacing:1px;position: absolute; bottom:0;"><i class="icon icon-triL"></i>回上一步</a>
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
<script src="plugin/jquery-ui/jquery-ui.js"></script>
<script src="plugin/TWzipcode/jquery.twzipcode.js"></script>
<script>
$(function(){
	$('#twzipcode').twzipcode({});
	$('#twzipcode2').twzipcode({});

// $(".payment1-block").show('slow');
$("input#payment1").click(function(event) {
	$(".payment1-block").slideDown('slow');
});
$("input#payment2").click(function(event) {
	$(".payment1-block").slideUp('slow');
});



// function payment_method() {
// 	if($("#payment1").is("checked")) {
// 		$(".payment1-block").show();
// 	}else {
// 		$(".payment1-block").hide();
// 	}
// }

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
