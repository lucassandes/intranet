<?php
/**
 * Template Name: Notícias
 **/
?><?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">

    <?php //left sidebar ?>
    <?php get_sidebar('left'); ?>

    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

        <?php // theloop
        if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h2 class="page-header"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php comments_template(); ?>

        <?php endwhile; ?>
        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'posts_per_page' => 7,
            'paged' => $paged
        );
        query_posts($args) ;
        //$query = new WP_Query(array( 'posts_per_page' => 3, 'paged' => $paged));

        $i = 0;
         while (have_posts()) :  the_post();        ?>


            <div <?php post_class('post-index post'); ?> class="bs-callout bs-callout-info">



                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(array(150, 150)); ?>



                <?php endif; ?>
                <?php get_template_part('template-part', 'postmeta'); ?>
                <h3 class="page-header">
                    <a href="<?php the_permalink(); ?>"
                       title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                       rel="bookmark"><?php the_title(); ?></a>
                </h3>
                <?php the_content('Continue Lendo »'); ?>
                <?php wp_link_pages(); ?>

                <?php /*if (comments_open()) : ?>
                        <div class="clear"></div>
                        <p class="text-right">
                            <a class="btn btn-success"
                               href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Deixar um comentário', 'devdmbootstrap3'), __('One Comment', 'devdmbootstrap3'), '%' . __(' Comments', 'devdmbootstrap3')); ?>
                                <span class="glyphicon glyphicon-comment"></span></a>
                        </p>
                    <?php endif; */
                ?>
            </div>

            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>


        <?php posts_nav_link(); ?>

    </div>

    <?php //get the right sidebar ?>
    <?php get_sidebar('right'); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
