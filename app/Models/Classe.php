<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable =['annee', 'nom_clas'];
    public function Eleve(){

        return $this->hasMany(Eleve::class);
    }
    public function Cours(){

        return $this->hasMany(Cours::class);
    }
}
