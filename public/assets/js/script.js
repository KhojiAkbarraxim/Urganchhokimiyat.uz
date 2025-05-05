/////////////// Start FONT RESIE /////////////

(function ($) {
    function changeFont(fontSize) {
        return function () {
            $('html').css('font-size', fontSize + '%');
            sessionStorage.setItem('fSize', fontSize);
        }
    }

    var normalFont = changeFont(100),
        largeFont = changeFont(120);

    $('.js-font-decrease').on('click', function () {
        normalFont();
    });

    $('.js-font-increase').on('click', function () {
        largeFont();
    });

    if (sessionStorage.length !== 0) {
        $('html').css('font-size', sessionStorage.getItem('fSize') + '%');
    }

})(jQuery);

/////////////// End ////////////////