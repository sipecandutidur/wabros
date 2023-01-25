@extends('layouts.mainlogin')

@section('content')
<div class="container">
    <div class="login-container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-9 lfh">
                <div class="card login-box">
                    <div class="card-body">
                        <h5 class="card-title">Sign Up</h5>
                        <form action="/register" method="POST" >
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid

                                @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <input type="email" class="form-control" id="email2" aria-describedby="emailHelp2" placeholder="Confirm email">
                            </div> --}}
                            <div class="form-group">
                                <input type="text" class="form-control @error('username') is-invalid

                                @enderror" name="username" id="username" aria-describedby="userName" placeholder="Username" value="{{ old('username') }}" required>
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid

                                @enderror" " name="password" id="password" placeholder="Password" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <input type="password" class="form-control @error('password2') is-invalid

                                @enderror" " name="password2" id="password2" placeholder="Confirm Password" required>
                                @error('password2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div> --}}
                  {{--           <div class="custom-control custom-checkbox form-group">
                                <input type="checkbox" class="custom-control-input" id="check1">
                                <label class="custom-control-label" for="check">I Agree with <a href="#">Terms &amp; Policies</a></label>
                            </div> --}}
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                            <a href="/login" class="btn btn-secondary">Sign In</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
