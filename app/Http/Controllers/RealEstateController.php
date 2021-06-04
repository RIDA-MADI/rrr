<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Real_Estate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RealEstateController extends Controller
{
    public function show_single_property_information($property_id)//لعرض معلومات العقار الفردية
    {
        $property = Real_Estate::find($property_id);
        if (!$property)
            return redirect()->back();

//لازم تجيب ال _id حصرا ليشتغل
        $property = Real_Estate::with(['get_town' => function ($m) {
            $m->select('name', 'id');
        },
            'get_city' => function ($q) {
                $q->select('name', 'id');
            }])->find($property_id);

        return view('property-single')->with('property', $property);
    }


    public function search_properties(Request $R)
    {
        /////////////////////for price/////////////////////
        if ($R->searchPrice1 == null) {
            $R->searchPrice1 = 0;
        }
        if ($R->searchPrice2 == null) {
            $R->searchPrice2 = 20000000000;
        }
        //////////////////////////////////////////
        //////////////rent and sale/////////////////

        if ($R->searchForRent_sale == null) {
            $R->searchForRent_sale = '%';
        }
        ///////////////////////////////////////////
        ///////////////for type///////////////////
        if ($R->searchType == null) {
            $R->searchType = '%';
        }
        ///////////////////////////////////////////////
        $propert = DB::table('real_estates')
            ->where('offer', '!=', 1)
            ->where('auction', '!=', 1)
            ->where('price', '>=', $R->searchPrice1)
            ->where('price', '<=', $R->searchPrice2)
            ->where('for_sale', '=', $R->searchForRent_sale)// in view , 1=>for sale , and 0=>rent
            ->where('type', 'like', $R->searchType)
            ->where('city_id', '=', $R->searchCity)
            ->where('town_id', '=', $R->searchTown)
            ->get();

        return response()->json($propert);


    }


}
