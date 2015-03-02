<?php global $dm_settings; ?>
<div id="header">


    <div class="container dmbs-container">

        <?php if ($dm_settings['show_header'] != 0) : ?>

            <div class="row dmbs-header">

                <?php if (get_header_image() != '' || get_header_textcolor() != 'blank') : ?>

                <?php /* if (get_header_image() != '') : ?>
                    <div class="col-md-2 dmbs-header-img text-center">
                        <!--<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>"
                                                                             height="<?php echo get_custom_header()->height; ?>"
                                                                             width="<?php echo get_custom_header()->width; ?>"
                                                                             alt=""/></a>-->
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/brasao.png"

                                alt=""/></a>
                    </div>
                <?php endif;  */?>

                <div class="col-md-8 dmbs-header-text">

                    <a href="<?php echo esc_url(home_url('/')); ?>"><img
                            src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/brasao.png"

                            alt="" class="logo-brasao"/></a>

                    <?php if (get_header_textcolor() != 'blank') : ?>
                        <h1><a class="custom-header-text-color"
                               href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <h4 class="custom-header-text-color"><?php bloginfo('description'); ?></h4>
                    <?php endif; ?>
                    <?php else : ?>
                        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <h4><?php bloginfo('description'); ?></h4>
                    <?php
                    endif;
                    ?>




                </div>
                <div class="col-md-4 ">
                    <div class="widget widget-search-top">
                        <form role="search" method="get" id="searchform" class="searchform"
                              action="<?php echo home_url('/'); ?>">
                            <div  class="input-group">


                                <!--<span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span> -->
                                <input type="search" class="form-control" class="search-field" name="s" id="s"
                                       placeholder="<?php echo esc_attr_x('Pesquisar na Intranet ...', 'placeholder') ?>"
                                        name="s"
                                       title="<?php echo esc_attr_x('Search for:', 'label') ?>"/>
                                    <span class="input-group-btn">
                                            <button class="btn btn-default"  type="submit" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Pesquisar</button>
                                          </span>

                                <!--<input type="submit" id="searchsubmit" value="Pesquisar"> -->
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        <?php endif; ?>
    </div>
</div>

