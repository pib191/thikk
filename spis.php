<?php session_start();ini_set("display_errors", 0);?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Cover Temp</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.css" rel="stylesheet">
        <link href="cover.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header style="background-color: #5a5f60;padding: 3%;" class="masthead mb-auto" >
    <div class="inner">
      <h5 class="masthead-brand">Детский сад</h5>
       <?php require_once('auth_on.php');?><nav class="nav nav-masthead justify-content-center">
       
        <a class="nav-link" href="index.php">Главная</a>
        <a class="nav-link active" hclass="nav-link" href="spis.php">Cписок групп</a>
        <a class="nav-link" href="journal.php">Cписок родителей</a>
         
      </nav> <?php require_once('auth_out.php');?>
    </div>
  </header>

   <main style="background-color: #62978d;" role="main" class="inner cover">
   <table border="1" width="100%" cellpadding="5">
   <tr style="background-color: red;">
    <th>Группа</th>
    <th>Фамилия</th>
   </tr>
   <tr style="background-color: red;">
    <td>1</td>
    <td>Апельсинов</td>
  </tr>
   <tr style="background-color: red;">
    <td></td>
    <td>Абрикосов</td>
  </tr>
   <tr style="background-color: red;">
    <td></td>
    <td>Иванова</td>
  </tr style="background-color: red;">
    <tr style="background-color: red;">
    <td></td>
    <td>Мандаринкин</td>
  </tr >
     <tr style="background-color: red;">
    <td>2</td>
    <td>Картофелев</td>
  </tr>
  <tr style="background-color: red;">
    <td></td>
    <td>Баклажанов</td>
  </tr>
  <tr style="background-color: red;">
    <td></td>
    <td>Доброва</td>
  </tr>
   <tr style="background-color: red;">
    <td>3</td>
    <td>Киселева</td>
  </tr>
   <tr style="background-color: red;">
    <td></td>
    <td>Виноградова</td>
  </tr>
   <tr style="background-color: red;">
    <td></td>
    <td>Донцов</td>
  </tr>
  <tr style="background-color: red;">
    <td></td>
    <td>Горячев</td>
  </tr>
</table>
<button onclick="document.location='journal_pos.php'">Журнал посещений</button>
  </main>
<?php require_once('footer.php');?>
</div>
</body>
</html>
