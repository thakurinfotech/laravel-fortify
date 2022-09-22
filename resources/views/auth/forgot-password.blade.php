@extends('layouts.auth')
@section('content')
<div class="form-content">
    <h1 class="">Password Recovery</h1>
    <p class="signup-link">Enter your email and instructions will sent to you!</p>
    @if (session('status'))
        <div class="alert alert-success text-center mb-4" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form class="text-left" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form">

            <div id="email-field" class="field-wrapper input">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <label class="error jquery-validation-error small form-text invalid-feedback">
                        {{ $message }}
                    </label>
                @enderror
            </div>
            <div class="d-sm-flex justify-content-between">
                <div class="field-wrapper">
                    <button type="submit" class="btn btn-primary" value="">Reset</button>
                </div>                                    
            </div>

        </div>
    </form>                        
    <p class="terms-conditions">© 2021 All Rights Reserved. <a href="index.html">CORK</a> is a product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>

</div> 
@endsection