;(function ($) {
    'use strict';
    $(document).ready(function () {
        $('#ajax-submit').on('click', function () {
            var info = $('#info').val();
            var s = $('#ajax_nonce').val();
            $.post(urls.ajaxurl, {
                action : "ajax_test",
                info: info,
                s: s
            }, function (data) {
                console.log(data);
            });
            return false;
        });
    });

})(jQuery);
