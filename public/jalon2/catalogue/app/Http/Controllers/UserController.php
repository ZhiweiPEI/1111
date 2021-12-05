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

        public function update(Request $request){
            $id = $request -> input('id');
            $name = $request -> input('username');
            $email = $request -> input('email');
            $enable = $request -> input('enable');
            $db = DB::table('users');
            $rst = $db -> where('id','=',$id) -> update([  
                'name' => $name,                  
                'email' => $email,
                'enable' => $enable
            ]);
            echo(1);
        }

        public function updateEnable(Request $request){
            $id = $request -> input('id');
            $db = DB::table('users');
            $enable = $db -> select('enable') -> where('id','=',$id) -> first();
            if($enable -> enable > 0){
                $enable = 0;
            }
            else if($enable -> enable == 0){
                $enable = 1;
            }
            $rst = $db -> where('id','=',$id) -> update([  
                'enable' => $enable
            ]);
            echo(1);
        }

        public function select(Request $request){
            $name = $request -> input('username');
            $email = $request -> input('email');
            $db = DB::table('users');
            if(!empty($name)){
                $rst = $db -> where("name","like",$name);
            }
            if(!empty($email)){
                $rst = $db -> where("email","like",$email);
            }
            $rst = $db -> get();
            echo($rst);
        }

        public function getCount(Request $request){
            $name = $request -> input('username');
            $email = $request -> input('email');
            $db = DB::table('users');
            if(!empty($name)){
                $rst = $db -> where("name","like",$name);
            }
            if(!empty($email)){
                $rst = $db -> where("email","like",$email);
            }
            $rst = $db -> count();
            echo($rst);
        }

        public function del(Request $request){
            $id = $request -> input("id");
            $db = DB::table('users');
            $rst = $db -> where('id','=',$id) -> delete();
            echo(1);
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