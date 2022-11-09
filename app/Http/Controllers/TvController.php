<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tv;
use App\Models\Type;

class TvController extends Controller
{
    public function NewTv()
    {
        return view("new_tv");
    }

    public function StoreTv(REQUEST $request)
    {
        
        $type = $request->type;
        $types = Type::where("id",$type)->get();
        $type_id = 0;
        foreach($types as $type)
            $type_id = $type->id;


        $tv = new Tv;
        $tv->name=$request->name;
        $tv->size=$request->size;
        $tv->type_id= $type_id;
        $tv->save();

        $request->session()->flash("succes","The writing was successful");
        return redirect("/new-tv");
    }

    public function TvData()
    {
        $tvs = Tv::with("type")->get();
        foreach ($tvs as $tv) 
        {
            return view("list_tv", [

                "tvs" => $tvs
             ]); 

        }
    }
    

    public function TvDataFive()
    {
        $tvs = Type::find( 5 )->tv;

        return view("list_tv", [

           "tvs" => $tvs
        ]); 
    }
}
