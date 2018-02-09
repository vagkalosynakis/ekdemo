$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('#users tr').hide();
            $('#users tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});