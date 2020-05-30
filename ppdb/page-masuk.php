<?php 

require_once("config.php");

if(isset($_POST['formulir'])){
    $nisn_siswa filter_input(INPUT_POST, 'nisn_siswa', FILTER_SANITIZE_STRING);
    $nama_siswa = filter_input(INPUT_POST, 'nama_siswa', FILTER_SANITIZE_STRING);
    $tmpt_siswa = filter_input(INPUT_POST, 'tmpt_siswa', FILTER_SANITIZE_STRING);
    $tgl_siswa = filter_input(INPUT_POST, 'tgl_siswa', FILTER_SANITIZE_STRING);
    $jk= filter_input(INPUT_POST, 'jk', FILTER_SANITIZE_STRING);
    $agama = filter_input(INPUT_POST, 'agama', FILTER_SANITIZE_STRING);
    $alamat= filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $no_hp= filter_input(INPUT_POST, 'no_hp', FILTER_SANITIZE_STRING);
    $nama_ayah filter_input(INPUT_POST, 'nama_ayah', FILTER_SANITIZE_STRING);
    $agama_ayah filter_input(INPUT_POST, 'agama_ayah', FILTER_SANITIZE_STRING);
    $no_ayah filter_input(INPUT_POST, 'no_ayah', FILTER_SANITIZE_STRING);
    $alamat_ayah filter_input(INPUT_POST, 'alamat_ayah', FILTER_SANITIZE_STRING);
    $pekerjaan_ayah filter_input(INPUT_POST, 'pekerjaan_ayah', FILTER_SANITIZE_STRING);
    $penghasilan_ayah filter_input(INPUT_POST, 'penghasilan_ayah', FILTER_SANITIZE_STRING);
    $nama_ibu filter_input(INPUT_POST, 'nama_ibu', FILTER_SANITIZE_STRING);
    $agama_ibu filter_input(INPUT_POST, 'agama_ibu', FILTER_SANITIZE_STRING);
    $no_ibu filter_input(INPUT_POST, 'no_ibu', FILTER_SANITIZE_STRING);
    $alamat_ibu filter_input(INPUT_POST, 'alamat_ibu', FILTER_SANITIZE_STRING);
    $pekerjaan_ibu filter_input(INPUT_POST, 'pekerjaan_ibu', FILTER_SANITIZE_STRING);
    $penghasilan_ibu filter_input(INPUT_POST, 'penghasilan_ibu', FILTER_SANITIZE_STRING);
    $asal_sekolah filter_input(INPUT_POST, 'asal_sekolah', FILTER_SANITIZE_STRING);
    $alamat_sekolah filter_input(INPUT_POST, 'alamat_sekolah', FILTER_SANITIZE_STRING);
    $akre_sekolah filter_input(INPUT_POST, 'akre_sekolah', FILTER_SANITIZE_STRING);


    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php"); //CEK LAGI
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Masuk</h4>
        <p>Belum punya akun? <a href="form-daftar.php">Daftar di sini</a></p>

        <form action="formulir.php" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

        </form>
            
        </div>

        <div class="col-md-6">
            <!-- isi dengan sesuatu di sini -->
        </div>

    </div>
</div>
    
</body>
</html>