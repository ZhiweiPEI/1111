<?php

namespace App\Http\Controllers;

use DB;

class CategoryController extends Controller
{
    public function add(){
        $db = DB::table('categories');
        $rst = $db -> insert([
            [
                'name' => 'Action',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Comedy',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Fiction',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
        dd($rst);
    }

    public function update(){
        $db = DB::table('categories');
        $rst = $db -> where('id','=','1') -> update([  
            'name' => 'Test Update',                  
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        dd($rst);
    }

    public function select(){
        $db = DB::table('categories');
        $rst = $db -> get();
        dd($rst);
    }

    public function del(){
        $db = DB::table('categories');
        $rst = $db -> where('id','=','9') -> delete();
        dd($rst);
    }
  
}
?>