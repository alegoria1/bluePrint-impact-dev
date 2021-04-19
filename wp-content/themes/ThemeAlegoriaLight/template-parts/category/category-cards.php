<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage alegoriatheme
 * @since Alegoria Theme 0.0.1
 */
get_header();
//get_template_part('template-parts/subheader/subheader', 'cat');
?>
<div class="position-relative d-block d-md-flex align-items-center mh-60 overflow-hidden p-3 p-md-5 m-0 text-center text-md-left bg-gradient-light">
    <div class="col-md-6 p-lg-5 my-5">
        <h1 class="display-4 font-weight-bold mt-2 mt-md-4 wow animate__animated animate__bounceInLeft">Blog</h1>
        <!-- <p class="lead font-weight-normal wow animate__animated animate__slideInUp">blueprint IMPACT existe pour vous aider à rep(a)nser votre activité autour de la réconciliation du triptyque de l’économique, du social et de l’environnemental. </p>
        <a class="btn btn-secondary hover-filled-slide-right mb-2 mb-md-4 wow animate__animated animate__slideInUp" href="#">En savoir plus</a> -->
    </div>
    <div class="img-hand-2 d-none d-md-block wow animate__animated animate__fadeInRightBig">
        <img src="<?php echo get_template_directory_uri();  ?>/assets/img/blog.png" alt="" class="shadow-none">
    </div>
</div>
<div class="container-fluid" style="max-width:1400px;">
    <div class="row">
        <div class=<?php echo is_active_sidebar('sidebar-category') ? 'col-md-8' : '' ?>>
            <div class="container p-3 mt-1 mt-md-3">
                <div class="row">
                    <?php if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                    ?>
                            <div class="col-12 col-md-4">
                                <div class="card border-0">
                                    <div class="overlay overflow-hidden" style="max-height:240px">
                                        <a href="<?php echo the_permalink() ?>">
                                            <img class="card-img-top" src="<?php the_post_thumbnail_url()  ?>" alt="Card image cap">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        // $catName = get_the_category();
                                        // var_dump($catName); 
                                        // echo $catName->cat_name;
                                        //echo get_the_category()["cat_name"]; 

                                        ?>
                                        <a href="<?php echo the_permalink() ?>">
                                            <h4 class="card-title"><strong><?php the_title(); ?></strong></h4>
                                        </a>
                                        <div class="pt-1 pb-2">
                                            <span class="small text-grey pr-3"><?php the_time('d/m/Y'); ?></span><span class="small text-grey text-uppercase">BY <?php the_author(); ?></span>
                                        </div>
                                        <article class="card-text text-justify" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
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