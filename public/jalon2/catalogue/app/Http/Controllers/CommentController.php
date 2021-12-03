<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;

class CommentController extends Controller
{

    public function findByFilmId(Request $request){
        $id = $request -> input('id');
        $rst = DB::table('comment')
            -> leftJoin('users','comment.user_id','=','users.id')
            -> where('comment.film_id','=',$id)
            -> orderBy('comment.create_time','desc')
            -> get();
        echo($rst);
    }

}
?>