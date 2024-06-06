@extends('layouts.app')

@section('content')

    <h1>questo è l'index</h1>
    @foreach ($projects as $project)
        <p>Name: {{$project->name}}</p>
        <p>Slug: {{$project->slug}}</p>
        <p>Type id: {{$project->type_id }}</p>
        <p>Type: {{$project->type ? $project->type->name : '' }}</p>
        <div id="form" class="d-flex justify-content-center align-items-center gap-4">
            <button class="btn btn-outline-danger" id="trash">Trash</button>
            <a class="btn btn-outline-warning" href="{{route('admin.projects.edit', $project)}}">Edit</a>
          </div>
        </div>
        <script>
          let trash = document.getElementById('trash')

          trash.addEventListener('click', function () {

            let form = document.getElementById('form')

            let trashConf = confirm('Sei sicuro di volere eliminare?')
            if (trashConf === true) {

              form.innerHTML +=
                `
                          <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                          @method('DELETE')
                          @csrf

                          
     
                          <button type="submit" style="display:none;" id='confirm'>trash</button>

                          </form>
                        `
              let confirm = document.getElementById('confirm').click()

            }


          })
        </script>


      </div>
        
    @endforeach
@endsection