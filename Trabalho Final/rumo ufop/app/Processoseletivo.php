<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processoseletivo extends Model
{
    protected $fillable = ['semestre','status','hora','local','dataprova','inicioinscricao','fimiscricao','iniciomatricula','fimmatricula','matriculaexc','user_id'];
    protected $table = 'processoseletivo';

}
