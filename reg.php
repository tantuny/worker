<?
  require_once('header.php');
?>
    <div class="container mt-5">
      <h1 class="text-center my-3">Регистрация на сайте</h1>
      <div class="col-4 mx-auto">
        <form action="/php/handlerReg.php" method="post">
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Имя" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="lastname" placeholder="Фамилия" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="login" placeholder="Login" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" name="pass" placeholder="Пароль" required>
          </div>
          <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
          </div>
        </form>
      </div>
    </div>
<?
  require_once('footer.php');
?>