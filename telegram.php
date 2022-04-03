<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$token = "1218043297:AAEQRF0Xw82396HURQDc8H5JOEeSP66O1Cg";
$chat_id = "-1075848452";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>