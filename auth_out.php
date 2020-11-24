<?php 
if ($_SESSION["name"]==true){
?> 
<form method="post" action="?auth_out"> 
<button type="submit">Выйти</button>
</form>
<?php }?>
<?php   if (isset($_GET['auth_out'])) {

     $_SESSION["name"]=false;
          header('Location: http://localhost/index.php');
  }
    ?>  

