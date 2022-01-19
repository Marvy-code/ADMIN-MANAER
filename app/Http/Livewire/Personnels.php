<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Personnels extends Component
{
    use WithPagination;
    protected $paginationTheme = "Bootstrap";

    public $currentPage = PAGELISTE;
    
    public $newAgent = [];
    public $editAgent = [];

    public $rolePermissions = [];

    // Fonction qui retourne la liste des agents
    public function render()
    {
        return view('livewire.personnels.index', [
            "agents" => User::latest()->paginate(5),
            "totalAgent"    => User::count()
        ])
        ->extends('layouts.master')
        ->section('content');
    }

    // required|email|unique:users,email
    public function rules(){
        if($this->currentPage == PAGEEDITFORM){
            return [
                'editAgent.nom'          => 'required',
                'editAgent.prenom'       => 'required',
                'editAgent.tel'          => 'required|numeric',
                'editAgent.email'        => ['required', 'email', Rule::unique('users', 'email')->ignore($this->editAgent['id'])],
            ];
        }
        return [
            'newAgent.nom'          => 'required',
            'newAgent.prenom'       => 'required',
            'newAgent.tel'          => 'required|numeric',
            'newAgent.email'        => 'required|email|unique:users,email',
        ];
    }

    // Changement d'état du boutton pour afficher le formulaire d'ajout
    public function goToAddAgent(){
        $this->currentPage = PAGECREATEFORM;
    }

    // Traitement du formulaire d'ajout d'un agent
    public function addAgent(){
        $matricule = "DNI-".strtoupper(substr(md5(uniqid('newAgent.nom', true)), 0,4));
        // dd($matricule);
        // Validation
        $validationAttributes = $this->validate();
        // Insertion
        $validationAttributes['newAgent']["matricule"] = $matricule;
        User::create($validationAttributes['newAgent']);

        $this->newAgent = [];

        //Affiche le message de succès sweet alert qui s'affiche sur le coin supérieur droit de l'écran
        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Agent crée avec succès !"]);
        $this->currentPage = PAGELISTE;
    }

    // Afficher le formulaire de mise à jour des infos d'un agent
    public function goToEditAgent($id){
        $this->editAgent = User::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;

        $this->populateRolePermissions();
    }

    public function populateRolePermissions(){
        $this->rolePermissions["roles"] = [];
        $this->rolePermissions["permissions"] = [];

        $mapForCB = function($value){
            return $value["id"];
        };

        $roleIds = array_map($mapForCB, User::find($this->editAgent['id'])->roles->toArray());
        $permissionsIds = array_map($mapForCB, User::find($this->editAgent['id'])->permissions->toArray());
        
        foreach(Role::all() as $role){
            if(in_array($role->id, $roleIds)){
                array_push($this->rolePermissions["roles"], ["role_id"=>$role->id, "role_nom"=>$role->libelle, "active"=>true]);
            }
            else{
                array_push($this->rolePermissions["roles"], ["role_id"=>$role->id, "role_nom"=>$role->libelle, "active"=>false]);
            }
        }

        foreach(Permission::all() as $permissions){
            if(in_array($permissions->id, $permissionsIds)){
                array_push($this->rolePermissions["permissions"], ["permission_id"=>$permissions->id, "permission_nom"=>$permissions->libelle, "active"=>true]);
            }
            else{
                array_push($this->rolePermissions["permissions"], ["permission_id"=>$permissions->id, "permission_nom"=>$permissions->libelle, "active"=>false]);
            }
        }
        
    }


    // Mise à jour des rôles et permissions

    public function updateRoleAndPermissions(){
        DB::table('user_role')->where('user_id', $this->editAgent["id"])->delete();
        DB::table('user_permission')->where('user_id', $this->editAgent["id"])->delete();

        foreach($this->rolePermissions["roles"] as $role){
            if($role["active"]){
                User::find($this->editAgent['id'])->roles()->attach($role['role_id']);
            }
        }

        foreach($this->rolePermissions["permissions"] as $permission){
            if($permission["active"]){
                User::find($this->editAgent['id'])->permissions()->attach($permission['permission_id']);
            }
        }

        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Rôles/Permissions mis à jour avec succès !"]);
    }

    // Traitement du formulaire d'édition 
    public function updateAgent(){
        $validationAttributes = $this->validate();
        User::find($this->editAgent["id"])->update($validationAttributes['editAgent']);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Informations de l'agent modifiées avec succès !"]);
        $this->currentPage = PAGELISTE;
    }

    // Réinitialisation du mot de passe
    public function confirmPaswordReset(){
        // On affectera plutôt un réel mot de passe plus tard
        User::find($this->editAgent['id'])->update(["password"=>Hash::make(DEFAULTPASSWORD)]);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Mot de passe de l'agent attribué avec succès !"]);
        $this->currentPage = PAGELISTE;
    }
    
    // Fermer le formulaire pour afficher la liste des agents
    public function goToListAgent(){
        $this->currentPage = PAGELISTE;
        $this->editAgent = [];
        $this->newAgent = [];
    }
    

    // Confirmation de la suppression (Pop-up sweet alert)
    public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage", ["message" => [
            "text"      => "Vous êtes sur le point de supprimer $name de la liste du personnel ! Voulez-vous continuer ?",
            "title"     => "Etes-vous sûr de continuer cette action ?",
            "type"      => "warning",
            "data"      => [
                "agent_id"   => $id
            ]
        ]]);
    }

    // Fonction qui supprime un agent de la base de donnée
    public function deleteAgent($id){
        User::destroy($id);
        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Agent supprimé avec succès !"]);
    }
}
 