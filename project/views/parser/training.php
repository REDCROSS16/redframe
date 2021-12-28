<h4>Тренировка для парсинга</h4>


<?php
    $file = 'project/files/1.txt';

    $bookshelf = [
        [
            [
                'author' => 'Л. Толстый',
                'title' => 'Война и пир',
                'year' => 2005,
            ],
            [
                'author' => 'Н. Гоголь-Моголь',
                'title' => 'Мертвые уши',
                'year' => 2005,
            ],
        ],
        [
            [
                'author' => 'Г. Велс',
                'title' => 'Машина Бремени',
                'year' => 2009,
            ],
            [
                'author' => 'Э. Дерроуз',
                'title' => 'Нарзан',
                'year' => 1994,
            ],
        ],
    ];

    // Запись.
//    $data = serialize($bookshelf);      // PHP формат сохраняемого значения.
    //$data = json_encode($bookshelf);  // JSON формат сохраняемого значения.
//    file_put_contents($file, $data);

    // Чтение.
//    $data = file_get_contents($file);
    //$bookshelf = json_decode($data, TRUE); // Если нет TRUE то получает объект, а не массив.
//    $books = unserialize($data);

//    $str = file_get_contents('https://github.com/REDCROSS16');

    # получаем инфо из тайтла
//    preg_match_all('#<title>(.+?)</title>#su', $str, $res);
    #
//    preg_match_all('#<head>(.+?)</head>#su', $str, $res);
//    var_dump($res);

//    $file = 'project/files/2.txt';
//    $data = serialize($res);
//    file_put_contents($file, $data);


    $res = file_get_contents('http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/1/1.php');
    preg_match_all('#<a href=">(.+?)</a>#su', $res, $result);
    echo '<pre>';
    var_export($result);
    echo '</pre>';
