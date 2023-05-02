<h3> Daftar User </h3>


<table>
    <tr>
        <th>#</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>Username</th>
        <th><a href="dtuser.php?aksi=new">Data Baru</a></th>
    </tr>

    <tr>
        <th>$cx</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>Username</th>
        <th><a href="dtuser.php?aksi=edit">Edit</a> <a href="dtuser.php?aksi=del">Hapus</a></th>
    </tr>


<?php  

$sql = "SELECT tu.nama,tu.email,tu.username,tu.iduser, FROM tbuser tu ORDER BY tu.nama;";
$hasil = mysqli_query($cnn,$sql);
$cx = 1;
while($h = mysqli_fetch_assoc($hasil)){
    echo"
    <tr>
    <th>$cx</th>
    <th>".$h["nama"]."</th>
    <th>".$h["email"]."</th>
    <th>".$h["usernmae"]."</th>
    <th><a href=\"dtuser.php?aksi=edit\">Edit</a> <a href=\"dtuser.php?aksi=del\">Hapus</a></th>
    </tr>";
    $cx++;
}
?>
</table> 