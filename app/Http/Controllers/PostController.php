<?php

namespace App\Http\Controllers;

use App\Models\Joukkue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
        public function view_joukkueet()
        {
            return view('Joukkueet');
        }
        public function store(Request $request)
        {
            $post = new Joukkue;
            $post->joukkueNimi = $request->joukkueNimi;
            $post->jäsenet = $request->jäsenet;
            $post->save();
            return redirect('/Joukkueet')->with('status', 'Joukkue lisätty');
        }

        public function destroy($id) {
            DB::delete('delete from joukkueet where id = ?',[$id]);
            echo "Joukkue poistettu.";
            echo '<a href = "/Joukkueet">Paina tästä</a> Päästääksesi takaisin.';

        }


}
