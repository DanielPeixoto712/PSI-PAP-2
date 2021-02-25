@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')


<a href="{{route('motores.index')}}" class="list-group-item">Motores</a>
          <a href="#" class="list-group-item">Suspensão</a>
          <a href="#" class="list-group-item">Jantes</a>
          <a href="#" class="list-group-item">Detalhes Interior</a>
          <a href="#" class="list-group-item">Detalhes Exterior</a>
          
          <BR><BR><h5>Marcas de motores Disponiveis</h5>
@foreach($motores as $motor)
          
          <a href="{{route('motores.show', ['id'=>$motor->id_motor])}} "class="list-group-item"  >
          	<br>{{$motor->marca}}  </a>
          
@endforeach


@endsection

@section ('produtos')
@endsection

@section ('rodape')
@endsection





</ul>

   

