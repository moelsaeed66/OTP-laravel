<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyCodeController extends Controller
{

    public function index()
    {
        return view('auth.confirm-password');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user=auth()->user();
        if($user->code ==$request->input('code'))
        {
            $user->resetCode();
            return redirect()->route('dashboard');

        }

        return redirect()->back()->withErrors(['code'=>'code not valid']);


    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
