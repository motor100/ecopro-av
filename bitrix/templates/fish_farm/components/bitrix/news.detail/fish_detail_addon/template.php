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

<section class="page-section bg-dark text-white" id="news">
    <div class="container text-center">
      <h2 class="mb-0">Новости</h2>
		<hr class="divider my-4">
    </div>

	<div class="news-detail">
		<?if((!isset($arParams["DISPLAY_PICTURE"]) || $arParams["DISPLAY_PICTURE"]!="N") && is_array($arResult["DETAIL_PICTURE"])):?>
			<img
				class="detail_picture"
				border="0"
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
				height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
		<?endif?>
		<?if((!isset($arParams["DISPLAY_DATE"]) || $arParams["DISPLAY_DATE"]!="N") && $arResult["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif;?>
		<?if((!isset($arParams["DISPLAY_NAME"]) || $arParams["DISPLAY_NAME"]!="N") && $arResult["NAME"]):?>
			<h3><?=$arResult["NAME"]?></h3>
		<?endif;?>
		<?if((!isset($arParams["DISPLAY_PREVIEW_TEXT"]) || $arParams["DISPLAY_PREVIEW_TEXT"]!="N") && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '') !== ''):?>
			<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
		<?endif;?>
		<?if($arResult["NAV_RESULT"]):?>
			<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
			<?echo $arResult["NAV_TEXT"];?>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
		<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
			<?echo $arResult["DETAIL_TEXT"];?>
		<?else:?>
			<?echo $arResult["PREVIEW_TEXT"];?>
		<?endif?>
		<div style="clear:both"></div>
		<?if(isset($arResult["PROPERTIES"]["SECOND_IMAGE1"]["VALUE"])):?>
			<img
				class="second_picture"
				border="0"
				src="<?= CFile::GetPath($arResult["PROPERTIES"]["SECOND_IMAGE1"]["VALUE"]); ?>"
			/>
		<?endif?>
		<?$im = CFile::GetPath($arResult["PROPERTIES"]["SECOND_IMAGE1"]["VALUE"]);?> 
		<!-- <img src="<? // echo $im; ?>"> -->
		<? echo $arResult['DISPLAY_PROPERTIES']['SECOND_TEXT']['DISPLAY_VALUE'];?>
		<? echo $arResult['DISPLAY_PROPERTIES']['SECOND_TEXT1']["VALUE"]["TEXT"];?>
		<? $arResult['DISPLAY_PROPERTIES']['SECOND_TEXT'] = CIBlockFormatProperties::GetDisplayValue($arResult, $PRODUCT_ID); ?>
		<? echo $arResult['DISPLAY_PROPERTIES']['SECOND_TEXT']['DISPLAY_VALUE']; ?>
		<? echo htmlspecialcharsBack($arResult["PROPERTIES"]["SECOND_TEXT"]["VALUE"]["TEXT"])?>
		<?if((!isset($arParams["DISPLAY_SECOND_TEXT"]) || $arParams["DISPLAY_SECOND_TEXT"]!="N") && ($arResult["FIELDS"]["SECOND_TEXT"] ?? '') !== ''):?>
			<p><?=$arResult["FIELDS"]["SECOND_TEXT"];unset($arResult["FIELDS"]["SECOND_TEXT"]);?></p>
		<?endif;?>
		<?=$arResult["PROPERTIES"]["SECOND_TEXT"]["VALUE"]["TEXT"]; ?>
		<?=$arResult["PROPERTIES"]["SECOND_TEXT"]["~VALUE"]["TEXT"]?>
		<? echo $arResult["PROPERTIES"]["SECOND_TEXT"]["VALUE"]["TEXT"];?>
		<? //echo isset($arResult["PROPERTIES"]["SECOND_IMAGE1"]); ?>
		<pre>
		<? //var_dump($arResult); ?>
		</pre>
		<br />
	</div>
</section>