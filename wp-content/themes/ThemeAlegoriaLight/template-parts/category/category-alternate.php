<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage alegoriatheme
 * @since Alegoria Theme 0.0.1
 */
get_header();
get_template_part('template-parts/subheader/subheader', 'cat');
?>

<div class="container">
    <div class="row">
        <h1 class="text-uppercase"><?php wp_title(); ?></h1>
        <div class=<?php echo is_active_sidebar('sidebar-category') ? 'col-md-8' : '' ?>>
            <div class="container">
                <div class="row">
                    <?php if (have_posts()) {
                        $i = 0;
                        while (have_posts()) {
                            the_post();
                            if ($i % 2 === 0) {
                    ?>
                                <!-- Grid row -->
                                <div class="row">

                                    <!-- Grid column -->
                                    <div class="col-lg-5">

                                        <!-- Featured image -->
                                        <a href="<?php echo the_permalink() ?>">
                                            <div class="overlay rounded z-depth-2 mb-lg-0 mb-4">
                                                <img class="img-fluid" src="<?php the_post_thumbnail_url()  ?>" alt="Sample image">
                                                <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>

                                </div>
                                <!-- Grid column -->
                                <div class="col-lg-7">

                                    <!-- Post title -->
                                    <a href="<?php echo the_permalink() ?>">
                                        <h3 class="font-weight-bold mb-3"><strong><?php the_title(); ?></strong></h3>
                                    </a>
                                    <!-- Excerpt -->
                                    <article class="card-text" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
                                        <?php the_excerpt(); ?>
                                    </article>
                                    <!-- Read more button -->
                                    <a href="<?php echo the_permalink() ?>" class="btn btn-primary">Voir plus</a>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->

                </div>
                <!-- Grid row -->
            <?php

                            } else {
            ?>
                <!-- Grid row -->
                <div class="row">

                    <div class="col-lg-7">

                        <!-- Post title -->
                        <a href="<?php echo the_permalink() ?>">
                            <h3 class="font-weight-bold mb-3"><strong><?php the_title(); ?></strong></h3>
                        </a>
                        <!-- Excerpt -->
                        <article class="card-text" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
                            <?php the_excerpt(); ?>
                        </article>
                        <!-- Read more button -->
                        <a href="<?php echo the_permalink() ?>" class="btn btn-primary">Voir plus</a>

                    </div>

                    <!-- Grid column -->
                    <div class="col-lg-5">

                        <!-- Featured image -->
                        <a href="<?php echo the_permalink() ?>">
                            <div class="overlay rounded z-depth-2 mb-lg-0 mb-4">
                                <img class="img-fluid" src="<?php the_post_thumbnail_url()  ?>" alt="Sample image">
                                <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->

            </div>
            <!-- Grid row -->
        <?php

                            }
                            $i++;
        ?>

<?php
                        }
                    } ?>


        </div>
    </div>



</div>
<?php if (is_active_sidebar('sidebar-category')) {
?>
    <div class="col-md-4 d-none d-md-block">
        <?php dynamic_sidebar('sidebar-category'); ?>
    </div>
<?php
} ?>

</div>

</div>

<!-- Pagination start -->
<?php alegoriatheme_the_pagination(); ?>
<!-- Pagination END -->

<?php get_footer(); ?>