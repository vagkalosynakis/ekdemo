$(document).ready(function () {

    (function ($) {

        $('#usersFilter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('#users tr').hide();
            $('#users tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

        $('#carsFilter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('#cars tr').hide();
            $('#cars tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

        $('#rdFilter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('#rd tr').hide();
            $('#rd tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});