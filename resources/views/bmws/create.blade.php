@extends ('layout')

@section ('titulo')
@endsection

@section ('navbar')
@endsection

@section ('menu')
@endsection

<br><br><br><br><br>
@section ('produtos')

<form action="{{route('bmws.store')}}" method="post">
    @csrf
    Motor:<input type="text" name="motor" value="{{old('motor')}}"><br>
    Preço::<input type="text" name="preco" value="{{old('preco')}}"><br>
    Observações::<textarea name="observacoes">{{old('observacoes')}}</textarea><br>
    Informação::<input type="text" name="info" value="{{old('info')}}"><br>
    <input type="submit" name="Enviar">
</form>
@endsection
