<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class Register extends Controller
{

    //---------------------[show login]----------------------------------

    public function login_page()
    {

        return view("login-page");
    }

    //---------------------[login機能]----------------------------------
    public function login_try(Request $request)
    {
        $pass = $request->password;

        if ($pass == 1102) {
            // パスワードが正しい場合はセッションに保存
            session(['password' => $pass]);
            return redirect()->route('open_home');
        }else{
            // パスワードが間違っている場合はセッションを破棄してログインページにリダイレクト
            session()->forget('password');
            return redirect()->route('login_page')->with('error', 'パスワードが間違っています');
        }
    }

    //---------------------[show 名前検索]----------------------------------
    public function open_home()
    {
        if(session('password')!=null){
            return view("home");
        }else{
            return view("login-page");
        }
    }
    //---------------------[search 名前]----------------------------------

    public function search_info($name)
    {
        $selectedData = [];

        $url = public_path().'/info.json';

        // JSONファイルを読み込みます
        $jsonString = file_get_contents($url);

        // JSONを連想配列に変換します
        $data = json_decode($jsonString, true);

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

        return view("home",compact("selectedData"));
    }

    //---------------------[show 住所]----------------------------------

    public function getAllAddress()
    {
        $addressOptions = [];

        $url = public_path().'/info.json';

        // JSONファイルを読み込みます
        $jsonString = file_get_contents($url);

        // JSONを連想配列に変換します
        $data = json_decode($jsonString, true);

        foreach ($data as $value) {
            // $addressOptions に $value["address"] が含まれていない場合のみ追加する
            if (!in_array($value["address"], $addressOptions)) {
                $addressOptions[] = $value["address"];
            }
        }

        return $addressOptions;
    }

    public function open_address()
    {
        if(session('password')!=null){

            $addressOptions = $this->getAllAddress();

            return view("search-address",compact("addressOptions"));
        }else{
            return view("login-page");
        }
    }

    //---------------------[search 住所]----------------------------------

    public function search_address(Request $request)
    {
        $selectedData = [];

        $url = public_path().'/info.json';

        // JSONファイルを読み込みます
        $jsonString = file_get_contents($url);

        // JSONを連想配列に変換します
        $data = json_decode($jsonString, true);

        foreach ($data as $idx=>$value){
            if($value["address"] == $request->address){
                $selectedData[] = $value;
            }
        }

        $addressOptions = $this->getAllAddress();

        return view("search-address",compact("selectedData","addressOptions"));
    }

    //---------------------[show 一覧]----------------------------------
    public function open_lists()
    {
        // $data = Person::all();
        if(session('password')!=null){

            $url = public_path().'/info.json';
            $jsonString = file_get_contents($url);

            // JSONを連想配列に変換します
            $data = json_decode($jsonString, true);
            return view("lists",compact("data"));

        }else{
            return view("login-page");
        }

    }
}
