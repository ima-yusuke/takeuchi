<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class Register extends Controller
{
    //

    public function login_page()
    {

        return view("login-page");
    }

    public function login_try(Request $request)
    {
        $pass = $request->password;

        $sessionPass = session('password');

        if ($pass == 12345) {
            // パスワードが正しい場合はセッションに保存
            session(['password' => $pass]);
            return redirect()->route('open_home');
        }else{
            // パスワードが間違っている場合はセッションを破棄してログインページにリダイレクト
            session()->forget('password');
            return redirect()->route('login_page')->with('error', 'パスワードが間違っています');
        }
    }

    public function open_home()
    {
        if(session('password')!=null){
            return view("home");
        }else{
            return view("login-page");
        }
//        return view("home");
    }

    public function open_register()
    {
        if(session('password')!=null){
            return view("register");
        }else{
            return view("login-page");
        }
    }

    public function add_person(Request $request)
    {
        $person = new Person();
        $person->name = $request->name;
        $person->address = $request->address;
        $person->price = $request->price;
        $person->note = $request->note;
        $person->save();

        return view("register");
    }


    public function open_lists()
    {
//        $data = Person::all();
        if(session('password')!=null){

            $url = public_path().'/info.json';
            $jsonString = file_get_contents($url);

// JSONを連想配列に変換します
            $data = json_decode($jsonString, true);
//            $data = $this->data;
            return view("lists",compact("data"));
        }else{
            return view("login-page");
        }

    }

    public function search_info($name)
    {
        $selectedData = [];

        $url = public_path().'/info.json';

        // JSONファイルを読み込みます
        $jsonString = file_get_contents($url);

// JSONを連想配列に変換します
        $data = json_decode($jsonString, true);
//        $data = $this->data;

        foreach ($data as $idx=>$value){
            if(strpos($value["name"], $name) !== false){
                $selectedData[] = $value;
            }
        }

        return $selectedData;
    }

    public function search_data(Request $request)
    {
       $selectedData = $this->search_info($request->name);
        /* テーブルから全てのレコードを取得する */
//        $selectedData  = Person::query();
        // DBの値で半角全角スペースが入っているものを空文字に置換して検索
//        $selectedData->where(function ($selectedData) use ($name) {
//            $where = "replace(name, ' ','') like " . "'%" . $name . "%'";
//            $selectedData->whereRaw($where);
//            $orWhere = "replace(name, '　','') like " . "'%" . $name . "%'";
//            $selectedData->orWhereRaw($orWhere);
//        })->get();
//        $selectedData = $selectedData->get()[0];


        return view("home",compact("selectedData"));
    }
}
