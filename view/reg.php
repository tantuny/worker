<div class="col-sm-6 mx-auto">
    <form action="/handlerReg" method="post">
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