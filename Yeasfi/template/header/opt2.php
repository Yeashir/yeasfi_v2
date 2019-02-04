<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
?>

<section id="topheader" class="topheader">
    <div class="container">
        <div class="row">
            <div id="blank" class="col-lg-3"></div>
            <div id="header-phone" class="col-lg-3">
                <div id="top-phone" class="col">
                    <img src="<?php echo $phoneimg[0]; ?>"                                                     
                         alt="<?php echo cs_get_option('keyword'); ?> phone" class="banerphone hedcomon" aria-hidden="true">                   
                    <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a> </span> 
                </div> 
            </div>

            <div id="header-email" class="col-lg-3">
                <img src="<?php echo $emailimg[0]; ?>"                                                     
                     alt="<?php echo $yeasfe['alt_txt']; ?> email" class="baneremail hedcomon" aria-hidden="true"> 
                <a  href="mailto:<?php echo cs_get_option('email'); ?>"> <?php echo cs_get_option('email'); ?></a> 
            </div>
            
            <div id="header-social" class="col-lg-3">
                <?php get_template_part('social-media'); ?>
            </div>

        </div>
    </div>
</section>
<section id="sticker" class="header-top-area">
    <div class="container">
        <div class="row">
            <div id="logo-area" class="col-md-12 col-lg-3 col-sm-12">
                <?php if (cs_get_option('logo_upload')) : ?>
                    <a href='<?php echo esc_url(home_url('/')); ?>' >
                        <img class="img-fluid logo " src='<?php echo cs_get_option('logo_upload') ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                    </a>
                <?php endif; ?>
            </div>                             

            <div id="menu-sec" class="col-lg-9">
                <?php
                wp_nav_menu(array(
                    'menu' => 'mainmenu',
                    'theme_location' => 'mainmenu',
                    'container_id' => 'cssmenu',
                    'walker' => new CSS_Menu_Walker()
                ));
                ?>
            </div>
        </div>
    </div>
</section>

