<?php
   $nameTeam = $_POST['name_team'];
   $nameCaptain = $_POST['name_captain'];
   $nameTwo = $_POST['name_two'];
   $nameThree = $_POST['name_three'];
   $nameFour = $_POST['name_four'];

	$phoneCaptain = $_POST['phone_captain'];
	$idCaptain = $_POST['id_captain'];
	$idTwo = $_POST['id_two'];
	$idThree = $_POST['id_three'];
	$idFour = $_POST['id_four'];
	$message = $_POST['message'];

	$token = '6317945469:AAEujqMTJu4SDlzFlqfY4Z8eT12wVFU1o3s';
	$chat_id = '-965231127';
	$arr = array(
		'Назва Команди: ' => $nameTeam,
		'Ім\'я Капітана: ' => $nameCaptain,
		'Телефон Капітана: ' => $phoneCaptain,
		'ID Капітана: ' => $idCaptain,
		'Ім\'я другого гравця: ' => $nameTwo,
		'ID другого гравця: ' => $idTwo,
		'Ім\'я третього гравця: ' => $nameThree,
		'ID третього гравця: ' => $idThree,
		'Ім\'я четвертого гравця: ' => $nameFour,
		'ID четвертого гравця: ' => $idFour,
		'Повідомлення: ' => $message,
	);
	foreach($arr as $key => $value) {
		$txt .= "<b>".$key."</b> ".$value."%0A";
	};
	$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
	if($sendToTelegram){
		echo 'Good';
	} else {
	echo "Error";
	}
?>