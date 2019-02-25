<?php include('config.php');
$db = new database();

if (isset($_POST['tambah'])) {
  $table = $_POST['table'];

  $f = mysql_query("DESCRIBE $table");
  while ($df = mysql_fetch_assoc($f)) {
    $value[] = "'" .$_POST[$df['Field']]. "'";
  }
  $value = implode($value, ',');

  $db->tambah($table,$value);
  header("location: ../index.php");

}else if(isset($_POST['edit'])){
  $table = $_POST['table'];
  $id = $_POST['id'];
  $where = "id = '$id'";

  $f = mysql_query("DESCRIBE $table");
  while ($df = mysql_fetch_assoc($f)) {
    $value[] = $df['Field']. "= '".$_POST[$df['Field']]."'";
  }
  $value = implode($value, ',');

  $db->edit($table,$value,$where);

  header("location: ../index.php");

}else if(isset($_POST['hapus'])){
  $table = $_POST['table'];
  $id = $_POST['id'];
  $where = "id = '$id'";
  $db->hapus($table,$where);

  header("location: ../index.php");
}
 ?>
