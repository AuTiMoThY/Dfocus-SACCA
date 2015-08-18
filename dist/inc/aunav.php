<?php


/**
*
*/
class PageUrlAu {
	public $webPageBuild = "javascript: alert('網頁建置中，敬請稍待!');";
	public $index        = "index.php";
	public $about        = "about.php";
	public $books        = "books_home.php";
	public $contact      = "contact.php";
	public $history      = "history.php";
	public $news         = "news.php";
	public $activity     = "activity.php";
	public $resource     = "resource.php";
	public $member       = "member.php";
	public $cart_1       = "cart_1.php";


}
/**
*
*/
class navAu extends PageUrlAu {

	function navListAu($headerOrFooter) {

		$Nav = array(
						// '首頁'        => $this->index,
						// '關於四也'    => $this->about,
'四也全書'       => $this->books,
'教學資源分享'   => $this->resource,
'臺灣歷史記憶箱' => $this->history,
'最新訊息'       => $this->news,
'活動紀錄報導'   => $this->activity
						);
		$NavLen = 0;
		$NavLen ++;

		if ($headerOrFooter == 'headerNav') {
			foreach ($Nav as $item => $url) {

echo <<<_OUTPUT
<li class="main_nav-item nav-SACCA item$NavLen js-subNavItem$NavLen">
	<a href="$url">
		<span class="wrap"><span class="main_nav-icon"></span><span class="main_nav-item-cnt">$item</span></span>
	</a>
</li>
_OUTPUT;

				++$NavLen;
			}
		} elseif ($headerOrFooter == 'footerNav') {
			foreach ($Nav as $item => $url) {

echo <<<_OUTPUT
<li class="footer_nav-item nav-SACCA item$NavLen">
	<a href="$url">
		<span class="wrap"><span class="footer_nav-icon"></span><span>$item</span></span>
	</a>
</li>
_OUTPUT;

				++$NavLen;
			}
		}
	}
}

/**
* function
*/

function headerNavAu(){
	$navAu = new navAu();
	$navAu -> navListAu($headerOrFooter ='headerNav');

}

function footerNavAu(){
	$navAu = new navAu();
	$navAu -> navListAu($headerOrFooter ='footerNav');

}

function webPageUrlAu($url){
	$PageUrlAu = new PageUrlAu();
	echo $PageUrlAu->{$url};
}


 ?>
