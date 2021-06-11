<?php

require_once dirname(__FILE__) ."/BaseDao.class.php";

class CreditCardsDao extends BaseDao{

  public function __construct(){
    parent::__construct("credit_cards");
  }

  public function get_all_credit_cards(){
    return $this->query("SELECT * FROM credit_cards", []);
  }
  }

 ?>
