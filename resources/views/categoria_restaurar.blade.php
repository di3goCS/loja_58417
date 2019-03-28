@extends('layout.base', ["current"=>"categorias"])

@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categorias as $cat)
        <tr>       
            <td>{{$cat->id}}</td>
            <td>{{$cat->nome}}</td>
            <td>
                <a class = "btn btn-success" href="{{route('categorias.restore', $cat->id)}}">Restaurar</a>
                <a href="{{route('categorias.delete', $cat->id)}}" class = "btn btn-danger">Apagar 4ever</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection