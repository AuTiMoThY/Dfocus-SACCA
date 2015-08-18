<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>購物車 - STEP4 | 四也出版</title>

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
		<div class="cart-steps step4 hide_txt">STEP4 確認訂單</div>
		<form action="gotoCartStep4.php" class="cart-form cf">
			<div class="cart-block">
<div class="row">
	<div class="order_wrap">
		<div class="order_block">
			<p>訂購成功！本站將會主動由系統發送訊息至您的電子信箱。<br>感謝您訂購四也出版商品，請務必詳記本次訂單編號，以便後續查詢使用！</p>
			<div class="order_number">A102001</div>
		</div>
	</div>
</div>
<!-- <div class="row">
	<div class="payment-result">付款方式：線上刷卡</div>
</div> -->
<div class="row">
	<div class="payment-result">付款方式：郵政劃撥 / 銀行匯款 / ATM轉帳</div>
</div>
<div class="row">
	<table class="cart-table">
		<tr>
			<th class="text-left">商品資訊</th>
			<th class="text-center">單價</th>
			<th class="text-center">數量</th>
			<th class="text-center">小計</th>
		</tr>
		<tr>
			<td class="text-left"><span class="book-name">月光三部曲Ⅲ：回家之路1947</span></td>
			<td class="cart-number">290</td><!-- 單價 -->
			<td class="cart-number">1</td><!-- 數量 -->
			<td class="cart-number">290</td><!-- 小計 -->
		</tr>
		<tr>
			<td class="text-left"><span class="book-name">拯救邏輯大作戰：猜臉島歷險記</span></td>
			<td class="cart-number">350</td><!-- 單價 -->
			<td class="cart-number">1</td><!-- 數量 -->
			<td class="cart-number">350</td><!-- 小計 -->
		</tr>
		<tr>
			<td colspan="4" class="container_12 cf cart-total-block">
				<div class="col-style1-6">
					<span class="txt-r4">
						<i class="fa fa-star"></i> 購物滿 1000 元 即可享有免運折抵
					</span>
				</div>
				<div class="col-style1-6 total_calc">
					<ul class="cf">
						<li>
							<span class="col-style1-6 text-left">商品小計</span>
							<span class="col-style1-6 text-right cart-number">640</span>
						</li>
						<li>
							<span class="col-style1-6 text-left">運費金額</span>
							<span class="col-style1-6 text-right cart-number">80</span>
						</li>
						<li>
							<span class="col-style1-6 text-left">運費折抵</span>
							<span class="col-style1-6 text-right cart-number">0</span>
						</li>
						<li class="total txt-r1">
							<span class="col-style1-6 text-left">總金額</span>
							<span class="col-style1-6 text-right txt-r1">
								NT$ <span class="txt-fz2">720</span>
							</span>
						</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="row member_inf inf_block">
	<hgroup>
		<h2 class="txtImg-title-member_inf hide_txt">會員資訊</h2>
	</hgroup>
	<div class="confirm-block">
	<ul class="cf">
		<li>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">會員帳號：</label>
				<span class="txt-gr1 txt-fz13 ib">yoman</span>
			</span>
		</li>
		<li>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">姓　　名：</label>
				<span class="txt-gr1 txt-fz13 ib">王小鳴&emsp;&emsp;先生</span>
			</span>
		</li>
		<li>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">白天聯繫電話：</label>
				<span class="ib txt-gr1 txt-fz13">02-2506-6111</span>
			</span>
		</li>
		<li>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">晚上聯繫電話：</label>
				<span class="ib txt-gr1 txt-fz13">02-2506-6111</span>
			</span>
		</li>
		<li style="">
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">手機號碼：</label>
				<span class="ib txt-gr1 txt-fz13">0911-222-333</span>
			</span>
		</li>
		<li style="">
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">連絡地址：</label>
				<span class="txt-gr1 txt-fz13 ib">104 台北市中山區 復興北路290號15樓</span>
			</span>
		</li>
		<li style="">
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">發票資訊：</label>
				<span class="txt-gr1 txt-fz13 ib">三聯式（公司）</span>
				<span class="txt-r1 txt-fz13 ib">※ 依統一發票使用辦法規定：個人戶（二聯式）發票一經開立，不得任意更改為公司戶（三聯式）發票。</span>
			</span>
		</li>
		<!-- 若為二聯式發票則不顯示  ↓↓↓ -->
		<li style="">
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">發票抬頭：</label>
				<span class="txt-gr1 txt-fz13 ib">鼎豐整合行銷</span>
				<label for="" class="frm__label ib">公司統一編號：</label>
				<span class="txt-gr1 txt-fz13 ib">53564604</span>
			</span>
		</li>
		<li style="">
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">發票寄送地址：</label>
				<span class="txt-gr1 txt-fz13 ib">110台北市萬華區長沙街2段91號</span>
			</span>
		</li>


	</ul>
	</div>
</div>
<div class="row recipient_inf inf_block">
	<hgroup>
		<h2 class="txtImg-title-recipient_inf hide_txt ib">收件人資訊</h2>
	</hgroup>
	<ul class="cf">
		<li>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">會員帳號：</label>
				<span class="txt-gr1 txt-fz13 ib">yoman</span>
			</span>
		</li>
		<li>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">姓　　名：</label>
				<span class="txt-gr1 txt-fz13 ib">王小鳴&emsp;&emsp;先生</span>
			</span>
		</li>
		<li>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">白天聯繫電話：</label>
				<span class="ib txt-gr1 txt-fz13">02-2506-6111</span>
			</span>
		</li>
		<li>
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">晚上聯繫電話：</label>
				<span class="ib txt-gr1 txt-fz13">02-2506-6111</span>
			</span>
		</li>
		<li style="">
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">手機號碼：</label>
				<span class="ib txt-gr1 txt-fz13">0911-222-333</span>
			</span>
		</li>
		<li style="">
			<span class="frm--dfocus">
				<label for="" class="frm__label ib">連絡地址：</label>
				<span class="txt-gr1 txt-fz13 ib">104 台北市中山區 復興北路290號15樓</span>
			</span>
		</li>
	</ul>
</div>

<!-- 使用匯款or劃撥時顯示  ↓↓↓ -->
<div class="row payment1-block inf_block">
	<hgroup>
		<h2 class="txtImg-title-payment_inf hide_txt ib">付款資訊</h2>
	</hgroup>
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
<!-- 使用匯款or劃撥時顯示  ↑↑↑ -->

			</div><!-- /.cart-block  END  !! -->

			<div class="btns cf" style="position: relative;">
				<div class="link-cart_note"><a href="cart_note.php" class="txt-gr1 txt-fz13" target="_blank">購物說明與注意事項</a></div>
				<!-- <button type="reset" class="btn btn-reset btn-material-grey first_btn">取消重填</button> -->
				<a href="<?php webPageUrlAu('index'); ?>" class="btn btn-submit btn-material-pink">
					訂購完成 回首頁
				</a>
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
