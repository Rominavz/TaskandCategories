@extends('app')

@section('content')
 
    <div class= "container w-25 border p-4 mt-4">
        <form  method="POST" action="{{ route('todos-update', ['id' => $todo->id]) }}">
            @method('PATCH')
            @csrf

            @if (session('succes'))
                <h6 class="alert alert-success">{{ session('succes') }}</h6>
            @endif
                
            @error('title')
                 <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo de la tarea</label>
                <input type="text" name="title" class="form-control" value="{{ $todo ->title }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        
    </div>      
@endsection