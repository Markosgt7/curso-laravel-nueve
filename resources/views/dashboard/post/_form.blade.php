@csrf
<label for="title">Título
<input type="text" name="title" value="{{ old('title', $post->title) }}">
</label>
<label for="title">Slug
<input type="text" name="slug" value="{{ old('slug', $post->slug) }}">
</label>
<label for="category">Categoría
<select name="category_id">
    <option value="uno">Seleccione</option>
    @foreach ($categories as $title=>$id)
        <option {{ old('category_id',$post->category_id)== $id ? 'selected': '' }} value="{{$id}}">{{ $title }}</option>
    @endforeach
</select>
</label>
<label for="posted">Posteado
<select name="posted">
    <option {{ old('posted', $post->posted)  == 'not' ? 'selected' : ''}}  value="not">No</option>
    <option {{ old('posted', $post->posted)  == 'yes' ? 'selected' : ''}}  value="yes">Yes</option>
</select>
</label>
<label for="title">Contenido
<textarea name="content">{{ old('content', $post->content) }}</textarea>
</label>
<label for="title">Descripción
<textarea type="text" name="description" > {{ old('description', $post->description) }}</textarea>
</label>
@if (isset($task) && $task == 'edit')
    <label for="image">Imagen</label>   
    <input type="file" name="image"> 
@endif
<button type="submit"> Enviar</button>