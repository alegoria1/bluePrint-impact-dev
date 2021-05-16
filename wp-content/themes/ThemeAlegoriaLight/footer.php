<footer class="blog-footer">
    <section class="container-fluid p-5">
        <h4 class="text-center pb-3">Témoignages</h4>
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="media">
                    <i class="fas fa-quote-left fa-2x p-3"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Laurent – Consultant RH</h5>
                        <p class="text-justify text-italic">Sophie a partagé avec passion et enthousiasme ses connaissances sur la RSE, ce qui donne envie de faire bouger les choses dans mon entreprise. Les clefs abordées et les cas concrets m’ont permis d’avoir une vision globale de cette thématique et de passer à l’action dans l’entreprise pour laquelle je travaille.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="media">
                    <i class="fas fa-quote-left fa-2x p-3"></i>
                    <div class="media-body">
                        <h5 class="mt-0">Valérie – Directrice de la communication</h5>
                        <p class="text-justify text-italic">J’ai eu la chance d’assister à une présentation des fondamentaux de la RSE par Sophie Laxenaire. Une formation pragmatique et inspirante, ponctuée d’exemples concrets, stories et cas pratiques, qui m’a permis d’approfondir mes connaissances sur cette thématique clé pour les entreprises et le monde d’aujourd’hui, et a renforcé mon envie de faire bouger les lignes.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
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
            <div class="col-12 col-md-3">
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
                <div class="col-12 col-md-3">
                    <img src="<?= get_theme_mod('logo_settings'); ?>" class="img-fluid" />
                </div>
                <div class="col-12 col-md-3">
                    <h3 class="pb-3">Contact</h3>
                    <p>
                        Sophie Laxenaire<br>
                        <a href="mailto:sophie@blueprint-impact.fr">sophie@blueprint-impact.fr</a>
                    </p>
                    <p><i class="fab fa-linkedin-in"></i></p>
                </div>
                <div class="col-12 col-md-3">
                    <h3 class="pb-3">Plan du site</h3>
                    <div class="footer-menu-list">
                        <?php wp_nav_menu([
                            'theme_location'    => 'primary',
                            'container'         => false,
                            'menu_class'        => 'nav flex-column'
                        ]) ?>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <a href="https://ecoindex.fr" target="_blank"> <img src="<?php echo get_template_directory_uri();  ?>/assets/img/ecoindex.svg" class="d-block mx-auto" style="max-width:45px;"></a>
                    <p class="text-center small font-italic mt-2">EcoIndex : Résultat de la performance environnementale</p>
                </div>
            </div>
        </div>

    </section>
    <section class="container-fluid bg-tertiary text-white">
        <div class="row text-center border-top border-white p-3">
            <div class="col-12">
                © blueprint IMPACT 2021 - <a href="#" class="text-white" data-toggle="modal" data-target="#Modal-Mentions-legales">Mentions légales</a>
            </div>
        </div>
    </section>
