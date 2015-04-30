<?php

class MyDB extends SQLite3
{
  function __construct()
  { 
    $this->open( dirname( __FILE__ ) . '/../db/mysqlitedb.db');
  }
}

$db = new MyDB();
