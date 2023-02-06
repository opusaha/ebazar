@extends('home.layout.master')
@section('content')
@push('styles')
        <title>Zeomart :: Register</title>
    @endpush
    <section class="our-log-reg bgc-f5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 col-xxl-4 m-auto">
                    <div class="log_reg_form mt70-992">
                        <h2 class="title">Create your account</h2>
                        <div class="sign_up_form">
                            <form action="{{ route('register.store') }}" method="POST">@csrf
                                <div class="form-group">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder="Ali Tufan" name="name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Your Email</label>
                                    <input type="email" class="form-control" placeholder="creativelayers088@gmail.com"
                                        name="email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb20">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="******************"
                                        name="password">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-signup btn-thm">Create Account</button>
                                <p class="text-center mb25 mt10">Already have an account? <a
                                        href="{{ route('login') }}">Sign
                                        in</a></p>
                                <div class="hr_content">
                                    <hr>
                                    <span class="hr_top_text">or</span>
                                </div>
                                <ul class="login_with_social text-center mt30 mb0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-apple"></i></a></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
