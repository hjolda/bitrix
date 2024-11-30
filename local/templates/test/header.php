<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

use Bitrix\Main\Page\Asset;

IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php
 $APPLICATION->ShowHead();
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style980.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style800.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style700.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style600.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style500.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style400.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-1.8.3.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.bxslider.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.mousewheel.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.selectik.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.fancybox-1.3.4.pack.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.countdown.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.checkbox.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/js.js');
?>
</head>

<body class="page">
    <div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
    <div id="header">
        <div class="top_info">
        <div class="logo">
            <a href="<?= SITE_DIR; ?>"
                title="<?= GetMessage('CFT_MAIN'); ?>">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:news.line',
                    'line',
                    [
                        'IBLOCK_TYPE' => 'line',
                        'IBLOCKS' => ['', '6'],
                        'NEWS_COUNT' => '1',
                        'FIELD_CODE' => [
                            0 => 'PROPERTY_COMPANY_NAME',
                        ],
                        'CACHE_TYPE' => 'A',
                        'CACHE_TIME' => '0',
                        'CACHE_GROUPS' => 'Y',
                    ]
                ); ?>
                </a>
            </div>
            <div class="header_contacts">
                <div class="phone">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:news.line',
                    'line',
                    [
                        'IBLOCK_TYPE' => 'line',
                        'IBLOCKS' => ['', '6'],
                        'NEWS_COUNT' => '1',
                        'FIELD_CODE' => [
                            0 => 'PROPERTY_PHONE',
                        ],
                        'CACHE_TYPE' => 'A',
                        'CACHE_TIME' => '0',
                        'CACHE_GROUPS' => 'Y',
                    ]
                ); ?>
                </div>
                <div>
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:news.line',
                    'line',
                    [
                        'IBLOCK_TYPE' => 'line',
                        'IBLOCKS' => ['', '6'],
                        'NEWS_COUNT' => '1',
                        'FIELD_CODE' => [
                            0 => 'PROPERTY_ADDRESS',
                        ],
                        'CACHE_TYPE' => 'A',
                        'CACHE_TIME' => '0',
                        'CACHE_GROUPS' => 'Y',
                    ]
                ); ?>
            </div>
            </div>
            <div class="socials">
                <a href="#"><img
                    src="<?= SITE_TEMPLATE_PATH; ?>/images/fb_icon.png"
                    alt=""></a>
                <a href="#"><img
                    src="<?= SITE_TEMPLATE_PATH; ?>/images/twitter_icon.png"
                    alt=""></a>
                <a href="#"><img
                    src="<?= SITE_TEMPLATE_PATH; ?>/images/in_icon.png"
                    alt=""></a>
            </div>
        </div>
        <div class="bg_navigation">
            <div class="navigation_wrapper">
                <div id="navigation">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:menu',
                    'test',
                    [
                        'ROOT_MENU_TYPE' => 'top',
                        'MAX_LEVEL' => '1',
                        'CHILD_MENU_TYPE' => 'left',
                        'USE_EXT' => 'Y',
                        'MENU_CACHE_TYPE' => 'A',
                        'MENU_CACHE_TIME' => '36000000',
                        'MENU_CACHE_USE_GROUPS' => 'Y',
                        'MENU_CACHE_GET_VARS' => '',
                    ],
                    false,
                    [
                        'ACTIVE_COMPONENT' => 'Y',
                    ]
                ); ?>
                </div>
                <div id="search_form">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:search.form',
                    'test',
                    [
                        'PAGE' => '#SITE_DIR#search/',
                    ],
                    false
                ); ?>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="content">
            <div id="workarea">
                <h1 id="pagetitle" class="pagetitle">
                    <?php $APPLICATION->ShowTitle(false); ?>
                </h1>