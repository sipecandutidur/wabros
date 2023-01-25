@extends('layouts.mainlogin')


@section('content')
<div class="container">
    <div class="login-container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-9 lfh">


                <div class="card login-box">
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Sign In</h5>
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('username') is-invalid

                                @enderror" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username" autofocus required value="{{ old('username') }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ '$message' }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid

                                @enderror" name="password" id="password" placeholder="Password" required>
                                <div class="invalid-feedback">
                                    {{ '$message' }}
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox form-group">
                                <input type="checkbox" class="custom-control-input" id="login">
                                {{-- <label class="custom-control-label" for="exampleCheck1">Remember</label> --}}
                            </div>
                            <a href="#" class="float-left forgot-link">Forgot password?</a>
                            <button class="btn btn-primary float-right m-l-xxs" type="submit">Sign In</button>
                            <a href="/register" class="btn btn-secondary float-right">Sign Up</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
