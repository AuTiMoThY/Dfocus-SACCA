/*--------------------------------------*\
	SACCA
			by DFocus AuTiMoThY
\*--------------------------------------*/
function testAlertMsg1() {
	alert("網頁建置中，敬請稍待!");
}

var isInitDone = false;

var viewPortWidthHeight = function () {

	var wh = {};

	if(window.innerWidth) {
			wh.width = window.innerWidth;
			wh.height = window.innerHeight;
	}
	else if(document.documentElement.clientWidth) {
			wh.width = document.documentElement.clientWidth;
			wh.height = document.documentElement.clientHeight;
	}
	else if(document.body.clientWidth) {
			wh.width = document.body.clientWidth;
			wh.height = document.body.clientHeight;
	}
	return wh;
}

var viewPortWH = viewPortWidthHeight(),
	viewPortW = viewPortWH.width,
	viewPortH = viewPortWH.height;


function isOpen($this, $thisClass) {
	if (!($this.hasClass('open'))) {
		$this.addClass('open');
		// quickBarBlockOpen();
	} else{
		$thisClass.removeClass('open');
		// quickBarBlockClose();
	};
}

function quickBarBlockCtrl(){
	$(".quick_login").click(function() {
		isOpen($(".quick_login-wrap"), $(".quick_login-wrap.open"))
		isOpen($(".popup-wrap"), $(".popup-wrap.open"))
	});
	$(".quick_login-wrap").mouseleave(function() {
		isOpen($(".quick_login-wrap"), $(".quick_login-wrap.open"))
		isOpen($(".popup-wrap"), $(".popup-wrap.open"))
	});
	$(".quick_cart").click(function() {
		isOpen($(".quick_cart-wrap"), $(".quick_cart-wrap.open"))
		isOpen($(".popup-wrap"), $(".popup-wrap.open"))
	});
	$(".quick_cart-wrap").mouseleave(function() {
		isOpen($(".quick_cart-wrap"), $(".quick_cart-wrap.open"))
		isOpen($(".popup-wrap"), $(".popup-wrap.open"))
	});
}

/*========================================================================*\
          tabs  function
\*========================================================================*/
function tabs(tabBlock) {
     // 預設顯示第一個 Tab

	var _showTab = 0;
	$(tabBlock).each(function(){
		// 目前的頁籤區塊
		var $tab = $(this);

		var $defaultLi = $('ul.tabs li', $tab).eq(_showTab).addClass('active');
		$($defaultLi.find('a').attr('href')).siblings().hide();

		// 當 li 頁籤被點擊時...
		// 若要改成滑鼠移到 li 頁籤就切換時, 把 click 改成 mouseover
		$('ul.tabs li', $tab).click(function() {
		   // 找出 li 中的超連結 href(#id)
		   var $this = $(this),
		        _clickTab = $this.find('a').attr('href');
		   // 把目前點擊到的 li 頁籤加上 .active
		   // 並把兄弟元素中有 .active 的都移除 class
		   $this.addClass('active').siblings('.active').removeClass('active');
		   // 淡入相對應的內容並隱藏兄弟元素
		   $(_clickTab).stop(false, true).fadeIn().siblings().hide();

		   return false;
		}).find('a').focus(function(){
		   this.blur();
		});
	});
}

// document.addEventListener('DOMContentLoaded', function() {
// 	alert("message");
// });
$(function() {
	quickBarBlockCtrl();

	$.material.init()

     var $tabs = $("#infTab");
     if ($tabs.length) {
          tabs($tabs);
     };
});

// $(function(){
//   var toggles = $('.toggle a'),
//       codes = $('.code');
  
//   toggles.on("click", function(event){
//     event.preventDefault();
//     var $this = $(this);
    
//     if (!$this.hasClass("active")) {
//       toggles.removeClass("active");
//       $this.addClass("active");
//       codes.hide().filter(this.hash).show();
//     }
//   });
//   toggles.first().click();
// });
// 
var initAfterLoaded = function() {
	if (!isInitDone) {

	}
	isInitDone = true;
}

$(window).load(initAfterLoaded);