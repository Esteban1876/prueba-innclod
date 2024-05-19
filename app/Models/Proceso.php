<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    use HasFactory;
    protected $table = 'PRO_PROCESO';  
    protected $primaryKey = 'PRO_ID';
    // protected $fillable = ['PRO_ID', 'PRO_NOMBRE', 'PRO_PREFIJO'];
}
