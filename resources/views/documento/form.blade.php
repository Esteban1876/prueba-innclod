<h1 class="fw-bold fs-1">{{$accion}} documento</h1>



<div class="mb-3">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" class="form-control" name="DOC_NOMBRE" value="{{isset($documento->DOC_NOMBRE) ? $documento->DOC_NOMBRE : ''}}" id="DOC_NOMBRE">
    <input type="hidden" name="DOC_CODIGO" value="{{isset($documento->DOC_CODIGO) ? $documento->DOC_CODIGO : old('DOC_CODIGO')}}">
    <input type="hidden" name="DOC_ID" value="{{isset($documento->DOC_ID) ? $documento->DOC_ID : 0}}">
</div>
    
<div class="mb-3">
    <label for="contenido" class="form-label">Contenido:</label>
    <input type="text" class="form-control" name="DOC_CONTENIDO" value="{{isset($documento->DOC_CONTENIDO) ? $documento->DOC_CONTENIDO : ''}}" id="DOC_CONTENIDO">
</div>
    
<div class="mb-3">
    <label for="tipoDocumento" class="form-label">Tipo documento:</label>
    <select name="DOC_ID_TIPO" id="DOC_ID_TIPO" class="form-select">
        <option value="">Seleccione una opción</option>
        @foreach ($prefijosTipoDocumento as $data)
            <option value="{{ $data->TIP_ID }}" 
                @if ($data->TIP_ID === (isset($documento->tipoDocumentos->TIP_ID) ? $documento->tipoDocumentos->TIP_ID : 0)) selected @endif
            > {{$data->TIP_PREFIJO . " | " . $data->TIP_NOMBRE}} </option> 
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="proceso" class="form-label">Proceso:</label>
    <select name="DOC_ID_PROCESO" id="DOC_ID_PROCESO" class="form-select">
        <option value="">Seleccione una opción</option>
        @foreach ($prefijoProcesos as $data) 
            <option value="{{ $data->PRO_ID }}"
                @if ($data->PRO_ID === (isset($documento->procesos->PRO_ID) ? $documento->procesos->PRO_ID : 0)) selected @endif
            > {{ $data->PRO_PREFIJO . " | " . $data->PRO_NOMBRE }} </option>
        @endforeach
    </select> 
</div>

<form class="d-inline">
    <input type="submit" value="{{$accion}} documento" class="btn btn-info">
    <a href="{{url('documento/')}}" class="btn btn-secondary">Regresar</a>
</form>

