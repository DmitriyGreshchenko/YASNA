<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>YASNA</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>

  <!-- Link fancybox -->
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <script type="text/javascript" src="scripts/jquery.js"></script> 
  <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script> 
  <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script> 
  <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" /> 
  <!-- Script fancybox -->
  <script type="text/javascript">
    $(document).ready(function(){
      $("a.photo").fancybox({
        transitionIn: 'elastic',
        transitionOut: 'elastic',
        speedIn: 500,
        speedOut: 500     
      });
    });
  </script> 

</head>
<body>
  <header>
    <h1>ГАЛЕРЕЯ ФОТО</h1>
  </header>
  
  <div class="add">
    <form action="scripts/changeImg.php" enctype="multipart/form-data" method="post">
      <p>Выберите изображение для загрузки</p>
      <input type="file" name="photo" accept="image/*"><br>
      <input type="submit" name="send" value="Загрузить">
    </form>
  </div>


  <div class="gallery">
    <?php 

    $s_gallery=array_slice(scandir("img/small"), 2);
    $b_gallery=array_slice(scandir("img/big"), 2);

    for($i=0; $i<count($s_gallery); $i++):?>

      <a rel="gallery" class="photo" href="<?="img/big"."/".$b_gallery[$i]?>"><img src="<?="img/small"."/".$s_gallery[$i]?>"/></a>

      <?php
      {if ($i%3==2) {
       echo "<br>";
     }
   }
 endfor; 
 ?> 
</div> 


<footer>
</footer>