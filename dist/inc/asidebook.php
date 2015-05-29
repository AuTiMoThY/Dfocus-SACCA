		<div class="asideMod asideMod__age">
			<header class="asideMod-header">
				<i class="icon icon-asideHeader ib"></i>
				<h2 class="asideMod-heading ib">書籍分齡</h2>
			</header>
			<div class="asideMod-block">
				<ul>
					<li><a href="">國小中低年級</a></li>
					<li><a href="">國小中年級</a></li>
					<li><a href="">國小高年級</a></li>
					<li><a href="">國高中以上</a></li>
				</ul>
			</div><!-- /.asideMod-block  END  !! -->
		</div><!-- /.asideMod__age  END  !! -->

		<div class="asideMod asideMod__cate">
			<header class="asideMod-header">
				<i class="icon icon-asideHeader ib"></i>
				<h2 class="asideMod-heading ib">四也全書系列</h2>
			</header>
			<div class="asideMod-block">
				<ul>
					<li><a href="">童話搜神記</a></li>
					<li><a href="">慶典童話</a></li>
					<li><a href="">動物謎小說</a></li>
					<li><a href="">童話奇異國</a></li>
					<li><a href="">許榮哲成語學園</a></li>
					<li><a href="">許榮哲經典學園</a></li>
					<li><a href="">成語一千零一夜</a></li>
					<li><a href="">福爾摩沙冒險小說</a></li>
					<li><a href="">神話夢小說</a></li>
					<li><a href="">心靈教育</a></li>
					<li><a href="">親師教育</a></li>
				</ul>
			</div><!-- /.asideMod-block  END  !! -->
		</div><!-- /.asideMod__cate  END  !! -->

		<div class="file_download">
			<div class="btn btn-xls">
				<div class="icon_block ib">
					<i class="icon icon-xls"></i>
				</div>
				<div class="txt ib hide_txt">目錄下載 四也全書系</div>
			</div>
			<div class="btn btn-pdf">
				<div class="icon_block ib">
					<i class="icon icon-pdf"></i>
				</div>
				<div class="txt ib hide_txt">目錄下載 最新出版圖書</div>
			</div>
		</div>

		<div class="blockMod blockMod__hot">
			<header class="blockMod-header">
				<h2 class="hide_txt">熱銷排行 / Best seller /</h2>
			</header>
			<div class="blockMod-block">
				<ul class="book-list cf">
					<li class="book-list-item">
						<a href="" class="block_link"></a>
						<figure>
							<span class="order_number"></span>
							<div class="book-pic pic"><img src="<?php path_au('temp'); ?>tem_book1-205_290.jpg" alt=""></div>
							<figcaption>
								<h3 class="book-name">
									<?php
										//  書籍名稱
										//  此處示意 顯示內文前 18 個字，超果以...取代
										$book_name="砲來了，金門快跑!(三版)";
										$length=18;
										content_show_length($book_name, $length);
									?>
								</h3>
								<div class="book-inf cf">
									<span class="book-auth left">張友漁</span>
									<span class="book-price right">定價：290 元</span>
								</div>
							</figcaption>
						</figure>
					</li>
					<li class="book-list-item">
						<a href="" class="block_link"></a>
						<figure>
							<span class="order_number"></span>
							<div class="book-pic pic"><img src="<?php path_au('temp'); ?>tem_book2-205_290.jpg" alt=""></div>
							<figcaption>
								<h3 class="book-name">
									<?php
										//  書籍名稱
										//  此處示意 顯示內文前 18 個字，超果以...取代
										$book_name="拯救邏輯大作戰：猜臉島歷險記 拯救邏輯大作戰：猜臉島歷險記 拯救邏輯大作戰：猜臉島歷險記 拯救邏輯大作戰：猜臉島歷險記";
										$length=18;
										content_show_length($book_name, $length);
									?>
								</h3>
								<div class="book-inf cf">
									<span class="book-auth left">林哲璋</span>
									<span class="book-price right">定價：290 元</span>
								</div>
							</figcaption>
						</figure>
					</li>
					<li class="book-list-item">
						<a href="" class="block_link"></a>
						<figure>
							<span class="order_number"></span>
							<div class="book-pic pic"><img src="<?php path_au('temp'); ?>tem_book1-85.jpg" alt=""></div>
							<figcaption>
								<h3 class="book-name">
									<?php
										//  書籍名稱
										//  此處示意 顯示內文前 18 個字，超果以...取代
										$book_name="月光三部曲Ⅲ：回家之路1947";
										$length=18;
										content_show_length($book_name, $length);
									?>
								</h3>
								<div class="book-inf cf">
									<span class="book-auth left">張嘉驊</span>
									<span class="book-price right">定價：290 元</span>
								</div>
							</figcaption>
						</figure>
					</li>
				</ul>
			</div><!-- /.blockMod-block  END  !! -->
		</div><!-- /.blockMod__hot  END  !! -->