<?
  require_once('db.php');
  $id = $_GET['id'];
  $mysqli->query("DELETE FROM `articles` WHERE id='$id'");
  header('Location: /');
?>