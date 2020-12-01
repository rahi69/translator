<?php

namespace App\Http\Controllers;

use App\Category;
use App\Discount;
use App\Language;
use App\Price;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{

    public function index(){

         $categories=Category::all();
         $languages=Language::where('id','<',3)->get();
         $prices=Price::where('category_id',1)->where('type_id',1)->where('language_id',1)->get();
         $types=Type::all();

        return view('home.index',compact('categories','languages','types','prices'));
    }

    public function language_search(Request $request){

        if ($request->ajax()) {

            $category=Category::where('id',$request->category_id)->first();
            $languages =$category->languages()->get();

            $output=null;
            $locale=session()->get('locale');
                foreach ($languages as $row) {


                    // concatenate output to the array
                    $output .= '<option value="' . $row->id . '"  class="" style="text-align: right" id="' . $row->id . ' ">' . ($locale=='ar'? $row->title:$row->en_title ). '</option>';
                }

            return ['result_search' => $output];
        }

    }

    public function estimation(Request $request){

        if ($request->ajax()) {

            $units = Price::where('category_id',$request->category_id)
                ->where('type_id',$request->type_id)
                ->where('language_id',$request->language_id)->get();
            $discounts=Discount::where('type_id',$request->type_id)->get();
            $dis=0;
            foreach ($discounts as $discount){
              if ($discount->count <= $request->count){
                  $dis=1- $discount->percent/100;
              }
            }

            $price['normal']=null;
            $price['good']=null;
            $price['excellent']=null;

            $locale=session()->get('locale');

           foreach ($units as $unit){
              $price[$unit->level->en_name]=($locale=='ar'? $unit->category->name.' '.$unit->level->name :ucfirst($unit->category->en_name.' '.$unit->level->en_name));
              $price[$unit->level->en_name.'min']=$unit->value_min * $request->count ;
              $price[$unit->level->en_name.'max']=$unit->value_max * $request->count ;
              $price[$unit->level->en_name.'_dis_min']=round($unit->value_min * $request->count * $dis) ;
              $price[$unit->level->en_name.'_dis_max']=round($unit->value_max * $request->count * $dis) ;
           }




            return [$price,$dis];

        }

    }

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
       // dd($locale);
        return redirect()->back();
    }

    public function determine(Request $request){

        if ($request->ajax()) {
            $locale=session()->get('locale');
            $res=null;

            if($request->type_id==1){
                ($locale=='ar'? $res['count']='چند کلمه؟':$res['count']='a few words?' );
                ($locale=='ar'? $res['word']='کلمه':$res['word']='word' );
            }
            else{
                ($locale=='ar'? $res['count']='چند دقیقه؟':$res['count']='a few minutes?' );
                ($locale=='ar'? $res['word']='دقیقه':$res['word']='minute' );
            }
            return [$res];

        }
    }

}
