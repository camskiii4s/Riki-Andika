<?php

namespace App\Http\Controllers;

use App\Models\IdentitasModel;
use Illuminate\Http\Request;

class IndentitasController extends Controller
{
    public function index()
    {
        $identitas = IdentitasModel::get();
        return view('front.identitas.index',compact('identitas'));
    }
}
