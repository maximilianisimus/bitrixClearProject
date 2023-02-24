<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false)) {
        return;
    }
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
?>
<? if ($arResult["bDescPageNumbering"] === true): ?>
    <? if ($arResult["NavPageNomer"] > 1): ?>
        <div class="" id="ajax_next_page"
             data-href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>">
            pfuhepbnm
        </div>
        <div class="line news-section-bottom-line col-12"
             data-href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>">
            <a href="#" class="load-more">
                <span class="load-more-text">Показать ещё</span>
                <span class="load-more-icon">
                    <svg class="svg-icon">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/sprite.svg#arrow-bottom"></use>
                    </svg>
                </span>
            </a>
        </div>
    <? endif ?>
<? else: ?>
    <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
        <? $link = $arResult["sUrlPath"] . '?' . $strNavQueryString . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] + 1) ?>
        <div class="line news-section-bottom-line btn btn-accent ajax_next_page" id="ajax_next_page"
             data-href="<?= $link ?>"
             style="width: 100%">
            Показать ещё
        </div>
    <? endif ?>
<? endif ?>