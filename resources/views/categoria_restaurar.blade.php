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
            <form action = "/categorias/restaurar" method = "POST">
                @csrf
                @method('DELETE')
                <a class = "btn btn-success" href="{{route('categorias.edit', $cat)}}">Restaurar</a>
            </form>  
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection