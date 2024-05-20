<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Utilities\HTTPErrors;

class Documento extends Model
{
    use HasFactory;
    protected $table = 'DOC_DOCUMENTO';
    protected $primaryKey = 'DOC_ID';  
    private $DOC_NOMBRE;
    private $DOC_CODIGO;
    private $DOC_CONTENIDO;
    private $DOC_ID_TIPO;
    private $DOC_ID_PROCESO;
    
    // si edito sin cambiar las sigas se crea otro codigo?
    public static function codificacion($documento) {
        try {
            $codigoTipoDocumento = TipoDocumento::where('TIP_ID', $documento['DOC_ID_TIPO'])->first()->TIP_PREFIJO;
            $codigoProceso = Proceso::where('PRO_ID', $documento['DOC_ID_PROCESO'])->first()->PRO_PREFIJO;
            $codigo = $codigoTipoDocumento . '-' . $codigoProceso;

            $ultimoRegistro = Documento::orderBy('DOC_CODIGO', 'desc')->where('DOC_CODIGO', 'ilike', '%'.$codigo.'%')->valu('DOC_CODIGO');

            $codigoDocumento = "";
            if (is_null($ultimoRegistro)) {
                $codigoDocumento = $codigo . "-". 1;
            } else {
                preg_match_all('/\d+/', $ultimoRegistro, $coincidencias);
                if (!empty($coincidencias)) {
                    $consecutivo = $coincidencias[0];
                    $incrementado = $consecutivo[0] + 1;
                    $codigoDocumento = $codigo . "-" . $incrementado;
                }
            }
            
            return $codigoDocumento;
        } catch (\Throwable $e) {
            HTTPErrors::throwError($e, __FILE__);
        }
        
    }

    public static function crearDocumento($documento, $codigo) {
        try {
            $data = 
            [
                'DOC_NOMBRE' => $documento['DOC_NOMBRE'],
                'DOC_CODIGO' => $codigo,
                'DOC_CONTENIDO' => $documento['DOC_CONTENIDO'],
                'DOC_ID_TIPO' => $documento['DOC_ID_PROCESO'],
                'DOC_ID_PROCESO' => $documento['DOC_ID_TIPO']
            ];

            DB::table('DOC_DOCUMENTO')->insert($data);
        } catch (\Throwable $e) {
            HTTPErrors::throwError($e, __FILE__);
        }
    }
}
