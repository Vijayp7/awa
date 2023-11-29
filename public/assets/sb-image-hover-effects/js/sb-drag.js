jQuery(function () {
    jQuery("#sb-image-drag-submit").submit(function (e) {
        var list_sortable = jQuery('#sb-image-drag-drop').sortable('toArray').toString();
        var security = jQuery('#sb-image-ajax-nonce').val();
        jQuery.post({
            url: sb_image_hover_drag_drop_ajax.ajaxurl,
            beforeSend: function () {
                jQuery("#sb-image-drag-saving").slideDown();
                jQuery("#sb-image-drag-drop").slideUp();
                jQuery("#sb-image-drag-and-drop-data-close").slideUp();
                jQuery('#sb-image-drag-and-drop-data-submit').val('Saving...');
            },
            data: {
                action: 'sb_image_hover_admin_ajax_data',
                list_order: list_sortable,
                security: security
            },
            success: function () {
                setTimeout(function () {
                    location.reload();
                }, 500);
            }
        });
        e.preventDefault();
        return false;
    });
});
  