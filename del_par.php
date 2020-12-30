
<?php
require_once('bd.php'); 
  $id_par=$_GET['id_par'];
  $result_set = $mysqli->query('DELETE FROM `parent` WHERE id_par="'.$id_par.'"');


           ?><script>document.location.href="child.php"</script><?php

  ?>
  </body>