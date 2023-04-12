<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class profileController extends Controller
{
    public function inputSkillSheet(){
        return view('index');
    }

    public function outputSkillSheet(){
        $profile = Member::get();

        return view('profile')
            ->with('profile', $profile[0]);
    }
}
