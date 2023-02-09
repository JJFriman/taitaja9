<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joukkue extends Model
{
    protected $fillable = ['JoukkueNimi', 'jäsenet'];
    public $table = 'joukkueet';

}
