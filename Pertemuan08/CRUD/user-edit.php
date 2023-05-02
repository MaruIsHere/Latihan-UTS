<h3> Menambahkan user baru </h3>
<?php
    $sql ="SELECT tu.nama,tu.email,tu.username,tu.iduser FROM tbuser tu WHERE tu.iduser='';";
?>
<form method = "Post" action="dtuser.php">
    <input type="hidden" name="act" value="update">
<div>
    Nama Lengkap
    <input type="text" nama="txNAMA">
</div>

<div>
    Email
    <input type="email" nama="txEMAIL">
</div>

<div>
    Username
    <input type="text" nama="txUSER">
</div>

<div>
    Password
    <input type="password" nama="txPASS1">
</div>

<div>
    Vertifikasi Password
    <input type="password" nama="txPASS2">
</div>

<div>
 <button type="submit"> Ubah data </button>
 <a href="dtuser.php">Batal</a>
</div>

</form>