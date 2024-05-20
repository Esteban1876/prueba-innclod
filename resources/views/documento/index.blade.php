<table class="table table-dark">
    <thead class="thead-dark">
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
    <tbody>
        @foreach ($documentos as $documento)
            <tr>
                <td> {{$documento->DOC_ID}} </td>
                <td> {{$documento->DOC_NOMBRE}} </td>
                <td> {{$documento->DOC_CODIGO}} </td>
                <td> {{$documento->DOC_CONTENIDO}} </td>
                <td> {{$documento->tipoDocumentos->TIP_PREFIJO}} </td>
                <td> {{$documento->procesos->PRO_PREFIJO}} </td>
                <td> 
                    
                    <a href="{{ url('/documento/'.$documento->DOC_ID.'/edit')}}">
                        Editar
                    </a>

                    | 
                
                    <form action="{{url('/documento/'.$documento->DOC_ID)}}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Quieres eliminar el documento?')" value="Eliminar">
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>