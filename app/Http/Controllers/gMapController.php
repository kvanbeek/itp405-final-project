<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\gMaps;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;



class gMapController extends Controller
{
    //
    

    public function getEstimate(Request $request)
    {
        // $origin = $request->input('origin');
        // $destination = $request->input('destination');
        $origin = "Seattle";
        $destination = "San+Francisco";
        
        $gmaps = new gMaps();
        $results = $gmaps->getArrivalEstimate($origin, $destination);
        
        return [
            'results' => $results
        ];



       

    }


}
