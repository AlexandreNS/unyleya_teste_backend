<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Nacionalidade;

class Autores extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'anoNascimento', 'sexo', 'nacionalidade_id'
    ];

    public function nacionalidade()
    {
        return $this->belongsTo(Nacionalidade::class);
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['updated_at', 'created_at'];
}