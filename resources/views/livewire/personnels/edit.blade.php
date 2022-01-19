<div class="p-4 pt-5 content">
    <div class="container-fluid">
        <div class='row'>
            <div class='col-sm-6'>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user-shield"></i> 
                            Formulaire d'édition d'un agent
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form wire:submit.prevent="updateAgent()">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nomAgent">Nom de l'agent</label>
                                <input type="text" class="form-control @error('editAgent.nom') is-invalid @enderror" id="nomAgent" wire:model.lazy='editAgent.nom'
                                    placeholder="Entrez le nom de l'agent">
                                    @error('editAgent.nom')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="prenomAgent">Prénom de l'agent</label>
                                <input type="text" class="form-control @error('editAgent.prenom') is-invalid @enderror" id="prenomAgent" wire:model.lazy='editAgent.prenom'
                                    placeholder="Entrez le prénom de l'agent">
                                    @error('editAgent.prenom')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="telAgent">Télphone</label>
                                <input type="number" class="form-control @error('editAgent.tel') is-invalid @enderror" id="telAgent" wire:model.lazy='editAgent.tel'
                                    placeholder="Numéro de téléphone de l'agent">
                                    @error('editAgent.tel')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="emailAgent">Adresse mail</label>
                                <input type="email" class="form-control @error('editAgent.email') is-invalid @enderror" id="emailAgent" wire:model.lazy='editAgent.email'
                                    placeholder="Numéro de téléphone de l'agent">
                                @error('editAgent.email')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-spinner"></i> Enregistrer les modifications</button>
                            <button type="submit" wire:click.prevent='goToListAgent()' class="btn btn-secondary"><i class="fas fa-backward"></i> Retourner sur la liste</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class='col-sm-6'>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-lock"></i> 
                                    Affectation d'un mot de passe
                                </h3>
                            </div>
                           
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href='#' wire:click.prevent='confirmPaswordReset()' class='btn btn-primary'><i class='fas fa-key'></i> Affecter un mot de passe</a>
                                    </li>
                                </ul>
                            </div> 
                        </div> 
                    </div>

                    <div class='mt-4 col-md-12'>
                        <div class="card card-primary">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="card-title flex-grow-1"><i class="fas fa-fingerprint"></i> 
                                    Rôles et permissions
                                </h3>   
                                <button class='mb-3 btn bg-gradient-primary' wire:click='updateRoleAndPermissions'>
                                    <i class='fas fa-check-double'></i> Appliquer les modifications
                                </button>        
                            </div>
                           
                            <div class="card-body">
                                
                                <div id='accordion'>
                                    @foreach ($rolePermissions["roles"] as $role)
                                        <div class='card'>
                                            <div class='card-header d-flex justify-content-between'>
                                                <h4 class='flex-grow-1 card-title'>
                                                    <a data-parent='#accordion' href='#' aria-expanded='true'>
                                                        {{ $role['role_nom'] }}
                                                    </a>
                                                </h4>

                                                <div class='custom-control custom-switch custom-swith-off-danger custom-swith-on-success'>
                                                    <input type='checkbox' wire:model.lazy="rolePermissions.roles.{{ $loop->index }}.active" @if($role['active']) checked @endif class='custom-control-input' id='customSwitch{{ $role["role_id"] }}'>
                                                    <label class='custom-control-label' for='customSwitch{{ $role["role_id"] }}'>{{ $role['active'] ? 'Activé' : 'Désactivé' }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>                             
                            </div> 
                            
                            <div class='p-3'>
                                <table class='table table-bordered'>
                                    <thead class='bg-secondary'>
                                        <th colspan='2'>Permissions</th>
                                        {{-- <th></th> --}}
                                    </thead>

                                    <tbody>
                                        @foreach ($rolePermissions["permissions"] as $permission)
                                        <tr>
                                            <td>{{ $permission["permission_nom"] }}</td>
                                            <td>
                                                <div class='custom-control custom-switch custom-swith-off-danger custom-swith-on-success'>
                                                    <input type='checkbox' @if($permission['active']) checked @endif wire:model.lazy="rolePermissions.permissions.{{ $loop->index }}.active" class='custom-control-input' id='customSwitchPermissions{{ $permission['permission_id'] }}'>
                                                    <label class='custom-control-label' for='customSwitchPermissions{{ $permission['permission_id'] }}'>{{ $permission['active'] ? 'Activé' : 'Désactivé' }}</label>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div>
                                      {{-- {{ $rolePermissions["permissions"]->links() }}   --}}
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