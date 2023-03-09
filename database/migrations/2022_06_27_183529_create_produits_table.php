<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments(column: 'id');
            $table->timestamps();
            $table->string(column:"nom");
            $table->text(column:"description");
            $table->float(column:"prix");
            $table->string(column:"reference");
            $table->string(column:"photo");
            $table->string(column:"stock");
            $table->float(column:"prix_achat");
            $table->float(column:"prix_vente");
            $table->string(column:"type_prix");
            $table->string(column:"remarque");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
