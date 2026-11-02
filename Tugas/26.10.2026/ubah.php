<?php
if (isset($_GET['id_dosen'])) {
    include 'ubah_dosen.php';
} else {
    include 'ubah_mahasiswa.php';
}
?>
