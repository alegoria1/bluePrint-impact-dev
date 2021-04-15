<?php /* Template Name: Contact Page */
get_header();
?>
<div class="container mt-5 pt-3 pb-3">
    <div class="row d-flex align-items-center">
        <div class="col-12 col-md-6">
            <img src="<?php echo get_template_directory_uri();  ?>/assets/img/IMG_Contact.jpg" alt="" class="shadow-none img-fluid">
        </div>
        <div class="col-12 col-md-6">
            <p>
                Une question ? <br>
                Une problématique précise à partager ? <br>
                Envie d’en savoir davantage sur notre offre ? <br>
                Intéressé.e par notre catalogue de formation ? <br>
                Ou juste curieux d’un premier échange pour y voir plus clair sur la manière dont vous pouvez avancer sur votre stratégie d’impact ? <br>
                Contactez-nous. <br>
                Sophie Laxenaire <br>
                sophie@blueprint-impact.Fr <br>
                <a href="https://www.linkedin.com/in/sophielaxenaire/" target="_blank"><img src="<?php echo get_template_directory_uri();  ?>/assets/img/ln.png" alt="linkedIN" style="width: 20px; height: 20px;"></a>
            </p>
        </div>
    </div>
    <div class="row d-flex align-items-center justify-content-center mt-5">
        <div class="col-12 col-md-6"><?php echo do_shortcode( '[contact-form-7 id="47" title="Contact form 1"]' ); ?></div>
    </div>
</div>
<?php get_footer(); ?>