(function($){
    /*
    INPUT FORMULAR
    */


    var form = $('#pridavanie'),
        input = $('#text');

    form.on('submit', function(event){
        event.preventDefault();

        var req = $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize()
        });

        req.done(function(data){
            if(data === 'funguje'){
                $.ajax({ url: 'http://localhost/php/toddoappka//index.php'}).done(function(html){
                    var novy_element = $(html).find('li:last-child');
                    
                    novy_element.appendTo('.items')
                        .css({backgroundColor: '#00bc8c'})
                        .delay(200)
                        .animate({backgroundColor: '#353535'});

                        input.val('').focus();
                });
                
            }
            

        });

       /* input.on('keypress', function(event){

            if( event.which ===  13 ){
                form.submit();
                return false;
            }

        }); */

        /* EDIT FORMULAR */
        $('#edit').find('#text').select();

        // DELETE FORMULAR 
        
        $('#delete-form').on('submit', function(event){

            return confirm('naozaj to chces?');

        });


    });

}(jQuery));