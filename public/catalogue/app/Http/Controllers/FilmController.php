<?php

namespace App\Http\Controllers;

use DB;

class FilmController extends Controller
{
    public function add(){
        $db = DB::table('film');
        $rst = $db -> insert([
            [
                'name' => 'The Shawshank Redemption',
                'director' => 'FEI Fan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'The Godfathern',
                'director' => 'FEI Fan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Schindlers List',
                'director' => 'FEI Fan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
        dd($rst);
    }

    public function update(){
        $db = DB::table('film');
        $rst = $db -> where('id','=','1') -> update([  
            'name' => 'Test Update',                  
            'director' => 'Zhiwei',
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        dd($rst);
    }

    public function select(){
        $db = DB::table('film');
        $rst = $db -> get();
        dd($rst);
    }

    public function del(){
        $db = DB::table('film');
        $rst = $db -> where('id','=','9') -> delete();
        dd($rst);
    }
  
}
?>