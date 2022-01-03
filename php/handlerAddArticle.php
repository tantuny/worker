<?
  require_once('db.php');
  $title = $_POST['title'];
  $content = $_POST['content'];
  $author = $_POST['author'];
  if(empty($title) or empty($content) or empty($author)){
    exit("Error: Empty input");
  }
  
  $mysqli->query("INSERT INTO `articles`(`title`, `content`, `author`) VALUES ('$title', '$content', '$author')");
  header("Location: /");
?>