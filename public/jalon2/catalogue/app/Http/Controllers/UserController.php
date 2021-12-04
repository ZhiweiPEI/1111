<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    use App\User;
    use App\Http\Controllers\UserController;
    use DB;

    class UserController extends Controller
    {
        /**
         * 显示给定用户的概要文件.
         *
         * @param  int  $id
         * @return View
         */
        public function login($id)
        {
            return view('user.profile', ['user' => User::findOrFail($id)]);
        }

        public function test2()
        {
            return 'hello test2';
        }

        public function test3(Request $request)
        {
            $name = $request -> input('name', 'Sally');
            $input = $request -> all();
            return $name;
        }
        public function test4(Request $request)
        {
            $email = $request -> input('email');
            $password = $request -> input('password');
            return $email . " " . $password;
        }

        public function add(Request $request){
            $name = $request -> input('name');
            $email = $request -> input('email');
            $telephone = $request -> input('tel');
            $db = DB::table('user');
            $rst = $db -> insert([
                [
                    'name' => $name,
                    'email' => $email,
                    'telephone' => $telephone
                ]
            ]);
            dd($rst);
        }

        public function update(){
            $db = DB::table('user');
            $rst = $db -> where('id','=','5') -> update([  
                'name' => 'Zhiwei',                  
                'email' => 'zhiwei@gmail.com'
            ]);
            dd($rst);
        }

        public function select(){
            $db = DB::table('user');
            $rst = $db -> get();
            dd($rst);
        }

        public function del(){
            $db = DB::table('user');
            $rst = $db -> where('id','=','9') -> delete();
            dd($rst);
        }

        public function selectIdByEmail(Request $request){
            $email = $request -> input('email');
            $db = DB::table('users');
            $rst = $db -> where('email', '=', $email) -> get();
            // return view('filmupdate');
            echo($rst);
        }

        public function selectById(Request $request){
            $id = $request -> input('id');
            $db = DB::table('users');
            $rst = $db -> where('id', '=', $id) -> get();
            // return view('filmupdate');
            echo($rst);
        }
    }