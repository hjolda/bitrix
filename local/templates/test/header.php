<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
<!-- new template styles-->
<?php
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style980.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style800.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style700.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style600.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style500.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style400.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-1.8.3.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.bxslider.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.mousewheel.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.selectik.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.fancybox-1.3.4.pack.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.checkbox.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/js.js");
?>
</head>
<body class="page">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div id="header">
		<div class="top_info">
			<div class="logo">
				<a href="<?=SITE_DIR?>" title="<?=GetMessage('CFT_MAIN')?>"><?
				$APPLICATION->IncludeFile(
					SITE_DIR."include/company_name.php",
					Array(),
					Array("MODE"=>"html")
				);
				?></a>
			</div>
			<div class="header_contacts">
				<div class="phone">
					<?
					$APPLICATION->IncludeFile(
						SITE_DIR."include/phone.php",
						Array(),
						Array("MODE"=>"html")
					);
					?>
				</div>
				<div>
					<?
					$APPLICATION->IncludeFile(
						SITE_DIR."include/address.php",
						Array(),
						Array("MODE"=>"html")
					);
					?>
				</div>
			</div>
			<div class="socials">
				<a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/images/fb_icon.png" alt=""></a>
				<a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/images/twitter_icon.png" alt=""></a>
				<a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/images/in_icon.png" alt=""></a>
			</div>
		</div>
		<div class="bg_navigation">
			<div class="navigation_wrapper">
				<div id="navigation">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "test", array(
						"ROOT_MENU_TYPE" => "top",
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "Y",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_TIME" => "36000000",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => ""
						),
						false,
						array(
						"ACTIVE_COMPONENT" => "Y"
						)
				);?>
				</div>
				<div id="search_form">
					<?
					$APPLICATION->IncludeComponent("bitrix:search.form", "test", Array(
							"PAGE" => "#SITE_DIR#search/",
						),
							false
					);
					?>
				</div>
			</div>
		</div>
	</div>
		
	<div id="content">
		<div class="content">
			<div id="workarea">
			<h1 id="pagetitle" class="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>