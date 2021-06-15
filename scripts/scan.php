<?php 

$gallery = scandir("../img/small");
//print_r($gallery);

for($i=2; $i<count($gallery); $i++):?>

<img src="../img/small/<?= $gallery[$i]?>"><hr>

<?php 
endfor; 
?>