<div>
    <x-loading/>
    
    @if($isBtnAddClicked)
        <div class='row'>
            <div class='col-sm-6'>
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    @else

    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h4 class="m-0 text-uppercase">Liste du personnel</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class='btn btn-primary'>
                                <i class="fas fa-house-user nav-icon"></i> Accueil
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg">


                    <div class="card card-primary card-">
                        <div class="card-header">
                            <h5 class="m-0">Vous êtes connecté en tant que <span
                                    class='text-capitalize'>{{ Auth::user()->prenom }}</span> -
                                <span class='text-uppercase'>{{ Auth::user()->nom }} !</span>
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title">Total du personnel : </h3>

                                            <div class="card-tools d-flex align-items-center">
                                                <a wire:click.prevent='goToAddAgent()' class='mr-4 btn btn-primary d-block'>
                                                    <i class='fas fa-user-plus'></i>
                                                    Nouvel agent
                                                </a>
                                                <div class="input-group input-group-md" style="width: 250px;">
                                                    <input type="text" name="table_search"
                                                        class="float-right form-control" placeholder="Search">

                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-default">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="p-0 card-body table-responsive">
                                            <table class="table table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 5%;">#</th>
                                                        <th style="width: 30%;">Agent</th>
                                                        <th style="width: 25%;">Roles</th>
                                                        <th style="width: 20%;">Email</th>
                                                        <th style="width: 20%;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($agents as $agent)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>
                                                                <span
                                                                    class='text-uppercase text-bold'>{{ $agent->nom }}</span>,
                                                                <span class='text-capitalize'>{{ $agent->nom }}</span>
                                                            </td>
                                                            <td>{{ $agent->roles->implode('libelle', ' , ') }}</td>
                                                            <td>{{ strtolower($agent->email) }}</td>
                                                            <td class='btn-group'>
                                                                <button class='btn btn-primary'>
                                                                    <i class="fas fa-edit"></i>
                                                                </button>
                                                                <button class='btn btn-danger'>
                                                                    <i class="fas fa-trash-restore-alt"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class='card-footer'>
                                            <div class='float-right'>
                                                {{ $agents->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
