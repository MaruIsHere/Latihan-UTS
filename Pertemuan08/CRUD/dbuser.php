<?php
session_start();

if(!isset($_SESSION["login"])){
    header("location: login.php");
}

include("konfigurasi.php");

$cnn = mysqli_connect(DBHOST,DBUSER,DBPASS) or die("Koneksi database gagal");


$jdpage = "Daftar";
$pg = "Usert - List.php";

if(isset($_POST["act"])){
$act = $_POST["act"];
switch($act){
    case "store":
        $pass1 = $_POST["txPASS1"];
        $pass2 = $_POST["txPASS2"];
        if($pass1 == $pass2){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $username = $_POST["txUSER"];
            $iduser = md5($email);

            $sql = "ISERT INTO tbuser (nama,email,username,passkey,iduser) VALUES('$nama','$email','$username','$iduser');";
            $hasil = mysqli_query($cnn,$sql);
            
        }
        break;
    case "update":
        $pass1 = $_POST["txPASS1"];
        $pass2 = $_POST["txPASS2"];
        if($pass1 == $pass2){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $username = $_POST["txUSER"];
            $iduser = md5($email);

            $sql = "UPDATE tbuser SET nama ='$nama',email='$email',username='$username',passkey='$pass1' WHERE iduser = '$iduser';";
            $hasil = mysqli_query($cnn,$sql);
        }
        break;
    case "destroy":
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $username = $_POST["txUSER"];
            $iduser = md5($email);

            $sql = "DELETE FROM tbuser WHERE iduser = '$iduser';";
            $hasil = mysqli_query($cnn,$sql);
        break;
}
    echo "<script>window.location.href='dtuser.php';</script>";
}

if(isset($_GET["aksi"])){
    $aksi = $_GET["aksi"];
    switch($aksi){
        case 'new':
            $jdpage = "Data";
            $pg = "User - New.php";
            break;
        case 'edit':
            $jdpage = "Ubah";
            $pg = "User - Edit.php";
            break;
        case  'del':
            $jdpage = "Hapus";
            $pg = "User - Delete.php";
            break;
    }
}


    $konten="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<body>
    <ul style= "text-align : center;">
        <li>Data Mahasiswa</li>
        <li>Data Mata Kuliah</li>
        <li>Data Dosen</li>
        <li><a href="dtuser"></a></li>
        <li></li>
    </ul>

    <div>
        <?php
        include($pg);


        ?>
    </div>
</body>
</html>