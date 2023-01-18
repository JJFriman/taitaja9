<?php

namespace App\Http\Controllers;

use App\Models\Aika;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AikaController extends Controller
{
    
    public function Form(Request $request)

    {
        $data = category::all();
    }
}
