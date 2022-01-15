<aside class="control-sidebar " style='background-color: #005C94'>
    <div class="card" style='background-color: #005C94'>
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="profile-user-img img-fluid" style='border:none; border-radius: 5px' src="{{ asset('img/logojpg.jpg') }}" alt="User profile picture">
        </div>

        <h3 class="text-center text-white profile-username">{{ Auth::user()->nom }} - {{ Auth::user()->prenom }}</h3>

        <p class="text-center text-white">
          <span>Software Engineer</span>  <br>
          <span>{{ Auth::user()->email }}</span>
        </p>

        <ul class="mb-3 list-group list-group-unbordered">
          <li class="p-2 list-group-item">
            <b><a href='#' class="btn btn-primary form-control"><i class='fa fa-user'></i> Mon profil</a></b> 
          </li>

          <li class="p-2 list-group-item">

            <a class="btn btn-primary btn-block" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Déconnexion
            </a>
          </li>
        </ul>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </div>
    </div>
  </aside>
  
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Tout droits reservés
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="#">{{ config('app.name') }}</a></strong>
  </footer>