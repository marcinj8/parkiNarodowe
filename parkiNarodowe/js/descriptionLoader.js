
    var description = {
        content: 1
    }

    initialDescription(description.content);
    
    function initialDescription(description) {
        loadDescription(description)
    };

     $('.list-group-item').click(function(e) {
        e.stopPropagation();
       
        var description = $(this).attr('id');   
               console.log(description)
        // if (descritpion.content != description) {

        loadDescription(description);

        $('.list-group-item').removeClass('active').addClass('showDescription');            
        $(this).removeClass('showDescription').addClass('active');
        

        // }
         
    

    })

    function loadDescription(description) {
        $.ajax({
            url: 'pages/description.php',
            type: 'post',
            data: { Description : description },
                success: function(response) {

                        // console.log(response)
                    $('#description').html(response)
                   
                }
        })
    }
