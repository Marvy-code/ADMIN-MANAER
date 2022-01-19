<div class="p-4 pt-5 content">
    <div class="container-fluid">
        <div class='row'>
            <div class='col-sm-8'>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user-shield"></i> 
                            Formulaire d'édition d'un agent
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form wire:submit.prevent="addAgent()">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nomAgent">Nom de l'agent</label>
                                <input type="text" class="form-control @error('editAgent.nom') is-invalid @enderror" id="nomAgent" wire:model='editAgent.nom'
                                    placeholder="Entrez le nom de l'agent">
                                    @error('editAgent.nom')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="prenomAgent">Prénom de l'agent</label>
                                <input type="text" class="form-control @error('editAgent.prenom') is-invalid @enderror" id="prenomAgent" wire:model='editAgent.prenom'
                                    placeholder="Entrez le prénom de l'agent">
                                    @error('editAgent.prenom')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="telAgent">Télphone</label>
                                <input type="number" class="form-control @error('editAgent.tel') is-invalid @enderror" id="telAgent" wire:model='editAgent.tel'
                                    placeholder="Numéro de téléphone de l'agent">
                                    @error('editAgent.tel')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="emailAgent">Adresse mail</label>
                                <input type="email" class="form-control @error('editAgent.email') is-invalid @enderror" id="emailAgent" wire:model='editAgent.email'
                                    placeholder="Numéro de téléphone de l'agent">
                                @error('editAgent.email')
                                    <span class='text-danger'>{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-spinner"></i> Enregistrer</button>
                            <button type="submit" wire:click.prevent='goToListAgent()' class="btn btn-secondary"><i class="fas fa-backward"></i> Retourner sur la liste</button>
                        </div>
                    </form>
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