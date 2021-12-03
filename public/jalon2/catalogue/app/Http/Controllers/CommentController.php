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
            -> select('comment.id','content','film_id','create_time','name')
            -> get();
        echo($rst);
    }

    public function add(Request $request){
        $db = DB::insert('insert into comment (content,user_id,film_id,statut,create_time) values(?,?,?,?,?)',[$request->comment, $request->userId ,$request->filmId, 1 , date("Y-m-d H:i:s")]);
        echo(1);
    }

    public function del(Request $request){
        $id = $request -> input('id');
        $db = DB::table('comment') -> where('id','=',$id) -> delete();
        echo(1);
    }

}
?>