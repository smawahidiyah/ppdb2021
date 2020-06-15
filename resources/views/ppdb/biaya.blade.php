<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('css/customs.css')}}">
    <title>PPDB SMA Wahidiyah Kediri 2020</title>
  </head>
  <body style="background-image: url(subtle_surface.png);">

    <div class="header border-bottom border-top">
      <div class="py-3 bg-hijau">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-xs-12">
              <div class="header-logo">
                <a href="#"><img src="{{asset('dikdasmen.png')}}" width="100" class="header-logo d-none d-sm-block"></a>
              </div>
              <div class="header-text">
                <h4 class="text-white">YAYASAN PERJUANGAN WAHIDIYAH DAN PONDOK PESANTREN KEDUNGLO</h4>
                <p class="lead text-white"><strong> Departemen Kebudayaan dan Pendidikan Dasar dan Menengah Wahidiyah</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="container py-5">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <div class="card-tittle">Cek pendaftaran PPDB Online</div>
                </div>
                <div class="card-body d-block">
                        @if(($cek) === TRUE)
                            @foreach($ppdbs as $ppdb)
                            <dl class="row">
                                <dt class="col-md-4">Nama</dt>
                                <dd class="col-md-6">{{$ppdb->namapd}}</dd>
                                <dt class="col-md-4">NISN</dt>
                                <dd class="col-md-6">{{$ppdb->nisnpd}}</dd>
                                <dt class="col-md-4">Tempat, tanggal lahir</dt>
                                <dd class="col-md-6">{{$ppdb->tempatlahirpd}}, {{$ppdb->tanggallahirpd}}</dd>
                            </dl>
                            <hr>
                            <p class="align-middle">Status Pendaftaran : <strong style="color: green;">Sudah Terdaftar </strong><i class="material-icons align-middle" style="color: green;">check_circle_outline</i></p>
                            @endforeach
                        @endif
                </div>
            </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
