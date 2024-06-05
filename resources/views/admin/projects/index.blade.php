@extends('layouts.app')

@section('content')

    <h1>questo è l'index</h1>
    @foreach ($projects as $project)
        <p>Name: {{$project->name}}</p>
        <p>Slug: {{$project->slug}}</p>
        <p>Type id: {{$project->type_id }}</p>
        <p>Type: {{$project->type ? $project->type->name : '' }}</p>
        
    @endforeach
@endsection