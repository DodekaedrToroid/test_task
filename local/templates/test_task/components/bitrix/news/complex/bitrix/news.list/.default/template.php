<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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

<?foreach($arResult['ITEMS'] as $item){?>
<div class="col-md-6">
    <a href="<?=$item['DETAIL_PAGE_URL']?>" class="blog-entry " data-animate-effect="fadeIn">
        <img alt="Image placeholder" src="<?=$item['PREVIEW_PICTURE']['SRC']?>">
        <div class="blog-content-body">
            <div class="post-meta">
                <span class="category"><?=$item['PROPERTIES']['DISPLAY_CATEGORY']['VALUE']?></span> <span class="mr-2">March 15, 2018 </span> • <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
        </div>
    </a>
</div>
<?}?>