@extends('ppdb.base')

@section('content')

<div class="container">
    <div class="py-3">
        <h2 class="text-center">Pendaftaran Peserta Didik Baru SMA Wahidiyah Kediri Tahun Pelajaran 2020/2021</h2>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<section class="container container-fluid py-5">
    <form method="post" action="{{route('postregister')}}">
    @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="card-tittle">Form Pendaftaran</h3>
            </div>
            <div class="card-body">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-tittle h4">Data Pribadi</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="namapd" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="namapd" id="namapd" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="kelaminpd">Jenis Kelamin</label>
                            <div class="col-sm-2">
                                <select class="form-control" id="kelaminpd" name="kelaminpd">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nisnpd" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-3">
                                <input type="text" name="nisnpd" id="nisnpd" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nikpd" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-3">
                                <input type="text" name="nikpd" id="nikpd" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempatlahirpd" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-5">
                                <input type="text" name="tempatlahirpd" id="tempatlahirpd" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggallahirpd" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggallahirpd" id="tanggallahirpd" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="regaktalahirpd" class="col-sm-2 col-form-label">No. Registrasi Akta Lahir</label>
                            <div class="col-sm-5">
                                <input type="text" name="regaktalahirpd" id="regaktalahirpd" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="agamapd">Agama</label>
                            <div class="col-sm-2">
                                <select class="form-control" id="agamapd" name="agamapd">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katholik">Khatolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                                    <option value="Kepercayaan Kepada Tuhan YME">Kepercayaan Kepada Tuhan YME</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="disabilitaspd">Berkebutuhan Khusus</label>
                            <div class="col-sm-2">
                                <select class="form-control" id="disabilitaspd" name="disabilitaspd">
                                    <option value="Tidak ada">Tidak ada</option>
                                    <option value="Netra (A)">Netra (A)</option>
                                    <option value="Rungu (B)">Rungu (B)</option>
                                    <option value="Grahitna Ringan (C)">Grahitna Ringan (C)</option>
                                    <option value="Grahitna Sedang (C1)">Grahitna Sedang (C1)</option>
                                    <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
                                    <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
                                    <option value="Laras (E)">Laras (E)</option>
                                    <option value="Wicara (F)">Wicara (F)</option>
                                    <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
                                    <option value="Hiperaktif (H)">Hiperaktif (H)</option>
                                    <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
                                    <option value="Kesulitan Belajar (J)">Kesulitan Belajar (J)</option>
                                    <option value="Indigo (K)">Indigo (K)</option>
                                    <option value="Down Sindrom (L)">Down Sindrom (L)</option>
                                    <option value="Autis (M)">Autis (M)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamatjlnpd" class="col-sm-2 col-form-label">Alamat Jalan</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamatjlnpd" id="alamatjlnpd" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="provinsi">Provinsi</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="provinsi" name="provinsi">
                                    <option value="Aceh">Aceh</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Bengkulu">Bengkulu</option>
                                    <option value="D.I. Yogyakarta">D.I. Yogyakarta</option>
                                    <option value="D.K.I. Jakarta">D.K.I. Jakarta</option>
                                    <option value="Gorontalo">Gorontalo</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                    <option value="Jawa Timur" selected>Jawa Timur</option>
                                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                                    <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                                    <option value="Lampung">Lampung</option>
                                    <option value="Maluku">Maluku</option>
                                    <option value="Maluku Utara">Maluku Utara</option>
                                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                    <option value="Papua">Papua</option>
                                    <option value="Papua Barat">Papua Barat</option>
                                    <option value="Riau">Riau</option>
                                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                                    <option value="Sumatera Barat">Sumatera Barat</option>
                                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kabupatenkota" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
                            <div class="col-sm-5">
                                <input type="text" name="kabupatenkota" id="kabupatenkota" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-5">
                                <input type="text" name="kecamatan" id="kecamatan" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kelurahan" class="col-sm-2 col-form-label">Desa/Kelurahan</label>
                            <div class="col-sm-5">
                                <input type="text" name="kelurahan" id="kelurahan" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rt" class="col-sm-2 col-form-label">RT</label>
                            <div class="col-sm-2">
                                <input type="text" name="rt" id="rt" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rw" class="col-sm-2 col-form-label">RW</label>
                            <div class="col-sm-2">
                                <input type="text" name="rw" id="rw" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kodepos" class="col-sm-2 col-form-label">Kode POS</label>
                            <div class="col-sm-2">
                                <input type="text" name="kodepos" id="kodepos" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="anakkeberapa" class="col-sm-2 col-form-label">Anak ke-berapa (berdasarkan KK)</label>
                            <div class="col-sm-2">
                                <input type="text" name="anakkeberapa" id="anakkeberapa" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-tittle h4">Data Ayah Kandung</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="namaayah" class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
                            <div class="col-sm-10">
                                <input type="text" name="namaayah" id="namaayah" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nikayah" class="col-sm-2 col-form-label">NIK Ayah Kandung</label>
                            <div class="col-sm-3">
                                <input type="text" name="nikayah" id="nikayah" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahunlahirayah" class="col-sm-2 col-form-label">Tahun Lahir Ayah</label>
                            <div class="col-sm-2">
                                <input type="text" name="tahunlahirayah" id="tahunlahirayah" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="pendidikanayah">Pendidikan Terakhir Ayah</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="pendidikanayah" name="pendidikanayah">
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="Putus SD">Putus SD</option>
                                    <option value="SD sederajat">SD sederajat</option>
                                    <option value="SMP Sederajat">SMP Sederajat</option>
                                    <option value="SMA Sederajat">SMA Sederajat</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4/S1">D4/S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="pekerjaanayah">Pekerjaan Ayah</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="pekerjaanayah" name="pekerjaanayah">
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Peternak">Peternak</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option value="Pedagang Besar">Pedagang Besar</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Wirausaha">Wirausaha</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                                    <option value="Tidak dapat Diterapkan">Tidak dapat Diterapkan</option>
                                    <option value="Sudah Meninggal">Sudah Meninggal</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="penghasilanayah">Penghasilan Ayah Perbulan</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="penghasilanayah" name="penghasilanayah">
                                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                    <option value="Kurang dari Rp.500.000">Kurang dari Rp.500.000</option>
                                    <option value="Kurang dari Rp.1.000.000">Kurang dari Rp.1.000.000</option>
                                    <option value="Rp.500.000 - Rp.999.999">Rp.500.000 - Rp.999.999</option>
                                    <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                    <option value="Rp.2.000.000 - Rp.5.000.000">Rp.2.000.000 - Rp.5.000.000</option>
                                    <option value="Rp.5.000.000 - Rp.20.000.000">Rp.5.000.000 - Rp.20.000.000</option>
                                    <option value="Lebih dari Rp.20.000.000">Lebih dari Rp.20.000.000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-tittle h4">Data Ibu Kandung</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="namaibu" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
                            <div class="col-sm-10">
                                <input type="text" name="namaibu" id="namaibu" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nikibu" class="col-sm-2 col-form-label">NIK Ibu Kandung</label>
                            <div class="col-sm-3">
                                <input type="text" name="nikibu" id="nikibu" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahunlahiribu" class="col-sm-2 col-form-label">Tahun Lahir Ibu</label>
                            <div class="col-sm-2">
                                <input type="text" name="tahunlahiribu" id="tahunlahiribu" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="pendidikanibu">Pendidikan Terakhir Ibu</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="pendidikanibu" name="pendidikanibu">
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="Putus SD">Putus SD</option>
                                    <option value="SD sederajat">SD sederajat</option>
                                    <option value="SMP Sederajat">SMP Sederajat</option>
                                    <option value="SMA Sederajat">SMA Sederajat</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4/S1">D4/S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="pekerjaanibu">Pekerjaan Ibu</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="pekerjaanibu" name="pekerjaanibu">
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Peternak">Peternak</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option value="Pedagang Besar">Pedagang Besar</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Wirausaha">Wirausaha</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                                    <option value="Tidak dapat Diterapkan">Tidak dapat Diterapkan</option>
                                    <option value="Sudah Meninggal">Sudah Meninggal</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="penghasilanibu">Penghasilan Ibu Perbulan</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="penghasilanibu" name="penghasilanibu">
                                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                    <option value="Kurang dari Rp.500.000">Kurang dari Rp.500.000</option>
                                    <option value="Kurang dari Rp.1.000.000">Kurang dari Rp.1.000.000</option>
                                    <option value="Rp.500.000 - Rp.999.999">Rp.500.000 - Rp.999.999</option>
                                    <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                    <option value="Rp.2.000.000 - Rp.5.000.000">Rp.2.000.000 - Rp.5.000.000</option>
                                    <option value="Rp.5.000.000 - Rp.20.000.000">Rp.5.000.000 - Rp.20.000.000</option>
                                    <option value="Lebih dari Rp.20.000.000">Lebih dari Rp.20.000.000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-tittle h4">Data Wali</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="namawali" class="col-sm-2 col-form-label">Nama Wali</label>
                            <div class="col-sm-10">
                                <input type="text" name="namawali" id="namawali" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nikwali" class="col-sm-2 col-form-label">NIK Wali</label>
                            <div class="col-sm-3">
                                <input type="text" name="nikwali" id="nikwali" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="pekerjaanwali">Pekerjaan wali</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="pekerjaanwali" name="pekerjaanwali">
                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Peternak">Peternak</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option value="Pedagang Besar">Pedagang Besar</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Wirausaha">Wirausaha</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                                    <option value="Tidak dapat Diterapkan">Tidak dapat Diterapkan</option>
                                    <option value="Sudah Meninggal">Sudah Meninggal</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="penghasilanwali">Penghasilan Wali</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="penghasilanwali" name="penghasilanwali">
                                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                    <option value="Kurang dari Rp.500.000">Kurang dari Rp.500.000</option>
                                    <option value="Kurang dari Rp.1.000.000">Kurang dari Rp.1.000.000</option>
                                    <option value="Rp.500.000 - Rp.999.999">Rp.500.000 - Rp.999.999</option>
                                    <option value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                    <option value="Rp.2.000.000 - Rp.5.000.000">Rp.2.000.000 - Rp.5.000.000</option>
                                    <option value="Rp.5.000.000 - Rp.20.000.000">Rp.5.000.000 - Rp.20.000.000</option>
                                    <option value="Lebih dari Rp.20.000.000">Lebih dari Rp.20.000.000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="card-tittle h4">Data lainnya</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="telpayah">No HP/WA Ayah</label>
                            <div class="col-sm-4">
                                <input type="text" name="telpayah" id="telpayah" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="telpibu">No HP/WA Ibu</label>
                            <div class="col-sm-4">
                                <input type="text" name="telpibu" id="telpibu" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="telpwali">No HP/WA Wali</label>
                            <div class="col-sm-4">
                                <input type="text" name="telpwali" id="telpwali" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="tempattinggal">Tempat tinggal ketika Sekolah di SMA Wahidiyah</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="tempattinggal" name="tempattinggal">
                                    <option value="0">Tinggal Bersama Orang Tua</option>
                                    <option value="1">Tinggal di Asrama PonPes Kedunglo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="kategorialumni">Apakah Alumni SMP Wahidiyah</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="kategorialumni" name="kategorialumni">
                                    <option value="0">Bukan Alumni SMP Wahidiyah</option>
                                    <option value="1">Alumni SMP Wahidiyah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="katorgtuapersonil">Apakah Orang Tua Personil Yayasan Perjuangan Wahidiyah Pusat</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="katorgtuapersonil" name="katorgtuapersonil">
                                    <option value="0">Bukan Personil</option>
                                    <option value="1">Pernosil ( 5 s.d. 10 Thn masa kerja)</option>
                                    <option value="2">Pernosil ( Lebih dari 10 Thn masa kerja)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
        </div>
    </form>
</section>

@endsection
