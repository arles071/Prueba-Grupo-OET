<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends BaseController
{
    public function index(){
        $cities = City::orderBy('city')->get();
        return $this->sendResponse($cities, 'Successfully created person');
    }
}
