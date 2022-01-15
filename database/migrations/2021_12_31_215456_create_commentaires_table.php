<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained();
            $table->string('nom_prenom');
            $table->string('commentaire');
            $table->string('statut');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commentaires', function(Blueprint $table){
            $table->dropForeign('article_id');
        });
        Schema::dropIfExists('commentaires');
    }
}
