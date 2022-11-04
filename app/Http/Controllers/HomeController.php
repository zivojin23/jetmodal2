<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Form;


class HomeController extends Controller
{
    public function index()
    {

        return view('welcome', [
            'user' => Auth::user()
        ]);
    }

    public function myProjects()
    {
        return view('myprojects', [
            'user'  => Auth::user()
        ]);
    }
}
