<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['nome','inicio','termino','disciplina','cel','user_id',];
    protected $table = 'professor';

}
