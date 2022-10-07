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

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                    if(!empty($arItem['PROPERTIES']['PHOTO']['VALUE'])){
                        $masspath = CFile::GetPath($arItem['PROPERTIES']['PHOTO']['VALUE']);
                    }?>
                <div class="post-entry-horzontal" id="<?=$this->GetEditAreaId($arItem['ID']);?>>
                    <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>">
                        <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(upload/iblock/4d9/lta8cdby85f21i1f77lr43s72ckr6399/karta-mira-russkom.jpg);"></div>
                        <span class="text">
                      <div class="post-meta">
                        <span class="category"><?=$arItem['NAME']?></span>
                        <span class="mr-2"><?=$arItem['TIMESTAMP_X']?></span> •
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2><?=$arItem['PREVIEW_TEXT']?></h2>
                    </span>
                    </a>
                </div>
<?endforeach;?>


<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

