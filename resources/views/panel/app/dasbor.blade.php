@extends('panel.base')
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
@endsection
