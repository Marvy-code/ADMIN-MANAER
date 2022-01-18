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

    public $isBtnAddClicked = false; //Si le bouton Ajouter nouvel agent est cliqué, afficher le formulaire d'ajout. Par défaut, la liste s'affiche
    public $newAgent = [];

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
            "agents" => User::latest()->paginate(5)
        ])
        ->extends('layouts.master')
        ->section('content');
    }

    // Changement d'état du boutton pour afficher le formulaire d'ajout
    public function goToAddAgent(){
        $this->isBtnAddClicked = true;
    }

    // Fermer le formulaire pour afficher la liste des agents
    public function goToListAgent(){
        $this->isBtnAddClicked = false;
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

        $this->dispatchBrowserEvent("showSuccessMessage", ["message" => "Agent crée avec succès !"]);
        $this->isBtnAddClicked = false;
    }
}
