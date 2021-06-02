<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Real_Estate;
use Illuminate\Support\Facades\Validator;

class RealEstateController extends Controller
{
    public function show_single_property_information($property_id){
        $property = Real_Estate::find($property_id);
        if (!$property)
            return redirect('');

//لازم تجيب ال _id حصرا ليشتغل
        $property = Real_Estate::with(['get_town' => function($m){
            $m->select('name', 'id');
        },
        'get_city' => function ($q) {
            $q->select('name', 'id');
        }])->find($property_id);

        return view('property-single')->with('property', $property);
    }
}
