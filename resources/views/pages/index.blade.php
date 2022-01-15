<x-header/>
<x-navbar/>

<body data-spy="scroll" data-target="#navbar-example">
    {{-- <div id="preloader"> </div> --}}
    
    
    <div id="home" class="slider-area" style="margin-top: 60px;">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="{{ asset('img/slider/slide1.jpg') }}" alt="programmation" title="#slider-direction-1" />
                <img src="{{ asset('img/slider/slide2.jpg') }}" alt="web" title="#slider-direction-2" />
                <img src="{{ asset('img/slider/slide3.jpg') }}" alt="technologies" title="#slider-direction-3" />
                <img src="{{ asset('img/slider/2.jpeg') }}" alt="technologies" title="#slider-direction-3" />
                <img src="{{ asset('img/slider/1.jpeg') }}" alt="technologies" title="#slider-direction-3" />
            </div>
        </div>
    </div>

    <div class="container">
        <div class=" area-padding">
            <div class="row">
                <div class="col-sm-8">
                    <p style="" class="para">Travaillons ensemble pour la digitalisation de vos services</p>
    
                    <p style="text-align: justify">
                        <strong>{{ config('app.name') }}</strong> est une entreprise congolaise qui œuvre dans le secteur du numérique et de la gestion
                        d’entreprise. Grâce à notre gamme de services adaptée, nous accompagnons nos clients dans leur
                        transformation digitale et dans la gestion efficiente de leurs activités. Notre équipe, jeune,
                        passionnée et professionnelle saura vous guider vers la réussite de tous vos projets. Du porteur de
                        projet, en passant par les start-ups et les PME jusqu’aux grands groupes, nous mettons un point
                        d’honneur à satisfaire tous nos clients en leur apportant notre expertise et notre dynamisme.
                    </p>
                </div>
    
                <div class="col-sm-4">
                    <div class="" align='center'>
                        <img src="{{ asset('img/logotype.png') }}" width="300" style="border-radius: 30px 30px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ asset('img/orientee_resultats-1.webp') }}" width="350" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="text-center section-headline">
                        <h2 style="text-transform: uppercase;font-size: 30px;color: #E84A20">
                            Drumnet Innov est une entreprise
                            digitale orientée résultats
                        </h2>
                    </div>
                    <p style="text-align: justify">
                        Votre satisfaction, c'est ce qui nous porte le plus. Raison pour laquelle nous mettons à disposition
                        notre professionnalisme pour vous donner des résultats dont vous méritez. <br>
    
                        Nous nous donnons pour mission première de concevoir des solutions numériques adaptées
                        aux besoins et aux réalités de nos clients et de leur fournir des services adéquats afin de les aider à se
                        développer et ainsi pérenniser leurs activités.
    
                        Ainsi <strong class="text-uppercase">DrumNet Innov</strong> place l’innovation au centre de sa vision et fait recours à des technologies
                        nouvelles ou jusqu’alors moins connues afin de vous fournir la meilleure expérience possible et
                        garantir votre satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <br>
