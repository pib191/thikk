
<?php
require_once('bd.php'); 

  $id=$_GET['id'];

  
  $result_set = $mysqli->query('DELETE FROM `child` WHERE id="'.$id.'"');
  $result_set1 = $mysqli->query('DELETE FROM `parent` WHERE id_child="'.$id.'"');

 
           ?><script>document.location.href="child.php"</script><?php

  ?>
  </body>