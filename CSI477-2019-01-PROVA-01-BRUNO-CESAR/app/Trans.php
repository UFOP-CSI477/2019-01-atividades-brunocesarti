<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trans extends Model
{
    protected $fillable = ['cliente_id', 'tipo_id', 'data', 'valor', 'credito'];
    protected $table = 'trans';

}
