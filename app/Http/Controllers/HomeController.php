<?php

namespace App\Http\Controllers;
use APP\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $est= User::all();
        return view('home', compact('est'));
    }
    public function dashboard()
    {
        $est= User::all();
        $fin= User::select('id')->orderBy('id','desc')->take(1)->get();
        return view('dashboard', compact('est'), ['fin'=>$fin]);
    }

    public function Menu()
    {
        //Payment Intent
        return view('Menu');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function cursos()
    {
        return view('cursos');
    }

    public function DW()
    {
        return view('cursos.DesarrolloWeb');
    }

    public function CS()
    {
        return view('cursos.CS');
    }

    public function RDC()
    {
        return view('cursos.RDC');
    }

    public function INF()
    {
        return view('cursos.INF');
    }

    public function ELEC()
    {
        return view('cursos.ELEC');
    }

}