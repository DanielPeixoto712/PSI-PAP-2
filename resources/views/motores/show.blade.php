@extends('layout')
<link href=" {{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>




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



          
          <a href="{{route('motores.show', ['id'=>$motor->id_motor])}} "class="list-group-item"  >
          	<br>{{$motor->marca}}  </a>
          



@endsection

@section ('produtos')
@endsection

@section ('rodape')
@endsection




<br>
<br><br><br>










