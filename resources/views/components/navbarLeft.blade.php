<aside class="main-sidebar sidebar-dark-primary elevation-4" style='background-color: #005C94'>
    <!-- Brand Logo -->
    <a href="#" class="text-center brand-link" style='background-color: #E84A20'>
      <span class="brand-text font-weight-light">ADMINISTRATION</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="pb-3 mt-3 mb-3 user-panel d-flex">
        <div class="image">
          <img src="{{ asset('img/ux.png') }}" class="elevation-2" alt="" style='border-radius: 3px'>
        </div>
        <div class="info">
          <a href="#" class="d-block text-uppercase">{{ Auth::user()->nom }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="{{ route('home') }}" class="nav-link {{ setMenuActive('home') }}">
                  <i class="fas fa-house-user nav-icon"></i>
                  <p>Accueil</p>
              </a>
            </li>

            @can('admin', 'superadmin')
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fas fa-chart-line nav-icon"></i>
                  <p>Vue Globale</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-chart-bar nav-icon"></i>
                  <p>Mois courant</p>
                </a>
              </li>
            </ul>
          </li> --}}
          

          {{-- <li class="nav-item {{ setMenuClass('admin.gestarticles.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.gestarticles.', 'active') }}">
                <i class="fab fa-hive nav-icon"></i>
              <p>
                Gestion des articles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-th-large nav-icon"></i>
                  <p>Nouvel article</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-shapes nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.gestarticles.categoriearticle') }}" class="nav-link {{ setMenuActive('admin.gestarticles.categoriearticle') }}">
                    <i class="fas fa-shapes nav-icon"></i>
                  <p>Catégorie d'article</p>
                </a>
              </li>
            </ul>
          </li> --}}

          <li class="nav-item {{ setMenuClass('admin.habilitations.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.habilitations.', 'active') }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Habilitations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.habilitations.admin.personnel') }}" class="nav-link {{ setMenuActive('admin.habilitations.admin.personnel') }}">
                    <i class="fas fa-th-large nav-icon"></i>
                  <p>Liste du personnel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-fingerprint nav-icon"></i>
                  <p>Rôles et permissions</p>
                </a>
              </li>
            </ul>
          </li>

          @endcan

          @can("employe")
       
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-user-friends nav-icon"></i>
              <p>Gestion des clients</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fab fa-cc-amazon-pay nav-icon"></i>
              <p>Gestion des paiements</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-vr-cardboard nav-icon"></i>
              <p>Réalisations</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-folder-open nav-icon"></i>
              <p>
                Gestion documents
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link ">
                    <i class="fas fa-folder-minus nav-icon"></i>
                  <p>Docs administratifs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-folder-open nav-icon"></i>
                  <p>Docs clients</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-images nav-icon"></i>
                  <p>Galerie photo</p>
                </a>
              </li> --}}
            </ul>
          </li>
          @endcan
        </ul>
      </nav>
    </div>
</aside>

