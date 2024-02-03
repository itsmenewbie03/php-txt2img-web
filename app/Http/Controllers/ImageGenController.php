<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageGenController extends Controller
{
    public function genImage(Request $request)
    {
        $external_endpoint = "https://weopi.com/bot";
        $prompt = $request->input("prompt");

        $resp = Http::post($external_endpoint, [
            "searchText" => "#image $prompt"
        ]);
        $img_src = $resp->json("text");
        preg_match('/(?<=src=")(.*)(?="\s)/', $img_src, $matches);
        $data  = [
            "img_url" => $matches[1] ?? $img_src
        ];
        return response()->json($data);
    }
}
