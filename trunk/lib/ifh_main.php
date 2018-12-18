<?php
$opicifh_categories_lang = array();



// ======================   Titles ==============================
												
$ifhcategories["islam_for_hindus"] 		= array(
													'title'=>"Islam and Hinduism",
													'url'=>"http://www.islam-hinduism.com",
													'logo'=>"islam_for_hindus.png",
												);

// =================== English ===========================

$opicifh_categories_lang['eng']['islam_for_hindus']['url']				=  $ifhcategories["islam_for_hindus"]['url'].'/en';
$opicifh_categories_lang['eng']['islam_for_hindus']['cat'] 				=  $ifhcategories["islam_for_hindus"]['url'].'/en/api/get_category_index/';
$opicifh_categories_lang['eng']['islam_for_hindus']['importurl'] 		=  $ifhcategories["islam_for_hindus"]['url'].'/en/api/get_category_posts/?slug=';

?>