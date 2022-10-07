<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
    $APPLICATION->SetTitle(""); ?>

<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedback_form", Array(
	"EMAIL_TO" => "777@yandex.ru",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "NAME",
			1 => "EMAIL",
		),
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	),
	false
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>