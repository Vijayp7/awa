<?php
if (!defined('ABSPATH'))
    exit;
sb_image_hover_effects_user_capabilities();
$styleid = (int) $_GET['styleid'];
if (!empty($_REQUEST['_wpnonce'])) {
    $nonce = $_REQUEST['_wpnonce'];
}
global $wpdb;
$table_list = $wpdb->prefix . 'sb_image_hover_effects_list';
$table_name = $wpdb->prefix . 'sb_image_hover_effects_style';
$status = get_option('sb_image_hover_effects_license_status');
$title = '';
$files = '';
$link = '';
$bottom = '';
$image = '';
$hoverimage = '';
$itemid = '';
$imagestyle = 'sb-square-effects-1';
$imageeffects = 'sb-square-effects-1 sb-left-to-right';
$imagebackgroundcolor = 'rgba(0, 143, 171, 1)';
$imagealignments = 'vertical-align: top; text-align: center;';
$titlecolor = '#FFF';
$desccolor = '#FFF';
$buttomcolor = '#FFF';
$buttombackground = '#b8258e';
$titlebackcolor = '#b8258e';
$buttomalign = 'margin: 0 auto;';
$buttommarginleft = 0;
$buttommarginright = 0;
if (!empty($_POST['submit']) && $_POST['submit'] == 'submit') {
    $imagestylename = sanitize_text_field(htmlentities($_POST['image-style']));
    $sbtitle = sanitize_text_field(htmlentities($_POST['sb-image-title']));
    $sbfiles = sanitize_text_field(htmlentities($_POST['sb-image-desc']));
    $sbbotton = sanitize_text_field($_POST['sb-image-bottom']);
    $sblink = sanitize_text_field($_POST['sb-image-link']);
    $sbimage = sanitize_text_field($_POST['sb-image-upload-url']);
    $sbhoverimage = $status == 'valid' ? sanitize_text_field($_POST['sb-image-hover-upload-url']) : '';
    $sbbackgroundcolor = $status == 'valid' ? sanitize_text_field($_POST['sb-background-color']) : $imagebackgroundcolor;
    $sbtitlecolor = $status == 'valid' ? sanitize_hex_color($_POST['sb-title-color']) : $titlecolor;
    $sbdesccolor = $status == 'valid' ? sanitize_hex_color($_POST['sb-desc-color']) : $titlecolor;
    $sbtitlebackcolor = $status == 'valid' ? sanitize_text_field($_POST['title-back-color']) : $titlebackcolor;
    $sbbuttoncolor = $status == 'valid' ? sanitize_hex_color($_POST['sb-button-color']) : $titlecolor;
    $sbbuttonbackground = $status == 'valid' ? sanitize_text_field($_POST['sb-button-background']) : $buttombackground;

    $css = ' image-style |' . sanitize_text_field($_POST['image-style']) . '|'
            . ' sb-image-effects |' . sanitize_text_field($_POST['sb-image-effects']) . '|'
            . ' sb-background-color |' . $sbbackgroundcolor . '|'
            . ' sb-image-content-alignments |' . sanitize_text_field($_POST['sb-image-content-alignments']) . '|'
            . ' sb-title-color |' . $sbtitlecolor . '|'
            . ' sb-image-title-animation ||'
            . ' sb-desc-color |' . $sbdesccolor . '|'
            . ' sb-image-desc-animation ||'
            . ' sb-button-color |' . $sbbuttoncolor . '|'
            . ' sb-button-background |' . $sbbuttonbackground . '|'
            . ' sb-image-button-animation ||'
            . ' sb-image-button-align |' . sanitize_text_field($_POST['sb-image-button-align']) . '|'
            . ' sb-image-bottom-margin-left |' . sanitize_text_field($_POST['sb-image-bottom-margin-left']) . '|'
            . ' sb-image-bottom-margin-right |' . sanitize_text_field($_POST['sb-image-bottom-margin-right']) . '|'
            . ' title-back-color |' . $sbtitlebackcolor . '|';
    $css = sanitize_text_field($css);
    if (!wp_verify_nonce($nonce, 'sbimagesavedata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        if (empty($_POST['item-id'])) {
            $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (styleid, stylename, title, files, buttom_text, link, image, hoverimage, css) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s)", array($styleid, $imagestylename, $sbtitle, $sbfiles, $sbbotton, $sblink, $sbimage, $sbhoverimage, $css)));
        }
        if (!empty($_POST['item-id']) && is_numeric($_POST['item-id'])) {
            $item_id = (int) $_POST['item-id'];
            $wpdb->update("$table_list", array("stylename" => $imagestylename, "title" => $sbtitle, "files" => $sbfiles, "buttom_text" => $sbbotton, "link" => $sblink, "image" => $sbimage, "hoverimage" => $sbhoverimage, "css" => $css), array('id' => $item_id), array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s'), array('%d'));
        }
    }
}
if (!empty($_POST['edit']) && is_numeric($_POST['item-id'])) {
    if (!wp_verify_nonce($nonce, 'sbimageeditdata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['item-id'];
        $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $item_id), ARRAY_A);
        $title = $data['title'];
        $files = $files = $data['files'];
        $link = $data['link'];
        $bottom = $data['buttom_text'];
        $image = $data['image'];
        $hoverimage = $data['hoverimage'];
        $itemid = $item_id;
        $data = $data['css'];
        $data = explode('|', $data);
        $imagestyle = $data[1];
        $imageeffects = $data[3];
        $imagebackgroundcolor = $data[5];
        $imagealignments = $data[7];
        $titlecolor = $data[9];
        $titleanimation = $data[11];
        $desccolor = $data[13];
        $descanimation = $data[15];
        $buttomcolor = $data[17];
        $buttombackground = $data[19];
        $buttomanimation = $data[21];
        $buttomalign = $data[23];
        $buttommarginleft = $data[25];
        $buttommarginright = $data[27];
        $titlebackcolor = $data[29];
        echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#sb-image-add-new-item-data").modal("show")  }, 500); });</script>';
    }
}
if (!empty($_POST['delete']) && is_numeric($_POST['item-id'])) {
    if (!wp_verify_nonce($nonce, 'sbimagedeletedata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['item-id'];
        $wpdb->query($wpdb->prepare("DELETE FROM {$table_list} WHERE id = %d ", $item_id));
    }
}
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    if (!wp_verify_nonce($nonce, 'sbimagestylecss')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $sbimageanimation = $status == 'valid' ? sanitize_text_field($_POST['sb-image-animation']) : '';
        $sbimageboxshadow = $status == 'valid' ? sanitize_text_field($_POST['sb-image-box-shadow']) : '0';
        $sbimageinnershadow = $status == 'valid' ? sanitize_text_field($_POST['sb-image-inner-shadow']) : '0';
        $sbimageheadingfontfamily = $status == 'valid' ? sanitize_text_field($_POST['sb-image-heading-font-family']) : 'Open+Sans';
        $sbimagedescriptionfontfamily = $status == 'valid' ? sanitize_text_field($_POST['sb-image-description-font-family']) : 'Open+Sans';
        $sbimagebuttonfontfamily = $status == 'valid' ? sanitize_text_field($_POST['sb-image-button-font-family']) : 'Open+Sans';
        $sbimagecss = $status == 'valid' ? sanitize_text_field($_POST['sb-image-css']) : '';

        $data = 'sb-image-heading-margin-top |' . sanitize_text_field($_POST['sb-image-heading-margin-top']) . '|'
                . ' sb-image-item |' . sanitize_text_field($_POST['sb-image-item']) . '|'
                . ' sb-image-image-type |' . sanitize_text_field($_POST['sb-image-image-type']) . '|'
                . ' sb-image-image-autoplay |' . sanitize_text_field($_POST['sb-image-image-autoplay']) . '|'
                . ' sb-image-auto-timing |' . sanitize_text_field($_POST['sb-image-auto-timing']) . '|'
                . ' sb-image-width |' . sanitize_text_field($_POST['sb-image-width']) . '|'
                . ' sb-image-height |' . sanitize_text_field($_POST['sb-image-height']) . '|'
                . ' sb-image-margin |' . sanitize_text_field($_POST['sb-image-margin']) . '|'
                . ' sb-image-padding |' . sanitize_text_field($_POST['sb-image-padding']) . '|'
                . ' sb-image-animation |' . $sbimageanimation . '|'
                . ' sb-image-animation-duration |' . sanitize_text_field($_POST['sb-image-animation-duration']) . '|'
                . ' sb-image-link-opening |' . sanitize_text_field($_POST['sb-image-link-opening']) . '|'
                . ' sb-image-box-shadow |' . $sbimageboxshadow . '|'
                . ' box-shadow-color |' . sanitize_text_field($_POST['box-shadow-color']) . '|'
                . ' sb-image-inner-shadow |' . $sbimageinnershadow . '|'
                . ' inner-shadow-color |' . sanitize_text_field($_POST['inner-shadow-color']) . '|'
                . ' sb-image-heading-font-size|' . sanitize_text_field($_POST['sb-image-heading-font-size']) . '|'
                . ' sb-image-heading-font-family |' . $sbimageheadingfontfamily . '|'
                . ' sb-image-heading-font-weight |' . sanitize_text_field($_POST['sb-image-heading-font-weight']) . '|'
                . ' sb-image-heading-font-style |' . sanitize_text_field($_POST['sb-image-heading-font-style']) . '|'
                . ' sb-image-heading-underline |' . sanitize_text_field($_POST['sb-image-heading-underline']) . '|'
                . ' sb-image-heading-padding-bottom |' . sanitize_text_field($_POST['sb-image-heading-padding-bottom']) . '|'
                . ' sb-image-heading-margin-bottom |' . sanitize_text_field($_POST['sb-image-heading-margin-bottom']) . '|'
                . ' sb-image-description-font-size |' . sanitize_text_field($_POST['sb-image-description-font-size']) . '|'
                . ' sb-image-description-font-family |' . $sbimagedescriptionfontfamily . '|'
                . ' sb-image-description-font-weight |' . sanitize_text_field($_POST['sb-image-description-font-weight']) . '|'
                . ' sb-image-description-font-style |' . sanitize_text_field($_POST['sb-image-description-font-style']) . '|'
                . ' sb-image-description-margin-bottom |' . sanitize_text_field($_POST['sb-image-description-margin-bottom']) . '|'
                . ' sb-image-button-font-size |' . sanitize_text_field($_POST['sb-image-button-font-size']) . '|'
                . ' sb-image-button-font-family |' . $sbimagebuttonfontfamily . '|'
                . ' sb-image-button-font-weight |' . sanitize_text_field($_POST['sb-image-button-font-weight']) . '|'
                . ' sb-image-button-font-style |' . sanitize_text_field($_POST['sb-image-button-font-style']) . '|'
                . ' sb-image-button-padding-left |' . sanitize_text_field($_POST['sb-image-button-padding-left']) . '|'
                . ' sb-image-button-padding-top |' . sanitize_text_field($_POST['sb-image-button-padding-top']) . '|'
                . ' sb-image-button-radius |' . sanitize_text_field($_POST['sb-image-button-radius']) . '|'
                . ' sb-image-css |' . $sbimagecss . '|'
                . ' sb-image-heading-margin-left-right |' . sanitize_text_field($_POST['sb-image-heading-margin-left-right']) . '|'
                . ' sb-image-heading-margin-top |' . sanitize_text_field($_POST['sb-image-heading-margin-top']) . '|';
        $data = sanitize_text_field($data);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $data, $styleid));
    }
}
$listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
$styledata = $styledata['css'];
$styledata = explode('|', $styledata);
$sbimageproonly = $status == 'valid' ? '' : '<span class="ctu-pro-only">Pro Only</span>';

