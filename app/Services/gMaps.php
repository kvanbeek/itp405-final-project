<?php

namespace App\Services;
use Cache;

class gMaps {
    public function getArrivalEstimate($origin, $destination)
    {
        

        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=$origin&destinations=$destination";
        $estimate = $this->gMapsUrl($url);

        $jsonEstimate = json_decode($estimate);

        return $jsonEstimate;
        

    }

    protected function gMapsUrl($gMapUrl)
    {
        $jsonString = file_get_contents($gMapUrl);
        return $jsonString;
    }
}