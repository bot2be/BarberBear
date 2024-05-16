<?php

/* https://api.telegram.org/bot7022416183:AAFAWSTlLMLWhph07fP3ddcX2EnSUWTovak/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "7022416183:AAFAWSTlLMLWhph07fP3ddcX2EnSUWTovak";
$chat_id = "-4179778471";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone
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
