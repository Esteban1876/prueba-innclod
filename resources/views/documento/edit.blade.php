<form action="{{url('/documento/'.$documento->DOC_ID)}}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    <label for="nombre">Nombre:</label>
    <input type="text" name="DOC_NOMBRE" value="{{$documento->DOC_NOMBRE}}" id="DOC_NOMBRE"> <br>

    <label for="contenido">Contenido:</label>
    <input type="text" name="DOC_CONTENIDO" value="{{$documento->DOC_CONTENIDO}}" id="DOC_CONTENIDO"> <br>

    <label for="tipoDocumento">Tipo documento:</label>
    <select name="DOC_ID_TIPO" id="DOC_ID_TIPO">
        @foreach ($prefijosTipoDocumento as $data)
            <option value="{{ $data->TIP_ID }}" @if ($data->TIP_ID === $documento->tipoDocumentos->TIP_ID) selected @endif> {{$data->TIP_PREFIJO . " | " . $data->TIP_NOMBRE}} </option> 
        @endforeach
    </select> <br>

    <label for="proceso">Proceso:</label>
    <select name="DOC_ID_PROCESO" id="DOC_ID_PROCESO">
        @foreach ($prefijoProcesos as $data) 
            <option value="{{ $data->PRO_ID }}" @if ($data->PRO_ID === $documento->procesos->PRO_ID) selected @endif> {{ $data->PRO_PREFIJO . " | " . $data->PRO_NOMBRE }} </option>
        @endforeach
    </select> <br>
    <input type="submit" value="Enviar">
</form>  