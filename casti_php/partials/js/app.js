(function($){
    /*
    INPUT FORMULAR
    */


    var form = $('#pridavanie'),
        input = $('#text'),
        list = $('#item-list');


    var animation = {
        zaciatok: '#00bc8c',
        finale: list.find('li').css('backgroundColor') || '#353535',
        pauza: '200'
    }

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
                    
                    novy_element.appendTo( list )
                        .css({backgroundColor: animation.zaciatok})
                        .delay(animation.pauza)
                        .animate({backgroundColor: animation.finale});

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