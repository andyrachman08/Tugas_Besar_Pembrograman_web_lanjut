@extends('layouts.app')

@section('content')
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
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
                        <a class="nav-link active" aria-current="page" href="{{ __('Profile') }}">Profile</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        <div class="wrapper">

                            <div class="container">
                                <div class="photo-container" text-align:center>

                                    <img src="img/akun.png" alt="">

                                    <h3 class="title">{{ Auth::user()->name }}</h3>
                                    <p class="category">{{ Auth::user()->email }}</p>
                                </div>
                                <table class="table table-dark">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr class="table-active">

                                        </tr>

                                        <tr>

                                            <td colspan="2" class="table-active">Nama </td>
                                            <td> {{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2" class="table-active">Email </td>
                                            <td> {{ Auth::user()->email }}</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2" class="table-active">Alamat </td>
                                            <td> {{ Auth::user()->alamat }}</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2" class="table-active">Telepon </td>
                                            <td> {{ Auth::user()->telepon }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-secondary"><a href="{{ __('edit') }}" class="warna">Ubah data</a></button>
                                <div class="section">
                                    <div class="container">
                                        <div class="button-container">
                                            <a href="https://www.instagram.com/andyrchm/" class="btn btn-primary btn-round btn-lg">Follow</a>

                                            <a href="https://www.instagram.com/andyrchm/" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
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