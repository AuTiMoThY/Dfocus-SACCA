<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>聯絡四也 | 四也出版</title>

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

<body class="biz_page">

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
		<p class="ib txt txt-gr1">聯絡四也</p>
	</div>
</section>

<main class="">


<section class="row">
<div class="wrapper">
	<div class="icon_bg col">
		<svg class="icon svg_icon_writing">
		  <use xlink:href="#shape-writing"></use>
		</svg>
	</div>
	<div class="biz_txt col">
		<p class="txt-gr1">親愛的讀者朋友您好：<br>感謝您對四也出版的支持與愛護，如果您在本網站遇到任何問題（無論是購書、下載目錄、活動報名、書籍資訊等），<br>有任何建議，或有任何需求與提案，都歡迎您寫E-MAIL給我們，或直接電話與我們聯繫。
		</p>
		<ul>
			<li>
				<svg class="icon svg_icon_phone ib">
					<use xlink:href="#shape-phone"></use>
				</svg>
				<span class="txt-r1 ib">電   話： (02)2506-6111 ext.889</span>
			</li>
			<li style="width:60%;">
				<svg class="icon svg_icon_mail ib ml">
					<use xlink:href="#shape-mail"></use>
				</svg>
				<span class="txt-r1 ib">E-mail：writer@4yabooks.com</span>
			</li>
			<li>
				<svg class="icon svg_icon_building ib">
					<use xlink:href="#shape-building"></use>
				</svg>
				<span class="txt-r1 ib">地   址：10478 臺北市中山區復興北路290號15樓</span>
			</li>
			<li>
				<svg class="icon svg_icon_hrtime ib ml">
					<use xlink:href="#shape-hrtime"></use>
				</svg>
				<span class="txt-r1 ib">上班時間：上午9:00~下午6:00</span>
			</li>
			<li>
				<svg class="icon svg_icon_tax ib ml">
					<use xlink:href="#shape-tax"></use>
				</svg>
				<span class="txt-r1 ib">傳   真：(02)2507-3111</span>
			</li>
		</ul>
	</div>
</div>
</section>
<section class="row full_bg">
<div class="wrapper">
	<form action="" class="biz_form">
		<ul>
<li>
	<span class="frm--dfocus ib">
		<label for="bizName" class="frm__label ib">姓　　名：</label>
		<input type="text" id="bizName" name="biz_name" class="frm__field ib">

	</span>
	<span class="frm--dfocus ib">
		<span class="input_radio-group ib">
			<input type="radio" id="sexM" name="sex" class="frm__radio" checked>
			<label for="sexM" class="frm__radio-label">先生</label>
		</span>
		<span class="input_radio-group ib">
			<input type="radio" id="sexF" name="sex" class="frm__radio">
			<label for="sexF" class="frm__radio-label">小姐</label>
		</span>
	</span>
</li>
<li>
	<span class="frm--dfocus ib">
		<label for="bizJob" class="frm__label ib">服務單位：</label>
		<input type="text" id="biz_job" name="bizJob" class="frm__field input-biz_job ib input-job">
	</span>
	<span class="frm--dfocus ib">
		<label for="bizJobTitle" class="frm__label ib">職　　稱：</label>
		<input type="text" id="biz_jobTitle" name="bizJobTitle" class="frm__field ib input-job_title">
	</span>
</li>
<li>
	<span class="frm--dfocus">
		<label for="bizTel" class="frm__label ib">聯絡電話：</label>
		<input type="text" id="bizTel" name="biz_tel" class="frm__field input-tel ib">
	</span>
</li>
<li>
	<span class="frm--dfocus">
		<label for="bizEmail" class="frm__label ib">電子信箱：</label>
		<input type="text" id="bizEmail" name="biz_email" class="frm__field input-email ib">
	</span>
