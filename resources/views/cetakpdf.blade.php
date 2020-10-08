<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Content Row -->

    <div class="container-fluid">

        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="row">
                <div class="col">
                    <h4 class="m-0 font-weight-bold text-primary">Data Barang</h4>
                    <h6 style="margin-top: 15px;">Tanggal Barang : {{date('d-m-Y')}}</h6>
                    <h6>Nama Petugas : {{ Auth::user()->name }}</h6>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" cellspacing="0" width=100%" border="1">
                    <tr>
                        <th>Id Barang</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Upload</th>
                        <th>Harga Awal</th>
                        <th>Deskripsi Barang</th>
                        <th>Status</th>
                        <th>Foto Barang</th>
                    </tr>
                    @foreach($barangs as $b)
                    <tr>
                        <th>{{$b->id_barang}}</th>
                        <th>{{$b->nama_barang}}</th>
                        <th>{{$b->tanggal_upload}}</th>
                        <th>{{$b->harga_awal}}</th>
                        <th>{{$b->deskripsi_barang}}</th>
                        <th>{{$b->status}}</th>
                        <th align="center"=><img style="width: 20%;" src="gambarbarang/{{$b->foto_barang}}"></th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>

</html>
