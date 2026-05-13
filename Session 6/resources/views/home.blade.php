@extends('layout.master')
@section('title', 'Homepage')

@section('content')
    @include('layout.navbar')
    <div class="container">
        <h1>Welcome to home page</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3 text-white">Add Student</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai Rata-Rata</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $s )
                    @php
                        $avg = $s -> getAverage();
                    @endphp
                    <tr>
                        <td>{{ $s['id'] }}</td>
                        <td><a href="{{ route('students.detail', $s['id']) }}">{{ $s['name'] }}</a></td>
                        <td>{{ $avg }}</td>
                        <td>
                            @if ($avg >= 65)
                                {{ 'Lulus' }}                                
                            @else  
                                {{ 'Gagal' }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection