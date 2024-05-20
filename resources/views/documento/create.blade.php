<form action="{{url('/documento')}}" method="post">
    @csrf
    @include('/documento.form', ['accion' => 'Crear']);
</form>    
