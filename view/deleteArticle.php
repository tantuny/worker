<script>
    let formData = new FormData();
    let id = location.pathname.split("/")[2];
    formData.append('id', id);
    fetch('/deleteArticle',{
        method: "POST",
        body: formData
    }).then(response=>response.json())
        .then(result=>{
            if(result.result == 'success'){
                location.href = '/';
            }
        })
</script>