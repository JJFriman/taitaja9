<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aika extends Model
{
    protected $fillable = ['aika', 'tehtävä', 'joukkue'];
    public $table = 'aikataulu';
}
