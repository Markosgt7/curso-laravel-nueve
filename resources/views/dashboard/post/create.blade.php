@extends('dashboard.layout')
@section('content')
        <h1>Crear post</h1>
        @include('dashboard.fragment._errors-form')
        <form action="{{ route('post.store')}}" method="post">
        @csrf
        <label for="title">Título
        <input type="text" name="title" value="{{ old('title', '') }}">
        </label>
        <label for="title">Slug
        <input type="text" name="slug" value="{{ old('slug', '') }}">
        </label>
        <label for="category">Categoría
        <select name="category_id">
            <option value="uno">Seleccione</option>
            @foreach ($categories as $title=>$id)
                <option {{ old('category_id','')== $id ? 'selected': '' }} value="{{$id}}">{{ $title }}</option>
            @endforeach
        </select>
        </label>
        <label for="posted">Posteado
        <select name="posted">
            <option {{ old('posted', '')  == 'not' ? 'selected' : ''}}  value="not">No</option>
            <option {{ old('posted', '')  == 'yes' ? 'selected' : ''}}  value="yes">Yes</option>
        </select>
        </label>
        <label for="title">Contenido
        <textarea name="content">{{ old('title', '') }}</textarea>
        </label>
        <label for="title">Descripción
        <textarea type="text" name="description" > {{ old('title', '') }}</textarea>
        </label>
        <button type="submit"> Enviar</button>
        </form>
    
@endsection