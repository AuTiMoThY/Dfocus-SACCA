<?php
	include_once 'config.php';
	include_once INC_PATH.'headleader.php';
	require_once INC_PATH.'aunav.php';
?>

<title>會員中心 | 四也出版</title>

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
		<p class="ib txt txt-gr1">會員中心</p>
	</div>
</section>

<!-- <main class=""> -->


<section class="row">
<div class="wrapper">

	<div class="container signup-container">
		<header>
			<h1 class="txtImg-title-edit hide_txt">會員資料管理</h1>
		</header>
		<form action="gotoStep3.php" class="signup-form cf">
			<div class="signup-block">
				<hgroup>
					<h2 class="txtImg-title-dataEdit hide_txt">資料管理</h2>
				</hgroup>
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
							<span class="txt-gr1 txt-fz13 ib">王小鳴</span>
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">性　　別</label>
							<span class="txt-gr1 txt-fz13 ib">男</span>
						</span>
					</li>
					<li style="margin-bottom:3.5em;">
						<span class="frm--dfocus required">
							<label for="birthday" class="frm__label ib">生　　日</label>
							<span class="txt-gr1 txt-fz13 ib">1950-07-02</span>
						</span>
					</li>
					<li>
						<span class="frm--dfocus required">
							<label for="" class="frm__label ib">電子信箱</label>
							<!-- 帶入原資料  ↓↓↓ -->
							<input type="text" name="" id="" class="frm__field ib" value="yoman@gmail.com" placeholder="請填入您的常用e-mail信箱">
						</span>
					</li>
					<li>
						<span class="frm--dfocus required">
							<label for="" class="frm__label ib">白天聯繫電話</label>
							<!-- 帶入原資料  ↓↓↓ -->
							<input type="text" name="" id="" class="frm__field s1 ib" value="02-2506-6111" placeholder="" onkeypress="return isNumberKey(event)">
							<!-- 帶入原資料  ↓↓↓ -->
							<input type="text" name="" id="" class="frm__field s3 ib" value="123" placeholder="分機" onkeypress="return isNumberKey(event)">
							<span class="example txt-gr1 txt-fz13">填寫範例：02-2506-6111</span>
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">晚上聯繫電話</label>
							<!-- 帶入原資料  ↓↓↓ -->
							<input type="text" name="" id="" class="frm__field s1 ib" value="02-2345-6789" placeholder="" onkeypress="return isNumberKey(event)">
							<!-- 帶入原資料  ↓↓↓ -->
							<input type="text" name="" id="" class="frm__field s3 ib" value="" placeholder="分機" onkeypress="return isNumberKey(event)">
							<span class="example txt-gr1 txt-fz13">填寫範例：02-2506-6111</span>
						</span>
					</li>
					<li style="margin-bottom:3.5em;">
						<span class="frm--dfocus required">
							<label for="" class="frm__label ib">手機號碼</label>
							<!-- 帶入原資料  ↓↓↓ -->
							<input type="text" name="" id="" class="frm__field ib" value="0911-222-333" placeholder="" onkeypress="return isNumberKey(event)">
							<span class="example txt-gr1 txt-fz13">填寫範例：0911-222-333</span>
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">職　　別</label>
							<input type="radio" name="Industry" id="Industry1" class="frm__radio">
							<label for="Industry1" class="frm__label" style="margin-right:30px">公</label>
							<input type="radio" name="Industry" id="Industry2" class="frm__radio">
							<label for="Industry2" class="frm__label" style="margin-right:30px">教</label>
							<input type="radio" name="Industry" id="Industry3" class="frm__radio">
							<label for="Industry3" class="frm__label" style="margin-right:30px">商</label>
							<!-- 原勾選的項目  ↓↓↓ -->
							<input type="radio" name="Industry" id="Industry4" class="frm__radio" checked>
							<label for="Industry4" class="frm__label" style="margin-right:30px">學生</label>
							<label for="Industry5" class="frm__label">其他</label>
							<input type="text" name="industry5" id="Industry5" class="frm__field s3">
						</span>
					</li>
					<li style="margin-bottom:3.5em;">
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">任職單位</label>
							<!-- 帶入原資料  ↓↓↓ -->
							<input type="text" name="" id="" class="frm__field s1 ib" value="任職單位" placeholder="" style="margin-right:23px;">
							<label for="" class="frm__label ib" style="width:auto;">職 稱</label>
							<!-- 帶入原資料  ↓↓↓ -->
							<input type="text" name="" id="" class="frm__field s3 ib" value="職稱" placeholder="">
						</span>
					</li>
					<li style="margin-bottom:3.5em;">
						<span class="frm--dfocus required">
							<label for="" class="frm__label ib">連絡地址</label>
							<span class="txt-gr1 txt-fz13">臺灣地區</span>
							<div id="twzipcode" class="ib">
							<!-- 帶入原資料  ↓↓↓  填入 data-value -->
							    <div data-role="zipcode"
							         data-name="zipcode"
							         data-value="104"
							         data-style="zipcode-style" class="ib "></div>
							    <div data-role="county"
							         data-name="county[]"
							         data-value="台北市"
							         data-style="county-style" class="ib "></div>
							    <div data-role="district"
							         data-name="district[]"
							         data-value="中山區"
							         data-style="district-style" class="ib "></div>
							</div>
							<!-- 帶入原資料  ↓↓↓ -->
							<input type="text" name="" id="" class="frm__field ib" value="復興北路290號15樓" placeholder="請填入完整地址">
						</span><br>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib"></label>
							<span class="txt-gr1 txt-fz13">國外地區</span>
							<input type="text" name="" id="" class="frm__field ib" placeholder="請填入您的國別" style="width:264px; margin-right:1px;">
							<input type="text" name="" id="" class="frm__field ib" placeholder="請填入完整地址">
						</span>
					</li>
					<li>
						<label for="" class="frm__label ib"></label>
						<div class="ib">
							<ul class="cf">
								<li>
									<span class="txt-gr1 txt-fz13" style="margin-right:10px;">*是否訂閱電子報</span>
									<input type="radio" name="" id="" class="frm__radio" checked>
									<label for="" class="frm__label">是</label>
									<input type="radio" name="" id="" class="frm__radio">
									<label for="" class="frm__label">否</label>
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="btns2">
					<button type="submit" class="btn btn-submit btn-material-pink first_btn">確認送出</button>
					<button type="reset" class="btn btn-reset btn-material-grey">取消重填</button>
				</div>
			</div><!-- /.signup-block  END  !! -->
		</form>
		<form action="" class="forget-form">
			<div class="forget-block">
				<hgroup>
					<h2 class="txtImg-title-pwEdit hide_txt">重設密碼</h2>
				</hgroup>
				<ul class="cf">
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">輸入舊密碼</label>
							<input type="text" name="" id="" class="frm__field ib" placeholder="">
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">輸入新密碼</label>
							<input type="text" name="" id="" class="frm__field ib" placeholder="">
						</span>
					</li>
					<li>
						<span class="frm--dfocus">
							<label for="" class="frm__label ib">確認新密碼</label>
							<input type="text" name="" id="" class="frm__field ib" placeholder="">
						</span>
					</li>
				</ul>
				<div class="btns">
					<button type="submit" class="btn btn-submit btn-material-pink first_btn">確認送出</button>
					<button type="reset" class="btn btn-reset btn-material-grey">取消重填</button>
				</div>
			</div>
		</form>
		<div class="other_link" style="top: 9em; right: 3em;">
			<h3 class="txt-gr2">有購物或其他問題嗎?</h3>
			<p class="txt-gr2">前往</p>
			<ul class="cf">
				<li><a href="business.php" class="txt-gr1">連絡四也</a></li>
			</ul>
		</div>
	</div><!-- /.signup-container  END  !! -->

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
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode != 46 && charCode != 45 && charCode > 31 && (charCode < 48 || charCode > 57)) {
     	alert("只能輸入數字");
		return false;
	}

    return true;
}
$(function(){

	// $(".js-subNavItem5").addClass('active');
	$("#birthday").datepicker({
		monthNamesShort: [ "01月", "02月", "03月", "04月", "05月", "06月", "07月", "08月", "09月", "10月", "11月", "12月" ],
		dayNamesMin: ["日", "一", "二", "三", "四", "五", "六"],
		changeYear: true,
		changeMonth: true,
		dateFormat:"yy-mm-dd",
		showMonthAfterYear:true,
		yearRange: "-90:+0"
	});

	$('#twzipcode').twzipcode({

	});


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
