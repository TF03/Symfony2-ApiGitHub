/**
 * Created by root on 19.02.15.
 */
$(document).ready(function() {
    $('body').on('click', '.ajax', function(){
        sendL = $('#sendL').val();
        $.get(sendL, {login: $(this).attr('id')})
            .done(function(msg) {
                $('#like_' + msg.login).text(msg.text);
            })
            .fail(function() { console.log('ajax return error'); });
    });
});