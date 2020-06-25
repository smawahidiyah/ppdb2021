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
            $table->string('regaktalahirpd')->nullable();
            $table->string('agamapd');
            $table->string('disabilitaspd')->nullable();
            $table->string('alamatjlnpd')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupatenkota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('anakkeberapa')->nullable();
            $table->string('asalsekolah')->nullable();
            $table->string('nokip')->nullable();
            $table->string('namaayah');
            $table->string('nikayah')->nullable();
            $table->string('tahunlahirayah')->nullable();
            $table->string('pendidikanayah')->nullable();
            $table->string('pekerjaanayah')->nullable();
            $table->string('penghasilanayah')->nullable();
            $table->string('namaibu');
            $table->string('nikibu')->nullable();
            $table->string('tahunlahiribu')->nullable();
            $table->string('pendidikanibu')->nullable();
            $table->string('pekerjaanibu')->nullable();
            $table->string('penghasilanibu')->nullable();
            $table->string('namawali')->nullable();
            $table->string('nikwali')->nullable();
            $table->string('pekerjaanwali')->nullable();
            $table->string('penghasilanwali')->nullable();
            $table->string('telpayah')->nullable();
            $table->string('telpibu')->nullable();
            $table->string('telpwali')->nullable();
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
