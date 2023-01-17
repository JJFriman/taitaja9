<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aika extends Model
{
    protected $fillable = ['aika', 'tehtävä'];
    public $table = 'jaikataulu';
    
}
