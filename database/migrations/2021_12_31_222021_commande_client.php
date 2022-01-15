<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommandeClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_client', function(Blueprint $table){
            $table->id();
            $table->foreignId('commande_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->string('image_couverture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commande_client', function(Blueprint $table){
            $table->dropForeign('commande_id');
            $table->dropForeign('client_id');
        });
        Schema::dropIfExists('commande_client');
    }
}
