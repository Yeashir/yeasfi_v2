<?php
/**
 * Template Name:Our Team Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.

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

            <div class="col-12 inner-content-div">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        ?>
                        <div cl>
                            <div class="post-content-innerpage  col-md-12 col-lg-4">  
                                <?php echo do_shortcode('[image_withoutgrid]'); ?>
                            </div>
                            <div class="post-content-innerpage  col-md-12 col-lg-8">                          
                                <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>                          
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


<section class="ourteam" >
    <div class="container-fluid">
        <div class="row">                               
            <?php
            $args = array(
                'post_type' => 'ourteam',
                'posts_per_page' => 100,
                'orderby' => 'ID',
                'order' => 'ASC',
            );
            $wp_query = new WP_Query($args);
            $count = 0;
            $count2 = 0;
            if (have_posts()) : while (have_posts()) : the_post();
                    $teammeta = get_post_meta(get_the_ID(), 'custom_options_team', true);
                    // var_dump ($teammeta);
                    $subtitle = $teammeta ["subtitle"];
                    $deg = $teammeta ["deg"];
                    $socialmeta = $teammeta ["membermeta_groups"];
                    $memberproicon = $teammeta ["membermeta_groups"];
                    $thamb = wp_get_attachment_url(get_post_thumbnail_id($post->ID), '');
                    ?>

                    <div class="col-lg-3 col-md-3 col-sm-12 teammember">
                        <img src="<?php echo $thamb; ?>" alt="<?php echo cs_get_option('keyword'); ?> Team Member"/> 
                        <div class="name"><h1><?php the_title(); ?></h1>
                            <h2><?php echo $deg; ?></h2></div>
                    </div>

                    <?php
                    $counter++;
                endwhile;
            endif;
            wp_reset_query();
            ?>       

        </div>
    </div>
</section>
<?php get_footer('option'); ?>
<style>
    .col-xs-5th-1, .col-xs-5th-2, .col-xs-5th-3, .col-xs-5th-4 {
        float: left;
    }

    .col-xs-5th-5 {
        float: left;
        width: 100%;
    }

    .col-xs-5th-4 {
        width: 80%;
    }

    .col-xs-5th-3 {
        width: 60%;
    }

    .col-xs-5th-2 {
        width: 40%;
    }

    .col-xs-5th-1 {
        width: 20%;
    }

    .col-xs-5th-pull-5 {
        right: 100%;
    }

    .col-xs-5th-pull-4 {
        right: 80%;
    }

    .col-xs-5th-pull-3 {
        right: 60%;
    }

    .col-xs-5th-pull-2 {
        right: 40%;
    }

    .col-xs-5th-pull-1 {
        right: 20%;
    }

    .col-xs-5th-pull-0 {
        right: auto;
    }

    .col-xs-5th-push-5 {
        left: 100%;
    }

    .col-xs-5th-push-4 {
        left: 80%;
    }

    .col-xs-5th-push-3 {
        left: 60%;
    }

    .col-xs-5th-push-2 {
        left: 40%;
    }

    .col-xs-5th-push-1 {
        left: 20%;
    }

    .col-xs-5th-push-0 {
        left: auto;
    }

    .col-xs-5th-offset-5 {
        margin-left: 100%;
    }

    .col-xs-5th-offset-4 {
        margin-left: 80%;
    }

    .col-xs-5th-offset-3 {
        margin-left: 60%;
    }

    .col-xs-5th-offset-2 {
        margin-left: 40%;
    }

    .col-xs-5th-offset-1 {
        margin-left: 20%;
    }

    .col-xs-5th-offset-0 {
        margin-left: 0%;
    }

    @media (min-width: 768px) {
        .col-sm-5th-1, .col-sm-5th-2, .col-sm-5th-3, .col-sm-5th-4 {
            float: left;
        }

        .col-sm-5th-5 {
            float: left;
            width: 100%;
        }

        .col-sm-5th-4 {
            width: 80%;
        }

        .col-sm-5th-3 {
            width: 60%;
        }

        .col-sm-5th-2 {
            width: 40%;
        }

        .col-sm-5th-1 {
            width: 20%;
        }

        .col-sm-5th-pull-5 {
            right: 100%;
        }

        .col-sm-5th-pull-4 {
            right: 80%;
        }

        .col-sm-5th-pull-3 {
            right: 60%;
        }

        .col-sm-5th-pull-2 {
            right: 40%;
        }

        .col-sm-5th-pull-1 {
            right: 20%;
        }

        .col-sm-5th-pull-0 {
            right: auto;
        }

        .col-sm-5th-push-5 {
            left: 100%;
        }

        .col-sm-5th-push-4 {
            left: 80%;
        }

        .col-sm-5th-push-3 {
            left: 60%;
        }

        .col-sm-5th-push-2 {
            left: 40%;
        }

        .col-sm-5th-push-1 {
            left: 20%;
        }

        .col-sm-5th-push-0 {
            left: auto;
        }

        .col-sm-5th-offset-5 {
            margin-left: 100%;
        }

        .col-sm-5th-offset-4 {
            margin-left: 80%;
        }

        .col-sm-5th-offset-3 {
            margin-left: 60%;
        }

        .col-sm-5th-offset-2 {
            margin-left: 40%;
        }

        .col-sm-5th-offset-1 {
            margin-left: 20%;
        }

        .col-sm-5th-offset-0 {
            margin-left: 0%;
        }
    }
    @media (min-width: 992px) {
        .col-md-5th-1, .col-md-5th-2, .col-md-5th-3, .col-md-5th-4 {
            float: left;
        }

        .col-md-5th-5 {
            float: left;
            width: 100%;
        }

        .col-md-5th-4 {
            width: 80%;
        }

        .col-md-5th-3 {
            width: 60%;
        }

        .col-md-5th-2 {
            width: 40%;
        }

        .col-md-5th-1 {
            width: 20%;
        }

        .col-md-5th-pull-5 {
            right: 100%;
        }

        .col-md-5th-pull-4 {
            right: 80%;
        }

        .col-md-5th-pull-3 {
            right: 60%;
        }

        .col-md-5th-pull-2 {
            right: 40%;
        }

        .col-md-5th-pull-1 {
            right: 20%;
        }

        .col-md-5th-pull-0 {
            right: auto;
        }

        .col-md-5th-push-5 {
            left: 100%;
        }

        .col-md-5th-push-4 {
            left: 80%;
        }

        .col-md-5th-push-3 {
            left: 60%;
        }

        .col-md-5th-push-2 {
            left: 40%;
        }

        .col-md-5th-push-1 {
            left: 20%;
        }

        .col-md-5th-push-0 {
            left: auto;
        }

        .col-md-5th-offset-5 {
            margin-left: 100%;
        }

        .col-md-5th-offset-4 {
            margin-left: 80%;
        }

        .col-md-5th-offset-3 {
            margin-left: 60%;
        }

        .col-md-5th-offset-2 {
            margin-left: 40%;
        }

        .col-md-5th-offset-1 {
            margin-left: 20%;
        }

        .col-md-5th-offset-0 {
            margin-left: 0%;
        }
    }
    @media (min-width: 1200px) {
        .col-lg-5th-1, .col-lg-5th-2, .col-lg-5th-3, .col-lg-5th-4 {
            float: left;
        }

        .col-lg-5th-5 {
            float: left;
            width: 100%;
        }

        .col-lg-5th-4 {
            width: 80%;
        }

        .col-lg-5th-3 {
            width: 60%;
        }

        .col-lg-5th-2 {
            width: 40%;
        }

        .col-lg-5th-1 {
            width: 20%;
        }

        .col-lg-5th-pull-5 {
            right: 100%;
        }

        .col-lg-5th-pull-4 {
            right: 80%;
        }

        .col-lg-5th-pull-3 {
            right: 60%;
        }

        .col-lg-5th-pull-2 {
            right: 40%;
        }

        .col-lg-5th-pull-1 {
            right: 20%;
        }

        .col-lg-5th-pull-0 {
            right: auto;
        }

        .col-lg-5th-push-5 {
            left: 100%;
        }

        .col-lg-5th-push-4 {
            left: 80%;
        }

        .col-lg-5th-push-3 {
            left: 60%;
        }

        .col-lg-5th-push-2 {
            left: 40%;
        }

        .col-lg-5th-push-1 {
            left: 20%;
        }

        .col-lg-5th-push-0 {
            left: auto;
        }

        .col-lg-5th-offset-5 {
            margin-left: 100%;
        }

        .col-lg-5th-offset-4 {
            margin-left: 80%;
        }

        .col-lg-5th-offset-3 {
            margin-left: 60%;
        }

        .col-lg-5th-offset-2 {
            margin-left: 40%;
        }

        .col-lg-5th-offset-1 {
            margin-left: 20%;
        }

        .col-lg-5th-offset-0 {
            margin-left: 0%;
        }
    }
</style>