<?php 
define('IMG_PATH', 'dist/images/');
define('TEMP_IMG_PATH', 'dist/images/temp/');
define('INC_PATH', 'dist/inc/');

function path_au($what) {
	switch ($what) {
		case 'img':
			echo IMG_PATH;
			break;
		case 'temp':
			echo TEMP_IMG_PATH;
			break;

		default:
			echo IMG_PATH;
			break;
	}
}

function designByDFocus(){
	echo "Design by <a href=\"http://www.ecmd.com.tw/\" target=\"_blank\"><img src=\"" . IMG_PATH . "df-logo.png\" alt=\"\"></a>";
}

function content_show_length($cnt0, $length){
	// $cnt0 = "為孩子種下「喜歡土地、喜歡故事、喜歡自己」的小小種子。";
	$content0 = strip_tags($cnt0);
	$content = mb_substr($content0,0,$length,'UTF-8');
	if ( $content != $content0 ) { $content .= "&nbsp;...&nbsp;"; }
	echo $content;
}

?>