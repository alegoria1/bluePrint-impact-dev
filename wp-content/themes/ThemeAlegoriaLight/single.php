<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage alegoriatheme
 * @since Alegoria Theme 0.0.1
 */
get_header();
get_template_part('template-parts/subheader/subheader');
?>

<div class="container">
    <h1 class="text-uppercase animated zoomInDown"><?php wp_title(); ?></h1>
    <div class="row">
        <div class=<?php echo is_active_sidebar('sidebar-article') ? 'col-md-8' : '' ?>>
            <div class="entry">
                <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/post/content', get_post_format());
                    if (comments_open() || get_comments_number()) {
                        comments_template();
                    }
                }
                ?>
            </div>
        </div>
        <?php if (is_active_sidebar('sidebar-article')) {
        ?>
            <div class="col-md-4 d-none d-md-block">
                <?php dynamic_sidebar('sidebar-article'); ?>
            </div>
        <?php
        } ?>
    </div>
</div><!-- .content-area -->

<?php get_footer(); ?>