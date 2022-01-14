<?
class User{
    public static function handlerReg($name, $lastname, $login, $pass){
        if(empty($name) or empty($lastname) or empty($login) or empty($pass)){
            exit("Не все поля заполнены");
        }
        $login = mb_strtolower($login);
        $login = trim($login);
        $pass = trim($pass);
        $name = htmlspecialchars($name);
        $lastname = htmlspecialchars($lastname);
        $login = htmlspecialchars($login);
        $pass =  password_hash($pass, PASSWORD_DEFAULT);

        $mysqli = new mysqli('localhost', 'vladle43_10', '%0ng8FKf', 'vladle43_10');
        $result = $mysqli->query("SELECT id FROM users WHERE login = '$login'");
        if ($result->num_rows){
            echo "Такой пользователь уже есть";
        }else{
            $mysqli->query("INSERT INTO users (`username`, `lastname`, `login`, `pass`) VALUES ('$name', '$lastname', '$login', '$pass')");
            echo "Новый пользователь успешно зарегистрирован";
        }
    }
    public static function handlerAuth($login, $pass){
        global $mysqli;
        $login = mb_strtolower($login);
        $login = trim($login);
        $pass = trim($pass);
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
    }
    public static function getCurrentUser(){
        $username = $_SESSION['username'];
        $lastname = $_SESSION['lastname'];
        $id = $_SESSION['id'];
        $user = [
            "name"=>$username,
            "lastname"=>$lastname,
            "id"=>$id
        ];
        return json_encode($user);
    }
}
?>

