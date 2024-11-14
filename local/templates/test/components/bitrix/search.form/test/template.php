<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    exit;
}?>
<div id="search">
	<form action="<?= $arResult['FORM_ACTION']; ?>">
		<input type="text" name="q" maxlength="50" class="txb_search" />
		<input class="btn_search" type="submit" name="s" onfocus="this.blur();" value="Найти" id="search-submit-button">
	</form>
</div>