<?php
/**
 * 
 *  Absensi Siswa Prakerin
 *  
 *  
 */

session_start();
include './lib/db/dbconfig.php';
//include './lib/db/functions.php';


if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = "home";
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "id";
}
if (!isset($_SESSION['sw']) AND !isset($_SESSION['pb'])) {
  include 'view/login.php';
} else {
  include 'view/media.php';
}
?>