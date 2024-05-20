<?php

namespace App\Utilities;

use Illuminate\Support\Facades\Log;
use App\Models\LogErrors;
use Throwable;
use Error;

class HTTPErrors
{

  /**
   * Respuesta para errores de un try catch
   * @param Throwable $th
   * @return \Illuminate\Http\JsonResponse
   */
  public static function throwError(Throwable $th, $file)
  {
    
    $idUser = 1;

    $message = "{$th->getMessage()} - {$th->getLine()} ({$th->getFile()}) [{$file}]";
    Log::info("[Throw - " . config('app.env') . "] - {$message}");

    $ticket = new LogErrors();

    $ticket->id_usuario = $idUser;
    $ticket->error = $message;
    $ticket->save();

    if (app()->environment('production')) {
      echo json_encode(['status' => 0, 'ticket' => "Error # $ticket->id", 'message' => "Comuniquese con un asesor para obtener solución."]);
      exit(200);
    }

    echo json_encode(['status' => 0, 'message' => $message]);
    exit(200);
  }
}
