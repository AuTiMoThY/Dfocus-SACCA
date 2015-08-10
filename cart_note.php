<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>購物說明與注意事項 | 四也出版</title>

<?php
// -------------------------------
// SEO
// CSS
// Script in the HEAD
// -------------------------------
  include_once INC_PATH.'head.php';
?>
<link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.css">

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
		<a href="<?php webPageUrlAu('books');?>" class="ib txt txt-gr1">四也全書</a>
		<span class="gt ib txt txt-gr1">&gt;</span>
		<p class="ib txt txt-gr1">購物說明與注意事項</p>
	</div>
</section>

<!-- <main class=""> -->


<section class="row">
<div class="wrapper">

	<div class="container cart_note-container">
		<header>
			<h1 class="txtImg-title-cart_note hide_txt">購物說明與注意事項</h1>
		</header>
		<div class="cart_note-block">
			<hgroup>
				<h2 class="txtImg-title-cart_note1 hide_txt">運費</h2>
			</hgroup>
<div class="cart_note-cnt">
	<h3>◎臺灣本島地區</h3>
	<p>運費依您訂購的商品總金額計算，購書折扣後總金額未達1000元者，須負擔郵寄處理費80元！<br>
	以下情況恕無法享有滿1,000元免運費之優惠，請多加留意： </p>
	<ul class="disc">
		<li>訂購之商品已出貨後，追加數量或加訂其他商品且折扣後金額未滿1,000元者，恕無法享有免運費優惠。</li>
		<li>於不同工作天訂購多筆訂單，且已個別出貨者，恕不累計總訂購金額，無法享有免運費優惠。</li>
	</ul>
	<h3 style="margin-top: 1.8em;">◎離島地區 (金門、馬祖、澎湖、蘭嶼等地)、與海外地區(非臺灣區域之海外地區 (如：香港、大陸、歐美等地)</h3>
	<p>因運費與臺灣本島不同，將<strong>另行報價</strong>，故無消費滿1000元以上免運費之優惠。造成不便，敬請見諒。</p>
	<p class="b">服務電話：+886-2-2506-6111 ext.866（週一~週五Am9:00~Pm06:00）<br>服務信箱：writer@4yabooks.com</p>
	<table class="cart_note-table">
		<tr>
			<th width="100">
				<div class="out">
					<span class="method">方式</span>
					<span class="area">地區</span>
				</div>
			</th>
			<th>
				宅配<br>(需先付款)
			</th>
			<th>
				非宅配訂單<br>(需先計算運費)
			</th>
		</tr>
		<tr>
			<td>臺灣本島</td>
			<td>80元，當日單筆消費滿1000元，免運費</td>
			<td><div class="slash">&emsp;</div></td>
		</tr>
		<tr>
			<td>臺灣離島</td>
			<td rowspan="2"><div class="slash">&emsp;</div></td>
			<td rowspan="2">成立訂單>人工計算運費>回報運費及通知付款<br>(送達地非臺灣本島的訂單，一律”先成立訂單，後付款”)
		</tr>
		<tr>
			<td>海外</td>
	</td>
		</tr>
	</table>
</div>
		</div><!-- /.cart_note-block  END  !! -->

		<div class="cart_note-block">
			<hgroup>
				<h2 class="txtImg-title-cart_note2 hide_txt">海外地區訂購</h2>
			</hgroup>
<div class="cart_note-cnt">
	<ol class="decimal">
	<li>四也書城上商品價格與寄送郵資均是以新臺幣計算，實際扣款金額需視當日匯率換算，建議您可向信用卡銀行查詢。</li>
	<li>因各國海關規定不同，為避免通關發生問題，海外訂單恕不提供贈品，敬請見諒。</li>
	<li>提醒您：各地的海關有可能會對包裹進行抽查，並依當地的進口關稅規定，核定貨物是否需要額外繳交關稅(此與寄送方式無關)，建議可先確認當地海關規定。</li>
	<li>各國可能依進口關稅規定，核定貨物是否需要繳交關稅、消費稅。當商品受到抽檢，其費用將由收件人負擔。若收件人不願取貨，相關費用或貨件遭銷毀、退回之損失，亦由訂購人自行負擔。</li>
	<li>海外購物屬免稅性質，出貨單視同購買憑證，無另開立發票。</li>
	<li>海外訂單不提供退換貨服務，故請您於審慎評估後再行訂購；若您收到包裹有任何問題，請來信writer@4yabooks.com詢問，<strong class="txt-r">切勿自行將商品寄回</strong>。</li>
	</ol>
</div>
		</div><!-- /.cart_note-block  END  !! -->

		<div class="cart_note-block">
			<hgroup>
				<h2 class="txtImg-title-cart_note3 hide_txt">退換貨說明</h2>
			</hgroup>
<div class="cart_note-cnt">
	<p>四也書城提供會員七天鑑賞期服務，若要辦理退換貨，請您收到商品後七天內，備妥您的訂單編號或訂購人相關資料，來電或來信客服中心，將有專人為您服務。</p>
	<p>由於退換貨手續包含金額款項與物流處理繁複，請務必先與客服人員聯繫，以免往返確認延誤。</p>
	<p class="b">服務電話：+886-2-2506-6111 ext.866（週一~週五Am9:00~Pm06:00）<br>服務信箱：writer@4yabooks.com</p>
	<p class="txt-r">提醒您，退換貨服務需注意下列事項</p>
	<ol class="decimal">
	<li>以郵寄印刷品掛號寄回四也出版公司，若商品在退回途中遺失，四也將不負責賠償，因此退回之商品敬請使用需要收件者簽收的方式寄出(如郵局印刷品掛號)，以確保四也未收到退回的商品時，會員可自行查詢的依據。</li>
	<li>您所退回的商品必須保持商品本體、附件、內外包裝、配件、贈品、保證書、原廠包裝及所有隨附文件或資料的完整性，切勿缺漏任何配件或損毀原廠外盒與包裝。</li>
	<li>請您以送貨使用之原包裝箱袋將退貨商品包裝妥當，若原包裝箱袋已遺失，請另使用其他箱袋包覆於商品原廠包裝之外，切勿直接於原廠包裝上黏貼紙張或書寫文字。</li>
	<li>若欲退貨的商品，係參加優惠活動而組套出售的促銷商品（如任選x本xxx元的活動），或部分優惠套書組合，不可單品退貨，需將套組商品一起退回。</li>
	<li>會員訂購後若有大量與頻繁退換貨之情況發生，為不造成雙方作業上的困擾，四也書城可能會視情況對該會員採取拒絕交易或永久取消其會員資格辦理。</li>
	</ol>
	<p style="margin-top: 1.8em;"><strong>※請留意，鑑賞期非試用期，若您收到商品經檢視後有任何不合意之處，請勿拆開使用，並立即依照退貨規定辦理退貨。</strong></p>
</div>
		</div><!-- /.cart_note-block  END  !! -->

	</div><!-- /.cart_note-container  END  !! -->

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
