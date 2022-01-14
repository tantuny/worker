<?
class Blog{
    public static function getArticles(){
        global $mysqli;
        $result = $mysqli->query("SELECT * FROM `articles`");
        $articles = [];
        while($row = $result->fetch_assoc()){
            $articles[] = $row;
        }
        return json_encode($articles);
    }
    public static function getArticleById($id){
        global $mysqli;
        $result = $mysqli->query("SELECT * FROM articles WHERE id='$id'");
        $row = $result->fetch_assoc();
        return json_encode($row);
    }
    public static function addArticle($title, $content, $author){
        global $mysqli;
        //echo "INSERT INTO `articles`(`title`, `content`, `author`) VALUES ('$title', '$content', '$author')";
        $result = $mysqli->query("INSERT INTO `articles`(`title`, `content`, `author`) VALUES ('$title', '$content', '$author')");
        exit(json_encode(['result'=>'success']));
    }
    public static function changeArticle($id, $title, $content, $author){
        global $mysqli;
        $mysqli->query("UPDATE `articles` SET `title`='$title',`content`='$content',`author`='$author' WHERE `id`=$id");
        return (json_encode(['result'=>'success']));
    }
     public static function deleteArticle($id){
        global $mysqli;
        $mysqli->query(" DELETE FROM `articles` WHERE `id`=$id");
        return (json_encode(['result'=>'success']));
    }
}
?>

