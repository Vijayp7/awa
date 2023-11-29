<?php
if (!defined('ABSPATH'))
    exit;

function sb_image_oxi_shortcode_function_square($styleid, $styledata, $listdata, $userdata) {
    wp_enqueue_style('' . $styledata[35] . '', 'https://fonts.googleapis.com/css?family=' . $styledata[35] . '');
    wp_enqueue_style('' . $styledata[49] . '', 'https://fonts.googleapis.com/css?family=' . $styledata[49] . '');
    wp_enqueue_style('' . $styledata[59] . '', 'https://fonts.googleapis.com/css?family=' . $styledata[59] . '');
    echo '<div class="sb-image-hover-container">';
    $sbshowingtype = '';
    if ($styledata[5] == 'carousel') {
        ?>
        <style>
            .sb-image-hover-responsive-1.sb-image-padding-<?php echo $styleid ?>,
            .sb-image-hover-responsive-2.sb-image-padding-<?php echo $styleid ?>,
            .sb-image-hover-responsive-3.sb-image-padding-<?php echo $styleid ?>,
            .sb-image-hover-responsive-4.sb-image-padding-<?php echo $styleid ?>,
            .sb-image-hover-responsive-5.sb-image-padding-<?php echo $styleid ?>,
            .sb-image-hover-responsive-6.sb-image-padding-<?php echo $styleid ?>,
            .sb-image-hover-responsive-7.sb-image-padding-<?php echo $styleid ?>,
            .sb-image-hover-responsive-8.sb-image-padding-<?php echo $styleid ?>{
                width: 100% !important;
            }
        </style>
        <?php
        $sbshowingtype = 'sb-image-hover-owl-carousel-' . $styleid . ' sb-image-hover-carousel';
    }
    echo '<div class="sb-image-hover-row ' . $sbshowingtype . '">';

    foreach ($listdata as $value) {
        if ($value['stylename'] == 'sb-square-effects-1') {
            sb_image_oxi_shortcode_function_square1($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-2') {
            sb_image_oxi_shortcode_function_square2($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-3') {
            sb_image_oxi_shortcode_function_square3($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-4') {
            sb_image_oxi_shortcode_function_square4($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-5') {
            sb_image_oxi_shortcode_function_square5($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-6') {
            sb_image_oxi_shortcode_function_square6($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-7') {
            sb_image_oxi_shortcode_function_square7($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-8') {
            sb_image_oxi_shortcode_function_square8($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-9') {
            sb_image_oxi_shortcode_function_square9($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-10') {
            sb_image_oxi_shortcode_function_square10($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-11') {
            sb_image_oxi_shortcode_function_square11($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-12') {
            sb_image_oxi_shortcode_function_square12($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-13') {
            sb_image_oxi_shortcode_function_square13($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-14') {
            sb_image_oxi_shortcode_function_square14($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-15') {
            sb_image_oxi_shortcode_function_square15($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-16') {
            sb_image_oxi_shortcode_function_square16($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-17') {
            sb_image_oxi_shortcode_function_square17($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-18') {
            sb_image_oxi_shortcode_function_square18($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-19') {
            sb_image_oxi_shortcode_function_square19($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-20') {
            sb_image_oxi_shortcode_function_square20($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-21') {
            sb_image_oxi_shortcode_function_square21($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-22') {
            sb_image_oxi_shortcode_function_square22($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-23') {
            sb_image_oxi_shortcode_function_square23($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-24') {
            sb_image_oxi_shortcode_function_square24($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-25') {
            sb_image_oxi_shortcode_function_square25($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-26') {
            sb_image_oxi_shortcode_function_square26($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-27') {
            sb_image_oxi_shortcode_function_square27($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-28') {
            sb_image_oxi_shortcode_function_square28($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-29') {
            sb_image_oxi_shortcode_function_square29($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-30') {
            sb_image_oxi_shortcode_function_square30($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-31') {
            sb_image_oxi_shortcode_function_square31($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-32') {
            sb_image_oxi_shortcode_function_square32($styleid, $styledata, $value, $userdata);
        } elseif ($value['stylename'] == 'sb-square-effects-33') {
            sb_image_oxi_shortcode_function_square33($styleid, $styledata, $value, $userdata);
        }
    }


    echo '</div> </div>';
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>, 
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-img, .sb-image-hover-<?php echo $styleid; ?> a .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-img:before, .sb-image-hover-<?php echo $styleid; ?> a .sb-image-img:before,
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-img img, .sb-image-hover-<?php echo $styleid; ?> a .sb-image-img img,
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-info, .sb-image-hover-<?php echo $styleid; ?> a .sb-image-info{
            border-radius: 0%;
            -moz-border-radius:  0%;
            -webkit-border-radius: 0%;
        }
        .sb-image-padding-<?php echo $styleid; ?>{
            padding: <?php echo $styledata[15]; ?>px;
        }
        .sb-image-map-<?php echo $styleid; ?> {
            max-width: <?php echo $styledata[11]; ?>px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .sb-image-map-<?php echo $styleid; ?>:after {
            padding-bottom: <?php echo $styledata[13] / $styledata[11] * 100; ?>%;
            content: "";
            display: block;
        }
        .sb-image-animation-<?php echo $styleid; ?> {
            animation-duration: <?php echo $styledata[21]; ?>s;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-data{
            padding-bottom: <?php echo $styledata[17]; ?>px; 
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-info{
            box-shadow: 0 0 <?php echo $styledata[25]; ?>px  0 <?php echo $styledata[27]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-img:before {
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            box-shadow: inset 0 0 0 <?php echo $styledata[29]; ?>px <?php echo $styledata[31]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-title {
            font-size: <?php echo $styledata[33]; ?>px;
            font-weight: <?php echo $styledata[37]; ?>;
            padding: <?php echo $styledata[43]; ?>px 0;
            margin-bottom: <?php echo $styledata[45]; ?>px;
            margin-top:  <?php echo $styledata[75]; ?>px;
            line-height: 120%;
            font-family: <?php echo sb_image_font_familly_special_charecter($styledata[35]); ?>;
            display: block;
            font-style: <?php echo $styledata[39]; ?>;
            padding-left:  <?php echo $styledata[17]; ?>px; 
            padding-right: <?php echo $styledata[17]; ?>px; 
            margin-left:  <?php echo $styledata[73]; ?>px; 
            margin-right: <?php echo $styledata[73]; ?>px; 
            width: calc(100% - <?php echo $styledata[73] * 2; ?>px);
            <?php
            if ($styledata[41] == 'yes') {
                echo ' border-bottom: 1px solid currentColor;';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-info .sb-image-desc {
            font-size: <?php echo $styledata[47]; ?>px;
            font-weight: <?php echo $styledata[51]; ?>;
            margin-bottom: <?php echo $styledata[55]; ?>px;
            margin-top: <?php echo $styledata[1]; ?>px;
            line-height: 120%;
            width: 100%;
            float: left;
            font-family: <?php echo sb_image_font_familly_special_charecter($styledata[49]); ?>;
            font-style: <?php echo $styledata[53]; ?>;
            padding-left:  <?php echo $styledata[17]; ?>px; 
            padding-right: <?php echo $styledata[17]; ?>px; 
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            width: 100%;
            float:left;
            padding-left:  <?php echo $styledata[17]; ?>px; 
            padding-right: <?php echo $styledata[17]; ?>px; 
        }
        .sb-image-hover-<?php echo $styleid; ?> a.sb-image-button{
            padding: <?php echo $styledata[67]; ?>px <?php echo $styledata[65]; ?>px;
            -webkit-border-radius: <?php echo $styledata[69]; ?>px;
            -moz-border-radius: <?php echo $styledata[69]; ?>px;
            border-radius: <?php echo $styledata[69]; ?>px;
            font-weight: <?php echo $styledata[61]; ?>;
            font-size: <?php echo $styledata[57]; ?>px;
            font-family: <?php echo sb_image_font_familly_special_charecter($styledata[59]); ?>;
            font-style: <?php echo $styledata[63]; ?>;
            text-decoration: none;
            display:inline-block;
        }
        <?php echo $styledata[71]; ?>
    </style>
    <?php
    if ($styledata[5] == 'carousel') {
        wp_enqueue_script('oxilab-carousel', plugins_url('public/owl.carousel.min.js', __FILE__));
        $sbresponsive = '';
        if ($styledata[5] == 'carousel' && $styledata[3] == 'sb-image-hover-responsive-1') {
            $sbresponsive = ' responsive: { 0: {items: 1 }, 600: { items: 1}, 1000: { items: 1 }},';
        }
        if ($styledata[5] == 'carousel' && $styledata[3] == 'sb-image-hover-responsive-2') {
            $sbresponsive = ' responsive: { 0: {items: 1 }, 600: { items: 1}, 1000: { items: 2 }},';
        }
        if ($styledata[5] == 'carousel' && $styledata[3] == 'sb-image-hover-responsive-3') {
            $sbresponsive = ' responsive: { 0: {items: 1 }, 600: { items: 2}, 1000: { items: 3 }},';
        }
        if ($styledata[5] == 'carousel' && $styledata[3] == 'sb-image-hover-responsive-4') {
            $sbresponsive = ' responsive: { 0: {items: 1 }, 600: { items: 2}, 1000: { items: 4 }},';
        }
        if ($styledata[5] == 'carousel' && $styledata[3] == 'sb-image-hover-responsive-5') {
            $sbresponsive = ' responsive: { 0: {items: 1 }, 600: { items: 5}, 1000: { items: 5 }},';
        }
        if ($styledata[5] == 'carousel' && $styledata[3] == 'sb-image-hover-responsive-6') {
            $sbresponsive = ' responsive: { 0: {items: 1 }, 600: { items: 3}, 1000: { items: 6 }},';
        }
        if ($styledata[7] == 'yes') {
            $sbautoplay = ' autoplay: true,  autoplayTimeout: ' . $styledata[9] . ', autoplayHoverPause: true,';
        }
        if ($styledata[7] == 'no') {
            $sbautoplay = ' autoplay: false,  autoplayTimeout: ' . $styledata[9] . ',';
        }

        wp_add_inline_script('oxilab-carousel', 'jQuery(".sb-image-hover-owl-carousel-' . $styleid . '").OxiowlCarousel({
                                                            loop: true,
                                                            margin: 0,
                                                            ' . $sbautoplay . '
                                                            ' . $sbresponsive . '
                                                            nav:false,
                                                            dots:true,                                                           
                                                        });');
    }
}

function sb_image_admin_square_select_id($id) {
    ?>
    <div class="sb-image-admin-absulote">
        <div class="sb-image-style-absulate-edit">
            <form method="post"> 
                <input type="hidden" name="item-id" value="<?php echo $id; ?>">
                <button class="btn btn-primary" type="submit" value="edit" name="edit" title="Edit">Edit</button>
                <?php echo wp_nonce_field("sbimageeditdata"); ?>
            </form>
        </div>
        <div class="sb-image-style-absulate-delete">
            <form method="post">
                <input type="hidden" name="item-id" value="<?php echo $id; ?>">
                <button class="btn btn-danger" type="submit" value="delete" name="delete" title="Delete">Delete</button>
                <?php echo wp_nonce_field("sbimagedeletedata"); ?>
            </form>
        </div>
    </div>
    <?php
}

function sb_image_oxi_shortcode_function_square1($styleid, $styledata, $value, $userdata) {

    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }

    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
            <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
            visibility: hidden;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
            -webkit-transform: rotateY(-90deg);
            -moz-transform: rotateY(-90deg);
            -ms-transform: rotateY(-90deg);
            -o-transform: rotateY(-90deg);
            transform: rotateY(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            -webkit-transform: rotateY(0);
            -moz-transform: rotateY(0);
            -ms-transform: rotateY(0);
            -o-transform: rotateY(0);
            transform: rotateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{
            -webkit-transform: rotateY(90deg);
            -moz-transform: rotateY(90deg);
            -ms-transform: rotateY(90deg);
            -o-transform: rotateY(90deg);
            transform: rotateY(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            -webkit-transform: rotateY(0);
            -moz-transform: rotateY(0);
            -ms-transform: rotateY(0);
            -o-transform: rotateY(0);
            transform: rotateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{
            -webkit-transform: rotateX(90deg);
            -moz-transform: rotateX(90deg);
            -ms-transform: rotateX(90deg);
            -o-transform: rotateX(90deg);
            transform: rotateX(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info {
            -webkit-transform: rotateX(0);
            -moz-transform: rotateX(0);
            -ms-transform: rotateX(0);
            -o-transform: rotateX(0);
            transform: rotateX(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: rotateX(-90deg);
            -moz-transform: rotateX(-90deg);
            -ms-transform: rotateX(-90deg);
            -o-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: rotateX(0);
            -moz-transform: rotateX(0);
            -ms-transform: rotateX(0);
            -o-transform: rotateX(0);
            transform: rotateX(0);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square2($styleid, $styledata, $value, $userdata) {

    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>

    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;
            pointer-events: none;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
            <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch  .sb-image-img{
            opacity: 0;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch  .sb-image-info{
            visibility: visible;
            opacity: 1;
            pointer-events: auto;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img {
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch  .sb-image-img{
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch  .sb-image-info{
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch  .sb-image-img{
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
            transform: translateX(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch  .sb-image-info{
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-img {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch  .sb-image-img{
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch  .sb-image-info{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }


        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-img {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch  .sb-image-img{
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch  .sb-image-info{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
    </style>
    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square3($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;

        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square4($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            z-index:11;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img {
            -webkit-transform: scale(1) translateX(0);
            -moz-transform: scale(1) translateX(0);
            -ms-transform: scale(1) translateX(0);
            -o-transform: scale(1) translateX(0);
            transform: scale(1) translateX(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
            -webkit-transform: scale(0.5) translateX(100%);
            -moz-transform: scale(0.5) translateX(100%);
            -ms-transform: scale(0.5) translateX(100%);
            -o-transform: scale(0.5) translateX(100%);
            transform: scale(0.5) translateX(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
            -webkit-transform: scale(1) translateX(0);
            -moz-transform: scale(1) translateX(0);
            -ms-transform: scale(1) translateX(0);
            -o-transform: scale(1) translateX(0);
            transform: scale(1) translateX(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img {
            -webkit-transform: scale(0.5) translateX(-100%);
            -moz-transform: scale(0.5) translateX(-100%);
            -ms-transform: scale(0.5) translateX(-100%);
            -o-transform: scale(0.5) translateX(-100%);
            transform: scale(0.5) translateX(-100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-img {
            -webkit-transform: scale(1) translateY(0);
            -moz-transform: scale(1) translateY(0);
            -ms-transform: scale(1) translateY(0);
            -o-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img {
            -webkit-transform: scale(0.5) translateY(100%);
            -moz-transform: scale(0.5) translateY(100%);
            -ms-transform: scale(0.5) translateY(100%);
            -o-transform: scale(0.5) translateY(100%);
            transform: scale(0.5) translateY(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-img {
            -webkit-transform: scale(1) translateY(0);
            -moz-transform: scale(1) translateY(0);
            -ms-transform: scale(1) translateY(0);
            -o-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: scale(0.5) translateY(-100%);
            -moz-transform: scale(0.5) translateY(-100%);
            -ms-transform: scale(0.5) translateY(-100%);
            -o-transform: scale(0.5) translateY(-100%);
            transform: scale(0.5) translateY(-100%);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square5($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;
            pointer-events: none;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;
            pointer-events: auto;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img {
            -webkit-transform: translateX(0) rotate(0);
            -moz-transform: translateX(0) rotate(0);
            -ms-transform: translateX(0) rotate(0);
            -o-transform: translateX(0) rotate(0);
            transform: translateX(0) rotate(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(100%) rotate(180deg);
            -moz-transform: translateX(100%) rotate(180deg);
            -ms-transform: translateX(100%) rotate(180deg);
            -o-transform: translateX(100%) rotate(180deg);
            transform: translateX(100%) rotate(180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
            -webkit-transform: translateX(100%) rotate(180deg);
            -moz-transform: translateX(100%) rotate(180deg);
            -ms-transform: translateX(100%) rotate(180deg);
            -o-transform: translateX(100%) rotate(180deg);
            transform: translateX(100%) rotate(180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            -webkit-transform: translateX(0) rotate(0);
            -moz-transform: translateX(0) rotate(0);
            -ms-transform: translateX(0) rotate(0);
            -o-transform: translateX(0) rotate(0);
            transform: translateX(0) rotate(0);
            -webkit-transition-delay: 0.4s;
            -moz-transition-delay: 0.4s;
            transition-delay: 0.4s;
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
            -webkit-transform: translateX(0) rotate(0);
            -moz-transform: translateX(0) rotate(0);
            -ms-transform: translateX(0) rotate(0);
            -o-transform: translateX(0) rotate(0);
            transform: translateX(0) rotate(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(-100%) rotate(-180deg);
            -moz-transform: translateX(-100%) rotate(-180deg);
            -ms-transform: translateX(-100%) rotate(-180deg);
            -o-transform: translateX(-100%) rotate(-180deg);
            transform: translateX(-100%) rotate(-180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{
            -webkit-transform: translateX(-100%) rotate(-180deg);
            -moz-transform: translateX(-100%) rotate(-180deg);
            -ms-transform: translateX(-100%) rotate(-180deg);
            -o-transform: translateX(-100%) rotate(-180deg);
            transform: translateX(-100%) rotate(-180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            -webkit-transform: translateX(0) rotate(0);
            -moz-transform: translateX(0) rotate(0);
            -ms-transform: translateX(0) rotate(0);
            -o-transform: translateX(0) rotate(0);
            transform: translateX(0) rotate(0);
            -webkit-transition-delay: 0.4s;
            -moz-transition-delay: 0.4s;
            transition-delay: 0.4s;
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-img {
            -webkit-transform: translateY(0) rotate(0);
            -moz-transform: translateY(0) rotate(0);
            -ms-transform: translateY(0) rotate(0);
            -o-transform: translateY(0) rotate(0);
            transform: translateY(0) rotate(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(-100%) rotate(-180deg);
            -moz-transform: translateY(-100%) rotate(-180deg);
            -ms-transform: translateY(-100%) rotate(-180deg);
            -o-transform: translateY(-100%) rotate(-180deg);
            transform: translateY(-100%) rotate(-180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{
            -webkit-transform: translateY(-100%) rotate(-180deg);
            -moz-transform: translateY(-100%) rotate(-180deg);
            -ms-transform: translateY(-100%) rotate(-180deg);
            -o-transform: translateY(-100%) rotate(-180deg);
            transform: translateY(-100%) rotate(-180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0) rotate(0);
            -moz-transform: translateY(0) rotate(0);
            -ms-transform: translateY(0) rotate(0);
            -o-transform: translateY(0) rotate(0);
            transform: translateY(0) rotate(0);
            -webkit-transition-delay: 0.4s;
            -moz-transition-delay: 0.4s;
            transition-delay: 0.4s;
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-img {
            -webkit-transform: translateY(0) rotate(0);
            -moz-transform: translateY(0) rotate(0);
            -ms-transform: translateY(0) rotate(0);
            -o-transform: translateY(0) rotate(0);
            transform: translateY(0) rotate(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(100%) rotate(180deg);
            -moz-transform: translateY(100%) rotate(180deg);
            -ms-transform: translateY(100%) rotate(180deg);
            -o-transform: translateY(100%) rotate(180deg);
            transform: translateY(100%) rotate(180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: translateY(100%) rotate(180deg);
            -moz-transform: translateY(100%) rotate(180deg);
            -ms-transform: translateY(100%) rotate(180deg);
            -o-transform: translateY(100%) rotate(180deg);
            transform: translateY(100%) rotate(180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
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

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square6($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;
            pointer-events: none;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;
            pointer-events: auto;

        }


        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            opacity: 1;
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            opacity: 1;
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            opacity: 1;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            opacity: 1;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square7($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;
            pointer-events: none;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }      
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;
            pointer-events: auto;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-img {
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }


        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-img {
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square8($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;
            <?php echo $listdatacss[23]; ?>
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'margin-right:' . $listdatacss[27] . 'px; ';
            } else {
                echo '';
            }
            ?>
        } .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: rotate3d(0, 1, 0, -180deg);
            -moz-transform: rotate3d(0, 1, 0, -180deg);
            -ms-transform: rotate3d(0, 1, 0, -180deg);
            -o-transform: rotate3d(0, 1, 0, -180deg);
            transform: rotate3d(0, 1, 0, -180deg);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            -webkit-transform: rotate3d(0, 1, 0, 0deg);
            -moz-transform: rotate3d(0, 1, 0, 0deg);
            -ms-transform: rotate3d(0, 1, 0, 0deg);
            -o-transform: rotate3d(0, 1, 0, 0deg);
            transform: rotate3d(0, 1, 0, 0deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: rotate3d(0, 1, 0, 180deg);
            -moz-transform: rotate3d(0, 1, 0, 180deg);
            -ms-transform: rotate3d(0, 1, 0, 180deg);
            -o-transform: rotate3d(0, 1, 0, 180deg);
            transform: rotate3d(0, 1, 0, 180deg);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            -webkit-transform: rotate3d(0, 1, 0, 0deg);
            -moz-transform: rotate3d(0, 1, 0, 0deg);
            -ms-transform: rotate3d(0, 1, 0, 0deg);
            -o-transform: rotate3d(0, 1, 0, 0deg);
            transform: rotate3d(0, 1, 0, 0deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: rotate3d(1, 0, 0, 180deg);
            -moz-transform: rotate3d(1, 0, 0, 180deg);
            -ms-transform: rotate3d(1, 0, 0, 180deg);
            -o-transform: rotate3d(1, 0, 0, 180deg);
            transform: rotate3d(1, 0, 0, 180deg);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            -webkit-transform: rotate3d(1, 0, 0, 0deg);
            -moz-transform: rotate3d(1, 0, 0, 0deg);
            -ms-transform: rotate3d(1, 0, 0, 0deg);
            -o-transform: rotate3d(1, 0, 0, 0deg);
            transform: rotate3d(1, 0, 0, 0deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: rotate3d(1, 0, 0, -180deg);
            -moz-transform: rotate3d(1, 0, 0, -180deg);
            -ms-transform: rotate3d(1, 0, 0, -180deg);
            -o-transform: rotate3d(1, 0, 0, -180deg);
            transform: rotate3d(1, 0, 0, -180deg);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: rotate3d(1, 0, 0, 0deg);
            -moz-transform: rotate3d(1, 0, 0, 0deg);
            -ms-transform: rotate3d(1, 0, 0, 0deg);
            -o-transform: rotate3d(1, 0, 0, 0deg);
            transform: rotate3d(1, 0, 0, 0deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;

        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square9($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-up .sb-image-info {
            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            -ms-transform: scale(0.5);
            -o-transform: scale(0.5);
            transform: scale(0.5);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-up:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-up.oxi-touch .sb-image-img{
            opacity: 0;
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-up:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-up.oxi-touch .sb-image-info{
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-down .sb-image-info {
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-down:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-down.oxi-touch .sb-image-img{
            opacity: 0;
            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            -ms-transform: scale(0.5);
            -o-transform: scale(0.5);
            transform: scale(0.5);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-down:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-down.oxi-touch .sb-image-info{
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-down-up .sb-image-info {
            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            -ms-transform: scale(0.5);
            -o-transform: scale(0.5);
            transform: scale(0.5);
            -webkit-transition: all 0.35s ease-in-out 0.2s;
            -moz-transition: all 0.35s ease-in-out 0.2s;
            transition: all 0.35s ease-in-out 0.2s;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-down-up:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-down-up.oxi-touch .sb-image-img{
            opacity: 0;
            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            -ms-transform: scale(0.5);
            -o-transform: scale(0.5);
            transform: scale(0.5);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-down-up:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.scale-down-up.oxi-touch .sb-image-info{
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square10($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            -ms-transform: scale(0.5);
            -o-transform: scale(0.5);
            transform: scale(0.5);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square11($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            z-index:11;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{
            -webkit-transform: translateY(50px) scale(0.4);
            -moz-transform: translateY(50px) scale(0.4);
            -ms-transform: translateY(50px) scale(0.4);
            -o-transform: translateY(50px) scale(0.4);
            transform: translateY(50px) scale(0.4);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: translateY(-50px) scale(0.4);
            -moz-transform: translateY(-50px) scale(0.4);
            -ms-transform: translateY(-50px) scale(0.4);
            -o-transform: translateY(-50px) scale(0.4);
            transform: translateY(-50px) scale(0.4);
        }


    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square12($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease;
            -moz-transition: all 0.35s ease;
            transition: all 0.35s ease;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img {
            -webkit-transform: translateZ(0) rotateY(0);
            -moz-transform: translateZ(0) rotateY(0);
            -ms-transform: translateZ(0) rotateY(0);
            -o-transform: translateZ(0) rotateY(0);
            transform: translateZ(0) rotateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateZ(-1000px) rotateY(-90deg);
            -moz-transform: translateZ(-1000px) rotateY(-90deg);
            -ms-transform: translateZ(-1000px) rotateY(-90deg);
            -o-transform: translateZ(-1000px) rotateY(-90deg);
            transform: translateZ(-1000px) rotateY(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
            -webkit-transform: translateZ(-1000px) rotateY(90deg);
            -moz-transform: translateZ(-1000px) rotateY(90deg);
            -ms-transform: translateZ(-1000px) rotateY(90deg);
            -o-transform: translateZ(-1000px) rotateY(90deg);
            transform: translateZ(-1000px) rotateY(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            -webkit-transform: translateZ(0) rotateY(0);
            -moz-transform: translateZ(0) rotateY(0);
            -ms-transform: translateZ(0) rotateY(0);
            -o-transform: translateZ(0) rotateY(0);
            transform: translateZ(0) rotateY(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
            -webkit-transform: translateZ(0) rotateY(0);
            -moz-transform: translateZ(0) rotateY(0);
            -ms-transform: translateZ(0) rotateY(0);
            -o-transform: translateZ(0) rotateY(0);
            transform: translateZ(0) rotateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateZ(-1000px) rotateY(90deg);
            -moz-transform: translateZ(-1000px) rotateY(90deg);
            -ms-transform: translateZ(-1000px) rotateY(90deg);
            -o-transform: translateZ(-1000px) rotateY(90deg);
            transform: translateZ(-1000px) rotateY(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{
            -webkit-transform: translateZ(-1000px) rotateY(-90deg);
            -moz-transform: translateZ(-1000px) rotateY(-90deg);
            -ms-transform: translateZ(-1000px) rotateY(-90deg);
            -o-transform: translateZ(-1000px) rotateY(-90deg);
            transform: translateZ(-1000px) rotateY(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            -webkit-transform: translateZ(0) rotateY(0);
            -moz-transform: translateZ(0) rotateY(0);
            -ms-transform: translateZ(0) rotateY(0);
            -o-transform: translateZ(0) rotateY(0);
            transform: translateZ(0) rotateY(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-img {
            -webkit-transform: translateZ(0) rotateX(0);
            -moz-transform: translateZ(0) rotateX(0);
            -ms-transform: translateZ(0) rotateX(0);
            -o-transform: translateZ(0) rotateX(0);
            transform: translateZ(0) rotateX(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateZ(-1000px) rotateX(90deg);
            -moz-transform: translateZ(-1000px) rotateX(90deg);
            -ms-transform: translateZ(-1000px) rotateX(90deg);
            -o-transform: translateZ(-1000px) rotateX(90deg);
            transform: translateZ(-1000px) rotateX(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{
            -webkit-transform: translateZ(-1000px) rotateX(-90deg);
            -moz-transform: translateZ(-1000px) rotateX(-90deg);
            -ms-transform: translateZ(-1000px) rotateX(-90deg);
            -o-transform: translateZ(-1000px) rotateX(-90deg);
            transform: translateZ(-1000px) rotateX(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            -webkit-transform: translateZ(0) rotateX(0);
            -moz-transform: translateZ(0) rotateX(0);
            -ms-transform: translateZ(0) rotateX(0);
            -o-transform: translateZ(0) rotateX(0);
            transform: translateZ(0) rotateX(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-img {
            -webkit-transform: translateZ(0) rotateX(0);
            -moz-transform: translateZ(0) rotateX(0);
            -ms-transform: translateZ(0) rotateX(0);
            -o-transform: translateZ(0) rotateX(0);
            transform: translateZ(0) rotateX(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateZ(-1000px) rotateX(-90deg);
            -moz-transform: translateZ(-1000px) rotateX(-90deg);
            -ms-transform: translateZ(-1000px) rotateX(-90deg);
            -o-transform: translateZ(-1000px) rotateX(-90deg);
            transform: translateZ(-1000px) rotateX(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: translateZ(-1000px) rotateX(90deg);
            -moz-transform: translateZ(-1000px) rotateX(90deg);
            -ms-transform: translateZ(-1000px) rotateX(90deg);
            -o-transform: translateZ(-1000px) rotateX(90deg);
            transform: translateZ(-1000px) rotateX(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: translateZ(0) rotateX(0);
            -moz-transform: translateZ(0) rotateX(0);
            -ms-transform: translateZ(0) rotateX(0);
            -o-transform: translateZ(0) rotateX(0);
            transform: translateZ(0) rotateX(0);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square13($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease;
            -moz-transition: all 0.35s ease;
            transition: all 0.35s ease;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateZ(-1000px) rotateY(-90deg);
            -moz-transform: translateZ(-1000px) rotateY(-90deg);
            -ms-transform: translateZ(-1000px) rotateY(-90deg);
            -o-transform: translateZ(-1000px) rotateY(-90deg);
            transform: translateZ(-1000px) rotateY(-90deg);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            -webkit-transform: translateZ(0) rotateY(0);
            -moz-transform: translateZ(0) rotateY(0);
            -ms-transform: translateZ(0) rotateY(0);
            -o-transform: translateZ(0) rotateY(0);
            transform: translateZ(0) rotateY(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateZ(-1000px) rotateY(90deg);
            -moz-transform: translateZ(-1000px) rotateY(90deg);
            -ms-transform: translateZ(-1000px) rotateY(90deg);
            -o-transform: translateZ(-1000px) rotateY(90deg);
            transform: translateZ(-1000px) rotateY(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            -webkit-transform: translateZ(0) rotateY(0);
            -moz-transform: translateZ(0) rotateY(0);
            -ms-transform: translateZ(0) rotateY(0);
            -o-transform: translateZ(0) rotateY(0);
            transform: translateZ(0) rotateY(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateZ(-1000px) rotateX(90deg);
            -moz-transform: translateZ(-1000px) rotateX(90deg);
            -ms-transform: translateZ(-1000px) rotateX(90deg);
            -o-transform: translateZ(-1000px) rotateX(90deg);
            transform: translateZ(-1000px) rotateX(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            -webkit-transform: translateZ(0) rotateX(0);
            -moz-transform: translateZ(0) rotateX(0);
            -ms-transform: translateZ(0) rotateX(0);
            -o-transform: translateZ(0) rotateX(0);
            transform: translateZ(0) rotateX(0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateZ(-1000px) rotateX(-90deg);
            -moz-transform: translateZ(-1000px) rotateX(-90deg);
            -ms-transform: translateZ(-1000px) rotateX(-90deg);
            -o-transform: translateZ(-1000px) rotateX(-90deg);
            transform: translateZ(-1000px) rotateX(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: translateZ(0) rotateX(0);
            -moz-transform: translateZ(0) rotateX(0);
            -ms-transform: translateZ(0) rotateX(0);
            -o-transform: translateZ(0) rotateX(0);
            transform: translateZ(0) rotateX(0);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square14($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;            
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
            visibility: hidden;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
            -webkit-transform: rotateY(-90deg);
            -moz-transform: rotateY(-90deg);
            -ms-transform: rotateY(-90deg);
            -o-transform: rotateY(-90deg);
            transform: rotateY(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info {
            -webkit-transform: rotateY(0);
            -moz-transform: rotateY(0);
            -ms-transform: rotateY(0);
            -o-transform: rotateY(0);
            transform: rotateY(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{
            -webkit-transform: rotateY(90deg);
            -moz-transform: rotateY(90deg);
            -ms-transform: rotateY(90deg);
            -o-transform: rotateY(90deg);
            transform: rotateY(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            -webkit-transform: rotateY(0);
            -moz-transform: rotateY(0);
            -ms-transform: rotateY(0);
            -o-transform: rotateY(0);
            transform: rotateY(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{
            -webkit-transform: rotateX(90deg);
            -moz-transform: rotateX(90deg);
            -ms-transform: rotateX(90deg);
            -o-transform: rotateX(90deg);
            transform: rotateX(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            -webkit-transform: rotateX(0);
            -moz-transform: rotateX(0);
            -ms-transform: rotateX(0);
            -o-transform: rotateX(0);
            transform: rotateX(0);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: rotateX(-90deg);
            -moz-transform: rotateX(-90deg);
            -ms-transform: rotateX(-90deg);
            -o-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: rotateX(0);
            -moz-transform: rotateX(0);
            -ms-transform: rotateX(0);
            -o-transform: rotateX(0);
            transform: rotateX(0);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square15($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
            visibility: hidden;
            -webkit-transform: scale(0.5) rotate(720deg);
            -moz-transform: scale(0.5) rotate(720deg);
            -ms-transform: scale(0.5) rotate(720deg);
            -o-transform: scale(0.5) rotate(720deg);
            transform: scale(0.5) rotate(720deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1) rotate(0);
            -moz-transform: scale(1) rotate(0);
            -ms-transform: scale(1) rotate(0);
            -o-transform: scale(1) rotate(0);
            transform: scale(1) rotate(0);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square16($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            z-index:11;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease;
            -moz-transition: all 0.35s ease;
            transition: all 0.35s ease;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img {
            -webkit-transform-origin: 95% 40%;
            -moz-transform-origin: 95% 40%;
            -ms-transform-origin: 95% 40%;
            -o-transform-origin: 95% 40%;
            transform-origin: 95% 40%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
            -webkit-transform: rotate(-120deg);
            -moz-transform: rotate(-120deg);
            -ms-transform: rotate(-120deg);
            -o-transform: rotate(-120deg);
            transform: rotate(-120deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
            -webkit-transform-origin: 5% 40%;
            -moz-transform-origin: 5% 40%;
            -ms-transform-origin: 5% 40%;
            -o-transform-origin: 5% 40%;
            transform-origin: 5% 40%;
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{
            -webkit-transform: rotate(120deg);
            -moz-transform: rotate(120deg);
            -ms-transform: rotate(120deg);
            -o-transform: rotate(120deg);
            transform: rotate(120deg);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square17($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
            visibility: hidden;
            -webkit-transform: scale(0.5) rotate(90deg);
            -moz-transform: scale(0.5) rotate(90deg);
            -ms-transform: scale(0.5) rotate(90deg);
            -o-transform: scale(0.5) rotate(90deg);
            transform: scale(0.5) rotate(90deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1) rotate(0);
            -moz-transform: scale(1) rotate(0);
            -ms-transform: scale(1) rotate(0);
            -o-transform: scale(1) rotate(0);
            transform: scale(1) rotate(0);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square18($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            visibility: visible;
            opacity: 1;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-img {
            -webkit-transform-origin: 50% 0;
            -moz-transform-origin: 50% 0;
            -ms-transform-origin: 50% 0;
            -o-transform-origin: 50% 0;
            transform-origin: 50% 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: rotate3d(1, 0, 0, 180deg);
            -moz-transform: rotate3d(1, 0, 0, 180deg);
            -ms-transform: rotate3d(1, 0, 0, 180deg);
            -o-transform: rotate3d(1, 0, 0, 180deg);
            transform: rotate3d(1, 0, 0, 180deg);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-img {
            -webkit-transform-origin: 50% 100%;
            -moz-transform-origin: 50% 100%;
            -ms-transform-origin: 50% 100%;
            -o-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{
            -webkit-transform: rotate3d(1, 0, 0, -180deg);
            -moz-transform: rotate3d(1, 0, 0, -180deg);
            -ms-transform: rotate3d(1, 0, 0, -180deg);
            -o-transform: rotate3d(1, 0, 0, -180deg);
            transform: rotate3d(1, 0, 0, -180deg);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img{
            -webkit-transform-origin: 100% 50%;
            -moz-transform-origin: 100% 50%;
            -ms-transform-origin: 100% 50%;
            -o-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
            -webkit-transform: rotate3d(0, 1, 0, 180deg);
            -moz-transform: rotate3d(0, 1, 0, 180deg);
            -ms-transform: rotate3d(0, 1, 0, 180deg);
            -o-transform: rotate3d(0, 1, 0, 180deg);
            transform: rotate3d(0, 1, 0, 180deg);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
            -webkit-transform-origin: 0% 50%;
            -moz-transform-origin: 0% 50%;
            -ms-transform-origin: 0% 50%;
            -o-transform-origin: 0% 50%;
            transform-origin: 0% 50%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{
            -webkit-transform: rotate3d(0, 1, 0, -180deg);
            -moz-transform: rotate3d(0, 1, 0, -180deg);
            -ms-transform: rotate3d(0, 1, 0, -180deg);
            -o-transform: rotate3d(0, 1, 0, -180deg);
            transform: rotate3d(0, 1, 0, -180deg);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square19($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1) rotate(0);
            -moz-transform: scale(1) rotate(0);
            -ms-transform: scale(1) rotate(0);
            -o-transform: scale(1) rotate(0);
            transform: scale(1) rotate(0);

        }        
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
            visibility: hidden;
            -webkit-transform: scale(0.5) rotate(1440deg);
            -moz-transform: scale(0.5) rotate(1440deg);
            -ms-transform: scale(0.5) rotate(1440deg);
            -o-transform: scale(0.5) rotate(1440deg);
            transform: scale(0.5) rotate(1440deg);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            -webkit-transform: translateX(0%);
            -moz-transform: translateX(-0%);
            -ms-transform: translateX(0%);
            -o-transform: translateX(0%);
            transform: translateX(0%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            -webkit-transform: translateX(0%);
            -moz-transform: translateX(0%);
            -ms-transform: translateX(0%);
            -o-transform: translateX(0%);
            transform: translateX(0%);
        }


        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0%);
            -moz-transform: translateY(0%);
            -ms-transform: translateY(0%);
            -o-transform: translateY(0%);
            transform: translateY(0%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0%);
            -moz-transform: translateY(0%);
            -ms-transform: translateY(0%);
            -o-transform: translateY(0%);
            transform: translateY(0%);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square20($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1) rotate(0);
            -moz-transform: scale(1) rotate(0);
            -ms-transform: scale(1) rotate(0);
            -o-transform: scale(1) rotate(0);
            transform: scale(1) rotate(0);

        }        
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
            visibility: hidden;
            -webkit-transform: scale(1) rotate(1440deg);
            -moz-transform: scale(1) rotate(1440deg);
            -ms-transform: scale(1) rotate(1440deg);
            -o-transform: scale(1) rotate(1440deg);
            transform: scale(1) rotate(1440deg);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            -webkit-transform: translateX(0%);
            -moz-transform: translateX(-0%);
            -ms-transform: translateX(0%);
            -o-transform: translateX(0%);
            transform: translateX(0%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            -webkit-transform: translateX(0%);
            -moz-transform: translateX(0%);
            -ms-transform: translateX(0%);
            -o-transform: translateX(0%);
            transform: translateX(0%);
        }


        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0%);
            -moz-transform: translateY(0%);
            -ms-transform: translateY(0%);
            -o-transform: translateY(0%);
            transform: translateY(0%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0%);
            -moz-transform: translateY(0%);
            -ms-transform: translateY(0%);
            -o-transform: translateY(0%);
            transform: translateY(0%);
        }

    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square21($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
        }    
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{

            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square22($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            background-color:<?php echo $listdatacss[5]; ?>;
            opacity: 0;
            -webkit-transition: all 0.1s ease-out 0.5s;
            transition: all 0.1s ease-out 0.5s;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info {
            opacity: 1;
            visibility: visible;
        }    
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;
            -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
            transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square23($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            background-color:<?php echo $listdatacss[5]; ?>;
            opacity: 0;
            -webkit-transition: all 0.1s ease-out 0.5s;
            transition: all 0.1s ease-out 0.5s;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
        }  

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-title {
            -webkit-transform: scale(10);
            -moz-transform: scale(10);
            -ms-transform: scale(10);
            -o-transform: scale(10);
            transform: scale(10);
            -webkit-transition: all 1s ease-in-out;
            -moz-transition: all 1s  ease-in-out;
            transition: all 1s  ease-in-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-title{
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square24($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info-02">
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                           </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info-02">
                                <div class="sb-image-info"  ' . $backgoundimage . '>
                                    <div class="sb-image-data">
                                        ' . $sbtitle . '
                                        ' . $sbdesc . '
                                    </div>
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info-02">
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                   <div class="sb-image-data">
                                       ' . $sbtitle . '
                                       ' . $sbdesc . '
                                       ' . $sbbuttontext . '
                                   </div>
                            </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info-02 {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            background-color:<?php echo $listdatacss[5]; ?>;
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info-02,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info-02{
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
            -webkit-transform: rotate3d(0, 1, 0, 0deg);
            -moz-transform: rotate3d(0, 1, 0, 0deg);
            -ms-transform: rotate3d(0, 1, 0, 0deg);
            -o-transform: rotate3d(0, 1, 0, 0deg);
            transform: rotate3d(1, 1, 0, 0deg);
        }  
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info-02 {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info-02,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info-02{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info-02 {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info-02,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info-02{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info-02 {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info-02,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info-02{

            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info-02 {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info-02,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info-02{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square25($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
        }    
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img {
            -webkit-transform-origin: 0% 50%;
            -moz-transform-origin: 0% 50%;
            -ms-transform-origin: 0% 50%;
            -o-transform-origin: 0% 50%;
            transform-origin: 0% 50%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
            -webkit-transform-origin: 100% 50%;
            -moz-transform-origin: 100% 50%;
            -ms-transform-origin: 100% 50%;
            -o-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-img {
            -webkit-transform-origin: 50% 0%;
            -moz-transform-origin: 50% 0%;
            -ms-transform-origin: 50% 0%;
            -o-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-img {
            -webkit-transform-origin: 50% 100%;
            -moz-transform-origin: 50% 100%;
            -ms-transform-origin: 50% 100%;
            -o-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }


        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
            -webkit-transform: rotate3d(0, 1, 0, -180deg);
            -moz-transform: rotate3d(0, 1, 0, -180deg);
            -ms-transform: rotate3d(0, 1, 0, -180deg);
            -o-transform: rotate3d(0, 1, 0, -180deg);
            transform: rotate3d(0, 1, 0, -180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{
            -webkit-transform: rotate3d(0, 1, 0, 180deg);
            -moz-transform: rotate3d(0, 1, 0, 180deg);
            -ms-transform: rotate3d(0, 1, 0, 180deg);
            -o-transform: rotate3d(0, 1, 0, 180deg);
            transform: rotate3d(0, 1, 0, 180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: rotate3d(1, 0, 0, -180deg);
            -moz-transform: rotate3d(1, 0, 0, -180deg);
            -ms-transform: rotate3d(1, 0, 0, -180deg);
            -o-transform: rotate3d(1, 0, 0, -180deg);
            transform: rotate3d(1, 0, 0, -180deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{
            -webkit-transform: rotate3d(1, 0, 0, 180deg);
            -moz-transform: rotate3d(1, 0, 0, 180deg);
            -ms-transform: rotate3d(1, 0, 0, 180deg);
            -o-transform: rotate3d(1, 0, 0, 180deg);
            transform: rotate3d(1, 0, 0, 180deg);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{

            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square26($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
        }  
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right a.sb-image-button{
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover a.sb-image-button,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch a.sb-image-button{
            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left a.sb-image-button{
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover a.sb-image-button,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch a.sb-image-button{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom a.sb-image-button{
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover a.sb-image-button,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch a.sb-image-button{

            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top a.sb-image-button{
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover  a.sb-image-button,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch  a.sb-image-button{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square27($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out 0.3s;
            -moz-transition: all 0.35s ease-in-out 0.3s;
            transition: all 0.35s ease-in-out 0.3s;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
        }    
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity:0.7;   
            transform:translateY(-125px);
            transition: transform 0.3s ease-in, opacity 0.1s ease-in-out;
            overflow:visible;
            border-color:rgba(0,0,0,0.7) transparent transparent transparent;
            border-style:solid;
            border-width:150px;
            box-shadow:none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{

            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square28($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
            -moz-transform: scale(1) rotate(-45deg);
            -o-transform: scale(1) rotate(-45deg);
            -ms-transform: scale(1) rotate(-45deg);
            -webkit-transform: scale(1) rotate(-45deg);
            transform: scale(1) rotate(-45deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
            -moz-transform: scale(1) rotate(-45deg);
            -o-transform: scale(1) rotate(-45deg);
            -ms-transform: scale(1) rotate(-45deg);
            -webkit-transform: scale(1) rotate(-45deg);
            transform: scale(1) rotate(-45deg);
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover a.sb-image-button,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-title,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-desc,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch a.sb-image-button{
            -moz-transform: scale(1) rotate(0deg);
            -o-transform: scale(1) rotate(0deg);
            -ms-transform: scale(1) rotate(0deg);
            -webkit-transform: scale(1) rotate(0deg);
            transform: scale(1) rotate(0deg);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{

            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{

            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);

        }


        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{

            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square29($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 400ms linear;
            -moz-transition: all 400ms linear;
            -o-transition: all 400ms linear;
            -ms-transition: all 400ms linear;
            transition: all 400ms linear;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
            -webkit-transform: rotateZ(0);
            -moz-transform: rotateZ(0);
            -ms-transform: rotateZ(0);
            -o-transform: rotateZ(0);
            transform: rotateZ(0);
        }   
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity: 0;   
            border:100px solid rgba(0,0,0,0.7);
            -webkit-transform:scale(2.0);
            -moz-transform:scale(2.0);
            -ms-transform:scale(2.0);
            -o-transform:scale(2.0);
            transform:scale(2.0);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            -webkit-transform: translateX(-100%);
            -moz-transform: translateX(-100%);
            -ms-transform: translateX(-100%);
            -o-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            -webkit-transform: translateX(100%);
            -moz-transform: translateX(100%);
            -ms-transform: translateX(100%);
            -o-transform: translateX(100%);
            transform: translateX(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{

            -webkit-transform: translateX(0);
            -moz-transform: translateX(0);
            -ms-transform: translateX(0);
            -o-transform: translateX(0);
            transform: translateX(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            -webkit-transform: translateY(-100%);
            -moz-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            -o-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{

            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);

        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            -webkit-transform: translateY(100%);
            -moz-transform: translateY(100%);
            -ms-transform: translateY(100%);
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square30($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s linear;
            -moz-transition:  all 0.4s linear;
            transition:  all 0.4s linear;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
            -webkit-transform: rotate3d(1,0,0,0deg);
            -moz-transform: rotate3d(1,0,0,0deg);
            -ms-transform: rotate3d(1,0,0,0deg);
            -o-transform: rotate3d(1,0,0,0deg);
            transform: rotate3d(1,0,0,0deg);
        }   
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity:0;
            -webkit-transform: translate3d(0,100%,0) rotate3d(1,0,0,-90deg);
            -moz-transform: translate3d(0,100%,0) rotate3d(1,0,0,-90deg);
            -ms-transform: translate3d(0,100%,0) rotate3d(1,0,0,-90deg);
            -o-transform: translate3d(0,100%,0) rotate3d(1,0,0,-90deg);
            transform: translate3d(0,100%,0) rotate3d(1,0,0,-90deg);
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square31($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s linear;
            -moz-transition:  all 0.4s linear;
            transition:  all 0.4s linear;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }   
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            opacity:0;
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square32($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s linear;
            -moz-transition:  all 0.4s linear;
            transition:  all 0.4s linear;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
        }   
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-info {
            transition: all 1s ease;
            animation-duration: 1s;
            pointer-events: none;
            backface-visibility: hidden;
            opacity: 0;
            transform: scale(0, 0) translate(-150%, 0%);
            transform-origin: 0 100% 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-info{
            opacity: 1;
            transform: scale(1, 1) translate(0%, 0%);
            transform-origin: 100% 100% 0;
            pointer-events: auto;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-info {
            transition: all 1s ease;
            animation-duration: 1s;
            pointer-events: none;
            backface-visibility: hidden;
            transform: scale(0, 0) translate(150%, 0%);
            transform-origin: 100% 0 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-info{
            opacity: 1;
            transform: scale(1, 1) translate(0%, 0%);
            transform-origin: 100% 100% 0;
            pointer-events: auto;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-info {
            transition: all 1s ease;
            animation-duration: 1s;
            pointer-events: none;
            backface-visibility: hidden;
            transform: scale(0, 0) translate(0%, 0%);
            transform-origin: 0 0 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-info{
            transform: scale(1, 1) translate(0%, 0%);
            transform-origin: 100% 100% 0;
            pointer-events: auto;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-info {
            transition: all 1s ease;
            animation-duration: 1s;
            pointer-events: none;
            backface-visibility: hidden;
            transform: scale(0, 0) translate(100%, 100%);
            transform-origin: 100% 100% 0;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-info{
            transform: scale(1, 1) translate(0%, 0%);
            transform-origin: 100% 100% 0;
            pointer-events: auto;
        }
    </style>

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square33($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s linear;
            -moz-transition:  all 0.4s linear;
            transition:  all 0.4s linear;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {

            background-color:<?php echo $listdatacss[5]; ?>;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
            opacity: 0;
            visibility: hidden;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right .sb-image-img {
            opacity: 1;
            animation-duration: 1s;
            animation-name: tinRightIn;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-left-to-right.oxi-touch .sb-image-img{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left .sb-image-img {
            opacity: 1;
            animation-duration: 1s;
            animation-name: tinLeftIn;
            opacity: 1;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-right-to-left.oxi-touch .sb-image-img{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom .sb-image-img {
            opacity: 1;
            animation-duration: 1s;
            animation-name: tinTopIn;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-top-to-bottom.oxi-touch .sb-image-img{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top .sb-image-img {
            opacity: 1;
            animation-duration: 1s;
            animation-name: tinBottomIn;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.sb-bottom-to-top.oxi-touch .sb-image-img{
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

    <?php
    echo '</div>';
}

function sb_image_oxi_shortcode_function_square34($styleid, $styledata, $value, $userdata) {
    $listdatacss = $value['css'];
    $listdatacss = explode('|', $listdatacss);
    $sbtitle = '';
    $sbdesc = '';
    $sbbuttontext = '';
    $backgoundimage = '';
    $opennewtab = '';
    $sbadminwrapper = '';
    $dataavanimation = '';
    $dataanimation = '';
    if (!empty($styledata[19])) {
        $dataanimation = 'orphita-animation';
        $dataavanimation = 'orphita-animation="' . $styledata[19] . '"';
    }
    if (!empty($value['title'])) {
        $sbtitle = '<div class="sb-image-title">' . sb_image_html_special_charecter($value['title']) . '</div>';
    }
    if (!empty($value['files'])) {
        $sbdesc = '<div class="sb-image-desc">' . sb_image_html_special_charecter($value['files']) . '</div>';
    }
    if (!empty($value['hoverimage'])) {
        $backgoundimage = 'style="background: linear-gradient( ' . $listdatacss[5] . ', ' . $listdatacss[5] . '), url(' . $value['hoverimage'] . ');-moz-background-size: 100% 100%;-o-background-size: 100% 100%; background-size: 100% 100%;"';
    }
    if ($styledata[23] == '_blank') {
        $opennewtab = 'target="_blank"';
    }
    if ($value['buttom_text'] != '') {
        $sbbuttontext = '<div class="sb-image-button02"><a ' . $opennewtab . ' href="' . $value['link'] . '" class="sb-image-button"> ' . sb_image_html_special_charecter($value['buttom_text']) . ' </a> </div>';
    }
    if ($userdata == 'admindata') {
        $sbadminwrapper = 'sb-admin-ab-id';
    }
    if ($value['link'] == '') {
        $valuedata = '<div class="sb-image-img">
                              <img src="' . $value['image'] . '">
                        </div>
                        <div class="sb-image-info"  ' . $backgoundimage . '>
                            <div class="sb-image-data">
                                ' . $sbtitle . '
                                ' . $sbdesc . '
                            </div>
                       </div>
                        ';
    }
    if ($value['link'] != '' && $value['buttom_text'] == '') {
        $valuedata = '<a ' . $opennewtab . ' href="' . $value['link'] . '"> 
                            <div class="sb-image-img">
                                 <img src="' . $value['image'] . '">
                            </div>
                            <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                </div>
                            </div>
                         </a>';
    }
    if ($value['link'] != '' && $value['buttom_text'] != '') {
        $valuedata = '<div class="sb-image-img">
                             <img src="' . $value['image'] . '">
                         </div>
                         <div class="sb-image-info"  ' . $backgoundimage . '>
                                <div class="sb-image-data">
                                    ' . $sbtitle . '
                                    ' . $sbdesc . '
                                    ' . $sbbuttontext . '
                                </div>
                         </div>';
    }
    echo '<div ' . $dataavanimation . ' class="' . $styledata[3] . ' ' . $dataanimation . '  sb-image-animation-' . $styleid . '  sb-image-padding-' . $styleid . ' ' . $sbadminwrapper . '">
                <div class="sb-image-map-' . $styleid . '">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover oxilab-touchstart  sb-image-hover-' . $styleid . ' sb-image-hover-' . $styleid . '-' . $value['id'] . ' ' . $listdatacss[3] . '">';
    echo $valuedata;
    echo '          </div>
                     </div>
                </div>';
    if ($userdata == 'admindata') {
        sb_image_admin_square_select_id($value['id']);
    }
    ?>
    <style>
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>{
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
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
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.4s linear;
            -moz-transition:  all 0.4s linear;
            transition:  all 0.4s linear;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info {
            opacity: 0;
            background-color:<?php echo $listdatacss[5]; ?>;
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-data{
            display: table-cell;
    <?php echo $listdatacss[7]; ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-title {
            color: <?php echo $listdatacss[9]; ?>;  background-color: <?php echo $listdatacss[29]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-info .sb-image-desc {
            color: <?php echo $listdatacss[13]; ?>;
        }
        .sb-image-hover-<?php echo $styleid; ?> .sb-image-button02{
            <?php
            if ($listdatacss[23] == 'float: left;') {
                echo 'margin-left:' . $listdatacss[25] . 'px; ';
                echo 'text-align:left ';
            } elseif ($listdatacss[23] == 'float: right;') {
                echo 'text-align:right ';
            } else {
                echo 'text-align:center ';
            }
            ?>
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button{
            background: <?php echo $listdatacss[19]; ?>;
            color: <?php echo $listdatacss[17]; ?>;

        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> a.sb-image-button:hover{
            background: <?php echo $listdatacss[17]; ?>;
            color: <?php echo $listdatacss[19]; ?>;
        }

        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-info,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-info{
            opacity: 1;
            visibility: visible;
        }   
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?> .sb-image-img {
            animation-duration: 1s;
            animation-name: foolishIn;
            opacity: 1;
            z-index: 2;
            pointer-events: none;
        }
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>:hover .sb-image-img,
        .sb-image-hover-<?php echo $styleid; ?>-<?php echo $value['id']; ?>.oxi-touch .sb-image-img{
            animation-duration: 1s;
            animation-name: foolishOut;
            opacity: 0 ;
        }
        @keyframes foolishOut {
            0% {
                opacity: 1;
                transform: scale(1, 1) rotate(360deg);
                transform-origin: 50% 50% 0;
            }
            20% {
                opacity: 1;
                transform: scale(0.5, 0.5) rotate(0deg);
                transform-origin: 0 0 0;
            }
            40% {
                opacity: 1;
                transform: scale(0.5, 0.5) rotate(0deg);
                transform-origin: 100% 0 0;
            }
            60% {
                opacity: 1;
                transform: scale(0.5, 0.5) rotate(0deg);
                transform-origin: 0 50% 0;
            }
            80% {
                opacity: 1;
                transform: scale(0.5, 0.5) rotate(0deg);
                transform-origin: 0 100% 0;
            }
            100% {
                opacity: 0;
                transform: scale(0, 0) rotate(0deg);
                transform-origin: 50% 50% 0;
            }
        }
        @keyframes foolishIn {
            0% {
                opacity: 0;
                transform: scale(0, 0) rotate(360deg);
                transform-origin: 50% 50% 0;
            }
            20% {
                opacity: 1;
                transform: scale(0.5, 0.5) rotate(0deg);
                transform-origin: 0 100% 0;
            }
            40% {
                opacity: 1;
                transform: scale(0.5, 0.5) rotate(0deg);
                transform-origin: 100% 100% 0;
            }
            60% {
                opacity: 1;
                transform: scale(0.5, 0.5) rotate(0deg);
                transform-origin: 0 50% 0;
            }
            80% {
                opacity: 1;
                transform: scale(0.5, 0.5) rotate(0deg);
                transform-origin: 0 0 0;
            }
            100% {
                opacity: 1;
                transform: scale(1, 1) rotate(0deg);
                transform-origin: 50% 50% 0;
            }
        }
    </style>

    <?php
    echo '</div>';
}
