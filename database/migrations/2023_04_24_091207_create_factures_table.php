<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->integer('clientId');
            $table->string('reference');
            $table->string('date_payement');
            $table->string('mode_de_reglement');
            $table->string('reference_du_payement');
            $table->string('produits');
            $table->integer('total_ht');
            $table->integer('total_ttc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
