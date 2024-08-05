<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Livre extends Model
{
    use HasFactory,SoftDeletes;
    protected $gardeu=[];
    public function categories(){
        return $this->belongsTo(Categorie::class);
    }
    public function emprunts(){
        return $this->hasmany(Emprunt::class);
    }

}
