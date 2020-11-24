<?php session_start();ini_set("display_errors", 0);?>
<html lang="en">
 <?php require_once('head.php');?>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<header style="background-color: #5a5f60;padding: 3%;" class="masthead mb-auto" >

    <div class="inner">
      <h5 class="masthead-brand">Детский сад</h5>
       <?php require_once('auth_on.php');?>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="index.php">Главная</a>
        <a class="nav-link" hclass="nav-link" href="spis.php">Cписок групп</a>
        <a class="nav-link active" href="journal.php">Cписок родителей</a>
      </nav>
      <?php require_once('auth_out.php');?>
       </div>
  </header>
<main style="background-color: #62978d;" role="main" class="inner cover">
   <table border="1" width="100%" cellpadding="5">
   <tr style="background-color: red;">
    <th>ФИО родителя</th>
   </tr>
   <tr style="background-color: red;">
    <td>Горячев Олег Игоревич</td>
   
  </tr>
   <tr style="background-color: red;">
    <td>Доброва Галина Семеновна</td>
   
  </tr>
  <tr style="background-color: red;">
    <td>Донцова Ирина Николаевна</td>
   
  </tr>
  <tr style="background-color: red;">
    <td>Апельсинова Дарья Константиновна</td>
   
  </tr>
  <tr style="background-color: red;">
    <td>Картофелев Игорь Денисович</td>
   
  </tr>
  <tr style="background-color: red;">
    <td>Мандаринкин Антон Иванович</td>
   
  </tr>
  <tr style="background-color: red;">
    <td>Виноградова Ксения Владимировна</td>
   
  </tr>
  <tr style="background-color: red;">
    <td>Баклажанов Григорий Иванович</td>
   
  </tr>
</table>
  </main>


    <?php require_once('footer.php');?>
</div>
</body>
</html>
