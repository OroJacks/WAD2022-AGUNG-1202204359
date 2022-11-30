<?php
   session_start();
   $host = 'localhost:3306';
   $user = 'root';
   $password = '';
   $db = "wad_modul4";

   $db = mysqli_connect($host, $user, $password, $db);

   if (!$db){
      die("koneksi gagal".mysqli_connect_error());
   }
?>