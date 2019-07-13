<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
        protected $fillable = ['nome','cel','cpf','rg','rua','bairro','cidade','estado','datanascimento','escolafund','escolamed','ps_id','user_id'];
        protected $table = 'candidato';
}
