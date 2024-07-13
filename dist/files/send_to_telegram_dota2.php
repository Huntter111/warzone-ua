<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Отримання даних з форми
	$nameTeam = $_POST["name_team"];
	$nameCaptain = $_POST["name_captain"];
	$nameTwo = $_POST["name_two"];
	$nameThree = $_POST["name_three"];
	$nameFour = $_POST["name_four"];
	$nameFive = $_POST["name_five"];
	
	$dsIDCaptain = $_POST["discord_id_capitan"];
	
	$message = $_POST["message"];

	// Налаштування Telegram-бота
	$botToken = "6881952904:AAHX-l4-uUU7M3WCg2mFFkQC9qOpaW8Dquc";
	$chatId = "-4133391786";

	// Формування повідомлення
	$text = "<b>Нова реєстрація на турнір Dota2</b>\n";
   $text .= "==============================\n";
	$text .= "<b>Назва команди:</b> " . $nameTeam . "\n";
	$text .= "<b>Dota ID Капітана:</b> " . $nameCaptain . "\n";
	$text .= "<b>Dota ID 2-го гравця:</b> " . $nameTwo . "\n";
	$text .= "<b>Dota ID 3-го гравця:</b> " . $nameThree . "\n";
	$text .= "<b>Dota ID 4-го гравця:</b> " . $nameFour . "\n";
	$text .= "==============================\n";

	// ================================================================
	$text .= "<b>Dіsrod ID Капітана:</b> " . $dsIDCaptain . "\n";

	// Відправка повідомлення в Telegram
	$url = "https://api.telegram.org/bot" . $botToken . "/sendMessage";
	$params = [
		'chat_id' => $chatId,
		'parse_mode' => 'HTML',
		'text' => $text
	];

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);

	if ($response) {
		header("Location: https://warzone.org.ua/dota2.html#thank-you-dota");
		exit();
	} else {
		header("Location: https://warzone.org.ua/dota2.html#thank-you-error");
		// echo "Error";
	}
}
?>