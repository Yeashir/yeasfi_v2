<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
$mwta = cs_get_option('keyword');
?>

<section class="footer-section footer-widget-area">
    <div class="container">        
        <div class="row">
            <div class="col-md-12  col-lg-3 footer-add-sec">
                <h2>Location</h2>  
                <div class="row">
                    <div id="footer-address" class="col-12 foot-com">  
                        <div class="row">
                            <div class="col-md-12 col-lg-3 align-self-center">
                                <img src="<?php echo $addrsimg[0]; ?>"                                                     
                                     alt="<?php echo cs_get_option('keyword'); ?> Address" class="banerphone" aria-hidden="true"> 
                            </div>
                            <div class="col-md-12 col-lg-9 align-self-center pl-lg-0">
                                <a target="_blank" href="<?php echo cs_get_option('maplink'); ?>">
                                    <?php echo cs_get_option('streetaddress'); ?> 
                                    <?php echo cs_get_option('addresslocality'); ?> 
                                    <?php echo cs_get_option('addressregion'); ?> 
                                    <?php echo cs_get_option('postalcode'); ?> 
                                </a> 
                            </div>
                        </div>
                    </div>
                    <div id="footer-phone" class="col-12 d-none  d-lg-block foot-com">  
                        <div class="row">
                            <div class="col-md-12 col-lg-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/phone-footer.png"                                                     
                                     alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> 
                            </div>
                            <div class="col-md-12 col-lg-9 align-self-center pl-lg-0">
                                <a class="footerphone"  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a>
                            </div>
                        </div>
                    </div>
                    <div id="footer-email" class="col-12 foot-com">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 align-self-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/email-footer.png"                                                     
                                     alt="<?php echo cs_get_option('keyword'); ?> Phone & email" class="banerphone" aria-hidden="true"> 
                            </div>
                            <div class="col-md-12 col-lg-9 align-self-center pl-lg-0">                               
                                <a  class="footeremeil" href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> </br>

                            </div>
                        </div>
                    </div> 



                </div>
            </div>

            <div class="col-md-12  col-lg-3 footerlogo footer-add-sec">
                <h2>links</h2>

                <div class="row">
                    <div class="col-12 footerlogo">
                        <?php //if (cs_get_option('footer_logo')) :  ?>
<!--                            <a class="mt-4" href='<?php echo esc_url(home_url('/')); ?>' >
                                <img class="img-fluid logo " src='<?php echo cs_get_option('footer_logo'); ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                            </a>-->
                        <?php //endif;  ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class=" footer-menu"> 
                            <?php
                            wp_nav_menu(array(
                                'menu' => 'footer',
                                'theme_location' => 'footer',
                                'container_id' => 'cssmenu',
                                'walker' => new CSS_Menu_Walker()
                            ));
                            ?>
                        </div>


                    </div>

                </div>

            </div>

            <div class="col-md-12  col-lg-3 bis-hour footer-add-sec">
                <h2>Opening Hours</h2>
                <div class="row">
                    <div class="col-12 footer-opnhour">                        
                        <?php echo cs_get_option('openinghour'); ?>
                    </div>

                </div>
            </div>
            <div class="col-md-12  col-lg-3 Socialmediafooter footer-add-sec">
                <h2>Social media</h2>
                <div class="row">
                    <div class="col-12 footer-sm">                        
                        <ul class="social-sec-footer ">
                            <?php
                            $group_items = cs_get_option('socialmediaa');
                            if (!empty($group_items)) {

                                foreach ($group_items as $item) {
                                    //var_dump( $item );// has title
                                    $link = !empty($item['smolink']) ? $item['smolink'] : '';
                                    $icon = !empty($item['smicon']) ? $item['smicon'] : '';
                                    $imagesm = !empty($item['smimg']) ? $item['smimg'] : '';
                                    $socialimg = wp_get_attachment_image_src($imagesm, 'full');
                                    $title = !empty($item['smotitle']) ? $item['smotitle'] : '';
                                    $imagesmhov = !empty($item['smimghv']) ? $item['smimghv'] : '';
                                    $socialimghov = wp_get_attachment_image_src($imagesmhov, 'full');

                                    if (!empty($icon)) {
                                        echo '<li><a  target="_blank" href="' . $link . '">  <i class="' . $icon . '"> </i> <span class="smtitle">' . $title . '</span> </a></li>';
                                    } else {
                                        echo '<li><a  target="_blank" href="' . $link . '"> <img class="socialimg" src="' . $socialimghov[0] . '" alt="' . $mwta . '|' . $title . '"/> <span class="smtitle">' . $title . '</span> </a></li>';
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </div>

                </div>
            </div>



        </div>            
    </div>        
</section>

<section class="map-section" >
    <div class="container">
        <div class="row">
            <a class="mapancore" target="_blank" href="<?php echo cs_get_option('maplink'); ?>"></a>
        </div>
    </div>
</section>

<section class="copyright-section" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8  copyright-text-srea text-center align-self-center">
                <div class="text-copy">&copy; <?php echo the_date('Y'); ?> <?php echo cs_get_option('copytext'); ?>.
                    All Rights Reserved.<span class="dtb"> <img src="<?php echo get_template_directory_uri(); ?>/img/BeLocal-logo.png" alt="<?php echo cs_get_option('keyword'); ?> belocal icon"> Digital Transformation by 
                        <a target="_blank" href="http://belocal.today">BeLocal Today</a></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 copymenu d-none d-lg-block">
                <div class=" copw-menu"> 
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'Copy Menu',
                        'theme_location' => 'copy',
                        'container_id' => 'copymenu',
                    ));
                    ?>
                </div>
            </div>

        </div>
</section>


<style>
    .footer-social li {
        display: inline-block;
        margin: 5px 12px;
        background: #263e92;
        text-align: center;
        width: 40px;
        height: 40px;
        border-top-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .footer-social li i{
        display: block;
        padding:10px;
    }

    div#header-social li:last-child {
        background: url(/wp-content/themes/yeasfi/img/google-review.png) no-repeat center;
    }

    section.copyright-section {
        padding:20px 0;
        background: #000;
        color: #fff;
    }

    section.copyright-section a{color:#0b82c6; font-weight: 300; text-decoration:none;}



    div#footer-phone a {
        font-size: 18px;
        font-weight: 600;
        color: #fff;
    }


    .copyright-section #cssmenu a{color: #fff; padding: 0; text-transform: capitalize; font-size: 0.6em;}
    .copyright-section #cssmenu a:hover, .copyright-section .current-menu-item a{color: #fca200 !important;}

    section.mobile-bottom {
        position: fixed;
        bottom: 0;
        width: 100%;
        background: #170a0a;
        z-index:7777;
        text-align: center; 
        height: 45px;
    }

    a.btm-cl, a.btm-eml{
        font-size: 24px;
        padding: 5px;
        color: #fff;
        font-weight: 600;
        display: block;
        transition: 0.2s;
        -webkit-transition: 0.2s;
        width: 50%;
        float: left;
    }
    div#call {
        border-right: 1px solid;
    }
    a.btm-cl:hover, a.btm-eml:hover{
        background:#2382c4;
    }
    section#home-form {  position: relative;  z-index: 8888;}
</style>