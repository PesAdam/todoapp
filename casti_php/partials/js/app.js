(function($){

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

                var li = $('<li class="list-group-item">'+ input.val() +'</li>'); 

                li.appendTo('.items')
                    .css({ backgroundColor: '#00bc8c' })
                    .delay(250)
                    .animate ({ backgroundColor: '#353535' });  

                input.val('').focus();
            }
        });

        input.on('keypress', function(event){

            if( event.which ===  13 ){
                form.submit();
                return false;
            }

        });

    });

}(jQuery));