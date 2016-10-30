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
            <div class="menu_nav">
                <ul>
                    <li class="active"><a href="index.html"><span>Главная страница</span></a></li>
                    <li><a href="support.html"><span>О нас</span></a></li>
                    <li><a href="about.html"><span>Новости</span></a></li>
                    <li><a href="blog.html"><span>Форум</span></a></li>
                    <li><a href="contact.html"><span>Контакты</span></a></li>
                </ul>
            </div>
            <div class="clr"></div>
            <div class="slider">
                <div id="coin-slider"><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide1.jpg" width="935" height="307" alt="" /></a> <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide2.jpg" width="935" height="307" alt="" /></a> <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide3.jpg" width="935" height="307" alt="" /></a></div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    </div>