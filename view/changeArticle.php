<form action="/changeArticle" method="post">
  <div class="mb-3">
    <input type="text"  id="title" name="title" class="form-control" placeholder="Заголовок статьи">
  </div>
  <div class="mb-3">
    <textarea name="content" id="content" class="form-control" placeholder="Текст статьи"></textarea>
  </div>
  <div class="mb-3">
    <input type="text" id="author" name="author" class="form-control" placeholder="Автор">
  </div>
  <div class="mb-3">
    <input type="submit" class="form-control btn btn-primary" value="Добавить статью">
  </div>
</form>
<script>
    let formData = new FormData();
    let id = location.pathname.split("/")[2];// получаем id из url
    formData.append('id', id);
    fetch('/getArticleById',{
        method: "POST",
        body: formData
    }).then(response=>response.json())
        .then(result=>{
          console.log(result);
        })
</script>