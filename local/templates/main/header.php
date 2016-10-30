<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?use Bitrix\Main\Localization\Loc; use Bitrix\Main\Page\Asset; Loc::loadMessages(__FILE__);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."template_styles.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/coin-slider.css");?>

    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/cufon-yui.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery-1.4.2.min.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/script.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/coin-slider.min.js", true);?>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="main">
    <div class="header">
        <div class="header_resize">
            <div class="logo">
                <h1><a href="index.html">ГринАвокадо</a> <small>Магазин правильного питания</small></h1>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "left",
                    "USE_EXT" => "Y"
                )
            );?>
            <div class="clr"></div>
            <div class="slider">
                <div id="coin-slider"><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide1.jpg" width="935" height="307" alt="" /></a> <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide2.jpg" width="935" height="307" alt="" /></a> <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide3.jpg" width="935" height="307" alt="" /></a></div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    </div>