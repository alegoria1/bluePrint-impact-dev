<footer class="blog-footer">
    <section class="container-fluid p-5">
        <h4 class="text-center pb-3">Témoignages</h4>
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="media">
                    <i class="fas fa-quote-left fa-2x p-3"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Laurent – Consultant RH</h5>
                        <p class="text-justify text-italic">Sophie a partagé avec passion et enthousiasme ses connaissances sur la RSE, ce qui donne envie de faire bouger les choses dans mon entreprise. Les clefs abordées et les cas concrets m’ont permis d’avoir une vision globale de cette thématique et de passer à l’action dans l’entreprise pour laquelle je travaille.</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="media">
                    <i class="fas fa-quote-left fa-2x p-3"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Valérie – Directrice de la communication</h5>
                        <p class="text-justify text-italic">J’ai eu la chance d’assister à une présentation des fondamentaux de la RSE par Sophie Laxenaire. Une formation pragmatique et inspirante, ponctuée d’exemples concrets, stories et cas pratiques, qui m’a permis d’approfondir mes connaissances sur cette thématique clé pour les entreprises et le monde d’aujourd’hui, et a renforcé mon envie de faire bouger les lignes.</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="media">
                    <i class="fas fa-quote-left fa-2x p-3"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Flavie – Directrice achats et approvisionnements</h5>
                        <p class="text-justify text-italic">J’ai eu la chance d’assister à un pilote de la formation « Les fondamentaux de la RSE ». Sophie nous captive littéralement par sa maîtrise des sujets portée par son enthousiasme naturel et ses talents de communicante. C’est très documenté et très professionnel. Tout y était : les enjeux, l’histoire du développement durable, les bases du lancement d’une démarche RSE, le cadre normatif ; et ce qui m’a particulièrement intéressée ; les exemples concrets et les bonnes pratiques des marques qui ont déjà enclenché des actions durables en pariant sur l’innovation et la créativité. <br>
                            Sophie a toutes les connaissances et les outils pour vulgariser la RSE auprès des différents publics de l’entreprise et aider les directions et les opérationnels à enclencher leur propre démarche. <br>
                            En 2020, on ne reporte plus, on passe à l’action !</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="media">
                    <i class="fas fa-quote-left fa-2x p-3"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Caroline – Responsable Ressources Humaines</h5>
                        <p class="text-justify text-italic">Cette formation aux fondamentaux de la RSE était très réussie. Outre le fait que c’était un moment très appréciable de rencontre et de partage autour des pratiques de chacun(e), elle m’a permis de me conforter dans l’idée que la RSE devait être un projet à part entière, porté au plus haut niveau dans l’entreprise et que nous ne pouvions plus faire sans aujourd’hui.</p>
                        <p class="text-justify text-italic">Cette formation m’a également permis d’avoir les idées plus claires sur le cadre réglementaire, les référentiels et les étapes clés de la démarche afin d’orienter au mieux les actions que nous pourrions mettre en œuvre au niveau RH/</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid p-5 bg-tertiary text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="<?= get_theme_mod('logo_settings'); ?>" class="img-fluid"/>
                </div>
                <div class="col-6 col-md-4">
                    <h3 class="pb-3">Contact</h3>
                    <p>
                        Sophie Laxenaire<br>
                        <a href="mailto:sophie@blueprint-impact.fr">sophie@blueprint-impact.fr</a>
                    </p>
                    <p><i class="fab fa-linkedin-in"></i></p>
                </div>
                <div class="col-6 col-md-4">
                    <h3 class="pb-3">Plan du site</h3>
                    <div class="footer-menu-list">
                        <?php wp_nav_menu([
                            'theme_location'    => 'primary',
                            'container'         => false,
                            'menu_class'        => 'nav flex-column'
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="container-fluid bg-tertiary text-white">
        <div class="row text-center border-top border-white p-3">
            <div class="col-12">
                © blueprint IMPACT 2021
            </div>
        </div>
    </section>
</footer>
<script type="text/javascript">
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
        callback: function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null, // optional scroll container selector, otherwise use window,
        resetAnimation: true, // reset animation on end (default is true)
    });
    wow.init();
</script>


<?php wp_footer(); ?>
</body>

</html>