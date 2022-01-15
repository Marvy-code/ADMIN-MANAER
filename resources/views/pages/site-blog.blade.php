<x-header />
<x-navbar />

<style>
    .anal{
        background-color: #E84A20;
        padding: 10px;
        color:#fff;
        border-radius: 10px;
    }

    .btn-info{
        background-color: #005C94;
        border: 1px solid #005C94;
    }
    .btn-info:hover{
        background-color: #E84A20;
        border: 1px solid #E84A20;
    }
    strong{
        color: #005C94;
    }
</style>

<div class="adminBody" style="background-color: #005C94; margin-top: 110px">
    <h3 class="text-uppercase" style="padding: 20px;color: #FFFFFF">Blog professionnel</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
            <div class="active">
                <strong>
                    Tout le monde peut prendre la parole sur Internet grâce au format du blog.
                    Flexible et accessible, ce type de site connaît depuis son apparition un franc
                    succès auprès des particuliers et des professionnels.
                </strong>
                <br>
                <br>
                <h4 class='anal'>Qu'est-ce qu'un blog ?</h4>
                <p>
                    Le blog est un type de site Internet particulier qui peut être présenté comme
                    une sorte de journal intime publié sur la Toile, et accessible aux internautes du
                    monde entier. Il s'agit d'une version simplifiée d'un site internet, proposée clé en
                    main aux internautes, et gérée techniquement par un éditeur.
                    <br>
                    <br>
                    De façon concrète, le blog permet donc à certains internautes, les blogueurs, de
                    partager leurs avis, commentaires, humeurs, points de vue sur l'actualité, via la
                    rédaction d'articles, la publication de photos, etc.
                </p>
                <br>
                <br>
                <h4 class="anal">Pour qui est-il intéressant d'avoir un blog ?</h4>
                <p>
                    Un blog développé par un blogueur est finalement destiné aux structures représentées sur la toile:
                </p>
                <ol type="square">
                    <li>
                        Des particuliers souhaitant partager des informations personnelles avec
                        leurs proches
                    </li>
                    <li>
                        Des particuliers désireux de prendre la parole publiquement sur des sujets qui leur tiennent à cœur
                    </li>
                    <li>
                        Des experts ou des professionnels qui présentent leur parcours, pour se faire
                        connaître des prospects ou des recruteurs
                    </li>
                    <li>
                        Des entreprises créent un blog adjacent à leur site vitrine ou e-commerce pour
                        présenter leurs actualités et informer leurs utilisateurs sur leur offre
                    </li>
                    <li>
                        Des associations, qui utilisent le blog pour informer les internautes sur un sujet et sur leurs actualités.
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pri_table_list active">
                <span class="saleon">pro</span>
                <h3 style="color: #E84A20">site blog <!--br/> <span>$80 / month</span--></h3>
                <ol>
                    <li class="check">
                        <i class="fa fa-tv fa_cat"></i>&nbsp;Design unique et responsive
                    </li>
                    <li class="check">
                        <i class="fa fa-align-justify fa_cat"></i>&nbsp;Nom de domaine
                    </li>
                    <li class="check">
                        <i class="fa fa-line-chart fa_cat"></i>&nbsp;Hébergement
                    </li>
                    <li class="check">
                        <i class="fa fa-bar-chart fa_cat"></i>&nbsp;Trafic mensuel illimité
                    </li>
                    <li class="check">
                        <i class="fa fa-pie-chart fa_cat"></i>&nbsp;100 Go de stockage
                    </li>
                    <li class="check">
                        <i class="fa fa-database fa_cat"></i>&nbsp;1 Bases de données
                    </li>
                    <li class="check">
                        <i class="fa fa-envelope-o fa_cat"></i>&nbsp;10 e-mails pro
                    </li>
                    <li class="check">
                        <i class="fa fa-key fa_cat"></i>&nbsp;Certificat SSL
                    </li>
                    <li class="check">
                        <i class="fa fa-facebook fa_cat"></i>&nbsp;Création page facebook
                    </li>
                    <li class="check cross">
                        <i class="fa fa-cog fa_cat"></i>&nbsp;Maintenance
                    </li>
                    <li class="check">
                        <i class="fa fa-building fa_cat"></i>&nbsp;Back-office
                    </li>
                </ol>
                {{-- <button data-toggle="modal" data-target="#devis">
                    Démander un devis
                </button> --}}
            </div>
        </div>
    </div>
    <div class="">
        
        <div class="col-sm-4 col-xs-12">
        
            <a href="{{ route('siteVitrine') }}" class="btn btn-info form-control">Tout savoir sur un site vitrine</a> <hr>
        </div>

        <div class="col-sm-4 col-xs-12">
            <a href="{{ route('eCommerce') }}" class="btn btn-info form-control">Tout savoir sur un site e-commerce</a><hr>
        </div>
    </div>
</div>
<br>
<x-footer />