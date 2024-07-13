<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Отримання даних з форми
	$nameTeam = $_POST["name_team"];
	$nameCaptain = $_POST["name_captain"];
	$nameTwo = $_POST["name_two"];
	$nameThree = $_POST["name_three"];
	$phoneCaptain = $_POST["phone_captain"];
	$idCaptain = $_POST["id_captain"];
	$idTwo = $_POST["id_two"];
	$idThree = $_POST["id_three"];
	$dsIDCaptain = $_POST["discord_id_capitan"];
	$dsIDTwo = $_POST["discord_id_two"];
	$dsIDThree = $_POST["discord_id_three"];
	// $dsIDFour = $_POST["discord_id_four"];
	$message = $_POST["message"];

	// Налаштування Telegram-бота
	$botToken = "6317945469:AAEujqMTJu4SDlzFlqfY4Z8eT12wVFU1o3s";
	$chatId = "-1001686641413";

	// Формування повідомлення
	$text = "<b>Нова реєстрація Kill Race 10.03.2024</b>\n";
	$text .= "<b>Назва команди:</b> " . $nameTeam . "\n";
	$text .= "<b>Nick Капітана:</b> " . $nameCaptain . "\n";
	$text .= "<b>Nick 2-го гравця:</b> " . $nameTwo . "\n";
	$text .= "<b>Nick 3-го гравця:</b> " . $nameThree . "\n";
	$text .= "==============================\n";
	$text .= "<b>Телефон капітана команди:</b> " . $phoneCaptain . "\n";
	$text .= "<b>ACT ID Капітана:</b> " . $idCaptain . "\n";
	$text .= "<b>ACT ID 2-го гравця:</b> " . $idTwo . "\n";
	$text .= "<b>ACT ID 3-го гравця:</b> " . $idThree . "\n";
	$text .= "==============================\n";
	// ================================================================
	$text .= "<b>DS ID Капітана:</b> " . $dsIDCaptain . "\n";
	$text .= "<b>DS ID 2-го гравця:</b> " . $dsIDTwo . "\n";
	$text .= "<b>DS ID 3-го гравця:</b> " . $dsIDThree . "\n";
	// $text .= "<b>DS ID 4-го гравця:</b> " . $dsIDFour . "\n";
	// ================================================================
	$text .= "<b>Побажання, запитання, відгук:</b> " . $message;

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