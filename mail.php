<?php

$recepient = "andreygazhala@gmail.com";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$email = trim($_POST["tel"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nEmail: $email \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");