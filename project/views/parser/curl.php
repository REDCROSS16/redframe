<?php



$url = 'https://github.com/REDCROSS16';


/**
 * @param String $url
 * @return bool|string
 */
function getPageByUrl (String $url)   {
    //Инициализируем сеанс
    $curl = curl_init();
    //Указываем адрес страницы
    curl_setopt($curl, CURLOPT_URL, $url);
    //Ответ сервера сохранять в переменную, а не на экран
    //curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    //Переходить по редиректам
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);

    //Выполняем запрос:
    $result = curl_exec($curl);
    //Отлавливаем ошибки подключения
    if ($result === false) {
        echo "Ошибка CURL: " . curl_error($curl);
    } else {
        return $result;
    }

}

//echo getPageByUrl('https://onliner.by');

require_once 'phpQuery.php';

$str = '<div id="elem">Текст</div><div>Еще тег</div>';
$pq = phpQuery::newDocument($str);

$elem = $pq->find('#elem');
$text = $elem->html();
var_dump($text);