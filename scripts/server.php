<?php  
$path = "../img/big/".$_FILES['photo']['name'];

if(move_uploaded_file ($_FILES['photo']['tmp_name'],$path)){
	echo $_FILES['photo']['name']." успешно загружен!";
}
else{
	echo "Ошибка загрузки!";
}
// print_r($_FILES);
?>