$(document).ready( function(){
    $('input[type="reset"]').click( function(){
        $('#usrval').attr('value', '');
        $('.twitter_container').remove();
    });
});