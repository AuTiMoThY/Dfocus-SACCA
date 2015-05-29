<?php


/**
*
*/
class PageUrlAu {
	public $webPageBuild    = "javascript: alert('網頁建置中，敬請稍待!');";
	public $indexPage       = "index.php";
	public $about   = "about.php";
	public $books   = "books_home.php";


}
/**
*
*/
class navAu extends PageUrlAu {

	function navListAu($headerOrFooter) {

		$Nav = array(
						'首頁'        => $this->indexPage,
						'關於四也'    => $this->about,
						'四也全書'    => $this->books,
						);
		$NavLen = 0;
		$NavLen ++;

		if ($headerOrFooter == 'headerNav') {
			foreach ($Nav as $item => $url) {

echo <<<_OUTPUT
<li class="main_nav-item nav-SACCA item$NavLen">
	<a href="$url">
		<span class="wrap"><span class="main_nav-icon"></span><span>$item</span></span>
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
