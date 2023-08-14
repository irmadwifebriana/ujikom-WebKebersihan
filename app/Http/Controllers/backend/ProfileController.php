<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function ProfileView(){
        // dd('berhasil');
        return view('backend.user.view_profile');
    }
}
