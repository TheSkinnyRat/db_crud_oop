<?php include('database/config.php');
$db = new database(); ?>
<?php if(isset($_POST['edit'])){
  $id = $_POST['id'];
  $q = mysql_query("SELECT * FROM user where id='$id' ");
  $d = mysql_fetch_assoc($q);
} ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD OOP</title>
  </head>
  <body>
    <h2>FORM DATA</h2>
    <hr>
    Menu: <a href="index.php">Tampil Data</a>
    <br><br>
    <form class="" action="database/process.php" method="post">
      <pre>
  ID    : <input type="text" value="<?php if(isset($_POST['edit'])) echo $d['id']; else echo "AUTO"; ?>" disabled><br>
  Nama  : <input type="text" name="nama" value="<?php if(isset($_POST['edit'])) echo $d['nama']; ?>"><br>
  Alamat: <input type="text" name="alamat" value="<?php if(isset($_POST['edit'])) echo $d['alamat']; ?>"><br>
  Usia  : <input type="number" name="usia" value="<?php if(isset($_POST['edit'])) echo $d['usia']; ?>"><br>
  <input type="hidden" name="id" value="<?php if(isset($_POST['edit'])) echo $d['id']; else echo "0"; ?>">
  <input type="hidden" name="table" value="user">
  <input type="submit" name="<?php if(isset($_POST['edit'])) echo "edit"; else echo "tambah"; ?>" value="<?php if(isset($_POST['edit'])) echo "EDIT"; else echo "TAMBAH"; ?>">
      </pre>
    </form>
  </body>
</html>
