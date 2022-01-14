<form action="/addArticle" method="post" onsubmit="sendForm(this); return false;">
    <div class="mb-3">
        <input type="text" name="title" class="form-control" placeholder="Заголовок статьи" id="inputTitle">
    </div>
    <div class="mb-3">
        <textarea id="sample" class="form-control" placeholder="Текст статьи"></textarea>
    </div>
    <div class="mb-3">
        <input type="text" name="author" class="form-control" placeholder="Автор" id="inputAuthor">
    </div>
    <div class="mb-3">
        <input type="submit" class="form-control btn btn-primary" value="Сохранить изменения">
    </div>
</form>
<link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
<!-- <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/assets/css/suneditor.css" rel="stylesheet"> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/assets/css/suneditor-contents.css" rel="stylesheet"> -->
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
<!-- languages (Basic Language: English/en) -->
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ru.js"></script>
<script>
    /**
     * ID : 'suneditor_sample'
     * ClassName : 'sun-eidtor'
     */
// ID or DOM object
    const editor = SUNEDITOR.create((document.getElementById('sample') || 'sample'),{
        // All of the plugins are loaded in the "window.SUNEDITOR" object in dist/suneditor.min.js file
        // Insert options
        // Language global object (default: en)
        lang: SUNEDITOR_LANG['ru'],
        height: '25rem',
    });
    let id = location.pathname.split('/')[2];
    function sendForm(form){
        const content = editor.getContents();
        let formData = new FormData(form);
        formData.append('id', id);
        formData.append('content', content);
        fetch('/changeArticle',{
            method: "POST",
            body: formData
        }).then(response=>response.json())
            .then(result=>{
                if(result.result == 'success'){
                    location.href = '/';
                }
            })
    }
    let formData = new FormData();
    formData.append('id', id);
    fetch('/getArticleById',{
        method: "POST",
        body: formData
    }).then(response=>response.json())
        .then(result=>{
            inputTitle.value = result.title;
            editor.setContents(result.content);
            inputAuthor.value = result.author;
        })
</script>