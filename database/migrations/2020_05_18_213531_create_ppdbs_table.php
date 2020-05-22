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
            $table->string('regaktalahirpd')->nullable($value = true);
            $table->string('agamapd');
            $table->string('disabilitaspd')->nullable($value = true);
            $table->string('alamatjlnpd')->nullable($value = true);
            $table->string('rt')->nullable($value = true);
            $table->string('rw')->nullable($value = true);
            $table->string('kelurahan')->nullable($value = true);
            $table->string('kecamatan')->nullable($value = true);
            $table->string('kabupatenkota')->nullable($value = true);
            $table->string('provinsi')->nullable($value = true);
            $table->string('kodepos')->nullable($value = true);
            $table->string('anakkeberapa')->nullable($value = true);
            $table->string('namaayah');
            $table->string('nikayah')->nullable($value = true);
            $table->string('tahunlahirayah')->nullable($value = true);
            $table->string('pendidikanayah')->nullable($value = true);
            $table->string('pekerjaanayah')->nullable($value = true);
            $table->string('penghasilanayah')->nullable($value = true);
            $table->string('namaibu');
            $table->string('nikibu')->nullable($value = true);
            $table->string('tahunlahiribu')->nullable($value = true);
            $table->string('pendidikanibu')->nullable($value = true);
            $table->string('pekerjaanibu')->nullable($value = true);
            $table->string('penghasilanibu')->nullable($value = true);
            $table->string('namawali')->nullable($value = true);
            $table->string('nikwali')->nullable($value = true);
            $table->string('pekerjaanwali')->nullable($value = true);
            $table->string('penghasilanwali')->nullable($value = true);
            $table->string('telpayah')->nullable($value = true);
            $table->string('telpibu')->nullable($value = true);
            $table->string('telpwali')->nullable($value = true);
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
