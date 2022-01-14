<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7" id="addArticleBtn">
    </div>
    <div class="col-md-10 col-lg-8 col-xl-7" id="content">
    </div>
</div>
<script>
    fetch('/getArticles')
        .then(response=>response.json())
        .then(result=>{
            for(let i=0; i<result.length; i++){
                let HTMLDOMParser = new DOMParser();
                let contentText = HTMLDOMParser.parseFromString(result[i].content, "text/html");
                contentText  = (contentText.body.innerText.substr(0,90)+"...");
                let postPreview = `
              <!-- Post preview-->
              <div class="post-preview">
                  <a href="/blog/${result[i].id}">
                      <h2 class="post-title">${result[i].title}</h2>
                      <h3 class="post-subtitle">${contentText}</h3>
                  </a>
                  <p class="post-meta">
                      Опубликовал(а)
                      ${result[i].author}
                  </p>
              </div>
              <!-- Divider-->
              <hr class="my-4" />
            `;
                content.innerHTML = content.innerHTML + postPreview;
            }
        });
    fetch('/getCurrentUser')
        .then(response=>response.json())
        .then(result=>{
            if(result.id != null){
                addArticleBtn.innerHTML = `<a href="/addArticle">[Добавить статью]</a>`;
            }
        })
</script>