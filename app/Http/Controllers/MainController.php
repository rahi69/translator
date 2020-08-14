<?php

namespace App\Http\Controllers;

use App\Category;
use App\Language;
use App\Price;
use App\Type;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){

         $categories=Category::all();
         $languages=Language::where('id','<',3)->get();
         $price=Price::find('1');
         $types=Type::all();

        return view('home.index',compact('categories','languages','types','price'));
    }

    public function language_search(Request $request){

        if ($request->ajax()) {

            $category=Category::where('id',$request->category_id)->first();
            $languages =$category->languages()->get();

                $output=null;
                foreach ($languages as $row) {


                    // concatenate output to the array
                    $output .= '<option value="' . $row->id . '"  class="" style="text-align: right" id="' . $row->id . ' ">' . $row->title . '</option>';
                }

            return ['result_search' => $output];
        }

    }

    public function estimation(Request $request){

        if ($request->ajax()) {

            $unit = Price::where('category_id',$request->category_id)
                ->where('type_id',$request->type_id)
                ->where('language_id',$request->language_id)->first();

             $price['normal']=$unit->category->name.' '.'معمولی';
             $price['good']=$unit->category->name.' '.'خوب';
             $price['excellent']=$unit->category->name.' '.'عالی';

            if ($unit->normalmin != null) {

                $price['normalmin'] = $request->count * $unit->normalmin;
                $price['normalmax'] = $request->count * $unit->normalmax;

            }
             else{
                $price['normalmin'] = '--';
                $price['normalmax'] = '--';
             }
            if ($unit->goodmin != null) {

                $price['goodmin'] = $request->count * $unit->goodmin;
                $price['goodmax'] = $request->count * $unit->goodmax;

            }
             else{
                 $price['goodmin'] = '--';
                 $price['goodmax'] = '--';
             }
            if ($unit->excellentmin != null) {

                $price['excellentmin'] = $request->count * $unit->excellentmin;
                $price['excellentmax'] = $request->count * $unit->excellentmax;

            }
             else{
                 $price['excellentmin'] = '--';
                 $price['excellentmax'] = '--';
             }
            return ['result' =>$price['normal'],$price['good'],$price['excellent'],$price['normalmin'],$price['normalmax']
            ,$price['goodmin'],$price['goodmax'],$price['excellentmin'],$price['excellentmax']];

        }

    }

}
