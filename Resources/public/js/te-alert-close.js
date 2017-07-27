$(document).ready(function () {
    $('body').on('close.bs.alert', '#alerts-container .alert', function (event) {
        event.preventDefault();
        var self = $(this);
        self.removeClass('shown').addClass('closing');
        self.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
            self.remove();
        })
    })
});
$(window).on('load', function () {
    $('#alerts-container').children().addClass('shown');
})