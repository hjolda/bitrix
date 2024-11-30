<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="search">
	<form action="<?=$arResult["FORM_ACTION"]?>">
		<input type="text" name="q" maxlength="50" class="txb_search"/>
		<input class="btn_search" type="submit" name="s" onfocus="this.blur();" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" id="search-submit-button">
	</form>
</div>