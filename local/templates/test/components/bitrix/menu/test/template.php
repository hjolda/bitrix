<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}?>

<?if (!empty($arResult)) { ?>
<ul>
	<?php
foreach ($arResult as $arItem) {
    if (1 == $arParams['MAX_LEVEL'] && $arItem['DEPTH_LEVEL'] > 1) {
        continue;
    }
    ?>
	<?if ($arItem['SELECTED']) { ?>
    <li><a href="<?= $arItem['LINK']; ?>"
        class="current"><?= $arItem['TEXT']; ?></a>
    </li>
    <?} else { ?>
	<li><a
			href="<?= $arItem['LINK']; ?>"><?= $arItem['TEXT']; ?></a>
	</li>
	<?}?>

	<?}?>
</ul>
<?}?>