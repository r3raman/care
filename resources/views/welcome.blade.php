@extends('auth.layouts.master')

@section('content')
<div class="accoutn_main">
    <video muted loop autoplay class="video">
        <source src="assets/images/video1.mp4" type="video/mp4">
    </video>

    <div class="form_area">
        <div class="main_con" style="margin:0 auto">
            <div class="headline">

            </div>

            <div class="form_con">
                <div class="log_form">
                    <h2>AUTISMCARE</h2><br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-box">
                            <input type="text" name="email_username" required>
                            <label>Email / User Name</label>
                            @error('email_username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" required>
                            <label>Password</label>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- <input type="email" name="email" required>
                        <input type="password" name="password" required> -->

                        <div class="button">
                            <button type="submit">LOGIN</button>
                        </div>
                    </form>
                </div>
               
                <div class="text-center">
                    <a style="text-decoration: underline; color: #fff;" href="{{ route('register') }}">REGISTER</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection