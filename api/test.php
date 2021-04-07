<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting (E_ALL);


require_once dirname(__FILE__). "/dao/UserDao.class.php";

$user_dao = new UserDao();

//$user = $user_dao->get_user_by_id("1");

$user1 = [
  "name" => "Amar",
  "surname" => "Bektas",
  "password" => "123456",

];



$user = $user_dao->update_user(8, $user1);

//$user_dao->get_user_by_email("muhamed.begic01@gmail.com");

print_r($user);



 ?>
