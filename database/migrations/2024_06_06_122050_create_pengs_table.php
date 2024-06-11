<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPengsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_pengs', function (Blueprint $table) { 
            $table->id(); 
            $table->string('nama'); 
            $table->string('jabatan'); 
            $table->integer('id_bidang'); 
            $table->string('email')->unique(); 
            $table->integer('username'); 
            $table->string('password'); 
            $table->timestamps(''); }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengs');
    }
};
