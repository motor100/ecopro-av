<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset; //Подключение библиотеки для использования  Asset::getInstance()->addCss() 
global $USER;
?>

<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><? $APPLICATION->ShowTitle(); ?></title>
  <? $APPLICATION->ShowHead(); ?>

  <!-- Font Awesome Icons -->
  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/vendor/fontawesome-free/css/all.min.css"); ?>

  <!-- Google Fonts -->
  <? Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700&selection.subset=cyrillic"); ?>
  <? Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i&display=swap&subset=cyrillic"); ?>

  <!-- Plugin CSS -->
  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/vendor/magnific-popup/magnific-popup.css") ?>

  <!-- Theme CSS - Includes Bootstrap -->
  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/creative.min.css") ?>

  <!-- Bootstrap core JavaScript -->
  <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendor/jquery/jquery.min.js"); ?>

</head>

<body id="page-top">

  <div id="panel">
    <? $APPLICATION->ShowPanel(); ?> 
  </div>
  

