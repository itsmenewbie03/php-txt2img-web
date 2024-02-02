<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageGenController extends Controller
{
    public function genImage(Request $request)
    {
        $data  = [
            "img_url" => "https://powersj.io/img/arch.png"
        ];
        return response()->json($data);
    }
}
