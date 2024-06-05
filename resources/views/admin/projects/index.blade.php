@extends('layouts.app')

@section('content')

    <h1>questo è l'index</h1>
    @foreach ($projects as $project)
        <p>{{$project->name}}</p>
        <p>{{$project->slug}}</p>
        
    @endforeach
@endsection