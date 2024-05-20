<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Código</th>
            <th>Contenido</th>
            <th>Tipo de documentoe</th>
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
                <td> {{$documento->DOC_ID_TIPO}} </td>
                <td> {{$documento->DOC_ID_PROCESO}} </td>
                <td> Editar | Borrar </td>
            </tr>
        @endforeach
    </tbody>
</table>