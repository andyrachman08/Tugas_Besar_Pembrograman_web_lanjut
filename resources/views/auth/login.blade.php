@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>SElAMAT DATANG</title>
</head>

<body>
    <div class='login-box'>
        <h1 class="tabel"></h1>
        <table>
            <img src="img/cs.png" class="avatar">
            <h1 class="tabel"> </h1>
            <h1 class="tabele">LOG IN</h1>
            <tr>
                <th>Email</th>
                <td>
                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div>
                                <input class="form-control" type="text" id="email" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                    </div>
                </td>
            </tr>
            <tr class="tabel2">
                <th>Password</th>
                <td>
                    <div>
                        <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                        <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </td>
            </tr>
            <tr class="tabel3">
                <div>
                    <td>
                        <button type="submit" class="btn btn-primary" href="{{ __('register') }}">
                            {{ __('Login') }}
                        </button>
                    </td>
                </div>
                <div>
                    <td>
                        <a class="btn btn-primary" href="{{ __('register') }}" role="button">Register</a>

                    </td>
                </div>

            </tr>

            </form>
        </table>
        


    </div>
    </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>

</html>
@endsection