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

    public function open_lists()
    {
        $data = Person::all();
        return view("lists",compact("data"));
    }

    public function search_data(Request $request)
    {
        /* テーブルから全てのレコードを取得する */
        $selectedData  = Person::query();
        $name = $request->name;

        // DBの値で半角全角スペースが入っているものを空文字に置換して検索
        $selectedData->where(function ($selectedData) use ($name) {
            $where = "replace(name, ' ','') like " . "'%" . $name . "%'";
            $selectedData->whereRaw($where);
            $orWhere = "replace(name, '　','') like " . "'%" . $name . "%'";
            $selectedData->orWhereRaw($orWhere);
        })->get();

        $selectedData = $selectedData->get()[0];
        return view("home",compact("selectedData"));
    }
}
