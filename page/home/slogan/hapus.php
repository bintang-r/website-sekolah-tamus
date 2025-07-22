<?php
use App\Helpers\Core;

Core::init();
Core::AUTH(); // Kalau perlu

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    global $conn;
    $conn->query("DELETE FROM home WHERE id = $id");

    // Ganti redirect dengan JavaScript agar tidak terganggu oleh output sebelumnya
    echo "<script>
        alert('Data berhasil dihapus.');
        window.location.href = '" . '?page=' . "';
    </script>";
    exit;
}
?>
