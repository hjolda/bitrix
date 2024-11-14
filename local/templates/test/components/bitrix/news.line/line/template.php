<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}
// @var array $arParams
// @var array $arResult
// @global CMain $APPLICATION
// @global CUser $USER
// @global CDatabase $DB
// @var CBitrixComponentTemplate $this
// @var string $templateName
// @var string $templateFile
// @var string $templateFolder
// @var string $componentPath
// @var CBitrixComponent $component
$this->setFrameMode(true);
?>

<?foreach ($arResult['ITEMS'] as $arItem) { ?>
<?php
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
    ?>
<span
	id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
	<?php 
	if ($arItem['~PROPERTY_COMPANY_NAME_VALUE']) {
		echo($arItem['~PROPERTY_COMPANY_NAME_VALUE']);
	} elseif ($arItem['~PROPERTY_EMAIL_VALUE']) {
		echo($arItem['~PROPERTY_EMAIL_VALUE']);
	} elseif ($arItem['~PROPERTY_PHONE_VALUE']) {
		echo($arItem['~PROPERTY_PHONE_VALUE']);
	} elseif ($arItem['~PROPERTY_MOTTO_VALUE']) {
		echo($arItem['~PROPERTY_MOTTO_VALUE']);
	} elseif ($arItem['~PROPERTY_ADDRESS_VALUE']) {
		echo($arItem['~PROPERTY_ADDRESS_VALUE']);
    } ?>
</span>
<?}?>