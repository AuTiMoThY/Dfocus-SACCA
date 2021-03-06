<?php 
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>四也出版 ╳ 快樂文創</title>

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

<body class="index_page">

<?php
// -------------------------------
// header
// -------------------------------
  include_once INC_PATH.'header.php';
?>
<section class="banner">
	<div id="slider" class="flexslider">
		<ul class="slides">
			<li><img src="<?php path_au('img'); ?>banner1.jpg" alt=""></li>
			<li><img src="<?php path_au('img'); ?>banner2.jpg" alt=""></li>
			<li><img src="<?php path_au('img'); ?>banner3.jpg" alt=""></li>
			<li><img src="<?php path_au('img'); ?>banner2.jpg" alt=""></li>
			<li><img src="<?php path_au('img'); ?>banner1.jpg" alt=""></li>
		</ul>
	</div>
	<div id="carousel" class="flexslider">
		<ul class="slides">
			<li><img src="<?php path_au('img'); ?>banner1.jpg" alt=""></li>
			<li><img src="<?php path_au('img'); ?>banner2.jpg" alt=""></li>
			<li><img src="<?php path_au('img'); ?>banner3.jpg" alt=""></li>
			<li><img src="<?php path_au('img'); ?>banner2.jpg" alt=""></li>
			<li><img src="<?php path_au('img'); ?>banner1.jpg" alt=""></li>
		</ul>
	</div>
</section>

<main>
<div class="wrapper">
	<section class="wall-wrap cf">
		<div class="wall-col1 col-3">
			<!-- 四也全書 -->
			<div class="wall-block wall-1 sacca_books">
				<figure class="wall-figure">
					<a href="<?php webPageUrlAu('books'); ?>"></a>
					<div class="pic"><img src="<?php path_au('temp'); ?>index_pic1.jpg" alt=""></div>
					<figcaption>
						<h3>四也全書</h3>
						<p>
<?php
     //  此處示意 顯示內文前 45 個字，超果以...取代
     $cnt0 = "為孩子種下「喜歡土地、喜歡故事、喜歡自己」的小小種子。";
     $content0 = strip_tags($cnt0);
     $content = mb_substr($content0,0,45,'UTF-8');
     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     echo $content;
?>
						</p>
					</figcaption>
				</figure>
			</div><!-- 四也全書  END  !! -->
			<!-- 最新訊息 -->
			<div class="wall-block wall-2 sacca_news">
				<figure class="wall-figure">
					<a href="<?php webPageUrlAu('news'); ?>"></a>
					<div class="pic"><img src="<?php path_au('temp'); ?>index_pic3.jpg" alt=""></div>
					<figcaption>
						<h3>最新訊息</h3>
						<p class="news-time txt-sub">2015/03/11</p>
						<p class="news-intro">
<?php
     //  此處示意 顯示內文前 45 個字，超果以...取代
     $cnt0 = "【接班吧！創世代！】新書& 新歌發表民歌演唱會(台北) 示意文字最多顯示標題至第3行。【接班吧！創世代！】新書& 新歌發表民歌演唱會(台北) 示意文字最多顯示標題至第3行。";
     $content0 = strip_tags($cnt0);
     $content = mb_substr($content0,0,45,'UTF-8');
     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     echo $content;
?>
						</p>
					</figcaption>
				</figure>
			</div><!-- 最新訊息  END  !! -->
		</div>
		<div class="wall-col2 col-3">
			<!-- 教學資源分享 -->
			<div class="wall-block wall-3 sacca_resource">
				<figure class="wall-figure">
					<a href="<?php webPageUrlAu('resource'); ?>"></a>
					<div class="pic"><img src="<?php path_au('temp'); ?>index_pic2.jpg" alt=""></div>
					<figcaption>
						<h3>教學資源分享</h3>
						<p>
<?php
     //  此處示意 顯示內文前 45 個字，超果以...取代
     $cnt0 = "培育孩子樂觀、冒險與夢想三大能力，滋養孩子最美的靈魂。";
     $content0 = strip_tags($cnt0);
     $content = mb_substr($content0,0,45,'UTF-8');
     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     echo $content;
?>
						</p>
					</figcaption>
				</figure>
			</div><!-- 教學資源分享  END  !! -->
			<!-- 活動紀錄報導 -->
			<div class="wall-block wall-4 sacca_activity">
				<figure class="wall-figure">
					<a href="<?php webPageUrlAu('activity'); ?>"></a>
					<div class="pic"><img src="<?php path_au('temp'); ?>index_pic4.jpg" alt=""></div>
					<figcaption>
						<h3>活動紀錄報導</h3>
						<p class="activity-time txt-sub">2015/03/07</p>
						<p class="activity-intro">
<?php
     //  此處示意 顯示內文前 45 個字，超果以...取代
     $cnt0 = "野百合父親寫給太陽花女兒的40封信";
     $content0 = strip_tags($cnt0);
     $content = mb_substr($content0,0,45,'UTF-8');
     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     echo $content;
?>
						</p>
					</figcaption>
				</figure>
			</div><!-- 活動紀錄報導  END  !! -->
		</div>
		<div class="wall-col3 col-3">
			<!-- 臺灣歷史記憶箱 -->
			<div class="wall-block wall-5 sacca_wallSlider">
				<div id="wallSlider" class="flexslider">
					<ul class="slides">
						<li>
							<figure class="wall-figure">
								<a href="history_cnt.php"></a>
								<div class="pic"><img src="<?php path_au('temp'); ?>index_banner2_1.jpg" alt=""></div>
								<figcaption>
									<h3>臺灣歷史記憶箱</h3>
									<p class="sacca_wallSlider-subTitle txt-sub">│ 臺灣歷史專欄 │</p>
									<p>
