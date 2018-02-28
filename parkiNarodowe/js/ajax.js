$('document').ready(function () {

    var info = {
        content: 'parki',
    }

    initialContent(info.content);

    function initialContent(content) {
        loadContent(content)
    };

    $('.loadContent').click(function(e) {
        e.stopPropagation();
        var content = $(this).attr('data-content');

        if (info.content != content) {
            loadContent(content);
        }
    })

    function loadContent(content) {
        $.ajax({
            url: 'loader.php',
            type: 'post',
            data: { Content : content },
                success: function(response) {

                    $(".contentAjax").html(response)
                    info.content = content;
                }
        })
    }  
})
