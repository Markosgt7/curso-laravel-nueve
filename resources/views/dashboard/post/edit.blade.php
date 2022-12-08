@extends('dashboard.layout')
@section('content')
        <h1>Editar Post {{ $post->title }}</h1>
        @include('dashboard.fragment._errors-form')
        <form action="{{ route('post.update',$post->id)}}" method="POST">
            @method("PUT")
            @csrf
            <label for="title">Título
                <input type="text" name="title" value="{{ $post->title}}" >
            </label>
            <label for="title">Slug
                <input readonly type="text" name="slug" value="{{ $post->slug }}" >
            </label>
            <label for="category">Categoría
                <select name="category_id">
                    <option value="uno">Seleccione</option>
                    @foreach ($categories as $title=>$id)
                        <option {{$post->category_id == $id ? 'selected' : ''}} value="{{$id}}">{{ $title }}</option>
                    @endforeach
                </select>
            </label>
            <label for="posted">Posteado
                <select name="posted">
                    <option {{$post->posted == "not" ? 'selected' : ''}} value="not">No</option>
                    <option {{$post->posted == "yes" ? 'selected' : ''}} value="yes">Yes</option>
                </select>
            </label>
            <label for="title">Contenido
                <textarea name="content" value="" >{{ $post->content }}</textarea>
            </label>
            <label for="title">Descripción
                <textarea type="text" name="description" value="" >{{ $post->description }}</textarea>
            </label>
            <button type="submit"> Editar</button>
        </form>
    
@endsection