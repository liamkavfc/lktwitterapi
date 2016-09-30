function formSubmit(){
    $('#username').submit( function(e) {
        e.stopPropagation();
        e.preventDefault();
        alert('work');
        $.ajax({
            url : 'get_tweets.php',
            type: 'GET',
            data: {
                'username': username
            },
            success: function (data) {
               console.log(data);
            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
};