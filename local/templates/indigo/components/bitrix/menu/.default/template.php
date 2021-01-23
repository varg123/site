<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <ul class="menu" id="nav">

        <?
        foreach ($arResult as $arItem):
            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            //TODO:Сделать параметр меню
            ?>
            <li>
                <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
            </li>
        <? endforeach ?>

        <li class="user">
            <a href="#win">Личный кабинет</a>
        </li>
    </ul>
<? endif ?>

