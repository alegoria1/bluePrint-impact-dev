<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar z-depth-0">
    <div class="container-fluid d-flex justify-content-center flex-column">
        <div class="row">
            <div class="col-6 col-md-12">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-12">
                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse inherit-collapse mt-5',
                    'container_id'      => 'navbarSupportedContent',
                    'menu_class'        => 'nav navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>
        </div>




    </div>
</nav>
<!-- Navbar -->