</li>
<li>
	<span class="frm--dfocus">
		<label for="" class="frm__label ib">問題主旨：</label>
		<span class="input_radio-group ib">
			<input type="radio" id="msgTitle1" name="biz_title" class="frm__radio">
			<label for="bizTitle1" class="frm__radio-label">與作家有約</label>
		</span>
		<span class="input_radio-group ib">
			<input type="radio" id="bizTitle2" name="biz_title" class="frm__radio">
			<label for="bizTitle2" class="frm__radio-label">教師研習</label>
		</span>
		<span class="input_radio-group ib">
			<input type="radio" id="bizTitle3" name="biz_title" class="frm__radio">
			<label for="bizTitle3" class="frm__radio-label">地景走讀</label>
		</span>
		<span class="input_radio-group ib">
			<input type="radio" id="bizTitle4" name="biz_title" class="frm__radio">
			<label for="bizTitle4" class="frm__radio-label">寒暑假營隊</label>
		</span>
		<span class="input_radio-group ib">
			<input type="radio" id="bizTitle5" name="biz_title" class="frm__radio">
			<label for="msgTitle5" class="frm__radio-label">其他</label>
			<input type="text" name="" id="">
		</span>

	</span>
</li>
<li>
	<span class="frm--dfocus">
		<label for="bizCnt" class="frm__label col">問題內容：</label>
		<textarea name="biz_cnt" id="bizCnt" class="frm__textarea input-textarea col"></textarea>
	</span>
</li>
<li class="btns">
	<div class="btns-wrap">
		<button type="button" class="btn btn-sacca btn-submit first_btn">
			<span class="btn_inner">確認送出</span>
		</button>
		<button type="reset" class="btn btn-sacca btn-reset">
			<span class="btn_inner">取消重填</span>
		</button>
	</div>
</li>
		</ul>
	</form>
</div>
</section>
<!-- <section class="row ">
<div class="wrapper">
	<div class="icon_bg col">
		<svg class="icon svg_icon_cart">
		  <use xlink:href="#shape-cart"></use>
		</svg>
	</div>
	<div class="biz_txt col">
		<!-- <p class="txt-gr1">親愛的讀者朋友您好：<br>若您遇到相關書籍購買或寄送等問題，可以利用電話，直接和我們連繫，我們將有專人處理您所遇到的相關問題。</p> --
		<p class="txt-r1">四也出版書籍購買等服務專線：</p>
		<ul>
			<li>
				<svg class="icon svg_icon_phone ib">
					<use xlink:href="#shape-phone"></use>
				</svg>
				<span class="txt-r1 ib">電   話： (02)2506-6111 ext.889</span>
			</li>
			<li style="width:60%;">
				<svg class="icon svg_icon_mail ib ml">
					<use xlink:href="#shape-mail"></use>
				</svg>
				<span class="txt-r1 ib">E-mail：writer@4yabooks.com</span>
			</li>
			<li>
				<svg class="icon svg_icon_building ib">
					<use xlink:href="#shape-building"></use>
				</svg>
				<span class="txt-r1 ib">地   址：10478 臺北市中山區復興北路290號15樓</span>
			</li>
			<li>
				<svg class="icon svg_icon_hrtime ib ml">
					<use xlink:href="#shape-hrtime"></use>
				</svg>
				<span class="txt-r1 ib">上班時間：上午9:00~下午6:00</span>
			</li>
			<li>
				<svg class="icon svg_icon_tax ib ml">
					<use xlink:href="#shape-tax"></use>
				</svg>
				<span class="txt-r1 ib">傳   真：(02)2507-3111</span>
			</li>
		</ul>
	</div>
</div>
</section> -->

<section id="mapAction" class="fixBg">
	<div id="mapTrigger" class="map"></div>
</section>


	



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

	$(".js-navItem3").addClass('active');

	var scrollMagicController = new ScrollMagic.Controller();

	var mapAction = TweenMax.fromTo('#mapAction', 0.5,
	{
		// 'background-position': '0 0',
		'opacity': '0'
	},
	{
		// 'background-position': '0 10px'
		'opacity': '1'
	});
	var scene1 = new ScrollMagic.Scene({
		triggerElement: '#mapTrigger',
		offset: 0,
		// duration: 100
	})
	.setClassToggle('body', 'mapAction-active')
	.setTween(mapAction)
	.triggerHook(0.8)
	// .addIndicators({name: "1 (duration: 0)"})
	.addTo(scrollMagicController);


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
