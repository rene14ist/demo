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
        /*
        NombreProyecto
        fuenteFondos
        MontoPlanificado
        MontoPatrocinado
        MontoFondosPropios
        */
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProyecto');
            $table->string('fuenteFondos');
            $table->double('montoPlanificado');
            $table->double('montoPatrocinado');
            $table->double('montoFondosPropios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
