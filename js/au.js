/*--------------------------------------*\
	SACCA
			by DFocus AuTiMoThY
\*--------------------------------------*/
function testAlertMsg1() {
	alert("網頁建置中，敬請稍待!");
}

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