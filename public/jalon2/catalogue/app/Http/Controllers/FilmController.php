<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;

class FilmController extends Controller
{
    public function add(Request $request){
        $name = $request -> input('name');
        $director = $request -> input('director');
        $category = $request -> input('category');
        $db = DB::table('film');
        $rst = $db -> insert([
            [
                'name' => $name,
                'director' => $director,
                'category_id' => $category,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
        dd($rst);
    }

    public function update(Request $request){
        $name = $request -> input('name');
        $director = $request -> input('director');
        $category = $request -> input('category');
        $db = DB::table('film');
        $rst = $db -> where('name','=',$name) -> update([  
                'name' => $name,
                'director' => $director,
                'category_id' => $category,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
        ]);
        dd($rst);
    }

    public function select(Request $request){
        $name = $request -> input('search');
        $type = $request -> input('type');
        $db = DB::table('film');
        if(!empty($type)){
            $rst = $db -> rightJoin('film_category_relation',"film.id","=","film_category_relation.film_id") -> where("category_id","=",$type);
        }
        if(!empty($name)){
            $rst = $db -> where('title',"=",$name);
        }
        $rst = $db -> get();
        echo($rst);
    }

    public function findByName(Request $request){
        $name = $request -> input('name');
        $db = DB::table('film');
        $rst = $db -> where('title', '=', $name) -> get();
        // return view('filmupdate');
        echo($rst);
    }

    public function del(Request $request){
        $name = $request -> input('name');
        $db = DB::table('film');
        $rst = $db -> where('name','=',$name) -> delete();
        dd($rst);
    }
  
    public function findFavorites(Request $request){
        $email = $request -> input('email');
        $rst = DB::table("film")
            -> rightJoin("film_playlist_relation","film.id","=","film_playlist_relation.film_id")
            -> leftJoin("playlists","playlists.id","=","film_playlist_relation.playlist_id")
            -> leftJoin("user_playlist_relation","playlists.id","=","user_playlist_relation.playlist_id")
            -> leftJoin("users","users.id","=","user_playlist_relation.user_id")
            -> where("users.email","=",$email) -> where("playlists.name","=","J'aime")
            -> get();
        // return view('filmupdate');
        echo($rst);
    }

    public function findHistory(Request $request){
        $email = $request -> input('email');
        $rst = DB::table("film")
            -> rightJoin("film_playlist_relation","film.id","=","film_playlist_relation.film_id")
            -> leftJoin("playlists","playlists.id","=","film_playlist_relation.playlist_id")
            -> leftJoin("user_playlist_relation","playlists.id","=","user_playlist_relation.playlist_id")
            -> leftJoin("users","users.id","=","user_playlist_relation.user_id")
            -> where("users.email","=",$email) -> where("playlists.name","=","History")
            -> get();
        // return view('filmupdate');
        echo($rst);
    }

    public function findViewed(Request $request){
        $email = $request -> input('email');
        $rst = DB::table("film")
            -> rightJoin("film_playlist_relation","film.id","=","film_playlist_relation.film_id")
            -> leftJoin("playlists","playlists.id","=","film_playlist_relation.playlist_id")
            -> leftJoin("user_playlist_relation","playlists.id","=","user_playlist_relation.playlist_id")
            -> leftJoin("users","users.id","=","user_playlist_relation.user_id")
            -> where("users.email","=",$email) -> where("playlists.name","=","j'ai vu")
            -> get();
        // return view('filmupdate');
        echo($rst);
    }

    public function findPlaylist(Request $request){
        $email = $request -> input('email');
        $rst = DB::table("film")
            -> rightJoin("film_playlist_relation","film.id","=","film_playlist_relation.film_id")
            -> leftJoin("playlists","playlists.id","=","film_playlist_relation.playlist_id")
            -> leftJoin("user_playlist_relation","playlists.id","=","user_playlist_relation.playlist_id")
            -> leftJoin("users","users.id","=","user_playlist_relation.user_id")
            -> where("users.email","=",$email) -> where("playlists.name","=","j'ai vu")
            -> get();
        // return view('filmupdate');
        echo($rst);
    }

    public function selectById(Request $request){
        $name = $request -> input('id');
        $db = DB::table('film');
        $rst = $db -> where('id', '=', $name) -> get();
        // return view('filmupdate');
        echo($rst);
    }

    public function addViewed(Request $request){
        $userId = $request -> input('userId');
        $filmId = $request -> input('filmId');
        $rst = DB::table("playlists")
            -> select('playlist_id')
            -> rightJoin("user_playlist_relation","playlists.id","=","user_playlist_relation.playlist_id")
            -> leftJoin("users","users.id","=","user_playlist_relation.user_id")
            -> where("users.id","=",$userId) -> where("playlists.name","=","j'ai vu")
            -> first();
        $db = DB::insert('insert into film_playlist_relation (film_id,playlist_id,create_time) values(?,?,?)',[$filmId, $rst->playlist_id, date("Y-m-d H:i:s")]);
        echo(1);
    }

    public function addFavorite(Request $request){
        $userId = $request -> input('userId');
        $filmId = $request -> input('filmId');
        $rst = DB::table("playlists")
            -> select('playlist_id')
            -> rightJoin("user_playlist_relation","playlists.id","=","user_playlist_relation.playlist_id")
            -> leftJoin("users","users.id","=","user_playlist_relation.user_id")
            -> where("users.id","=",$userId) -> where("playlists.name","=","j'aime")
            -> first();
        $db = DB::insert('insert into film_playlist_relation (film_id,playlist_id,create_time) values(?,?,?)',[$filmId, $rst->playlist_id, date("Y-m-d H:i:s")]);
        echo(1);
    }

    public function delFavorite(Request $request){
        $userId = $request -> input('userId');
        $filmId = $request -> input('filmId');
        $rst = DB::table("playlists")
            -> select('playlist_id')
            -> rightJoin("user_playlist_relation","playlists.id","=","user_playlist_relation.playlist_id")
            -> leftJoin("users","users.id","=","user_playlist_relation.user_id")
            -> where("users.id","=",$userId) -> where("playlists.name","=","j'aime")
            -> first();
        $db = DB::delete('delete from film_playlist_relation where film_id = ? and playlist_id = ?',[$filmId,$rst->playlist_id]);
        echo(1);
    }

    public function delViewed(Request $request){
        $userId = $request -> input('userId');
        $filmId = $request -> input('filmId');
        $rst = DB::table("playlists")
            -> select('playlist_id')
            -> rightJoin("user_playlist_relation","playlists.id","=","user_playlist_relation.playlist_id")
            -> leftJoin("users","users.id","=","user_playlist_relation.user_id")
            -> where("users.id","=",$userId) -> where("playlists.name","=","j'ai vu")
            -> first();
        $db = DB::delete('delete from film_playlist_relation where film_id = ? and playlist_id = ?',[$filmId,$rst->playlist_id]);
        echo(1);
    }
}
?>