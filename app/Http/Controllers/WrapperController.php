<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function contents(){
        $json = Http::get('https://ap.api.riotgames.com/val/content/v1/contents?api_key=RGAPI-4ff5d333-dfe7-42dc-aace-4957df9aff73')->json();
        return response()->json($json);
    }

    public function leaderboardsByActId($actid){
        $json = Http::get('https://ap.api.riotgames.com/val/ranked/v1/leaderboards/by-act/'.$actid.'?size=200&startIndex=0&api_key=RGAPI-4ff5d333-dfe7-42dc-aace-4957df9aff73')->json();
        return response()->json($json);
    }

    public function platformdata(){
        $json = Http::get('https://ap.api.riotgames.com/val/status/v1/platform-data?api_key=RGAPI-4ff5d333-dfe7-42dc-aace-4957df9aff73')->json();
        return response()->json($json);
    }

    public function bundles(){
        $json = Http::get('https://valorant-api.com/v1/bundles')->json();
        return response()->json($json);
    }

    public function maps(){
        $json = Http::get('https://valorant-api.com/v1/maps')->json();
        return response()->json($json);
    }
}