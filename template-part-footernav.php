<?php if (has_nav_menu('footer_menu')) : ?>

    <div class="footer">
        <div class="red-bar"></div><div class="yellow-bar"></div><div class="blue-bar"></div>
        <div class="container ">
            <div class="footer-logo col-md-3 row">
                <h2><?php bloginfo('name'); ?></h2>
                <h3>Câmara Municipal</h3>
            </div>

            <div class="dmbs-footer-menu col-md-9">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="container row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-2-collapse">
                                <span class="sr-only"><?php _e('Toggle navigation', 'devdmbootstrap3'); ?></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <?php
                        wp_nav_menu(array(
                                'theme_location' => 'footer_menu',
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse navbar-2-collapse',
                                'menu_class' => 'nav navbar-nav',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker())
                        );
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<?php endif; ?>