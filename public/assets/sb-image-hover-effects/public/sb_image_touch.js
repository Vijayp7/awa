
jQuery('.oxilab-touchstart').on('touchstart', function (e) {
    "use strict";
    var link = jQuery(this);
    if (link.hasClass("oxi-touch")) {
        return true;
    } else {
        jQuery(".oxilab-touchstart").removeClass("oxi-touch");
        link.addClass("oxi-touch");
        e.preventDefault();
        return false;
    }
});