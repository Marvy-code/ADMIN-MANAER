<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Personnels extends Component
{
    use WithPagination;
    protected $paginationTheme = "Bootstrap";

    public $isBtnAddClicked = false;

    public function render()
    {
        return view('livewire.personnels.index', [
            "agents" => User::paginate(5)
        ])
        ->extends('layouts.master')
        ->section('content');
    }

    public function goToAddAgent(){
        $this->isBtnAddClicked = true;
    }
}
