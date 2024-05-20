<form action="{{url('/documento/'.$documento->DOC_ID)}}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('/documento.form');
</form>  