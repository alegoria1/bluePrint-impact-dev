<?php /* Template Name: default Page */
get_header();
// get_template_part('template-parts/subheader/subheader');
?>
<div class="container pt-3 pb-3">
    <div class="row">
        <div class=<?php echo is_active_sidebar('sidebar-default') ? 'col-md-8' : '' ?>>
            <?php
            

            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                    <div class="entry">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
            <?php }
            } else {
            } ?>
        </div>
        <?php if (is_active_sidebar('sidebar-default')) {
        ?>
            <div class="col-md-4 d-none d-md-block">
                <?php dynamic_sidebar('sidebar-default'); ?>
            </div>
        <?php
        } ?>
    </div>

</div>
<?php get_footer(); ?>