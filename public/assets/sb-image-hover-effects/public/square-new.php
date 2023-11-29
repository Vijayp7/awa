<?php
if (!defined('ABSPATH'))
    exit;
sb_image_hover_effects_user_capabilities();
if (!empty($_POST['submit']) && $_POST['submit'] == 'Save') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'sbimagegeneraleffects')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $css = 'sb-image-heading-margin-top |0| sb-image-item |sb-image-hover-responsive-1| sb-image-image-type |normal| sb-image-image-autoplay |yes| sb-image-auto-timing |2000| sb-image-width |250| sb-image-height |250| sb-image-margin |20| sb-image-padding |20| sb-image-animation |No Animation| sb-image-animation-duration |1.2| sb-image-link-opening || sb-image-box-shadow |0| box-shadow-color |rgba(0, 171, 151, 1)| sb-image-inner-shadow |10| inner-shadow-color |rgba(0, 106, 148, 0.13)| sb-image-heading-font-size|20| sb-image-heading-font-family |Open+Sans| sb-image-heading-font-weight |600| sb-image-heading-font-style |normal| sb-image-heading-underline |no| sb-image-heading-padding-bottom |15| sb-image-heading-margin-bottom |25| sb-image-description-font-size |16| sb-image-description-font-family |Open+Sans| sb-image-description-font-weight |300| sb-image-description-font-style |normal| sb-image-description-margin-bottom |20| sb-image-button-font-size |14| sb-image-button-font-family |Open+Sans| sb-image-button-font-weight |300| sb-image-button-font-style |normal| sb-image-button-padding-left |10| sb-image-button-padding-top |10| sb-image-button-radius |10| sb-image-css || sb-image-heading-margin-left-right |0| sb-image-heading-margin-top |0|';
        $name = sanitize_text_field($_POST['style']);
        $style_name = 'sb-image-hover-effects-square';
        global $wpdb;
        $table_name = $wpdb->prefix . 'sb_image_hover_effects_style';
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_name} (name, style_name, css) VALUES ( %s, %s, %s )", array($name, $style_name, $css)));
        $redirect_id = $wpdb->insert_id;
        if ($redirect_id == 0) {
            $url = admin_url("admin.php?page=sb-image-hover-effects-general");
        }
        if ($redirect_id != 0) {
            $url = admin_url("admin.php?page=sb-image-hover-effects-square&styleid=$redirect_id");
        }
        echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
        exit;
    }
}
?>
<?php
$sbimage1 = plugin_dir_url(dirname(__FILE__)) . 'public/image/1.jpg';
$sbimage2 = plugin_dir_url(dirname(__FILE__)) . 'public/image/2.jpg';
$sbimage3 = plugin_dir_url(dirname(__FILE__)) . 'public/image/3.jpg';
$sbimage4 = plugin_dir_url(dirname(__FILE__)) . 'public/image/4.jpg';
$sbimage5 = plugin_dir_url(dirname(__FILE__)) . 'public/image/5.jpg';
$sbimage6 = plugin_dir_url(dirname(__FILE__)) . 'public/image/6.jpg';
?>
<div class="wrap">
    <?php echo sb_image_promote_free(); ?>
    <div class="sb-image-admin-wrapper">
        <h1>Square Effects  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sb-image-effects-data">Create New</button></h1>
        <p>Select Style from our Template list</p>
        <div class="sb-image-admin-new-row">
            <div class="sb-image-admin-row">
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">
                        <div class="sb-image-hover-container">
                            <div class="sb-image-hover-row ">
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-29 sb-image-animation-29">
                                    <div class="sb-image-map-29">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-29 sb-image-hover-29-12 sb-general-effects-1 sb-left-to-right">
                                                <div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Fully Customizable</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 

                                </div>
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-29 sb-image-animation-29">
                                    <div class="sb-image-map-29">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-29 sb-image-hover-29-13 sb-general-effects-1 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info sbimagetabhover">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  


                                </div>

                            </div>
                        </div>   
                        <style>
                            .sb-image-hover-29{
                                position: relative;
                                width: 100%;
                                height: 100%;
                                -webkit-perspective: 900px;
                                -moz-perspective: 900px;
                                perspective: 900px;
                            }
                            .sb-image-hover-29 .sb-image-img {
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0;
                                width: 100%;
                                height: 100%;
                            }
                            .sb-image-hover-29 .sb-image-info {
                                position: absolute;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0;
                                width: 100%;
                                height: 100%;
                                text-align: center;
                                -webkit-backface-visibility: hidden;
                                backface-visibility: hidden;
                                display: table;
                            }
                            .sb-image-hover-29 .sb-image-img {
                                width: 100%;
                                float: left;
                                visibility: visible;
                                opacity: 1;
                                -webkit-transition: all 0.4s ease-out;
                                -moz-transition: all 0.4s ease-out;
                                transition: all 0.4s ease-out;
                            }
                            .sb-image-hover-29 .sb-image-info {
                                opacity: 0;
                                background-color:rgba(0, 143, 171, 1);
                                visibility: hidden;
                                -webkit-transition: all 0.35s ease-in-out 0.3s;
                                -moz-transition: all 0.35s ease-in-out 0.3s;
                                transition: all 0.35s ease-in-out 0.3s;
                            }
                            .sb-image-hover-29 .sb-image-info .sb-image-data{
                                display: table-cell;
                                vertical-align: top; text-align: center;        }
                            .sb-image-hover-29 .sb-image-info .sb-image-title {
                                color: #FFF;
                            }
                            .sb-image-hover-29 .sb-image-info .sb-image-desc {
                                color: #FFF;
                            }
                            .sb-image-hover-29 a.sb-image-button{
                                background: #b8258e;
                                color: #FFF;
                                margin: 0 auto;                    }
                            .sb-image-hover-29 a.sb-image-button:hover{
                                background: #FFF;
                                color: #b8258e;
                            }
                            .sb-image-hover-29:hover .sb-image-img,
                            .sb-image-hover-29.sb-touch-hover .sb-image-img{
                                opacity: 0;
                                visibility: hidden;
                            }
                            .sb-image-hover-29:hover .sb-image-info,
                            .sb-image-hover-29.sb-touch-hover .sb-image-info{
                                visibility: visible;
                                opacity: 1;
                            }
                            .sb-image-hover-29.sb-left-to-right .sb-image-img {
                                -webkit-transform: rotateY(0);
                                -moz-transform: rotateY(0);
                                -ms-transform: rotateY(0);
                                -o-transform: rotateY(0);
                                transform: rotateY(0);
                                -webkit-transform-origin: 100% 50%;
                                -moz-transform-origin: 100% 50%;
                                -ms-transform-origin: 100% 50%;
                                -o-transform-origin: 100% 50%;
                                transform-origin: 100% 50%;
                            }
                            .sb-image-hover-29.sb-left-to-right .sb-image-info {
                                -webkit-transform: rotateY(90deg);
                                -moz-transform: rotateY(90deg);
                                -ms-transform: rotateY(90deg);
                                -o-transform: rotateY(90deg);
                                transform: rotateY(90deg);
                                -webkit-transform-origin: 0% 50%;
                                -moz-transform-origin: 0% 50%;
                                -ms-transform-origin: 0% 50%;
                                -o-transform-origin: 0% 50%;
                                transform-origin: 0% 50%;
                            }
                            .sb-image-hover-29.sb-left-to-right:hover .sb-image-img,
                            .sb-image-hover-29.sb-left-to-right.sb-touch-hover .sb-image-img{
                                -webkit-transform: rotateY(-90deg);
                                -moz-transform: rotateY(-90deg);
                                -ms-transform: rotateY(-90deg);
                                -o-transform: rotateY(-90deg);
                                transform: rotateY(-90deg);
                            }
                            .sb-image-hover-29.sb-left-to-right:hover .sb-image-info,
                            .sb-image-hover-29.sb-left-to-right.sb-touch-hover .sb-image-info{
                                -webkit-transform: rotateY(0);
                                -moz-transform: rotateY(0);
                                -ms-transform: rotateY(0);
                                -o-transform: rotateY(0);
                                transform: rotateY(0);
                            }
                            .sb-image-hover-29.sb-right-to-left .sb-image-img {
                                -webkit-transform: rotateY(0);
                                -moz-transform: rotateY(0);
                                -ms-transform: rotateY(0);
                                -o-transform: rotateY(0);
                                transform: rotateY(0);
                                -webkit-transform-origin: 0% 50%;
                                -moz-transform-origin: 0% 50%;
                                -ms-transform-origin: 0% 50%;
                                -o-transform-origin: 0% 50%;
                                transform-origin: 0% 50%;
                            }
                            .sb-image-hover-29.sb-right-to-left .sb-image-info {
                                -webkit-transform: rotateY(-90deg);
                                -moz-transform: rotateY(-90deg);
                                -ms-transform: rotateY(-90deg);
                                -o-transform: rotateY(-90deg);
                                transform: rotateY(-90deg);
                                -webkit-transform-origin: 100% 50%;
                                -moz-transform-origin: 100% 50%;
                                -ms-transform-origin: 100% 50%;
                                -o-transform-origin: 100% 50%;
                                transform-origin: 100% 50%;
                            }
                            .sb-image-hover-29.sb-right-to-left:hover .sb-image-img,
                            .sb-image-hover-29.sb-right-to-left.sb-touch-hover .sb-image-img{
                                -webkit-transform: rotateY(90deg);
                                -moz-transform: rotateY(90deg);
                                -ms-transform: rotateY(90deg);
                                -o-transform: rotateY(90deg);
                                transform: rotateY(90deg);
                            }
                            .sb-image-hover-29.sb-right-to-left:hover .sb-image-info,
                            .sb-image-hover-29.sb-right-to-left.sb-touch-hover .sb-image-info{
                                -webkit-transform: rotateY(0);
                                -moz-transform: rotateY(0);
                                -ms-transform: rotateY(0);
                                -o-transform: rotateY(0);
                                transform: rotateY(0);
                            }
                            .sb-image-hover-29.sb-top-to-bottom .sb-image-img {
                                -webkit-transform: rotateX(0);
                                -moz-transform: rotateX(0);
                                -ms-transform: rotateX(0);
                                -o-transform: rotateX(0);
                                transform: rotateX(0);
                                -webkit-transform-origin: 50% 100%;
                                -moz-transform-origin: 50% 100%;
                                -ms-transform-origin: 50% 100%;
                                -o-transform-origin: 50% 100%;
                                transform-origin: 50% 100%;
                            }
                            .sb-image-hover-29.sb-top-to-bottom .sb-image-info {
                                -webkit-transform: rotateX(-90deg);
                                -moz-transform: rotateX(-90deg);
                                -ms-transform: rotateX(-90deg);
                                -o-transform: rotateX(-90deg);
                                transform: rotateX(-90deg);
                                -webkit-transform-origin: 50% 0;
                                -moz-transform-origin: 50% 0;
                                -ms-transform-origin: 50% 0;
                                -o-transform-origin: 50% 0;
                                transform-origin: 50% 0;
                            }
                            .sb-image-hover-29.sb-top-to-bottom:hover .sb-image-img,
                            .sb-image-hover-29.sb-top-to-bottom.sb-touch-hover .sb-image-img{
                                -webkit-transform: rotateX(90deg);
                                -moz-transform: rotateX(90deg);
                                -ms-transform: rotateX(90deg);
                                -o-transform: rotateX(90deg);
                                transform: rotateX(90deg);
                            }
                            .sb-image-hover-29.sb-top-to-bottom:hover .sb-image-info,
                            .sb-image-hover-29.sb-top-to-bottom.sb-touch-hover .sb-image-info {
                                -webkit-transform: rotateX(0);
                                -moz-transform: rotateX(0);
                                -ms-transform: rotateX(0);
                                -o-transform: rotateX(0);
                                transform: rotateX(0);
                            }

                            .sb-image-hover-29.sb-bottom-to-top .sb-image-img {
                                -webkit-transform: rotateX(0);
                                -moz-transform: rotateX(0);
                                -ms-transform: rotateX(0);
                                -o-transform: rotateX(0);
                                transform: rotateX(0);
                                -webkit-transform-origin: 50% 0;
                                -moz-transform-origin: 50% 0;
                                -ms-transform-origin: 50% 0;
                                -o-transform-origin: 50% 0;
                                transform-origin: 50% 0;
                            }
                            .sb-image-hover-29.sb-bottom-to-top .sb-image-info {
                                -webkit-transform: rotateX(90deg);
                                -moz-transform: rotateX(90deg);
                                -ms-transform: rotateX(90deg);
                                -o-transform: rotateX(90deg);
                                transform: rotateX(90deg);
                                -webkit-transform-origin: 50% 100%;
                                -moz-transform-origin: 50% 100%;
                                -ms-transform-origin: 50% 100%;
                                -o-transform-origin: 50% 100%;
                                transform-origin: 50% 100%;
                            }
                            .sb-image-hover-29.sb-bottom-to-top:hover .sb-image-img,
                            .sb-image-hover-29.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                -webkit-transform: rotateX(-90deg);
                                -moz-transform: rotateX(-90deg);
                                -ms-transform: rotateX(-90deg);
                                -o-transform: rotateX(-90deg);
                                transform: rotateX(-90deg);
                            }
                            .sb-image-hover-29.sb-bottom-to-top:hover .sb-image-info,
                            .sb-image-hover-29.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                -webkit-transform: rotateX(0);
                                -moz-transform: rotateX(0);
                                -ms-transform: rotateX(0);
                                -o-transform: rotateX(0);
                                transform: rotateX(0);
                            }
                        </style>
                        <style>
                            .sb-image-hover-29, 
                            .sb-image-hover-29 .sb-image-img, .sb-image-hover-29 a .sb-image-img,
                            .sb-image-hover-29 .sb-image-img:before, .sb-image-hover-29 a .sb-image-img:before,
                            .sb-image-hover-29 .sb-image-img img, .sb-image-hover-29 a .sb-image-img img,
                            .sb-image-hover-29 .sb-image-info, .sb-image-hover-29 a .sb-image-info{
                                border-radius: 0%;
                                -moz-border-radius:  0%;
                                -webkit-border-radius:  0%;
                            }
                            .sb-image-padding-29{
                                padding: 20px;
                            }
                            .sb-image-map-29 {
                                max-width: 200px;
                                width: 100%;
                                margin: 0 auto;
                                position: relative;
                            }
                            .sb-image-map-29:after {
                                padding-bottom: 100%;
                                content: "";
                                display: block;
                            }
                            .sb-image-animation-29 {
                                animation-duration: 2s;
                            }
                            .sb-image-hover-29 .sb-image-info .sb-image-data{
                                padding-bottom: 20px; 
                            }
                            .sb-image-hover-29 .sb-image-img,
                            .sb-image-hover-29 .sb-image-info{
                                box-shadow: 0 0 10px  0 rgba(0, 148, 126, 0.36);
                            }
                            .sb-image-hover-29 .sb-image-img:before {
                                position: absolute;
                                display: block;
                                content: '';
                                width: 100%;
                                height: 100%;
                                box-shadow: inset 0 0 0 11px rgba(49, 66, 222, 0.2);
                            }
                            .sb-image-hover-29 .sb-image-info .sb-image-title {
                                font-size: 16px;
                                font-weight: 600;
                                padding-bottom: 5px;
                                margin-bottom: 10px;                                    padding: 10px 20px;                                    padding: 10px 20px;
                                margin-top: 0;
                                line-height: 120%;
                                font-family: "Open Sans";
                                display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                font-style: normal;
                            }
                            .sb-image-hover-29 .sb-image-info .sb-image-desc {
                                font-size: 14px;
                                font-weight: 300;
                                margin-bottom: 20px;
                                margin-top: 0;
                                line-height: 120%;
                                width: 100%;
                                float: left;
                                font-family: "Open Sans";
                                font-style: normal;
                            }

                            .sb-image-hover-29 a.sb-image-button{
                                padding: 10px 10px;
                                -webkit-border-radius: 5px;
                                -moz-border-radius: 5px;
                                border-radius: 5px;
                                font-weight: 300;
                                font-size: 14px;
                                font-family: "Open Sans";
                                font-style: normal;
                                text-decoration: none;
                                display:inline-block;
                            }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 1  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-30  sb-image-animation-30">
                                    <div class="sb-image-map-30">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-30 sb-image-hover-30-14 sb-general-effects-2 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Visual Composer</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   

                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-30  sb-image-animation-30">
                                    <div class="sb-image-map-30">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-30 sb-image-hover-30-15 sb-general-effects-2 sb-right-to-left"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with SiteOrigin</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-30{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-30 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-30 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-30 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-30 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(168, 0, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;
                                            pointer-events: none;

                                        }
                                        .sb-image-hover-30 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-30 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-30 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-30 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-30 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-30:hover .sb-image-img,
                                        .sb-image-hover-30.sb-touch-hover  .sb-image-img{
                                            opacity: 0;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-30:hover .sb-image-info,
                                        .sb-image-hover-30.sb-touch-hover  .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;
                                            pointer-events: auto;

                                        }
                                        .sb-image-hover-30.sb-left-to-right .sb-image-img {
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }
                                        .sb-image-hover-30.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-30.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-30.sb-left-to-right.sb-touch-hover  .sb-image-img{
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-30.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-30.sb-left-to-right.sb-touch-hover  .sb-image-info{
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }

                                        .sb-image-hover-30.sb-right-to-left .sb-image-img {
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }
                                        .sb-image-hover-30.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }
                                        .sb-image-hover-30.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-30.sb-right-to-left.sb-touch-hover  .sb-image-img{
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                            transform: translateX(100%);
                                        }
                                        .sb-image-hover-30.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-30.sb-right-to-left.sb-touch-hover  .sb-image-info{
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }
                                        .sb-image-hover-30.sb-top-to-bottom .sb-image-img {
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                        .sb-image-hover-30.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .sb-image-hover-30.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-30.sb-top-to-bottom.sb-touch-hover  .sb-image-img{
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .sb-image-hover-30.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-30.sb-top-to-bottom.sb-touch-hover  .sb-image-info{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }


                                        .sb-image-hover-30.sb-bottom-to-top .sb-image-img {
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                        .sb-image-hover-30.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .sb-image-hover-30.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-30.sb-bottom-to-top.sb-touch-hover  .sb-image-img{
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .sb-image-hover-30.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-30.sb-bottom-to-top.sb-touch-hover  .sb-image-info{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-30, 
                                .sb-image-hover-30 .sb-image-img, .sb-image-hover-30 a .sb-image-img,
                                .sb-image-hover-30 .sb-image-img:before, .sb-image-hover-30 a .sb-image-img:before,
                                .sb-image-hover-30 .sb-image-img img, .sb-image-hover-30 a .sb-image-img img,
                                .sb-image-hover-30 .sb-image-info, .sb-image-hover-30 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-30{
                                    padding: 20px;
                                }
                                .sb-image-map-30 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-30:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-30 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-30 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-30 .sb-image-img,
                                .sb-image-hover-30 .sb-image-info{
                                    box-shadow: 0 0 10px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-30 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 11px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-30 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-30 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-30 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 2  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">
                        <div class="sb-image-hover-container"><div class="sb-image-hover-row ">
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-31 sb-image-animation-31">
                                    <div class="sb-image-map-31">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-31 sb-image-hover-31-16 sb-general-effects-3"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info sbimagetabhover">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works on Widgets</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    


                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-31 sb-image-animation-31">
                                    <div class="sb-image-map-31">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-31 sb-image-hover-31-17 sb-general-effects-3"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info sbimagetabhover">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Have Builtin Carousel Features </div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-31{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-31 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-31 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-31 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-31 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(171, 77, 0, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;

                                        }
                                        .sb-image-hover-31 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-31 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-31 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-31 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-31 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-31:hover .sb-image-img,
                                        .sb-image-hover-31.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                        }
                                        .sb-image-hover-31:hover .sb-image-info,
                                        .sb-image-hover-31.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;

                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-31, 
                                .sb-image-hover-31 .sb-image-img, .sb-image-hover-31 a .sb-image-img,
                                .sb-image-hover-31 .sb-image-img:before, .sb-image-hover-31 a .sb-image-img:before,
                                .sb-image-hover-31 .sb-image-img img, .sb-image-hover-31 a .sb-image-img img,
                                .sb-image-hover-31 .sb-image-info, .sb-image-hover-31 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-31{
                                    padding: 20px;
                                }
                                .sb-image-map-31 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-31:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-31 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-31 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-31 .sb-image-img,
                                .sb-image-hover-31 .sb-image-info{
                                    box-shadow: 0 0 10px  0 rgba(150, 68, 0, 0.36);
                                }
                                .sb-image-hover-31 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-31 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-31 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-31 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 3  <em>( Single Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-32 sb-image-animation-32">
                                    <div class="sb-image-map-32">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-32 sb-image-hover-32-18 sb-general-effects-4 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info sbimagetabhover">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Fully Customizable</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  


                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-32   sb-image-animation-32">
                                    <div class="sb-image-map-32">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-32 sb-image-hover-32-19 sb-general-effects-4 sb-right-to-left"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info sbimagetabhover">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-32{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-32 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-32 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-32 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            z-index:11;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-32 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(180, 47, 189, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;

                                        }
                                        .sb-image-hover-32 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-32 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-32 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-32 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-32 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-32:hover .sb-image-info,
                                        .sb-image-hover-32.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;

                                        }
                                        .sb-image-hover-32.sb-left-to-right .sb-image-img {
                                            -webkit-transform: scale(1) translateX(0);
                                            -moz-transform: scale(1) translateX(0);
                                            -ms-transform: scale(1) translateX(0);
                                            -o-transform: scale(1) translateX(0);
                                            transform: scale(1) translateX(0);
                                        }

                                        .sb-image-hover-32.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-32.sb-left-to-right.sb-touch-hover .sb-image-img{
                                            -webkit-transform: scale(0.5) translateX(100%);
                                            -moz-transform: scale(0.5) translateX(100%);
                                            -ms-transform: scale(0.5) translateX(100%);
                                            -o-transform: scale(0.5) translateX(100%);
                                            transform: scale(0.5) translateX(100%);
                                        }

                                        .sb-image-hover-32.sb-right-to-left .sb-image-img {
                                            -webkit-transform: scale(1) translateX(0);
                                            -moz-transform: scale(1) translateX(0);
                                            -ms-transform: scale(1) translateX(0);
                                            -o-transform: scale(1) translateX(0);
                                            transform: scale(1) translateX(0);
                                        }
                                        .sb-image-hover-32.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-32.sb-right-to-left.sb-touch-hover .sb-image-img {
                                            -webkit-transform: scale(0.5) translateX(-100%);
                                            -moz-transform: scale(0.5) translateX(-100%);
                                            -ms-transform: scale(0.5) translateX(-100%);
                                            -o-transform: scale(0.5) translateX(-100%);
                                            transform: scale(0.5) translateX(-100%);
                                        }

                                        .sb-image-hover-32.sb-top-to-bottom .sb-image-img {
                                            -webkit-transform: scale(1) translateY(0);
                                            -moz-transform: scale(1) translateY(0);
                                            -ms-transform: scale(1) translateY(0);
                                            -o-transform: scale(1) translateY(0);
                                            transform: scale(1) translateY(0);
                                        }
                                        .sb-image-hover-32.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-32.sb-top-to-bottom.sb-touch-hover .sb-image-img {
                                            -webkit-transform: scale(0.5) translateY(100%);
                                            -moz-transform: scale(0.5) translateY(100%);
                                            -ms-transform: scale(0.5) translateY(100%);
                                            -o-transform: scale(0.5) translateY(100%);
                                            transform: scale(0.5) translateY(100%);
                                        }

                                        .sb-image-hover-32.sb-bottom-to-top .sb-image-img {
                                            -webkit-transform: scale(1) translateY(0);
                                            -moz-transform: scale(1) translateY(0);
                                            -ms-transform: scale(1) translateY(0);
                                            -o-transform: scale(1) translateY(0);
                                            transform: scale(1) translateY(0);
                                        }
                                        .sb-image-hover-32.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-32.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            -webkit-transform: scale(0.5) translateY(-100%);
                                            -moz-transform: scale(0.5) translateY(-100%);
                                            -ms-transform: scale(0.5) translateY(-100%);
                                            -o-transform: scale(0.5) translateY(-100%);
                                            transform: scale(0.5) translateY(-100%);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-32, 
                                .sb-image-hover-32 .sb-image-img, .sb-image-hover-32 a .sb-image-img,
                                .sb-image-hover-32 .sb-image-img:before, .sb-image-hover-32 a .sb-image-img:before,
                                .sb-image-hover-32 .sb-image-img img, .sb-image-hover-32 a .sb-image-img img,
                                .sb-image-hover-32 .sb-image-info, .sb-image-hover-32 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-32{
                                    padding: 20px;
                                }
                                .sb-image-map-32 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-32:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-32 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-32 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-32 .sb-image-img,
                                .sb-image-hover-32 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(145, 0, 150, 0.36);
                                }
                                .sb-image-hover-32 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-32 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-32 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-32 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 4  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">
                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-33 sb-image-animation-33">
                                    <div class="sb-image-map-33">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-33 sb-image-hover-33-20 sb-general-effects-5 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info sbimagetabhover">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-33  sb-image-animation-33">
                                    <div class="sb-image-map-33">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-33 sb-image-hover-33-21 sb-general-effects-5 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info sbimagetabhover">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-33{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-33 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-33 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-33 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-33 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(125, 0, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;
                                            pointer-events: none;

                                        }
                                        .sb-image-hover-33 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-33 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-33 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-33 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-33 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-33:hover .sb-image-img,
                                        .sb-image-hover-33.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-33:hover .sb-image-info,
                                        .sb-image-hover-33.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;
                                            pointer-events: auto;

                                        }
                                        .sb-image-hover-33.sb-left-to-right .sb-image-img {
                                            -webkit-transform: translateX(0) rotate(0);
                                            -moz-transform: translateX(0) rotate(0);
                                            -ms-transform: translateX(0) rotate(0);
                                            -o-transform: translateX(0) rotate(0);
                                            transform: translateX(0) rotate(0);
                                        }
                                        .sb-image-hover-33.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(100%) rotate(180deg);
                                            -moz-transform: translateX(100%) rotate(180deg);
                                            -ms-transform: translateX(100%) rotate(180deg);
                                            -o-transform: translateX(100%) rotate(180deg);
                                            transform: translateX(100%) rotate(180deg);
                                        }
                                        .sb-image-hover-33.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-33.sb-left-to-right.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateX(100%) rotate(180deg);
                                            -moz-transform: translateX(100%) rotate(180deg);
                                            -ms-transform: translateX(100%) rotate(180deg);
                                            -o-transform: translateX(100%) rotate(180deg);
                                            transform: translateX(100%) rotate(180deg);
                                        }
                                        .sb-image-hover-33.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-33.sb-left-to-right.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateX(0) rotate(0);
                                            -moz-transform: translateX(0) rotate(0);
                                            -ms-transform: translateX(0) rotate(0);
                                            -o-transform: translateX(0) rotate(0);
                                            transform: translateX(0) rotate(0);
                                            -webkit-transition-delay: 0.4s;
                                            -moz-transition-delay: 0.4s;
                                            transition-delay: 0.4s;
                                        }

                                        .sb-image-hover-33.sb-right-to-left .sb-image-img {
                                            -webkit-transform: translateX(0) rotate(0);
                                            -moz-transform: translateX(0) rotate(0);
                                            -ms-transform: translateX(0) rotate(0);
                                            -o-transform: translateX(0) rotate(0);
                                            transform: translateX(0) rotate(0);
                                        }
                                        .sb-image-hover-33.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(-100%) rotate(-180deg);
                                            -moz-transform: translateX(-100%) rotate(-180deg);
                                            -ms-transform: translateX(-100%) rotate(-180deg);
                                            -o-transform: translateX(-100%) rotate(-180deg);
                                            transform: translateX(-100%) rotate(-180deg);
                                        }
                                        .sb-image-hover-33.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-33.sb-right-to-left.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateX(-100%) rotate(-180deg);
                                            -moz-transform: translateX(-100%) rotate(-180deg);
                                            -ms-transform: translateX(-100%) rotate(-180deg);
                                            -o-transform: translateX(-100%) rotate(-180deg);
                                            transform: translateX(-100%) rotate(-180deg);
                                        }
                                        .sb-image-hover-33.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-33.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateX(0) rotate(0);
                                            -moz-transform: translateX(0) rotate(0);
                                            -ms-transform: translateX(0) rotate(0);
                                            -o-transform: translateX(0) rotate(0);
                                            transform: translateX(0) rotate(0);
                                            -webkit-transition-delay: 0.4s;
                                            -moz-transition-delay: 0.4s;
                                            transition-delay: 0.4s;
                                        }

                                        .sb-image-hover-33.sb-top-to-bottom .sb-image-img {
                                            -webkit-transform: translateY(0) rotate(0);
                                            -moz-transform: translateY(0) rotate(0);
                                            -ms-transform: translateY(0) rotate(0);
                                            -o-transform: translateY(0) rotate(0);
                                            transform: translateY(0) rotate(0);
                                        }
                                        .sb-image-hover-33.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(-100%) rotate(-180deg);
                                            -moz-transform: translateY(-100%) rotate(-180deg);
                                            -ms-transform: translateY(-100%) rotate(-180deg);
                                            -o-transform: translateY(-100%) rotate(-180deg);
                                            transform: translateY(-100%) rotate(-180deg);
                                        }
                                        .sb-image-hover-33.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-33.sb-top-to-bottom.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateY(-100%) rotate(-180deg);
                                            -moz-transform: translateY(-100%) rotate(-180deg);
                                            -ms-transform: translateY(-100%) rotate(-180deg);
                                            -o-transform: translateY(-100%) rotate(-180deg);
                                            transform: translateY(-100%) rotate(-180deg);
                                        }
                                        .sb-image-hover-33.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-33.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0) rotate(0);
                                            -moz-transform: translateY(0) rotate(0);
                                            -ms-transform: translateY(0) rotate(0);
                                            -o-transform: translateY(0) rotate(0);
                                            transform: translateY(0) rotate(0);
                                            -webkit-transition-delay: 0.4s;
                                            -moz-transition-delay: 0.4s;
                                            transition-delay: 0.4s;
                                        }

                                        .sb-image-hover-33.sb-bottom-to-top .sb-image-img {
                                            -webkit-transform: translateY(0) rotate(0);
                                            -moz-transform: translateY(0) rotate(0);
                                            -ms-transform: translateY(0) rotate(0);
                                            -o-transform: translateY(0) rotate(0);
                                            transform: translateY(0) rotate(0);
                                        }
                                        .sb-image-hover-33.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(100%) rotate(180deg);
                                            -moz-transform: translateY(100%) rotate(180deg);
                                            -ms-transform: translateY(100%) rotate(180deg);
                                            -o-transform: translateY(100%) rotate(180deg);
                                            transform: translateY(100%) rotate(180deg);
                                        }
                                        .sb-image-hover-33.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-33.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateY(100%) rotate(180deg);
                                            -moz-transform: translateY(100%) rotate(180deg);
                                            -ms-transform: translateY(100%) rotate(180deg);
                                            -o-transform: translateY(100%) rotate(180deg);
                                            transform: translateY(100%) rotate(180deg);
                                        }
                                        .sb-image-hover-33.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-33.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0) rotate(0);
                                            -moz-transform: translateY(0) rotate(0);
                                            -ms-transform: translateY(0) rotate(0);
                                            -o-transform: translateY(0) rotate(0);
                                            transform: translateY(0) rotate(0);
                                            -webkit-transition-delay: 0.4s;
                                            -moz-transition-delay: 0.4s;
                                            transition-delay: 0.4s;
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-33, 
                                .sb-image-hover-33 .sb-image-img, .sb-image-hover-33 a .sb-image-img,
                                .sb-image-hover-33 .sb-image-img:before, .sb-image-hover-33 a .sb-image-img:before,
                                .sb-image-hover-33 .sb-image-img img, .sb-image-hover-33 a .sb-image-img img,
                                .sb-image-hover-33 .sb-image-info, .sb-image-hover-33 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-33{
                                    padding: 20px;
                                }
                                .sb-image-map-33 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-33:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-33 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-33 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-33 .sb-image-img,
                                .sb-image-hover-33 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(73, 0, 150, 0.27);
                                }
                                .sb-image-hover-33 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-33 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-33 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-33 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 5  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row ">
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-34  sb-image-animation-34">
                                    <div class="sb-image-map-34">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-34 sb-image-hover-34-22 sb-general-effects-6 sb-right-to-left"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    


                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-34  sb-image-animation-34">
                                    <div class="sb-image-map-34">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-34 sb-image-hover-34-23 sb-general-effects-6 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-34{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-34 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-34 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-34 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-34 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;
                                            pointer-events: none;

                                        }
                                        .sb-image-hover-34 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-34 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-34 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-34 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-34 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-34:hover .sb-image-info,
                                        .sb-image-hover-34.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;
                                            pointer-events: auto;

                                        }


                                        .sb-image-hover-34.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-34.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-34.sb-left-to-right.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate(-90deg);
                                            -moz-transform: rotate(-90deg);
                                            -ms-transform: rotate(-90deg);
                                            -o-transform: rotate(-90deg);
                                            transform: rotate(-90deg);
                                        }
                                        .sb-image-hover-34.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-34.sb-left-to-right.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }

                                        .sb-image-hover-34.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }
                                        .sb-image-hover-34.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-34.sb-right-to-left.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate(90deg);
                                            -moz-transform: rotate(90deg);
                                            -ms-transform: rotate(90deg);
                                            -o-transform: rotate(90deg);
                                            transform: rotate(90deg);
                                        }
                                        .sb-image-hover-34.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-34.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }

                                        .sb-image-hover-34.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .sb-image-hover-34.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-34.sb-top-to-bottom.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate(-90deg);
                                            -moz-transform: rotate(-90deg);
                                            -ms-transform: rotate(-90deg);
                                            -o-transform: rotate(-90deg);
                                            transform: rotate(-90deg);
                                        }
                                        .sb-image-hover-34.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-34.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }

                                        .sb-image-hover-34.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .sb-image-hover-34.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-34.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate(90deg);
                                            -moz-transform: rotate(90deg);
                                            -ms-transform: rotate(90deg);
                                            -o-transform: rotate(90deg);
                                            transform: rotate(90deg);
                                        }
                                        .sb-image-hover-34.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-34.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-34, 
                                .sb-image-hover-34 .sb-image-img, .sb-image-hover-34 a .sb-image-img,
                                .sb-image-hover-34 .sb-image-img:before, .sb-image-hover-34 a .sb-image-img:before,
                                .sb-image-hover-34 .sb-image-img img, .sb-image-hover-34 a .sb-image-img img,
                                .sb-image-hover-34 .sb-image-info, .sb-image-hover-34 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-34{
                                    padding: 20px;
                                }
                                .sb-image-map-34 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-34:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-34 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-34 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-34 .sb-image-img,
                                .sb-image-hover-34 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-34 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-34 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-34 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-34 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 6  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-35  sb-image-animation-35">
                                    <div class="sb-image-map-35">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-35 sb-image-hover-35-25 sb-general-effects-7 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Fully Customizable</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-35 sb-image-animation-35">
                                    <div class="sb-image-map-35">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-35 sb-image-hover-35-26 sb-general-effects-7 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-35{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-35 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-35 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-35 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-35 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(60, 171, 0, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;
                                            pointer-events: none;

                                        }
                                        .sb-image-hover-35 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-35 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-35 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-35 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-35 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-35:hover .sb-image-img,
                                        .sb-image-hover-35.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-35:hover .sb-image-info,
                                        .sb-image-hover-35.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;
                                            pointer-events: auto;

                                        }
                                        .sb-image-hover-35.sb-left-to-right .sb-image-img {
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                        .sb-image-hover-35.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-35.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-35.sb-left-to-right.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .sb-image-hover-35.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-35.sb-left-to-right.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }

                                        .sb-image-hover-35.sb-right-to-left .sb-image-img {
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                        .sb-image-hover-35.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }
                                        .sb-image-hover-35.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-35.sb-right-to-left.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .sb-image-hover-35.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-35.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }
                                        .sb-image-hover-35.sb-top-to-bottom .sb-image-img {
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }
                                        .sb-image-hover-35.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .sb-image-hover-35.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-35.sb-top-to-bottom.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-35.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-35.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }


                                        .sb-image-hover-35.sb-bottom-to-top .sb-image-img {
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }
                                        .sb-image-hover-35.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .sb-image-hover-35.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-35.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }
                                        .sb-image-hover-35.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-35.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-35, 
                                .sb-image-hover-35 .sb-image-img, .sb-image-hover-35 a .sb-image-img,
                                .sb-image-hover-35 .sb-image-img:before, .sb-image-hover-35 a .sb-image-img:before,
                                .sb-image-hover-35 .sb-image-img img, .sb-image-hover-35 a .sb-image-img img,
                                .sb-image-hover-35 .sb-image-info, .sb-image-hover-35 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-35{
                                    padding: 20px;
                                }
                                .sb-image-map-35 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-35:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-35 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-35 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-35 .sb-image-img,
                                .sb-image-hover-35 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-35 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-35 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-35 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-35 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 7  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-36  sb-image-animation-36 ">
                                    <div class="sb-image-map-36">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-36 sb-image-hover-36-27 sb-general-effects-8 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-36  sb-image-animation-36 ">
                                    <div class="sb-image-map-36">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-36 sb-image-hover-36-28 sb-general-effects-8 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Fully Customizable</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-36{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            -ms-transform-style: preserve-3d;
                                            -o-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                        }
                                        .sb-image-hover-36 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-36 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-36 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-36 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;

                                        }
                                        .sb-image-hover-36 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-36 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-36 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-36 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-36 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-36:hover .sb-image-img,
                                        .sb-image-hover-36.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                        }
                                        .sb-image-hover-36.sb-left-to-right .sb-image-info {
                                            -webkit-transform: rotate3d(0, 1, 0, -180deg);
                                            -moz-transform: rotate3d(0, 1, 0, -180deg);
                                            -ms-transform: rotate3d(0, 1, 0, -180deg);
                                            -o-transform: rotate3d(0, 1, 0, -180deg);
                                            transform: rotate3d(0, 1, 0, -180deg);
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                        }
                                        .sb-image-hover-36.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-36.sb-left-to-right.sb-touch-hover .sb-image-info{
                                            -webkit-transform: rotate3d(0, 1, 0, 0deg);
                                            -moz-transform: rotate3d(0, 1, 0, 0deg);
                                            -ms-transform: rotate3d(0, 1, 0, 0deg);
                                            -o-transform: rotate3d(0, 1, 0, 0deg);
                                            transform: rotate3d(0, 1, 0, 0deg);
                                        }
                                        .sb-image-hover-36.sb-right-to-left .sb-image-info {
                                            -webkit-transform: rotate3d(0, 1, 0, 180deg);
                                            -moz-transform: rotate3d(0, 1, 0, 180deg);
                                            -ms-transform: rotate3d(0, 1, 0, 180deg);
                                            -o-transform: rotate3d(0, 1, 0, 180deg);
                                            transform: rotate3d(0, 1, 0, 180deg);
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                        }
                                        .sb-image-hover-36.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-36.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            -webkit-transform: rotate3d(0, 1, 0, 0deg);
                                            -moz-transform: rotate3d(0, 1, 0, 0deg);
                                            -ms-transform: rotate3d(0, 1, 0, 0deg);
                                            -o-transform: rotate3d(0, 1, 0, 0deg);
                                            transform: rotate3d(0, 1, 0, 0deg);
                                        }
                                        .sb-image-hover-36.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: rotate3d(1, 0, 0, 180deg);
                                            -moz-transform: rotate3d(1, 0, 0, 180deg);
                                            -ms-transform: rotate3d(1, 0, 0, 180deg);
                                            -o-transform: rotate3d(1, 0, 0, 180deg);
                                            transform: rotate3d(1, 0, 0, 180deg);
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                        }
                                        .sb-image-hover-36.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-36.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            -webkit-transform: rotate3d(1, 0, 0, 0deg);
                                            -moz-transform: rotate3d(1, 0, 0, 0deg);
                                            -ms-transform: rotate3d(1, 0, 0, 0deg);
                                            -o-transform: rotate3d(1, 0, 0, 0deg);
                                            transform: rotate3d(1, 0, 0, 0deg);
                                        }
                                        .sb-image-hover-36.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: rotate3d(1, 0, 0, -180deg);
                                            -moz-transform: rotate3d(1, 0, 0, -180deg);
                                            -ms-transform: rotate3d(1, 0, 0, -180deg);
                                            -o-transform: rotate3d(1, 0, 0, -180deg);
                                            transform: rotate3d(1, 0, 0, -180deg);
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                        }
                                        .sb-image-hover-36.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-36.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: rotate3d(1, 0, 0, 0deg);
                                            -moz-transform: rotate3d(1, 0, 0, 0deg);
                                            -ms-transform: rotate3d(1, 0, 0, 0deg);
                                            -o-transform: rotate3d(1, 0, 0, 0deg);
                                            transform: rotate3d(1, 0, 0, 0deg);
                                        }
                                        .sb-image-hover-36:hover .sb-image-info,
                                        .sb-image-hover-36.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;

                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-36, 
                                .sb-image-hover-36 .sb-image-img, .sb-image-hover-36 a .sb-image-img,
                                .sb-image-hover-36 .sb-image-img:before, .sb-image-hover-36 a .sb-image-img:before,
                                .sb-image-hover-36 .sb-image-img img, .sb-image-hover-36 a .sb-image-img img,
                                .sb-image-hover-36 .sb-image-info, .sb-image-hover-36 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-36{
                                    padding: 20px;
                                }
                                .sb-image-map-36 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-36:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-36 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-36 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-36 .sb-image-img,
                                .sb-image-hover-36 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-36 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-36 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-36 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-36 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 8  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-37 sb-image-animation-37">
                                    <div class="sb-image-map-37">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-37 sb-image-hover-37-29 sb-general-effects-9 scale-up"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Awesome Image Hover</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-37 sb-image-animation-37">
                                    <div class="sb-image-map-37">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-37 sb-image-hover-37-30 sb-general-effects-9 scale-down-up"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Work on Features Image</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-37{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            -ms-transform-style: preserve-3d;
                                            -o-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                        }
                                        .sb-image-hover-37 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-37 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-37 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-37 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;

                                        }
                                        .sb-image-hover-37 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-37 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-37 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-37 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-37 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-37:hover .sb-image-img,
                                        .sb-image-hover-37.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                        }
                                        .sb-image-hover-37:hover .sb-image-info,
                                        .sb-image-hover-37.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;

                                        }

                                        .sb-image-hover-37.scale-up .sb-image-info {
                                            -webkit-transform: scale(0.5);
                                            -moz-transform: scale(0.5);
                                            -ms-transform: scale(0.5);
                                            -o-transform: scale(0.5);
                                            transform: scale(0.5);
                                        }
                                        .sb-image-hover-37.scale-up:hover .sb-image-img,
                                        .sb-image-hover-37.scale-up.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            -webkit-transform: scale(1.5);
                                            -moz-transform: scale(1.5);
                                            -ms-transform: scale(1.5);
                                            -o-transform: scale(1.5);
                                            transform: scale(1.5);
                                        }
                                        .sb-image-hover-37.scale-up:hover .sb-image-info,
                                        .sb-image-hover-37.scale-up.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            -o-transform: scale(1);
                                            transform: scale(1);
                                        }

                                        .sb-image-hover-37.scale-down .sb-image-info {
                                            -webkit-transform: scale(1.5);
                                            -moz-transform: scale(1.5);
                                            -ms-transform: scale(1.5);
                                            -o-transform: scale(1.5);
                                            transform: scale(1.5);
                                        }
                                        .sb-image-hover-37.scale-down:hover .sb-image-img,
                                        .sb-image-hover-37.scale-down.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            -webkit-transform: scale(0.5);
                                            -moz-transform: scale(0.5);
                                            -ms-transform: scale(0.5);
                                            -o-transform: scale(0.5);
                                            transform: scale(0.5);
                                        }
                                        .sb-image-hover-37.scale-down:hover .sb-image-info,
                                        .sb-image-hover-37.scale-down.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            -o-transform: scale(1);
                                            transform: scale(1);
                                        }

                                        .sb-image-hover-37.scale-down-up .sb-image-info {
                                            -webkit-transform: scale(0.5);
                                            -moz-transform: scale(0.5);
                                            -ms-transform: scale(0.5);
                                            -o-transform: scale(0.5);
                                            transform: scale(0.5);
                                            -webkit-transition: all 0.35s ease-in-out 0.2s;
                                            -moz-transition: all 0.35s ease-in-out 0.2s;
                                            transition: all 0.35s ease-in-out 0.2s;
                                        }
                                        .sb-image-hover-37.scale-down-up:hover .sb-image-img,
                                        .sb-image-hover-37.scale-down-up.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            -webkit-transform: scale(0.5);
                                            -moz-transform: scale(0.5);
                                            -ms-transform: scale(0.5);
                                            -o-transform: scale(0.5);
                                            transform: scale(0.5);
                                        }
                                        .sb-image-hover-37.scale-down-up:hover .sb-image-info,
                                        .sb-image-hover-37.scale-down-up.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            -o-transform: scale(1);
                                            transform: scale(1);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-37, 
                                .sb-image-hover-37 .sb-image-img, .sb-image-hover-37 a .sb-image-img,
                                .sb-image-hover-37 .sb-image-img:before, .sb-image-hover-37 a .sb-image-img:before,
                                .sb-image-hover-37 .sb-image-img img, .sb-image-hover-37 a .sb-image-img img,
                                .sb-image-hover-37 .sb-image-info, .sb-image-hover-37 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-37{
                                    padding: 20px;
                                }
                                .sb-image-map-37 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-37:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-37 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-37 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-37 .sb-image-img,
                                .sb-image-hover-37 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-37 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-37 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-37 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-37 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 9  <em>( 3 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-38 sb-image-animation-38">
                                    <div class="sb-image-map-38">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-38 sb-image-hover-38-31 sb-general-effects-10 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-38 sb-image-animation-38">
                                    <div class="sb-image-map-38">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-38 sb-image-hover-38-32 sb-general-effects-10 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-38{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-38 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-38 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-38 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-38 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;

                                        }
                                        .sb-image-hover-38 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-38 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-38 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-38 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-38 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-38:hover .sb-image-img,
                                        .sb-image-hover-38.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            -webkit-transform: scale(0.5);
                                            -moz-transform: scale(0.5);
                                            -ms-transform: scale(0.5);
                                            -o-transform: scale(0.5);
                                            transform: scale(0.5);
                                        }
                                        .sb-image-hover-38:hover .sb-image-info,
                                        .sb-image-hover-38.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;

                                        }
                                        .sb-image-hover-38.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-38.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-38.sb-left-to-right.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }

                                        .sb-image-hover-38.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }
                                        .sb-image-hover-38.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-38.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);
                                        }

                                        .sb-image-hover-38.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .sb-image-hover-38.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-38.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }

                                        .sb-image-hover-38.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .sb-image-hover-38.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-38.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-38, 
                                .sb-image-hover-38 .sb-image-img, .sb-image-hover-38 a .sb-image-img,
                                .sb-image-hover-38 .sb-image-img:before, .sb-image-hover-38 a .sb-image-img:before,
                                .sb-image-hover-38 .sb-image-img img, .sb-image-hover-38 a .sb-image-img img,
                                .sb-image-hover-38 .sb-image-info, .sb-image-hover-38 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-38{
                                    padding: 20px;
                                }
                                .sb-image-map-38 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-38:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-38 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-38 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-38 .sb-image-img,
                                .sb-image-hover-38 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-38 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-38 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-38 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-38 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 10  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-39  sb-image-animation-39">
                                    <div class="sb-image-map-39">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-39 sb-image-hover-39-33 sb-general-effects-11 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-39  sb-image-animation-39">
                                    <div class="sb-image-map-39">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-39 sb-image-hover-39-34 sb-general-effects-11 sb-bottom-to-top"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-39{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-39 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-39 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-39 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            z-index:11;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-39 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;

                                        }
                                        .sb-image-hover-39 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-39 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-39 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-39 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-39 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-39:hover .sb-image-info,
                                        .sb-image-hover-39.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            -o-transform: scale(1);
                                            transform: scale(1);

                                        }
                                        .sb-image-hover-39.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-39.sb-top-to-bottom.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateY(50px) scale(0.4);
                                            -moz-transform: translateY(50px) scale(0.4);
                                            -ms-transform: translateY(50px) scale(0.4);
                                            -o-transform: translateY(50px) scale(0.4);
                                            transform: translateY(50px) scale(0.4);
                                        }

                                        .sb-image-hover-39.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-39.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateY(-50px) scale(0.4);
                                            -moz-transform: translateY(-50px) scale(0.4);
                                            -ms-transform: translateY(-50px) scale(0.4);
                                            -o-transform: translateY(-50px) scale(0.4);
                                            transform: translateY(-50px) scale(0.4);
                                        }


                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-39, 
                                .sb-image-hover-39 .sb-image-img, .sb-image-hover-39 a .sb-image-img,
                                .sb-image-hover-39 .sb-image-img:before, .sb-image-hover-39 a .sb-image-img:before,
                                .sb-image-hover-39 .sb-image-img img, .sb-image-hover-39 a .sb-image-img img,
                                .sb-image-hover-39 .sb-image-info, .sb-image-hover-39 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-39{
                                    padding: 20px;
                                }
                                .sb-image-map-39 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-39:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-39 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-39 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-39 .sb-image-img,
                                .sb-image-hover-39 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-39 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-39 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-39 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-39 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 11  <em>( 2 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-40  sb-image-animation-40">
                                    <div class="sb-image-map-40">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-40 sb-image-hover-40-35 sb-general-effects-12 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-40 sb-image-animation-40">
                                    <div class="sb-image-map-40">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-40 sb-image-hover-40-36 sb-general-effects-12 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-40{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-40 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-40 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-40 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-in-out;
                                            -moz-transition: all 0.4s ease-in-out;
                                            transition: all 0.4s ease-in-out;
                                        }
                                        .sb-image-hover-40 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease;
                                            -moz-transition: all 0.35s ease;
                                            transition: all 0.35s ease;

                                        }
                                        .sb-image-hover-40 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-40 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-40 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-40 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-40 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-40:hover .sb-image-img,
                                        .sb-image-hover-40.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                        }
                                        .sb-image-hover-40:hover .sb-image-info,
                                        .sb-image-hover-40.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;
                                        }
                                        .sb-image-hover-40.sb-left-to-right .sb-image-img {
                                            -webkit-transform: translateZ(0) rotateY(0);
                                            -moz-transform: translateZ(0) rotateY(0);
                                            -ms-transform: translateZ(0) rotateY(0);
                                            -o-transform: translateZ(0) rotateY(0);
                                            transform: translateZ(0) rotateY(0);
                                        }
                                        .sb-image-hover-40.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateZ(-1000px) rotateY(-90deg);
                                            -moz-transform: translateZ(-1000px) rotateY(-90deg);
                                            -ms-transform: translateZ(-1000px) rotateY(-90deg);
                                            -o-transform: translateZ(-1000px) rotateY(-90deg);
                                            transform: translateZ(-1000px) rotateY(-90deg);
                                        }
                                        .sb-image-hover-40.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-40.sb-left-to-right.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateZ(-1000px) rotateY(90deg);
                                            -moz-transform: translateZ(-1000px) rotateY(90deg);
                                            -ms-transform: translateZ(-1000px) rotateY(90deg);
                                            -o-transform: translateZ(-1000px) rotateY(90deg);
                                            transform: translateZ(-1000px) rotateY(90deg);
                                        }
                                        .sb-image-hover-40.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-40.sb-left-to-right.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateZ(0) rotateY(0);
                                            -moz-transform: translateZ(0) rotateY(0);
                                            -ms-transform: translateZ(0) rotateY(0);
                                            -o-transform: translateZ(0) rotateY(0);
                                            transform: translateZ(0) rotateY(0);
                                        }

                                        .sb-image-hover-40.sb-right-to-left .sb-image-img {
                                            -webkit-transform: translateZ(0) rotateY(0);
                                            -moz-transform: translateZ(0) rotateY(0);
                                            -ms-transform: translateZ(0) rotateY(0);
                                            -o-transform: translateZ(0) rotateY(0);
                                            transform: translateZ(0) rotateY(0);
                                        }
                                        .sb-image-hover-40.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateZ(-1000px) rotateY(90deg);
                                            -moz-transform: translateZ(-1000px) rotateY(90deg);
                                            -ms-transform: translateZ(-1000px) rotateY(90deg);
                                            -o-transform: translateZ(-1000px) rotateY(90deg);
                                            transform: translateZ(-1000px) rotateY(90deg);
                                        }
                                        .sb-image-hover-40.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-40.sb-right-to-left.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateZ(-1000px) rotateY(-90deg);
                                            -moz-transform: translateZ(-1000px) rotateY(-90deg);
                                            -ms-transform: translateZ(-1000px) rotateY(-90deg);
                                            -o-transform: translateZ(-1000px) rotateY(-90deg);
                                            transform: translateZ(-1000px) rotateY(-90deg);
                                        }
                                        .sb-image-hover-40.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-40.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateZ(0) rotateY(0);
                                            -moz-transform: translateZ(0) rotateY(0);
                                            -ms-transform: translateZ(0) rotateY(0);
                                            -o-transform: translateZ(0) rotateY(0);
                                            transform: translateZ(0) rotateY(0);
                                        }

                                        .sb-image-hover-40.sb-top-to-bottom .sb-image-img {
                                            -webkit-transform: translateZ(0) rotateX(0);
                                            -moz-transform: translateZ(0) rotateX(0);
                                            -ms-transform: translateZ(0) rotateX(0);
                                            -o-transform: translateZ(0) rotateX(0);
                                            transform: translateZ(0) rotateX(0);
                                        }
                                        .sb-image-hover-40.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateZ(-1000px) rotateX(90deg);
                                            -moz-transform: translateZ(-1000px) rotateX(90deg);
                                            -ms-transform: translateZ(-1000px) rotateX(90deg);
                                            -o-transform: translateZ(-1000px) rotateX(90deg);
                                            transform: translateZ(-1000px) rotateX(90deg);
                                        }
                                        .sb-image-hover-40.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-40.sb-top-to-bottom.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateZ(-1000px) rotateX(-90deg);
                                            -moz-transform: translateZ(-1000px) rotateX(-90deg);
                                            -ms-transform: translateZ(-1000px) rotateX(-90deg);
                                            -o-transform: translateZ(-1000px) rotateX(-90deg);
                                            transform: translateZ(-1000px) rotateX(-90deg);
                                        }
                                        .sb-image-hover-40.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-40.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateZ(0) rotateX(0);
                                            -moz-transform: translateZ(0) rotateX(0);
                                            -ms-transform: translateZ(0) rotateX(0);
                                            -o-transform: translateZ(0) rotateX(0);
                                            transform: translateZ(0) rotateX(0);
                                        }

                                        .sb-image-hover-40.sb-bottom-to-top .sb-image-img {
                                            -webkit-transform: translateZ(0) rotateX(0);
                                            -moz-transform: translateZ(0) rotateX(0);
                                            -ms-transform: translateZ(0) rotateX(0);
                                            -o-transform: translateZ(0) rotateX(0);
                                            transform: translateZ(0) rotateX(0);
                                        }
                                        .sb-image-hover-40.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateZ(-1000px) rotateX(-90deg);
                                            -moz-transform: translateZ(-1000px) rotateX(-90deg);
                                            -ms-transform: translateZ(-1000px) rotateX(-90deg);
                                            -o-transform: translateZ(-1000px) rotateX(-90deg);
                                            transform: translateZ(-1000px) rotateX(-90deg);
                                        }
                                        .sb-image-hover-40.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-40.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateZ(-1000px) rotateX(90deg);
                                            -moz-transform: translateZ(-1000px) rotateX(90deg);
                                            -ms-transform: translateZ(-1000px) rotateX(90deg);
                                            -o-transform: translateZ(-1000px) rotateX(90deg);
                                            transform: translateZ(-1000px) rotateX(90deg);
                                        }
                                        .sb-image-hover-40.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-40.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateZ(0) rotateX(0);
                                            -moz-transform: translateZ(0) rotateX(0);
                                            -ms-transform: translateZ(0) rotateX(0);
                                            -o-transform: translateZ(0) rotateX(0);
                                            transform: translateZ(0) rotateX(0);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-40, 
                                .sb-image-hover-40 .sb-image-img, .sb-image-hover-40 a .sb-image-img,
                                .sb-image-hover-40 .sb-image-img:before, .sb-image-hover-40 a .sb-image-img:before,
                                .sb-image-hover-40 .sb-image-img img, .sb-image-hover-40 a .sb-image-img img,
                                .sb-image-hover-40 .sb-image-info, .sb-image-hover-40 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-40{
                                    padding: 20px;
                                }
                                .sb-image-map-40 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-40:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-40 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-40 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-40 .sb-image-img,
                                .sb-image-hover-40 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-40 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-40 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-40 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-40 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 12  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-41 sb-image-animation-41">
                                    <div class="sb-image-map-41">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square  sb-image-hover-41 sb-image-hover-41-37 sb-general-effects-13 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-41 sb-image-animation-41">
                                    <div class="sb-image-map-41">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-41 sb-image-hover-41-38 sb-general-effects-13 sb-right-to-left"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with SiteOrigin</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-41{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-41 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-41 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-41 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-in-out;
                                            -moz-transition: all 0.4s ease-in-out;
                                            transition: all 0.4s ease-in-out;
                                        }
                                        .sb-image-hover-41 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease;
                                            -moz-transition: all 0.35s ease;
                                            transition: all 0.35s ease;

                                        }
                                        .sb-image-hover-41 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-41 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-41 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-41 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-41 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-41:hover .sb-image-info,
                                        .sb-image-hover-41.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;
                                        }

                                        .sb-image-hover-41.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateZ(-1000px) rotateY(-90deg);
                                            -moz-transform: translateZ(-1000px) rotateY(-90deg);
                                            -ms-transform: translateZ(-1000px) rotateY(-90deg);
                                            -o-transform: translateZ(-1000px) rotateY(-90deg);
                                            transform: translateZ(-1000px) rotateY(-90deg);
                                        }

                                        .sb-image-hover-41.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-41.sb-left-to-right.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateZ(0) rotateY(0);
                                            -moz-transform: translateZ(0) rotateY(0);
                                            -ms-transform: translateZ(0) rotateY(0);
                                            -o-transform: translateZ(0) rotateY(0);
                                            transform: translateZ(0) rotateY(0);
                                        }

                                        .sb-image-hover-41.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateZ(-1000px) rotateY(90deg);
                                            -moz-transform: translateZ(-1000px) rotateY(90deg);
                                            -ms-transform: translateZ(-1000px) rotateY(90deg);
                                            -o-transform: translateZ(-1000px) rotateY(90deg);
                                            transform: translateZ(-1000px) rotateY(90deg);
                                        }
                                        .sb-image-hover-41.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-41.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateZ(0) rotateY(0);
                                            -moz-transform: translateZ(0) rotateY(0);
                                            -ms-transform: translateZ(0) rotateY(0);
                                            -o-transform: translateZ(0) rotateY(0);
                                            transform: translateZ(0) rotateY(0);
                                        }
                                        .sb-image-hover-41.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateZ(-1000px) rotateX(90deg);
                                            -moz-transform: translateZ(-1000px) rotateX(90deg);
                                            -ms-transform: translateZ(-1000px) rotateX(90deg);
                                            -o-transform: translateZ(-1000px) rotateX(90deg);
                                            transform: translateZ(-1000px) rotateX(90deg);
                                        }
                                        .sb-image-hover-41.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-41.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateZ(0) rotateX(0);
                                            -moz-transform: translateZ(0) rotateX(0);
                                            -ms-transform: translateZ(0) rotateX(0);
                                            -o-transform: translateZ(0) rotateX(0);
                                            transform: translateZ(0) rotateX(0);
                                        }
                                        .sb-image-hover-41.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateZ(-1000px) rotateX(-90deg);
                                            -moz-transform: translateZ(-1000px) rotateX(-90deg);
                                            -ms-transform: translateZ(-1000px) rotateX(-90deg);
                                            -o-transform: translateZ(-1000px) rotateX(-90deg);
                                            transform: translateZ(-1000px) rotateX(-90deg);
                                        }
                                        .sb-image-hover-41.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-41.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateZ(0) rotateX(0);
                                            -moz-transform: translateZ(0) rotateX(0);
                                            -ms-transform: translateZ(0) rotateX(0);
                                            -o-transform: translateZ(0) rotateX(0);
                                            transform: translateZ(0) rotateX(0);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-41, 
                                .sb-image-hover-41 .sb-image-img, .sb-image-hover-41 a .sb-image-img,
                                .sb-image-hover-41 .sb-image-img:before, .sb-image-hover-41 a .sb-image-img:before,
                                .sb-image-hover-41 .sb-image-img img, .sb-image-hover-41 a .sb-image-img img,
                                .sb-image-hover-41 .sb-image-info, .sb-image-hover-41 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-41{
                                    padding: 20px;
                                }
                                .sb-image-map-41 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-41:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-41 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-41 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-41 .sb-image-img,
                                .sb-image-hover-41 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-41 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-41 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-41 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-41 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 13  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-42 sb-image-animation-42">
                                    <div class="sb-image-map-42">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-42 sb-image-hover-42-39 sb-general-effects-14 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-42 sb-image-animation-42">
                                    <div class="sb-image-map-42">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-42 sb-image-hover-42-40 sb-general-effects-14 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-42{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;            
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-42 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-42 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-42 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-in-out;
                                            -moz-transition: all 0.4s ease-in-out;
                                            transition: all 0.4s ease-in-out;
                                        }
                                        .sb-image-hover-42 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;

                                        }
                                        .sb-image-hover-42 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-42 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-42 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-42 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-42 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-42:hover .sb-image-img,
                                        .sb-image-hover-42.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            visibility: hidden;
                                        }
                                        .sb-image-hover-42:hover .sb-image-info,
                                        .sb-image-hover-42.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;
                                        }

                                        .sb-image-hover-42.sb-left-to-right .sb-image-img {
                                            -webkit-transform: rotateY(0);
                                            -moz-transform: rotateY(0);
                                            -ms-transform: rotateY(0);
                                            -o-transform: rotateY(0);
                                            transform: rotateY(0);
                                            -webkit-transform-origin: 100% 50%;
                                            -moz-transform-origin: 100% 50%;
                                            -ms-transform-origin: 100% 50%;
                                            -o-transform-origin: 100% 50%;
                                            transform-origin: 100% 50%;
                                        }
                                        .sb-image-hover-42.sb-left-to-right .sb-image-info {
                                            -webkit-transform: rotateY(90deg);
                                            -moz-transform: rotateY(90deg);
                                            -ms-transform: rotateY(90deg);
                                            -o-transform: rotateY(90deg);
                                            transform: rotateY(90deg);
                                            -webkit-transform-origin: 0% 50%;
                                            -moz-transform-origin: 0% 50%;
                                            -ms-transform-origin: 0% 50%;
                                            -o-transform-origin: 0% 50%;
                                            transform-origin: 0% 50%;
                                        }
                                        .sb-image-hover-42.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-42.sb-left-to-right.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotateY(-90deg);
                                            -moz-transform: rotateY(-90deg);
                                            -ms-transform: rotateY(-90deg);
                                            -o-transform: rotateY(-90deg);
                                            transform: rotateY(-90deg);
                                        }
                                        .sb-image-hover-42.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-42.sb-left-to-right.sb-touch-hover .sb-image-info {
                                            -webkit-transform: rotateY(0);
                                            -moz-transform: rotateY(0);
                                            -ms-transform: rotateY(0);
                                            -o-transform: rotateY(0);
                                            transform: rotateY(0);
                                        }

                                        .sb-image-hover-42.sb-right-to-left .sb-image-img {
                                            -webkit-transform: rotateY(0);
                                            -moz-transform: rotateY(0);
                                            -ms-transform: rotateY(0);
                                            -o-transform: rotateY(0);
                                            transform: rotateY(0);
                                            -webkit-transform-origin: 0% 50%;
                                            -moz-transform-origin: 0% 50%;
                                            -ms-transform-origin: 0% 50%;
                                            -o-transform-origin: 0% 50%;
                                            transform-origin: 0% 50%;
                                        }
                                        .sb-image-hover-42.sb-right-to-left .sb-image-info {
                                            -webkit-transform: rotateY(-90deg);
                                            -moz-transform: rotateY(-90deg);
                                            -ms-transform: rotateY(-90deg);
                                            -o-transform: rotateY(-90deg);
                                            transform: rotateY(-90deg);
                                            -webkit-transform-origin: 100% 50%;
                                            -moz-transform-origin: 100% 50%;
                                            -ms-transform-origin: 100% 50%;
                                            -o-transform-origin: 100% 50%;
                                            transform-origin: 100% 50%;
                                        }
                                        .sb-image-hover-42.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-42.sb-right-to-left.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotateY(90deg);
                                            -moz-transform: rotateY(90deg);
                                            -ms-transform: rotateY(90deg);
                                            -o-transform: rotateY(90deg);
                                            transform: rotateY(90deg);
                                        }
                                        .sb-image-hover-42.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-42.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            -webkit-transform: rotateY(0);
                                            -moz-transform: rotateY(0);
                                            -ms-transform: rotateY(0);
                                            -o-transform: rotateY(0);
                                            transform: rotateY(0);
                                        }

                                        .sb-image-hover-42.sb-top-to-bottom .sb-image-img {
                                            -webkit-transform: rotateX(0);
                                            -moz-transform: rotateX(0);
                                            -ms-transform: rotateX(0);
                                            -o-transform: rotateX(0);
                                            transform: rotateX(0);
                                            -webkit-transform-origin: 50% 100%;
                                            -moz-transform-origin: 50% 100%;
                                            -ms-transform-origin: 50% 100%;
                                            -o-transform-origin: 50% 100%;
                                            transform-origin: 50% 100%;
                                        }
                                        .sb-image-hover-42.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: rotateX(-90deg);
                                            -moz-transform: rotateX(-90deg);
                                            -ms-transform: rotateX(-90deg);
                                            -o-transform: rotateX(-90deg);
                                            transform: rotateX(-90deg);
                                            -webkit-transform-origin: 50% 0;
                                            -moz-transform-origin: 50% 0;
                                            -ms-transform-origin: 50% 0;
                                            -o-transform-origin: 50% 0;
                                            transform-origin: 50% 0;
                                        }
                                        .sb-image-hover-42.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-42.sb-top-to-bottom.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotateX(90deg);
                                            -moz-transform: rotateX(90deg);
                                            -ms-transform: rotateX(90deg);
                                            -o-transform: rotateX(90deg);
                                            transform: rotateX(90deg);
                                        }
                                        .sb-image-hover-42.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-42.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            -webkit-transform: rotateX(0);
                                            -moz-transform: rotateX(0);
                                            -ms-transform: rotateX(0);
                                            -o-transform: rotateX(0);
                                            transform: rotateX(0);
                                        }

                                        .sb-image-hover-42.sb-bottom-to-top .sb-image-img {
                                            -webkit-transform: rotateX(0);
                                            -moz-transform: rotateX(0);
                                            -ms-transform: rotateX(0);
                                            -o-transform: rotateX(0);
                                            transform: rotateX(0);
                                            -webkit-transform-origin: 50% 0;
                                            -moz-transform-origin: 50% 0;
                                            -ms-transform-origin: 50% 0;
                                            -o-transform-origin: 50% 0;
                                            transform-origin: 50% 0;
                                        }
                                        .sb-image-hover-42.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: rotateX(90deg);
                                            -moz-transform: rotateX(90deg);
                                            -ms-transform: rotateX(90deg);
                                            -o-transform: rotateX(90deg);
                                            transform: rotateX(90deg);
                                            -webkit-transform-origin: 50% 100%;
                                            -moz-transform-origin: 50% 100%;
                                            -ms-transform-origin: 50% 100%;
                                            -o-transform-origin: 50% 100%;
                                            transform-origin: 50% 100%;
                                        }
                                        .sb-image-hover-42.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-42.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotateX(-90deg);
                                            -moz-transform: rotateX(-90deg);
                                            -ms-transform: rotateX(-90deg);
                                            -o-transform: rotateX(-90deg);
                                            transform: rotateX(-90deg);
                                        }
                                        .sb-image-hover-42.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-42.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: rotateX(0);
                                            -moz-transform: rotateX(0);
                                            -ms-transform: rotateX(0);
                                            -o-transform: rotateX(0);
                                            transform: rotateX(0);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-42, 
                                .sb-image-hover-42 .sb-image-img, .sb-image-hover-42 a .sb-image-img,
                                .sb-image-hover-42 .sb-image-img:before, .sb-image-hover-42 a .sb-image-img:before,
                                .sb-image-hover-42 .sb-image-img img, .sb-image-hover-42 a .sb-image-img img,
                                .sb-image-hover-42 .sb-image-info, .sb-image-hover-42 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-42{
                                    padding: 20px;
                                }
                                .sb-image-map-42 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-42:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-42 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-42 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-42 .sb-image-img,
                                .sb-image-hover-42 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-42 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-42 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-42 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-42 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 14  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-43 sb-image-animation-43">
                                    <div class="sb-image-map-43">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-43 sb-image-hover-43-41 sb-general-effects-15"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-43 sb-image-animation-43">
                                    <div class="sb-image-map-43">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-43 sb-image-hover-43-42 sb-general-effects-15"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-43{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-43 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-43 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-43 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-43 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transform: scale(0.5) rotate(-720deg);
                                            -moz-transform: scale(0.5) rotate(-720deg);
                                            -ms-transform: scale(0.5) rotate(-720deg);
                                            -o-transform: scale(0.5) rotate(-720deg);
                                            transform: scale(0.5) rotate(-720deg);
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;

                                        }
                                        .sb-image-hover-43 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-43 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-43 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-43 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-43 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-43:hover .sb-image-img,
                                        .sb-image-hover-43.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                        }
                                        .sb-image-hover-43:hover .sb-image-info,
                                        .sb-image-hover-43.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;

                                        }
                                        .sb-image-hover-43:hover .sb-image-img,
                                        .sb-image-hover-43.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            visibility: hidden;
                                            -webkit-transform: scale(0.5) rotate(720deg);
                                            -moz-transform: scale(0.5) rotate(720deg);
                                            -ms-transform: scale(0.5) rotate(720deg);
                                            -o-transform: scale(0.5) rotate(720deg);
                                            transform: scale(0.5) rotate(720deg);
                                        }
                                        .sb-image-hover-43:hover .sb-image-info,
                                        .sb-image-hover-43.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                            -webkit-transform: scale(1) rotate(0);
                                            -moz-transform: scale(1) rotate(0);
                                            -ms-transform: scale(1) rotate(0);
                                            -o-transform: scale(1) rotate(0);
                                            transform: scale(1) rotate(0);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-43, 
                                .sb-image-hover-43 .sb-image-img, .sb-image-hover-43 a .sb-image-img,
                                .sb-image-hover-43 .sb-image-img:before, .sb-image-hover-43 a .sb-image-img:before,
                                .sb-image-hover-43 .sb-image-img img, .sb-image-hover-43 a .sb-image-img img,
                                .sb-image-hover-43 .sb-image-info, .sb-image-hover-43 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-43{
                                    padding: 20px;
                                }
                                .sb-image-map-43 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-43:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-43 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-43 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-43 .sb-image-img,
                                .sb-image-hover-43 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-43 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-43 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-43 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-43 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>
                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 15  <em>( Single Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row ">
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-44  sb-image-animation-44">
                                    <div class="sb-image-map-44">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-44 sb-image-hover-44-43 sb-general-effects-16 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-44 sb-image-animation-44">
                                    <div class="sb-image-map-44">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-44 sb-image-hover-44-44 sb-general-effects-16 sb-right-to-left"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-44{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-44 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-44 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-44 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            z-index:11;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-44 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease;
                                            -moz-transition: all 0.35s ease;
                                            transition: all 0.35s ease;

                                        }
                                        .sb-image-hover-44 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-44 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-44 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-44 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-44 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-44:hover .sb-image-info,
                                        .sb-image-hover-44.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;

                                        }
                                        .sb-image-hover-44.sb-left-to-right .sb-image-img {
                                            -webkit-transform-origin: 95% 40%;
                                            -moz-transform-origin: 95% 40%;
                                            -ms-transform-origin: 95% 40%;
                                            -o-transform-origin: 95% 40%;
                                            transform-origin: 95% 40%;
                                        }
                                        .sb-image-hover-44.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-44.sb-left-to-right.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate(-120deg);
                                            -moz-transform: rotate(-120deg);
                                            -ms-transform: rotate(-120deg);
                                            -o-transform: rotate(-120deg);
                                            transform: rotate(-120deg);
                                        }
                                        .sb-image-hover-44.sb-right-to-left .sb-image-img {
                                            -webkit-transform-origin: 5% 40%;
                                            -moz-transform-origin: 5% 40%;
                                            -ms-transform-origin: 5% 40%;
                                            -o-transform-origin: 5% 40%;
                                            transform-origin: 5% 40%;
                                        }

                                        .sb-image-hover-44.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-44.sb-right-to-left.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate(120deg);
                                            -moz-transform: rotate(120deg);
                                            -ms-transform: rotate(120deg);
                                            -o-transform: rotate(120deg);
                                            transform: rotate(120deg);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-44, 
                                .sb-image-hover-44 .sb-image-img, .sb-image-hover-44 a .sb-image-img,
                                .sb-image-hover-44 .sb-image-img:before, .sb-image-hover-44 a .sb-image-img:before,
                                .sb-image-hover-44 .sb-image-img img, .sb-image-hover-44 a .sb-image-img img,
                                .sb-image-hover-44 .sb-image-info, .sb-image-hover-44 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-44{
                                    padding: 20px;
                                }
                                .sb-image-map-44 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-44:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-44 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-44 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-44 .sb-image-img,
                                .sb-image-hover-44 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-44 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-44 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-44 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-44 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 16  <em>( 2 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row ">
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-45 sb-image-animation-45">
                                    <div class="sb-image-map-45">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-45 sb-image-hover-45-45 sb-general-effects-17"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-45  sb-image-animation-45">
                                    <div class="sb-image-map-45">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-45 sb-image-hover-45-46 sb-general-effects-17"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-45{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-45 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-45 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-45 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-45 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transform: scale(0.5) rotate(-90deg);
                                            -moz-transform: scale(0.5) rotate(-90deg);
                                            -ms-transform: scale(0.5) rotate(-90deg);
                                            -o-transform: scale(0.5) rotate(-90deg);
                                            transform: scale(0.5) rotate(-90deg);
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;

                                        }
                                        .sb-image-hover-45 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-45 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-45 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-45 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-45 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-45:hover .sb-image-img,
                                        .sb-image-hover-45.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                        }
                                        .sb-image-hover-45:hover .sb-image-info,
                                        .sb-image-hover-45.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;

                                        }
                                        .sb-image-hover-45:hover .sb-image-img,
                                        .sb-image-hover-45.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            visibility: hidden;
                                            -webkit-transform: scale(0.5) rotate(90deg);
                                            -moz-transform: scale(0.5) rotate(90deg);
                                            -ms-transform: scale(0.5) rotate(90deg);
                                            -o-transform: scale(0.5) rotate(90deg);
                                            transform: scale(0.5) rotate(90deg);
                                        }
                                        .sb-image-hover-45:hover .sb-image-info,
                                        .sb-image-hover-45.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                            -webkit-transform: scale(1) rotate(0);
                                            -moz-transform: scale(1) rotate(0);
                                            -ms-transform: scale(1) rotate(0);
                                            -o-transform: scale(1) rotate(0);
                                            transform: scale(1) rotate(0);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-45, 
                                .sb-image-hover-45 .sb-image-img, .sb-image-hover-45 a .sb-image-img,
                                .sb-image-hover-45 .sb-image-img:before, .sb-image-hover-45 a .sb-image-img:before,
                                .sb-image-hover-45 .sb-image-img img, .sb-image-hover-45 a .sb-image-img img,
                                .sb-image-hover-45 .sb-image-info, .sb-image-hover-45 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-45{
                                    padding: 20px;
                                }
                                .sb-image-map-45 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-45:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-45 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-45 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-45 .sb-image-img,
                                .sb-image-hover-45 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-45 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-45 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-45 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-45 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 17  <em>( Single Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row ">
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-46  sb-image-animation-46">
                                    <div class="sb-image-map-46">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-46 sb-image-hover-46-47 sb-general-effects-18 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-46 sb-image-animation-46">
                                    <div class="sb-image-map-46">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-46 sb-image-hover-46-48 sb-general-effects-18 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-46{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-46 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-46 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-46 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            z-index:11;
                                            pointer-events: none;
                                            -webkit-transition: all 0.4s ease-out;
                                            -moz-transition: all 0.4s ease-out;
                                            transition: all 0.4s ease-out;
                                        }
                                        .sb-image-hover-46 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;

                                        }
                                        .sb-image-hover-46 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-46 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-46 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-46 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-46 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-46:hover .sb-image-info,
                                        .sb-image-hover-46.sb-touch-hover .sb-image-info{
                                            visibility: visible;
                                            opacity: 1;

                                        }
                                        .sb-image-hover-46.sb-bottom-to-top .sb-image-img {
                                            -webkit-transform-origin: 50% 0;
                                            -moz-transform-origin: 50% 0;
                                            -ms-transform-origin: 50% 0;
                                            -o-transform-origin: 50% 0;
                                            transform-origin: 50% 0;
                                        }
                                        .sb-image-hover-46.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-46.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate3d(1, 0, 0, 180deg);
                                            -moz-transform: rotate3d(1, 0, 0, 180deg);
                                            -ms-transform: rotate3d(1, 0, 0, 180deg);
                                            -o-transform: rotate3d(1, 0, 0, 180deg);
                                            transform: rotate3d(1, 0, 0, 180deg);
                                        }

                                        .sb-image-hover-46.sb-top-to-bottom .sb-image-img {
                                            -webkit-transform-origin: 50% 100%;
                                            -moz-transform-origin: 50% 100%;
                                            -ms-transform-origin: 50% 100%;
                                            -o-transform-origin: 50% 100%;
                                            transform-origin: 50% 100%;
                                        }
                                        .sb-image-hover-46.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-46.sb-top-to-bottom.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate3d(1, 0, 0, -180deg);
                                            -moz-transform: rotate3d(1, 0, 0, -180deg);
                                            -ms-transform: rotate3d(1, 0, 0, -180deg);
                                            -o-transform: rotate3d(1, 0, 0, -180deg);
                                            transform: rotate3d(1, 0, 0, -180deg);
                                        }

                                        .sb-image-hover-46.sb-left-to-right .sb-image-img,
                                        .sb-image-hover-46.sb-left-to-right .sb-image-img{
                                            -webkit-transform-origin: 100% 50%;
                                            -moz-transform-origin: 100% 50%;
                                            -ms-transform-origin: 100% 50%;
                                            -o-transform-origin: 100% 50%;
                                            transform-origin: 100% 50%;
                                        }
                                        .sb-image-hover-46.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-46.sb-left-to-right.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate3d(0, 1, 0, 180deg);
                                            -moz-transform: rotate3d(0, 1, 0, 180deg);
                                            -ms-transform: rotate3d(0, 1, 0, 180deg);
                                            -o-transform: rotate3d(0, 1, 0, 180deg);
                                            transform: rotate3d(0, 1, 0, 180deg);
                                        }

                                        .sb-image-hover-46.sb-right-to-left .sb-image-img {
                                            -webkit-transform-origin: 0% 50%;
                                            -moz-transform-origin: 0% 50%;
                                            -ms-transform-origin: 0% 50%;
                                            -o-transform-origin: 0% 50%;
                                            transform-origin: 0% 50%;
                                        }
                                        .sb-image-hover-46.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-46.sb-right-to-left.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate3d(0, 1, 0, -180deg);
                                            -moz-transform: rotate3d(0, 1, 0, -180deg);
                                            -ms-transform: rotate3d(0, 1, 0, -180deg);
                                            -o-transform: rotate3d(0, 1, 0, -180deg);
                                            transform: rotate3d(0, 1, 0, -180deg);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-46, 
                                .sb-image-hover-46 .sb-image-img, .sb-image-hover-46 a .sb-image-img,
                                .sb-image-hover-46 .sb-image-img:before, .sb-image-hover-46 a .sb-image-img:before,
                                .sb-image-hover-46 .sb-image-img img, .sb-image-hover-46 a .sb-image-img img,
                                .sb-image-hover-46 .sb-image-info, .sb-image-hover-46 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-46{
                                    padding: 20px;
                                }
                                .sb-image-map-46 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-46:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-46 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-46 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-46 .sb-image-img,
                                .sb-image-hover-46 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-46 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-46 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-46 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-46 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 18  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row ">
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-47  sb-image-animation-47">
                                    <div class="sb-image-map-47">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-47 sb-image-hover-47-49 sb-general-effects-19 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-47 sb-image-animation-47">
                                    <div class="sb-image-map-47">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-47 sb-image-hover-47-50 sb-general-effects-19 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-47{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-47 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-47 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-47 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transform: scale(1) rotate(0);
                                            -moz-transform: scale(1) rotate(0);
                                            -ms-transform: scale(1) rotate(0);
                                            -o-transform: scale(1) rotate(0);
                                            transform: scale(1) rotate(0);
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                        }
                                        .sb-image-hover-47 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;

                                        }
                                        .sb-image-hover-47 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-47 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-47 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-47 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-47 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-47:hover .sb-image-info,
                                        .sb-image-hover-47.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                            -webkit-transform: scale(1) rotate(0);
                                            -moz-transform: scale(1) rotate(0);
                                            -ms-transform: scale(1) rotate(0);
                                            -o-transform: scale(1) rotate(0);
                                            transform: scale(1) rotate(0);

                                        }        
                                        .sb-image-hover-47:hover .sb-image-img,
                                        .sb-image-hover-47.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            visibility: hidden;
                                            -webkit-transform: scale(0.5) rotate(1440deg);
                                            -moz-transform: scale(0.5) rotate(1440deg);
                                            -ms-transform: scale(0.5) rotate(1440deg);
                                            -o-transform: scale(0.5) rotate(1440deg);
                                            transform: scale(0.5) rotate(1440deg);
                                        }

                                        .sb-image-hover-47.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-47.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-47.sb-left-to-right.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateX(0%);
                                            -moz-transform: translateX(-0%);
                                            -ms-transform: translateX(0%);
                                            -o-transform: translateX(0%);
                                            transform: translateX(0%);
                                        }

                                        .sb-image-hover-47.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }
                                        .sb-image-hover-47.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-47.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateX(0%);
                                            -moz-transform: translateX(0%);
                                            -ms-transform: translateX(0%);
                                            -o-transform: translateX(0%);
                                            transform: translateX(0%);
                                        }


                                        .sb-image-hover-47.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .sb-image-hover-47.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-47.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0%);
                                            -moz-transform: translateY(0%);
                                            -ms-transform: translateY(0%);
                                            -o-transform: translateY(0%);
                                            transform: translateY(0%);
                                        }
                                        .sb-image-hover-47.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .sb-image-hover-47.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-47.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0%);
                                            -moz-transform: translateY(0%);
                                            -ms-transform: translateY(0%);
                                            -o-transform: translateY(0%);
                                            transform: translateY(0%);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-47, 
                                .sb-image-hover-47 .sb-image-img, .sb-image-hover-47 a .sb-image-img,
                                .sb-image-hover-47 .sb-image-img:before, .sb-image-hover-47 a .sb-image-img:before,
                                .sb-image-hover-47 .sb-image-img img, .sb-image-hover-47 a .sb-image-img img,
                                .sb-image-hover-47 .sb-image-info, .sb-image-hover-47 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-47{
                                    padding: 20px;
                                }
                                .sb-image-map-47 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-47:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-47 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-47 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-47 .sb-image-img,
                                .sb-image-hover-47 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-47 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-47 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-47 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-47 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 19  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row ">
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-48 sb-image-animation-48">
                                    <div class="sb-image-map-48">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-48 sb-image-hover-48-51 sb-general-effects-20 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-48 sb-image-animation-48">
                                    <div class="sb-image-map-48">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-48 sb-image-hover-48-52 sb-general-effects-20 sb-right-to-left"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-48{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-48 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-48 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-48 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            z-index:11;
                                            -webkit-transform: scale(1) rotate(0);
                                            -moz-transform: scale(1) rotate(0);
                                            -ms-transform: scale(1) rotate(0);
                                            -o-transform: scale(1) rotate(0);
                                            transform: scale(1) rotate(0);
                                            -webkit-transition: all 2s ease-in-out;
                                            -moz-transition: all 2s ease-in-out;
                                            transition: all 2s ease-in-out;
                                        }
                                        .sb-image-hover-48 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;

                                        }
                                        .sb-image-hover-48 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-48 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-48 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-48 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-48 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-48:hover .sb-image-info,
                                        .sb-image-hover-48.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                            -webkit-transform: scale(1) rotate(0);
                                            -moz-transform: scale(1) rotate(0);
                                            -ms-transform: scale(1) rotate(0);
                                            -o-transform: scale(1) rotate(0);
                                            transform: scale(1) rotate(0);

                                        }        
                                        .sb-image-hover-48:hover .sb-image-img,
                                        .sb-image-hover-48.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            visibility: hidden;
                                            -webkit-transform: scale(1) rotate(1440deg);
                                            -moz-transform: scale(1) rotate(1440deg);
                                            -ms-transform: scale(1) rotate(1440deg);
                                            -o-transform: scale(1) rotate(1440deg);
                                            transform: scale(1) rotate(1440deg);
                                        }

                                        .sb-image-hover-48.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-48.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-48.sb-left-to-right.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateX(0%);
                                            -moz-transform: translateX(-0%);
                                            -ms-transform: translateX(0%);
                                            -o-transform: translateX(0%);
                                            transform: translateX(0%);
                                        }

                                        .sb-image-hover-48.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }
                                        .sb-image-hover-48.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-48.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateX(0%);
                                            -moz-transform: translateX(0%);
                                            -ms-transform: translateX(0%);
                                            -o-transform: translateX(0%);
                                            transform: translateX(0%);
                                        }


                                        .sb-image-hover-48.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                        .sb-image-hover-48.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-48.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0%);
                                            -moz-transform: translateY(0%);
                                            -ms-transform: translateY(0%);
                                            -o-transform: translateY(0%);
                                            transform: translateY(0%);
                                        }
                                        .sb-image-hover-48.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }
                                        .sb-image-hover-48.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-48.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0%);
                                            -moz-transform: translateY(0%);
                                            -ms-transform: translateY(0%);
                                            -o-transform: translateY(0%);
                                            transform: translateY(0%);
                                        }

                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-48, 
                                .sb-image-hover-48 .sb-image-img, .sb-image-hover-48 a .sb-image-img,
                                .sb-image-hover-48 .sb-image-img:before, .sb-image-hover-48 a .sb-image-img:before,
                                .sb-image-hover-48 .sb-image-img img, .sb-image-hover-48 a .sb-image-img img,
                                .sb-image-hover-48 .sb-image-info, .sb-image-hover-48 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-48{
                                    padding: 20px;
                                }
                                .sb-image-map-48 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-48:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-48 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-48 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-48 .sb-image-img,
                                .sb-image-hover-48 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-48 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-48 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-48 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-48 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 20  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row ">
                                <div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-49   sb-image-animation-49 ">
                                    <div class="sb-image-map-49">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-49 sb-image-hover-49-53 sb-general-effects-21 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-49   sb-image-animation-49 ">
                                    <div class="sb-image-map-49">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-49 sb-image-hover-49-54 sb-general-effects-21 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-49{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-49 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-49 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-49 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            -o-transform: scale(1);
                                            transform: scale(1);
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                        }
                                        .sb-image-hover-49 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;

                                        }
                                        .sb-image-hover-49 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-49 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-49 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-49 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-49 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-49:hover .sb-image-info,
                                        .sb-image-hover-49.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                        }    
                                        .sb-image-hover-49.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-49.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-49.sb-left-to-right.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-49.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }

                                        .sb-image-hover-49.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-49.sb-right-to-left.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-49.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }

                                        .sb-image-hover-49.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-49.sb-top-to-bottom.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);

                                        }

                                        .sb-image-hover-49.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }

                                        .sb-image-hover-49.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-49.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-49, 
                                .sb-image-hover-49 .sb-image-img, .sb-image-hover-49 a .sb-image-img,
                                .sb-image-hover-49 .sb-image-img:before, .sb-image-hover-49 a .sb-image-img:before,
                                .sb-image-hover-49 .sb-image-img img, .sb-image-hover-49 a .sb-image-img img,
                                .sb-image-hover-49 .sb-image-info, .sb-image-hover-49 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-49{
                                    padding: 20px;
                                }
                                .sb-image-map-49 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-49:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-49 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-49 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-49 .sb-image-img,
                                .sb-image-hover-49 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-49 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-49 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-49 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-49 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 21  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-50   sb-image-animation-50 ">
                                    <div class="sb-image-map-50">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-50 sb-image-hover-50-55 sb-general-effects-22"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-50   sb-image-animation-50 ">
                                    <div class="sb-image-map-50">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-50 sb-image-hover-50-56 sb-general-effects-22"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-50{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-50 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-50 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-50 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-50 .sb-image-info {
                                            background-color:rgba(0, 143, 171, 1);
                                            opacity: 0;
                                            -webkit-transition: all 0.1s ease-out 0.5s;
                                            transition: all 0.1s ease-out 0.5s;

                                        }
                                        .sb-image-hover-50 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-50 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-50 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-50 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-50 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-50:hover .sb-image-info,
                                        .sb-image-hover-50.sb-touch-hover .sb-image-info {
                                            opacity: 1;
                                            visibility: visible;
                                        }    
                                        .sb-image-hover-50:hover .sb-image-img,
                                        .sb-image-hover-50.sb-touch-hover .sb-image-img{
                                            opacity: 0;
                                            -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
                                            transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-50, 
                                .sb-image-hover-50 .sb-image-img, .sb-image-hover-50 a .sb-image-img,
                                .sb-image-hover-50 .sb-image-img:before, .sb-image-hover-50 a .sb-image-img:before,
                                .sb-image-hover-50 .sb-image-img img, .sb-image-hover-50 a .sb-image-img img,
                                .sb-image-hover-50 .sb-image-info, .sb-image-hover-50 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-50{
                                    padding: 20px;
                                }
                                .sb-image-map-50 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-50:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-50 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-50 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-50 .sb-image-img,
                                .sb-image-hover-50 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-50 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-50 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-50 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-50 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 22  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-51   sb-image-animation-51 ">
                                    <div class="sb-image-map-51">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-51 sb-image-hover-51-57 sb-general-effects-23"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-51   sb-image-animation-51 ">
                                    <div class="sb-image-map-51">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-51 sb-image-hover-51-58 sb-general-effects-23"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-51{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-51 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-51 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-51 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                        }
                                        .sb-image-hover-51 .sb-image-info {
                                            background-color:rgba(0, 143, 171, 1);
                                            opacity: 0;
                                            -webkit-transition: all 0.1s ease-out 0.5s;
                                            transition: all 0.1s ease-out 0.5s;

                                        }
                                        .sb-image-hover-51 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-51 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-51 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-51 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-51 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-51:hover .sb-image-info,
                                        .sb-image-hover-51.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                        }  

                                        .sb-image-hover-51 .sb-image-title {
                                            -webkit-transform: scale(10);
                                            -moz-transform: scale(10);
                                            -ms-transform: scale(10);
                                            -o-transform: scale(10);
                                            transform: scale(10);
                                            -webkit-transition: all 1s ease-in-out;
                                            -moz-transition: all 1s  ease-in-out;
                                            transition: all 1s  ease-in-out;
                                            pointer-events:none;
                                        }
                                        .sb-image-hover-51:hover .sb-image-title,
                                        .sb-image-hover-51.sb-touch-hover .sb-image-title{
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            -o-transform: scale(1);
                                            transform: scale(1);
                                            pointer-events:auto;
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-51, 
                                .sb-image-hover-51 .sb-image-img, .sb-image-hover-51 a .sb-image-img,
                                .sb-image-hover-51 .sb-image-img:before, .sb-image-hover-51 a .sb-image-img:before,
                                .sb-image-hover-51 .sb-image-img img, .sb-image-hover-51 a .sb-image-img img,
                                .sb-image-hover-51 .sb-image-info, .sb-image-hover-51 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-51{
                                    padding: 20px;
                                }
                                .sb-image-map-51 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-51:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-51 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-51 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-51 .sb-image-img,
                                .sb-image-hover-51 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-51 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-51 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-51 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-51 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 23  <em>( Single Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-52   sb-image-animation-52 ">
                                    <div class="sb-image-map-52">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-52 sb-image-hover-52-59 sb-general-effects-24"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info-02">
                                                    <div class="sb-image-info">
                                                        <div class="sb-image-data">
                                                            <div class="sb-image-title">Easy to Use</div>
                                                            <div class="sb-image-desc">Add Your Description</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-52   sb-image-animation-52 ">
                                    <div class="sb-image-map-52">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-52 sb-image-hover-52-60 sb-general-effects-24 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info-02">
                                                    <div class="sb-image-info">
                                                        <div class="sb-image-data">
                                                            <div class="sb-image-title">Easy to Use</div>
                                                            <div class="sb-image-desc">Add Your Description</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <style>
                                        .sb-image-hover-52{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;

                                        }
                                        .sb-image-hover-52 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-52 .sb-image-info-02 {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            -ms-transform-style: preserve-3d;
                                            -o-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-52 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-52 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                        }
                                        .sb-image-hover-52 .sb-image-info {
                                            background-color:rgba(0, 143, 171, 1);
                                            opacity: 0;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                            -webkit-transform: rotate3d(0, 1, 0, 90deg);
                                            -moz-transform: rotate3d(0, 1, 0, 90deg);
                                            -ms-transform: rotate3d(0, 1, 0, 90deg);
                                            -o-transform: rotate3d(0, 1, 0, 90deg);
                                            transform: rotate3d(1, 1, 0, 90deg);

                                        }
                                        .sb-image-hover-52 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-52 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-52 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-52 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-52 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-52:hover .sb-image-info-02,
                                        .sb-image-hover-52.sb-touch-hover .sb-image-info-02{
                                            opacity: 1;
                                            visibility: visible;
                                            pointer-events: auto;
                                        }
                                        .sb-image-hover-52:hover .sb-image-info,
                                        .sb-image-hover-52.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                            -webkit-transform: rotate3d(0, 1, 0, 0deg);
                                            -moz-transform: rotate3d(0, 1, 0, 0deg);
                                            -ms-transform: rotate3d(0, 1, 0, 0deg);
                                            -o-transform: rotate3d(0, 1, 0, 0deg);
                                            transform: rotate3d(1, 1, 0, 0deg);
                                        }  
                                        .sb-image-hover-52.sb-left-to-right .sb-image-info-02 {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-52.sb-left-to-right:hover .sb-image-info-02,
                                        .sb-image-hover-52.sb-left-to-right.sb-touch-hover .sb-image-info-02{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-52.sb-right-to-left .sb-image-info-02 {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }

                                        .sb-image-hover-52.sb-right-to-left:hover .sb-image-info-02,
                                        .sb-image-hover-52.sb-right-to-left.sb-touch-hover .sb-image-info-02{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-52.sb-top-to-bottom .sb-image-info-02 {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }

                                        .sb-image-hover-52.sb-top-to-bottom:hover .sb-image-info-02,
                                        .sb-image-hover-52.sb-top-to-bottom.sb-touch-hover .sb-image-info-02{

                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);

                                        }

                                        .sb-image-hover-52.sb-bottom-to-top .sb-image-info-02 {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }

                                        .sb-image-hover-52.sb-bottom-to-top:hover .sb-image-info-02,
                                        .sb-image-hover-52.sb-bottom-to-top.sb-touch-hover .sb-image-info-02{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-52, 
                                .sb-image-hover-52 .sb-image-img, .sb-image-hover-52 a .sb-image-img,
                                .sb-image-hover-52 .sb-image-img:before, .sb-image-hover-52 a .sb-image-img:before,
                                .sb-image-hover-52 .sb-image-img img, .sb-image-hover-52 a .sb-image-img img,
                                .sb-image-hover-52 .sb-image-info, .sb-image-hover-52 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-52{
                                    padding: 20px;
                                }
                                .sb-image-map-52 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-52:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-52 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-52 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-52 .sb-image-img,
                                .sb-image-hover-52 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-52 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-52 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-52 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-52 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 24  <em>( 5 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-53   sb-image-animation-53 ">
                                    <div class="sb-image-map-53">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-53 sb-image-hover-53-61 sb-general-effects-25 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-53   sb-image-animation-53 ">
                                    <div class="sb-image-map-53">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-53 sb-image-hover-53-62 sb-general-effects-25 sb-right-to-left"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-53{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-53 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-53 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-53 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.5s ease-in-out;
                                            -moz-transition: all 0.5s ease-in-out;
                                            transition: all 0.5s ease-in-out;
                                        }
                                        .sb-image-hover-53 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.5s ease-in-out;
                                            -moz-transition: all 0.5s ease-in-out;
                                            transition: all 0.5s ease-in-out;

                                        }
                                        .sb-image-hover-53 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-53 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-53 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-53 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-53 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-53:hover .sb-image-info,
                                        .sb-image-hover-53.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                        }    
                                        .sb-image-hover-53.sb-left-to-right .sb-image-img {
                                            -webkit-transform-origin: 0% 50%;
                                            -moz-transform-origin: 0% 50%;
                                            -ms-transform-origin: 0% 50%;
                                            -o-transform-origin: 0% 50%;
                                            transform-origin: 0% 50%;
                                        }
                                        .sb-image-hover-53.sb-right-to-left .sb-image-img {
                                            -webkit-transform-origin: 100% 50%;
                                            -moz-transform-origin: 100% 50%;
                                            -ms-transform-origin: 100% 50%;
                                            -o-transform-origin: 100% 50%;
                                            transform-origin: 100% 50%;
                                        }
                                        .sb-image-hover-53.sb-top-to-bottom .sb-image-img {
                                            -webkit-transform-origin: 50% 0%;
                                            -moz-transform-origin: 50% 0%;
                                            -ms-transform-origin: 50% 0%;
                                            -o-transform-origin: 50% 0%;
                                            transform-origin: 50% 0%;
                                        }
                                        .sb-image-hover-53.sb-bottom-to-top .sb-image-img {
                                            -webkit-transform-origin: 50% 100%;
                                            -moz-transform-origin: 50% 100%;
                                            -ms-transform-origin: 50% 100%;
                                            -o-transform-origin: 50% 100%;
                                            transform-origin: 50% 100%;
                                        }


                                        .sb-image-hover-53.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-53.sb-left-to-right.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate3d(0, 1, 0, -180deg);
                                            -moz-transform: rotate3d(0, 1, 0, -180deg);
                                            -ms-transform: rotate3d(0, 1, 0, -180deg);
                                            -o-transform: rotate3d(0, 1, 0, -180deg);
                                            transform: rotate3d(0, 1, 0, -180deg);
                                        }
                                        .sb-image-hover-53.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-53.sb-right-to-left.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate3d(0, 1, 0, 180deg);
                                            -moz-transform: rotate3d(0, 1, 0, 180deg);
                                            -ms-transform: rotate3d(0, 1, 0, 180deg);
                                            -o-transform: rotate3d(0, 1, 0, 180deg);
                                            transform: rotate3d(0, 1, 0, 180deg);
                                        }
                                        .sb-image-hover-53.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-53.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate3d(1, 0, 0, -180deg);
                                            -moz-transform: rotate3d(1, 0, 0, -180deg);
                                            -ms-transform: rotate3d(1, 0, 0, -180deg);
                                            -o-transform: rotate3d(1, 0, 0, -180deg);
                                            transform: rotate3d(1, 0, 0, -180deg);
                                        }
                                        .sb-image-hover-53.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-53.sb-top-to-bottom.sb-touch-hover .sb-image-img{
                                            -webkit-transform: rotate3d(1, 0, 0, 180deg);
                                            -moz-transform: rotate3d(1, 0, 0, 180deg);
                                            -ms-transform: rotate3d(1, 0, 0, 180deg);
                                            -o-transform: rotate3d(1, 0, 0, 180deg);
                                            transform: rotate3d(1, 0, 0, 180deg);
                                        }

                                        .sb-image-hover-53.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-53.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-53.sb-left-to-right.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-53.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }

                                        .sb-image-hover-53.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-53.sb-right-to-left.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-53.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }

                                        .sb-image-hover-53.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-53.sb-top-to-bottom.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);

                                        }

                                        .sb-image-hover-53.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }

                                        .sb-image-hover-53.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-53.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-53, 
                                .sb-image-hover-53 .sb-image-img, .sb-image-hover-53 a .sb-image-img,
                                .sb-image-hover-53 .sb-image-img:before, .sb-image-hover-53 a .sb-image-img:before,
                                .sb-image-hover-53 .sb-image-img img, .sb-image-hover-53 a .sb-image-img img,
                                .sb-image-hover-53 .sb-image-info, .sb-image-hover-53 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-53{
                                    padding: 20px;
                                }
                                .sb-image-map-53 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-53:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-53 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-53 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-53 .sb-image-img,
                                .sb-image-hover-53 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-53 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-53 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-53 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-53 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 25  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">


                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-54   sb-image-animation-54 ">
                                    <div class="sb-image-map-54">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-54 sb-image-hover-54-63 sb-general-effects-26 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-54   sb-image-animation-54 ">
                                    <div class="sb-image-map-54">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-54 sb-image-hover-54-64 sb-general-effects-26 sb-right-to-left"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-54{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-54 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-54 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-54 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.5s ease-in-out;
                                            -moz-transition: all 0.5s ease-in-out;
                                            transition: all 0.5s ease-in-out;
                                        }
                                        .sb-image-hover-54 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.5s ease-in-out;
                                            -moz-transition: all 0.5s ease-in-out;
                                            transition: all 0.5s ease-in-out;

                                        }
                                        .sb-image-hover-54 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-54 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-54 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-54 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-54 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-54:hover .sb-image-info,
                                        .sb-image-hover-54.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                        }  
                                        .sb-image-hover-54.sb-left-to-right .sb-image-title,
                                        .sb-image-hover-54.sb-left-to-right .sb-image-desc,
                                        .sb-image-hover-54.sb-left-to-right a.sb-image-button{
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-54.sb-left-to-right:hover .sb-image-title,
                                        .sb-image-hover-54.sb-left-to-right:hover .sb-image-desc,
                                        .sb-image-hover-54.sb-left-to-right:hover a.sb-image-button,
                                        .sb-image-hover-54.sb-left-to-right.sb-touch-hover .sb-image-title,
                                        .sb-image-hover-54.sb-left-to-right.sb-touch-hover .sb-image-desc,
                                        .sb-image-hover-54.sb-left-to-right.sb-touch-hover a.sb-image-button{
                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-54.sb-right-to-left .sb-image-title,
                                        .sb-image-hover-54.sb-right-to-left .sb-image-desc,
                                        .sb-image-hover-54.sb-right-to-left a.sb-image-button{
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }

                                        .sb-image-hover-54.sb-right-to-left:hover .sb-image-title,
                                        .sb-image-hover-54.sb-right-to-left:hover .sb-image-desc,
                                        .sb-image-hover-54.sb-right-to-left:hover a.sb-image-button,
                                        .sb-image-hover-54.sb-right-to-left.sb-touch-hover .sb-image-title,
                                        .sb-image-hover-54.sb-right-to-left.sb-touch-hover .sb-image-desc,
                                        .sb-image-hover-54.sb-right-to-left.sb-touch-hover a.sb-image-button{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-54.sb-top-to-bottom .sb-image-title,
                                        .sb-image-hover-54.sb-top-to-bottom .sb-image-desc,
                                        .sb-image-hover-54.sb-top-to-bottom a.sb-image-button{
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }

                                        .sb-image-hover-54.sb-top-to-bottom:hover .sb-image-title,
                                        .sb-image-hover-54.sb-top-to-bottom:hover .sb-image-desc,
                                        .sb-image-hover-54.sb-top-to-bottom:hover a.sb-image-button,
                                        .sb-image-hover-54.sb-top-to-bottom.sb-touch-hover .sb-image-title,
                                        .sb-image-hover-54.sb-top-to-bottom.sb-touch-hover .sb-image-desc,
                                        .sb-image-hover-54.sb-top-to-bottom.sb-touch-hover a.sb-image-button{

                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);

                                        }

                                        .sb-image-hover-54.sb-bottom-to-top .sb-image-title,
                                        .sb-image-hover-54.sb-bottom-to-top .sb-image-desc,
                                        .sb-image-hover-54.sb-bottom-to-top a.sb-image-button{
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }

                                        .sb-image-hover-54.sb-bottom-to-top:hover .sb-image-title,
                                        .sb-image-hover-54.sb-bottom-to-top:hover .sb-image-desc,
                                        .sb-image-hover-54.sb-bottom-to-top:hover  a.sb-image-button,
                                        .sb-image-hover-54.sb-bottom-to-top.sb-touch-hover .sb-image-title,
                                        .sb-image-hover-54.sb-bottom-to-top.sb-touch-hover .sb-image-desc,
                                        .sb-image-hover-54.sb-bottom-to-top.sb-touch-hover  a.sb-image-button{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-54, 
                                .sb-image-hover-54 .sb-image-img, .sb-image-hover-54 a .sb-image-img,
                                .sb-image-hover-54 .sb-image-img:before, .sb-image-hover-54 a .sb-image-img:before,
                                .sb-image-hover-54 .sb-image-img img, .sb-image-hover-54 a .sb-image-img img,
                                .sb-image-hover-54 .sb-image-info, .sb-image-hover-54 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-54{
                                    padding: 20px;
                                }
                                .sb-image-map-54 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-54:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-54 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-54 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-54 .sb-image-img,
                                .sb-image-hover-54 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-54 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-54 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-54 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-54 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 26  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-55   sb-image-animation-55 ">
                                    <div class="sb-image-map-55">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-55 sb-image-hover-55-65 sb-general-effects-27 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-55   sb-image-animation-55 ">
                                    <div class="sb-image-map-55">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-55 sb-image-hover-55-66 sb-general-effects-27 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-55{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-55 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-55 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-55 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            -o-transform: scale(1);
                                            transform: scale(1);
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                        }
                                        .sb-image-hover-55 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out 0.3s;
                                            -moz-transition: all 0.35s ease-in-out 0.3s;
                                            transition: all 0.35s ease-in-out 0.3s;

                                        }
                                        .sb-image-hover-55 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-55 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-55 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-55 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-55 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-55:hover .sb-image-info,
                                        .sb-image-hover-55.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                        }    
                                        .sb-image-hover-55:hover .sb-image-img,
                                        .sb-image-hover-55.sb-touch-hover .sb-image-img{
                                            opacity:0.7;   
                                            transform:translateY(-125px);
                                            transition: transform 0.3s ease-in, opacity 0.1s ease-in-out;
                                            overflow:visible;
                                            border-color:rgba(0,0,0,0.7) transparent transparent transparent;
                                            border-style:solid;
                                            border-width:150px;
                                            box-shadow:none;
                                        }
                                        .sb-image-hover-55.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-55.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-55.sb-left-to-right.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-55.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }

                                        .sb-image-hover-55.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-55.sb-right-to-left.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-55.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }

                                        .sb-image-hover-55.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-55.sb-top-to-bottom.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);

                                        }

                                        .sb-image-hover-55.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }

                                        .sb-image-hover-55.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-55.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-55, 
                                .sb-image-hover-55 .sb-image-img, .sb-image-hover-55 a .sb-image-img,
                                .sb-image-hover-55 .sb-image-img:before, .sb-image-hover-55 a .sb-image-img:before,
                                .sb-image-hover-55 .sb-image-img img, .sb-image-hover-55 a .sb-image-img img,
                                .sb-image-hover-55 .sb-image-info, .sb-image-hover-55 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-55{
                                    padding: 20px;
                                }
                                .sb-image-map-55 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-55:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-55 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-55 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-55 .sb-image-img,
                                .sb-image-hover-55 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-55 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-55 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-55 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-55 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 27  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-56   sb-image-animation-56 ">
                                    <div class="sb-image-map-56">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-56 sb-image-hover-56-67 sb-general-effects-28 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-56   sb-image-animation-56 ">
                                    <div class="sb-image-map-56">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-56 sb-image-hover-56-68 sb-general-effects-28 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-56{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-56 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-56 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-56 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                        }
                                        .sb-image-hover-56 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transform: scale(0);
                                            -moz-transform: scale(0);
                                            -ms-transform: scale(0);
                                            -o-transform: scale(0);
                                            transform: scale(0);
                                            -webkit-transition: all .35s ease-in-out;
                                            -moz-transition: all .35s ease-in-out;
                                            transition: all .35s ease-in-out

                                        }
                                        .sb-image-hover-56 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-56 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                            -moz-transform: scale(1) rotate(-45deg);
                                            -o-transform: scale(1) rotate(-45deg);
                                            -ms-transform: scale(1) rotate(-45deg);
                                            -webkit-transform: scale(1) rotate(-45deg);
                                            transform: scale(1) rotate(-45deg);
                                        }
                                        .sb-image-hover-56 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                            -moz-transform: scale(1) rotate(-45deg);
                                            -o-transform: scale(1) rotate(-45deg);
                                            -ms-transform: scale(1) rotate(-45deg);
                                            -webkit-transform: scale(1) rotate(-45deg);
                                            transform: scale(1) rotate(-45deg);
                                        }
                                        .sb-image-hover-56 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            -moz-transform: scale(1) rotate(-45deg);
                                            -o-transform: scale(1) rotate(-45deg);
                                            -ms-transform: scale(1) rotate(-45deg);
                                            -webkit-transform: scale(1) rotate(-45deg);
                                            transform: scale(1) rotate(-45deg);
                                            margin: 0 auto;                    }
                                        .sb-image-hover-56 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-56:hover .sb-image-info,
                                        .sb-image-hover-56.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                            opacity: 1;
                                            -moz-transform: scale(1) rotate(0deg);
                                            -o-transform: scale(1) rotate(0deg);
                                            -ms-transform: scale(1) rotate(0deg);
                                            -webkit-transform: scale(1) rotate(0deg);
                                            transform: scale(1) rotate(0deg);
                                            -webkit-transition: all 0.5s ease-in 0s;
                                            -ms-transition: all 0.5s ease-in 0s;
                                            -o-transition: all 0.5s ease-in 0s;
                                            -moz-transition: all 0.5s ease-in 0s;
                                            transition: all 0.5s ease-in 0s;
                                        }   
                                        .sb-image-hover-56:hover .sb-image-title,
                                        .sb-image-hover-56:hover .sb-image-desc,
                                        .sb-image-hover-56:hover a.sb-image-button,
                                        .sb-image-hover-56.sb-touch-hover .sb-image-title,
                                        .sb-image-hover-56.sb-touch-hover .sb-image-desc,
                                        .sb-image-hover-56.sb-touch-hover a.sb-image-button{
                                            -moz-transform: scale(1) rotate(0deg);
                                            -o-transform: scale(1) rotate(0deg);
                                            -ms-transform: scale(1) rotate(0deg);
                                            -webkit-transform: scale(1) rotate(0deg);
                                            transform: scale(1) rotate(0deg);
                                        }
                                        .sb-image-hover-56.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-56.sb-left-to-right.sb-touch-hover .sb-image-img{

                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);

                                        }

                                        .sb-image-hover-56.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-56.sb-right-to-left.sb-touch-hover .sb-image-img{

                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);

                                        }


                                        .sb-image-hover-56.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-56.sb-top-to-bottom.sb-touch-hover .sb-image-img{

                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);

                                        }
                                        .sb-image-hover-56.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-56.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-56, 
                                .sb-image-hover-56 .sb-image-img, .sb-image-hover-56 a .sb-image-img,
                                .sb-image-hover-56 .sb-image-img:before, .sb-image-hover-56 a .sb-image-img:before,
                                .sb-image-hover-56 .sb-image-img img, .sb-image-hover-56 a .sb-image-img img,
                                .sb-image-hover-56 .sb-image-info, .sb-image-hover-56 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-56{
                                    padding: 20px;
                                }
                                .sb-image-map-56 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-56:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-56 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-56 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-56 .sb-image-img,
                                .sb-image-hover-56 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-56 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-56 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-56 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-56 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 28  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-57   sb-image-animation-57 ">
                                    <div class="sb-image-map-57">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-57 sb-image-hover-57-69 sb-general-effects-29"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-57   sb-image-animation-57 ">
                                    <div class="sb-image-map-57">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-57 sb-image-hover-57-70 sb-general-effects-29"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <style>
                                        .sb-image-hover-57{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                        }
                                        .sb-image-hover-57 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-57 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-57 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-57 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 400ms linear;
                                            -moz-transition: all 400ms linear;
                                            -o-transition: all 400ms linear;
                                            -ms-transition: all 400ms linear;
                                            transition: all 400ms linear;

                                        }
                                        .sb-image-hover-57 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-57 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-57 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-57 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-57 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-57:hover .sb-image-info,
                                        .sb-image-hover-57.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                            -webkit-transform: rotateZ(0);
                                            -moz-transform: rotateZ(0);
                                            -ms-transform: rotateZ(0);
                                            -o-transform: rotateZ(0);
                                            transform: rotateZ(0);
                                        }   
                                        .sb-image-hover-57:hover .sb-image-img,
                                        .sb-image-hover-57.sb-touch-hover .sb-image-img{
                                            opacity: 0;   
                                            border:100px solid rgba(0,0,0,0.7);
                                            -webkit-transform:scale(2.0);
                                            -moz-transform:scale(2.0);
                                            -ms-transform:scale(2.0);
                                            -o-transform:scale(2.0);
                                            transform:scale(2.0);
                                        }
                                        .sb-image-hover-57.sb-left-to-right .sb-image-info {
                                            -webkit-transform: translateX(-100%);
                                            -moz-transform: translateX(-100%);
                                            -ms-transform: translateX(-100%);
                                            -o-transform: translateX(-100%);
                                            transform: translateX(-100%);
                                        }
                                        .sb-image-hover-57.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-57.sb-left-to-right.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-57.sb-right-to-left .sb-image-info {
                                            -webkit-transform: translateX(100%);
                                            -moz-transform: translateX(100%);
                                            -ms-transform: translateX(100%);
                                            -o-transform: translateX(100%);
                                            transform: translateX(100%);
                                        }

                                        .sb-image-hover-57.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-57.sb-right-to-left.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateX(0);
                                            -moz-transform: translateX(0);
                                            -ms-transform: translateX(0);
                                            -o-transform: translateX(0);
                                            transform: translateX(0);

                                        }

                                        .sb-image-hover-57.sb-top-to-bottom .sb-image-info {
                                            -webkit-transform: translateY(-100%);
                                            -moz-transform: translateY(-100%);
                                            -ms-transform: translateY(-100%);
                                            -o-transform: translateY(-100%);
                                            transform: translateY(-100%);
                                        }

                                        .sb-image-hover-57.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-57.sb-top-to-bottom.sb-touch-hover .sb-image-info{

                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);

                                        }

                                        .sb-image-hover-57.sb-bottom-to-top .sb-image-info {
                                            -webkit-transform: translateY(100%);
                                            -moz-transform: translateY(100%);
                                            -ms-transform: translateY(100%);
                                            -o-transform: translateY(100%);
                                            transform: translateY(100%);
                                        }

                                        .sb-image-hover-57.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-57.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            -webkit-transform: translateY(0);
                                            -moz-transform: translateY(0);
                                            -ms-transform: translateY(0);
                                            -o-transform: translateY(0);
                                            transform: translateY(0);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-57, 
                                .sb-image-hover-57 .sb-image-img, .sb-image-hover-57 a .sb-image-img,
                                .sb-image-hover-57 .sb-image-img:before, .sb-image-hover-57 a .sb-image-img:before,
                                .sb-image-hover-57 .sb-image-img img, .sb-image-hover-57 a .sb-image-img img,
                                .sb-image-hover-57 .sb-image-info, .sb-image-hover-57 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-57{
                                    padding: 20px;
                                }
                                .sb-image-map-57 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-57:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-57 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-57 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-57 .sb-image-img,
                                .sb-image-hover-57 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-57 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-57 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-57 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-57 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 29  <em>( Single Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-58   sb-image-animation-58 ">
                                    <div class="sb-image-map-58">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-58 sb-image-hover-58-71 sb-general-effects-30"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-58   sb-image-animation-58 ">
                                    <div class="sb-image-map-58">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-58 sb-image-hover-58-72 sb-general-effects-30"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-58{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                        }
                                        .sb-image-hover-58 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-58 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-58 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s linear;
                                            -moz-transition:  all 0.4s linear;
                                            transition:  all 0.4s linear;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-58 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                            -webkit-transition: all 400ms linear;
                                            -moz-transition: all 400ms linear;
                                            -o-transition: all 400ms linear;
                                            -ms-transition: all 400ms linear;
                                            transition: all 400ms linear;

                                        }
                                        .sb-image-hover-58 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-58 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-58 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-58 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-58 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-58:hover .sb-image-info,
                                        .sb-image-hover-58.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                            -webkit-transform: rotate3d(1,0,0,0deg);
                                            -moz-transform: rotate3d(1,0,0,0deg);
                                            -ms-transform: rotate3d(1,0,0,0deg);
                                            -o-transform: rotate3d(1,0,0,0deg);
                                            transform: rotate3d(1,0,0,0deg);
                                        }   
                                        .sb-image-hover-58:hover .sb-image-img,
                                        .sb-image-hover-58.sb-touch-hover .sb-image-img{
                                            opacity:0;
                                            -webkit-transform: translate3d(0,100%,0) rotate3d(1,0,0,-90deg);
                                            -moz-transform: translate3d(0,100%,0) rotate3d(1,0,0,-90deg);
                                            -ms-transform: translate3d(0,100%,0) rotate3d(1,0,0,-90deg);
                                            -o-transform: translate3d(0,100%,0) rotate3d(1,0,0,-90deg);
                                            transform: translate3d(0,100%,0) rotate3d(1,0,0,-90deg);
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-58, 
                                .sb-image-hover-58 .sb-image-img, .sb-image-hover-58 a .sb-image-img,
                                .sb-image-hover-58 .sb-image-img:before, .sb-image-hover-58 a .sb-image-img:before,
                                .sb-image-hover-58 .sb-image-img img, .sb-image-hover-58 a .sb-image-img img,
                                .sb-image-hover-58 .sb-image-info, .sb-image-hover-58 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-58{
                                    padding: 20px;
                                }
                                .sb-image-map-58 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-58:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-58 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-58 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-58 .sb-image-img,
                                .sb-image-hover-58 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-58 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-58 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-58 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-58 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 30  <em>( Single Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-59   sb-image-animation-59 ">
                                    <div class="sb-image-map-59">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-59 sb-image-hover-59-74 sb-general-effects-31"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage1; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-59   sb-image-animation-59 ">
                                    <div class="sb-image-map-59">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-59 sb-image-hover-59-75 sb-general-effects-31"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage2; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-59{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                        }
                                        .sb-image-hover-59 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-59 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-59 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s linear;
                                            -moz-transition:  all 0.4s linear;
                                            transition:  all 0.4s linear;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-59 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transform: scale(0);
                                            -moz-transform: scale(0);
                                            -ms-transform: scale(0);
                                            -o-transform: scale(0);
                                            transform: scale(0);
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;

                                        }
                                        .sb-image-hover-59 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-59 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-59 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-59 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-59 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-59:hover .sb-image-info,
                                        .sb-image-hover-59.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transform: scale(1);
                                            -moz-transform: scale(1);
                                            -ms-transform: scale(1);
                                            -o-transform: scale(1);
                                            transform: scale(1);
                                        }   
                                        .sb-image-hover-59:hover .sb-image-img,
                                        .sb-image-hover-59.sb-touch-hover .sb-image-img{
                                            opacity:0;
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-59, 
                                .sb-image-hover-59 .sb-image-img, .sb-image-hover-59 a .sb-image-img,
                                .sb-image-hover-59 .sb-image-img:before, .sb-image-hover-59 a .sb-image-img:before,
                                .sb-image-hover-59 .sb-image-img img, .sb-image-hover-59 a .sb-image-img img,
                                .sb-image-hover-59 .sb-image-info, .sb-image-hover-59 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-59{
                                    padding: 20px;
                                }
                                .sb-image-map-59 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-59:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-59 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-59 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-59 .sb-image-img,
                                .sb-image-hover-59 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-59 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-59 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-59 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-59 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 31  <em>( Single Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">
                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-60   sb-image-animation-60 ">
                                    <div class="sb-image-map-60">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-60 sb-image-hover-60-76 sb-general-effects-32 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage3; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-60   sb-image-animation-60 ">
                                    <div class="sb-image-map-60">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-60 sb-image-hover-60-77 sb-general-effects-32 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage4; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    <style>
                                        .sb-image-hover-60{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                        }
                                        .sb-image-hover-60 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-60 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-60 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s linear;
                                            -moz-transition:  all 0.4s linear;
                                            transition:  all 0.4s linear;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-60 .sb-image-info {
                                            opacity: 0;
                                            background-color:rgba(0, 143, 171, 1);
                                            visibility: hidden;
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;

                                        }
                                        .sb-image-hover-60 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-60 .sb-image-info .sb-image-title {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-60 .sb-image-info .sb-image-desc {
                                            color: #ffffff;
                                        }
                                        .sb-image-hover-60 a.sb-image-button{
                                            background: #b8258e;
                                            color: #ffffff;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-60 a.sb-image-button:hover{
                                            background: #ffffff;
                                            color: #b8258e;
                                        }

                                        .sb-image-hover-60:hover .sb-image-info,
                                        .sb-image-hover-60.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                        }   
                                        .sb-image-hover-60.sb-left-to-right .sb-image-info {
                                            transition: all 1s ease;
                                            animation-duration: 1s;
                                            pointer-events: none;
                                            backface-visibility: hidden;
                                            opacity: 0;
                                            transform: scale(0, 0) translate(-150%, 0%);
                                            transform-origin: 0 100% 0;
                                        }
                                        .sb-image-hover-60.sb-left-to-right:hover .sb-image-info,
                                        .sb-image-hover-60.sb-left-to-right.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            transform: scale(1, 1) translate(0%, 0%);
                                            transform-origin: 100% 100% 0;
                                            pointer-events: auto;
                                        }
                                        .sb-image-hover-60.sb-right-to-left .sb-image-info {
                                            transition: all 1s ease;
                                            animation-duration: 1s;
                                            pointer-events: none;
                                            backface-visibility: hidden;
                                            transform: scale(0, 0) translate(150%, 0%);
                                            transform-origin: 100% 0 0;
                                        }
                                        .sb-image-hover-60.sb-right-to-left:hover .sb-image-info,
                                        .sb-image-hover-60.sb-right-to-left.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            transform: scale(1, 1) translate(0%, 0%);
                                            transform-origin: 100% 100% 0;
                                            pointer-events: auto;
                                        }
                                        .sb-image-hover-60.sb-top-to-bottom .sb-image-info {
                                            transition: all 1s ease;
                                            animation-duration: 1s;
                                            pointer-events: none;
                                            backface-visibility: hidden;
                                            transform: scale(0, 0) translate(0%, 0%);
                                            transform-origin: 0 0 0;
                                        }
                                        .sb-image-hover-60.sb-top-to-bottom:hover .sb-image-info,
                                        .sb-image-hover-60.sb-top-to-bottom.sb-touch-hover .sb-image-info{
                                            transform: scale(1, 1) translate(0%, 0%);
                                            transform-origin: 100% 100% 0;
                                            pointer-events: auto;
                                        }
                                        .sb-image-hover-60.sb-bottom-to-top .sb-image-info {
                                            transition: all 1s ease;
                                            animation-duration: 1s;
                                            pointer-events: none;
                                            backface-visibility: hidden;
                                            transform: scale(0, 0) translate(100%, 100%);
                                            transform-origin: 100% 100% 0;
                                        }
                                        .sb-image-hover-60.sb-bottom-to-top:hover .sb-image-info,
                                        .sb-image-hover-60.sb-bottom-to-top.sb-touch-hover .sb-image-info{
                                            transform: scale(1, 1) translate(0%, 0%);
                                            transform-origin: 100% 100% 0;
                                            pointer-events: auto;
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-60, 
                                .sb-image-hover-60 .sb-image-img, .sb-image-hover-60 a .sb-image-img,
                                .sb-image-hover-60 .sb-image-img:before, .sb-image-hover-60 a .sb-image-img:before,
                                .sb-image-hover-60 .sb-image-img img, .sb-image-hover-60 a .sb-image-img img,
                                .sb-image-hover-60 .sb-image-info, .sb-image-hover-60 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-60{
                                    padding: 20px;
                                }
                                .sb-image-map-60 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-60:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-60 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-60 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-60 .sb-image-img,
                                .sb-image-hover-60 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-60 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-60 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;                                    background-color:  burlywood;                                     width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-60 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-60 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 32  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <div class="sb-image-admin-style-select-panel">
                    <div class="sb-image-admin-style-select-panel-upper">

                        <div class="sb-image-hover-container"><div class="sb-image-hover-row "><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-61   sb-image-animation-61 ">
                                    <div class="sb-image-map-61">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sbimagetabhover sb-image-hover-61 sb-image-hover-61-78 sb-general-effects-33 sb-left-to-right"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage5; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Easy to Use</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><div orphita-animation="shake" class="sb-image-hover-responsive-2 orphita-animation sb-image-padding-61   sb-image-animation-61 ">
                                    <div class="sb-image-map-61">
                                        <div class="sb-image-map-absulate">
                                            <div class="sb-image-hover sb-image-hover-Square sb-image-hover-61 sb-image-hover-61-79 sb-general-effects-33 sb-top-to-bottom"><div class="sb-image-img">
                                                    <img src="<?php echo $sbimage6; ?>">
                                                </div>
                                                <div class="sb-image-info">
                                                    <div class="sb-image-data">
                                                        <div class="sb-image-title">Works with Page Builder</div>
                                                        <div class="sb-image-desc">Add Your Description</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <style>
                                        .sb-image-hover-61{
                                            position: relative;
                                            width: 100%;
                                            height: 100%;
                                            -webkit-perspective: 900px;
                                            -moz-perspective: 900px;
                                            perspective: 900px;
                                            -webkit-transform-style: preserve-3d;
                                            -moz-transform-style: preserve-3d;
                                            transform-style: preserve-3d;
                                        }
                                        .sb-image-hover-61 .sb-image-img {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                        }
                                        .sb-image-hover-61 .sb-image-info {
                                            position: absolute;
                                            top: 0;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            width: 100%;
                                            height: 100%;
                                            text-align: center;
                                            -webkit-backface-visibility: hidden;
                                            backface-visibility: hidden;
                                            display: table;
                                        }
                                        .sb-image-hover-61 .sb-image-img {
                                            width: 100%;
                                            float: left;
                                            visibility: visible;
                                            opacity: 1;
                                            -webkit-transition: all 0.4s linear;
                                            -moz-transition:  all 0.4s linear;
                                            transition:  all 0.4s linear;
                                            pointer-events: none;
                                        }
                                        .sb-image-hover-61 .sb-image-info {

                                            background-color:rgba(0, 143, 171, 1);
                                            -webkit-transition: all 0.35s ease-in-out;
                                            -moz-transition: all 0.35s ease-in-out;
                                            transition: all 0.35s ease-in-out;
                                            opacity: 0;
                                            visibility: hidden;

                                        }
                                        .sb-image-hover-61:hover .sb-image-info,
                                        .sb-image-hover-61.sb-touch-hover .sb-image-info{
                                            opacity: 1;
                                            visibility: visible;
                                        }
                                        .sb-image-hover-61 .sb-image-info .sb-image-data{
                                            display: table-cell;
                                            vertical-align: top; text-align: center;        }
                                        .sb-image-hover-61 .sb-image-info .sb-image-title {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-61 .sb-image-info .sb-image-desc {
                                            color: #FFF;
                                        }
                                        .sb-image-hover-61 a.sb-image-button{
                                            background: #b8258e;
                                            color: #FFF;
                                            margin: 0 auto;                    }
                                        .sb-image-hover-61 a.sb-image-button:hover{
                                            background: #FFF;
                                            color: #b8258e;
                                        }
                                        .sb-image-hover-61.sb-left-to-right .sb-image-img {
                                            opacity: 1;
                                            animation-duration: 1s;
                                            animation-name: tinRightIn;
                                        }
                                        .sb-image-hover-61.sb-left-to-right:hover .sb-image-img,
                                        .sb-image-hover-61.sb-left-to-right.sb-touch-hover .sb-image-img{
                                            animation-duration: 1s;
                                            animation-name: tinRightOut;
                                            opacity: 0 ;
                                            pointer-events: none;
                                        }
                                        @keyframes tinRightIn {
                                            0% {
                                                opacity: 0;
                                                transform: scale(1, 1) translateX(900%);
                                            }
                                            50%, 70%, 90% {
                                                opacity: 1;
                                                transform: scale(1.1, 1.1) translateX(0px);
                                            }
                                            60%, 80%, 100% {
                                                opacity: 1;
                                                transform: scale(1, 1) translateX(0px);
                                            }
                                        }
                                        @keyframes tinRightOut {
                                            0%, 20%, 40%, 50% {
                                                opacity: 1;
                                                transform: scale(1, 1) translateX(0px);
                                            }
                                            10%, 30% {
                                                opacity: 1;
                                                transform: scale(1.1, 1.1) translateX(0px);
                                            }
                                            100% {
                                                opacity: 0;
                                                transform: scale(1, 1) translateX(900%);
                                            }
                                        }
                                        .sb-image-hover-61.sb-right-to-left .sb-image-img {
                                            opacity: 1;
                                            animation-duration: 1s;
                                            animation-name: tinLeftIn;
                                            opacity: 1;
                                        }
                                        .sb-image-hover-61.sb-right-to-left:hover .sb-image-img,
                                        .sb-image-hover-61.sb-right-to-left.sb-touch-hover .sb-image-img{
                                            animation-duration: 1s;
                                            animation-name: tinLeftOut;
                                            opacity: 0 ;
                                            pointer-events: none;
                                        }
                                        @keyframes tinLeftIn {
                                            0% {
                                                opacity: 0;
                                                transform: scale(1, 1) translateX(-900%);
                                            }
                                            50%, 70%, 90% {
                                                opacity: 1;
                                                transform: scale(1.1, 1.1) translateX(0px);
                                            }
                                            60%, 80%, 100% {
                                                opacity: 1;
                                                transform: scale(1, 1) translateX(0px);
                                            }
                                        }
                                        @keyframes tinLeftOut {
                                            0%, 20%, 40%, 50% {
                                                opacity: 1;
                                                transform: scale(1, 1) translateX(0px);
                                            }
                                            10%, 30% {
                                                opacity: 1;
                                                transform: scale(1.1, 1.1) translateX(0px);
                                            }
                                            100% {
                                                opacity: 0;
                                                transform: scale(1, 1) translateX(-900%);
                                            }
                                        }
                                        .sb-image-hover-61.sb-top-to-bottom .sb-image-img {
                                            opacity: 1;
                                            animation-duration: 1s;
                                            animation-name: tinTopIn;
                                        }
                                        .sb-image-hover-61.sb-top-to-bottom:hover .sb-image-img,
                                        .sb-image-hover-61.sb-top-to-bottom.sb-touch-hover .sb-image-img{
                                            animation-duration: 1s;
                                            animation-name: tinTopOut;
                                            opacity: 0 ;
                                            pointer-events: none;
                                        }
                                        @keyframes tinTopIn {
                                            0% {
                                                opacity: 0;
                                                transform: scale(1, 1) translateY(-900%);
                                            }
                                            50%, 70%, 90% {
                                                opacity: 1;
                                                transform: scale(1.1, 1.1) translateY(0px);
                                            }
                                            60%, 80%, 100% {
                                                opacity: 1;
                                                transform: scale(1, 1) translateY(0px);
                                            }
                                        }
                                        @keyframes tinTopOut {
                                            0%, 20%, 40%, 50% {
                                                opacity: 1;
                                                transform: scale(1, 1) translateY(0px);
                                            }
                                            10%, 30% {
                                                opacity: 1;
                                                transform: scale(1.1, 1.1) translateY(0px);
                                            }
                                            100% {
                                                opacity: 0;
                                                transform: scale(1, 1) translateY(-900%);
                                            }
                                        }
                                        .sb-image-hover-61.sb-bottom-to-top .sb-image-img {
                                            opacity: 1;
                                            animation-duration: 1s;
                                            animation-name: tinBottomIn;
                                        }
                                        .sb-image-hover-61.sb-bottom-to-top:hover .sb-image-img,
                                        .sb-image-hover-61.sb-bottom-to-top.sb-touch-hover .sb-image-img{
                                            animation-duration: 1s;
                                            animation-name: tinBottomOut;
                                            opacity: 0 ;
                                            pointer-events: none;
                                        }
                                        @keyframes tinBottomIn {
                                            0% {
                                                opacity: 0;
                                                transform: scale(1, 1) translateY(900%);
                                            }
                                            50%, 70%, 90% {
                                                opacity: 1;
                                                transform: scale(1.1, 1.1) translateY(0px);
                                            }
                                            60%, 80%, 100% {
                                                opacity: 1;
                                                transform: scale(1, 1) translateY(0px);
                                            }
                                        }
                                        @keyframes tinBottomOut {
                                            0%, 20%, 40%, 50% {
                                                opacity: 1;
                                                transform: scale(1, 1) translateY(0px);
                                            }
                                            10%, 30% {
                                                opacity: 1;
                                                transform: scale(1.1, 1.1) translateY(0px);
                                            }
                                            100% {
                                                opacity: 0;
                                                transform: scale(1, 1) translateY(900%);
                                            }
                                        }
                                    </style>

                                </div></div> </div>    <style>
                                .sb-image-hover-61, 
                                .sb-image-hover-61 .sb-image-img, .sb-image-hover-61 a .sb-image-img,
                                .sb-image-hover-61 .sb-image-img:before, .sb-image-hover-61 a .sb-image-img:before,
                                .sb-image-hover-61 .sb-image-img img, .sb-image-hover-61 a .sb-image-img img,
                                .sb-image-hover-61 .sb-image-info, .sb-image-hover-61 a .sb-image-info{
                                    border-radius: 0%;
                                    -moz-border-radius:  0%;
                                    -webkit-border-radius:  0%;
                                }
                                .sb-image-padding-61{
                                    padding: 20px;
                                }
                                .sb-image-map-61 {
                                    max-width: 200px;
                                    width: 100%;
                                    margin: 0 auto;
                                    position: relative;
                                }
                                .sb-image-map-61:after {
                                    padding-bottom: 100%;
                                    content: "";
                                    display: block;
                                }
                                .sb-image-animation-61 {
                                    animation-duration: 2s;
                                }
                                .sb-image-hover-61 .sb-image-info .sb-image-data{
                                    padding-bottom: 20px;
                                }
                                .sb-image-hover-61 .sb-image-img,
                                .sb-image-hover-61 .sb-image-info{
                                    box-shadow: 0 0 5px  0 rgba(0, 148, 126, 0.36);
                                }
                                .sb-image-hover-61 .sb-image-img:before {
                                    position: absolute;
                                    display: block;
                                    content: '';
                                    width: 100%;
                                    height: 100%;
                                    box-shadow: inset 0 0 0 10px rgba(49, 66, 222, 0.2);
                                }
                                .sb-image-hover-61 .sb-image-info .sb-image-title {
                                    font-size: 16px;
                                    font-weight: 600;
                                    padding-bottom: 5px;
                                    margin-bottom: 10px;                                    padding: 10px 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    font-family: "Open Sans";
                                    display: inline-block;   
                                    background-color:  burlywood;  
                                    width:100%;
                                    font-style: normal;
                                }
                                .sb-image-hover-61 .sb-image-info .sb-image-desc {
                                    font-size: 14px;
                                    font-weight: 300;
                                    margin-bottom: 20px;
                                    margin-top: 0;
                                    line-height: 120%;
                                    width: 100%;
                                    float: left;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                }

                                .sb-image-hover-61 a.sb-image-button{
                                    padding: 10px 10px;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    font-weight: 300;
                                    font-size: 14px;
                                    font-family: "Open Sans";
                                    font-style: normal;
                                    text-decoration: none;
                                    display:inline-block;
                                }
                        </style>

                    </div>
                    <div class="sb-image-admin-style-select-panel-bottom">
                        <div class="sb-image-admin-style-select-panel-bottom-left">
                            Effects 33  <em>( 4 Layouts )</em>
                        </div>
                    </div>
                </div>
                <style>
                    .sb-image-hover-Square .sb-image-info .sb-image-title{
                        margin-left: 20px;
                        margin-right: 20px;
                        width: calc(100%  - 40px);
                    }
                </style>


            </div>
        </div>
        <div class="modal fade" id="sb-image-effects-data" >
            <form method="post">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Style Settings</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row form-group-sm">
                                <label for="style" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                                <div class="col-sm-6 nopadding">
                                    <input class="form-control" type="text" value=""  name="style">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="submit" value="Save">
                            <?php wp_nonce_field("sbimagegeneraleffects") ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('[data-toggle="tooltip"]').tooltip();
    });
</script>
