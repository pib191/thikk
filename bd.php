
<?php     $mysqli = @new mysqli('localhost', 'root', '', 'child');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
$mysqli->set_charset('utf8');
    ?>  

