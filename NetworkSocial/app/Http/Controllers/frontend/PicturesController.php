<?php

namespace App\Http\Controllers;
use App;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Controllers\frontend;

class PicturesController extends Controller
{
    public function createPsot() {
        return view('pictures.create_post');
    }

    public function postPicture(Request $requset) {
        $id_user = User::find($id)->get();
        $description = $request->description;
        $picture = $request->picture;
        DB::table('picture')->insert(
            ['id_user'=>$id_user, 
            'description' => $description,
            'picture' => $picture
        ]);

    return redirect('home'); 
    }   
}
