<?php

require_once dirname(__FILE__) ."/BaseDao.class.php";

class MoviesDao extends BaseDao{

  public function __construct(){
    parent::__construct("movies");
  }

  public function get_all_movies(){
    return $this->query("SELECT * FROM movies", []);
  }
  }
 ?>
