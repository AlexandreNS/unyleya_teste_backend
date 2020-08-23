<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidade extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "nacionalidade";
    protected $fillable = [
        'nome', 'pais'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['updated_at', 'created_at'];
}