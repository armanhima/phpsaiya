<?php
//memanggil file koneksi
include('confiq/koneksi.php');
 
//ambil data dari database
$query="SELECT * FROM admin ORDER BY id_admin ASC";
 
$data=mysqli_query($conn,$query);
?>
 
<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html>
<head>
    <title>Data Pengurus</title>
</head>
<body>
 
<h1>Data Pengurus</h1>
<table border="1" class="container">
    <tr class="container-center">
        <th>ID</th>
        <th>username</th>
        <th>passoword</th>
    </tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?php echo $row['id_admin']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>

        <td>
            <a href="edit_admin.php?id_admin=<?php echo $row['id_admin']; ?>" class="btn btn-warning" >Edit</a> | 
            <a href="hapus_admin.php?id_admin=<?php echo $row['id_admin']; ?>" onclick="return confirm('Yakin nih?')" class="btn btn-danger">Delete</a>
 
        </td>
    </tr>
 
<?php
 }
?>
</table>



<hr>
 
<h1>Input Data</h1>
 
<form method="post" action="simpan_admin.php">
    <p>ID <input type="text" name="id_admin" required="required"> </p>
    <p>username <input type="text" name="username"> </p>
    <p>password <input type="password"  name="password"></textarea> </p>

    <p>
        <button type="submit">Simpan</button>
        <button type="reset">Batal</button>
    </p>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>