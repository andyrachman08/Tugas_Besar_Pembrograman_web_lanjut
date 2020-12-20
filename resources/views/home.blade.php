@extends('layouts.app')

@section('content')
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>SElAMAT DATANG</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Coffe Station
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ __('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('check-out') }}">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ __('profile') }}">Profile</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="container">


                    <div class="row justify-content- center ">
                        <div class="col-md-12 mb-42">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/cs.png"  class=" w-30" width="700" height="700" alt="..." style="display: block; margin: auto;margin-top: 20px; margin-bottom: 20px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/cs.png" class=" w-30" width="700" height="700" alt="..." style="display: block; margin: auto;margin-top: 20px; margin-bottom: 20px;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/cs.png" class=" w-30" width="700" height="700" alt="..." style="display: block; margin: auto;margin-top: 20px;margin-bottom: 20px;">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                @foreach($barangs as $barang)

                <div class="col-md-4">
                    <div class="card">
                        <div class="produke">
                        <img src="{{asset('produk/'.$barang->gambar )}}" class="card-img-top" alt="...">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                            <p class="card-text">
                                <strong>Harga :</strong> Rp. {{ number_format($barang->harga)}} <br>
                                <strong>Deskripsi :</strong> {{ $barang->keterangan }} <br>

                            </p>
                            <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Beli </a>
                        </div>
                    </div>
                    <div></div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</body>
</head>

</html>
@endsection