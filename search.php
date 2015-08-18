<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>搜尋結果 | 四也出版</title>

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

<body class="resource_page list_page">

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
		<p class="ib txt txt-gr1">搜尋結果</p>
	</div>
</section>

<!-- <main class=""> -->

<!-- 搜尋順序：
四也全書 - 依書名
四也全書 - 依作者、繪者、譯者
教學資源分享 - 依標題、學習單/編寫
臺灣歷史記憶箱 - 依標題
活動紀錄簿 - 依標題
 -->

<section class="row">
<div class="wrapper">
	<p>您搜尋的關鍵字為：XXXOOO，共N筆資料</p>
	<!-- 當搜尋失敗時顯示 -->
	<div class="nosearchresult txt-r4">
		查無結果
	</div>


	<div class="searchsuccess">
		<ul class="resource-list search-list cf">
			<li class="resource-item container_12">
				<div class="col-style1-9">
					<div class="resource-people search-tag col-style1-2 txt-r4">
						<svg class="icon svg_icon_tag"> <use xlink:href="#shape-tag"></use> </svg> 四也全書
					</div>
					<div class="resource-title col-style1-5 txt-gr1">拯救邏輯大作戰：猜臉島歷險記</div>
					<div class="resource-people search-tag col-style1-5 txt-r4">
						<svg class="icon svg_icon_people"> <use xlink:href="#shape-people"></use> </svg>作者：林哲璋
						<svg class="icon svg_icon_people"> <use xlink:href="#shape-people"></use> </svg>譯者：譯者名
						<svg class="icon svg_icon_people"> <use xlink:href="#shape-people"></use> </svg>繪者：九子
					</div>
				</div>
				<div class="col-style1-3">
					<div class="col-style1-6"></div>
					<div class="resource-download col-style1-6 txt-gr1"><a href="book_cnt.php" target="_blank">
						<span class="txt-gr1">前往頁面</span> <i class="fa fa-external-link txt-gr1"></i>
					</a></div>
				</div>
			</li>
		
			<!-- 如果是類別屬於 "教學資源分享" 的顯示方式如下  ↓↓↓ -->
			<li class="resource-item container_12">
				<div class="col-style1-9">
					<div class="resource-people search-tag col-style1-2 txt-r4">
						<svg class="icon svg_icon_tag"> <use xlink:href="#shape-tag"></use> </svg> 教學資源分享
					</div>
					<div class="resource-title col-style1-5 txt-gr1">
						【慶典童話系列】夜弄土地公
					</div>
					<div class="resource-people search-tag col-style1-5 txt-r4">
						<svg class="icon svg_icon_people"> <use xlink:href="#shape-people"></use> </svg> 學習單/編寫：許榮哲
					</div>
				</div>
				<div class="col-style1-3">
					<div class="resource-download col-style1-6 txt-gr1"><a href="" target="_blank">
						<svg class="icon svg_icon_download"> <use xlink:href="#shape-download"></use> </svg>
						<span class="txt-gr1">WORD 下載</span>
					</a></div>
					<div class="resource-download col-style1-6 txt-gr1"><a href="" target="_blank">
						<svg class="icon svg_icon_download"> <use xlink:href="#shape-download"></use> </svg>
						<span class="txt-gr1">PDF 下載</span>
					</a></div>
				</div>
			</li>
		
			<li class="resource-item container_12">
				<div class="col-style1-9">
					<div class="resource-people search-tag col-style1-2 txt-r4">
						<svg class="icon svg_icon_tag"> <use xlink:href="#shape-tag"></use> </svg> 臺灣歷史記憶箱
					</div>
					<div class="resource-title col-style1-5 txt-gr1">
						因為閱讀，我們走進阿里山的神祕戰祭
					</div>
					<div class="resource-people search-tag col-style1-5 txt-r4">
						<svg class="icon svg_icon_people"> <use xlink:href="#shape-people"></use> </svg>  南華大學傳播研究所研究生 陳柏濡
					</div>
				</div>
				<div class="col-style1-3">
					<div class="col-style1-6"></div>
					<div class="resource-download col-style1-6 txt-gr1"><a href="history_cnt.php" target="_blank">
						<span class="txt-gr1">前往頁面</span> <i class="fa fa-external-link txt-gr1"></i>
					</a></div>
				</div>
			</li>
		
			<li class="resource-item container_12">
				<div class="col-style1-9">
					<div class="resource-people search-tag col-style1-2 txt-r4">
						<svg class="icon svg_icon_tag"> <use xlink:href="#shape-tag"></use> </svg> 活動紀錄簿
					</div>
					<div class="resource-title col-style1-5 txt-gr1">
						2015 鄒族文化生態體驗營
					</div>
					<div class="resource-people search-tag col-style1-5 txt-r4">
						
					</div>
				</div>
				<div class="col-style1-3">
					<div class="col-style1-6"></div>
					<div class="resource-download col-style1-6 txt-gr1"><a href="activity_cnt.php" target="_blank">
						<span class="txt-gr1">前往頁面</span> <i class="fa fa-external-link txt-gr1"></i>
					</a></div>
				</div>
			</li>
		
		</ul>
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

</script>
<?php
// -------------------------------
// google analytics
// -------------------------------
  include_once INC_PATH.'ga.php';
?>

</body>
</html>
