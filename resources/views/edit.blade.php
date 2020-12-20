@extends('layouts.app')

@section('content')
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style3.css">
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
                        <a class="nav-link active" aria-current="page" href="#">Data Karyawan</a>
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
        <div class="row justify-content-center">
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img src="img/akun.png" alt=""><span class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
                    </div>

                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <form action="/update" method="POST">
                                @csrf
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control @error('name') is-invaled @enderror " value="{{ Auth::user()->name }}" name="name"></div>

                                </div>
                                <div class="row mt-3">
                                    <input type="hidden" value="{{ Auth::id() }}" name="id">
                                    <div class="col-md-12"><label class="labels">Telepon</label><input type="text" class="form-control @error('telepon') is-invaled @enderror " value="{{ Auth::user()->telepon }}" name="telepon"></div>
                                    <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control @error('alamat') is-invaled @enderror " value="{{ Auth::user()->alamat }}" name="alamat"></div>
                                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control @error('email') is-invaled @enderror " value="{{ Auth::user()->email }}" name="email"></div>
                                    <!-- <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control @error('password') is-invaled @enderror " value="{{ Auth::user()->password }}"  ></div> -->
                                </div>
                                <table>
                                    <tr>

                                        <th>
                                            <div>
                                                <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                                            </div>
                                        </th>




                            </form>
                            <th>
                                <div>
                                    <a href="{{ __('profile') }}"><button class="btn btn-primary profile-button" type="button">Back</button></a>
                                </div>
                            </th>
                            </tr>
                            </table>

                        </div>
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