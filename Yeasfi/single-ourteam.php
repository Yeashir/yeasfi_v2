<?php
/**
 * The Template for displaying all member posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header();
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


<section class="innerpage" >


    <div class="container">
        <div class="row">
            <div id="content" class="widecolumn col-12">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();

                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        $teammeta = get_post_meta(get_the_ID(), 'custom_options_team', true);
                        $subtitle = $teammeta ["subtitle"];
                        $deg = $teammeta ["deg"];
                        $socialmeta = $teammeta ["membermeta_groups"];
                        $memberproicon = $teammeta ["membermeta_groups"];
                        $thamb = wp_get_attachment_url(get_post_thumbnail_id($post->ID), '');
                        ?>
                        <div class="row">
                            <div class="single-tnumb memberpage col-lg-4 col-md-12">
                                <img src="<?php echo $url ?>" alt="<?php echo $yeasfe['alt_txt']; ?> <?php the_title(); ?> "/>
                            </div>
                            <div class="singlepage-cont memberpage col-lg-8 col-md-12">
                                <h2 id="page-<?php the_ID(); ?>" class="single-titel memberneme"> <?php echo the_title(); ?> 
                                    <?php if (!empty($subtitle)) { ?>
                                        <span class="subtitle">[ <?php echo $subtitle; ?> ]</span>
                                        <?php } ?>
                                </h2>
                                <h3 class="desig"><?php echo $deg; ?></h3>
                                <?php the_content(); ?>

                                <div class="socoal-personal">
                                    <?php
                                    if (!empty($teammeta)) {
                                        $meta_groups = $teammeta['membermeta_groups']; //
                                        if (!empty($meta_groups)) {
                                            foreach ($meta_groups as $meta_group) {
                                                ?>
                                                <a target="_blank" href="<?php echo $meta_group['memberprolink']; ?>">
                                                    <i class="<?php echo $meta_group['memberproicon'] ?>"></i>

                                                </a>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
