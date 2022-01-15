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
</style>

<div class="adminBody" style="background-color: #005C94">
    <h3 class="text-uppercase" style="margin-top:9%;padding: 20px;color: #FFFFFF">Site vitrine professionnel</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
            <div class="active">
                <p>
                    Un site vitrine est un site Internet informatif qui présente l’activité d’une entreprise sur le Web.
                    <br>
                    On appelle généralement un site web un site vitrine lorsqu’il présente des informations sur
                    une entreprise, des produits ou des services. Cette appellation s’oppose aux boutiques en
                    ligne qui génèrent directement des ventes et du chiffre d’affaires.
                </p>
                <img src="{{ asset('img/site-web-vitrine.png') }}" alt="">
                <p>Un simple site vitrine ne suffit pas à attirer des clients.</p>

                <h4 class='anal'>Analogie avec le commerce traditionnel</h4>
                <p>
                    Le terme de site vitrine reprend le vocabulaire du commerce de proximité :
                    il se présente ainsi comme l’équivalent virtuel de la vitrine d’un magasin ou de la
                    devanture d’une entreprise.
                    <br>
                    <br>
                    On peut pousser l’analogie plus loin : comme dans le commerce traditionnel, la vitrine
                    n’est pas l’élément le plus important pour la réussite d’une activité commerciale. Ce
                    sont avant tout l’emplacement (assimilable au SEO), l’adéquation de l’offre avec la
                    demande du marché (l’équivalent du webmarketing) et le service offert (l’ergonomie)
                    qui sont les facteurs clefs de succès.
                </p>
                <br>
                <h4 class='anal'>Pertinence actuelle du terme</h4>
                <p>
                    Dans les premiers temps d’Internet, les sites web des entreprises étaient bien
                    souvent de pâles copies des plaquettes et brochures de l’époque. L’objectif était
                    d’être présent sur la toile, et donc d’y avoir sa “vitrine”.
                    <br>
                    <br>
                    Aujourd’hui, même les sites web non marchands cherchent avant tout l’interaction avec
                    l’utilisateur : demande de contact, de conseil et de devis, avis sur un service,
                    participation à des jeux concours… Le site web n’est plus une vitrine, mais un agent
                    commercial au service de l’entreprise.
                </p>

                <br>
                <h4 class='anal'>Le site vitrine, un élément parmi d’autres</h4>
                <p>
                    Dans cette optique, il n’est qu’un élément parmi d’autres dans une stratégie Internet.
                    Il faudra ensuite créer du trafic ciblé grâce au référencement naturel et aux liens
                    sponsorisés, travailler sur les objectifs en mettant en avant les call to action, et
                    assurer un bouche à oreille efficace grâce aux réseaux sociaux.
                    <br>
                    <br>
                    Comme dans la vie réelle, la vitrine ne suffit pas : il faut attirer les clients et avoir
                    de bons produits à vendre.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pri_table_list active">
                <span class="saleon">pro</span>
                <h3 style="color: #E84A20">site vitrine <!--br/> <span>$80 / month</span--></h3>
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
                        <i class="fa fa-envelope-o fa_cat"></i>&nbsp;5 e-mails pro
                    </li>
                    <li class="check">
                        <i class="fa fa-key fa_cat"></i>&nbsp;Certificat SSL
                    </li>
                    <li class="check cross">
                        <i class="fa fa-facebook fa_cat"></i>&nbsp;Création page facebook
                    </li>
                    <li class="check cross">
                        <i class="fa fa-cog fa_cat"></i>&nbsp;Maintenance
                    </li>
                    <li class="check cross">
                        <i class="fa fa-building fa_cat"></i>&nbsp;Back-office (optionnel)
                    </li>
                </ol>
                {{-- <button data-toggle="modal" data-target="#devis">
                    Démander un devis
                </button> --}}
            </div>
        </div>
        
        <div class="">
            
            <div class="col-sm-4 col-xs-12">
            <br>
                <a href="{{ route('blog') }}" class="btn btn-info form-control">Tout savoir sur un blog</a> <hr>
            </div>

            <div class="col-sm-4 col-xs-12">
                <a href="{{ route('eCommerce') }}" class="btn btn-info form-control">Tout savoir sur un site e-commerce</a>
            </div>
        </div>
    </div>

    
</div>
<br>
<x-footer />