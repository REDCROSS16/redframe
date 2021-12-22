<?php
#TODO: Реализовать загрузку изображения и наложение водяного знака
//Наложение знака при загрузке - функция
//
//Итак, вот во что превратится наша функция make_upload:

function make_upload($file){
    // получаем полезные данные о картинке и водяном знаке
    $image_info = getimagesize($file['tmp_name']);
    $watermark_info = getimagesize('watermark.png');

    // определяем MIME-тип изображения, для выбора соответствующей функции
    $format = strtolower(substr($image_info['mime'],strpos($image_info['mime'], '/') + 1));

    // определяем названия функция для создания и сохранения картинки
    $im_cr_func = "imagecreatefrom" . $format;
    $im_save_func = "image" . $format;

    // загружаем изображение в php
    $img = $im_cr_func($file['tmp_name']);

    // загружаем в php наш водяной знак
    $watermark = imagecreatefrompng('watermark.png');

    // определяем координаты левого верхнего угла водяного знака
    $pos_x = ($image_info[0] - $watermark_info[0]) / 2;
    $pos_y = ($image_info[1] - $watermark_info[1]) / 2;

    // помещаем водяной знак на изображение
    imagecopy($img, $watermark, $pos_x, $pos_y, 0, 0, $watermark_info[0],
        $watermark_info[1]);

    // сохраняем изображение с уникальным именем
    $name = mt_rand(0, 10000) . $file['name'];
    $im_save_func($img, 'img/' . $name);
}

