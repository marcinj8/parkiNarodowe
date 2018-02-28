     
<style>
    .showDescription:hover
{
    background: rgb(84, 70, 1);
    color: white;
    
}



</style>
<article class='mainParkList container' >
    <h2>
        Spis Parkow Narodowych w Polsce
    </h2><br>
    <div class="row>">
        <div class='col-4 '>                
            <ol class="list-group parkList">
                <li id='0' class="list-group-item active">Babiogórski Park Narodowy</li>
                <li id='1' class="list-group-item showDescription">Białowieski Park Narodowy</li>
                <li id='2' class="list-group-item showDescription">Biebrzański Park Narodowy</li>
                <li id='3' class="list-group-item showDescription">Bieszczadzki Park Narodowy</li>
                <li id='4' class="list-group-item showDescription">Park Narodowy „Bory Tucholskie”</li>
                <li id='5' class="list-group-item showDescription">Drawieński Park Narodowy</li>
                <li id='6' class="list-group-item showDescription">Gorczański Park Narodowy</li>
                <li id='7' class="list-group-item showDescription">Park Narodowy Gór Stołowych</li>
                <li id='8' class="list-group-item showDescription">Kampinoski Park Narodowy</li>
                <li id='9' class="list-group-item showDescription">Karkonoski Park Narodowy</li>
                <li id='10' class="list-group-item showDescription">Magurski Park Narodowy</li>
                <li id='11' class="list-group-item showDescription">Narwiański Park Narodowy</li>
                <li id='12' class="list-group-item showDescription">Ojcowski Park Narodowy</li>
                <li id='13' class="list-group-item showDescription">Pieniński Park Narodowy</li>
                <li id='14' class="list-group-item showDescription">Poleski Park Narodowy</li>
                <li id='15' class="list-group-item showDescription">Roztoczański Park Narodowy</li>
                <li id='16' class="list-group-item showDescription">Słowiński Park Narodowy</li>
                <li id='17' class="list-group-item showDescription">Świętokrzyski Park Narodowy</li>
                <li id='18' class="list-group-item showDescription">Tatrzański Park Narodowy</li>
                <li id='19' class="list-group-item showDescription">Park Narodowy „Ujście Warty”</li>
                <li id='20' class="list-group-item showDescription">Wielkopolski Park Narodowy</li>
                <li id='21' class="list-group-item showDescription">Wigierski Park Narodowy</li>
                <li id='22' class="list-group-item showDescription">Woliński Park Narodowy</li>                                            
                
            </ol>
        </div>
        
        <div class='col-6' id="description" > 
            <div>Nazwa Parku</div>    
            <div>Opis parku</div> 
        </div>
    </div>

</article>
<script>

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
            //    console.log(descriptionNo)
        // if (descritpion.content != description) {

        loadDescription(descriptionNo);

        $('.list-group-item').removeClass('active').addClass('showDescription');            
        $(this).removeClass('showDescription').addClass('active');
        

        // }        
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

      // var jqxhr = $.getJSON('http://localhost/api/park.postman_collection.json', function() {
    //     console.log( "success" );
    //     })
    //     .done(function(response) {
    //         console.log("double success");
    //     })
    //     .fail(function() {
    //         console.log( "error" );
    //     })
    //     .always(function() {
    //         console.log( "complete" );
    // });


</script>