<style>
    .navbar_bg{
        background-color: #FFF;
        box-shadow: 0 5px 15px #005C94;
    }
    .item_color{
        color: #3EC1D5;
    }
</style>

<header>
    <div id="sticker" class="header-area navbar_bg" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar" style="background-color: #005C94"></span>
                                <span class="icon-bar" style="background-color: #005C94"></span>
                                <span class="icon-bar" style="background-color: #005C94"></span>
                            </button>
                            <a class="navbar-brand page-scroll sticky-logo" href="{{ route('index') }}">
                                <img src="{{ asset('img/logotype.png') }}" width="70" style="margin-top: -5px;border: none" class="thumbnail logo_nav" alt="DrumNet Innov">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="{{ setMenuActive('index') }}">
                                    <a class="item_color" style="text-transform: uppercase;font-weight: bold" href="{{ route('index') }}">Accueil</a>
                                </li>

                                <li class="{{ setMenuActive('equipe') }}">
                                    <a class="item_color" style="text-transform: uppercase;font-weight: bold" href="{{ route('equipe') }}">équipe</a>
                                </li>

                                <li class="{{ setMenuActive('allArticles') }}">
                                    <a class="page-scroll item_color" style="text-transform: uppercase;font-weight: bold" href="{{ route('allArticles') }}">articles </a>
                                </li>

                                <li class="{{ setMenuActive('contacts') }}">
                                    <a class="page-scroll item_color" style="text-transform: uppercase;font-weight: bold" href="{{ route('contacts') }}">Contacts</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>