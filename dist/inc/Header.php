<?php 
	include_once INC_PATH.'fbscript.php';
?>

<header class="header_group">
	<div id="top"></div>
	<header class="global_hd">
		<div class="wrapper">
			<header id="logo" class="ib">
				<a href="<?php webPageUrlAu('index'); ?>" title="四也出版 ╳ 快樂文創"></a>
			</header>
			<nav class="global_menu ib">
				<ul class="cf">
					<li class="js-navItem1"><a href="<?php webPageUrlAu('about'); ?>">關於四也‧快樂</a></li>
					<li class="js-navItem2"><a href="<?php webPageUrlAu('books'); ?>">買好書</a></li>
					<li class="js-navItem3"><a href="<?php webPageUrlAu('contact'); ?>">聯絡四也</a></li>
				</ul>
			</nav>
			<div class="quick_bar ib">
				<div class="search_block ib">
					<form action="gotoSearch.php" class="search_form">
						<span class="search_form-inp ib">
							<input type="text" name="" id="" class="" placeholder="搜尋書籍、作者、報導...">
						</span>
						<span class="search_form-btn ib">
							<button type="submit" class="btn btn-flat"></button>
							<!-- <input type="button" name="" id="" class="" onclick="<?php //webPageUrlAu('webPageBuild'); ?>"> -->
						</span>
					</form>
				</div>
				<div class="quick_bar-block ib">
					<div class="quick_login hide_txt">會員</div>
				</div>
				<div class="quick_bar-block ib">
					<!-- 已登入會員顯示  ↓↓↓ -->
					<div class="quick_cart hide_txt">購物車</div>
					<!-- 已登入會員顯示  ↑↑↑ -->

					<!-- 未登入會員顯示  ↓↓↓ （告知需要登入會員）-->
					<!-- <div class="quick_cart hide_txt" onclick="javascript:alert('請登入會員');">購物車</div> -->
					<!-- 未登入會員顯示  ↑↑↑ （告知需要登入會員）-->
				</div>
			</div>
		</div>
	</header>
	<header class="nav_bar">
		<div class="wrapper">
			<nav>
				<ul class="cf">
					<?php headerNavAu(); ?>
				</ul>
			</nav>
		</div>
	</header>
</header>

<!-- 快速選單 -->
<div class="popup-wrap wrapper">
	<div class="popup quick_login-wrap toggle">
		<span class="tri"></span><span class="tri-after"></span>
		<!-- 未登入會員 顯示以下區塊  ↓↓↓ -->
		<div class="quick_login-block u_login">
		<form action="gotoLogin.php" class="u_login-form cf">
			<span class="u_login-inp">
				<input type="text" name="" id="" class="u_id" placeholder="請輸入您的會員帳號">
			</span>
			<span class="u_login-inp">
				<input type="password" name="" id="" class="u_pw" placeholder="請輸入您的登入密碼">
			</span>
			<span class="u_login-btn left">
				<button type="submit" class="btn"></button>
			</span>
			<a href="signup.php" class="u_register right">註冊會員帳號</a>
		</form>
		</div>
		<!-- 未登入會員 顯示以上區塊  ↑↑↑ -->

		<!-- 已登入會員 顯示以下區塊  ↓↓↓ -->
<!-- 		<div class="quick_login-block u_login login-success">
		<form action="" class="u_login-form cf">
			<p class="txt-gr2 txt-fz13 text-center">HI!&emsp;某某某&emsp;&emsp;&emsp;歡迎與四也一同閱讀</p>
			<div class="btns cf">
				<a href="member.php" class="ib btn btn-st1 btn-material-deep-orange">會員中心</a>
				<a href="cart_1.php" class="ib btn btn-st1 btn-material-grey">查看訂單</a>
				<a href="" class="u_register text-center">登出</a>
			</div>
		</form>
		</div> -->
		<!-- 已登入會員 顯示以上區塊  ↑↑↑ -->
		<div class="padding"></div>
	</div>
	
	<div class="popup quick_cart-wrap toggle">
		<span class="tri"></span><span class="tri-after"></span>
		<div class="quick_cart-block u_cart">
			<p class="u_cart-inf">您的購物車共有&nbsp;3&nbsp;項商品</p>
			<form action="gotoCart.php" class="u_cart-form">
				<ul class="u_cart-list">
					<li class="u_cart-item">
						<figure>
							<div class="u_cart-pic pic col"><img src="dist/images/temp/tem_book1-85.jpg" alt=""></div>
							<figcaption class="col">
								<div class="book-name text-left">神探啄九下</div>
								<div class="book-count">數量：&nbsp;1&nbsp;本</div>
								<div class="book-price">單價：&nbsp;250&nbsp;元</div>
							</figcaption>
						</figure>
						<span class="u_cart-deleBtn">
							<button type="button" class="btn">刪除</button>
						</span>
					</li>
					<li class="u_cart-item">
						<figure>
							<div class="u_cart-pic pic col"><img src="dist/images/temp/tem_book2-85.jpg" alt=""></div>
							<figcaption class="col">
								<div class="book-name text-left">月光三部曲I 淡水女巫的魔幻地圖</div>
								<div class="book-count">數量：&nbsp;1&nbsp;本</div>
								<div class="book-price">單價：&nbsp;299&nbsp;元</div>
							</figcaption>
						</figure>
						<span class="u_cart-deleBtn">
							<button type="button" class="btn">刪除</button>
						</span>
					</li>
					<li class="u_cart-item">
						<figure>
							<div class="u_cart-pic pic col"><img src="dist/images/temp/tem_book1-85.jpg" alt=""></div>
							<figcaption class="col">
								<div class="book-name text-left">月光三部曲II 淡水阿給的奇妙口味</div>
								<div class="book-count">數量：&nbsp;1&nbsp;本</div>
								<div class="book-price">單價：&nbsp;150&nbsp;元</div>
							</figcaption>
						</figure>
						<span class="u_cart-deleBtn">
							<button type="button" class="btn">刪除</button>
						</span>
					</li>
				</ul>
				<div class="u_cart-total">
					<p>小 計： NT$ 699 元</p>
					<span class="u_cart-btn btn">
						<button type="submit" class="btn"></button>
					</span>
				</div>
			</form>
		</div><!-- / .quick_cart-block.u_cart  END  !! -->
		<div class="padding"></div>
	</div>
</div>