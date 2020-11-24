<?php session_start();ini_set("display_errors", 0);?>
<!doctype html>
<html lang="en">
<?php require_once('head.php');?>
  <body class="text-center">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<header style="background-color: #5a5f60;padding: 3%;" class="masthead mb-auto" >
    <div class="inner">
      <h5 class="masthead-brand">Детский сад</h5>
       <?php require_once('auth_on.php'); ?>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="index.php">Главная</a>
        <a class="nav-link" href="spis.php">Cписок групп</a>
        <a class="nav-link" href="journal.php">Cписок родителей</a>
      </nav>
      <?php require_once('auth_out.php');?>
    </div> 
  </header>  
  <main style="background-color: #62978d;" role="main" class="inner cover">
    <h1 class="cover-heading">Наш детский сад</h1>
    <img class="card-img-bottom" src="3.png"/>
    <p class="lead">Добрый День. Здесь представлена информация о нашем детском садике</p>
<div class="row">
  <div class="col23"><img class="card-img-bottom" src="1.jpg"/></div>
  <div class="col23"><img class="card-img-bottom" src="2.jpg"/></div>
  <div class="col23"><img class="card-img-bottom" src="4.jpg"/></div>
</div>


<?php

function phptpl($fileName, $params) {
    extract($params);
    ob_start();
    require($fileName);
    return ob_get_clean();
}



$text = '
    <h2>Заголовок 1</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.</p>
    <h2>Заголовок 2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.</p>
    <h2>Заголовок 3</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.</p>
    <h2>Заголовок 4</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus cras adipiscing enim eu turpis egestas. In pellentesque massa placerat duis ultricies lacus sed. Dapibus ultrices in iaculis nunc. Pellentesque habitant morbi tristique senectus. Facilisis mauris sit amet massa vitae tortor condimentum lacinia quis. Amet consectetur adipiscing elit pellentesque habitant. Consequat semper viverra nam libero justo laoreet. Faucibus interdum posuere lorem ipsum. Diam sit amet nisl suscipit adipiscing bibendum. Id cursus metus aliquam eleifend mi in. Magna fringilla urna porttitor rhoncus dolor purus.</p>
';
 function foo($text)
{
    $text = stripslashes($text);
    preg_match_all("/<h2.*?>(.*?)<\/h2>/i", $text, $items);

if (!empty($items[1])) {
    ?>
    <div class="texts-list">
        
        <ol>
            <?php
            foreach ($items[1] as $i => $row) {
                $full_text = '<a href="#tag-' . ++$i . '">' . $row . '</a><br>';
            print phptpl('main.php', ['text' => $full_text]); 
            }
            ?>                  
        </ol>
    </div>
    <?php   
}
 
if (!empty($items[0])) {
    foreach ($items[0] as $i => $row) {
        $text = str_replace($row, '<a name="tag-' . ++$i . '"></a>' . $row, $text);
    
    } 
}
print phptpl('main.php', ['url' => $text]); 
}

foo($text);
?>  </main> <?php
 require_once('footer.php');?>
</div>
</body>

