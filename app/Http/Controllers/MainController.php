<?php

namespace App\Http\Controllers;

use App\Category;
use App\Price;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){
        $categories=Category::where('id','!=',2)->get();

        return view('home.index',compact('categories'));
    }
    public function estimation(Request $request){

        $unit=Price::where($request->category_id,'category')
          ->where($request->type_id,'type_id')
          ->where($request->language_id,'language_id')->first();
        if ($unit->normalmin!=null){
            $price['normalmin']=$request->count*$unit->normalmin;
            $price['normalmax']=$request->count*$unit->normalmax;
        }
        if ($unit->goodmin!=null){
            $price['normalmin']=$request->count*$unit->normalmin;
            $price['normalmax']=$request->count*$unit->normalmax;
        }
        if ($unit->exselentmin!=null){
            $price['normalmin']=$request->count*$unit->normalmin;
            $price['normalmax']=$request->count*$unit->normalmax;
        }

    }
}
