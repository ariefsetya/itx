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

    public function login(Request $r)
    {
        $code = $r->input('code');

        $curl = new \Curl\Curl();
        $curl->get('https://graph.accountkit.com/v1.1/access_token',array(
            'grant_type' => 'authorization_code',
            'code' => $code,
            'access_token' => 'AA|1738905326439099|8915d427247f663421c900f4cb25df0f'
        ));
        
        if ($curl->error) {
            echo $curl->error_code;
        }
        else {
            $response = $curl->response;
        }

        $decoded_json = json_decode($response);
        $access_token = $decoded_json->access_token;



        $curl = new \Curl\Curl();
        $curl->get('https://graph.accountkit.com/v1.1/me',array(
            'access_token' => $access_token,
        ));
        
        if ($curl->error) {
            echo $curl->error_code;
        }
        else {
            $response = $curl->response;
        }

        var_dump($response);

    }
}
