<?php

/* https://api.telegram.org/bot7007820762:AAGAGaKQnfofFFpTVOzK-G2SbQy2CFxwbes/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "7007820762:AAGAGaKQnfofFFpTVOzK-G2SbQy2CFxwbes";
$chat_id = "-4209124441";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: 1.html');
} else {
  echo "Error";
}

?>