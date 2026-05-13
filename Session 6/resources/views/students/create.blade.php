@extends('layout.master')
@section('title', 'Add Student Page')

@section('content')
    @include('layout.navbar')
    <div class="content p-4">
        <div class="card mt-2 p-4">
            <form action="{{ route('students.insert') }}" method="POST">
                @csrf
                <div>
                    <label class="form-label">Student Name</label>
                    <input type="text" class="form-control my-2" name="student_name" id="name" required>

                    <label class="form-label">Student NIM</label>
                    <input type="number" class="form-control my-2" name="student_nim" id="student_nim" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2 text-white">Add Student</button>
            </form>
        </div>
    </div>

@endsection