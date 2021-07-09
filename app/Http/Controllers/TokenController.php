<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewestTokens;

class TokenController extends Controller
{
    public function newest() {
        $new_tokens = NewestTokens::all();
        return view('tokens');
    }
}
