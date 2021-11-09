<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iva extends Model
{
    use HasFactory;

    protected $table='ivas';

    protected $fillable=['iva','status'];

    public function medios()
    {
    	return $this->hasMany('App\Models\Medio','id_iva','id');
    }
}
