<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рыбный совхоз \"КОРПАЧ\"");
?><!-- About Section --> <section class="page-section bg-primary" id="home">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8 text-center">
			<h2 class="text-white mt-0">О прикорме</h2>
			<hr class="divider light my-4">
			<p class="text-white-50 mb-4">
				 Споры о том, на что ловить и чем лучше прикармливать, наверное, никогда не закончатся. Одни предпочи-тают новомодные прикор-мки, изготовленные фирма-ми, специализи-рующимися на их производ-стве; другие ни за что не променяют кастрюлю с душистым варевом, над которой они колдовали не один час, словно баба-яга над зельем. Но речь не об этом. Я не буду давать советы и рецепты, а выскажусь по поводу некоторых заблуждений. В большинстве статей пишут, что рыбу можно перекормить большим количеством прикормки. Но никто не пишет конкретных цифр - сколько "много", а сколько "мало" или "достаточно". Потому что никто не знает и никогда не узнает, сколько же это "много". Для одного и килограмм - уже много, а для другого и ведра кажется мало. Но причина не в этом. Давайте на проблему посмотрим с другой стороны.
			</p>
		</div>
	</div>
</div>
 </section>
<!-- Services Section --> <section class="page-section">
<div class="container">
	<h2 class="text-center mt-0">Почему мы?</h2>
	<hr class="divider my-4">
</div>
 </section>
<!-- Portfolio Section --> <section id="portfolio">
<div class="container-fluid p-0">
	<div class="row no-gutters">
		<div class="col-lg-4 col-sm-6">
 <a class="portfolio-box" href="/bitrix/templates/fish_farm/img/1.jpg"> <img src="/bitrix/templates/fish_farm/img/1.jpg" class="img-fluid" alt="">
			<div class="portfolio-box-caption">
				<div class="project-name">
					 Прекраснвые пейзажи
				</div>
			</div>
 </a>
		</div>
		<div class="col-lg-4 col-sm-6">
 <a class="portfolio-box" href="/bitrix/templates/fish_farm/img/2.jpg"> <img src="/bitrix/templates/fish_farm/img/2.jpg" class="img-fluid" alt="">
			<div class="portfolio-box-caption">
				<div class="project-name">
					 Крупная рыба
				</div>
			</div>
 </a>
		</div>
		<div class="col-lg-4 col-sm-6">
 <a class="portfolio-box" href="/bitrix/templates/fish_farm/img/3.jpg"> <img src="/bitrix/templates/fish_farm/img/3.jpg" class="img-fluid" alt="">
			<div class="portfolio-box-caption">
				<div class="project-name">
					 Тихие места
				</div>
			</div>
 </a>
		</div>
		<div class="col-lg-4 col-sm-6">
 <a class="portfolio-box" href="/bitrix/templates/fish_farm/img/4.jpg"> <img src="/bitrix/templates/fish_farm/img/4.jpg" class="img-fluid" alt="">
			<div class="portfolio-box-caption">
				<div class="project-name">
					 Дзен
				</div>
			</div>
 </a>
		</div>
		<div class="col-lg-4 col-sm-6">
 <a class="portfolio-box" href="/bitrix/templates/fish_farm/img/5.jpg"> <img src="/bitrix/templates/fish_farm/img/5.jpg" class="img-fluid" alt="">
			<div class="portfolio-box-caption">
				<div class="project-name">
					 Оcнащение плавсредствами
				</div>
			</div>
 </a>
		</div>
		<div class="col-lg-4 col-sm-6">
 <a class="portfolio-box" href="/bitrix/templates/fish_farm/img/6.jpg"> <img src="/bitrix/templates/fish_farm/img/6.jpg" class="img-fluid" alt="">
			<div class="portfolio-box-caption p-3">
				<div class="project-name">
					 Хорошее настроение
				</div>
			</div>
 </a>
		</div>
	</div>
</div>
 </section>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"fish_news",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FIELD_CODE" => array("ID",""),
		"FILE_404" => "",
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("","DESCRIPTION",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?> <!-- Contact Section --> <section class="page-section" id="contact">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8 text-center">
			<h2 class="mt-0"><?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"fish_detail",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FIELD_CODE" => array("",""),
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "services",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?>Связаться с нами</h2>
			<hr class="divider my-4">
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
 <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
			<div>
				 +1 (202) 555-0149
			</div>
		</div>
		<div class="col-lg-4 mr-auto text-center">
 <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
			<!-- Make sure to change the email address in anchor text AND the link below! --> <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
		</div>
	</div>
</div>
 </section><? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>