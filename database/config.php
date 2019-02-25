<?php
class database{
  var $host = "localhost";
  var $uname = 'root';
  var $pass = '';
  var $db = 'db_crud_oop';

  function __construct(){
    mysql_connect($this->host, $this->uname, $this->pass);
    mysql_select_db($this->db);
  }

  function tampil($table){
    $q = mysql_query("SELECT * FROM $table");
    while ($data = mysql_fetch_assoc($q)) {
      $result[] = $data;
    }
    return $result;
  }

  function tambah($table,$value){
    $q = mysql_query("INSERT INTO $table VALUES ($value)");
  }

  function hapus($table,$where){
    $q = mysql_query("DELETE FROM $table WHERE $where");
  }

  function edit($table,$value,$where){
    $q = mysql_query("UPDATE $table SET $value WHERE $where");
  }

}
 ?>
