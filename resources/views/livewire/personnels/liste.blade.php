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
                                        <h3 class="card-title">Total du personnel : <strong>{{ $totalAgent }}</strong></h3>

                                        <div class="card-tools d-flex align-items-center">
                                            <a wire:click.prevent='goToAddAgent()'
                                                class='mr-4 btn btn-primary d-block'>
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
                                                <tr class='bg-primary'>
                                                    <th class='text-white' style="width: 5%;">#</th>
                                                    <th class='text-white' style="width: 30%;">Agent</th>
                                                    <th class='text-white' style="width: 10%;">Matricule</th>
                                                    <th class='text-white' style="width: 25%;">Roles</th>
                                                    <th class='text-white' style="width: 20%;">Email</th>
                                                    <th class='text-white' style="width: 10%;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($agents as $agent)
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>
                                                            <span
                                                                class='text-uppercase text-bold'>{{ $agent->nom }}</span>,
                                                            <span
                                                                class='text-capitalize'>{{ $agent->prenom }}</span>
                                                        </td>
                                                        <td>{{ strtoupper($agent->matricule) }}</td>
                                                        <td>{{ $agent->roles->implode('libelle', ' , ') }}
                                                        </td>
                                                        <td>{{ strtolower($agent->email) }}</td>
                                                        <td class='btn-group'>
                                                            <button class='btn btn-primary' wire:click='goToEditAgent({{ $agent->id }})'>
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                            <button class='btn btn-danger' wire:click="confirmDelete('{{ $agent->prenom }} {{ $agent->nom }}', {{ $agent->id }})">
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

<script>
    window.addEventListener("showConfirmMessage", event=>{
        Swal.fire({
            title: event.detail.message.title,
            text: event.detail.message.text,
            icon: event.detail.message.type,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Continuer !',
            cancelButtonText: 'Annuler !',
            }).then((result) => {
            if (result.isConfirmed) {
                @this.deleteAgent(event.detail.message.data.agent_id)
            }
        })
    });

    window.addEventListener("showSuccessMessage", event=>{
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast: true,
            title: event.detail.message || "Opération effectuée avec succès !",
            showConfirmButton: false,
            timer: 3000
        })
    })
</script>