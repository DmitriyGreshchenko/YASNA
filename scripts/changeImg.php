<?php
function changeImage($h, $w, $src, $newsrc, $type) {
    $newimg = imagecreatetruecolor($h, $w);
    switch ($type) {
      case 'jpeg':
        $img = imagecreatefromjpeg($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
        imagejpeg($newimg, $newsrc);
        break;
      case 'png':
        $img = imagecreatefrompng($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
        imagepng($newimg, $newsrc);
        break;
      case 'gif':
        $img = imagecreatefromgif($src);
        imagecopyresampled($newimg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
        imagegif($newimg, $newsrc);
        break;
    }
   }; 


$path = "../img/big/".$_FILES['photo']['name'];
$path_2 = "../img/small/".$_FILES['photo']['name'];

if (isset($_POST['send'])) {
  if ($_FILES['photo']['error']) {
    echo "Ошибка загрузки файла!";
  } elseif ($_FILES['photo']['size'] > 1000000) {
    echo "Файл слишком большой!";
  } elseif (
    $_FILES['photo']['type'] == 'image/jpeg'||
    $_FILES['photo']['type'] == 'image/png' ||
    $_FILES['photo']['type'] == 'image/gif'
  ) {
    if(move_uploaded_file ($_FILES['photo']['tmp_name'],$path)){

      $type = explode('/', $_FILES['photo']['type'])[1];
      changeImage(240, 190, $path, $path_2, $type);
      
      echo $_FILES['photo']['name']." успешно загружен!";}



    } else {echo 'Ошибка загрузки файла!';}
  } else {
    echo "Не правильный тип файла!";
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>YASNA</title>
  <link rel="stylesheet" type="text/css" href="../style.css"/>
<body>
<br>
<a href="../index.php">Вернуться в галерею</a>
</body>