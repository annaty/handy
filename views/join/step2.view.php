<?php require("..\..\myclass\User.php");
echo $_POST['name'],'<br>';

$user1 = new User($_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['password']);

$user2  = new User("moi",'toi', ' lui','code');

var_dump($user1->_name);

var_dump($user2->_name);