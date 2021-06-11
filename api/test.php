<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting (E_ALL);


require_once dirname(__FILE__). "/dao/UserDao.class.php";
require_once dirname(__FILE__). "/dao/AccountDao.class.php";
require_once dirname(__FILE__). "/dao/CampaignDao.class.php";

$dao = new CampaignDao();

$campaign = [
  "name" => "Midnight Showing of The Hunger Games",
  "account_id" => 1,
  "start_date" => date("Y-m-d H:i:s")
];


$dao -> update(1, [

  "end_date" => "2021-06-10 00:00:00",
  "status" => "EXPIRED"
]);

$campaign = $dao ->get_all_campaigns();    //add($campaign);



print_r($campaign);



 ?>
