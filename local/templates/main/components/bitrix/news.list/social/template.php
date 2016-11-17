<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="footer_resize">
	<?if (!empty($arResult)):?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>"> <span class="soc_icon"><img src="<?=$arItem["FIELDS"]["PREVIEW_PICTURE"]["SRC"]?>"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?endforeach;?>
		</ul>
	<?endif;?>
</div>