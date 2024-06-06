@extends('layouts.app')

@section('content')
    <h1>questa è la edit</h1>
    <section>
        <div class="container">
            <form action="{{ route('admin.projects.update',$project) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nome repository</label>
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="inserisci il nome della repository" value="{{ old('name',$project->name) }}">

                </div>

                <div class="mb-3">
                    <label for="type_id" class="form-label">Tipologia di progetto</label>
                    <select class="form-control" name="type_id" id="type_id">

                        <option value="">Seleziona Tipologia</option>
                        @foreach ($types as $type)
                            <option @selected( $type->id == old('type_id',$project->type_id)) value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach

                    </select>
                </div>


                <div class="mb-3">
                    <label for="github_url" class="form-label">Url github</label>
                    <input type="text" name="github_url" class="form-control" id="github_url"
                        placeholder="inserisci link alla repository" value="{{ old('github_url',$project->github_url) }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione Repository">{{ old('description',$project->description) }}</textarea>
                </div>

                <button class="btn btn-primary">Modifica repository</button>
            </form>
        </div>
    </section>
@endsection