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

        public function add(){
            $db = DB::table('user');
            $rst = $db -> insert([
                [
                    'name' => 'FeiFan',
                    'email' => 'feifan@gmail.com',
                    'telephone' => '1234567890'
                ],
                [
                    'name' => 'FeiFanFan',
                    'email' => 'feifanfan@gmail.com',
                    'telephone' => '1234567890'
                ],
                [
                    'name' => 'FeiFeiFan',
                    'email' => 'feifeifan@gmail.com',
                    'telephone' => '1234567890'
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
    }