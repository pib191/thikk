<?php session_start();ini_set("display_errors", 0);?>
<!doctype html>
<html lang="en">
<?php require_once('head.php');?>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header style="background-color: #5a5f60;padding: 3%;" class="masthead mb-auto" >
    <div class="inner">
      <h3 class="masthead-brand">Детский сад</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="index.php">Главная</a>
        <a class="nav-link" hclass="nav-link" href="spis.php">Cписок групп</a>
        <a class="nav-link" href="journal.php">Cписок родителей</a>
      </nav>
    </div>
  </header>
<main style="background-color: #62978d;" role="main" class="inner cover">
  <?php if ($_SESSION["name"]==true)
   {
    ?><p>Приветсвуем,<?php echo (" ".$_SESSION["name"])?>! Здесь вы можете просматривать данные о закупках садика.
    </p>
<table border="1">
  <?php require_once('bd.php');
  $result_set = $mysqli->query('SELECT * FROM `zakypki`');
?>     
<tr>
   <td>Товар</td>
   <td>Цена</td>
   </tr>
    <?php
    while($row = mysqli_fetch_array($result_set)){ 
      ?>
   <tr><td><?php print_r($row['tovar']);?></td>
   <td><?php print_r($row['cost']);?></td>
  <?php }?>
  </table>
  <?php }
  require_once('auth_out.php');
    ?>  
 
  </main>
<?php require_once('footer.php');?>
</div>
</body>

