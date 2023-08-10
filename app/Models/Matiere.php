<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prof_id', 'branche_id', 'étudient_id'];
    public function prof()
    {
        return $this->belongsTo(User::class);
    }
    public function branche()
    {
        return $this->belongsTo(Branche::class);
    }
    public function etudient()
    {
        return $this->belongsTo(Etudient::class);
    }
}
