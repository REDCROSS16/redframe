<h2>Page to upload image</h2>
<form action="" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="загрузить файл">
</form>

<?php

$file = new \project\controllers\FileController();

if (isset($_FILES['file'])) {

}