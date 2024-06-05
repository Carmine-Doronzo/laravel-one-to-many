@extends('layouts.app')

@section('content')
    <h1>questa è la create</h1>
    <section>
        <div class="container">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome repository</label>
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="inserisci il nome della repository" value="{{ old('name') }}">

                </div>

                <div class="mb-3">
                    <label for="github_url" class="form-label">Url github</label>
                    <input type="text" name="github_url" class="form-control" id="github_url"
                        placeholder="inserisci link alla repository" value="{{ old('github_url') }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione Repository">{{ old('description') }}</textarea>
                </div>

                <button class="btn btn-primary">Carica repository</button>
            </form>
        </div>
    </section>
@endsection
