<?php

namespace App\Exports;

use App\Ppdb;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PpdbExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return Ppdb::all();
    }

    public function headings(): array
    {
        return [
            'No.',
            'Nama Lengkap',
            'Jenis Kelamin',
            'NISN',
            'NIK',
            'Tempat Lahir',
            'Tanggal Lahir',
            'No. Akta Lahir',
            'Agama',
            'Kebutuhan Khusus',
            'Alamat Jalan',
            'rt',
            'rw',
            'kelurahan',
            'kecamatan',
            'kabupatenkota',
            'provinsi',
            'kodepos',
            'Anak Ke',
            'Asal Sekolah',
            'No. KIP',
            'Nama Ayah',
            'NIK Ayah',
            'Tahun Lahir Ayah',
            'Pendidikan Ayah',
            'Pekerjaan Ayah',
            'Penghasilan Ayah',
            'Nama Ibu',
            'NIK Ibu',
            'Tahun Lahir Ibu',
            'Pendidikan Ibu',
            'Pekerjaan Ibu',
            'Penghasilan Ibu',
            'Nama Wali',
            'NIK Wali',
            'Pekerjaan Wali',
            'Penghasilan Wali',
            'No. Telp Ayah',
            'No. Telp Ibu',
            'No. Telp Wali',
            'Tempat Tinggal',
            'Alumni',
            'Org Tua Personil'
        ];
    }
}
