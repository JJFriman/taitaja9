<?php

namespace App\Http\Controllers;

use App\Models\Aika;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AikaController extends Controller
{
    
    public function store_time(Request $request)
    {
        $post = new Joukkue;
        $post->aika = $request->aika;
        $post->save();
    }
}
