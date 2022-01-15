<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_id')->constrained();
            $table->foreignId('client_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('libelle');
            $table->text('description');
            $table->string('fichier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doc_clients', function(Blueprint $table){
            $table->dropForeign('commande_id');
            $table->dropForeign('client_id');
            $table->dropForeign('user_id');
        });
        Schema::dropIfExists('doc_clients');
    }
}
