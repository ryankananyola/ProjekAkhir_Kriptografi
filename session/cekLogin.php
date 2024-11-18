<?php
session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Ambil data berdasarkan username
$query = mysqli_query($connection, "SELECT * FROM akun WHERE username='$username'") or die(mysqli_error($connection));
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $row = mysqli_fetch_assoc($query);

    // Verifikasi password dengan SHA-256
    if (hash('sha256', $password) == $row['password']) {
        $_SESSION['username'] = $username;

        // Periksa status pengguna
        if ($row['status'] == 1) {
            header("location:../View/homepage_admin.php");
        } else if ($row['status'] == 0) {
            header("location:../View/homepage_user.php");
        } else {
            echo "
                <script>
                    alert('Status tidak valid.');
                    document.location.href = 'LoginPage.php';
                </script>
            ";
        }
    } else {
        echo "
            <script>
                alert('Login gagal! Username atau password Anda salah.');
                document.location.href = 'LoginPage.php';
            </script>
        ";
    }
} else {
    echo "
        <script>
            alert('Login gagal! Username atau password Anda salah.');
            document.location.href = 'LoginPage.php';
        </script>
    ";
}
?>
