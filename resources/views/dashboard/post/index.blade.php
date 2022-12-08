@extends('dashboard.layout')

@section('content')
    
    <table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Categoría</th>
                <th>Posteado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
             <tr>
                <td>{{ $p->title }}</td>
                <td></td>
                <td>{{ $p->posted }}</td>
                <td></td>
            </tr>   
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection