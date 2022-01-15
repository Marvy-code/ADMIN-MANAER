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
                <h4 class="m-0 text-uppercase">Liste du personnel</h4>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class='btn btn-primary'><i class="fas fa-house-user nav-icon"></i> Accueil</a></li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
    </div>
</div>
@endsection