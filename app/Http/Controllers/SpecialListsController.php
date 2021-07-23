<?php

namespace App\Http\Controllers;

use App\Models\SpecialList;
use Illuminate\Http\Request;

class SpecialListsController extends Controller
{
    public function store(Request $request)
    {
        $body =  $request->all();
        $specialList = new specialList;
        $specialList->user_id = $body["user_id"];
        $specialList->a_time = $body["a_time"];
        $specialList->a_date = $body["a_date"];
        $specialList->a_code = $body["a_code"];
        $specialList->status = false;
        $specialList->save();

        //dd(request()->all());
        
        return redirect();
    }
}
