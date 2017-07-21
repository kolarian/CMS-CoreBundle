/**
 * Created by wladyslaw on 21.07.2017.
 */
$(document).ready(function () {
    $("#cookies_accept").on('click', function () {
        $.ajax({
            type: 'POST',
            url: Routing.generate("accept_cookies_action"),
            success: function (e) {
                if(e == 'ok'){
                    $('#cookies').hide('show', function () {
                        $(this).remove();
                    });
                }
            }
        })
    })
})