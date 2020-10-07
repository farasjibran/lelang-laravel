<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- parcial css -->
    @extends('parcial.css')

</head>

<body style="background-color: #499bea;">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"><img src="{{ asset('authbg/bg.gif')}}" style="width: 450px; margin-top: 30%;"></div>
                    <div class="col-lg-7" style="padding-top: 10%; padding-bottom: 6%;">
                        <div class="p-5" style="padding-top: 100%;">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" style="border-radius: 10px;" class="form-control form-control-user @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" name="name" autofocus id="exampleInputUsername" placeholder="Name User">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" style="border-radius: 10px;" class="form-control form-control-user @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" name="email" id="exampleInputEmail" placeholder="Email Address">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" style="border-radius: 10px;" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="exampleInputPassword" placeholder="Password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" style="border-radius: 10px;" class="form-control form-control-user" required autocomplete="new-password" name="password_confirmation" id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-user btn-block text-white" style="background-color: blue; border-radius: 10px;">
                                    Register
                                </button>
                            </form>
                            <div class="text-center" style="margin-top: 5%;">
                                <a class="small" href="{{ route('login')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- parcial js -->
    @extends('parcial.js')

</body>

</html>
