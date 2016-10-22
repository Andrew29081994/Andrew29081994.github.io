<?php

$recepient = "andreygazhala@gmail.com";
$sitename = "Название сайта";

$name = trim($_POST["username"]);
$mail = trim($_POST["email-address"]);
$text = trim($_POST["comment"]);
$message = "Имя: $name \nEmail: $email-address \nСообщение: $commen";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");