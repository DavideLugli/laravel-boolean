@extends('layouts.layout')
@section('main')
<div class="filter">
    <select name="filter" id="filter">

        @foreach ($genders as $gender)
        <option value="{{$gender}}">{{$gender}}</option>
        @endforeach


    </select>

</div>
<div class="students">
    @foreach (config('students.students') as $key => $student)

    <div class="student">
        <div class="info">
            <img src="{{$student['img']}}" alt="{{$student['nome']}}">
            <div class="text">
                <a href="{{route('students.show', ['id' => $key])}}">
                    <h2>{{$student['nome']}} ({{$student['eta']}} anni)</h2>
                </a>
                <h3>Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}}</h3>
            </div>
        </div>
        <p class="description">{{$student['descrizione']}}</p>
    </div>
    @endforeach
</div>
@endsection

@section('scripts')
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
@endsection
