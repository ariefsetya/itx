<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function lokomotif($cc)
    {
        $data['search'] = \App\Kereta::where('jenis','lokomotif')->where('open','1')->whereStatus(!'Private')->where('subjenis',$cc)->orderBy('updated_at','desc')->paginate(12);
        $data['query'] = "Lokomotif ".$cc;
        $data['point'] = 2;
        return view('blogs-kereta')->with($data);
    }
    public function kereta($cc)
    {
        $data['search'] = \App\Kereta::where('jenis','kereta')->where('open','1')->whereStatus(!'Private')->where('subjenis',$cc)->orderBy('updated_at','desc')->paginate(12);
        $data['query'] = "Kereta ".$cc;
        $data['point'] = 2;
        return view('blogs-kereta')->with($data);
    }
    public function gerbong($cc)
    {
        $data['search'] = \App\Kereta::where('jenis','gerbong')->where('open','1')->whereStatus(!'Private')->where('subjenis',$cc)->orderBy('updated_at','desc')->paginate(12);
        $data['query'] = "Gerbong ".$cc;
        $data['point'] = 2;
        return view('blogs-kereta')->with($data);
    }
    public function rute($cc)
    {
        $data['search'] = \App\Rute::where('open','1')->whereStatus(!'Private')->where('status',$cc)->orderBy('updated_at','desc')->paginate(12);
        $data['query'] = "Rute ".str_replace(array('free','plu','pay','private'), array('Freeware','Private Limited User','Payware','Private'), $cc);
        $data['point'] = 2;
        return view('blogs-rute')->with($data);
    }
    public function objek($cc)
    {
    	$data['search'] = \App\Objek::where('open','1')->whereStatus(!'Private')->where('status',$cc)->orderBy('updated_at','desc')->paginate(12);
    	$data['query'] = "Objek ".str_replace(array('free','plu','pay','private'), array('Freeware','Private Limited User','Payware','Private'), $cc);
    	$data['point'] = 2;
    	return view('blogs-objek')->with($data);
    }
}
