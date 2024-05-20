@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('/documento')}}" method="post">
        @csrf
        @include('/documento.form', ['accion' => 'Crear']);
    </form>    
</div>
@endsection