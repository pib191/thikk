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
    	<input type="hidden" name="t" value="<?php print_r($_GET['id']);?>">
        Имя ребенка - <input class="formtext" type="text" name="name" onkeyup="setCapitalLetter(this.value, this)" style="margin-bottom: 15px;" required />
        <br>
        Дата рождения ребенка - <input class="formtext" type="date" name="age" required style="margin-bottom: 15px; width: 20%;"/>
        <br>   
        Вес ребенка - <input class="formtext" type="number" name="weight" required style="margin-bottom: 15px; width: 20%;"/>
        <br>
        Рост ребенка - <input class="formtext" type="number" required name="height" style="margin-bottom: 15px;width: 20%;"/>
        <br>
         Количество дней проведенных в саду - <input class="formtext" type="number" required name="days" style="margin-bottom: 15px; width: 20%;"/>
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
    $age = ($_POST['age']);
    $weight = (int)($_POST['weight']);
    $height = (int)($_POST['height']);
    $days = (int)($_POST['days']);
    $today = date("Y-m-d");
    //Проверяем что бы дата рождения была в прошлом
    $result = (strtotime($age)<strtotime($today));

 if ($result==1){
    $result_set = $mysqli->query('UPDATE `child` SET name="'.$name.'",age="'.$age.'",weight="'.$weight.'",height="'.$height.'",days="'.$days.'" WHERE id="'.$new_id.'"');
     
    ?><script>document.location.href="child.php"</script><?php
}
 else {
    ?><script>alert('Введенная дата в будущем');</script><script>document.location.href="child.php"</script><?php
}
}?>
 <script type="text/javascript">
//js-валидацию
//Делаем заглавной 1 букву в имени - те если пользователь введет имя с маленькой буквы -
//будет исправлено на большую
 function setCapitalLetter(str, elem) {
    if(str == "") return false; 
    str = str[0].toUpperCase() + str.substring(1,str.length);
    elem.value = str;
}
 //Проверяем что бы значения веса, роста и кол-ва дней в саду были больше 0
function control(){
    var weight;
    var height;
    var wins;
    weight =  document.forms["note-form"]["weight"].value;
    height =  document.forms["note-form"]["height"].value;
    days =  document.forms["note-form"]["days"].value;
        if(weight<0){
            alert("Введите вес больше 0");
            return (false);}
        if(days<0){
            alert("Количество день проведенных в саду должно быть больше 0");
            return (false);}
        if(height<0){
            alert("Рост должен быть больше 0");
            return (false);}
}
</script>
</body>
</html>
