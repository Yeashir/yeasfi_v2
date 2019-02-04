<?php
/**
 * Template Name:Catagory based FAQ Page Template
 *
 * 

 */
get_header();
$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
?> 
<div class="tetel-inner-page">
    <div class="container">
        <div class="row">
            <h2 id="page-<?php the_ID(); ?>" class="innerpage-titel"> <?php echo the_title(); ?></h2>
        </div>
    </div>
</div>

<section class="innerpage faqtext_sec" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 inner-content-div">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        ?>
                        <div class="post-content-innerpage">                          
                            <?php the_content(); ?>                          
                        </div>

                        <?php
                    endwhile;
                endif;
                ?>
                <?php //edit_post_link('Edit this entry.', '<p>', '</p>');     ?>
            </div>
        </div>
    </div>
</section>

<?php
?>
<section id="faqcontent"  class="innerpage faq-sec" >
    <div class="container">
        <div class="row">
            <?php
            $custom_terms = get_terms('faqs_categories');
            foreach ($custom_terms as $custom_term) {
                wp_reset_query();
                $args = array('post_type' => 'faqs',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faqs_categories',
                            'field' => 'slug',
                            'terms' => $custom_term->slug,
                            'orderby' => 'ID',
                            'order' => 'DESC',
                        ),
                    ),
                );
                $count = 0;
                $loop = new WP_Query($args);
                if ($loop->have_posts()) {
                    ?>

                    <div class=" col-12">
                        <h2 class="faqcat-title"><?php echo $custom_term->name ?></h2>
                        <?php
                        while ($loop->have_posts()) : $loop->the_post();
                            ?>
                            <div class="faq-single">
                                <div class="collapsible faq-title" id="section<?php echo $count; ?> "><span class="faqarrow"></span><div class="quize-titl"><?php the_title(); ?></div></div>
                                <div class='answer' id="ans<?php echo $count; ?>"><div class="quize-titl"><?php the_content(); ?></div></div>
                            </div>
                            <?php
                            $count ++;
                        endwhile;
                        ?>
                    </div>

                    <?php
                }
            }
            ?>

        </div>
    </div>

</section>

<?php get_footer('option'); ?>