<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];
    public function stagiaires()
    {
        return $this->hasMany(Stagiaire::class);
    }
}
