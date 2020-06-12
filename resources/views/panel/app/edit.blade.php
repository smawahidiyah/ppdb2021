@extends('panel.base')

@section('content')

<section class="container container-fluid py-5">
    <form method="post" action="{{route('updatepd')}}">
    @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="card-tittle">Form Edit</h3>
            </div>
            <div class="card-body">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                <div class="card card-primary mb-3">
                    <div class="card-header">
                        <div class="card-tittle h4">Data Pribadi Peserta Didik</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="namapd" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="namapd" id="namapd" class="form-control" required value="{{ $ppdbs->namapd }}" style="text-transform:uppercase;">
                                <small class="form-text text-muted">Sesuai dengan dokumen resmi (KK, Akta kelahiran atau ijazah sebelumnya.)</small>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="kelaminpd">Jenis Kelamin</label>
                            <div class="col-sm-2">
                                <select class="form-control" id="kelaminpd" name="kelaminpd">
                                    <option value="L" {{ ($ppdbs->kelaminpd) == "L" ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ ($ppdbs->kelaminpd) == "P" ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nisnpd" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-3">
                                <input type="text" name="nisnpd" id="nisnpd" class="form-control" required value="{{ $ppdbs->nisnpd }}">
                                <small class="form-text text-muted">Sesuai dengan Ijazah sebelumnya atau NISN dari SMP/MTs sekolah asal.</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nikpd" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-3">
                                <input type="text" name="nikpd" id="nikpd" class="form-control" required value="{{ $ppdbs->nikpd }}">
                                <small class="form-text text-muted">Sesuai dengan KK atau KTP</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempatlahirpd" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-5">
                                <input type="text" name="tempatlahirpd" id="tempatlahirpd" class="form-control" required value="{{ $ppdbs->tempatlahirpd }}">
                                <small class="form-text text-muted">Sesuai dengan Akta Lahir atau KK.</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggallahirpd" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggallahirpd" id="tanggallahirpd" class="form-control" required value="{{ $ppdbs->tanggallahirpd }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="regaktalahirpd" class="col-sm-2 col-form-label">No. Registrasi Akta Lahir</label>
                            <div class="col-sm-5">
                                <input type="text" name="regaktalahirpd" id="regaktalahirpd" class="form-control" value="{{ $ppdbs->regaktalahirpd }}">
                                <small class="form-text text-muted">Sesuai dengan Akta Kelahiran</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="agamapd">Agama</label>
                            <div class="col-sm-2">
                                <select class="form-control" id="agamapd" name="agamapd">
                                    <option value="Islam" {{ ($ppdbs->agamapd) == "Islam" ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ ($ppdbs->agamapd) == "Kristen" ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katholik" {{ ($ppdbs->agamapd) == "Katholik" ? 'selected' : '' }}>Khatolik</option>
                                    <option value="Hindu" {{ ($ppdbs->agamapd) == "Hindu" ? 'selected' : '' }}>Hindu</option>
                                    <option value="Budha" {{ ($ppdbs->agamapd) == "Budha" ? 'selected' : '' }}>Budha</option>
                                    <option value="Kong Hu Chu" {{ ($ppdbs->agamapd) == "Kong Hu Chu" ? 'selected' : '' }}>Kong Hu Chu</option>
                                    <option value="Kepercayaan Kepada Tuhan YME" {{ ($ppdbs->agamapd) == "Kepercayaan Kepada Tuhan YME" ? 'selected' : '' }}>Kepercayaan Kepada Tuhan YME</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="disabilitaspd">Berkebutuhan Khusus</label>
                            <div class="col-sm-2">
                                <select class="form-control" id="disabilitaspd" name="disabilitaspd" value="{{ old('disabilitaspd') }}">
                                    <option value="Tidak ada" {{ ($ppdbs->disabilitaspd ) == "Tidak ada" ? 'selected' : '' }}>Tidak ada</option>
                                    <option value="Netra (A)" {{ ($ppdbs->disabilitaspd ) == "Netra (A)" ? 'selected' : '' }}>Netra (A)</option>
                                    <option value="Rungu (B)" {{ ($ppdbs->disabilitaspd ) == "Rungu (B)" ? 'selected' : '' }}>Rungu (B)</option>
                                    <option value="Grahitna Ringan (C)" {{ ($ppdbs->disabilitaspd ) == "Grahitna Ringan (C)" ? 'selected' : '' }}>Grahitna Ringan (C)</option>
                                    <option value="Grahitna Sedang (C1)" {{ ($ppdbs->disabilitaspd ) == "Grahitna Sedang (C1)" ? 'selected' : '' }}>Grahitna Sedang (C1)</option>
                                    <option value="Daksa Ringan (D)" {{ ($ppdbs->disabilitaspd ) == "Daksa Ringan (D)" ? 'selected' : '' }}>Daksa Ringan (D)</option>
                                    <option value="Daksa Sedang (D1)" {{ ($ppdbs->disabilitaspd ) == "Daksa Sedang (D1)" ? 'selected' : '' }}>Daksa Sedang (D1)</option>
                                    <option value="Laras (E)" {{ ($ppdbs->disabilitaspd ) == "Laras (E)" ? 'selected' : '' }}>Laras (E)</option>
                                    <option value="Wicara (F)" {{ ($ppdbs->disabilitaspd ) == "Wicara (F)" ? 'selected' : '' }}>Wicara (F)</option>
                                    <option value="Tuna Ganda (G)" {{ ($ppdbs->disabilitaspd ) == "Tuna Ganda (G)" ? 'selected' : '' }}>Tuna Ganda (G)</option>
                                    <option value="Hiperaktif (H)" {{ ($ppdbs->disabilitaspd ) == "Hiperaktif (H)" ? 'selected' : '' }}>Hiperaktif (H)</option>
                                    <option value="Cerdas Istimewa (I)" {{ ($ppdbs->disabilitaspd ) == "Cerdas Istimewa (I)" ? 'selected' : '' }}>Cerdas Istimewa (I)</option>
                                    <option value="Kesulitan Belajar (J)" {{ ($ppdbs->disabilitaspd ) == "Kesulitan Belajar (J)" ? 'selected' : '' }}>Kesulitan Belajar (J)</option>
                                    <option value="Indigo (K)" {{ ($ppdbs->disabilitaspd ) == "Indigo (K)" ? 'selected' : '' }}>Indigo (K)</option>
                                    <option value="Down Sindrom (L)" {{ ($ppdbs->disabilitaspd ) == "Down Sindrom (L)" ? 'selected' : '' }}>Down Sindrom (L)</option>
                                    <option value="Autis (M)" {{ ($ppdbs->disabilitaspd ) == "Autis (M)" ? 'selected' : '' }}>Autis (M)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamatjlnpd" class="col-sm-2 col-form-label">Alamat Jalan</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamatjlnpd" id="alamatjlnpd" class="form-control" value="{{ $ppdbs->alamatjlnpd }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="provinsi">Provinsi</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="provinsi" name="provinsi">
                                    <option value="Aceh" {{ ($ppdbs->provinsi) == "Aceh" ? 'selected' : '' }}>Aceh</option>
                                    <option value="Bali" {{ ($ppdbs->provinsi) == "Bali" ? 'selected' : '' }}>Bali</option>
                                    <option value="Banten" {{ ($ppdbs->provinsi) == "Banten" ? 'selected' : '' }}>Banten</option>
                                    <option value="Bengkulu" {{ ($ppdbs->provinsi) == "Bengkulu" ? 'selected' : '' }}>Bengkulu</option>
                                    <option value="D.I. Yogyakarta" {{ ($ppdbs->provinsi) == "D.I. Yogyakarta" ? 'selected' : '' }}>D.I. Yogyakarta</option>
                                    <option value="D.K.I. Jakarta" {{ ($ppdbs->provinsi) == "D.K.I. Jakarta" ? 'selected' : '' }}>D.K.I. Jakarta</option>
                                    <option value="Gorontalo" {{ ($ppdbs->provinsi) == "Gorontalo" ? 'selected' : '' }}>Gorontalo</option>
                                    <option value="Jambi" {{ ($ppdbs->provinsi) == "Jambi" ? 'selected' : '' }}>Jambi</option>
                                    <option value="Jawa Barat" {{ ($ppdbs->provinsi) == "Jawa Barat" ? 'selected' : '' }}>Jawa Barat</option>
                                    <option value="Jawa Tengah" {{ ($ppdbs->provinsi) == "Jawa Tengah" ? 'selected' : '' }}>Jawa Tengah</option>
                                    <option value="Jawa Timur" {{ ($ppdbs->provinsi) == "Jawa Timur" ? 'selected' : '' }}>Jawa Timur</option>
                                    <option value="Kalimantan Barat" {{ ($ppdbs->provinsi) == "Kalimantan Barat" ? 'selected' : '' }}>Kalimantan Barat</option>
                                    <option value="Kalimantan Selatan" {{ ($ppdbs->provinsi) == "Kalimantan Selatan" ? 'selected' : '' }}>Kalimantan Selatan</option>
                                    <option value="Kalimantan Tengah" {{ ($ppdbs->provinsi) == "Kalimantan Tengah" ? 'selected' : '' }}>Kalimantan Tengah</option>
                                    <option value="Kalimantan Timur" {{ ($ppdbs->provinsi) == "Kalimantan Timur" ? 'selected' : '' }}>Kalimantan Timur</option>
                                    <option value="Kalimantan Utara" {{ ($ppdbs->provinsi) == "Kalimantan Utara" ? 'selected' : '' }}>Kalimantan Utara</option>
                                    <option value="Kepulauan Bangka Belitung" {{ ($ppdbs->provinsi) == "Kepulauan Bangka Belitung" ? 'selected' : '' }}>Kepulauan Bangka Belitung</option>
                                    <option value="Kepulauan Riau" {{ ($ppdbs->provinsi) == "Kepulauan Riau" ? 'selected' : '' }}>Kepulauan Riau</option>
                                    <option value="Lampung" {{ ($ppdbs->provinsi) == "Lampung" ? 'selected' : '' }}>Lampung</option>
                                    <option value="Maluku " {{ ($ppdbs->provinsi) == "Maluku " ? 'selected' : '' }}>Maluku</option>
                                    <option value="Maluku Utara" {{ ($ppdbs->provinsi) == "Maluku Utara" ? 'selected' : '' }}>Maluku Utara</option>
                                    <option value="Nusa Tenggara Barat" {{ ($ppdbs->provinsi) == "Nusa Tenggara Barat" ? 'selected' : '' }}>Nusa Tenggara Barat</option>
                                    <option value="Nusa Tenggara Timur" {{ ($ppdbs->provinsi) == "Nusa Tenggara Timur" ? 'selected' : '' }}>Nusa Tenggara Timur</option>
                                    <option value="Papua" {{ ($ppdbs->provinsi) == "Papua" ? 'selected' : '' }}>Papua</option>
                                    <option value="Papua Barat" {{ ($ppdbs->provinsi) == "Papua Barat" ? 'selected' : '' }}>Papua Barat</option>
                                    <option value="Riau" {{ ($ppdbs->provinsi) == "Riau" ? 'selected' : '' }}>Riau</option>
                                    <option value="Sulawesi Barat" {{ ($ppdbs->provinsi) == "Sulawesi Barat" ? 'selected' : '' }}>Sulawesi Bara</option>
                                    <option value="Sulawesi Selatan" {{ ($ppdbs->provinsi) == "Sulawesi Selatan" ? 'selected' : '' }}>Sulawesi Selatan</option>
                                    <option value="Sulawesi Tengah" {{ ($ppdbs->provinsi) == "Sulawesi Tengah" ? 'selected' : '' }}>Sulawesi Tengah</option>
                                    <option value="Sulawesi Tenggara" {{ ($ppdbs->provinsi) == "Sulawesi Tenggara" ? 'selected' : '' }}>Sulawesi Tenggara</option>
                                    <option value="Sulawesi Utara" {{ ($ppdbs->provinsi) == "Sulawesi Utara" ? 'selected' : '' }}>Sulawesi Utara</option>
                                    <option value="Sumatera Barat" {{ ($ppdbs->provinsi) == "Sumatera Barat" ? 'selected' : '' }}>Sumatera Barat</option>
                                    <option value="Sumatera Selatan" {{ ($ppdbs->provinsi) == "Sumatera Selatan" ? 'selected' : '' }}>Sumatera Selatan</option>
                                    <option value="Sumatera Utara" {{ ($ppdbs->provinsi) == "Sumatera Utara" ? 'selected' : '' }}>Sumatera Utara</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kabupatenkota" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
                            <div class="col-sm-5">
                                <input type="text" name="kabupatenkota" id="kabupatenkota" class="form-control" required value="{{ $ppdbs->kabupatenkota }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-5">
                                <input type="text" name="kecamatan" id="kecamatan" class="form-control" required value="{{ $ppdbs->kecamatan }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kelurahan" class="col-sm-2 col-form-label">Desa/Kelurahan</label>
                            <div class="col-sm-5">
                                <input type="text" name="kelurahan" id="kelurahan" class="form-control" required value="{{ $ppdbs->kelurahan }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rt" class="col-sm-2 col-form-label">RT</label>
                            <div class="col-sm-2">
                                <input type="text" name="rt" id="rt" class="form-control" value="{{ $ppdbs->rt }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rw" class="col-sm-2 col-form-label">RW</label>
                            <div class="col-sm-2">
                                <input type="text" name="rw" id="rw" class="form-control" value="{{ $ppdbs->rw }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kodepos" class="col-sm-2 col-form-label">Kode POS</label>
                            <div class="col-sm-2">
                                <input type="text" name="kodepos" id="kodepos" class="form-control" value="{{ $ppdbs->kodepos }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="anakkeberapa" class="col-sm-2 col-form-label">Anak ke-berapa (berdasarkan KK)</label>
                            <div class="col-sm-2">
                                <input type="text" name="anakkeberapa" id="anakkeberapa" class="form-control" value="{{ $ppdbs->anakkeberapa }}">
                                <small class="form-text text-muted">Sesuai dengan urutan Kartu Keluarga</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary mb-3">
                    <div class="card-header">
                        <div class="card-tittle h4">Data Ayah Kandung</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="namaayah" class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
                            <div class="col-sm-10">
                                <input type="text" name="namaayah" id="namaayah" class="form-control" required value="{{ $ppdbs->namaayah }}">
                                <small class="form-text text-muted">Sesuai dengan Kartu Keluarga atau Akta Kelahiran (Tanpa Gelar)</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nikayah" class="col-sm-2 col-form-label">NIK Ayah Kandung</label>
                            <div class="col-sm-3">
                                <input type="text" name="nikayah" id="nikayah" class="form-control" value="{{ $ppdbs->nikayah }}">
                                <small class="form-text text-muted">Sesuai dengan Kartu Keluarga atau KTP</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahunlahirayah" class="col-sm-2 col-form-label">Tahun Lahir Ayah</label>
                            <div class="col-sm-2">
                                <input type="text" name="tahunlahirayah" id="tahunlahirayah" class="form-control" value="{{ $ppdbs->tahunlahirayah }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="pendidikanayah">Pendidikan Terakhir Ayah</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="pendidikanayah" name="pendidikanayah">
                                    <option {{ ($ppdbs->pendidikanayah) == "Tidak Sekolah" ? 'selected' : '' }} value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option {{ ($ppdbs->pendidikanayah) == "Putus SD" ? 'selected' : '' }} value="Putus SD">Putus SD</option>
                                    <option {{ ($ppdbs->pendidikanayah) == "SD sederajat" ? 'selected' : '' }} value="SD sederajat">SD sederajat</option>
                                    <option {{ ($ppdbs->pendidikanayah) == "SMP Sederajat" ? 'selected' : '' }} value="SMP Sederajat">SMP Sederajat</option>
                                    <option {{ ($ppdbs->pendidikanayah) == "SMA Sederajat" ? 'selected' : '' }} value="SMA Sederajat">SMA Sederajat</option>
                                    <option {{ ($ppdbs->pendidikanayah) == "D1" ? 'selected' : '' }} value="D1">D1</option>
                                    <option {{ ($ppdbs->pendidikanayah) == "D2" ? 'selected' : '' }} value="D2">D2</option>
                                    <option {{ ($ppdbs->pendidikanayah) == "D3" ? 'selected' : '' }} value="D3">D3</option>
                                    <option {{ ($ppdbs->pendidikanayah) == "D4/S1" ? 'selected' : '' }} value="D4/S1">D4/S1</option>
                                    <option {{ ($ppdbs->pendidikanayah) == "S2" ? 'selected' : '' }} value="S2">S2</option>
                                    <option {{ ($ppdbs->pendidikanayah) == "S3" ? 'selected' : '' }} value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="pekerjaanayah">Pekerjaan Ayah</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="pekerjaanayah" name="pekerjaanayah" >
                                    <option {{ ($ppdbs->pekerjaanayah) == "Tidak Bekerja" ? 'selected' : '' }} value="Tidak Bekerja">Tidak Bekerja</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Nelayan" ? 'selected' : '' }} value="Nelayan">Nelayan</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Petani" ? 'selected' : '' }} value="Petani">Petani</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Peternak" ? 'selected' : '' }} value="Peternak">Peternak</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "PNS/TNI/POLRI" ? 'selected' : '' }} value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Karyawan Swasta" ? 'selected' : '' }} value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Pedagang Kecil" ? 'selected' : '' }} value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Pedagang Besar" ? 'selected' : '' }} value="Pedagang Besar">Pedagang Besar</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Wiraswasta" ? 'selected' : '' }} value="Wiraswasta">Wiraswasta</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Wirausaha" ? 'selected' : '' }} value="Wirausaha">Wirausaha</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Buruh" ? 'selected' : '' }} value="Buruh">Buruh</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Pensiunan" ? 'selected' : '' }} value="Pensiunan">Pensiunan</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Tenaga Kerja Indonesia" ? 'selected' : '' }} value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Tidak dapat Diterapkan" ? 'selected' : '' }} value="Tidak dapat Diterapkan">Tidak dapat Diterapkan</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Sudah Meninggal" ? 'selected' : '' }} value="Sudah Meninggal">Sudah Meninggal</option>
                                    <option {{ ($ppdbs->pekerjaanayah) == "Lainnya" ? 'selected' : '' }} value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="penghasilanayah">Penghasilan Ayah Perbulan</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="penghasilanayah" name="penghasilanayah">
                                    <option {{ ($ppdbs->penghasilananayah) == "Tidak Berpenghasilan" ? 'selected' : '' }} value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                    <option {{ ($ppdbs->penghasilananayah) == "Kurang dari Rp.500.000" ? 'selected' : '' }} value="Kurang dari Rp.500.000">Kurang dari Rp.500.000</option>
                                    <option {{ ($ppdbs->penghasilananayah) == "Kurang dari Rp.1.000.000" ? 'selected' : '' }} value="Kurang dari Rp.1.000.000">Kurang dari Rp.1.000.000</option>
                                    <option {{ ($ppdbs->penghasilananayah) == "Rp.500.000 - Rp.999.999" ? 'selected' : '' }} value="Rp.500.000 - Rp.999.999">Rp.500.000 - Rp.999.999</option>
                                    <option {{ ($ppdbs->penghasilananayah) == "Rp.1.000.000 - Rp.2.000.000" ? 'selected' : '' }} value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                    <option {{ ($ppdbs->penghasilananayah) == "Rp.2.000.000 - Rp.5.000.000" ? 'selected' : '' }} value="Rp.2.000.000 - Rp.5.000.000">Rp.2.000.000 - Rp.5.000.000</option>
                                    <option {{ ($ppdbs->penghasilananayah) == "Rp.5.000.000 - Rp.20.000.000" ? 'selected' : '' }} value="Rp.5.000.000 - Rp.20.000.000">Rp.5.000.000 - Rp.20.000.000</option>
                                    <option {{ ($ppdbs->penghasilananayah) == "Lebih dari Rp.20.000.000" ? 'selected' : '' }} value="Lebih dari Rp.20.000.000">Lebih dari Rp.20.000.000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary mb-3">
                    <div class="card-header">
                        <div class="card-tittle h4">Data Ibu Kandung</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="namaibu" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
                            <div class="col-sm-10">
                                <input type="text" name="namaibu" id="namaibu" class="form-control" required value="{{ $ppdbs->namaibu }}">
                                <small class="form-text text-muted">Sesuai dengan Kartu Keluarga atau Akta Kelahiran (Tanpa Gelar)</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nikibu" class="col-sm-2 col-form-label">NIK Ibu Kandung</label>
                            <div class="col-sm-3">
                                <input type="text" name="nikibu" id="nikibu" class="form-control" value="{{ $ppdbs->nikibu }}">
                                <small class="form-text text-muted">Sesuai dengan Kartu Keluarga atau KTP</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahunlahiribu" class="col-sm-2 col-form-label">Tahun Lahir Ibu</label>
                            <div class="col-sm-2">
                                <input type="text" name="tahunlahiribu" id="tahunlahiribu" class="form-control" value="{{ $ppdbs->tahunlahiribu }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="pendidikanibu">Pendidikan Terakhir Ibu</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="pendidikanibu" name="pendidikanibu">
                                    <option {{ ($ppdbs->pendidikanibu) == "Tidak Sekolah" ? 'selected' : '' }} value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option {{ ($ppdbs->pendidikanibu) == "Putus SD" ? 'selected' : '' }} value="Putus SD">Putus SD</option>
                                    <option {{ ($ppdbs->pendidikanibu) == "SD sederajat" ? 'selected' : '' }} value="SD sederajat">SD sederajat</option>
                                    <option {{ ($ppdbs->pendidikanibu) == "SMP Sederajat" ? 'selected' : '' }} value="SMP Sederajat">SMP Sederajat</option>
                                    <option {{ ($ppdbs->pendidikanibu) == "SMA Sederajat" ? 'selected' : '' }} value="SMA Sederajat">SMA Sederajat</option>
                                    <option {{ ($ppdbs->pendidikanibu) == "D1" ? 'selected' : '' }} value="D1">D1</option>
                                    <option {{ ($ppdbs->pendidikanibu) == "D2" ? 'selected' : '' }} value="D2">D2</option>
                                    <option {{ ($ppdbs->pendidikanibu) == "D3" ? 'selected' : '' }} value="D3">D3</option>
                                    <option {{ ($ppdbs->pendidikanibu) == "D4/S1" ? 'selected' : '' }} value="D4/S1">D4/S1</option>
                                    <option {{ ($ppdbs->pendidikanibu) == "S2" ? 'selected' : '' }} value="S2">S2</option>
                                    <option {{ ($ppdbs->pendidikanibu) == "S3" ? 'selected' : '' }} value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="pekerjaanibu">Pekerjaan Ibu</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="pekerjaanibu" name="pekerjaanibu" >
                                    <option {{ ($ppdbs->pekerjaanibu) == "Tidak Bekerja" ? 'selected' : '' }} value="Tidak Bekerja">Tidak Bekerja</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Nelayan" ? 'selected' : '' }} value="Nelayan">Nelayan</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Petani" ? 'selected' : '' }} value="Petani">Petani</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Peternak" ? 'selected' : '' }} value="Peternak">Peternak</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "PNS/TNI/POLRI" ? 'selected' : '' }} value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Karyawan Swasta" ? 'selected' : '' }} value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Pedagang Kecil" ? 'selected' : '' }} value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Pedagang Besar" ? 'selected' : '' }} value="Pedagang Besar">Pedagang Besar</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Wiraswasta" ? 'selected' : '' }} value="Wiraswasta">Wiraswasta</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Wirausaha" ? 'selected' : '' }} value="Wirausaha">Wirausaha</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Buruh" ? 'selected' : '' }} value="Buruh">Buruh</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Pensiunan" ? 'selected' : '' }} value="Pensiunan">Pensiunan</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Tenaga Kerja Indonesia" ? 'selected' : '' }} value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Tidak dapat Diterapkan" ? 'selected' : '' }} value="Tidak dapat Diterapkan">Tidak dapat Diterapkan</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Sudah Meninggal" ? 'selected' : '' }} value="Sudah Meninggal">Sudah Meninggal</option>
                                    <option {{ ($ppdbs->pekerjaanibu) == "Lainnya" ? 'selected' : '' }} value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="penghasilanibu">Penghasilan Ibu Perbulan</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="penghasilanibu" name="penghasilanibu">
                                    <option {{ ($ppdbs->penghasilananibu) == "Tidak Berpenghasilan" ? 'selected' : '' }} value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                    <option {{ ($ppdbs->penghasilananibu) == "Kurang dari Rp.500.000" ? 'selected' : '' }} value="Kurang dari Rp.500.000">Kurang dari Rp.500.000</option>
                                    <option {{ ($ppdbs->penghasilananibu) == "Kurang dari Rp.1.000.000" ? 'selected' : '' }} value="Kurang dari Rp.1.000.000">Kurang dari Rp.1.000.000</option>
                                    <option {{ ($ppdbs->penghasilananibu) == "Rp.500.000 - Rp.999.999" ? 'selected' : '' }} value="Rp.500.000 - Rp.999.999">Rp.500.000 - Rp.999.999</option>
                                    <option {{ ($ppdbs->penghasilananibu) == "Rp.1.000.000 - Rp.2.000.000" ? 'selected' : '' }} value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                    <option {{ ($ppdbs->penghasilananibu) == "Rp.2.000.000 - Rp.5.000.000" ? 'selected' : '' }} value="Rp.2.000.000 - Rp.5.000.000">Rp.2.000.000 - Rp.5.000.000</option>
                                    <option {{ ($ppdbs->penghasilananibu) == "Rp.5.000.000 - Rp.20.000.000" ? 'selected' : '' }} value="Rp.5.000.000 - Rp.20.000.000">Rp.5.000.000 - Rp.20.000.000</option>
                                    <option {{ ($ppdbs->penghasilananibu) == "Lebih dari Rp.20.000.000" ? 'selected' : '' }} value="Lebih dari Rp.20.000.000">Lebih dari Rp.20.000.000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary mb-3">
                    <div class="card-header">
                        <div class="card-tittle h4">Data Wali</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="namawali" class="col-sm-2 col-form-label">Nama Wali</label>
                            <div class="col-sm-10">
                                <input type="text" name="namawali" id="namawali" class="form-control" value="{{ $ppdbs->namawali }}">
                                <small class="form-text text-muted">Sesuai dengan Kartu Keluarga atau Akta Kelahiran (Tanpa Gelar)</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nikwali" class="col-sm-2 col-form-label">NIK Wali</label>
                            <div class="col-sm-3">
                                <input type="text" name="nikwali" id="nikwali" class="form-control" value="{{ $ppdbs->nikwali }}">
                                <small class="form-text text-muted">Sesuai dengan Kartu Keluarga atau KTP</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="pekerjaanwali">Pekerjaan Wali</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="pekerjaanwali" name="pekerjaanwali" >
                                    <option {{ ($ppdbs->pekerjaanwali) == "Tidak Bekerja" ? 'selected' : '' }} value="Tidak Bekerja">Tidak Bekerja</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Nelayan" ? 'selected' : '' }} value="Nelayan">Nelayan</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Petani" ? 'selected' : '' }} value="Petani">Petani</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Peternak" ? 'selected' : '' }} value="Peternak">Peternak</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "PNS/TNI/POLRI" ? 'selected' : '' }} value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Karyawan Swasta" ? 'selected' : '' }} value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Pedagang Kecil" ? 'selected' : '' }} value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Pedagang Besar" ? 'selected' : '' }} value="Pedagang Besar">Pedagang Besar</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Wiraswasta" ? 'selected' : '' }} value="Wiraswasta">Wiraswasta</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Wirausaha" ? 'selected' : '' }} value="Wirausaha">Wirausaha</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Buruh" ? 'selected' : '' }} value="Buruh">Buruh</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Pensiunan" ? 'selected' : '' }} value="Pensiunan">Pensiunan</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Tenaga Kerja Indonesia" ? 'selected' : '' }} value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Tidak dapat Diterapkan" ? 'selected' : '' }} value="Tidak dapat Diterapkan">Tidak dapat Diterapkan</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Sudah Meninggal" ? 'selected' : '' }} value="Sudah Meninggal">Sudah Meninggal</option>
                                    <option {{ ($ppdbs->pekerjaanwali) == "Lainnya" ? 'selected' : '' }} value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="penghasilanwali">Penghasilan Wali Perbulan</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="penghasilanwali" name="penghasilanwali">
                                    <option {{ ($ppdbs->penghasilananwali) == "Tidak Berpenghasilan" ? 'selected' : '' }} value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                    <option {{ ($ppdbs->penghasilananwali) == "Kurang dari Rp.500.000" ? 'selected' : '' }} value="Kurang dari Rp.500.000">Kurang dari Rp.500.000</option>
                                    <option {{ ($ppdbs->penghasilananwali) == "Kurang dari Rp.1.000.000" ? 'selected' : '' }} value="Kurang dari Rp.1.000.000">Kurang dari Rp.1.000.000</option>
                                    <option {{ ($ppdbs->penghasilananwali) == "Rp.500.000 - Rp.999.999" ? 'selected' : '' }} value="Rp.500.000 - Rp.999.999">Rp.500.000 - Rp.999.999</option>
                                    <option {{ ($ppdbs->penghasilananwali) == "Rp.1.000.000 - Rp.2.000.000" ? 'selected' : '' }} value="Rp.1.000.000 - Rp.2.000.000">Rp.1.000.000 - Rp.2.000.000</option>
                                    <option {{ ($ppdbs->penghasilananwali) == "Rp.2.000.000 - Rp.5.000.000" ? 'selected' : '' }} value="Rp.2.000.000 - Rp.5.000.000">Rp.2.000.000 - Rp.5.000.000</option>
                                    <option {{ ($ppdbs->penghasilananwali) == "Rp.5.000.000 - Rp.20.000.000" ? 'selected' : '' }} value="Rp.5.000.000 - Rp.20.000.000">Rp.5.000.000 - Rp.20.000.000</option>
                                    <option {{ ($ppdbs->penghasilananwali) == "Lebih dari Rp.20.000.000" ? 'selected' : '' }} value="Lebih dari Rp.20.000.000">Lebih dari Rp.20.000.000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary mb-3">
                    <div class="card-header">
                        <div class="card-tittle h4">Data lainnya</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="telpayah">No HP/WA Ayah</label>
                            <div class="col-sm-4">
                                <input type="text" name="telpayah" id="telpayah" class="form-control" value="{{ $ppdbs->telpayah }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="telpibu">No HP/WA Ibu</label>
                            <div class="col-sm-4">
                                <input type="text" name="telpibu" id="telpibu" class="form-control" value="{{ $ppdbs->telpibu }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="telpwali">No HP/WA Wali</label>
                            <div class="col-sm-4">
                                <input type="text" name="telpwali" id="telpwali" class="form-control" value="{{ $ppdbs->telpwali }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="tempattinggal">Tempat tinggal ketika Sekolah di SMA Wahidiyah</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="tempattinggal" name="tempattinggal">
                                    <option {{ ($ppdbs->tempattinggal ) == "0" ? 'selected' : '' }} value="0">Tinggal Bersama Orang Tua</option>
                                    <option {{ ($ppdbs->tempattinggal ) == "1" ? 'selected' : '' }} value="1">Tinggal di Asrama PonPes Kedunglo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="kategorialumni">Apakah Alumni SMP Wahidiyah</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="kategorialumni" name="kategorialumni">
                                    <option {{ ($ppdbs->kategorialumni ) == "0" ? 'selected' : '' }} value="0">Bukan Alumni SMP Wahidiyah</option>
                                    <option {{ ($ppdbs->kategorialumni ) == "1" ? 'selected' : '' }} value="1">Alumni SMP Wahidiyah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="katorgtuapersonil">Apakah Orang Tua Personil Yayasan Perjuangan Wahidiyah Pusat</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="katorgtuapersonil" name="katorgtuapersonil" >
                                    <option {{ ($ppdbs->katorgtuapersonil ) == "0" ? 'selected' : '' }} value="0">Bukan Personil</option>
                                    <option {{ ($ppdbs->katorgtuapersonil ) == "1" ? 'selected' : '' }} value="1">Pernosil ( 5 s.d. 10 Thn masa kerja)</option>
                                    <option {{ ($ppdbs->katorgtuapersonil ) == "2" ? 'selected' : '' }} value="2">Pernosil ( Lebih dari 10 Thn masa kerja)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-lg btn-primary">Simpan Perubahan Data</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection
