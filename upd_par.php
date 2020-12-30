<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" text="text/css">
	<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" text="text/css">
    <title>Список детей_изменение</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <form id="note-form" onsubmit="return control()" method="post" name="note-form" action="?upd">
    	<input type="hidden" name="t" value="<?php print_r($_GET['id_par']);?>">
        Имя человека - <input class="formtext" type="text" name="name" onkeyup="setCapitalLetter(this.value, this)" style="margin-bottom: 15px;" required />
        <br>
     
        <button type="submit">Изменить</button>
    </form>

<?php
//Если пользователь нажал на кнопку "Добавть" на форме
if (isset($_GET['upd'])) 
{ 
	require_once('bd.php');
	$new_id = $_POST['t']; 
    $name = htmlspecialchars($_POST['name']);

    //Проверяем что бы дата рождения была в прошлом
   
    $result_set = $mysqli->query('UPDATE `parent` SET name="'.$name.'" WHERE id_par="'.$new_id.'"');
     
    ?><script>document.location.href="child.php"</script><?php


}?>
</body>
</html>
