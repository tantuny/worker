<?
session_start();
header('Content-type: text/html; charset=utf-8');
$mysqli = new mysqli('localhost', 'root', '', 'worker');
require_once('php/classes/User.php');
require_once('php/classes/Blog.php');
$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/', $uri);

if($uri[1] == 'reg'){
    $title = "Регистрация";
    $content = file_get_contents('view/reg.php');
}else if($uri[1] == 'auth'){
    $title = "Вход на сайт";
    $content = file_get_contents('view/auth.php');
}else if($uri[1] == 'handlerReg'){
    User::handlerReg($_POST['name'], $_POST['lastname'], $_POST['login'], $_POST['pass']);
    exit;
}else if($uri[1] == 'handlerAuth'){
    User::handlerAuth($_POST['login'], $_POST['pass']);
    exit;
}else if($uri[1] == 'exit'){
    session_destroy();
    header('Location: /auth');
}else if($uri[1] == 'user'){
    $title = "Личный кабинет";
    $content = file_get_contents('view/lk.php');
}else if($uri[1] == 'getCurrentUser'){
    exit(User::getCurrentUser());
}else if($uri[1] == ""){
    $title = "Главная";
    $content = file_get_contents('view/mainPage.php');
}else if($uri[1] == "getArticles"){
    exit(Blog::getArticles());
}else if($uri[1] == "blog"){
    $title = "Название статьи";
    $content = file_get_contents('view/article.php');
}else if($uri[1] == "getArticleById"){
    $id = $_POST['id'];
    exit(Blog::getArticleById($id));
}else if($uri[1] == 'addArticle' and $_SERVER['REQUEST_METHOD'] == "POST"){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    Blog::addArticle($title, $content, $author);
}else if($uri[1] == 'addArticle' and $_SERVER['REQUEST_METHOD'] == "GET"){
    $title = "Добавление статьи";
    $content = file_get_contents('view/addArticle.php');
}else if($uri[1]=='changeArticle' and $_SERVER['REQUEST_METHOD'] == "GET"){
    $title = "Редактировать статью";
    $content = file_get_contents('view/changeArticle.php');
}else if($uri[1]=='changeArticle' and $_SERVER['REQUEST_METHOD'] == "POST"){
    exit(Blog::changeArticle($_POST['id'], $_POST['title'], $_POST['content'], $_POST['author']));
}else if($uri[1]=='deleteArticle' and $_SERVER['REQUEST_METHOD'] == "GET"){
    $title = "удаление статьи";
    $content = file_get_contents('view/deleteArticle.php');
}else if($uri[1]=='deleteArticle' and $_SERVER['REQUEST_METHOD'] == "POST") {
    exit(Blog::deleteArticle($_POST['id']));
}
require_once("view/template.php");

?>

?>