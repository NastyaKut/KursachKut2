<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="menu_nav">
	<?if (!empty($arResult)):?>
	<ul>
		<?foreach($arResult as $key => $arItem):?>
			<?if($arItem['DEPTH_LEVEL'] != 1){
				continue;
			}
			?>
			<?if($arItem['DEPTH_LEVEL'] == 1):?>
		<li <?if($arItem["SELECTED"]):?>class="active"<?endif?>><a href="<?=$arItem["LINK"];?>"><span><?=$arItem["TEXT"];?></span></a>
			<ul>
			<?endif;?>
				<?foreach($arResult as $keyInner => $arItemInner):?>
				<?if($keyInner <= $key) {
					continue;
				}
				?>
					<?if($arItemInner['DEPTH_LEVEL'] == 2):?>
						<li><a href="<?=$arItemInner["LINK"];?>"><span><?=$arItemInner["TEXT"];?></span></a></li>
					<?endif;?>
				<?if($arItemInner['DEPTH_LEVEL'] != 2){
					break;
				}
				?>
				<?endforeach;?>
				<?if($arItem['DEPTH_LEVEL'] == 1):?>
			</ul>
		</li>
			<?endif;?>
		<?endforeach;?>
	</ul>
	<?endif;?>
</div>