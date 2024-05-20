<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Proceso;
use App\Models\TipoDocumento;
use App\Utilities\HTTPErrors;
use Illuminate\Http\Request;
use PDOException;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $datos = Documento::all();
            return view('documento.index', ['documentos' => $datos]);
        } catch (\Throwable $e) {
            HTTPErrors::throwError($e, __FILE__);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $prefijosTipoDocumento = TipoDocumento::all();
            $prefijosProcesos = Proceso::all();
            return view('documento.create', ['prefijosTipoDocumento' => $prefijosTipoDocumento, 'prefijoProcesos' => $prefijosProcesos]);
        } catch (\Throwable $e) {
            HTTPErrors::throwError($e, __FILE__);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $datos = $request->except('_token');
            $codigo = Documento::codificacion($datos);
            Documento::crearDocumento($datos, $codigo);
        } catch (\Throwable $e) {
            HTTPErrors::throwError($e, __FILE__);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy($docId)
    {
        try {
            Documento::destroy($docId);
            return redirect('documento');
        } catch (\Throwable $e) {
            HTTPErrors::throwError($e, __FILE__);
        }
    }
}
