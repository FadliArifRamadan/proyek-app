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
        Schema::create('atlets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('nik');
            $table->string('alamat_lama');
            $table->string('alamat_baru');
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
        Schema::dropIfExists('atlets');
    }
};
