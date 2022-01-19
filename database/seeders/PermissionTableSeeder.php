<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            ["libelle"=>"ajouter les roles et permissions"],
            ["libelle"=>"ajouter un client"],
            ["libelle"=>"consulter un client"],
            ["libelle"=>"editer un client"],
            ["libelle"=>"ajouter un paiement"],
            ["libelle"=>"consulter un paiement"],
            ["libelle"=>"editer un paiement"],
            ["libelle"=>"ajouter un document"],
            ["libelle"=>"consulter un document"],
            ["libelle"=>"editer un document"],
            ["libelle"=>"ajouter une image"],
            ["libelle"=>"consulter une image"],
            ["libelle"=>"editer une image"],
        ]);
    }
}