function sbimageproonlydata($data) {
    global $status;
    if ($status == 'valid') {
        echo $data;
    } else {
        echo 'sb-square-effects-1';
    }
}

?>

<div class="wrap">
    <?php echo sb_image_promote_free(); ?>
    <div class="sb-image-admin-wrapper">
        <div class="sb-image-admin-row">
            <div class="sb-image-style-panel-left">
                <div class="sb-image-style-setting-panel">
                    <form method="post">
                        <div class="ctu-ultimate-wrapper-3"> 
                            <ul class="ctu-ulimate-style-3">  
                                <li ref="#ctu-ulitate-style-3-id-6" class="">
                                    General
                                </li>  
                                <li ref="#ctu-ulitate-style-3-id-5" class="">
                                    Typography
                                </li> 
                                <li ref="#ctu-ulitate-style-3-id-2">
                                    Custom CSS
                                </li>
                                <li ref="#ctu-ulitate-style-3-id-1">
                                    Support 
                                </li>
                            </ul>
                            <div class="ctu-ultimate-style-3-content">                                
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-6">
                                    <div class="oxilab-tabs-content-div-50">
                                        <div class="oxilab-tabs-content-div">
                                            <div class="head-oxi">
                                                General
                                            </div>
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-item" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize How mane Image You want to Show in a single Row ">Image per Row </label>
                                                <div class="col-sm-6 nopadding">
                                                    <select class="form-control" id="sb-image-item" name="sb-image-item">
                                                        <option value="sb-image-hover-responsive-1" <?php
                                                        if ($styledata[3] == 'sb-image-hover-responsive-1') {
                                                            echo 'selected';
                                                        }
                                                        ?>>Single Item per Row</option>
                                                        <option value="sb-image-hover-responsive-2" <?php
                                                        if ($styledata[3] == 'sb-image-hover-responsive-2') {
                                                            echo 'selected';
                                                        }
                                                        ?>>2 Items per Row</option>
                                                        <option value="sb-image-hover-responsive-3" <?php
                                                        if ($styledata[3] == 'sb-image-hover-responsive-3') {
                                                            echo 'selected';
                                                        }
                                                        ?>>3 Items per Row</option>
                                                        <option value="sb-image-hover-responsive-4" <?php
                                                        if ($styledata[3] == 'sb-image-hover-responsive-4') {
                                                            echo 'selected';
                                                        }
                                                        ?>>4 Items per Row</option>
                                                        <option value="sb-image-hover-responsive-5" <?php
                                                        if ($styledata[3] == 'sb-image-hover-responsive-5') {
                                                            echo 'selected';
                                                        }
                                                        ?>>5 Items per Row</option>
                                                        <option value="sb-image-hover-responsive-6" <?php
                                                        if ($styledata[3] == 'sb-image-hover-responsive-6') {
                                                            echo 'selected';
                                                        }
                                                        ?>>6 Items per Row</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize your Link Opening">Link Opening</label>
                                                <div class="col-sm-6 nopadding">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-primary <?php
                                                        if ($styledata[23] == '') {
                                                            echo 'active';
                                                        }
                                                        ?>"> <input type="radio" <?php
                                                                   if ($styledata[23] == '') {
                                                                       echo 'checked';
                                                                   }
                                                                   ?> name="sb-image-link-opening" oxilab-alert="Link Opening" class="oxilab-alert-change"  autocomplete="off" value="">Normal</label>
                                                        <label class="btn btn-primary <?php
                                                        if ($styledata[23] == '_blank') {
                                                            echo 'active';
                                                        }
                                                        ?>"> <input type="radio" <?php
                                                                   if ($styledata[23] == '_blank') {
                                                                       echo 'checked';
                                                                   }
                                                                   ?> name="sb-image-link-opening"  oxilab-alert="Link Opening" class="oxilab-alert-change" autocomplete="off" value="_blank"> New Tab </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="oxilab-tabs-content-div">
                                            <div class="head-oxi">
                                                Image
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-width" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Edit Your Image Width, Besed on Pixel" >Image Width </label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="100" step="10" max="2000" id="sb-image-width" name="sb-image-width" value="<?php echo $styledata[11]; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-height" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Edit Your Image Height, Besed on Pixel. Our Responsive Design will automatiiclly responsive you Image with you Website" >Image Height</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="100" step="10" max="2000" id="sb-image-height" name="sb-image-height" value="<?php echo $styledata[13]; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-margin" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Image Distance From Another Image Step 5" >Image Margin</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="5" max="150" id="sb-image-margin" name="sb-image-margin" value="<?php echo $styledata[15]; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-padding" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Image Distance From Inner Position Step 5" >Image Padding</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="5" max="150" id="sb-image-padding" name="sb-image-padding" value="<?php echo $styledata[17]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="oxilab-tabs-content-div">
                                            <div class="head-oxi">
                                                Slider
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Show your Image on Carousel or Normal">Showing Type</label>
                                                <div class="col-sm-6 nopadding">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-primary <?php
                                                        if ($styledata[5] == 'normal') {
                                                            echo 'active';
                                                        }
                                                        ?>"> 
                                                            <input type="radio" <?php
                                                            if ($styledata[5] == 'normal') {
                                                                echo 'checked';
                                                            }
                                                            ?>  name="sb-image-image-type" id="sb-image-type-normal" oxilab-alert="Showing Type" class="oxilab-alert-change"  autocomplete="off" value="normal">Normal
                                                        </label>

                                                        <label class="btn btn-primary <?php
                                                        if ($styledata[5] == 'carousel') {
                                                            echo 'active';
                                                        }
                                                        ?>">
                                                            <input type="radio" <?php
                                                            if ($styledata[5] == 'carousel') {
                                                                echo 'checked';
                                                            }
                                                            ?> name="sb-image-image-type" id="sb-image-type-carousel" oxilab-alert="Showing Type" class="oxilab-alert-change"  autocomplete="off" value="carousel"> Carousel
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Do You want Autoplay? Yes or No">Autoplay</label>
                                                <div class="col-sm-6 nopadding">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-primary <?php
                                                        if ($styledata[7] == 'yes') {
                                                            echo 'active';
                                                        }
                                                        ?>"> <input type="radio" <?php
                                                                   if ($styledata[7] == 'yes') {
                                                                       echo 'checked';
                                                                   }
                                                                   ?> name="sb-image-image-autoplay" id="sb-image-image-autoplay-yes" oxilab-alert="Carousel Autoplay" class="oxilab-alert-change"  autocomplete="off" value="yes">Yes</label>
                                                        <label class="btn btn-primary <?php
                                                        if ($styledata[7] == 'no') {
                                                            echo 'active';
                                                        }
                                                        ?>"> <input type="radio" <?php
                                                                   if ($styledata[7] == 'no') {
                                                                       echo 'checked';
                                                                   }
                                                                   ?> name="sb-image-image-autoplay" id="sb-image-image-autoplay-no"  oxilab-alert="Carousel Autoplay" class="oxilab-alert-change" autocomplete="off" value="no"> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-auto-timing" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Slide Autoplay moveable Time 1 Seconds = 1000ms" >Autoplay Time</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number"  oxilab-alert="Autoplay Time" class="oxilab-alert-change form-control" min="100" step="10" max="10000" id="sb-image-auto-timing" name="sb-image-auto-timing" value="<?php echo $styledata[9]; ?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="oxilab-tabs-content-div-50">
                                        <div class="oxilab-tabs-content-div">
                                            <div class="head-oxi">
                                                Animation
                                            </div>
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-animation" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Select Your Image Viewing Animation">Viewing Animation <?php echo $sbimageproonly; ?></label>
                                                <div class="col-sm-6 nopadding">
                                                    <select  oxilab-alert="Animation" class="oxilab-alert-change form-control" id="sb-image-item" name="sb-image-animation">
                                                        <optgroup label="No Animation">
                                                            <option  <?php
                                                            if ($styledata[19] == '') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="">No Animation</option>
                                                        </optgroup>
                                                        <optgroup label="Attention Seekers">
                                                            <option <?php
                                                            if ($styledata[19] == 'bounce') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="bounce">bounce</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'flash') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="flash">flash</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'pulse') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="pulse">pulse</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'rubberBand') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="rubberBand">rubberBand</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'shake') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="shake">shake</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'swing') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="swing">swing</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'tada') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="tada">tada</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'wobble') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="wobble">wobble</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'jello') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="jello">jello</option>
                                                        </optgroup>

                                                        <optgroup label="Bouncing Entrances">
                                                            <option <?php
                                                            if ($styledata[19] == 'bounceIn') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="bounceIn">bounceIn</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'bounceInDown') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="bounceInDown">bounceInDown</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'bounceInLeft') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="bounceInLeft">bounceInLeft</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'bounceInRight') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="bounceInRight">bounceInRight</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'bounceInUp') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="bounceInUp">bounceInUp</option>
                                                        </optgroup>
                                                        <optgroup label="Fading Entrances">
                                                            <option <?php
                                                            if ($styledata[19] == 'fadeIn') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="fadeIn">fadeIn</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'fadeInDown') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="fadeInDown">fadeInDown</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'fadeInDownBig') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="fadeInDownBig">fadeInDownBig</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'fadeInLeft') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="fadeInLeft">fadeInLeft</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'fadeInLeftBig') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="fadeInLeftBig">fadeInLeftBig</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'fadeInRight') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="fadeInRight">fadeInRight</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'fadeInRightBig') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="fadeInRightBig">fadeInRightBig</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'fadeInUp') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="fadeInUp">fadeInUp</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'fadeInUpBig') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="fadeInUpBig">fadeInUpBig</option>
                                                        </optgroup>

                                                        <optgroup label="Flippers">
                                                            <option <?php
                                                            if ($styledata[19] == 'flip') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="flip">flip</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'flipInX') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="flipInX">flipInX</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'flipInY') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="flipInY">flipInY</option>
                                                        </optgroup>

                                                        <optgroup label="Lightspeed">
                                                            <option <?php
                                                            if ($styledata[19] == 'lightSpeedIn') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="lightSpeedIn">lightSpeedIn</option>
                                                        </optgroup>

                                                        <optgroup label="Rotating Entrances">
                                                            <option <?php
                                                            if ($styledata[19] == 'rotateIn') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="rotateIn">rotateIn</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'rotateInDownLeft') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="rotateInDownLeft">rotateInDownLeft</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'rotateInDownRight') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="rotateInDownRight">rotateInDownRight</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'rotateInUpLeft') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="rotateInUpLeft">rotateInUpLeft</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'rotateInUpRight') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="rotateInUpRight">rotateInUpRight</option>
                                                        </optgroup>

                                                        <optgroup label="Sliding Entrances">
                                                            <option <?php
                                                            if ($styledata[19] == 'slideInUp') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="slideInUp">slideInUp</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'slideInDown') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="slideInDown">slideInDown</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'slideInLeft') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="slideInLeft">slideInLeft</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'slideInRight') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="slideInRight">slideInRight</option>
                                                        </optgroup>

                                                        <optgroup label="Zoom Entrances">
                                                            <option <?php
                                                            if ($styledata[19] == 'zoomIn') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="zoomIn">zoomIn</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'zoomInDown') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="zoomInDown">zoomInDown</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'zoomInLeft') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="zoomInLeft">zoomInLeft</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'zoomInRight') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="zoomInRight">zoomInRight</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'zoomInUp') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="zoomInUp">zoomInUp</option>
                                                        </optgroup>

                                                        <optgroup label="Zoom Exits">
                                                            <option <?php
                                                            if ($styledata[19] == 'zoomOut') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="zoomOut">zoomOut</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'zoomOutDown') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="zoomOutDown">zoomOutDown</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'zoomOutLeft') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="zoomOutLeft">zoomOutLeft</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'zoomOutRight') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="zoomOutRight">zoomOutRight</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'zoomOutUp') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="zoomOutUp">zoomOutUp</option>
                                                        </optgroup>

                                                        <optgroup label="Specials">
                                                            <option <?php
                                                            if ($styledata[19] == 'hinge') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="hinge">hinge</option>
                                                            <option <?php
                                                            if ($styledata[19] == 'jackInTheBox') {
                                                                echo 'selected';
                                                            }
                                                            ?> value="jackInTheBox">jackInTheBox</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-animation-duration" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Select Your Animation Duration While image will Showing" >Animation Duration</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number"  oxilab-alert="Animation Duration" class="oxilab-alert-change form-control" min="0" step="0.1" max="10" id="sb-image-animation-duration" name="sb-image-animation-duration" value="<?php echo $styledata[21]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="oxilab-tabs-content-div">
                                            <div class="head-oxi">
                                                Box Shadow
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-box-shadow" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Box Shadow with Color" >Box Shadow <?php echo $sbimageproonly; ?></label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-box-shadow" name="sb-image-box-shadow" value="<?php echo $styledata[25]; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm">
                                                <label for="box-shadow-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Box Shadow Color">Box Shadow Color</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="numer" class="form-control sb-image-vendor-color" data-format-orphita="rgb" data-opacity-orphita="true"  id="box-shadow-color" name="box-shadow-color" value="<?php echo $styledata[27]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="oxilab-tabs-content-div">
                                            <div class="head-oxi">
                                                Inner Shadow
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-inner-shadow" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Inner Shadow with Color" >Inner Shadow <?php echo $sbimageproonly; ?></label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-inner-shadow" name="sb-image-inner-shadow" value="<?php echo $styledata[29]; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm">
                                                <label for="inner-shadow-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Inner Shadow Color">Inner Shadow Color</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="numer" class="form-control sb-image-vendor-color" data-format-orphita="rgb" data-opacity-orphita="true"  id="inner-shadow-color" name="inner-shadow-color" value="<?php echo $styledata[31]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-5">
                                    <div class="oxilab-tabs-content-div-50">
                                        <div class="oxilab-tabs-content-div">
                                            <div class="head-oxi">
                                                Heading
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-heading-font-size" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Inner Shadow with Color" >Heading Font Size</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-heading-font-size" name="sb-image-heading-font-size" value="<?php echo $styledata[33]; ?>">
                                                </div>
                                            </div>     
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-heading-font-family" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your heading Preferred font, Based on Google Font"> Heading Font Family <?php echo $sbimageproonly; ?></label>
                                                <div class="col-sm-6 nopadding">
                                                    <input class="sb-image-admin-font" type="text" name="sb-image-heading-font-family" id="sb-image-heading-font-family" value="<?php echo $styledata[35]; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-heading-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Heading Font Weight">Heading Font Weight </label>
                                                <div class="col-sm-6 nopadding">
                                                    <select class="form-control" id="sb-image-heading-font-weight" name="sb-image-heading-font-weight">
                                                        <option <?php
                                                        if ($styledata[37] == '100') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="100">100</option>
                                                        <option <?php
                                                        if ($styledata[37] == '200') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="200">200</option>
                                                        <option <?php
                                                        if ($styledata[37] == '300') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="300">300</option>
                                                        <option <?php
                                                        if ($styledata[37] == '400') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="400">400</option>
                                                        <option <?php
                                                        if ($styledata[37] == '500') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="500">500</option>
                                                        <option <?php
                                                        if ($styledata[37] == '600') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="600">600</option>
                                                        <option <?php
                                                        if ($styledata[37] == '700') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="700">700</option>
                                                        <option <?php
                                                        if ($styledata[37] == '800') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="800">800</option>
                                                        <option <?php
                                                        if ($styledata[37] == '900') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="900">900</option>
                                                        <option <?php
                                                        if ($styledata[37] == 'normal') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="normal">Normal</option>
                                                        <option <?php
                                                        if ($styledata[37] == 'bold') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="bold">Bold</option>
                                                        <option <?php
                                                        if ($styledata[37] == 'lighter') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="lighter">Lighter</option>
                                                        <option <?php
                                                        if ($styledata[37] == 'initial') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="initial">Initial</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-heading-font-style" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Heading Font Style">Heading Font Style</label>
                                                <div class="col-sm-6 nopadding">
                                                    <select class="form-control" id="sb-image-heading-font-style" name="sb-image-heading-font-style">
                                                        <option <?php
                                                        if ($styledata[39] == 'normal') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="normal">Normal</option>
                                                        <option <?php
                                                        if ($styledata[39] == 'italic') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="italic">Italic</option>
                                                        <option <?php
                                                        if ($styledata[39] == 'oblique') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="oblique">Oblique</option>
                                                        <option <?php
                                                        if ($styledata[39] == 'initial') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="initial">Initial</option>
                                                        <option <?php
                                                        if ($styledata[39] == 'inherit') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="inherit">Inherit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-heading-padding-bottom" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize your Heading Padding to make Bigger or Smaller to Background" >Heading Padding</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-heading-padding-bottom" name="sb-image-heading-padding-bottom" value="<?php echo $styledata[43]; ?>">
                                                </div>
                                            </div> 
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-heading-margin-top" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize your Heading Margin Bottom to make distance from Top" >Heading Margin Top</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-heading-margin-top" name="sb-image-heading-margin-top" value="<?php echo $styledata[75]; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-heading-margin-left-right" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Redius Left Right of Background Size" >Heading Margin Left Right</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-heading-margin-left-right" name="sb-image-heading-margin-left-right" value="<?php echo $styledata[73]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="oxilab-tabs-content-div">
                                            <div class="head-oxi">
                                                Heading Underline
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize your Link Opening">Heading Underline</label>
                                                <div class="col-sm-6 nopadding">
                                                    <div class="btn-group" data-toggle="buttons">
                                                        <label class="btn btn-primary <?php
                                                        if ($styledata[41] == 'yes') {
                                                            echo 'active';
                                                        }
                                                        ?>"> <input type="radio" <?php
                                                                   if ($styledata[41] == 'yes') {
                                                                       echo 'checked';
                                                                   }
                                                                   ?> name="sb-image-heading-underline" oxilab-alert="Heading Underline" class="oxilab-alert-change"  autocomplete="off" value="yes">Yes</label>
                                                        <label class="btn btn-primary <?php
                                                        if ($styledata[41] == 'no') {
                                                            echo 'active';
                                                        }
                                                        ?>"> <input type="radio" <?php
                                                                   if ($styledata[41] == 'no') {
                                                                       echo 'checked';
                                                                   }
                                                                   ?> name="sb-image-heading-underline" oxilab-alert="Heading Underline" class="oxilab-alert-change"  autocomplete="off" value="no">No </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-heading-margin-bottom" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize your Heading Margin Bottom to make distance from Description" >Heading Margin Bottom</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-heading-margin-bottom" name="sb-image-heading-margin-bottom" value="<?php echo $styledata[45]; ?>">
                                                </div>
                                            </div> 
                                        </div>

                                    </div>
                                    <div class="oxilab-tabs-content-div-50">
                                        <div class="oxilab-tabs-content-div">
                                            <div class="head-oxi">
                                                Description
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-description-font-size" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Description Font Size" >Description Font Size</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-description-font-size" name="sb-image-description-font-size" value="<?php echo $styledata[47]; ?>">
                                                </div>
                                            </div> 
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-description-font-family" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Description Preferred font, Based on Google Font"> Description Font Family <?php echo $sbimageproonly; ?></label>
                                                <div class="col-sm-6 nopadding">
                                                    <input class="sb-image-admin-font" type="text" name="sb-image-description-font-family" id="sb-image-description-font-family" value="<?php echo $styledata[49]; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-description-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Description Font Weight">Description Font Weight </label>
                                                <div class="col-sm-6 nopadding">
                                                    <select class="form-control" id="sb-image-description-font-weight" name="sb-image-description-font-weight">
                                                        <option <?php
                                                        if ($styledata[51] == '100') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="100">100</option>
                                                        <option <?php
                                                        if ($styledata[51] == '200') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="200">200</option>
                                                        <option <?php
                                                        if ($styledata[51] == '300') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="300">300</option>
                                                        <option <?php
                                                        if ($styledata[51] == '400') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="400">400</option>
                                                        <option <?php
                                                        if ($styledata[51] == '500') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="500">500</option>
                                                        <option <?php
                                                        if ($styledata[51] == '600') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="600">600</option>
                                                        <option <?php
                                                        if ($styledata[51] == '700') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="700">700</option>
                                                        <option <?php
                                                        if ($styledata[51] == '800') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="800">800</option>
                                                        <option <?php
                                                        if ($styledata[51] == '900') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="900">900</option>
                                                        <option <?php
                                                        if ($styledata[51] == 'normal') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="normal">Normal</option>
                                                        <option <?php
                                                        if ($styledata[51] == 'bold') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="bold">Bold</option>
                                                        <option <?php
                                                        if ($styledata[51] == 'lighter') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="lighter">Lighter</option>
                                                        <option <?php
                                                        if ($styledata[51] == 'initial') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="initial">Initial</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-description-font-style" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Description Font Style">Description Font Style</label>
                                                <div class="col-sm-6 nopadding">
                                                    <select class="form-control" id="sb-image-description-font-style" name="sb-image-description-font-style">
                                                        <option <?php
                                                        if ($styledata[53] == 'normal') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="normal">Normal</option>
                                                        <option <?php
                                                        if ($styledata[53] == 'italic') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="italic">Italic</option>
                                                        <option <?php
                                                        if ($styledata[53] == 'oblique') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="oblique">Oblique</option>
                                                        <option <?php
                                                        if ($styledata[53] == 'initial') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="initial">Initial</option>
                                                        <option <?php
                                                        if ($styledata[53] == 'inherit') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="inherit">Inherit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-description-margin-bottom" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize your Description Margin Bottom to make distance from Button" >Description Margin Bottom</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-description-margin-bottom" name="sb-image-description-margin-bottom" value="<?php echo $styledata[55]; ?>">
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="oxilab-tabs-content-div">
                                            <div class="head-oxi">
                                                Button
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-button-font-size" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Description Font Size" >Button Font Size</label>
                                                <div class="col-sm-6 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-button-font-size" name="sb-image-button-font-size" value="<?php echo $styledata[57]; ?>">
                                                </div>
                                            </div> 
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-button-font-family" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your Button Preferred font, Based on Google Font">Button Font Family <?php echo $sbimageproonly; ?></label>
                                                <div class="col-sm-6 nopadding">
                                                    <input class="sb-image-admin-font" type="text" name="sb-image-button-font-family" id="sb-image-button-font-family" value="<?php echo $styledata[59]; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-button-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Button Font Weight">Button Font Weight </label>
                                                <div class="col-sm-6 nopadding">
                                                    <select class="form-control" id="sb-image-button-font-weight" name="sb-image-button-font-weight">
                                                        <option <?php
                                                        if ($styledata[61] == '100') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="100">100</option>
                                                        <option <?php
                                                        if ($styledata[51] == '200') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="200">200</option>
                                                        <option <?php
                                                        if ($styledata[61] == '300') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="300">300</option>
                                                        <option <?php
                                                        if ($styledata[61] == '400') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="400">400</option>
                                                        <option <?php
                                                        if ($styledata[61] == '500') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="500">500</option>
                                                        <option <?php
                                                        if ($styledata[61] == '600') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="600">600</option>
                                                        <option <?php
                                                        if ($styledata[61] == '700') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="700">700</option>
                                                        <option <?php
                                                        if ($styledata[61] == '800') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="800">800</option>
                                                        <option <?php
                                                        if ($styledata[61] == '900') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="900">900</option>
                                                        <option <?php
                                                        if ($styledata[61] == 'normal') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="normal">Normal</option>
                                                        <option <?php
                                                        if ($styledata[61] == 'bold') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="bold">Bold</option>
                                                        <option <?php
                                                        if ($styledata[61] == 'lighter') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="lighter">Lighter</option>
                                                        <option <?php
                                                        if ($styledata[61] == 'initial') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="initial">Initial</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm">
                                                <label for="sb-image-button-font-style" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Button Font Style">Button Font Style</label>
                                                <div class="col-sm-6 nopadding">
                                                    <select class="form-control" id="sb-image-button-font-style" name="sb-image-button-font-style">
                                                        <option <?php
                                                        if ($styledata[63] == 'normal') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="normal">Normal</option>
                                                        <option <?php
                                                        if ($styledata[63] == 'italic') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="italic">Italic</option>
                                                        <option <?php
                                                        if ($styledata[63] == 'oblique') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="oblique">Oblique</option>
                                                        <option <?php
                                                        if ($styledata[63] == 'initial') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="initial">Initial</option>
                                                        <option <?php
                                                        if ($styledata[63] == 'inherit') {
                                                            echo 'selected';
                                                        }
                                                        ?> value="inherit">Inherit</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-button-padding" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Button with Padding to make Smaller or Bigger. 1st one for left right and 2nd for top Bottom" >Button Padding</label>
                                                <div class="col-sm-3 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-button-padding-left" name="sb-image-button-padding-left" value="<?php echo $styledata[65]; ?>">
                                                </div>
                                                <div class="col-sm-3 nopadding">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-button-padding-top" name="sb-image-button-padding-top" value="<?php echo $styledata[67]; ?>">
                                                </div>
                                            </div> 
                                            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                                                <label for="sb-image-button-radius" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Button with Radius to make Circle Botton">Button Radius</label>
                                                <div class="col-sm-6">
                                                    <input type="number" class="form-control" min="0" step="1" max="100" id="sb-image-button-radius" name="sb-image-button-radius" value="<?php echo $styledata[69]; ?>">
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                </div>
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-2">
                                    <div class="sb-image-admin-style-settings-div-css">
                                        <div class="form-group">
                                            <label for="sb-image-css">Add Your Custom CSS Code Here</label>
                                            <textarea class="form-control" rows="4" id="sb-image-css" name="sb-image-css"><?php echo $styledata[71]; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctu-ulitate-style-3-tabs" id="ctu-ulitate-style-3-id-1">
                                    <?php echo sb_image_video_toturial(); ?>
                                </div>
                            </div>
                        </div>    

                        <div class="sb-image-style-setting-save">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="data-submit" value="Save">
                            <?php wp_nonce_field("sbimagestylecss") ?>
                        </div>
                    </form>
                    <script type="text/javascript">
                        jQuery(document).ready(function () {
                            jQuery(".ctu-ulimate-style-3 li:first").addClass("active");
                            jQuery(".ctu-ulitate-style-3-tabs:first").addClass("active");
                            jQuery(".ctu-ulimate-style-3 li").click(function () {
                                jQuery(".ctu-ulimate-style-3 li").removeClass("active");
                                jQuery(this).toggleClass("active");
                                jQuery(".ctu-ulitate-style-3-tabs").removeClass("active");
                                var activeTab = jQuery(this).attr("ref");
                                jQuery(activeTab).addClass("active");
                            });
                        });
                        jQuery(document).ready(function () {
                            jQuery("#sb-image-preview-data-background").on("change", function () {
                                var idvalue = jQuery('#sb-image-preview-data-background').val();
                                jQuery("<style type='text/css'> #sb-image-preview-data{ background-color:" + idvalue + ";} </style>").appendTo("#sb-image-preview-data");
                            });
                        });
                    </script>  
                </div>
                <div class="sb-image-style-settings-preview">
                    <div class="sb-image-style-settings-preview-heading">
                        <div class="sb-image-style-settings-preview-heading-left">
                            Preview
                        </div>
                        <div class="sb-image-style-settings-preview-heading-right">
                            <input type="text" class="form-control sb-image-vendor-color"  data-format="rgb" data-opacity="true"  id="sb-image-preview-data-background" name="sb-image-preview-data-background" value="rgba(255, 255, 255, 1)">
                        </div>
                    </div>
                    <div class="sb-image-preview-data" id="sb-image-preview-data">

                        <?php sb_image_oxi_shortcode_function($styleid, 'admindata'); ?>
                    </div>

                </div>
            </div>

            <div class="sb-image-style-panel-right">
                <div class="sb-image-add-new-item-panel">
                    <div class="sb-image-add-new-item-heading">
                        Add New
                    </div>
                    <div class="sb-image-add-new-item" id="sb-image-add-new-item">
                        <span>
                            <i class="fa fa-plus-circle"></i>
                            Add new Items
                        </span>

                    </div>
                </div>
                <div class="sb-image-shortcode">
                    <div class="sb-image-shortcode-heading">
                        Shortcodes
                    </div>
                    <div class="sb-image-shortcode-body">
                        <em>Shortcode for posts/pages/plugins</em>
                        <p>Copy &amp; paste the shortcode directly into any WordPress post or page.</p>
                        <input type="text" class="form-control" onclick="this.setSelectionRange(0, this.value.length)" value="[sb_image_oxi id=&quot;<?php echo $styleid; ?>&quot;]">
                        <span></span>
                        <em>Shortcode for templates/themes</em>
                        <p>Copy &amp; paste this code into a template file to include the slideshow within your theme.</p>
                        <input type="text" class="form-control" onclick="this.setSelectionRange(0, this.value.length)" value="&lt;?php echo do_shortcode(&#039;[sb_image_oxi  id=&quot;<?php echo $styleid; ?>&quot;]&#039;); ?&gt;">
                        <span></span>
                        <em>Apply on Visual Composer</em>
                        <p>Go on Visual Composer and get Our element on Content bar as Image Hover Ultimate</p>
                    </div>
                </div>
                <div class="sb-image-add-new-item-panel">
                    <div class="sb-image-add-new-item-heading">
                        Image Rearrange
                    </div>
                    <div class="sb-image-add-new-item" id="sb-image-drag-and-drop">
                        <span>
                            <i class="fa fa-cogs"></i>
                        </span>

                    </div>
                </div>
                <div id="sb-image-drag-and-drop-data" class="modal fade bd-example-modal-sm" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <form id="sb-image-drag-submit">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Rearrange Image</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="alert text-center" id="sb-image-drag-saving">
                                        <i class="fa fa-spinner fa-spin"></i>
                                    </div>
                                    <?php
                                    echo ' <ul class="list-group" id="sb-image-drag-drop">';
                                    foreach ($listdata as $value) {
                                        echo '<li class="list-group-item" id ="' . $value['id'] . '"><img src="' . $value['image'] . '"  width="80"></li>';
                                    }
                                    echo '</ul>';
                                    ?>
                                </div>
                                <div class="modal-footer">    
                                    <input type="hidden" name="sb-image-ajax-nonce" id="sb-image-ajax-nonce" value="<?php echo wp_create_nonce("sb_image_ajax_data"); ?>"/>
                                    <button type="button" id="sb-image-drag-and-drop-data-close" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" id="sb-image-drag-and-drop-data-submit" class="btn btn-primary" value="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>     
            </div>
            <div id="sb-image-add-new-item-data" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <form method="POST">
                        <?php wp_nonce_field("sbimagesavedata") ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add or Modify Form of Image Hover</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="sb-image-title">Title</label>
                                    <input type="text "class="form-control" id="sb-image-title" name="sb-image-title" value="<?php echo $title; ?>">
                                    <small class="form-text text-muted">Add Your Image Hover Title.</small>
                                </div>
                                <div class="form-group">
                                    <label for="sb-image-desc">Description:</label>
                                    <textarea class="form-control" rows="4" id="sb-image-desc" name="sb-image-desc"><?php echo $files; ?></textarea>
                                    <small class="form-text text-muted">Add Your Description Unless make it blank.</small>
                                </div>
                                <div class="form-group">
                                    <label for="sb-image-bottom">Bottom Text</label>
                                    <input type="text "class="form-control" id="sb-image-bottom" name="sb-image-bottom" value="<?php echo $bottom; ?>">
                                    <small class="form-text text-muted">Add Bottom text If you Need Unless make it blank</small>
                                </div>
                                <div class="form-group">
                                    <label for="sb-image-link">Link</label>
                                    <input type="text "class="form-control" id="sb-image-link" name="sb-image-link" value="<?php echo $link; ?>">
                                    <small class="form-text text-muted">Add Your Desire Link or Url Unless make it blank</small>
                                </div>
                                <div class="form-group">
                                    <label>Image Link</label>
                                    <div class="col-xs-12-div">
                                        <div class="col-xs-8-div">
                                            <input type="text "class="form-control" id="sb-image-upload-url" name="sb-image-upload-url" value="<?php echo $image; ?>">
                                        </div>
                                        <div class="col-xs-4-div">
                                            <button type="button" id="sb-image-upload-button" name="sb-image-upload-button" class="btn btn-default">Upload Image</button>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Add or Modify Your Image link.</small>
                                </div>
                                <div class="form-group">
                                    <label for="ctu-title">Hover Image <?php echo $sbimageproonly; ?></label>
                                    <div class="col-xs-12-div">
                                        <div class="col-xs-8-div">
                                            <input type="text "class="form-control" id="sb-image-hover-upload-url" name="sb-image-hover-upload-url" value="<?php echo $hoverimage; ?>">
                                        </div>
                                        <div class="col-xs-4-div">
                                            <button type="button" id="sb-image-hover-upload-button" name="sb-image-hover-upload-button" class="btn btn-default">Upload Image</button>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Add Image on Hover Background. If not make it blank</small>
                                </div>
                            </div>
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Customize</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row form-group-sm">
                                    <label for="image-style" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Select Your Hover Effects">Style</label>
                                    <div class="col-sm-6 nopadding">
                                        <select class="form-control" name="image-style" id="image-style" size="1">
                                            <option value="sb-square-effects-1" <?php
                                            if ($imagestyle == 'sb-square-effects-1') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 1</option>
                                            <option value="sb-square-effects-2" <?php
                                            if ($imagestyle == 'sb-square-effects-2') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 2</option>
                                            <option value="sb-square-effects-3" <?php
                                            if ($imagestyle == 'sb-square-effects-3') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 3</option>
                                            <option value="sb-square-effects-4" <?php
                                            if ($imagestyle == 'sb-square-effects-4') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 4</option>
                                            <option value="sb-square-effects-5" <?php
                                            if ($imagestyle == 'sb-square-effects-5') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 5</option>
                                            <option value="sb-square-effects-6" <?php
                                            if ($imagestyle == 'sb-square-effects-6') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 6</option>
                                            <option value="sb-square-effects-7" <?php
                                            if ($imagestyle == 'sb-square-effects-7') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 7</option>
                                            <option value="sb-square-effects-8" <?php
                                            if ($imagestyle == 'sb-square-effects-8') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 8</option>
                                            <option value="sb-square-effects-9" <?php
                                            if ($imagestyle == 'sb-square-effects-9') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 9</option>
                                            <option value="sb-square-effects-10" <?php
                                            if ($imagestyle == 'sb-square-effects-10') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 10</option>
                                            <option value="sb-square-effects-11" <?php
                                            if ($imagestyle == 'sb-square-effects-11') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 11</option>
                                            <option value="sb-square-effects-12" <?php
                                            if ($imagestyle == 'sb-square-effects-12') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 12</option>
                                            <option value="sb-square-effects-13" <?php
                                            if ($imagestyle == 'sb-square-effects-13') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 13</option>
                                            <option value="sb-square-effects-14" <?php
                                            if ($imagestyle == 'sb-square-effects-14') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 14</option>
                                            <option value="sb-square-effects-15" <?php  if ($imagestyle == 'sb-square-effects-15') {  echo 'selected'; } ?>>Effects 15</option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-16') ?>"  <?php  if ($imagestyle == 'sb-square-effects-16') {  echo 'selected'; } ?> >Effects 16 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-17') ?>"  <?php  if ($imagestyle == 'sb-square-effects-17') {  echo 'selected'; } ?>>Effects 17 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-18') ?>"  <?php  if ($imagestyle == 'sb-square-effects-18') {  echo 'selected'; } ?>>Effects 18 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-19') ?>"  <?php  if ($imagestyle == 'sb-square-effects-19') {  echo 'selected'; } ?>>Effects 19 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-20') ?>"  <?php  if ($imagestyle == 'sb-square-effects-20') {  echo 'selected'; } ?>>Effects 20 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-21') ?>"  <?php  if ($imagestyle == 'sb-square-effects-21') {  echo 'selected'; } ?>>Effects 21 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-22') ?>"  <?php  if ($imagestyle == 'sb-square-effects-22') {  echo 'selected'; } ?>>Effects 22 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-23') ?>"  <?php  if ($imagestyle == 'sb-square-effects-23') {  echo 'selected'; } ?>>Effects 23 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-24') ?>"  <?php  if ($imagestyle == 'sb-square-effects-24') {  echo 'selected'; } ?>>Effects 24 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-25') ?>"  <?php  if ($imagestyle == 'sb-square-effects-25') {  echo 'selected'; } ?>>Effects 25 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-26') ?>"  <?php  if ($imagestyle == 'sb-square-effects-26') {  echo 'selected'; } ?>>Effects 26 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-27') ?>"  <?php  if ($imagestyle == 'sb-square-effects-27') {  echo 'selected'; } ?>>Effects 27 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-28') ?>"  <?php  if ($imagestyle == 'sb-square-effects-28') {  echo 'selected'; } ?>>Effects 28 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-29') ?>"  <?php  if ($imagestyle == 'sb-square-effects-29') {  echo 'selected'; } ?>>Effects 29 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-30') ?>"  <?php  if ($imagestyle == 'sb-square-effects-30') {  echo 'selected'; } ?>>Effects 30 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-31') ?>"  <?php  if ($imagestyle == 'sb-square-effects-31') {  echo 'selected'; } ?>>Effects 31 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-32') ?>"  <?php  if ($imagestyle == 'sb-square-effects-32') {  echo 'selected'; } ?>>Effects 32 <?php echo $sbimageproonly; ?></option>
                                            <option value="<?php sbimageproonlydata('sb-square-effects-33') ?>"  <?php  if ($imagestyle == 'sb-square-effects-33') {  echo 'selected'; } ?>>Effects 33 <?php echo $sbimageproonly; ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row form-group-sm">
                                    <label for="sb-image-effects" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Select Your Hover Effects">Effects</label>
                                    <div class="col-sm-6 nopadding">
                                        <select  class="form-control" name="sb-image-effects" id="sb-image-effects" size="1">
                                            <option value="sb-square-effects-1 sb-left-to-right" class="sub-sb-square-effects-1" <?php
                                            if ($imageeffects == 'sb-square-effects-1 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-1 sb-right-to-left" class="sub-sb-square-effects-1" <?php
                                            if ($imageeffects == 'sb-square-effects-1 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-1 sb-top-to-bottom" class="sub-sb-square-effects-1" <?php
                                            if ($imageeffects == 'sb-square-effects-1 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-1 sb-bottom-to-top" class="sub-sb-square-effects-1" <?php
                                            if ($imageeffects == 'sb-square-effects-1 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-2 sb-left-to-right" class="sub-sb-square-effects-2" <?php
                                            if ($imageeffects == 'sb-square-effects-2 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-2 sb-right-to-left" class="sub-sb-square-effects-2" <?php
                                            if ($imageeffects == 'sb-square-effects-2 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-2 sb-top-to-bottom" class="sub-sb-square-effects-2" <?php
                                            if ($imageeffects == 'sb-square-effects-2 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-2 sb-bottom-to-top" class="sub-sb-square-effects-2" <?php
                                            if ($imageeffects == 'sb-square-effects-2 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-3" class="sub-sb-square-effects-3" <?php
                                            if ($imageeffects == 'sb-square-effects-3') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 3</option>
                                            <option value="sb-square-effects-4 sb-left-to-right" class="sub-sb-square-effects-4" <?php
                                            if ($imageeffects == 'sb-square-effects-4 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-4 sb-right-to-left" class="sub-sb-square-effects-4" <?php
                                            if ($imageeffects == 'sb-square-effects-4 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-4 sb-top-to-bottom" class="sub-sb-square-effects-4" <?php
                                            if ($imageeffects == 'sb-square-effects-4 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-4 sb-bottom-to-top" class="sub-sb-square-effects-4" <?php
                                            if ($imageeffects == 'sb-square-effects-4 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-5 sb-left-to-right" class="sub-sb-square-effects-5" <?php
                                            if ($imageeffects == 'sb-square-effects-5 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-5 sb-right-to-left" class="sub-sb-square-effects-5" <?php
                                            if ($imageeffects == 'sb-square-effects-5 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-5 sb-top-to-bottom" class="sub-sb-square-effects-5" <?php
                                            if ($imageeffects == 'sb-square-effects-5 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-5 sb-bottom-to-top" class="sub-sb-square-effects-5" <?php
                                            if ($imageeffects == 'sb-square-effects-5 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-6 sb-left-to-right" class="sub-sb-square-effects-6" <?php
                                            if ($imageeffects == 'sb-square-effects-6 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-6 sb-right-to-left" class="sub-sb-square-effects-6" <?php
                                            if ($imageeffects == 'sb-square-effects-6 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-6 sb-top-to-bottom" class="sub-sb-square-effects-6" <?php
                                            if ($imageeffects == 'sb-square-effects-6 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-6 sb-bottom-to-top" class="sub-sb-square-effects-6" <?php
                                            if ($imageeffects == 'sb-square-effects-6 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-7 sb-left-to-right" class="sub-sb-square-effects-7" <?php
                                            if ($imageeffects == 'sb-square-effects-7 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-7 sb-right-to-left" class="sub-sb-square-effects-7" <?php
                                            if ($imageeffects == 'sb-square-effects-7 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-7 sb-top-to-bottom" class="sub-sb-square-effects-7" <?php
                                            if ($imageeffects == 'sb-square-effects-7 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-7 sb-bottom-to-top" class="sub-sb-square-effects-7" <?php
                                            if ($imageeffects == 'sb-square-effects-7 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-8 sb-left-to-right" class="sub-sb-square-effects-8" <?php
                                            if ($imageeffects == 'sb-square-effects-8 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-8 sb-right-to-left" class="sub-sb-square-effects-8" <?php
                                            if ($imageeffects == 'sb-square-effects-8 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-8 sb-top-to-bottom" class="sub-sb-square-effects-8" <?php
                                            if ($imageeffects == 'sb-square-effects-8 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-8 sb-bottom-to-top" class="sub-sb-square-effects-8" <?php
                                            if ($imageeffects == 'sb-square-effects-8 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-9 scale-up" class="sub-sb-square-effects-9" <?php
                                            if ($imageeffects == 'sb-square-effects-9 scale-up') {
                                                echo 'selected';
                                            }
                                            ?>>Scale Up</option>
                                            <option value="sb-square-effects-9 scale-down" class="sub-sb-square-effects-9" <?php
                                            if ($imageeffects == 'sb-square-effects-9 scale-down') {
                                                echo 'selected';
                                            }
                                            ?>>Scale Down</option>
                                            <option value="sb-square-effects-9 scale-down-up" class="sub-sb-square-effects-9" <?php
                                            if ($imageeffects == 'sb-square-effects-9 scale-down-up') {
                                                echo 'selected';
                                            }
                                            ?>>Scale Down Up</option>
                                            <option value="sb-square-effects-10 sb-left-to-right" class="sub-sb-square-effects-10" <?php
                                            if ($imageeffects == 'sb-square-effects-10 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-10 sb-right-to-left" class="sub-sb-square-effects-10" <?php
                                            if ($imageeffects == 'sb-square-effects-10 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-10 sb-top-to-bottom" class="sub-sb-square-effects-10" <?php
                                            if ($imageeffects == 'sb-square-effects-10 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-10 sb-bottom-to-top" class="sub-sb-square-effects-10" <?php
                                            if ($imageeffects == 'sb-square-effects-10 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-11 sb-top-to-bottom" class="sub-sb-square-effects-11" <?php
                                            if ($imageeffects == 'sb-square-effects-11 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-11 sb-bottom-to-top" class="sub-sb-square-effects-11" <?php
                                            if ($imageeffects == 'sb-square-effects-11 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-12 sb-left-to-right" class="sub-sb-square-effects-12" <?php
                                            if ($imageeffects == 'sb-square-effects-12 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-12 sb-right-to-left" class="sub-sb-square-effects-12" <?php
                                            if ($imageeffects == 'sb-square-effects-12 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-12 sb-top-to-bottom" class="sub-sb-square-effects-12" <?php
                                            if ($imageeffects == 'sb-square-effects-12 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-12 sb-bottom-to-top" class="sub-sb-square-effects-12" <?php
                                            if ($imageeffects == 'sb-square-effects-12 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-13 sb-left-to-right" class="sub-sb-square-effects-13" <?php
                                            if ($imageeffects == 'sb-square-effects-13 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-13 sb-right-to-left" class="sub-sb-square-effects-13" <?php
                                            if ($imageeffects == 'sb-square-effects-13 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-13 sb-top-to-bottom" class="sub-sb-square-effects-13" <?php
                                            if ($imageeffects == 'sb-square-effects-13 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-13 sb-bottom-to-top" class="sub-sb-square-effects-13" <?php
                                            if ($imageeffects == 'sb-square-effects-13 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-14 sb-left-to-right" class="sub-sb-square-effects-14" <?php
                                            if ($imageeffects == 'sb-square-effects-14 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-14 sb-right-to-left" class="sub-sb-square-effects-14" <?php
                                            if ($imageeffects == 'sb-square-effects-14 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-14 sb-top-to-bottom" class="sub-sb-square-effects-14" <?php
                                            if ($imageeffects == 'sb-square-effects-14 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-14 sb-bottom-to-top" class="sub-sb-square-effects-14" <?php
                                            if ($imageeffects == 'sb-square-effects-14 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-15" class="sub-sb-square-effects-15" <?php
                                            if ($imageeffects == 'sb-square-effects-14') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 15</option>
                                            <option value="sb-square-effects-16 sb-left-to-right" class="sub-sb-square-effects-16" <?php
                                            if ($imageeffects == 'sb-square-effects-16 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-16 sb-right-to-left" class="sub-sb-square-effects-16" <?php
                                            if ($imageeffects == 'sb-square-effects-16 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-17" class="sub-sb-square-effects-17" <?php
                                            if ($imageeffects == 'sb-square-effects-17') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 17</option>
                                            <option value="sb-square-effects-18 sb-left-to-right" class="sub-sb-square-effects-18" <?php
                                            if ($imageeffects == 'sb-square-effects-18 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-18 sb-right-to-left" class="sub-sb-square-effects-18" <?php
                                            if ($imageeffects == 'sb-square-effects-18 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-18 sb-top-to-bottom" class="sub-sb-square-effects-18" <?php
                                            if ($imageeffects == 'sb-square-effects-18 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-18 sb-bottom-to-top" class="sub-sb-square-effects-18" <?php
                                            if ($imageeffects == 'sb-square-effects-18 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-19 sb-left-to-right" class="sub-sb-square-effects-19" <?php
                                            if ($imageeffects == 'sb-square-effects-19 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-19 sb-right-to-left" class="sub-sb-square-effects-19" <?php
                                            if ($imageeffects == 'sb-square-effects-19 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-19 sb-top-to-bottom" class="sub-sb-square-effects-19" <?php
                                            if ($imageeffects == 'sb-square-effects-19 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-19 sb-bottom-to-top" class="sub-sb-square-effects-19" <?php
                                            if ($imageeffects == 'sb-square-effects-19 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-20 sb-left-to-right" class="sub-sb-square-effects-20" <?php
                                            if ($imageeffects == 'sb-square-effects-20 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-20 sb-right-to-left" class="sub-sb-square-effects-20" <?php
                                            if ($imageeffects == 'sb-square-effects-20 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-20 sb-top-to-bottom" class="sub-sb-square-effects-20" <?php
                                            if ($imageeffects == 'sb-square-effects-20 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-20 sb-bottom-to-top" class="sub-sb-square-effects-20" <?php
                                            if ($imageeffects == 'sb-square-effects-20 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-21 sb-left-to-right" class="sub-sb-square-effects-21" <?php
                                            if ($imageeffects == 'sb-square-effects-21 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-21 sb-right-to-left" class="sub-sb-square-effects-21" <?php
                                            if ($imageeffects == 'sb-square-effects-21 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-21 sb-top-to-bottom" class="sub-sb-square-effects-21" <?php
                                            if ($imageeffects == 'sb-square-effects-21 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-21 sb-bottom-to-top" class="sub-sb-square-effects-21" <?php
                                            if ($imageeffects == 'sb-square-effects-21 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-22" class="sub-sb-square-effects-22" <?php
                                            if ($imageeffects == 'sb-square-effects-22') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 22</option>
                                            <option value="sb-square-effects-23" class="sub-sb-square-effects-23" <?php
                                            if ($imageeffects == 'sb-square-effects-23') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 23</option>
                                            <option value="sb-square-effects-24" class="sub-sb-square-effects-24" <?php
                                            if ($imageeffects == 'sb-square-effects-24') {
                                                echo 'selected';
                                            }
                                            ?>>In Hover</option>
                                            <option value="sb-square-effects-24 sb-left-to-right" class="sub-sb-square-effects-24" <?php
                                            if ($imageeffects == 'sb-square-effects-24 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-24 sb-right-to-left" class="sub-sb-square-effects-24" <?php
                                            if ($imageeffects == 'sb-square-effects-24 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-24 sb-top-to-bottom" class="sub-sb-square-effects-24" <?php
                                            if ($imageeffects == 'sb-square-effects-24 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-24 sb-bottom-to-top" class="sub-sb-square-effects-24" <?php
                                            if ($imageeffects == 'sb-square-effects-24 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-25 sb-left-to-right" class="sub-sb-square-effects-25" <?php
                                            if ($imageeffects == 'sb-square-effects-25 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-25 sb-right-to-left" class="sub-sb-square-effects-25" <?php
                                            if ($imageeffects == 'sb-square-effects-25 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-25 sb-top-to-bottom" class="sub-sb-square-effects-25" <?php
                                            if ($imageeffects == 'sb-square-effects-25 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-25 sb-bottom-to-top" class="sub-sb-square-effects-25" <?php
                                            if ($imageeffects == 'sb-square-effects-25 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-26 sb-left-to-right" class="sub-sb-square-effects-26" <?php
                                            if ($imageeffects == 'sb-square-effects-26 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-26 sb-right-to-left" class="sub-sb-square-effects-26" <?php
                                            if ($imageeffects == 'sb-square-effects-26 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-26 sb-top-to-bottom" class="sub-sb-square-effects-26" <?php
                                            if ($imageeffects == 'sb-square-effects-26 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-26 sb-bottom-to-top" class="sub-sb-square-effects-26" <?php
                                            if ($imageeffects == 'sb-square-effects-26 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-27 sb-left-to-right" class="sub-sb-square-effects-27" <?php
                                            if ($imageeffects == 'sb-square-effects-27 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-27 sb-right-to-left" class="sub-sb-square-effects-27" <?php
                                            if ($imageeffects == 'sb-square-effects-27 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-27 sb-top-to-bottom" class="sub-sb-square-effects-27" <?php
                                            if ($imageeffects == 'sb-square-effects-27 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-27 sb-bottom-to-top" class="sub-sb-square-effects-27" <?php
                                            if ($imageeffects == 'sb-square-effects-27 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-28 sb-left-to-right" class="sub-sb-square-effects-28" <?php
                                            if ($imageeffects == 'sb-square-effects-28 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-28 sb-right-to-left" class="sub-sb-square-effects-28" <?php
                                            if ($imageeffects == 'sb-square-effects-28 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-28 sb-top-to-bottom" class="sub-sb-square-effects-28" <?php
                                            if ($imageeffects == 'sb-square-effects-28 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-28 sb-bottom-to-top" class="sub-sb-square-effects-28" <?php
                                            if ($imageeffects == 'sb-square-effects-28 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-29 " class="sub-sb-square-effects-29" <?php
                                            if ($imageeffects == 'sb-square-effects-29 ') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 29</option>
                                            <option value="sb-square-effects-29 sb-left-to-right" class="sub-sb-square-effects-29" <?php
                                            if ($imageeffects == 'sb-square-effects-29 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-29 sb-right-to-left" class="sub-sb-square-effects-29" <?php
                                            if ($imageeffects == 'sb-square-effects-29 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-29 sb-top-to-bottom" class="sub-sb-square-effects-29" <?php
                                            if ($imageeffects == 'sb-square-effects-29 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-29 sb-bottom-to-top" class="sub-sb-square-effects-29" <?php
                                            if ($imageeffects == 'sb-square-effects-29 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-30" class="sub-sb-square-effects-30" <?php
                                            if ($imageeffects == 'sb-square-effects-30') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 30</option>
                                            <option value="sb-square-effects-31" class="sub-sb-square-effects-31" <?php
                                            if ($imageeffects == 'sb-square-effects-31') {
                                                echo 'selected';
                                            }
                                            ?>>Effects 31</option>
                                            <option value="sb-square-effects-32 sb-left-to-right" class="sub-sb-square-effects-32" <?php
                                            if ($imageeffects == 'sb-square-effects-32 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-32 sb-right-to-left" class="sub-sb-square-effects-32" <?php
                                            if ($imageeffects == 'sb-square-effects-32 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-32 sb-top-to-bottom" class="sub-sb-square-effects-32" <?php
                                            if ($imageeffects == 'sb-square-effects-32 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-32 sb-bottom-to-top" class="sub-sb-square-effects-32" <?php
                                            if ($imageeffects == 'sb-square-effects-32 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                            <option value="sb-square-effects-33 sb-left-to-right" class="sub-sb-square-effects-33" <?php
                                            if ($imageeffects == 'sb-square-effects-33 sb-left-to-right') {
                                                echo 'selected';
                                            }
                                            ?>>Left to Right</option>
                                            <option value="sb-square-effects-33 sb-right-to-left" class="sub-sb-square-effects-33" <?php
                                            if ($imageeffects == 'sb-square-effects-33 sb-right-to-left') {
                                                echo 'selected';
                                            }
                                            ?>>Right to Left</option>
                                            <option value="sb-square-effects-33 sb-top-to-bottom" class="sub-sb-square-effects-33" <?php
                                            if ($imageeffects == 'sb-square-effects-33 sb-top-to-bottom') {
                                                echo 'selected';
                                            }
                                            ?>>Top to Bottom</option>
                                            <option value="sb-square-effects-33 sb-bottom-to-top" class="sub-sb-square-effects-33" <?php
                                            if ($imageeffects == 'sb-square-effects-33 sb-bottom-to-top') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom to Top</option>
                                        </select>
                                        <span id="optionstore" style="display:none;"></span>
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(document).ready(function () {
                                            jQuery('#image-style').on("change", function () {
                                                var cattype = jQuery(this).val();
                                                optionswitch(cattype);
                                            });
                                        });

                                        function optionswitch(myfilter) {
                                            if (jQuery('#optionstore').text() == "") {
                                                jQuery('option[class^="sub-"]').each(function () {
                                                    var optvalue = jQuery(this).val();
                                                    var optclass = jQuery(this).prop('class');
                                                    var opttext = jQuery(this).text();
                                                    optionlist = jQuery('#optionstore').text() + "@%" + optvalue + "@%" + optclass + "@%" + opttext;
                                                    jQuery('#optionstore').text(optionlist);
                                                });
                                            }

                                            //Delete everything
                                            jQuery('option[class^="sub-"]').remove();

                                            // Put the filtered stuff back
                                            populateoption = rewriteoption(myfilter);
                                            jQuery('#sb-image-effects').html(populateoption);
                                        }

                                        function rewriteoption(myfilter) {
                                            //Rewrite only the filtered stuff back into the option
                                            var options = jQuery('#optionstore').text().split('@%');
                                            var resultgood = false;
                                            var myfilterclass = "sub-" + myfilter;
                                            var optionlisting = "";

                                            myfilterclass = (myfilter != "") ? myfilterclass : "all";

                                            //First variable is always the value, second is always the class, third is always the text
                                            for (var i = 3; i < options.length; i = i + 3) {
                                                if (options[i - 1] == myfilterclass || myfilterclass == "all") {
                                                    optionlisting = optionlisting + '<option value="' + options[i - 2] + '" class="' + options[i - 1] + '">' + options[i] + '</option>';
                                                    resultgood = true;
                                                }
                                            }
                                            if (resultgood) {
                                                return optionlisting;
                                            }
                                        }
                                    </script>
                                </div>
                                <div class="form-group row form-group-sm">
                                    <label for="sb-background-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Background Color">Background Color <?php echo $sbimageproonly; ?></label>
                                    <div class="col-sm-6 nopadding">
                                        <input type="text" class="form-control sb-image-vendor-color" data-format-orphita="rgb" data-opacity-orphita="true"  id="sb-background-color" name="sb-background-color" value="<?php echo $imagebackgroundcolor; ?>">
                                    </div>
                                </div>
                                <div class="form-group row form-group-sm">
                                    <label for="sb-image-content-alignments" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Content Alignments">Alignments</label>
                                    <div class="col-sm-6 nopadding">
                                        <select class="form-control" id="sb-image-content-alignments" name="sb-image-content-alignments">
                                            <option value="vertical-align: top; text-align: left;"       <?php
                                            if ($imagealignments == 'vertical-align: top; text-align: left;') {
                                                echo 'selected';
                                            }
                                            ?>>Top Left</option>
                                            <option value="vertical-align: top; text-align: center;"     <?php
                                            if ($imagealignments == 'vertical-align: top; text-align: center;') {
                                                echo 'selected';
                                            }
                                            ?>>Top Middle</option>
                                            <option value="vertical-align: top; text-align: right;"      <?php
                                            if ($imagealignments == 'vertical-align: top; text-align: right;') {
                                                echo 'selected';
                                            }
                                            ?>>Top Right</option>
                                            <option value="vertical-align: middle; text-align: left;"    <?php
                                            if ($imagealignments == 'vertical-align: middle; text-align: left;') {
                                                echo 'selected';
                                            }
                                            ?>>Middle Left</option>
                                            <option value="vertical-align: middle; text-align: center;"  <?php
                                            if ($imagealignments == 'vertical-align: middle; text-align: center;') {
                                                echo 'selected';
                                            }
                                            ?>>Middle Middle</option>
                                            <option value="vertical-align: middle; text-align: right;"   <?php
                                            if ($imagealignments == 'vertical-align: middle; text-align: right;') {
                                                echo 'selected';
                                            }
                                            ?>>Middle Right</option>
                                            <option value="vertical-align: bottom; text-align: left;"    <?php
                                            if ($imagealignments == 'vertical-align: bottom; text-align: left;') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom Left</option>
                                            <option value="vertical-align: bottom; text-align: center;"  <?php
                                            if ($imagealignments == 'vertical-align: bottom; text-align: center;') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom Middle</option>
                                            <option value="vertical-align: bottom; text-align: right;"   <?php
                                            if ($imagealignments == 'vertical-align: bottom; text-align: right;') {
                                                echo 'selected';
                                            }
                                            ?>>Bottom Right</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row form-group-sm">
                                    <label for="sb-title-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Title Color">Title Color <?php echo $sbimageproonly; ?></label>
                                    <div class="col-sm-6 nopadding">
                                        <input type="text" class="form-control sb-image-vendor-color"  id="titles-color" name="sb-title-color" value="<?php echo $titlecolor; ?>">
                                    </div>
                                </div>
                                <div class="form-group row form-group-sm">
                                    <label for="title-back-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Title Background">Title Background Color <?php echo $sbimageproonly; ?></label>
                                    <div class="col-sm-6 nopadding">
                                        <input type="text" class="form-control sb-image-vendor-color"  id="title-back-color" name="title-back-color" value="<?php echo $titlebackcolor; ?>">
                                    </div>
                                </div>

                                <div class="form-group row form-group-sm">
                                    <label for="sb-desc-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Description Color">Description Color <?php echo $sbimageproonly; ?></label>
                                    <div class="col-sm-6 nopadding">
                                        <input type="text" class="form-control sb-image-vendor-color"  id="sb-desc-color" name="sb-desc-color" value="<?php echo $desccolor; ?>">
                                    </div>
                                </div>

                                <div class="form-group row form-group-sm">
                                    <label for="sb-button-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Button Color">Button Color <?php echo $sbimageproonly; ?></label>
                                    <div class="col-sm-6 nopadding">
                                        <input type="text" class="form-control sb-image-vendor-color"  id="sb-button-color" name="sb-button-color" value="<?php echo $buttomcolor; ?>">
                                    </div>
                                </div>
                                <div class="form-group row form-group-sm">
                                    <label for="sb-button-background" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Customize Your Button Background Color">Button Background <?php echo $sbimageproonly; ?></label>
                                    <div class="col-sm-6 nopadding">
                                        <input type="text" class="form-control sb-image-vendor-color"  id="sb-button-background" name="sb-button-background" value="<?php echo $buttombackground; ?>">
                                    </div>
                                </div>
                                <div class="form-group row form-group-sm">
                                    <label for="sb-image-button-align" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Button Align">Button Align</label>
                                    <div class="col-sm-6 nopadding">
                                        <select class="form-control" id="sb-image-button-align" name="sb-image-button-align">
                                            <option <?php
                                            if ($buttomalign == 'float: left;') {
                                                echo 'selected';
                                            }
                                            ?> value="float: left;">Left</option>
                                            <option <?php
                                            if ($buttomalign == 'margin: 0 auto;') {
                                                echo 'selected';
                                            }
                                            ?> value="margin: 0 auto;">Center</option>
                                            <option <?php
                                            if ($buttomalign == 'float: right;') {
                                                echo 'selected';
                                            }
                                            ?> value="float: right;">Right</option>
                                        </select>   
                                    </div>
                                </div>
                                <div class="form-group row form-group-sm bottom-margin-left-js">
                                    <label for="sb-image-bottom-margin-left" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Make Distance from left">Margin Left</label>
                                    <div class="col-sm-6 nopadding">
                                        <input type="number" class="form-control" min="-20" max="100" step="1" id="sb-image-bottom-margin-left" name="sb-image-bottom-margin-left" value="<?php echo $buttommarginleft; ?>">
                                    </div>
                                </div>
                                <div class="form-group row form-group-sm bottom-margin-right-js">
                                    <label for="sb-image-bottom-margin-right" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Make Distance from Right">Margin Right</label>
                                    <div class="col-sm-6 nopadding">
                                        <input type="number" class="form-control" min="-20" max="100" step="1" id="sb-image-bottom-margin-right" name="sb-image-bottom-margin-right" value="<?php echo $buttommarginright; ?>">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="item-id" name="item-id" value="<?php echo $itemid; ?>">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="submit" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery("#sb-image-radius").on("change", function () {
            var idvalue = jQuery('#sb-image-radius').val() + '%';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?>, .sb-image-hover-<?php echo $styleid; ?> .sb-image-img, .sb-image-hover-<?php echo $styleid; ?> a .sb-image-img, .sb-image-hover-<?php echo $styleid; ?> .sb-image-img:before, .sb-image-hover-<?php echo $styleid; ?> a .sb-image-img:before, .sb-image-hover-<?php echo $styleid; ?> .sb-image-img img, .sb-image-hover-<?php echo $styleid; ?> a .sb-image-img img, .sb-image-hover-<?php echo $styleid; ?> .sb-image-info,\ .sb-image-hover-<?php echo $styleid; ?> a .sb-image-info{ border-radius: " + idvalue + "; -moz-border-radius:  " + idvalue + "; -webkit-border-radius:  " + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-item").on("change", function () {
            var idvalue = jQuery('#sb-image-item').val();
            jQuery(".sb-image-padding-<?php echo $styleid; ?>").removeClass("sb-image-hover-responsive-1");
            jQuery(".sb-image-padding-<?php echo $styleid; ?>").removeClass("sb-image-hover-responsive-2");
            jQuery(".sb-image-padding-<?php echo $styleid; ?>").removeClass("sb-image-hover-responsive-3");
            jQuery(".sb-image-padding-<?php echo $styleid; ?>").removeClass("sb-image-hover-responsive-4");
            jQuery(".sb-image-padding-<?php echo $styleid; ?>").removeClass("sb-image-hover-responsive-5");
            jQuery(".sb-image-padding-<?php echo $styleid; ?>").removeClass("sb-image-hover-responsive-6");
            jQuery(".sb-image-padding-<?php echo $styleid; ?>").addClass(idvalue);
        });

        jQuery("#sb-image-width").on("change", function () {
            var idvalue = jQuery('#sb-image-width').val() + 'px';
            jQuery("<style type='text/css'> .sb-image-map-<?php echo $styleid; ?>{ max-width:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-height").on("change", function () {
            var idvalue = parseInt(jQuery('#sb-image-height').val(), 10);
            var idvalue2 = parseInt(jQuery('#sb-image-width').val(), 10);
            var datawidth = idvalue / idvalue2 * 100;
            jQuery("<style type='text/css'> .sb-image-map-<?php echo $styleid; ?>:after{ padding-bottom:" + datawidth + "%;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-margin").on("change", function () {
            var idvalue = jQuery('#sb-image-margin').val() + 'px';
            jQuery("<style type='text/css'> .sb-image-padding-<?php echo $styleid; ?>{ padding:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-padding").on("change", function () {
            var idvalue = jQuery('#sb-image-padding').val() + 'px';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-data{ padding-bottom:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ padding-left:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ padding-right:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-desc{ padding-left:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-desc{ padding-right:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-button02{ padding-left:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-button02{ padding-right:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-box-shadow").on("change", function () {
            var idvalue = '0 0 ' + jQuery('#sb-image-box-shadow').val() + 'px ' + jQuery('#box-shadow-color').val();
            jQuery("<style type='text/css'>.sb-image-hover-<?php echo $styleid; ?> .sb-image-img, .sb-image-hover-<?php echo $styleid; ?> .sb-image-info{ box-shadow:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#box-shadow-color").on("change", function () {
            var idvalue = '0 0 ' + jQuery('#sb-image-box-shadow').val() + 'px ' + jQuery('#box-shadow-color').val();
            jQuery("<style type='text/css'>.sb-image-hover-<?php echo $styleid; ?> .sb-image-img, .sb-image-hover-<?php echo $styleid; ?> .sb-image-info{ box-shadow:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-inner-shadow").on("change", function () {
            var idvalue = 'inset 0 0 0 ' + jQuery('#sb-image-inner-shadow').val() + 'px ' + jQuery('#inner-shadow-color').val() + ', 0 1px 2px rgba(0,0,0,0.3)';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-img:before{ box-shadow:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#inner-shadow-color").on("change", function () {
            var idvalue = 'inset 0 0 0 ' + jQuery('#sb-image-inner-shadow').val() + 'px ' + jQuery('#inner-shadow-color').val() + ', 0 1px 2px rgba(0,0,0,0.3)';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-img:before{ box-shadow:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-heading-font-size").on("change", function () {
            var idvalue = jQuery('#sb-image-heading-font-size').val() + 'px';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ font-size:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery('#sb-image-heading-font-family').fontselect().change(function () {
            var font = jQuery(this).val().replace(/\+/g, ' ');
            font = font.split(':');
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ font-family:" + font[0] + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-heading-font-weight").on("change", function () {
            var idvalue = jQuery('#sb-image-heading-font-weight').val();
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ font-weight:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-heading-font-style").on("change", function () {
            var idvalue = jQuery('#sb-image-heading-font-style').val();
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ font-style:" + idvalue + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-heading-padding-bottom").on("change", function () {
            var idvalue = jQuery('#sb-image-heading-padding-bottom').val() + 'px';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ padding-top: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ padding-bottom: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");

        });
        jQuery("#sb-image-heading-margin-top").on("change", function () {
            var idvalue = jQuery('#sb-image-heading-margin-top').val() + 'px';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ margin-top: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-heading-margin-left-right").on("change", function () {
            var idvalue = jQuery('#sb-image-heading-margin-left-right').val() + 'px';
            var idint = parseInt(jQuery('#sb-image-heading-margin-left-right').val(), 10);
            var idintdata = idint * 2;
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ margin-left: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ margin-right: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ width:calc(100% - " + idintdata + "px) ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-heading-margin-bottom").on("change", function () {
            var idvalue = jQuery('#sb-image-heading-margin-bottom').val() + 'px';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title{ margin-bottom: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-description-font-size").on("change", function () {
            var idvalue = jQuery('#sb-image-description-font-size').val() + 'px';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-desc{ font-size: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery('#sb-image-description-font-family').fontselect().change(function () {
            var font = jQuery(this).val().replace(/\+/g, ' ');
            font = font.split(':');
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-desc{ font-family:" + font[0] + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-description-font-weight").on("change", function () {
            var idvalue = jQuery('#sb-image-description-font-weight').val();
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-desc{ font-weight: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-description-font-style").on("change", function () {
            var idvalue = jQuery('#sb-image-description-font-style').val();
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-desc{ font-style: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-description-margin-bottom").on("change", function () {
            var idvalue = jQuery('#sb-image-description-margin-bottom').val() + 'px';
            jQuery("<style type='text/css'>.sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-desc{ padding-bottom: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-button-font-size").on("change", function () {
            var idvalue = jQuery('#sb-image-button-font-size').val() + 'px';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info a.sb-image-button{ font-size: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery('#sb-image-button-font-family').fontselect().change(function () {
            var font = jQuery(this).val().replace(/\+/g, ' ');
            font = font.split(':');
            jQuery("<style type='text/css'>.sb-image-hover-<?php echo $styleid; ?> .sb-image-info a.sb-image-button{ font-family:" + font[0] + ";} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-button-font-weight").on("change", function () {
            var idvalue = jQuery('#sb-image-button-font-weight').val();
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info a.sb-image-button{ font-weight: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-button-font-style").on("change", function () {
            var idvalue = jQuery('#sb-image-button-font-style').val();
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info a.sb-image-button{ font-style: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-button-padding-left").on("change", function () {
            var idvalue = jQuery('#sb-image-button-padding-left').val() + 'px';
            jQuery("<style type='text/css'>.sb-image-hover-<?php echo $styleid; ?> .sb-image-info a.sb-image-button{ padding-left: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'>.sb-image-hover-<?php echo $styleid; ?> .sb-image-info a.sb-image-button{ padding-right: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-button-padding-top").on("change", function () {
            var idvalue = jQuery('#sb-image-button-padding-top').val() + 'px';
            jQuery("<style type='text/css'>.sb-image-hover-<?php echo $styleid; ?> .sb-image-info a.sb-image-button{ padding-top: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
            jQuery("<style type='text/css'>.sb-image-hover-<?php echo $styleid; ?> .sb-image-info a.sb-image-button{ padding-bottom: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        jQuery("#sb-image-button-radius").on("change", function () {
            var idvalue = jQuery('#sb-image-button-radius').val() + 'px';
            jQuery("<style type='text/css'> .sb-image-hover-<?php echo $styleid; ?> .sb-image-info a.sb-image-button{ border-radius: " + idvalue + " ;} </style>").appendTo(".sb-image-preview-data");
        });
        var idvalues = jQuery('#sb-image-button-align').val();
        if (idvalues === "float: left;") {
            jQuery(".bottom-margin-right-js").slideUp();
            jQuery(".bottom-margin-left-js").slideDown();
        }
        if (idvalues === 'margin: 0 auto;') {
            jQuery(".bottom-margin-right-js").slideUp();
            jQuery(".bottom-margin-left-js").slideUp();
        }
        if (idvalues === 'float: right;') {
            jQuery(".bottom-margin-right-js").slideDown();
            jQuery(".bottom-margin-left-js").slideUp();
        }
        jQuery("#sb-image-button-align").on("change", function () {
            var idvalue = jQuery('#sb-image-button-align').val();
            if (idvalue === "float: left;") {
                jQuery(".bottom-margin-right-js").slideUp();
                jQuery(".bottom-margin-left-js").slideDown();
            }
            if (idvalue === 'margin: 0 auto;') {
                jQuery(".bottom-margin-right-js").slideUp();
                jQuery(".bottom-margin-left-js").slideUp();
            }
            if (idvalue === 'float: right;') {
                jQuery(".bottom-margin-right-js").slideDown();
                jQuery(".bottom-margin-left-js").slideUp();
            }
        });
    });
    jQuery('#sb-image-add-new-item').on('click', function () {
        jQuery("#sb-image-add-new-item-data").modal("show");
        jQuery("#sb-image-title").val(null);
        jQuery("#sb-image-desc").val(null);
        jQuery("#sb-image-link").val(null);
        jQuery("#sb-image-bottom").val(null);
        jQuery("#sb-image-upload-url").val(null);
        jQuery("#sb-image-hover-upload-url").val(null);
        jQuery("#item-id").val(null);
    });
    jQuery('#sb-image-add-new-item').on('click', function () {
        jQuery("#sb-image-add-new-item-data").modal("show");
        jQuery("#sb-image-title").val(null);
        jQuery("#sb-image-desc").val(null);
        jQuery("#sb-image-link").val(null);
        jQuery("#sb-image-bottom").val(null);
        jQuery("#sb-image-upload-url").val(null);
        jQuery("#sb-image-hover-upload-url").val(null);
        jQuery("#item-id").val(null);
        jQuery("#image-style").val('sb-square-effects-1');
        jQuery("#sb-image-effects").val('sb-square-effects-1 sb-left-to-right');
        jQuery("#sb-background-color").val('rgba(0, 143, 171, 1)');
        jQuery("#sb-image-content-alignments").val('vertical-align: top; text-align: center;');
        jQuery("#sb-title-color").val('#FFF');
        jQuery("#title-back-color").val('#b8258e');
        jQuery("#sb-desc-color").val('#FFF');
        jQuery("#sb-button-color").val('#FFF');
        jQuery("#sb-button-background").val('#b8258e');
        jQuery("#sb-image-button-align").val('margin: 0 auto;');
        jQuery("#sb-image-bottom-margin-left").val('0');
        jQuery("#sb-image-bottom-margin-right").val('0');
    });
</script>