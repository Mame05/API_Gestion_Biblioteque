<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    use HasFactory;
    protected $gardeu=[];
    public function livres(){
        return $this->belongsTo(Livre::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
