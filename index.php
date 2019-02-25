<?php
include('database/config.php');
$db = new database(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD OOP</title>
  </head>
  <body>
    <h2>TAMPIL DATA</h2>
    <hr>
    Menu: <a href="form.php">Tambah Data</a>
    <br><br>
    <table border="1">
      <tr>
        <th>ID USER</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>USIA</th>
        <th colspan="2">ACTION</th>
      </tr>
      <?php foreach ($db->tampil('user') as $d) { ?>
        <tr>
          <td><?php echo $d['id'] ?></td>
          <td><?php echo $d['nama'] ?></td>
          <td><?php echo $d['alamat'] ?></td>
          <td><?php echo $d['usia'] ?></td>
          <td>
            <form class="" action="form.php" method="post">
              <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
              <input type="hidden" name="table" value="user">
              <input type="submit" name="edit" value="EDIT">
            </form>
          </td>
          <td>
            <form class="" action="database/process.php" method="post">
              <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
              <input type="hidden" name="table" value="user">
              <input type="submit" name="hapus" value="HAPUS">
            </form>
          </td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>
