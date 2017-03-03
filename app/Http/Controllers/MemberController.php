<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Kereta;
use App\Rute;
use App\Objek;
use \Storage;
use \File;


class MemberController extends Controller
{
    function __construct()
    {
    	$this->middleware('auth');
    }
    public function add_train()
    {
        return view('member.add_train');
    }
    public function save_train(Request $r)
    {
        $a = new Kereta;

        $a->nama = $r->nama;
        $a->jenis = $r->jenis;
        $a->seri = $r->seri;
        $a->subjenis = $r->subjenis;
        $a->status = $r->status;
        $a->creator = $r->creator;
        $a->reskin = $r->reskin;
        $a->kuid = $r->kuid;
        $a->realscale = $r->realscale;
        $a->description = $r->description;
        $a->id_user = Auth::user()->id;
        $a->open = $r->open;

        $a->save();


        if($r->file('cdp_files')){

            $folder = "content/train/".$a->status."/".md5($a->id);
            $file = $r->file('cdp_files');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.".".$extension,  File::get($file));
        }
        if($r->file('photo')){
            $folder = "public/photo/train/".$a->status."/".md5($a->id);
            $file = $r->file('photo');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.'.'.$extension,  File::get($file));
            $a->photo = url(Storage::url($folder."/".$a->id.'.'.$extension));
            $a->save();
        }

        return redirect()->route('member');
    }
    public function delete_train($id)
    {
        Kereta::where('id',$id)->delete();

        return redirect()->route('member');
    }
    public function add_rute()
    {
        return view('member.add_rute');
    }
    public function save_rute(Request $r)
    {
        $a = new Rute;

        $a->nama = $r->nama;
        $a->status = $r->status;
        $a->creator = $r->creator;
        $a->kuid = $r->kuid;
        $a->realscale = $r->realscale;
        $a->description = $r->description;
        $a->id_user = Auth::user()->id;
        $a->open = $r->open;

        $a->save();


        if($r->file('cdp_files')){

            $folder = "content/rute/".$a->status."/".md5($a->id);
            $file = $r->file('cdp_files');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.".".$extension,  File::get($file));
        }
        if($r->file('photo')){
            $folder = "public/photo/rute/".$a->status."/".md5($a->id);
            $file = $r->file('photo');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($folder."/".$a->id.'.'.$extension,  File::get($file));
            $a->photo = url(Storage::url($folder."/".$a->id.'.'.$extension));
            $a->save();
        }

        return redirect()->route('member');
    }
    public function delete_rute($id)
    {
        Rute::where('id',$id)->delete();

        return redirect()->route('member');
    }
    public function add_objek()
    {
    	return view('member.add_objek');
    }
    public function save_objek(Request $r)
    {
    	$a = new Objek;

    	$a->nama = $r->nama;
    	$a->status = $r->status;
    	$a->creator = $r->creator;
    	$a->kuid = $r->kuid;
    	$a->realscale = $r->realscale;
    	$a->description = $r->description;
        $a->id_user = Auth::user()->id;
    	$a->open = $r->open;

    	$a->save();


    	if($r->file('cdp_files')){

    		$folder = "content/objek/".$a->status."/".md5($a->id);
			$file = $r->file('cdp_files');
			$extension = $file->getClientOriginalExtension();
			Storage::disk('local')->put($folder."/".$a->id.".".$extension,  File::get($file));
    	}
    	if($r->file('photo')){
    		$folder = "public/photo/objek/".$a->status."/".md5($a->id);
			$file = $r->file('photo');
			$extension = $file->getClientOriginalExtension();
			Storage::disk('local')->put($folder."/".$a->id.'.'.$extension,  File::get($file));
    		$a->photo = url(Storage::url($folder."/".$a->id.'.'.$extension));
			$a->save();
    	}

    	return redirect()->route('member');
    }
    public function delete_objek($id)
    {
        Objek::where('id',$id)->delete();

        return redirect()->route('member');
    }
}
