@extends('layout.main')

@section('container')

<div class="container font-monospace shadow p-4" style="border:1px solid black; border-radius:10px;">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade shadow" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade shadow" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h2>Login</h2>

    <form action="/Login" method="post">
        @csrf
        {{-- email --}}
        <div class="form-floating mb-3" style="display: flex">
            <p>Email Address:</p>
            <input type="email" name="email" id="email" class="form-control-sm @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- password --}}
        <div class="form-floating mb-3" style="display: flex">
            <p>Password:</p>
            <input class="form-control-sm" type="password" name="password" id="password" placeholder="password" required>
        </div>
        {{-- remember me --}}

        <div class="mb-4">
            <input type="checkbox" value="lsRememberMe" id="rememberMe">
            <label for="rememberMe">Remember me</label>
        </div>
        <button class="login-btn" type="submit">Log in</button>

    </form>

    <div class="mt-5">
        <p>Don't have an account?</p>
        <a href="/Register">Register Here</a>
    </div>

</div>


@endsection
