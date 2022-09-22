<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function developer(Request $request)
    {
        $message = 'done';
        return response()->json(['message'=>$message]);
    }
}