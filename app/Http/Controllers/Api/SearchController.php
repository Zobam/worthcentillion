<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ad;

class SearchController extends Controller
{
    public function search($str){
        return Ad::search($str)->get();
        //return strtoupper($str);
    }
}
