<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Validator, Input, Redirect; 
class TestController extends Controller
{
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required|min:3',
        'body' => 'required|min:3'
    ]);

    if ($validator->fails()) {
        return back()->with('error', $validator->messages()->all()[0])->withInput();
    }
}
}
