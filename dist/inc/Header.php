<!--<div id="fb-root"></div> -->
<!-- <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&appId=1436061923294298&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->
<!--
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '494835137321739',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/zh_TW/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
-->
<?php 
require_once 'dist/inc/aunav.php';
?>

<div id="top"></div>
<header class="global_hd">
	<div class="wrapper">
		<header id="logo" class="ib">
			<a href="<?php webPageUrlAu('indexPage'); ?>" title="四也出版 ╳ 快樂文創"></a>
		</header>
		<nav class="global_menu ib">
			<ul class="cf">
			<?php //headerNavAu(); ?>
				<li><a href="<?php webPageUrlAu('webPageBuild'); ?>">關於四也‧快樂</a></li>
				<li><a href="<?php webPageUrlAu('webPageBuild'); ?>">買好書</a></li>
				<li><a href="<?php webPageUrlAu('webPageBuild'); ?>">合作相關</a></li>
			</ul>
		</nav>
		<div class="quick_bar ib">
			<div class="search_block ib">
				<form action="" class="search_form">
					<span class="search_form-inp ib">
						<input type="text" name="" id="" class="" placeholder="搜尋書籍、作者、報導...">
					</span>
					<span class="search_form-btn ib">
						<button type="button" class="btn btn-flat"></button>
						<!-- <input type="button" name="" id="" class="" onclick="<?php //webPageUrlAu('webPageBuild'); ?>"> -->
					</span>
				</form>
			</div>
			<div class="quick_bar-block ib">
				<div class="quick_login"></div>
				<div class="quick_login-wrap toggle">
					<span class="tri"></span><span class="tri-after"></span>
					<div class="quick_login-block u_login">
					<form action="" class="u_login-form cf">
						<span class="u_login-inp">
							<input type="text" name="" id="" class="u_id" placeholder="請輸入您的會員帳號">
						</span>
						<span class="u_login-inp">
							<input type="password" name="" id="" class="u_pw" placeholder="請輸入您的登入密碼">
						</span>
						<span class="u_login-btn left">
							<button type="submit" class="btn"></button>
						</span>
						<a href="javascript: testAlertMsg1();" class="u_register right">註冊會員帳號</a>
					</form>
					</div>
					<div class="padding"></div>
				</div>
			</div>
			<div class="quick_bar-block ib">
				<div class="quick_cart"></div>
				<div class="quick_cart-wrap toggle">
					<span class="tri"></span><span class="tri-after"></span>
					<div class="quick_cart-block u_cart">
						<p class="u_cart-inf">您的購物車共有&nbsp;3&nbsp;項商品</p>
						<form action="" class="u_cart-form">
							<ul class="u_cart-list">
								<li class="u_cart-item">
									<figure>
										<div class="u_cart-pic pic col"><img src="dist/images/temp/tem_book1-85.jpg" alt=""></div>
										<figcaption class="col">
											<div class="book-name">神探啄九下</div>
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
											<div class="book-name">月光三部曲I 淡水女巫的魔幻地圖</div>
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
											<div class="book-name">月光三部曲II 淡水阿給的奇妙口味</div>
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
									<button type="button" class="btn"></button>
								</span>
							</div>
						</form>
					</div><!-- / .quick_cart-block.u_cart  END  !! -->
					<div class="padding"></div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- <header class="quick_bar">
	<div class="wrapper">
		<ul class="social ib">
			<li class="line_r"></li>
			<li><a href="<?php //webPageUrlAu('webPageBuild'); ?>" class="social-icon icon1 hide_txt">RSS</a></li>
			<li><a href="<?php //webPageUrlAu('webPageBuild'); ?>" class="social-icon icon2 hide_txt">Facebook</a></li>
			<li><a href="<?php //webPageUrlAu('webPageBuild'); ?>" class="social-icon icon3 hide_txt">Google Plus</a></li>
			<li class="line_l"></li>
		</ul>
		<div class="fb-like" data-href="http://www.ipci.com.tw/demo/" data-layout="button_count" data-action="recommend" data-show-faces="false" data-share="true"></div>
		<div class="search_block ib">
			<form action="" class="search_form">
				<span class="search_form-inp ib"><input type="text" name="" id="" class="" placeholder="輸入想尋找的關鍵字..."></span>
				<span class="search_form-btn ib"><input type="button" name="" id="" class="" onclick="<?php //webPageUrlAu('webPageBuild'); ?>"></span>
			</form>
		</div>
	</div>
</header>
-->