<form action="{{url('/documento')}}" method="post">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="DOC_NOMBRE" id="DOC_NOMBRE"> <br>

    <label for="contenido">Contenido:</label>
    <input type="text" name="DOC_CONTENIDO" id="DOC_CONTENIDO"> <br>

    <label for="tipoDocumento">Tipo documento:</label>
    <select name="DOC_ID_TIPO" id="DOC_ID_TIPO">
        <option value="" selected >Seleccione una opción</option>
        @foreach ($prefijosTipoDocumento as $data)
            <option value="{{ $data->TIP_ID }}"> {{$data->TIP_PREFIJO . " | " . $data->TIP_NOMBRE}} </option> 
        @endforeach
    </select> <br>

    <label for="proceso">Proceso:</label>
    <select name="DOC_ID_PROCESO" id="DOC_ID_PROCESO">
        <option value="" selected >Seleccione una opción</option>
        @foreach ($prefijoProcesos as $data) 
            <option value="{{ $data->PRO_ID }}" > {{$data->PRO_PREFIJO . " | " . $data->PRO_NOMBRE}} </option>
        @endforeach
    </select> <br>
    <input type="submit" value="Enviar">
</form>    
