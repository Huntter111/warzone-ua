<?php
   // $nameTeam = $_POST['name_team'];
   // $nameCaptain = $_POST['name_captain'];
   // $nameTwo = $_POST['name_two'];
   // $nameThree = $_POST['name_three'];
   // $nameFour = $_POST['name_four'];

	// $phoneCaptain = $_POST['phone_captain'];
	// $idCaptain = $_POST['id_captain'];
	// $idTwo = $_POST['id_two'];
	// $idThree = $_POST['id_three'];
	// $idFour = $_POST['id_four'];
	// $message = $_POST['message'];

	// $token = '6317945469:AAEujqMTJu4SDlzFlqfY4Z8eT12wVFU1o3s';
	// $chat_id = '-965231127';
	// $arr = array(
	// 	'Назва Команди: ' => $nameTeam,
	// 	'Ім\'я Капітана: ' => $nameCaptain,
	// 	'Телефон Капітана: ' => $phoneCaptain,
	// 	'ID Капітана: ' => $idCaptain,
	// 	'Ім\'я другого гравця: ' => $nameTwo,
	// 	'ID другого гравця: ' => $idTwo,
	// 	'Ім\'я третього гравця: ' => $nameThree,
	// 	'ID третього гравця: ' => $idThree,
	// 	'Ім\'я четвертого гравця: ' => $nameFour,
	// 	'ID четвертого гравця: ' => $idFour,
	// 	'Повідомлення: ' => $message
	// );
	// foreach($arr as $key => $value) {
	// 	$txt .= "<b>".$key."</b> ".$value."%0A \n";
	// };
	// $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
	// if($sendToTelegram){
	// 	echo 'Good';
	// } else {
	// echo "Error";
	// }
	   // ================
   // $content = '';
   // foreach($_POST as $key => $value){
   //    if($value){
   //       $content .= "<b>$key</b>: <i>$value</i> \n";
   //    }
   //    if(trim($content)){
   //       $content = "<b>Message from Site:</b> \n".$content;
   //       $apiToken = '6317945469:AAEujqMTJu4SDlzFlqfY4Z8eT12wVFU1o3s';
   //       $data = [
   //          'chat_id' => '@TournamentsWarzone';
   //          'text' => $content,
   //          'parse_mode' => 'HTML'
   //       ];
   //       $response = file_get_contents('https://api.telegram.org/bot$apiToken/sendMessage?'.http_build_query($data));
   //    }
   // }
		// ============================================
		// Працюючий код але без форматування
	// ==========================
// 	if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Отримання даних з форми
//    $nameTeam = $_POST["name_team"];
//    $nameCaptain = $_POST["name_captain"];
//    $nameTwo = $_POST["name_two"];
//    $nameThree = $_POST["name_three"];
//    $nameFour = $_POST["name_four"];
//    $phoneCaptain = $_POST["phone_captain"];
//    $idCaptain = $_POST["id_captain"];
//    $idTwo = $_POST["id_two"];
//    $idThree = $_POST["id_three"];
//    $idFour = $_POST["id_four"];
//    $message = $_POST["message"];

//     // Налаштування Telegram-бота
//    $botToken = "6317945469:AAEujqMTJu4SDlzFlqfY4Z8eT12wVFU1o3s";
//    $chatId = "-1001686641413";

//     // Формування повідомлення
// 	$text = "<b>Нова реєстрація на турнір:</b>\n";
// 	$text .= "<b>Назва команди:</b> " . $nameTeam . "\n";
// 	$text .= "<b>Hікнейм Капітана:</b> " . $nameCaptain . "\n";
// 	$text .= "<b>Hікнейм другого гравця:</b> " . $nameTwo . "\n";
// 	$text .= "<b>Hікнейм третього гравця:</b> " . $nameThree . "\n";
// 	$text .= "<b>Hікнейм четвертого гравця:</b> " . $nameFour . "\n";
// 	$text .= "<b>Телефон капітана команди:</b> " . $phoneCaptain . "\n";
// 	$text .= "<b>Activision ID Капітана:</b> " . $idCaptain . "\n";
// 	$text .= "<b>Activision ID другого гравця:</b> " . $idTwo . "\n";
// 	$text .= "<b>Activision ID третього гравця:</b> " . $idThree . "\n";
// 	$text .= "<b>Activision ID четвертого гравця:</b> " . $idFour . "\n";
// 	$text .= "<b>Побажання, запитання, відгук:</b> " . $message;


//     // Відправка повідомлення в Telegram
//    $url = "https://api.telegram.org/bot" . $botToken . "/sendMessage";
//    $params = [
//       'chat_id' => $chatId,
//       'text' => $text
//    ];

//    $ch = curl_init($url);
//    curl_setopt($ch, CURLOPT_POST, 1);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    $response = curl_exec($ch);
//    curl_close($ch);

//     // Перенаправлення користувача на сторінку підтвердження
//    header("Location: ../index.html");
//    exit();
// }
// =======================================================
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Отримання даних з форми
	$nameTeam = $_POST["name_team"];
	$nameCaptain = $_POST["name_captain"];
	$nameTwo = $_POST["name_two"];
	$nameThree = $_POST["name_three"];
	$nameFour = $_POST["name_four"];
	$phoneCaptain = $_POST["phone_captain"];
	$idCaptain = $_POST["id_captain"];
	$idTwo = $_POST["id_two"];
	$idThree = $_POST["id_three"];
	$idFour = $_POST["id_four"];
	$message = $_POST["message"];

	// Налаштування Telegram-бота
	$botToken = "6317945469:AAEujqMTJu4SDlzFlqfY4Z8eT12wVFU1o3s";
	$chatId = "-1001686641413";

	// Формування повідомлення
	$text = "<b>Нова реєстрація на турнір</b>\n";
	$text .= "<b>Назва команди:</b> " . $nameTeam . "\n";
	$text .= "<b>Nick Капітана:</b> " . $nameCaptain . "\n";
	$text .= "<b>Nick 2-го гравця:</b> " . $nameTwo . "\n";
	$text .= "<b>Nick 3-го гравця:</b> " . $nameThree . "\n";
	$text .= "<b>Nick 4-го гравця:</b> " . $nameFour . "\n";
	$text .= "<b>Телефон капітана команди:</b> " . $phoneCaptain . "\n";
	$text .= "<b>Activision ID Капітана:</b> " . $idCaptain . "\n";
	$text .= "<b>Activision ID 2-го гравця:</b> " . $idTwo . "\n";
	$text .= "<b>Activision ID 3-го гравця:</b> " . $idThree . "\n";
	$text .= "<b>Activision ID 4-го гравця:</b> " . $idFour . "\n";
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
		header("Location: https://warzone.org.ua/dist/tournament.html#thank-you");
		exit();
	} else {
		header("Location: https://warzone.org.ua/dist/tournament.html#thank-you-error");
		// echo "Error";
	}
}
?>