<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommandeCategorie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_categorie', function(Blueprint $table){
            $table->id();
            $table->foreignId('commande_id')->constrained();
            $table->foreignId('categorie_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commande_categorie', function(Blueprint $table){
            $table->dropForeign('commande_id');
            $table->dropForeign('categorie_id');
        });
        Schema::dropIfExists('commande_categorie');
    }
}
