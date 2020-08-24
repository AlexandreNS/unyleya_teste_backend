<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Autores;
use App\Editoras;
use App\Generos;

class Livros extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'anoLancamento', 'autor_id', 'genero_id', 'editora_id'
    ];

    public function autor()
    {
        return $this->belongsTo(Autores::class);
    }

    public function editora()
    {
        return $this->belongsTo(Editoras::class);
    }

    public function genero()
    {
        return $this->belongsTo(Generos::class);
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['updated_at', 'created_at'];
}