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
            $table->string('regaktalahirpd');
            $table->string('agamapd');
            $table->string('disabilitaspd');
            $table->string('alamatjlnpd');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupatenkota');
            $table->string('provinsi');
            $table->string('kodepos');
            $table->string('anakkeberapa');
            $table->string('namaayah');
            $table->string('nikayah');
            $table->string('tahunlahirayah');
            $table->string('pendidikanayah');
            $table->string('pekerjaanayah');
            $table->string('penghasilanayah');
            $table->string('namaibu');
            $table->string('nikibu');
            $table->string('tahunlahiribu');
            $table->string('pendidikanibu');
            $table->string('pekerjaanibu');
            $table->string('penghasilanibu');
            $table->string('namawali');
            $table->string('nikwali');
            $table->string('pekerjaanwali');
            $table->string('penghasilanwali');
            $table->string('telpayah');
            $table->string('telpibu');
            $table->string('telpwali');
            $table->enum('tempattinggal', ['0', '1']);
            $table->enum('kategorialumni', ['0', '1']);
            $table->enum('katorgtuapersonil', ['0', '1', '2']);
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
