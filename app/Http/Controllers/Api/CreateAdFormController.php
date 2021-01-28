<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\{CatSvgClass,FieldsClass};
use App\Ad;

class CreateAdFormController extends Controller
{
    public function getFields($category,$subcategory=false){
        $fields = new FieldsClass;
        $needed_fields = $fields->getFields($category,$subcategory);
        $table_model = array_pop($needed_fields);
        $my_str = "Below is the list of variables and their values <br>";
        if(count($needed_fields)>0){
            $formatted_fields = $fields->formatFields($needed_fields);
        }
        //$ad_class = 'Ad';
        $ad = "App\\$table_model";
        $ad1 = $ad::first();
        //$adPT = $ad1->ad;
        //return $ad1;
        return $needed_fields;
    }//end getFields
}
