<?php

namespace App\Http\Controllers;
use App\Mediacenter;
use App\Team;
use App\Partner;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
    	//$vid = Mediacenter::findorFail(1);
    	$vid = Mediacenter::all()->first();
        $pt = Partner::all();
        $ptCount = count($pt);
        $tm = Team::all();
    	$teamCount = count($tm);
    	return view('index', ['url'=>$vid, 'team'=>$tm, 'teamCount'=>$teamCount, 'pt'=>$pt, 'ptCount'=>$ptCount]);
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
