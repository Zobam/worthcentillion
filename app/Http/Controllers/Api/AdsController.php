<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Classes\{CategoryClass,StatesClass};

class AdsController extends Controller
{
    public function ads($user_id = false, $ad_id = false){
        if($user_id && is_numeric($user_id)){
            if($ad_id == "count"){
                return Ad::where('user_id',$user_id)->count();
            }
            return Ad::where('user_id',$user_id)->get();
        }//end if user_id and is numeric
        else{
            switch($user_id){
                case "categories":
                    $category_name = $ad_id;
                    $cat_class = new CategoryClass();
                    if($cat_class->isCategory($category_name)){
                        return $cat_class->sub_category_list;
                    }
                    else{
                        return $ad_id. " is not a known category";
                    }
                break;
                case "states":
                    $state = $ad_id;
                    $state_class = new StatesClass();
                    if($state_class->isState(ucwords($state))){
                        return $state_class->getLga();//returns ['state'=>['array of lgas']]
                        //return  $state_class->current_state;
                    }
            }
        }
    }
}
