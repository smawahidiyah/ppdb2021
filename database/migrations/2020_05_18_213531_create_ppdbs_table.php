<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string('namapd');
            $table->enum('kelaminpd', ['L', 'P']);
            $table->string('nisnpd');
            $table->string('nikpd');
            $table->string('tempatlahirpd');
            $table->date('tanggallahirpd');
            $table->enum('agamapd', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha', 'Kong Hu Chu', 'Kepercayaan Kepada Tuhan YME']);
            $table->string('disabilitaspd');
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
        Schema::dropIfExists('ppdbs');
    }
}
