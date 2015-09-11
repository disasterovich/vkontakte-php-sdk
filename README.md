vkontakte-php-sdk
=================

Vkontakte PHP SDK

An example of VK API usage for habrapost. The code looks like

```php
require_once('../src/Vkontakte.php');

$accessToken = 'your access token';
$vkAPI = new \BW\Vkontakte(['access_token' => $accessToken]);

if ($vkAPI->postToPublic(70941690, "Привет Хабр!", ["photo-85704541_378479362"],['D:/tmp/1.jpg','D:/tmp/2.jpg'])) {

    echo "Ура! Всё работает, пост добавлен\n";

} else {

    echo "Фейл, пост не добавлен(( ищите ошибку\n";
}

```
