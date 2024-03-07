<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Отримання даних з форми
	$namePerson = $_POST["name_person"];
   // ID
	$telegram_ID = $_POST["telegram_ID"];
	$idPerson = $_POST["id_person"];
   // Message
	$message = $_POST["message"];

	// Налаштування Telegram-бота
	$botToken = "6317945469:AAEujqMTJu4SDlzFlqfY4Z8eT12wVFU1o3s";
	$chatId = "-1001686641413";

	// Формування повідомлення
	$text = "<b>Нова реєстрація на турнір 'King of the Hill'</b>\n";
	$text .= "<b>Nick Гравця:</b> " . $namePerson . "\n";
	$text .= "<b>Телеграм ID:</b> " . $telegram_ID . "\n";
	$text .= "<b>ID Гравця:</b> " . $idPerson . "\n";

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
		header("Location: https://warzone.org.ua/tournament-solo.html#thank-you");
		exit();
	} else {
		header("Location: https://warzone.org.ua/tournament-solo.html#thank-you-error");
		// echo "Error";
	}
}
?>