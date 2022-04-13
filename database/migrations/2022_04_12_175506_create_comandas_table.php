<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comandas', function (Blueprint $table) {
            $table->id();
            $table->integer('mesa');
            $table->string('comentarios')->nullable();
            $table->enum('estado', ['abierta', 'en curso', 'cerrada', 'cancelada'])->default('abierta');
            $table->foreignId('camarero_id')->constrained('users');
            $table->foreignId('cocinero_id')->nullable()->constrained('users');
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
        Schema::dropIfExists('comandas');
    }
};
