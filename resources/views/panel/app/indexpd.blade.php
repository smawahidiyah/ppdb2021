@extends('panel.base')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.4/css/responsive.bootstrap4.min.css">

@endsection

@section('content')

<div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
        <span class="info-box-icon bg-info elevation-1">
            <i class="fas fa-users"></i>
        </span>
        <div class="info-box-content">
            <span class="info-box-text">Total PD terdaftar</span>
            <span class="info-box-number">{{$ppdbs}} Orang</span>
        </div>
    </div>
</div>

<div class="col-12 col-sm-6 col-md-3">
    <a class="info-box" href="{{route('export')}}">
        <span class="info-box-icon bg-success elevation-1">
            <i class="fas fa-download"></i>
        </span>
        <div class="info-box-content">
            <span class="info-box-text"  style="color: black;">Download ke Excel</span>
        </div>
    </a>
</div>

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="card-tittle">Data PPDB</div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered dt-responsive nowrap" id="datapd">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>NISN</th>
                        <th>Nama Ayah</th>
                        <th>No. Telp Ayah</th>
                        <th>Nama Ibu</th>
                        <th>No. Telp Ibu</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection


@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.4/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.4/js/responsive.bootstrap4.min.js"></script>
<script>
$(function() {
    $('#datapd').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('getdatapd') !!}',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, orderable: false },
            { data: 'namapd', name: 'namapd' },
            { data: 'nisnpd', name: 'nisnpd' },
            { data: 'namaayah', name: 'namaayah'},
            { data: 'telpayah', name: 'telpayah'},
            { data: 'namaibu', name: 'namaibu'},
            { data: 'telpibu', name: 'telpibu'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>

@endsection
