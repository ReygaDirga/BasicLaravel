@extends('layout.master')
@section('title', 'Student Detail Page')

@section('content')
    @include('layout.navbar'))
    <div class="container">
        <h3>Name : {{ $data['name'] }}</h3>
        <h4>Score : </h4>
        <ul class="list-group">
            @foreach ($data['Score'] as $score)
                @php
                    if ($score >= 90) {
                        $grade = 'A';
                    }elseif ($score >= 85) {
                        $grade = 'A-';
                    }elseif ($score >= 80) {
                        $grade = 'B+';
                    }elseif ($score >= 75) {
                        $grade = 'B';
                    }elseif ($score >= 70) {
                        $grade = 'B-';
                    }elseif ($score >= 65) {
                        $grade = 'C';
                    }else {
                        $grade = 'D';
                    };
                @endphp
                <li class="list-group-item">Score: {{ $score }} - Grade : {{ $grade }}</li>
            @endforeach
        </ul>
    </div>
@endsection