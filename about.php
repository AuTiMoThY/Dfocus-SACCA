<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>關於四也 | 四也出版</title>

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

<body class="about_page cnt_page">

<?php
// -------------------------------
// header
// -------------------------------
  include_once INC_PATH.'header.php';
?>
<section id="bannerAction" class="banner-wall"></section>

<div id="bannerTrigger"></div>
<main class="">
<section id="aboutRow1" class="about1 row panel">
	<div class="wrapper">
		<header class="title">
			<h2 class="title-en hide_txt">Our story</h2>
			<h3 class="title-tw hide_txt">關於四也‧快樂文創</h3>
		</header>
		<article class="about-art">
			<img src="<?php path_au('img'); ?>about1.png" alt="" class="temp">
		</article>
	</div><!-- /.wrapper  END  !! -->
</section>

<section id="aboutRow2" class="wall-bar">
	<div class="wrapper">
		<div class="slogan">
			<h2>所有的故事<br>都是從眼睛看到船的那一刻開始...</h2>
			<div class="footLogo"><?php include IMG_PATH.'logo.svg'; ?></div>
			<p>
				台灣這片土地，<br>
				有著一群愛閱讀、愛聽故事的孩子。<br>
				<br>
				他們唱歌、寫詩， 長大成了作家、老師、父親和母親，<br>
				赤子之心依舊青春跳動。<br>
				<br>
				時間使人成長， 他們長出力量， 許下願望，<br>
				要做「童心守護」的使者。<br>
				這就是「四也」！
			</p>
		</div>
	</div>
</section>

<section id="aboutRow3" class="about2 row panel">
	<div class="wrapper">
		<header class="title">
			<h2 class="title-en hide_txt">Our work</h2>
			<h3 class="title-tw hide_txt">關於四也‧我們創作</h3>
		</header>
		<article class="about-art">
			<p>四也出版以經營在地作家、畫家、自製書籍出版為主，<br>
				挖掘這一座美麗小島的神祕故事，不管是西班牙統治下的淡水奇航，<br>
				或是國共對峙砲火不斷的金門故事，還是民間傳統節慶裡的庶民狂歡、歷史與記憶，<br>
				都希望藉由四也出版平台，讓臺灣的美麗與風土民情，觸動世界。</p>

			<p>於是，四也有了臺灣最具影響力的歷史、奇幻冒險故事 ──【福爾摩沙冒險小說】系列書籍，<br>
				有了土地教會我們的事 ──【慶典童話】系列書，<br>
				有了孩子通往中國奇幻文學的第一套童話寶典 ──【童話搜神記】系列</p>

			<p>四也出版公司也帶大小朋友用腳走讀文學地景，認識地方文史和歷史資產，<br>
				我們帶大小朋友用眼睛，從原畫學民俗文化，與台北市民交響樂團合作，<br>
				改編書籍故事，帶大小朋友進國家音樂廳，欣賞兒童音樂劇等等，滋養人類最美的靈魂。</p>
			<div id="aboutRow3icon1" class="icon icon1"></div>
			<div id="aboutRow3icon2" class="icon icon2"></div>

		</article>
	</div>
</section>

<section id="aboutRow4" class="about3 row panel">
	<div class="wrapper">
		<header class="title">
			<h2 class="title-en hide_txt">Our concept</h2>
			<h3 class="title-tw hide_txt">四也堅持‧五大理念</h3>
		</header>
		<article class="about-art cf">
			<div class="col-5">
				<div class="icon icon1"></div>
				<p class="q">優先以臺灣為對象，培育孩子樂觀、冒險與夢想三大能力。</p>
			</div>
			<div class="col-5">
				<div class="icon icon2"></div>
				<p class="q">出版品印刷採環保大豆油墨(Soy Ink)，保障接觸使用者的衛生與安全性。</p>
			</div>
			<div class="col-5">
				<div class="icon icon3"></div>
				<p class="q">邀請專業讀者為第一批閱稿人，在作家完成文本時，到校辦理「與作家有約活動」，透過作家與孩子面對面雙向討論，確認文本內容，為孩子種下「喜歡土地、喜歡故事、喜歡自己」的小小種子，做為成長的大力量。</p>
			</div>
			<div class="col-5">
				<div class="icon icon4"></div>
				<p class="q">擴大公司價值核心「內容」的運用範圍，培養和滿足讀者數位資源的需求與使用。</p>
			</div>
			<div class="col-5">
				<div class="icon icon5"></div>
				<p class="q">以出版為媒介，將臺灣的文學與文化，傳播到世界。</p>
			</div>
			<div class="icon icon6"></div>
			<div class="icon icon7"></div>
		</article>
	</div>
</section>

<section id="saccaGroup" class="about4 row panel">
	<div class="wrapper">
		<header class="title">
			<h2 class="title-en hide_txt">Our group</h2>
			<h3 class="title-tw hide_txt">四也顧問‧兒文推手</h3>
		</header>
		<article class="about-art">
			<img src="<?php path_au('img'); ?>aboutGroup.jpg" alt="" class="temp">
		</article>
	</div>
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
$(function() {

	$(".js-navItem1").addClass('active');

	var scrollMagicController = new ScrollMagic.Controller();

	var bannerAction = TweenMax.fromTo('#bannerAction', 0.2,
	{
		// 'background-position': '0 0',
		'opacity': '1'
	},
	{
		// 'background-position': '0 10px'
		'opacity': '0'
	});
	var scene1 = new ScrollMagic.Scene({
		triggerElement: '#bannerTrigger',
		offset: 0
		// duration:
	})
	.setClassToggle('body', 'bannerAction-active')
	.setTween(bannerAction)
	.triggerHook(0)
	// .addIndicators({name: "1 (duration: 0)"})
	.addTo(scrollMagicController);


	var scrollMagicPanel = new ScrollMagic.Controller({
		globalSceneOptions: {
			triggerHook: 'onLeave',
			duration: "50%"
		}
	});

		// get all slides
	var slides = document.querySelectorAll("section.panel");

	// create scene for every slide
	for (var i=0; i<slides.length; i++) {
		new ScrollMagic.Scene({
				triggerElement: slides[i]
			})
			.setPin(slides[i])
			// .addIndicators() // add indicators (requires plugin)
			.addTo(scrollMagicPanel);
	}


	var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 500}});

	// build scenes
	new ScrollMagic.Scene({triggerElement: "#aboutRow3", offset: 50})
					.setClassToggle("#aboutRow3icon1", "flipInX") // add class toggle
					// .addIndicators() // add indicators (requires plugin)
					.addTo(controller);

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
