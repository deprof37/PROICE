<?php

namespace App\Http\Controllers;
use App\Mediacenter;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
    	//$vid = Mediacenter::findorFail(1);
    	$vid = Mediacenter::all()->first();
    	
    	return view('index', ['url'=>$vid]);
    }

    public function services(){
    	return view('services');
    }

    public function medias(){
    	$media = Mediacenter::all();
    	return view('mediasCenter', ['media'=>$media]);
    }

    public function industries(){
        return view('industries');
    }

    public function careers(){
        return view('careers');
    }
}
