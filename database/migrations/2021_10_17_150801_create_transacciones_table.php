<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->foreignId('cuentas_id');
            $table->string('Movimiento');
            $table->unsignedDecimal('Monto', 8, 2);
            $table->string('CuentaDestino');
            $table->string('Concepto');
            $table->string('Referencia');
            $table->boolean('Estatus');
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
        Schema::dropIfExists('transacciones');
    }
}
