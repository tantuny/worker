<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7" id='content'>

            </div>
            <div class="col-md-10 col-lg-8 col-xl-7" id="editBtn"></div>
        </div>
    </div>
</article>
<script>
    let formData = new FormData();
    let id = location.pathname.split("/")[2]; // получаем id из url
    formData.append('id', id);
    fetch('/getArticleById',{
        method: "POST",
        body: formData
    }).then(response=>response.json())
        .then(result=>{
            title.innerText = result.title;
            content.innerHTML = result.content;
        })
    fetch('/getCurrentUser')
        .then(response=>response.json())
        .then(result=>{
            if(result.id != null){
                editBtn.innerHTML = `<a href="/changeArticle/${id}">[Редактировать]</a>`;
            }
        })
</script>