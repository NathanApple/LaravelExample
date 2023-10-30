@extends('layout.app')

@section('title', 'TEST')

@section('container')
<div class="container pt-3">
    <ul class="list-group">
        <li class="list-group-item">Student - Course</li>
        @foreach ($studentCourses as $sc)
            {{-- <li class="list-group-item">{{ $sc->student_id }} - {{ $sc->course_id }}</li> --}}
            {{-- <li class="list-group-item">{{ $sc->student->name }} - {{ $sc->course->name }}</li> --}}
            @if ($sc->student->name == 'Zane Hirthe V')
                <li class="list-group-item">{{ $sc->student->name }} - {{ $sc->course->name }}</li>
            @endif
        @endforeach
    </ul>
</div>
@endsection