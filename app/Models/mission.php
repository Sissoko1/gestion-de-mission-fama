<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mission extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule',
        'lieu',
        'duree',
        'date_depart',
        'date_retour',
        'unite',
        'chefmission',
        
    ];
    public function chefunite(){
        return $this->belongsTo(chef_unites::class, 'unite');// belongsTo= appartenir à
    }
    public function chefmission(){
        return $this->belongsTo(chef_missions::class, 'chefmission');// belongsTo= appartenir à
    }
}
