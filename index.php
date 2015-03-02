<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>


<!-- start content container -->
<div class=" dmbs-content"> <!-- tinha um row aqui -->
<?php if (is_home()): ?>
    <div class="quick-links col-md-12">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-4">
                <div class=" text-center">
                    <a href="http://www.camarasjc.sp.gov.br/assista2.php">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/icon-tv.png" height="40"/>
                    </a>
                </div>

                <div class=" text-center">
                    <a href="http://www.camarasjc.sp.gov.br/assista2.php" class="text-center">Assista à Sessão </a>
                </div>


            </div>


            <div class="col-md-2 col-sm-2  col-xs-4">
                <div class=" text-center">
                    <a href="http://intranet/listatel.pdf">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/icon-telefones.png"
                             height="40"/>
                    </a>
                </div>

                <div class=" text-center">
                    <a href="http://intranet/listatel.pdf" class="text-center">Lista de Ramais </a>
                </div>

            </div>

            <div class="col-md-2 col-sm-2  col-xs-4">
                <div class=" text-center">
                    <a href="http://200.174.132.60:8080/cmsjc/websis/siapegov/recursos_humanos/grh/grh_rh_online.php">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/icon-portal.png" height="40"/>
                    </a>
                </div>

                <div class=" text-center">
                    <a href="http://200.174.132.60:8080/cmsjc/websis/siapegov/recursos_humanos/grh/grh_rh_online.php"
                       class="text-center">Portal do Servidor </a>
                </div>
            </div>

            <div class="col-md-2 col-sm-2  col-xs-4">
                <div class=" text-center">
                    <a href="http://camarasjc2.hospedagemdesites.ws/2015">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/icon-cmsjc.png" height="40"/>
                    </a>
                </div>

                <div class=" text-center">
                    <a href="http://camarasjc2.hospedagemdesites.ws/2015" class="text-center">Site CMSJC </a>
                </div>
            </div>

            <div class="col-md-2 col-sm-2  col-xs-4">
                <div class=" text-center">
                    <a href="http://www.santander.com.br/">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/icon-santander.png"
                             height="40"/>
                    </a>
                </div>

                <div class=" text-center">
                    <a href="http://www.santander.com.br/" class="text-center">Santander </a>
                </div>
            </div>

            <div class="col-md-2 col-sm-2  col-xs-4">
                <div class=" text-center">
                    <a href="http://www.unimedsjc.com.br/site/guiamedico.php">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/icon-guia-medico.png"
                             height="40"/>
                    </a>
                </div>

                <div class=" text-center">
                    <a href="http://www.unimedsjc.com.br/site/guiamedico.php" class="text-center">Guia Médico </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="clear"></div>

<?php // tres destaques ?>
<?php if (is_home()) : ?>
    <div class="tres-destaques row">
        <div class="col-md-4 tres-destaques-item">
            <?php
            $query = new WP_Query(array('post_type' => 'dica', 'posts_per_page' => 1));
            $i = 0;
            while ($query->have_posts()) :
                $query->the_post(); ?>

                <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('small-banner', array('class' => 'img-responsive img-zoom')); ?></a>
            <?php endif; ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="col-md-11 dizeres">
                        <h2 class="title-zoom">Você indica </h2>

                        <h3><?php the_excerpt(); ?></h3>
                    </div>
                </a>
            <?php endwhile; ?>


        </div>


        <div class="col-md-4 tres-destaques-item">
            <?php
            $query = new WP_Query(array('post_type' => 'conheca', 'posts_per_page' => 1));
            $i = 0;
            while ($query->have_posts()) :
                $query->the_post(); ?>

                <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('small-banner', array('class' => 'img-responsive ')); ?></a>
            <?php endif; ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="col-md-11 dizeres">
                        <h2 class="title-zoom">Conheça </h2>

                        <h3><?php the_excerpt(); ?></h3>
                    </div>
                </a>
            <?php endwhile; ?>


        </div>


        <div class="col-md-4 loader-gif">



            <!-- Widget Previs&atilde;o de Tempo CPTEC/INPE-->
            <iframe frameborder="0" allowtransparency="yes" scrolling="no" width="300" heigth="200"
                    src="http://www.tempoagora.com.br/ta-widgets?cidades=SaoJosedosCampos-SP&amp;tipo=horizontal"></iframe>

            <!--
            <iframe id="myIframe" allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0"
                    frameborder="0"
                    scrolling="no" src="http://www.cptec.inpe.br/widget/widget.php?p=4963&w=h&c=748ccc&f=ffffff"
                    height="190px" width="293px" class="widget-tempo" align="right"></iframe>
            <noscript>Previs&atilde;o de <a href="http://www.cptec.inpe.br/cidades/tempo/4963">São José dos
                    Campos/SP</a> oferecido por <a href="http://www.cptec.inpe.br">CPTEC/INPE</a></noscript>

            -->


        </div>
    </div>
    <div class="clear"></div>
