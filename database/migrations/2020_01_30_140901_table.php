<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //User
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('prenom');
            $table->string('nom');
            $table->date('birth');
            $table->string('phone');
            $table->string('adresse');
            $table->string('ville');
            $table->string('pays');
            $table->rememberToken();
            $table->timestamps();
        });
        //produit
        Schema::create('produit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('libelle');
            $table->text('description');
            $table->float('prix');
            $table->longText('image');
            $table->text('categorie');
        });
        //ligneCommande
        Schema::create('ligneCommande', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produitId');
            $table->integer('qte');

            $table->foreign('produitId')
                ->references('id')
                ->on('produit');
        });
        //commande
        Schema::create('commande', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('ligneCommandeId');
            $table->float('prixTotal');
            $table->timestamp('date')->useCurrent();

            $table->foreign('userId')
                ->references('id')
                ->on('users');
            $table->foreign('ligneCommandeId')
                ->references('id')
                ->on('ligneCommande');
        });
        //LignePanier
        Schema::create('lignePanier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('produitId');
            $table->integer('qte');

            $table->foreign('produitId')
                ->references('id')
                ->on('produit');
        });
        //Panier
        Schema::create('panier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('lignePanierId');
            $table->float('prixTotal');

            $table->foreign('userId')
                ->references('id')
                ->on('users');
            $table->foreign('lignePanierId')
                ->references('id')
                ->on('lignePanier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('produit');
        Schema::dropIfExists('ligneCommande');
        Schema::dropIfExists('commande');
        Schema::dropIfExists('lignePanier');
        Schema::dropIfExists('panier');
        Schema::dropIfExists('users');
    }
}
