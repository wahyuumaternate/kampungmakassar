@extends('admin.layouts.main')
@section('body')
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ route('login') }}">
                @csrf
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/">
                    <img src="{{ asset('assets/img/favicon.png') }}" alt="">
                </a>
                <h1 class="h6 mb-3">Sign in</h1>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror form-control-lg" placeholder="Email address"
                        required="" autofocus="" autocomplete="current-password" value="{{ old('email') }}"
                        name="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password"
                        required="" name="password">
                </div>
                <div class="checkbox mb-3">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
                <p class="mt-5 mb-3 text-muted">© Copyright Kampung Makassar Barat 2020. All Rights Reserved</p>
            </form>
        </div>
    </div>
@endsection
