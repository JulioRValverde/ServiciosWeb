<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->float('precio',8,2)->default(0);
            $table->string('rutaFoto',255);
            $table->unsignedInteger('tienda_id');
            $table->unsignedInteger('categoria_id');
            $table->timestamps();
            $table->foreign('tienda_id')->references('id')->on('tiendas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
