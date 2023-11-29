jQuery(document).ready(function () {
    jQuery('.sb-image-vendor-color').each(function () {
        jQuery(this).minicolorsorphita({
            control: jQuery(this).attr('data-control') || 'hue',
            defaultValue: jQuery(this).attr('data-defaultValue') || '',
            format: jQuery(this).attr('data-format-orphita') || 'hex',
            keywords: jQuery(this).attr('data-keywords') || '',
            inline: jQuery(this).attr('data-inline') === 'true',
            letterCase: jQuery(this).attr('data-letterCase') || 'lowercase',
            opacity: jQuery(this).attr('data-opacity-orphita'),
            position: jQuery(this).attr('data-position') || 'bottom left',
            swatches: jQuery(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
            change: function (value, opacity) {
                if (!value)
                    return;
                if (opacity)
                    value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });

    jQuery('[data-toggle="tooltip"]').tooltip();

});
jQuery('#sb-image-drag-and-drop').on('click', function () {
    jQuery("#sb-image-drag-and-drop-data").modal("show");
});

jQuery('#sb-image-drag-and-drop').on('click', function () {
    jQuery("#sb-image-drag-and-drop-data").modal("show");
    jQuery("#sb-image-drag-saving").slideUp();
    jQuery("#sb-image-drag-drop").slideDown();
    jQuery("#sb-image-drag-and-drop-data-close").slideDown();
    jQuery('#sb-image-drag-and-drop-data-submit').val('Submit');

});
jQuery('#sb-image-drag-drop').sortable({
    axis: 'y',
    opacity: 0.7
});
jQuery(".oxilab-alert-change").on("change", function () {
    var data = "<strong>" + jQuery(this).attr('oxilab-alert') + " </strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});

});