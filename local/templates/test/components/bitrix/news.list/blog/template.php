<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}?>
<div class="recent_blog">
	<?foreach ($arResult['ITEMS'] as $arItem) { ?>
	<div class="post_block">
		<img src="<?= $arItem[' PREVIEW_PICTURE']['SRC']; ?>"
			alt="">
		<br>
		<h5>
			<?= $arItem['NAME']; ?>
		</h5>
		<?if ($arItem['DISPLAY_ACTIVE_FROM']) {?>
		<div class="date">
			<?= $arItem['DISPLAY_ACTIVE_FROM']; ?>
		</div>
		<?}?>
		<div class="post">
			<?= $arItem['PREVIEW_TEXT']; ?>
		</div>
	</div>
	<?}?>
</div>
<div class="clear"></div>