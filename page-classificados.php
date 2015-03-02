<?php
/**
* Template Name: Classificados
**/
?>
<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class=" dmbs-content dmbs-main  ">
    <?php // theloop
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h2 class="page-header"><?php the_title() ;?></h2>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <?php comments_template(); ?>

    <?php endwhile; ?>
    <?php else: ?>

        <?php get_404_template(); ?>

    <?php endif; ?>

    <div class=" dmbs-main ">


        <div id="plugin-classificados">

            <?php
            $query = new WP_Query(array('post_type' => 'classificado', 'posts_per_page' => 99));
            $i = 0;
            while ($query->have_posts()) :
                $query->the_post();
                $i++;
                ?>

                <div class="col-md-3 border-right <?php echo(($i == 4) ? 'no-border' : ''); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="img-classificado">
                            <a href="<?php the_permalink(); ?>"
                               title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                               rel="bookmark">
                                <?php the_post_thumbnail(array(130, 130)); ?>
                            </a>
                        </div>

                    <?php endif; ?>
                    <h5><a href="<?php the_permalink(); ?>"
                           title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                           rel="bookmark"><?php the_title(); ?></a>
                    </h5>
                </div>

                <?php echo(($i == 4) ? '<div class="clear" style="height: 30px;"></div>' : ''); ?>

                <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>

            <div class="clear"></div>
        </div>


    </div>



</div>
<!-- end content container -->

<?php get_footer(); ?>
