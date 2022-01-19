<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Personnels extends Component
{
    use WithPagination;
    protected $paginationTheme = "Bootstrap";

    public $currentPage = PAGELISTE;
    
    public $newAgent = [];
    public $editAgent = [];

    // Rules / critères de validation  des champs
    protected $rules = [
        'newAgent.nom'          => 'required',
        'newAgent.prenom'       => 'required',
        'newAgent.tel'          => 'required|numeric',
        'newAgent.email'        => 'required|email|unique:users,email',
    ];

    // Personnalisation des msg callback du formulaire

    // protected $message = [
    //     'newAgent.nom.required'         => 'Le nom de l\'agent est requis',
    //     'newAgent.prenom.required'         => 'Le prenom de l\'agent est requis',
    // ];

    // protected $validationAttributes = [
    //     'newAgent.nom'          => 'nom'
    // ];

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

    // Changement d'état du boutton pour afficher le formulaire d'ajout
    public function goToAddAgent(){
        $this->currentPage = PAGECREATEFORM;
    }

    // Afficher le formulaire de mise à jour des infos d'un agent
    public function goToEditAgent(){
        $this->currentPage = PAGEEDITFORM;
    }
    
    // Fermer le formulaire pour afficher la liste des agents
    public function goToListAgent(){
        $this->currentPage = PAGELISTE;
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
 