<?php
     //  此處示意 顯示 "標題" 前 45 個字，超果以...取代
     $cnt0 = "正典結束後，族人將不分男女老少，大家手牽手在長老引領之下，合著舞步歌頌戰神及族人將不分男女老少。";
     $content0 = strip_tags($cnt0);
     $content = mb_substr($content0,0,45,'UTF-8');
     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     echo $content;
?>
									</p>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure class="wall-figure">
								<a href="history_cnt.php"></a>
								<div class="pic"><img src="<?php path_au('temp'); ?>index_banner2_2.jpg" alt=""></div>
								<figcaption>
									<h3>臺灣歷史記憶箱</h3>
									<p class="sacca_wallSlider-subTitle txt-sub">│ 世界歷史專欄 │</p>
									<p>
<?php
     //  此處示意 顯示 "標題" 前 45 個字，超果以...取代
     $cnt0 = "Mayasvi戰祭的6個階段‧從頭目帶領大家把火炬帶進祭場中央後、殺豬、砍赤榕樹(神樹)、唱迎神曲迎接戰神";
     $content0 = strip_tags($cnt0);
     $content = mb_substr($content0,0,45,'UTF-8');
     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     echo $content;
?>
									</p>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure class="wall-figure">
								<a href="history_cnt.php"></a>
								<div class="pic"><img src="<?php path_au('temp'); ?>index_banner2_3.jpg" alt=""></div>
								<figcaption>
									<h3>臺灣歷史記憶箱</h3>
									<p class="sacca_wallSlider-subTitle txt-sub">│ 主題歷史專欄 │</p>
									<p>
<?php
     //  此處示意 顯示 "標題" 前 45 個字，超果以...取代
     $cnt0 = "路祭：頭目或長老帶領男子勇士，步行至各家祭屋祝禱求神保佑安居。";
     $content0 = strip_tags($cnt0);
     $content = mb_substr($content0,0,45,'UTF-8');
     if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
     echo $content;
?>
									</p>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div><!-- /.wall-block wall-5 sacca_wallSlider 臺灣歷史記憶箱  END  !! -->
		</div><!-- /.wall-col3  END  !! -->
	</section>
	<section class="wall-wrap cf">
		<div class="wall-col4 left">
			<div class="wall-block wall-6">
				<div class="fb-block">
					<img src="dist/images/temp/tem_fb.jpg" alt="" class="temporary">
				</div>
			</div><!-- /.wall-block wall-6  END  !! -->
		</div><!-- /.wall-col4  END  !! -->
		<div class="wall-col5 left">
			<div class="wall-block wall-7">
				<div id="bannerSlider" class="flexslider">
					<ul class="slides">
						<li><a href="javascript:alert('可由後台自訂連結');"><img src="<?php path_au('temp'); ?>index_banner3_1.jpg" alt=""></a></li>
						<li><a href="javascript:alert('可由後台自訂連結');"><img src="<?php path_au('temp'); ?>index_banner3_2.jpg" alt=""></a></li>
						<li><a href="javascript:alert('可由後台自訂連結');"><img src="<?php path_au('temp'); ?>index_banner3_3.jpg" alt=""></a></li>
						<li><a href="javascript:alert('可由後台自訂連結');"><img src="<?php path_au('temp'); ?>index_banner3_4.jpg" alt=""></a></li>
						<li><a href="javascript:alert('可由後台自訂連結');"><img src="<?php path_au('temp'); ?>index_banner3_5.jpg" alt=""></a></li>
					</ul>
				</div>
			</div><!-- /.wall-block wall-7  END  !! -->
		</div><!-- /.wall-col5  END  !! -->
	</section>
</div><!-- /.wrapper  END  !! -->
</main>
<section class="wall-bar">
	<div class="wrapper">
		<div class="slogan">
			<h2>所有的故事<br>都是從眼睛看到船的那一刻開始...</h2>
			<div class="footLogo"><?php include IMG_PATH.'logo.svg'; ?></div>
			<p>
				臺灣這片土地，<br>
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

<section class="fixBg">
	<div class="slogan2-wrap">
		<section class="wall-bar slogan2">
			<div class="wrapper">
				<p>船象徵「冒險與遠航」，是許多經典故事的起源。<br>我們願成為孩子們的舵手，和他們一起乘風破浪，從閱讀之海捕捉成長的養分。<br>同時，也用我們的眼睛，守護孩子們的冒險旅程。</p>
				<div class="footLogo"><?php include IMG_PATH.'logo.svg'; ?></div>
			</div>
		</section>
	</div>
</section>

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
var bannerLiLen = $("#carousel .slides li").length;
var caWidth = $("#carousel").width();
var caItemWidth = (caWidth / bannerLiLen) - 10;
console.log(caWidth);
console.log(bannerLiLen);
$(window).load(function() {
	// The slider being synced must be initialized first
	$('#carousel').flexslider({
		animation     : "slide",
		controlNav    : false,
		animationLoop : true,
		slideshow     : false,
		itemWidth     : caItemWidth,
		asNavFor      : '#slider'
	});
	$('#slider').flexslider({
		animation     : "slide",
		controlNav    : false,
		animationLoop : true,
		slideshow     : true,
		sync          : "#carousel",
		// controlNav: "thumbnails"
	});
	$("#wallSlider").flexslider({
		animation      : "fade",
		controlNav     : true,
		animationLoop  : true,
		slideshow      : true,
		slideshowSpeed : 5000
	})
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
