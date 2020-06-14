@extends('panel.base')
@section('content')

<div class="card card-info">
    @foreach ($ppdbs as $ppdb)
    <div class="card-header">
        <div class="card-tittle"><h4>Menampilkan data rinci - [<strong>{{ $ppdb->namapd }}</strong>]</h4></div>
    </div>
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-tittle">Data Pribadi Peserta Didik</div>
            </div>
            <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-3">Nama Lengkap</dt>
                        <dd class="col-sm-9">{{ $ppdb->namapd }}</dd>
                        <dt class="col-sm-3">Jenis Kelamin</dt>
                        <dd class="col-sm-9"> {{ $ppdb->kelaminpd }}</dd>
                        <dt class="col-sm-3">Tempat, Tanggal Lahir</dt>
                        <dd class="col-sm-9"> {{ $ppdb->tempatlahirpd }}, {{ $ppdb->tanggallahirpd }}</dd>
                        <dt class="col-sm-3">NISN</dt>
                        <dd class="col-sm-9"> {{ $ppdb->nisnpd }} </dd>
                        <dt class="col-sm-3">NIK</dt>
                        <dd class="col-sm-9"> {{ $ppdb->nikpd }} </dd>
                        <dt class="col-sm-3">No. Reg Akta Lahir</dt>
                        <dd class="col-sm-9"> {{ $ppdb->regaktalahirpd }} </dd>
                        <dt class="col-sm-3">Agama</dt>
                        <dd class="col-sm-9"> {{ $ppdb->agamapd }} </dd>
                        <dt class="col-sm-3">Kebutuhan Khusus</dt>
                        <dd class="col-sm-9"> {{ $ppdb->disabilitaspd }} </dd>
                        <dt class="col-sm-3">Alamat Jln.</dt>
                        <dd class="col-sm-9"> {{ $ppdb->alamatjlnpd }} </dd>
                        <dt class="col-sm-3">Provinsi</dt>
                        <dd class="col-sm-9"> {{ $ppdb->provinsi }} </dd>
                        <dt class="col-sm-3">Kabupaten/Kota</dt>
                        <dd class="col-sm-9"> {{ $ppdb->kabupatenkota }} </dd>
                        <dt class="col-sm-3">Kecamatan</dt>
                        <dd class="col-sm-9"> {{ $ppdb->kecamatan }} </dd>
                        <dt class="col-sm-3">Kelurahan</dt>
                        <dd class="col-sm-9"> {{ $ppdb->kelurahan }} </dd>
                        <dt class="col-sm-3">RT / RW</dt>
                        <dd class="col-sm-9"> {{ $ppdb->rt }} / {{ $ppdb->rw }}</dd>
                        <dt class="col-sm-3">Kode POS</dt>
                        <dd class="col-sm-9"> {{ $ppdb->kodepos }} </dd>
                        <dt class="col-sm-3">Anak Ke</dt>
                        <dd class="col-sm-9"> {{ $ppdb->anakkeberapa }} </dd>
                    </dl>
            </div>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-tittle">Data Ayah Kandung</div>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Nama Ayah Kandung</dt>
                    <dd class="col-sm-9"> {{ $ppdb->namaayah }} </dd>
                    <dt class="col-sm-3">NIK Ayah Kandung</dt>
                    <dd class="col-sm-9"> {{ $ppdb->nikayah }} </dd>
                    <dt class="col-sm-3">Tahun Lahir Ayah</dt>
                    <dd class="col-sm-9"> {{ $ppdb->tahunlahirayah }} </dd>
                    <dt class="col-sm-3">Pendidikan Terakhir Ayah</dt>
                    <dd class="col-sm-9"> {{ $ppdb->pendidikanayah }} </dd>
                    <dt class="col-sm-3">Pekerjaan Ayah</dt>
                    <dd class="col-sm-9"> {{ $ppdb->pekerjaanayah }} </dd>
                    <dt class="col-sm-3">Penghasilan Ayah</dt>
                    <dd class="col-sm-9"> {{ $ppdb->penghasilanayah }} </dd>
                </dl>
            </div>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-tittle">Data Ibu Kandung</div>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Nama Ibu Kandung</dt>
                    <dd class="col-sm-9"> {{ $ppdb->namaibu }} </dd>
                    <dt class="col-sm-3">NIK Ibu Kandung</dt>
                    <dd class="col-sm-9"> {{ $ppdb->nikibu }} </dd>
                    <dt class="col-sm-3">Tahun Lahir Ibu</dt>
                    <dd class="col-sm-9"> {{ $ppdb->tahunlahiribu }} </dd>
                    <dt class="col-sm-3">Pendidikan Terakhir Ibu</dt>
                    <dd class="col-sm-9"> {{ $ppdb->pendidikanibu }} </dd>
                    <dt class="col-sm-3">Pekerjaan Ibu</dt>
                    <dd class="col-sm-9"> {{ $ppdb->pekerjaanibu }} </dd>
                    <dt class="col-sm-3">Penghasilan Ibu</dt>
                    <dd class="col-sm-9"> {{ $ppdb->penghasilanibu }} </dd>
                </dl>
            </div>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-tittle">Data Wali</div>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Nama Wali</dt>
                    <dd class="col-sm-9"> {{ $ppdb->namawali }} </dd>
                    <dt class="col-sm-3">NIK</dt>
                    <dd class="col-sm-9"> {{ $ppdb->namawali }} </dd>
                    <dt class="col-sm-3">Pekerjaan Wali</dt>
                    <dd class="col-sm-9"> {{ $ppdb->pekerjaanwali }} </dd>
                    <dt class="col-sm-3">Penghasilan Wali</dt>
                    <dd class="col-sm-9"> {{ $ppdb->penghasilanwali }} </dd>
                </dl>
            </div>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-tittle">Lainnya</div>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Nomor HP/ WA Ayah</dt>
                    <dd class="col-sm-9"> {{ $ppdb->telpayah }} </dd>
                    <dt class="col-sm-3">Nomor HP/ WA Ibu</dt>
                    <dd class="col-sm-9"> {{ $ppdb->telpibu }} </dd>
                    <dt class="col-sm-3">Nomor HP/ WA Wali</dt>
                    <dd class="col-sm-9"> {{ $ppdb->telpwali }} </dd>
                    <dt class="col-sm-3">Tempat Tinggal</dt>
                    <dd class="col-sm-9"> {{ $ppdb->tempattinggal }} </dd>
                    <dt class="col-sm-3">Alumni SMP Wahidiyah</dt>
                    <dd class="col-sm-9"> {{$ppdb->kategorialumni}} </dd>
                    <dt class="col-sm-3">Orang Tua Personil</dt>
                    <dd class="col-sm-9"> {{ $ppdb->katorgtuapersonil }} </dd>
                </dl>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection
