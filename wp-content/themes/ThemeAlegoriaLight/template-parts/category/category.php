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
                        while (have_posts()) {
                            the_post();
                    ?>
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="overlay">
                                        <a href="<?php echo the_permalink() ?>">
                                            <img class="card-img-top" src="<?php the_post_thumbnail_url()  ?>" alt="Card image cap">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <a href="<?php echo the_permalink() ?>">
                                            <h4 class="card-title"><strong><?php the_title(); ?></strong></h4>
                                        </a>
                                        <article class="card-text" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
                                            <?php the_excerpt(); ?>
                                        </article>
                                        <a href="<?php echo the_permalink() ?>" class="btn btn-primary">Voir plus</a>

                                    </div>

                                </div>
                            </div>
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

<?php get_footer(); ?>