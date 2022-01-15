@extends('layouts.master')

@section('content')
<div class="wrapper">

  <!-- Navbar -->
  <x-navbarTop />
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <x-navbarLeft />

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="mb-2 row">
          <div class="col-sm-6">
            <h4 class="m-0">ACCUEIL</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}" class='btn btn-primary'><i class="fas fa-house-user nav-icon"></i> Accueil</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col-md-6 -->
          <div class="col-lg">
            

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h4 class="m-0">Bienvenue, <span class='text-capitalize'>{{ Auth::user()->prenom }}</span> - <span class='text-uppercase'>{{ Auth::user()->nom }} !</span></h4>
              </div>
              <div class="card-body">
                <h5 class="card-title">
                    Vous êtes un 
                    @foreach (auth()->user()->roles as $role)
                        {{ $role->libelle }}
                    @endforeach <br> <br>
                  Votre session étant active, vous pouvez commencer à utiliser la solution.
                </h5>

                <p class="card-text">
                  Pour vos préoccupations, n'hésitez pas de contacter le support informatique.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <x-aside/>
</div>
@endsection