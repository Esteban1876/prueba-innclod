@extends('layouts.app')

@section('content')
<div class="container">

    <p class="fw-bold fs-1">Lista de documentos</p>

    @if (Session::has('mensaje'))
        <div class="alert alert-success fw-bold fs-5" role="alert">
            {{Session::get('mensaje')}}      
        </div>
    @endif

    <table class="table table-light">
        <thead class="thead-light text-center fs-5">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Contenido</th>
                <th>Tipo de documento</th>
                <th>Proceso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="text-center fs-6">
            @foreach ($documentos as $documento)
                <tr>
                    <td> {{$documento->DOC_ID}} </td>
                    <td> {{$documento->DOC_NOMBRE}} </td>
                    <td> {{$documento->DOC_CODIGO}} </td>
                    <td> {{$documento->DOC_CONTENIDO}} </td>
                    <td> {{$documento->tipoDocumentos->TIP_PREFIJO}} </td>
                    <td> {{$documento->procesos->PRO_PREFIJO}} </td>
                    <td> 
                        <a href="{{url('/documento/create')}}" class="btn btn-primary">Crear</a> 
                        
                        <a href="{{ url('/documento/'.$documento->DOC_ID.'/edit')}}" class="btn btn-secondary">Editar</a>
                    
                        <form action="{{url('/documento/'.$documento->DOC_ID)}}" method="post" class="d-inline">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" onclick="return confirm('¿Quieres eliminar el documento?')" value="Eliminar" class="btn btn-danger">
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection