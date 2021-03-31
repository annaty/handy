<?php 
echo $_POST['name'],'<br>';

$pdo =new PDO('mysql:dbname=handy;host=localhost', 'root', '');


$pdo->exec('INSERT INTO utilisateur SET name="'.$_POST['name'].'", last_name="'.$_POST['lastname'].'", email="'.$_POST['email'].'" ');


