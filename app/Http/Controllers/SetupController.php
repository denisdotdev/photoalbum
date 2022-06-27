<?php
namespace App\Http\Controllers;

class SetupController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('setup.index');
    }
}
