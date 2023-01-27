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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nom_menu', 35)->unique();
            $table->string('link_menu', 90);
            $table->unsignedTinyInteger('activo_menu')->default(1);
            $table->timestamps();
            $table->foreignId('idpagina')->nullable()->constrained('pagina')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('categoriamenu')->nullable();         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
