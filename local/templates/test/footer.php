<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}

IncludeTemplateLangFile(__FILE__);
?>
</div><!--END #workarea-->
</div><!--END .content-->
<br>
<br>
</div><!--END #content-->

<div id="footer">
	<div class="bg_top_footer">
		<div class="top_footer">
			<div class="f_widget first">
				<h3><strong>О</strong> нас</h3>
				<a href="#" class="footer_logo">
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
				<p>
					<?php $APPLICATION->IncludeComponent(
					    'bitrix:news.line',
					    'line',
					    [
					        'IBLOCK_TYPE' => 'line',
					        'IBLOCKS' => ['', '6'],
					        'NEWS_COUNT' => '1',
					        'FIELD_CODE' => [
					            0 => 'PROPERTY_MOTTO',
					        ],
					        'CACHE_TYPE' => 'A',
					        'CACHE_TIME' => '0',
					        'CACHE_GROUPS' => 'Y',
					    ]
					); ?>
				</p>
			</div>
			<div class="f_widget divide second">
				<h3><strong>Часы</strong> работы</h3>
				<?php $APPLICATION->IncludeFile(
				    SITE_DIR.'include/schedule.php',
				    [],
				    ['MODE' => 'html']
				); ?>
			</div>
			<div class="fwidget_separator"></div>
			<div class="f_widget third">
				<h3><strong>Our</strong> contacts</h3>
				<div class="f_contact f_contact_1"><strong>Адрес:<br></strong>
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
				<div class="f_contact f_contact_2"><strong>Телефон:</strong>
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
				<div class="f_contact f_contact_3"><strong>Email:</strong>
					<?php $APPLICATION->IncludeComponent(
					    'bitrix:news.line',
					    'line',
					    [
					        'IBLOCK_TYPE' => 'line',
					        'NEWS_COUNT' => '1',
					        'FIELD_CODE' => [
					            0 => 'PROPERTY_EMAIL',
					        ],
					        'CACHE_TYPE' => 'A',
					        'CACHE_TIME' => '0',
					        'CACHE_GROUPS' => 'Y',
					    ]
					); ?>
				</div>
			</div>
			<div class="f_widget divide last frame_wrapper">
				<img src="<?= SITE_TEMPLATE_PATH; ?>/images/winter.jpg"
					alt="" style="max-width: 100%">
			</div>
		</div>
	</div>
	<div class="bottom_footer">
		<?php $APPLICATION->IncludeComponent(
		    'bitrix:menu',
		    'horizontal_multilevel',
		    [
		        'ROOT_MENU_TYPE' => 'bottom',
		        'MAX_LEVEL' => '2',
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
		<div class="f_widget divide last">
			<h3><strong>Find</strong> us here</h3>
			<div class="horizontal">
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
	</div>
	<div class="copyright_wrapper">
		<div class="copyright">
			<?php $APPLICATION->IncludeFile(
			    SITE_DIR.'include/copyright.php',
			    [],
			    ['MODE' => 'html']
			); ?>,
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
		</div>
	</div>
</div>
</body>

</html>