<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Classes\{CategoryClass,StatesClass};

class AdsController extends Controller
{
    public function ads($category = false, $subcategory = false){
        $cat_class = new CategoryClass;
        if(is_numeric($category)){//means category is an id
            $ads = Ad::findOrFail($category);
        }//end if user_id and is numeric
        elseif($category == 'get_categories'){
            $new_categories = [];
            $categories = $cat_class->get_category_list();
            foreach($categories as $key => $category){
                $key = str_replace('_-', ', ', $key);
                $key = str_replace('_', ' ', $key);
                $key = ucwords(str_replace('-', ' & ', $key));
                $new_categories[$key] = $category;
            }
            return $new_categories;
        }
        elseif($cat_class->is_category($category)){
            $ads = Ad::where('category', $category)->get();
            if($subcategory){
                $sub_ads = Ad::where('category', $category)->where('subcategory', $subcategory)->get();
                if(count($sub_ads) > 0){
                    $ads = $sub_ads;
                }
            }
        }else{
            $ads = Ad::get();
        }
        return $ads;
    }
}
