<?php
$email = $_POST['email'];
$message = $_POST['message'];
$err = '';  

if (trim($email) == '') {
    $err = 'Введите email';
} else if (trim($message) == '') {
    $err = 'Введите сообщение';
}

if ($err != ''){
    echo $err;
    exit;
}

$title = '=?utf-8?B?' . base64_encode('Сообщение с блога ') . '?=';
$header = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
mail('rostilksalam@yandex.ru', $title,  $message, $header);

header('Location: /about.php');
?>
