$("form").on("change",".file-upload-field",function(){
    $(this).parent(".file-ipload-wrapper").attr("data-text",$(this).val().replace(/.*(\/|\\)/,''));
})