<br>
<div id="services" class="area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="text-center section-headline">
                    <h2 style="text-transform: uppercase;font-size: 30px;color: #E84A20">
                        nos expertises
                    </h2>
                    <p>
                        <strong>
                            Nous utilisons nos compétences spécialisées
                            pour créer des « success stories »
                        </strong>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4" id="dev">
                <div align="center">
                    <img src="{{ asset('img/dev_web.svg') }}" width="200" alt="">
                </div>
                <p style="" class="para">Création sites web</p>

                <p class="text-justify">
                    Concevoir un site "tout court" est quasiment devenu un jeu d'enfant.
                    Ce qui ne l'est pas, c'est développer un site web (ou une app) techniquement
                    au point, original, élégant et intuitif qui peut convertir vos
                    visiteurs/utilisateurs en clients ou adeptes. Et c'est là, exactement là,
                    que DRUMNET INNOV intervient...
                </p>

                <div align="center">
                    <button id="sho_dev_web" class="btn btn-info">Plus de détails</button>
                    <button id="hide_dev_web" class="btn btn-default">Fermer les détails <span class="fa fa-chevron-down"></span></button>
                </div>

            </div>

            <div class="col-sm-4" id="com">
                <div align="center">
                    <img src="{{ asset('img/strategie_com.webp') }}" width="270" alt="">
                </div>
                <p style="" class="para">Communication Digitale</p>

                <p class="text-justify">
                    Le digital crée d'incroyables opportunités. Nous vous aidons à en
                    tirer le meilleur parti possible en planifiant les actions que vous devez
                    déployer via différents canaux afin d'atteindre vos objectifs. Pour ce
                    faire, nous analysons votre plan de communication et élaborons votre stratégie de communication.
                </p>

                <div align="center">
                    <a href="#myModal" data-toggle="modal" data-target="#myModal" class="btn btn-info">Plus de détails</a>
                </div>

            </div>

            <div class="col-sm-4" id="management">
                <div align="center">
                    <img src="{{ asset('img/confiez-nous_confiez_nous_votre_projet.webp') }}" width="172" alt="">
                </div>
                <p style="" class="para">Management d'entreprise</p>

                <p class="text-justify">
                    Vous êtes nombreurx à avoir des idées de création d'entreprises et peut-être nombreux
                    à avoir déjà lancé un business.
                    Vous ne savez pas par où commencer ou ne savez pas les bonnes stratégies à mettre
                    en place pour la gestion de votre trésorerie et de votre entreprise ? Avec aissance nous
                    vous conseillons.
                </p>

                <div align="center">
                    <button id="show_manager" class="btn btn-info">Plus de détails</button>
                    <button id="hide_manager" class="btn btn-default">Fermer les détails
                        <span class="fa fa-chevron-down"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="dev_web">
    <div class="panel panel-info">
        <div class="panel-heading" style="background-color: #00000A;color: #FFFFFF">
            <div class="panel-title">
                Pourquoi avoir votre propre site web ou votre propre application ?
            </div>
        </div>

        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{ asset('img/da2i.jpg') }}" alt="">
                    </div>

                    <div class="col-sm-9">

                        <p style="" class="para">Développement de la visibilité sur la toîle</p>

                        <div class="single-well">
                            <p>
                                De nos jours, il est primordial de posséder un site web.
                                Que ce soit simplement pour que les gens puissent communiquer avec vous, mais aussi pour agrandir votre
                                clientèle, le web est le meilleur outil pour atteindre vos objectifs, missions, rêves, etc.
                                Contrairement aux autres médias,le web est accessible partout et en tout temps à  travers le monde.
                            </p>
                            <ul>
                                <li>
                                    <i class="fa fa-check"></i>  Votre site est une source d'infos illimitée et précise pour vos clients
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Votre site web augmente votre crédibilité et votre visibilité. Il n'est donc pas une dépense
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Votre site reflète une image d'entreprise prof et vous démarque de la concurrence
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Votre site n'est pas une dépense, mais un invetissement
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Votre site est un bon outil marketing pour votre entreprise
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <p>
                        Un site web peut être efficace si on sait bien en tirer profit. De plus en plus
                        de consommateurs utilisent internet (principalement Google search) pour trouver des produits et des services. Un site
                        web peut agir à la fois comme une plateforme pour attirer des nouveaux clients qui naviguent
                        sur la toile que comme une plateforme qui aide à  convertir en clients des gens qui magasinent
                        et hésitent à  vous choisir. Avec un bon plan marketing, votre site peut devenir un véritable aimant attirant.
                    </p>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <a href="{{ route('siteVitrine') }}" class="btn btn-info form-control">Qu'est-ce qu'un site vitrine ?</a>
                        <hr>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <a href="{{ route('blog') }}" class="btn btn-info form-control">Qu'est-ce qu'un site blog ?</a> <hr>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <a href="e-commerce" class="btn btn-info form-control">Qu'est-ce qu'un site e-commerce ?</a> <hr>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-title">DrumNet Innov | Design et communication</div>
            </div>

            <div class="modal-body">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Tout sur notre service de communication</div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="{{ asset('img/reseaux_sociaux.webp') }}" alt="">
                            </div>

                            <div class="col-sm-9">
                                <p style="" class="para">Réseaux sociaux</p>
                                <p>
                                    Réussir grâce aux réseaux sociaux n'a rien de facile.
                                    Il ne suffit pas d'y être présent. DrumNet Innov vous aide à faire
                                    en sorte que cette présence soit génératrice d'opportunités en
                                    se servant du content marketing et du CRM comme leviers pour attirer
                                    vos cibles et les convaincre que vous êtes le meilleur.
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="{{ asset('img/contenu.webp') }}" alt="">
                            </div>
                            <div class="col-sm-9">
                                <p style="" class="para">Contenus</p>
                                <p>
                                    Nous donnons vie à votre stratégie d'inbound marketing,
                                    qu'elle ait été élaborée par nous ou non. DrumNet Innov allie sa
                                    créativité et son expertise technique afin de produire, pour
                                    vous, des contenus qui vous feront désirer. Vidéos, animations,
                                    textes, podcasts, infographies, e-books, webinaires... tout y passe !
                                </p>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-sm-3">
                                <img src="{{ asset('img/plan-de-travail.webp') }}" alt="">
                            </div>

                            <div class="col-sm-9">
                                <p style="" class="para">Publicité</p>
                                <p>
                                    C'est un secret de polichinelle : la publicité en ligne
                                    est plus efficiente que la publicité imprimée ou télévisée.
                                    Toutefois, pour favoriser cette rentabilité des ingrédients
                                    sont indispensables. DrumNet Innov les a tous ! Confiez-nous vos campagnes
                                    en ligne et nous y ajouterons des paillettes, sans vous
                                    ruiner.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="manager">
    <div class="panel panel-info">
        <div class="panel-heading" style="background-color: #00000A;color: #FFFFFF">
            <div class="panel-title">
                Management d'Entreprise & Gestion de Projet
            </div>
        </div>

        <div class="panel-body">
            <div class="container-fluid">
                <div class="">
                    
                    <div class="">
                        <div class="single-well">
                            <p>
                                Grâce à notre gamme de services adaptée, nous accompagnons nos clients dans la gestion efficiente
                                de leurs activités. Notre équipe, jeune,
                                passionnée et professionnelle saura vous guider vers la réussite de tous vos projets. Du porteur de
                                projet, en passant par les start-ups et les PME jusqu’aux grands groupes, nous mettons un point
                                d’honneur à satisfaire tous nos clients en leur apportant notre expertise et notre dynamisme.
                                <br>
                                <strong>Faites-nous confiance, nous analyserons les bases de création de votre futur entreprise.</strong>
                            </p>
                        </div>
                    </div>
                </div>
                
                <br>

                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('img/optimisation-2.png') }}" alt="">
                    </div>

                    <div class="col-sm-8">

                        <p style="" class="para">Conseil en stratégie et compétitivité</p>

                        <div class="single-well">
                            <p>
                                Nous vous aidons à aboutir à une stratégie en cohérence avec les moyens à disposition et
                                disposer d’un plan d’action utilisable et opérationnel afin de susciter l’adhésion et
                                l’appropriation par les acteurs de l’institution tout en tenant compte des évolutions du
                                contexte : réglementaire, fonctionnel, technologique et marché.
                            </p>

                            <ul>
                                <li>
                                    <i class="fa fa-check"></i>  Évaluation de l’existant, des besoins et des évolutions à mener
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> 
                                    Définition d’une stratégie pluriannuelle globale ou ciblée sur un aspect particulier (ex.: Administration)
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> 
                                    Définition d’une stratégie fonctionnelle, organisationnelle et technologique cohérente.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('img/conduite.png') }}" alt="">
                    </div>

                    <div class="col-sm-8">

                        <p style="" class="para">Conduite de projet</p>

                        <div class="single-well">
                            <strong>Piloter, Maîtriser, Évoluer, Susciter l’adhésion et évaluer !</strong>
                            <p>
                                Nous assurons la conduite de projets et le pilotage de la maîtrise d’œuvre afin d’en garantir
                                la qualité. Faites-vous accompagnez dans la mise en œuvre opérationnelle sur les plans
                                techniques et fonctionnels. Anticipez dès le début du projet, les évolutions possibles et
                                élaborez une stratégie de conduite du changement.
                            </p>

                            <ul>
                                <li>
                                    <i class="fa fa-check"></i>  Définition d’un périmètre clair d’intervention
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Mise en place d’outils de suivi de projet rigoureux et proportionnés
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Définition d’un calendrier réaliste et anticipation des tâches
                                </li>

                                <li>
                                    <i class="fa fa-check"></i> Implication de la maîtrise d’ouvrage.
                                </li>

                                <li>
                                    <i class="fa fa-check"></i> Cadrage et pilotage de la maîtrise d’œuvre
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('img/entreprenariat.jpg') }}" alt="">
                    </div>

                    <div class="col-sm-8">

                        <p style="" class="para">Assistance et conseils dans la création d’entreprise</p>

                        <div class="single-well">
                            <strong>Nous accompagnons les porteurs de projets de l’idée jusqu’à la création de leur entreprise</strong>

                            <ul>
                                <li>
                                    <i class="fa fa-check"></i>  Entretien, prise de connaissance et analyse du projet
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Collecte d’informations
                                </li>
                                <li>
                                    <i class="fa fa-check"></i> Etudes de faisabilité du projet
                                </li>

                                <li>
                                    <i class="fa fa-check"></i> Réalisation du Business Plan
                                </li>

                                <li>
                                    <i class="fa fa-check"></i> Conseil en recherche de financement
                                </li>

                                <li>
                                    <i class="fa fa-check"></i> Accompagnement dans les démarches de création
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="text-center section-headline">
                    <h2 style="text-transform: uppercase;font-size: 30px;color: #E84A20">
                        Votre réussite,
                        notre mission
                    </h2>
                </div>
                <p>
                    Contribuer à votre réussite nous tient réellement à coeur.
                    Nous n'existons que pour remplir cette mission. Que vous soyez
                    une organisation ou un particulier, il existe des possibilités
                    infinies pour faire du digital la clé de voûte de votre réussite et ...
                    tout part d'une idée. Chez DRUMNET INNOV, non seulement nous avons des idées novatrices à
                    foison ; nous disposons de tout ce qu'il faut pour les matérialiser. Ainsi, nous
                    convertissons nos idées en votre succès.
                </p>
            </div>

            <div class="col-sm-6">
                <img src="{{ asset('img/success.svg') }}" width="400" alt="">
            </div>
        </div>
    </div>
