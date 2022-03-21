<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable =[ 'nom_cours', 'description', 'fichiers', 'classe_id'];

        public function Enseignant()
        {
            return $this->belongsToMany(Users::class, Enseigner::class);
        }
        public function Classe()
        {
            return $this->belongsTo(Classe::class);
        }

    use HasFactory;
}
