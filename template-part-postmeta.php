<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>

    <p class="postmeta">

        <?php if (strcmp(get_post_type(), 'post') == 0): ?>
            <?php the_category(', '); ?> |
        <?php endif; ?>

        <?php the_time('j \d\e F \d\e Y'); ?>   <i class="icon-clock"></i> <?php the_time(); ?>

        <?php edit_post_link(__(' &nbsp; <span class="glyphicon glyphicon-edit"></span> Editar Noticia', 'devdmbootstrap3')); ?>
    </p>
    <!--<p class="text-right"><span class="glyphicon glyphicon-circle-arrow-right"></span> <?php _e('Posted In', 'devdmbootstrap3'); ?>: <?php the_category(', '); ?></p> -->
    <?php /*if( has_tag() ) : ?>
        <p class="text-right"><span class="glyphicon glyphicon-tags"></span>
        <?php the_tags(); ?>
        </p>
    <?php endif;*/
    ?>
<?php endif; ?>