</div>

<div id="realisations" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center section-headline">
                    <h2 style="text-transform: uppercase;font-size: 30px;color: #E84A20">
                        la dématérialisation de vos services ...
                    </h2>

                    <h4>
                        <strong class='text-uppercase'>
                            ... comme vous ne l'avez jamais imaginé.
                        </strong>
                    </h4>
                </div>
            </div>
        </div>
        
        <br/>
        <br/>
        
        <div class='row'>
            <div class="col-sm-4">
                <p class='text-center '>
                    <strong class='text-uppercase strong' style=''>Réjoignez le digital</strong> <br> <br>
                    <img src="{{ asset('img/des-medias-sociaux.png') }}" width='200'/> 
                </p>

                <p class='text-justify'>
                    Les entreprises comme vous et organisations adoptent la digitalisation de leurs services
                    comme solution efficace pour répondre aux enjenx du 21<sup>e</sup> siècle. La digitalisation 
                    de votre business n'est donc pas une option mais un impératif.
                </p>
            </div>
            
            <div class="col-sm-4">
                <p class='text-center '>
                    <strong class='text-uppercase strong'>Le contexte sanitaire mondial</strong><br> <br>
                    <img src="{{ asset('img/covid-test.png ') }}" width='200'/>
                </p>

                <p class='text-justify'>
                    La crise COVID-19 nous montre que les structures digitalisées sont les plus agiles
                    pour maintenir une continuité de services et optimiser leur activité.
                </p>
            </div>
            
            <div class="col-sm-4">
                <p class='text-center '>
                    <strong class='text-uppercase strong'>L'identité numérique</strong><br> <br>
                    <img src="{{ asset('img/ux.png') }}" width='200'/>
                </p>

                <p class='text-justify'>
                    L'identité numérique c'est l'ensemble des traces que vous laissez dans l'espace web. Sa construction est souvent un échec 
                    faute d'une véritable expertise pour vous accompagner.
                </p>
            </div>
        </div>

        <br/>
        <br/>

        <div class='row'>
            <div class="col-sm-6">
                <p class='text-center '>
                    <strong class='text-uppercase strong' >expert métier</strong><br> <br>
                    <img src="{{ asset('img/experience.png') }}" width='200'/>
                </p>

                <p class='text-justify'>
                    Externalisez la gestion de la dématérialisation de votre entreprise à un expert du métier pour une 
                    meilleure transformation digitale de votre organisation...
                </p>
            </div>
            
            
            <div class="col-sm-6">
                <p class='text-center '>
                    <strong class='text-uppercase strong'>Sécurité des données</strong> <br> <br>
                    <img src="{{ asset('img/security.png') }}" width='200'/>
                </p>

                <p class='text-justify'>
                    Dans l'absolu, mal gérer son identité numérique peut être fatale à cause de plusieurs facteurs 
                    liés à sa sécurité des données et à son exploitation...
                </p>
            </div>
        </div>
    
    </div>
