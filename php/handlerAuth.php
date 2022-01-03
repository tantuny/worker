<?
  session_start();
  header('Content-type: text/html; charset=utf-8');
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  $login = mb_strtolower($login);
  $login = trim($login);
  $pass = trim($pass);
  $mysqli = new mysqli('localhost', 'vladle43_10', '%0ng8FKf', 'vladle43_10');
  $result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'");
  $row = $result->fetch_assoc();
  if(password_verify($pass, $row['pass'])){
    $_SESSION['username'] = $row['username'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
    echo "<a href='/lk.php'>Личный кабинет</a>";
  }else{
    echo "error";
  }
?>