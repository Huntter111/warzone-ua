<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Отримання даних з форми
	$nameTeam = $_POST["name_team"];
	$nameCaptain = $_POST["name_captain"];
	$nameTwo = $_POST["name_two"];
	$phoneCaptain = $_POST["phone_captain"];
	$idCaptain = $_POST["id_captain"];
	$idTwo = $_POST["id_two"];

	$dsIDCaptain = $_POST["discord_id_capitan"];

	$message = $_POST["message"];

	// Налаштування Telegram-бота
	$botToken = "6317945469:AAEujqMTJu4SDlzFlqfY4Z8eT12wVFU1o3s";
	$chatId = "-1001686641413";

	// Формування повідомлення
	$text = "<b>Нова реєстрація на турнір '2х2 GUN GAME'</b>\n";
	$text .= "<b>Назва команди:</b> " . $nameTeam . "\n";
	$text .= "<b>Nick Капітана:</b> " . $nameCaptain . "\n";
	$text .= "<b>Nick 2-го гравця:</b> " . $nameTwo . "\n";
	$text .= "==============================\n";
	$text .= "<b>Телефон капітана команди:</b> " . $phoneCaptain . "\n";
	$text .= "<b>ACT ID Капітана:</b> " . $idCaptain . "\n";
	$text .= "<b>ACT ID 2-го гравця:</b> " . $idTwo . "\n";

	$text .= "==============================\n";
	// ================================================================
	$text .= "<b>DS ID Капітана:</b> " . $dsIDCaptain . "\n";


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
		header("Location: https://warzone.org.ua/tournament.html#thank-you");
		exit();
	} else {
		header("Location: https://warzone.org.ua/tournament.html#thank-you-error");
		// echo "Error";
	}
}
?>