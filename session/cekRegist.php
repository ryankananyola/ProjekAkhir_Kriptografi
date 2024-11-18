<?php
    session_start();
    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password dengan SHA-256
    $passwordHash = hash('sha256', $password);

    // Masukkan data ke database
    $query = mysqli_query($connection, "INSERT INTO akun VALUES ('', '$username', '$passwordHash', '')") or die(mysqli_error($connection));

    if($query){
        echo "
            <script>
                alert('Pendaftaran berhasil, silahkan login');
                document.location.href = '../LoginPage.php';
            </script>
        ";
    } else {
        echo "Proses gagal";
    }
?>