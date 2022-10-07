<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>
</div>
<div class="col-md-12 col-lg-8 main-content">
    <form action="<?=POST_FORM_ACTION_URI?>" method="post">
        <?=bitrix_sessid_post()?>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="name"><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label>
                <input type="text" id="name" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" class="form-control">
            </div>
           <!--<div class="col-md-4 form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" class="form-control ">
            </div>-->
            <div class="col-md-4 form-group">
                <label for="email"><?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label>
                <input type="email" id="email" name="user_email" class="form-control" value="<?=$arResult["AUTHOR_EMAIL"]?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 form-group">
                <label for="message"><?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label>
                <textarea name="MESSAGE" id="message" class="form-control " cols="30" rows="8"><?=$arResult["MESSAGE"]?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
