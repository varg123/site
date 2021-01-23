<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>

    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Индиго-дезинфекторы и моющие средства</title>
    <link rel="shortcut icon" href="<?= '/local/templates/' . SITE_TEMPLATE_ID . '/' ?>images/favicon.png"
          type="image/png">
    <link rel="stylesheet" href="<?= '/local/templates/' . SITE_TEMPLATE_ID . '/' ?>css/style.css?10"/>
    <link rel="stylesheet" href="<?= '/local/templates/' . SITE_TEMPLATE_ID . '/' ?>css/fonts.css"/>
    <link rel="stylesheet" href="<?= '/local/templates/' . SITE_TEMPLATE_ID . '/' ?>css/normalize.css"/>
    <link rel="stylesheet" href="<?= '/local/templates/' . SITE_TEMPLATE_ID . '/' ?>css/slick.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="<?= '/local/templates/' . SITE_TEMPLATE_ID . '/' ?>js/common.js"></script>
    <script src="<?= '/local/templates/' . SITE_TEMPLATE_ID . '/' ?>js/jquery.maskedinput.js"></script>
    <script src="<?= '/local/templates/' . SITE_TEMPLATE_ID . '/' ?>js/slick.min.js"></script>

    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR ?>favicon.ico"/>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<header>
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/logo.php"
        )
    ); ?>
    <div class="header-wrap">
        <div class="header-left">
            <nav id="nav-wrap">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>
            </nav>
            <a href="#win" class="header-cat">Каталог<br>товаров</a>
        </div>
        <div class="header-right">
            <div class="header-phone">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/phone.php"
                    )
                ); ?>
            </div>
            <a href="#win" class="header-search"></a>
            <a href="#win" class="header-user"></a>
            <a href="#win" class="header-cart"></a>
        </div>
    </div>
