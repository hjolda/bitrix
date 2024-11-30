<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
} ?>

<?php if (!empty($arResult)) {

    $previousLevel = 0;
    foreach($arResult as $arItem) {

        if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) { ?>
            <?=str_repeat("</ul></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
        <?php }

        if ($arItem["IS_PARENT"]) { ?>
            <?php if ($arItem["DEPTH_LEVEL"] == 1) { ?>
                <div class="f_widget "><h3><?=$arItem["TEXT"]?></h3><ul>			
            <?php } else { ?>
                <li><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>				
            <?php } ?>
        <?php } else { ?>
            <?php if ($arItem["PERMISSION"] > "D") { ?>
                <?php if ($arItem["DEPTH_LEVEL"] == 1) { ?>
                    <div class="f_widget ">
                        <h3><?=$arItem["TEXT"]?></h3>
                        <ul><li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li></ul>
                    </div>
                <?php } else { ?>
                    <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?php } ?>
            <?php } else { ?>
                <?php if ($arItem["DEPTH_LEVEL"] == 1) { ?>
                    <div class="f_widget ">
                        <h3><?=$arItem["TEXT"]?></h3>
                    </div>
                <?php } else { ?>
                    <li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                <?php } 
            }
        }
    $previousLevel = $arItem["DEPTH_LEVEL"];
    }
    //close last item tags
    if ($previousLevel > 1) { ?>
        <?=str_repeat("</ul></div>", ($previousLevel-1) );?>
    <?php } ?>
<?php }