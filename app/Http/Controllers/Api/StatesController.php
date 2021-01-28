<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\{StatesClass,CatSvgClass,GetResourceClass};

class StatesController extends Controller
{
    public function index($state = false){
        $state_class = new StatesClass();
        $states = $state_class->getStates();//returns ['state'=>['array of lgas']]
        return $states;
    }
}
