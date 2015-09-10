<?php

require_once('../src/Vkontakte.php');

define("GROUP_ID", "xxxxxxxxx");
define("ACCESS_TOKEN", "xxxxxxxxx");

$vkAPI = new \BW\Vkontakte(['access_token' => ACCESS_TOKEN]);

$images = ['D:/tmp/1.jpg','D:/tmp/2.jpg'];
$images_vk = ['photo-85704541_378479362'];

if ($vkAPI->postToPublic(GROUP_ID, "Привет Хабр!", $images_vk, $images )) {

    echo "Ура! Всё работает, пост добавлен\n";

} else {

    echo "Фейл, пост не добавлен(( ищите ошибку\n";
}

