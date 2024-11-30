<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="recent_blog">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="post_block">
		<a href="#" class="thumb"><img src="<?echo $arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
		<h5><?echo $arItem["PREVIEW_TEXT"]?></h5>
		<?if ($arItem["DISPLAY_ACTIVE_FROM"]) {?>
		<div class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
		<?}?>
		<div class="post"><?echo $arItem["DETAIL_TEXT"]?></div>
	</div>
<?endforeach;?>
<div class="clear"></div>