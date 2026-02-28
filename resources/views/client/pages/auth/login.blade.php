@extends('client.layouts.master')

@section('front-content')
    <div class="auth-container">
        <div class="auth-logo">amaz<span>on</span></div>

        <div class="auth-box">
            <h3 class="fw-normal mb-3">Sign in</h3>
            <form action="index.html">
                <div class="mb-3">
                    <label class="form-label fw-bold small">Email or mobile phone number</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold small">Password</label>
                    <input type="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-amazon w-100">Sign in</button>
            </form>
            <div class="mt-3 small">
                By continuing, you agree to Amazon's Conditions of Use and Privacy Notice.
            </div>
        </div>

        <div class="text-center mt-4">
            <div class="small text-muted mb-2">New to Amazon?</div>
            <a href="{{ route('register') }}" class="btn btn-amazon-secondary w-100">Create your Amazon account</a>
        </div>
    </div>
@endsection
