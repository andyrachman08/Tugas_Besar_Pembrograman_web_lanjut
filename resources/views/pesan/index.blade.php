@extends('layouts.app')

@section('content')
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/public/style.css">
    <link rel="stylesheet" type="text/css" href="/public/style3.css">
    <title>SElAMAT DATANG</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 mt-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('produk/'.$barang->gambar )}}" class="rounded mx-auto d-block" width="100%" alt="">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h2>{{ $barang->nama_barang }}</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($barang->harga) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td>{{ number_format($barang->stok) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td>{{ $barang->keterangan }}</td>
                                        </tr>

                                        <tr>
                                            <td>Jumlah Pesan</td>
                                            <td>:</td>
                                            <td>
                                                <form method="post" action="{{ url('pesan') }}/{{ $barang->id }}">
                                                    @csrf
                                                    <input type="text" name="jumlah_pesan" class="form-control" required="">
                                                    <table>
                                                        <tr>
                                                        
                                                            <th>
                                                              <h1></h1>
                                                                    <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                                                                
                                                            </th>
                                                            <th>
                                                                
                                                                    <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                                                
                                                            </th>
                                                        </tr>
                                                    </table>


                                                </form>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</head>

</html>
@endsection