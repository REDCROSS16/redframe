<h2>Page to upload image</h2>
<form action=""  enctype="multipart/form-data" method="post">
    <input type="file" name="file">
    <input type="submit" value="загрузить файл">
</form>

<?php


use Core\Model;

if(isset($_FILES['file'])) {
    // проверяем, можно ли загружать изображение
    $check = \project\controllers\FileController::canUpload($_FILES['file']);

    if ($check === true){
        // загружаем изображение на сервер
        \project\controllers\FileController::makeUpload($_FILES['file']);
        echo "<strong style='color: darkseagreen'>Файл успешно загружен!</strong>";
        unset($_FILES['file']);
    }
    else{
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}