@extends('client.layouts.master')

@section('front-content')
    <div class="auth-container">
        <div class="auth-logo">amaz<span>on</span></div>

        <div class="auth-box">
            <h3 class="fw-normal mb-3">Create account</h3>
            <form action="login.html">
                <div class="mb-3">
                    <label class="form-label fw-bold small">Your name</label>
                    <input type="text" class="form-control" placeholder="First and last name">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold small">Mobile number or email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold small">Password</label>
                    <input type="password" class="form-control" placeholder="At least 6 characters">
                    <div class="form-text small">Passwords must be at least 6 characters.</div>
                </div>
                <button type="submit" class="btn btn-amazon w-100">Continue</button>
            </form>
            <div class="mt-3 small">
                Already have an account? <a href="login.html">Sign in</a>
            </div>
        </div>
    </div>
@endsection
