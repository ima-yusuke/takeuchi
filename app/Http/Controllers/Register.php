<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;

class Register extends Controller
{
    //

    public function open_home()
    {
        return view("home");
    }

    public function open_register()
    {
        return view("register");
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

    public $data =[
    ["id"=>1,"name"=>"今井祐輔","address"=>"a","note1"=>"テスト","note2"=>"こんにちは","money"=>"3000円"],
    ["id"=>2,"name"=>"竹内千速","address"=>"b","note1"=>"こんばんは！","note2"=>"あはよう！","money"=>"8000円"],
    ["id"=>3,"name"=>"山田太郎","address"=>"c","note1"=>"テスト","note2"=>"こんにちは","money"=>"4000円"],
    ["id"=>4,"name"=>"中村俊輔","address"=>"d","note1"=>"テスト","note2"=>"こんにちは","money"=>"5000円"],
    ["id"=>5,"name"=>"島ちはや","address"=>"e","note1"=>"this is","note2"=>"sunny","money"=>"8000円"],
    ["id"=>6,"name"=>"ネイマール","address"=>"d","note1"=>"テスト","note2"=>"こんにちは","money"=>"5000円"],


    ];

    public function open_lists()
    {
//        $data = Person::all();

        $data = $this->data;

        return view("lists",compact("data"));
    }

    public function search_data(Request $request)
    {
       $selectedData = null;
       $name = $request->name;

       $data = $this->data;

       foreach ($data as $idx=>$value){
           if($value["name"]===$name){
               $selectedData = $value;
           }
       }
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
