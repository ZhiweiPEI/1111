<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;

class CommentController extends Controller
{

    public function selectAll(Request $request){
        $user = $request -> input('user');
        $film = $request -> input('film');
        $statut = $request -> input('statut');
        $db = DB::table('comment');
        $rst = $db -> select("comment.id","comment.content","users.name","film.title","comment.create_time","comment.statut")
                -> leftJoin("users","users.id","=","comment.user_id")
                -> leftJoin("film","film.id","=","comment.film_id");
        if(!empty($user)){
            $rst = $db -> where("users.name","=",$user);
        }
        if(!empty($film)){
            $rst = $db -> where("film.title","=",$film);
        }
        if(!empty($statut)){
            $rst = $db -> where("statut","=",$statut);
        }
        $rst = $db -> orderBy("create_time","desc") -> get();
        echo($rst);
    }

    public function getCount(Request $request){
        $user = $request -> input('user');
        $film = $request -> input('film');
        $statut = $request -> input('statut');
        $db = DB::table('comment');
        if(!empty($user)){
            $rst = $db -> where("user_id","=",$user);
        }
        if(!empty($film)){
            $rst = $db -> where("film_id","=",$film);
        }
        if(!empty($statut)){
            $rst = $db -> where("statut","=",$statut);
        }
        $rst = $db -> count();
        echo($rst);
    }

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

    public function updateEnable(Request $request){
        $id = $request -> input('id');
        $db = DB::table('comment');
        $enable = $db -> select('statut') -> where('id','=',$id) -> first();
        if($enable -> enable > 0){
            $enable = 0;
        }
        else if($enable -> enable == 0){
            $enable = 1;
        }
        $rst = $db -> where('id','=',$id) -> update([  
            'statut' => $enable
        ]);
        echo(1);
    }
}
?>