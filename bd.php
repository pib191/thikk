
<?php    $mysqli = @new mysqli('localhost', 'root', '', 'sad');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
    ?>  

