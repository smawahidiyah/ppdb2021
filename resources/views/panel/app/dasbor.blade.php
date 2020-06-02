@extends('panel.base')
@section('content')
<div class="col-12 col-sm-6 col-md-3">
    <a class="info-box" href="{{route('datapd')}}">
        <span class="info-box-icon bg-info elevation-1">
            <i class="fas fa-users"></i>
        </span>
        <div class="info-box-content">
            <span class="info-box-number" style="color: black;">{{$ppdbs}} orang terdaftar</span>
            <span class="info-box-text" style="color: black;">Lihat semua</span>
        </div>
    </a>
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
@endsection