</footer>
<!-- Modal -->
<div class="modal fade" id="Modal-Mentions-legales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Mentions légales</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-center mt-2 mb-4">Descriptif & objectifs de la formation</h5>
                            <p class="text-center text-md-left">
                                Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez, sans réserve, les présentes modalités.
                            </p>
                            <p class="text-center text-md-left">
                                Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet www.blueprint-impact.fr sont :
                            </p>
                            <h5 class="text-center mt-2 mb-4">Éditeur du Site :</h5>
                            <p class="text-center text-md-left"> SASU blueprint IMPACT Numéro de SIRET : 889 994 463 000 12 <br>
                                Présidente : Sophie Laxenaire <br>
                                47, allée des Ormes 94170 Le Perreux sur Marne <br>
                                Email : sophie@blueprint-impact.fr <br>
                                Site Web : www.blueprint-impact.fr</p>

                            <h5 class="text-center mt-2 mb-4">Hébergement :</h5>
                            <p class="text-center text-md-left"> Hébergeur : IONOS by 1&1 <br>
                                7, place de la Gare, BP 70109, 57200 Sarreguemines Cedex <br>
                                Site Web : www.ionos.fr</p>

                            <h5 class="text-center mt-2 mb-4">Développement :</h5>
                            <p class="text-center text-md-left"> SAS Studio Alegoria <br>
                                Adresse : 24, rue Gambetta – Bureau 3 – 31000 Toulouse <br>
                                Site Web : www.alegoria.fr</p>

                            <h5 class="text-center mt-2 mb-4">Conditions d’utilisation :</h5>
                            <p class="text-center text-md-left"> Ce site (www.blueprint-impact.fr) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable. <br>
                                Nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc… <br>
                                blueprint IMPACT met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. <br>
                                Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations auprès de blueprint IMPACT, et signaler toutes modifications du site qu’il jugerait utile. blueprint IMPACT n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.</p>

                            <h5 class="text-center mt-2 mb-4">Cookies : </h5>
                            <p class="text-center text-md-left"> Le site www.blueprint-impact.fr peut être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d’affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez.</p>

                            <p class="text-center text-md-left"> Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations. Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.</p>

                            <h5 class="text-center mt-2 mb-4">Liens hypertextes : </h5>
                            <p class="text-center text-md-left"> Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. blueprint IMPACT ne dispose d’aucun moyen pour contrôler les sites en connexion avec ses sites internet.</p>

                            <p class="text-center text-md-left"> blueprint IMPACT ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation.</p>

                            <p class="text-center text-md-left"> Les utilisateurs, les abonnés et les visiteurs des sites internet ne peuvent pas mettre en place un hyperlien en direction de ce site sans l’autorisation expresse et préalable de blueprint IMPACT.</p>

                            <p class="text-center text-md-left"> Dans l’hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de blueprint IMPACT, il lui appartiendra d’adresser un email accessible sur le site afin de formuler sa demande de mise en place d’un hyperlien.</p>

                            <p class="text-center text-md-left"> blueprint IMPACT se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.</p>

                            <h5 class="text-center mt-2 mb-4">Services fournis :</h5>

                            <p class="text-center text-md-left"> L’ensemble des activités de la société ainsi que ses informations sont présentés sur notre site www.blueprint-impact.fr.</p>

                            <p class="text-center text-md-left"> blueprint IMPACT s’efforce de fournir sur le site www.blueprint-impact.fr des informations aussi précises que possible. Les renseignements figurant sur le site www.blueprint-impact.fr ne sont pas exhaustifs et les photos non contractuelles.</p>

                            <p class="text-center text-md-left"> Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, toutes les informations indiquées sur le site www.blueprint-impact.fr sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.</p>

                            <h5 class="text-center mt-2 mb-4">Limitations contractuelles sur les données :</h5>

                            Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions.</p>

                            <p class="text-center text-md-left">Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par courriel, à l’adresse contact@blueprint-impact.fr, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).</p>

                            <p class="text-center text-md-left">Tout contenu téléchargé se fait aux risques et périls de l’utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d’un quelconque dommage subi par l’ordinateur de l’utilisateur ou d’une quelconque perte de données consécutives au téléchargement.</p>

                            <p class="text-center text-md-left">De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.</p>

                            Les liens hypertextes mis en place dans le cadre du présent site internet en direction d’autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de blueprint IMPACT.</p>

                            <h5 class="text-center mt-2 mb-4">Propriété intellectuelle :</h5>

                            <p class="text-center text-md-left">Tout le contenu du présent site www.blueprint-impact.fr, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.</p>

                            <p class="text-center text-md-left">Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l’accord exprès par écrit de blueprint IMPACT. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.</p>

                            <h5 class="text-center mt-2 mb-4">Déclaration à la CNIL :</h5>

                            <p class="text-center text-md-left">Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l’égard des traitements de données à caractère personnel) relative à l’informatique, aux fichiers et aux libertés, ce site a fait l’objet d’une déclaration 1656629 auprès de la Commission nationale de l’informatique et des libertés (www.cnil.fr).</p>

                            <h5 class="text-center mt-2 mb-4">Litiges :</h5>

                            <p class="text-center text-md-left">Les présentes conditions du site www.blueprint-impact.fr sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l’interprétation ou de l’exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société. La langue de référence, pour le règlement de contentieux éventuels, est le français.</p>

                            <h5 class="text-center mt-2 mb-4">Données personnelles :</h5>

                            <p class="text-center text-md-left">De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet www.blueprint-impact.fr.</p>

                            <p class="text-center text-md-left">Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ».</p>

                            <p class="text-center text-md-left">Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur notre société, ou de recevoir les lettres d’information.</p>

                            <p class="text-center text-md-left">Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d’accès.</p>

                            <p class="text-center text-md-left">De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
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