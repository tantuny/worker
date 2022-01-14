<a href="" class="btn btn-primary">Добавить статью</a>
<p><strong>Имя: </strong> <span id="username"></span></p>
<p><strong>Фамилия: </strong> <span id="userlastname"></span></p>
<p><strong>E-mail: </strong> <? echo $_SESSION['email']; ?></p>
<p><strong>id: </strong> <? echo $_SESSION['id']; ?></p>

<script>
    fetch('/getCurrentUser')
        .then(response=>response.json())
        .then(result=>{
            username.innerText = result.name;
            userlastname.innerText = result.lastname;
        });
</script>