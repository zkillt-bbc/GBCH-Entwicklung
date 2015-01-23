$(document).ready(function()
{
    
    $(document).keyup(function(event) {
        if(event.which === 27) {
            $('#test').hide();
        }
    });

});