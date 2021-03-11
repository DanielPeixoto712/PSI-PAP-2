@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

<form action="{{route('aps.store')}}" method="post">
	@csrf
	Suspensão:<input type="text" name="suspenssao" value="{{old('suspenssao')}}"><br>
	Preço::<input type="text" name="preco" value="{{old('preco')}}"><br>
	Observações::<textarea name="observacoes">{{old('observacoes')}}</textarea><br>
	Informação::<input type="text" name="info" value="{{old('info')}}"><br>
	<input type="submit" name="Enviar">
</form>
@endsection


