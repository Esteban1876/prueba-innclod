<label for="nombre">Nombre:</label>
    <input type="text" name="DOC_NOMBRE" value="{{isset($documento->DOC_NOMBRE) ? $documento->DOC_NOMBRE : ''}}" id="DOC_NOMBRE"> <br>
    <input type="hidden" name="DOC_CODIGO" value="{{isset($documento->DOC_CODIGO) ? $documento->DOC_CODIGO : ''}}">
    <input type="hidden" name="DOC_ID" value="{{isset($documento->DOC_ID) ? $documento->DOC_ID : ''}}">
    <label for="contenido">Contenido:</label>
    <input type="text" name="DOC_CONTENIDO" value="{{isset($documento->DOC_CONTENIDO) ? $documento->DOC_CONTENIDO : ''}}" id="DOC_CONTENIDO"> <br>

    <label for="tipoDocumento">Tipo documento:</label>
    <select name="DOC_ID_TIPO" id="DOC_ID_TIPO">
        <option value="">Seleccione una opción</option>
        @foreach ($prefijosTipoDocumento as $data)
            <option value="{{ $data->TIP_ID }}" 
                @if ($data->TIP_ID === (isset($documento->tipoDocumentos->TIP_ID) ? $documento->tipoDocumentos->TIP_ID : 0)) selected @endif
            > {{$data->TIP_PREFIJO . " | " . $data->TIP_NOMBRE}} </option> 
        @endforeach
    </select> <br>

    <label for="proceso">Proceso:</label>
    <select name="DOC_ID_PROCESO" id="DOC_ID_PROCESO">
        <option value="">Seleccione una opción</option>
        @foreach ($prefijoProcesos as $data) 
            <option value="{{ $data->PRO_ID }}"
                @if ($data->PRO_ID === (isset($documento->procesos->PRO_ID) ? $documento->procesos->PRO_ID : 0)) selected @endif
            > {{ $data->PRO_PREFIJO . " | " . $data->PRO_NOMBRE }} </option>
        @endforeach
    </select> <br>
    <input type="submit" value="Enviar">