<?php endif; ?>

<div class="row">

    <?php //left sidebar ?>
    <?php get_sidebar('left'); ?>

    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

        <?php

        //if this was a search we display a page header with the results count. If there were no results we display the search form.
        if (is_search()) :

            $total_results = $wp_query->found_posts;

            echo "<h2 class='page-header'>" . sprintf(__('%s Search Results for "%s"', 'devdmbootstrap3'), $total_results, get_search_query()) . "</h2>";

            if ($total_results == 0) :
                get_search_form(true);
            endif;

        endif;

        ?>


        <?php // theloop
        $i = 0;
        /*if ( have_posts() ) : while ( have_posts() && $i < 10 ) : the_post(); ?>
               $i++; */
        if (have_posts()) : while (have_posts()) : the_post();


            // single post
            if (is_single()) : ?>
                <?php   get_post_type();
                if ((strcmp(get_post_type(), 'classificado'))) echo('<div class="post-single">');
                ?>


                <?php if ((strcmp(get_post_type(), 'classificado'))) get_template_part('template-part', 'postmeta'); ?>

                <h2 class="page-header"><?php the_title(); ?></h2>
                <div <?php post_class('post'); ?> >


                    <?php /*if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                    <div class="clear"></div>
                <?php endif; */
                    ?>
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>

                    <?php //comments_template(); ?>

                    <?php if ((strcmp(get_post_type(), 'classificado'))) echo('</div>'); ?>
                </div>
            <?php
            // list of posts
            else : ?>

                <?php echo ($i == 0) ? '<h2>Últimos Avisos<i class="icon-angle-double-right"></i></h2>' : '';
                $i++ ?>

                <div <?php post_class('post-index'); ?> class="bs-callout bs-callout-info">

                    <?php get_template_part('template-part', 'postmeta'); ?>
                    <h3 class="page-header">
                        <a href="<?php the_permalink(); ?>"
                           title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                           rel="bookmark"><?php the_title(); ?></a>
                    </h3>

                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(array(150, 150)); ?>

                    <?php endif; ?>
                    <?php the_content(); ?>
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

            <?php  endif; ?>

        <?php endwhile; ?>
            <div class="navigation">


                <?php posts_nav_link(); ?>
            </div>



        <?php else: ?>

            <?php get_404_template(); ?>

        <?php endif; ?>


    </div>

    <?php //get the right sidebar ?>
    <?php get_sidebar('right'); ?>


</div>

<!-- CLASSIFICADOS -->
<div id="plugin-classificados">
    <h2>Classificados<i class="icon-angle-double-right yellow"></i> <span><a href="#">Veja todos</a></span></h2>

    <?php
    $query = new WP_Query(array('post_type' => 'classificado', 'orderby' => 'rand', 'posts_per_page' => 5));
    $i = 0;
    while ($query->have_posts()) :
        $query->the_post();
        $i++;
        ?>

        <div class="col-md-5ths border-right <?php echo(($i == 5) ? 'no-border' : ''); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <div class="img-classificado">
                    <a href="<?php the_permalink(); ?>"
                       title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                       rel="bookmark">
                        <?php the_post_thumbnail(array(120, 120)); ?>
                    </a>
                </div>

            <?php endif; ?>
            <h5><a href="<?php the_permalink(); ?>"
                   title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'devdmbootstrap3'), the_title_attribute('echo=0'))); ?>"
                   rel="bookmark"><?php the_title(); ?></a>
            </h5>
        </div>

        <?php wp_reset_postdata(); ?>
    <?php endwhile; ?>

    <div class="clear"></div>
</div>


<!-- FIM CLASSIFICADOS -->

</div><!-- end row -->
<!-- end content container -->


<?php /*
<!-- Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Nova Intranet!</h4>
            </div>
            <div class="modal-body">
                <img src="http://intranet/wp-content/uploads/2015/02/nova-intra1.png" alt="" class="img-responsive "/>

            </div>

        </div>
    </div>
</div>
<script type="text/javascript">

    jQuery(document).ready(function(){
        jQuery('#myModal').modal('show');
    });
</script>
*/ ?>

<?php get_footer(); ?>
