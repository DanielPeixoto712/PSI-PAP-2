@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')



@endsection

@section ('tprodutos')
@endsection

@section ('rodape')
@endsection




@foreach($categorias as $categoria)
          
          <a href="{{route('categorias.show', ['id'=>$categoria->id_categoria])}}" >
          	<br>{{$categoria->designacao}} </a>
          
@endforeach
</ul>
{{$categorias->render()}}
   













