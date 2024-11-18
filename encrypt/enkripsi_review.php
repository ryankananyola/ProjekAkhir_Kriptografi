<?php 
include "../session/config.php";

$comment = $_POST['comment'];
$file = $_FILES['file'];

// Validasi unggahan file
if ($file['error'] === UPLOAD_ERR_OK) {
    // Baca konten file
    $filecontent = file_get_contents($file['tmp_name']);
    $base64 = base64_encode($filecontent);

    // Enkripsi ROT13 pada komentar
    function Rot13($comment) {
        for ($i = 0; $i < strlen($comment); $i++) {
            $c = ord($comment[$i]);

            if ($c >= ord('n') && $c <= ord('z') || $c >= ord('N') && $c <= ord('Z')) {
                $c -= 13;
            } elseif ($c >= ord('a') && $c <= ord('m') || $c >= ord('A') && $c <= ord('M')) {
                $c += 13;
            }
            $comment[$i] = chr($c);
        }
        return $comment;
    }
    $rot13 = Rot13($comment);

    // Enkripsi komentar dengan AES-256-CBC
    $cipher = "AES-256-CBC";
    $secret = "12345678901234567890123456789012";
    $option = 0;
    $iv = str_repeat("0", openssl_cipher_iv_length($cipher));

    $ciphertext = openssl_encrypt($rot13, $cipher, $secret, $option, $iv);

    // Masukkan data ke database
    $query = mysqli_query($connection, "INSERT INTO review (review, image) VALUES ('$ciphertext', '$base64')") or die(mysqli_error($connection));

    if ($query) {
        echo "
            <script>
                alert('Review telah terkirim. Terima kasih atas kepedulian Anda.');
                document.location.href = '../View/homepage_user.php';
            </script>
        ";
    } else {
        echo "Proses gagal.";
    }
} else {
    echo "Terjadi kesalahan dalam unggahan file.";
}
?>
