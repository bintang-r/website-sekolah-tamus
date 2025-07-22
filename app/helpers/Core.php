<?php

namespace App\Helpers;

class Core
{
     public static function init()
     {
          // Koneksi database otomatis (gunakan sekali)
          global $conn;

          if (!isset($conn)) {
               $host = 'localhost';
               $user = 'root';
               $pass = '';
               $db   = 'morvin_school'; // Ganti sesuai kebutuhan

               $conn = new \mysqli($host, $user, $pass, $db);

               if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
               }
          }

          // Jalankan sesi jika belum
          if (session_status() === PHP_SESSION_NONE) {
               session_start();
          }
     }

     public static function HEADER($pageTitle = "Beranda")
     {
          self::init(); // Pastikan koneksi & session tersedia
          include_once __DIR__ . '/../../includes/header.php';
          include_once __DIR__ . '/../../includes/topbar.php';
          include_once __DIR__ . '/../../includes/sidebar.php';
     }     

     public static function FOOTER()
     {
          include_once __DIR__ . '/../../includes/footer.php';
     }

     public static function AUTH()
     {
          self::init(); // Pastikan koneksi & session tersedia

          if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
               header("Location: " . self::rootUrl('login.php'));
               exit;
          }
     }

     protected static function rootUrl($path = '')
     {
          // Ambil base URL dari dokumen root, misalnya "/website-sekolah/"
          $base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

          // Ambil hanya root (misal: "/website-sekolah")
          $parts = explode('/', $base);
          array_pop($parts); // hapus folder terakhir (mis. "page")

          $root = implode('/', $parts);
          if ($root !== '') $root .= '/';

          return '/' . ltrim($root . $path, '/'); // hasil akhir: "/login.php"
     }
}
