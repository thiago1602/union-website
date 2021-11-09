<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "cliente";

    protected $fillable = ['nome', 'cpf', 'email', 'user_id'];

    public function user()
    {
        // belongsTo pertence a
        return $this->belongsTo('App\Models\User');
    }
}
