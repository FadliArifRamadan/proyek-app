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
        Schema::create('peraturans', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('judul_1');
            $table->string('judul_2');
            $table->text('deskripsi_1');
            $table->text('deskripsi_2');
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
        Schema::dropIfExists('peraturans');
    }
};
