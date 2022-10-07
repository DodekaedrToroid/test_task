<?php
    define("NO_KEEP_STATISTIC", true);
    define("NOT_CHECK_PERMISSIONS", true);
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
    include '/include/translit.php';
    CMain::IncludeFile('/include/translit.php');
    CModule::IncludeModule('iblock');


    $el = new CIBlockElement;
        $iblock_id = 2;

        $PROP = [
            'PHOTO' => $_FILES['photo'],
            'LINK' => $_POST['link'],
            'CITY' => $_POST['city']
        ];



     $fields = [
         "DATE_CREATE" => date("d.m.Y H:i:s"), //Передаем дата создания
         "CREATED_BY" => $GLOBALS['USER']->GetID(),  //Передаем ID пользователя кто добавляет
         "IBLOCK_ID" => $iblock_id, //ID информационного блока он 24-ый
         "IBLOCK_CODE" => 'comments', //ID информационного блока он 24-ый
         "PROPERTY_VALUES" => $PROP, // Передаем массив значении для свойств
         "NAME" => $_POST['name'],
         "CODE" => translit_sef(strip_tags($_POST['name'])),
         "ACTIVE" => "Y", //поумолчанию делаем активным или ставим N для отключении поумолчанию
         "PREVIEW_TEXT" => strip_tags($_POST['message']), //Анонс
     ];


    //Результат в конце отработки
     if ($ID = $el->Add($fields)) {
          echo "Сохранено";
      } else {
          echo 'Произошел как-то косяк Попробуйте еще разок';
      }
