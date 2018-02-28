
<div class='contactForm' >
    <form method='POST' action='pages/contact.php' id='contactForm' name='contactForm' >
        <div> 
            <div class='formDescription' >
                <h2>Formularz kontaktowy</h2>
            </div>
            <input class='inptuStyle' placeholder='e-mail'>
            <input class='inptuStyle' placeholder='telefon'>
            <input class='inptuStyle' placeholder='imię i nazwisko'>        
            <input class='inptuStyleMessage' placeholder='wiadomość'>  
        </div>
    </form>
    <div class='formBtn'>
        <div class='inline-block' >
            <button id='clearForm'>Wyczysć</button>
        </div>
        <div class='inline-block'>
            <button id='sendData'>Wyślij</button>
        </div>  
       
        
    <div>
</div>

<script>
    $('document').ready(function() {
        $('#sendData').click(function() {            
            var data = $('#contactForm input').serializeArray();
           
            $.post($('#contactForm').attr('action'), data, function(json) {
                if (json.status == 'fail') {
                    alert(json.message);
                } 
                
                if (json.status == 'success') {
                    alert(json.message); 
                    // clearInputs();   
                }

            }, "json");
        })

        $('#clearForm').click(function() {
            $('#contactForm').find('input').attr('placeholder');
            this.value = $(this).attr("placeholder");
            
        })

        function clearInputs() {
            $('#contactForm input').each(function() {
                $(this).value('');

            })           
        }

    })
</script>