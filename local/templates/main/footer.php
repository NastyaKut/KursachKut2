<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>

<div class="fbg">
    <div class="fbg_resize">
        <div class="col c1">
            <h2><span>Image</span> Gallery</h2>
            <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
        <div class="col c2">
            <h2><b>О компании</b></h2>
            <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
            <ul class="fbg_ul">
                <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
                <li><a href="#">Excepteur officia deserunt.</a></li>
                <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
            </ul>
        </div>
        <div class="col c3">
            <h2><b><span>Свяжись с нами</span></b></h2>
            <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
            <p class="contact_info"> <span>Адрес:</span> Москва, ул. Авокадо, 5<br />
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/phone.php"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/fax.php"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/email.php"
                    )
                );?> </p>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="footer">
    <div class="footer_resize">
        <p class="lf">Copyright &copy; ООО "ГринАвокадо" <?php echo date('Y') ?>. Все права защищены&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "social",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("ID", "NAME", "SORT", "PREVIEW_PICTURE", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "9",
                "IBLOCK_TYPE" => "content",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Социальные сети",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("URL", ""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "SORT",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_ORDER2" => "ASC"
            )
        );?>
    </div>
    </div>
</body>
</html>
