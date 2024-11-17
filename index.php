<?php

require $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php';

$APPLICATION->SetTitle('Блог');

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'blog',
    [
        'ACTIVE_DATE_FORMAT' => 'd.m.Y',
        'CACHE_GROUPS' => 'Y',
        'CACHE_TIME' => '36000000',
        'CACHE_TYPE' => 'A',
        'CHECK_DATES' => 'Y',
        'IBLOCK_ID' => '5',
        'IBLOCK_TYPE' => 'blog',
        'NEWS_COUNT' => '6',
        'PREVIEW_TRUNCATE_LEN' => '25',
        'SET_LAST_MODIFIED' => 'N',
        'SORT_BY1' => 'SORT',
        'SORT_BY2' => 'ACTIVE_FROM',
        'SORT_ORDER1' => 'ASC',
        'SORT_ORDER2' => 'DESC',
    ]
);

require $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php';
