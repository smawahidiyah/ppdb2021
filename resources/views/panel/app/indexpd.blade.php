@extends('panel.base')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
@toastr_css

@endsection

@section('content')

<div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
        <span class="info-box-icon bg-info elevation-1">
            <i class="fas fa-user-plus"></i>
        </span>
        <div class="info-box-content">
            <span class="info-box-text">Total PD terdaftar</span>
            <span class="info-box-number">{{$ppdbs}} Orang</span>
        </div>
    </div>
</div>

<div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
        <span class="info-box-icon bg-warning elevation-1">
            <i class="fas fa-users"></i>
        </span>
        <div class="info-box-content">
            <span class="info-box-text">Total PD terdaftar</span>
            <span class="info-box-number">Laki - laki : {{$countL}}</span>
            <span class="info-box-number">Perempuan   : {{$countP}}</span>
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
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi hapus data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin akan menghapus data tersebut?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger" name="SubmitDeleteProductForm" id="SubmitDeleteProductForm">Hapus data</button>
      </div>
    </div>
  </div>
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
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>JK</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>



@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script>
$(document).ready(function () {
    var deleteID;
    $('body').on('click', '#getDeleteId', function () {
        deleteID = $(this).data('id');
    });
    $('#SubmitDeleteProductForm').click(function(e) {
        e.preventDefault();
        var id = deleteID;
        var route = '{{route('delete', "idpd")}}';
        route = route.replace('idpd', id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: route,
            method: 'get',
            success: function (result) {
                    $('#deleteModal').modal('hide');
                    window.location.reload();
            }
        });
    });
});
</script>
<script>
$(function() {
    $('#datapd').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('getdatapd') !!}',
        lengthMenu: [[100, 150, 200, -1], [100, 150, 200, "Semua"]],
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, orderable: false },
            { data: 'namapd', name: 'namapd' },
            { data: 'nisnpd', name: 'nisnpd' },
            { data: 'kelaminpd', name: 'kelaminpd', orderable: false, searchable: false},
            { data: 'tempatlahirpd', name: 'tempatlahirpd'},
            { data: 'tanggallahirpd', name: 'tanggallahirpd'},
            { data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@toastr_js
@toastr_render
@endsection
