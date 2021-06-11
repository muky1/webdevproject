<?php

require_once dirname(__FILE__) ."/BaseDao.class.php";

class TicketsDao extends BaseDao{

  public function __construct(){
    parent::__construct("tickets");
  }

}

?>
