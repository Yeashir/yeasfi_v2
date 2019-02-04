<?php
/**
 * Template Name:Contact us Page  Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.

 */
get_header();
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
$mwta = cs_get_option('keyword');
?>

<div class="tetel-inner-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 id="page-<?php the_ID(); ?>" class="innerpage-titel"> <?php echo the_title(); ?></h2>
            </div>
        </div>
    </div>
</div>

<section class="conutctpage-bg">
    <div class="container">
        <div class="row">                      
            <div id="content" class="contactpage  post-content-innerpage entrytext contuctapage col-12">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        ?>
                                                             
                                <?php the_content(); ?>                                   
                         

                        <?php
                    endwhile;
                endif;
                ?>
            </div>

            <div class="col-12 ">
                <div class="row ">   
                    <div class="col-md-12  col-lg-6 ctp-add-sec">
                        
                        <div class="row leftblock">
                            <div id="ctp-address" class="col-12 ctp-com">  
                                 <h2>Get In Touch</h2> 
                                <div class="row">
                                    <div class="col-md-12 col-lg-2 align-self-center">
                                        <img src="<?php echo $addrsimg[0]; ?>"                                                     
                                             alt="<?php echo cs_get_option('keyword'); ?> Address" class="banerphone" aria-hidden="true"> 
                                    </div>
                                    <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">
                                        <a target="_blank" href="<?php echo cs_get_option('maplink'); ?>">
                                            <?php echo cs_get_option('streetaddress'); ?> </br>
                                            <?php echo cs_get_option('addresslocality'); ?> 
                                            <?php echo cs_get_option('addressregion'); ?> 
                                            <?php echo cs_get_option('postalcode'); ?> 
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div id="ctp-phone" class="col-12 d-none  d-lg-block ctp-com">  
                                <div class="row">
                                    <div class="col-md-12 col-lg-2">
                                        <img src="<?php echo $phoneimg[0];?>"                                                     
                                             alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> 
                                    </div>
                                    <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">
                                        <a class="ctprphone"  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a>
                                    </div>
                                </div>
                            </div>
                            <div id="ctp-email" class="col-12 ctp-com">
                                <div class="row">
                                    <div class="col-md-12 col-lg-2 align-self-center">
                                        <img src="<?php echo $emailimg[0]; ?>"                                                     
                                             alt="<?php echo cs_get_option('keyword'); ?> Phone & email" class="banerphone" aria-hidden="true"> 
                                    </div>
                                    <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">                               
                                        <a  class="ctpemeil" href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>   

                    <div class="ctpformsec  col-md-12 col-lg-6">  
                       <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 8, 'title' => false, 'description' => false ) ); ?>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>

<?php get_footer(); ?>