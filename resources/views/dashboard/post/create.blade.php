<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1>Crear post</h1>
    <form action="{{ route('post.store')}}" method="post">
    @csrf
    <label for="title">Título
        <input type="text" name="title" >
    </label>
    <label for="title">Slug
        <input type="text" name="slug" >
    </label>
    <label for="category">Categoría
        <select name="category_id">
            <option value="0">Seleccione</option>
            @foreach ($categories as $title=>$id)
                <option value="{{$id}}">{{ $title }}</option>
            @endforeach
        </select>
    </label>
    <label for="posted">Posteado
        <select name="posted">
            <option value="not">No</option>
            <option value="yes">Yes</option>
        </select>
    </label>
    <label for="title">Contenido
        <textarea name="content"></textarea>
    </label>
    <label for="title">Descripción
        <input type="text" name="description" >
    </label>
    <button type="submit"> Enviar</button>
    </form>
    
</body>
</html>