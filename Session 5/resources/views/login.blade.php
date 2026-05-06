@extends('layout.master')

@section('title', 'Login')

@section('content')
  <div>
    <div class="row">
        <div class="col-6 bg-secondary">

        </div>
        <div class="col-6 vh-100 d-flex align-items-center justify-content-center">
            <div class="card p-4" style="width: 450px">
                <h2 class="text-primary">Login</h2>
                <form action="{{ route('login.do') }}" method="POST">
                    @csrf
                    <div class="my-2">
                        <label for="">Username</label>
                        <input value="{{ old('username') }}" type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="my-2">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    @if (session('errors'))
                        <div class="alert alert-danger mt-3">
                            {{ session('errors') }}
                        </div>
                    @endif

                    <div class="mt-2">
                        <a href="{{ route('register.view') }}" class="btn btn-secondary">Register</a>
                        <button type="submit" class="btn btn-primary text-white">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection