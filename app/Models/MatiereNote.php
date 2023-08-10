<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatiereNote extends Model
{
    use HasFactory;
    protected $fillable = ['matiere_id', 'prof_id', 'étudient_id', 'note'];
    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function etudient()
    {
        return $this->belongsTo(User::class, 'étudient_id');
    }

    public function prof()
    {
        return $this->belongsTo(User::class, 'prof_id');
    }
}
