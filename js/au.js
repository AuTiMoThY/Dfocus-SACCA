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
	});
	$(".quick_login-wrap").mouseleave(function() {
		isOpen($(".quick_login-wrap"), $(".quick_login-wrap.open"))
	});
	$(".quick_cart").click(function() {
		isOpen($(".quick_cart-wrap"), $(".quick_cart-wrap.open"))
	});
	$(".quick_cart-wrap").mouseleave(function() {
		isOpen($(".quick_cart-wrap"), $(".quick_cart-wrap.open"))
	});
}

$(function() {
	quickBarBlockCtrl();
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