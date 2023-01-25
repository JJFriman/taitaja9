<?php

namespace App\Http\Controllers;

use App\Models\Aika;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AikaController extends Controller
{
    
    public function store_time(Request $request)
    {
        $formFields = $request->validate([
            'aika' => 'required',
            'joukkue' => 'required',
            'tehtävä' => 'required'
        ]);
        $post = new Aika;
        $post->joukkue = $request->joukkue;
        $post->tehtävä = $request->tehtävä;
        $post->aika = $request->aika;
        $post->save();
    }


    public function getTime() {
        if(isset($_POST)){
            $data = file_get_contents("php://input");
            $user = json_decode($data, true); // return a php array
            $post = new Aika;
            $post->aika = $user;
            $post->joukkue = "testi";
            $post->tehtävä = "testi";
            $post->save();
            echo json_encode($user);
         }
    }
}
