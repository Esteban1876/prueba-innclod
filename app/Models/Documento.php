<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Utilities\HTTPErrors;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documento extends Model
{
    use HasFactory;
    protected $table = 'DOC_DOCUMENTO';
    protected $primaryKey = 'DOC_ID';  
    protected $fillable = [];
    private $DOC_NOMBRE;
    private $DOC_CODIGO;
    private $DOC_CONTENIDO;
    private $DOC_ID_TIPO;
    private $DOC_ID_PROCESO;
    
    public static function validaCambioCodigo($documento) {
        try {
            $codigoGenerado = Documento::generaCodigoSinConsecutivo($documento);
            $codigoActual = preg_replace('/\d+/', '', $documento['DOC_CODIGO']); 
            if ($codigoGenerado == $codigoActual) {
                return false;
            } else  {
                return true;
            }
        } catch (\Throwable $e) {
            HTTPErrors::throwError($e, __FILE__);
        }
    }

    private static function generaCodigoSinConsecutivo($documento) {
        try {
            $codigoTipoDocumento = TipoDocumento::where('TIP_ID', $documento['DOC_ID_TIPO'])->first()->TIP_PREFIJO;
            $codigoProceso = Proceso::where('PRO_ID', $documento['DOC_ID_PROCESO'])->first()->PRO_PREFIJO;
            $codigo = $codigoTipoDocumento . '-' . $codigoProceso . '-';
        return $codigo;
        } catch (\Throwable $e) {
            HTTPErrors::throwError($e, __FILE__);
        }
        
    }

    // si edito sin cambiar las sigas se crea otro codigo?
    public static function codificacion($documento) {
        try {
            $codigo = Documento::generaCodigoSinConsecutivo($documento);
            $ultimoRegistro = Documento::orderBy('DOC_CODIGO', 'desc')->where('DOC_CODIGO', 'ilike', '%'.$codigo.'%')->value('DOC_CODIGO');

            $codigoDocumento = "";
            if (is_null($ultimoRegistro)) {
                $codigoDocumento = $codigo . 1;
            } else {
                preg_match_all('/\d+/', $ultimoRegistro, $coincidencias);
                if (!empty($coincidencias)) {
                    $consecutivo = $coincidencias[0];
                    $incrementado = $consecutivo[0] + 1;
                    $codigoDocumento = $codigo . $incrementado;
                }
            }
            
            return $codigoDocumento;
        } catch (\Throwable $e) {
            HTTPErrors::throwError($e, __FILE__);
        }
    }

    public static function guardarDocumento($documento, $codigo, $accion) {
        try {
            $data = 
            [
                'DOC_NOMBRE' => $documento['DOC_NOMBRE'],
                'DOC_CODIGO' => $codigo,
                'DOC_CONTENIDO' => $documento['DOC_CONTENIDO'],
                'DOC_ID_TIPO' => $documento['DOC_ID_TIPO'],
                'DOC_ID_PROCESO' => $documento['DOC_ID_PROCESO']
            ];

            if ($accion == 'create') {
                DB::table('DOC_DOCUMENTO')->insert($data);
            } else {
                DB::table('DOC_DOCUMENTO')->where('DOC_ID', '=', $documento['DOC_ID'])->update($data);
            }  
        } catch (\Throwable $e) {
            HTTPErrors::throwError($e, __FILE__);
        }
    }

    public function procesos() {
        return $this->belongsTo(Proceso::class, 'DOC_ID_PROCESO', 'PRO_ID');
    }

    public function tipoDocumentos() {
        return $this->belongsTo(TipoDocumento::class, 'DOC_ID_TIPO', 'TIP_ID');
    }
}
