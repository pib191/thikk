<?php session_start();ini_set("display_errors", 0);?>
<!doctype html>
<html lang="en">
  <?php require_once('head.php');?>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header style="background-color: #5a5f60;padding: 3%;" class="masthead mb-auto" >

    <div class="inner">
      <h5 class="masthead-brand">Детский сад</h5>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="index.php">Главная</a>
        <a class="nav-link" hclass="nav-link" href="spis.php">Cписок групп</a>
        <a class="nav-link" href="journal.php">Cписок родителей</a>
      </nav>
    </div>
  </header>
  <header class="masthead mb-auto">
   
  </header>
  <main style="background-color: #62978d;" role="main" class="inner cover">
 <form method="post" action="?auth" class="may">

  <div>Ваша логин: <input type="text" name="login" style="width: 170%;" /></div>
  <div>Ваш пароль: <input type="password" name="pass" style="width: 170%;"/></div>
  <div><button type="submit" name="loginbtn">Вход</button></div>
  </form>
<?php
$array = array(
    "paolo" => "off",
    "mateo" => "ride",
    "cersei" => "true",
    "tove" => "wine",
);
$login_true = 0;
$pass_true = 0;
if (isset($_GET['auth'])) {

      $new_login = $_POST['login'];
      $new_pas = $_POST['pass'];

      if (isset($array[$new_login])){
        $login_true = 1;
      if ($array[$new_login]==$new_pas){
    
          $_SESSION["name"]=$new_login;
          header('Location: http://localhost/cabin.php');

      }
       if ($pass_true==0) {echo "Пароль неверный!";}
      }
          if ($login_true==0) {echo "Логин неверный!";}
        }?>
  </main>
  <?php require_once('footer.php');?>
</div>
</body>

