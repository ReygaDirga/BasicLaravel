@extends('layout.master')

@section('title', 'Register')

@section('content')
<h2 class="text-center pt-4">Welcome to Register Page</h2>
   <div class="container">
        <div class="row">
            <div class="col-6 bg-secondary">

            </div>
            <div class="col-6">
                <div class="card p-4">
                    <h2 class="text-primary">Register</h2>
                    <form action="">
                        <div>
                            <label for="">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div>
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div>
                            <label for="">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                        </div>
                        <div class="mt-2">
                            <a href="{{ route('login.view') }}" class="btn btn-secondary">Login</a>
                            <a href="{{ route('home') }}" class="btn btn-primary text-white">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection