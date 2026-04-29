@extends('layout.master')

@section('title', 'Login')

@section('content')
<h2 class="text-center pt-4">Welcome to Login Page</h2>
]   <div class="container">
    <div class="row">
        <div class="col-6 bg-secondary">

        </div>
        <div class="col-6 align-items-center justify-content-center">
            <div class="card p-4">
                <h2 class="text-primary">Login</h2>
                <form action="">
                    <div class="my-2">
                        <label for="">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="my-2">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('register.view') }}" class="btn btn-secondary">Register</a>
                        <a href="{{ route('home') }}" class="btn btn-primary text-white">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection