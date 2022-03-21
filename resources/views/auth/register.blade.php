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
                <!-- Registration form -->
                <div class="reg_form">
                    <h2>Register Now!!</h2>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="input-box">
                            <input type="text" name="name" required value="{{ old('name') }}">
                            <label>Name</label>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input type="text" name="username" id="username" required value="{{ old('username') }}">
                            <label>User Name</label>
                            @error('username')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input type="email" name="email" required value="{{ old('email') }}">
                            <label>Email</label>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" required value="{{ old('password') }}">
                            <label>Password</label>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="button">
                            <button type="submit">REGISTRATION</button>
                        </div>
                    </form>
                </div>
                <div class="text-center">
                    <a style="text-decoration: underline; color: #fff;" href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(function() {
        $('#username').on('keypress', function(e) {
            if (e.which == 32){
                console.log('Space Detected');
                return false;
            }
        });
});
</script>
@endpush