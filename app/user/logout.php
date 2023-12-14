<?php
session_start();
//------------------------------::::::::::::::::::::------------------------------\\
// Tugas Website Perpustakaan Francisco Destaliano Putra Sadewa \\
//------------------------------::::::::::::::::::::------------------------------\\
unset($_SESSION['id_user']);
unset($_SESSION['fullname']);
unset($_SESSION['username']);
unset($_SESSION['status']);

$_SESSION['berhasil_keluar'] = "Anda telah berhasil keluar !!";
header("location: ../../masuk");