</div>

<div id="realisations" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="text-center section-headline">
                    <h2 style="text-transform: uppercase;font-size: 30px;color: #E84A20">
                        nos réalisations
                    </h2>

                    <p>
                        <strong>
                            Plusieurs entreprises de la place nous ont déjà fait confiance et nous sommes satisfaits d'être à la hauteur
                            de leurs besoins.
                        </strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" class="active" data-filter="*">Totalité</a>
                </li>
                <li>
                  <a href="#" data-filter=".Site">Site web</a>
                </li>
                <li>
                  <a href="#" data-filter=".Design">Design</a>
                </li>
                <li>
                  <a href="#" data-filter=".Management">Managemment</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
            

            <div class="awesome-project-content">
                
                {{-- <div class="col-md-4 col-sm-4 col-xs-12 ">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="" alt="drumnet innov" class="thumbnail"/></a>
                            <div class="text-center add-actions">
                                <div class="project-dec">
                                    <a class="" data-gall="myGallery" href="" target="_blank">
                                        <h4></h4>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
</div>

<div class="container text-center section-headline">
    <h2 style="text-transform: uppercase;font-size: 30px;color: #E84A20">
        Confiez-nous
        vos projets
    </h2>

    <p>
        <strong>
            Nous n’allons pas nous contenter de le réaliser. Nous allons en
            faire un motif de fierté, aussi bien pour vous que pour nous.
            <br>
            Nous agissons pour construire votre image et nous vous accompagnons
            dans la réussite de votre communication digitale.
        </strong>
    </p>
</div>

<br>
<div class="our-skill-area fix hidden-sm">
    <div class="test-overly"></div>
    <div class="skill-bg area-padding-2">
        <div class="container">
            <div class="row">
                <div class="skill-text">

                    <div class="text-center col-xs-12 col-sm-6 col-md-6">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <input type="text" class="knob" value="0" data-rel="12" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#005C94" data-thickness=".20" data-readonly="true" disabled>
                                <h3 class="progress-h4" style="font-family: Verdana">Articles de blog</h3>
                            </div>
                        </div>
                    </div>

                    <div class="text-center col-xs-12 col-sm-6 col-md-6">
                        <div class="single-skill">
                            <div class="progress-circular">
                                <input type="text" class="knob" value="0" data-rel="" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#005C94" data-thickness=".20" data-readonly="true" disabled>
                                <h3 class="progress-h4" style="font-family: Verdana">Réalisations</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<div class="container text-center section-headline about-area">
    <h2 style="text-transform: uppercase;font-size: 30px;color: #E84A20">
        Sur notre blog
    </h2> <br>

    <strong>
        Pour ne rien rater des évolutions du monde du marketing digital
        et mieux comprendre ce secteur, consultez nos insights et analyses
    </strong>
</div>

<br>
<br>
<div class="suscribe-area" style="background-color: #E84A20;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                <div class="text-center suscribe-text">
                    <h3>Découvrez plus d'articles pour booster votre carrière</h3>
                    <a class="sus-btn" href="">Lire ici</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>

<div class="container text-center section-headline">
    <h2 style="text-transform: uppercase;font-size: 30px;color: #E84A20">
        Nos clients sont satisfaits
    </h2>
    <p>
        <strong>
            Ils témoignent notre savoir faire et notre politique orientée résultats.
        </strong>
    </p>
</div>

<div class="testimonials-area">
    <div class="testi-inner area-padding">
        <div class="testi-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center testimonial-content">
                        <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                        <div class="testimonial-carousel">
                            <div class="single-testi">
                                <div class="testi-text">
                                    <p>
                                        Je dirai que j'ai affaire à une équipe des jeunes congolais dynamiques. <br>
                                        Je préfère 
                                        choisir des africains pour mes travaux.
                                    </p>
                                    {{-- <div align="center">
                                        <img src="{{ asset('temoins/hgm.jpeg') }}" style="width: 80px" class="img-rounded" alt="">
                                    </div> --}}
                                    <br>
                                    <h6>Patrick HGM (HGMATCH, Etats-Unis)</h6>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="testi-text">
                                    <p>
                                        Je suis très satisfait du travail effectué. Jamais je n'aurais pensé que des jeunes congolais <br>
                                        pourraient travailler avec une telle passion et motivation pour me donner un rendu de taille. Je vous encourage.
                                    </p>
                                    {{-- <div align="center">
                                        <img src="{{ asset('temoins/logo-non-dispo.jpg') }}" style="width: 100px" class="img-rounded" alt="">
                                    </div> --}}
                                    <br>
                                    <h6>Col. Samba Jean Charles (Auberge Shabair, Brazzaville)</h6>
                                </div>
                            </div>

                            <div class="single-testi">
                                <div class="testi-text">
                                    <p>
                                        Vous avez été tellement bon et professionnel. J'ai apprécié le travail à 100%. 
                                        Toutefois quand quelqu'un me parle des NTIC je fais toujours référence à vous. <br>
                                        Vous êtes les meilleurs. Ce secteur est encore en état latent au Congo. Réveillez-le
                                    </p>
                                    {{-- <div align="center">
                                        <img src="{{ asset('temoins/roga.jpeg') }}" style="width: 100px" class="img-rounded" alt="">
                                    </div> --}}
                                    <br>
                                    <h6>Rogacien Mberi, Manager QHSE (GVD, Pointe-Noire)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer/>   
