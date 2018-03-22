
    $(document).scroll(function() {
            
        var position = $(window).scrollTop();
        var p = 180 - position /3*2 +'px';
                    
        $('#description').css('top', p);
            
    })

    var description = {
        content: 0
    }

    initialDescription(description.content);
    
    function initialDescription(description) {
        loadDescription(description)
    };

     $('.list-group-item').click(function(e) {
        e.stopPropagation();
       
        var descriptionNo = $(this).attr('id');   
         

        loadDescription(descriptionNo);

        $('.list-group-item').removeClass('active').addClass('showDescription');            
        $(this).removeClass('showDescription').addClass('active');
        

             
    })

    function loadDescription(no) {
        
        
        $.ajax({
            url: 'http://localhost/api/park.postman_collection.json',
            type: 'post',
            dataType: 'json',
                success: function(response) {                   
                        
                    $('#description').html('Nazwa Parku : ' + response.item[no].request.body.formdata[1].value + "<br><br>"+
                                "Opis parku : " + response.item[no].request.body.formdata[2].value)
                   
                }
        })
    }
    //checking conection
      // var jqxhr = $.getJSON('http://localhost/api/park.postman_collection.json', function() {
    //     console.log( "success" );
    //     })
    //     .done(function(response) {
    //         console.log("second success");
    //     })
    //     .fail(function() {
    //         console.log( "error" );
    //     })
    //     .always(function() {
    //         console.log( "complete" );
    // });