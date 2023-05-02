<h3> Hapus data user </h3>
<?php
    $iduser = $_GET["p1"];
    $sql ="SELECT tu.nama,tu.email,tu.username,tu.iduser FROM tbuser tu WHERE tu.iduser='".$iduser."';";
    $hasil = mysqli_query($cnn,$sql);
    if(mysqli_num_rows($hasil)>0){
        $h = mysqli_fetch_assoc($hasil);
    
?>
<form method = "Post" action="dtuser.php">
    <input type="hidden" name="act" value="destroy">
    <input type="hidden" name="iduser" value="<?=$h["iduser"];?>">
<div>
    Nama Lengkap
    <input type="text" nama="txNAMA" value="<?=$h["nama"];?>">
</div>

<div>
    Email
    <input type="email" nama="txEMAIL" value="<?=$h["email"];?>">
</div>

<div>
    Username
    <input type="text" nama="txUSER" value="<?=$h["username"];?>">
</div>

<div>
 <button type="submit"> Ubah data </button>
 <a href="dtuser.php">Batal</a>
</div>

</form>
<?php

    }else{
    echo"<script>window.loactiom.dbuser.php;</script>";
}

?>