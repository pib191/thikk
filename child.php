<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" text="text/css">
	<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet" text="text/css">
    <title>Список детей</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="news">
    <?php
    require_once('bd.php'); 
        
    $result_set = $mysqli->query("SELECT * FROM `child` ORDER BY id DESC;"); 
    while($row = mysqli_fetch_array($result_set))
        {
      $result_set1 = $mysqli->query('SELECT * FROM `parent` WHERE id_child="'.$row['id'].'"'); 
   
            ?>

		<div class="news-card">
            <h3><strong> Имя ребенка - <?php print_r($row['name']);  ?></strong></h3>
			<p>
                Дата рождения ребенка - <?php print_r($row['age']);  ?>
            </p>
            <p>
                Вес ребенка - <?php print_r($row['weight']);  ?>
            </p>
            <p>
                Рост ребенка - <?php print_r($row['height']);  ?>
            </p>
            <p>
                Количество дней проведенных в саду - <?php print_r($row['days']);  ?>
            </p>
            <p><!-- По данной ссылке происходит удаление, мы передаем данные GET-ом на страницу del.php --> <a style="text-decoration: none;"href="del.php?id=<?php print_r($row['id']);?>" id="card-link-click">Удалить</a>
            <br> <a style="text-decoration: none;"href="upd.php?id=<?php print_r($row['id']);?>" id="card-link-click">Изменить</a>
            </p>
		<h2> Кто может забирать ребенка из сада: </h2>
       <?php
             while($row1 = mysqli_fetch_array($result_set1))
        { ?>
             <div style="    background-color: #ffaf35;
"> <h3><strong><?php print_r($row1['name']);  ?></strong></h3>
<p> <a style="text-decoration: none;" href="del_par.php?id_par=<?php print_r($row1['id_par']);?>" id="card-link-click">Удалить</a>
             <a style="text-decoration: none;"href="upd_par.php?id_par=<?php print_r($row1['id_par']);?>" id="card-link-click">Изменить</a>
            </p>
        </div><?php }?></div>
		<?php }?>
	</div>
    <form id="note-form" onsubmit="return control()" method="post" name="note-form" action="?add">
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
        <button type="submit">Добавить</button>
    </form>
    <br>
  <form id="note-form" onsubmit="return control()" method="post" name="note-form" action="?add_par">
        Имя родителя - <input class="formtext" type="text" name="name" onkeyup="setCapitalLetter(this.value, this)" style="margin-bottom: 15px;" required />
        <br>
       Ребенок -
<p><select size="3" multiple name="child">
    <option disabled>Выберите ребенка</option>
   
  
      <?php $result_set = $mysqli->query("SELECT * FROM `child` ORDER BY id DESC;"); 
    while($row = mysqli_fetch_array($result_set))
        { ?> 
        <option value="<?php print_r($row['id']);  ?>"><strong> <?php print_r($row['name']);  ?></strong></option>
        <?php } ?>
    </select>
        <br>
        <br>
        <button type="submit">Добавить</button>
    </form>
<?php
//Если пользователь нажал на кнопку "Добавть" на форме
if (isset($_GET['add_par'])) 
{ 
    $name = htmlspecialchars($_POST['name']);
    $child = (int)($_POST['child']);
    //Проверяем что бы дата рождения была в прошлом


    $result_set = $mysqli->query("INSERT INTO `parent` VALUES (NULL,'$name','$child')"); 
    ?><script>document.location.href="child.php"</script><?php

}
if (isset($_GET['add'])) 
{ 
    $name = htmlspecialchars($_POST['name']);
    $age = ($_POST['age']);
    $weight = (int)($_POST['weight']);
    $height = (int)($_POST['height']);
    $days = (int)($_POST['days']);
    $today = date("Y-m-d");
    //Проверяем что бы дата рождения была в прошлом
    $result = (strtotime($age)<strtotime($today));

 if ($result==1){
    $result_set = $mysqli->query("INSERT INTO `child` VALUES (NULL,'$name','$age','$weight','$height','$days')"); 
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