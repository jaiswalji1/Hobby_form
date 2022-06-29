<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobby;

class HobbyController extends Controller
{
    public function submit_form(Request $request)
    {
        if($request->id!="0")
        {
            $new_survey=Hobby::find($request->id);

            $new_survey->name=$request->name;
            $new_survey->singing=$request->h1;
            $new_survey->dancing=$request->h2;
            $new_survey->indoor_games=$request->h3;
            $new_survey->outdoor_game=$request->h4;
            $new_survey->others=$request->h5;
            $new_survey->save();
        }
        else
        {
            $new_survey=new Hobby;

            $new_survey->name=$request->name;
            $new_survey->singing=$request->h1;
            $new_survey->dancing=$request->h2;
            $new_survey->indoor_games=$request->h3;
            $new_survey->outdoor_game=$request->h4;
            $new_survey->others=$request->h5;
            $new_survey->save();
        }

        return ["status"=>"success","data"=>$new_survey];
    }

    public function data()
    {
        $users=Hobby::all();
        return view('data',compact('users'));
    }
}
